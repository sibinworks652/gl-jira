<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        /** @var \App\Models\Admin $admin */
        $admin = Auth::guard('admin')->user();

        return view('admin.dashboard', [
            'admin' => $admin,
        ]);
    }
}
