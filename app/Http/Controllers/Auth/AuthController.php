<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(Request $request): RedirectResponse|JsonResponse|\Illuminate\Contracts\View\View
    {
        if (Auth::guard('admin')->check()) {
            if ($this->isAjaxRequest($request)) {
                return response()->json([
                    'redirect' => route('admin.dashboard'),
                ], Response::HTTP_CONFLICT);
            }

            return redirect()->route('admin.dashboard');
        }

        if ($this->isAjaxRequest($request)) {
            return response()->json([
                'redirect' => route('login'),
            ]);
        }

        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = true;
        $credentials = [
            'email' => $validated['email'],
            'password' => $validated['password'],
            'is_active' => true,
        ];

        if (! Auth::guard('admin')->attempt($credentials, $remember)) {
            if ($this->isAjaxRequest($request)) {
                return response()->json([
                    'message' => 'The provided credentials do not match our records.',
                    'errors' => [
                        'email' => ['The provided credentials do not match our records.'],
                    ],
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            return back()
                ->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        if ($this->isAjaxRequest($request)) {
            return response()->json([
                'redirect' => route('admin.dashboard'),
            ]);
        }

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request): RedirectResponse|JsonResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($this->isAjaxRequest($request)) {
            return response()->json([
                'redirect' => route('login'),
            ]);
        }

        return redirect()->route('login');
    }

    private function isAjaxRequest(Request $request): bool
    {
        return $request->expectsJson()
            || $request->ajax()
            || $request->header('X-Requested-With') === 'XMLHttpRequest';
    }
}
