@extends('admin.layout.app')
@section('content')
        <div class="content-body analytics-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Sales</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">$420</h2>
                                    <p class="fs-13 font-w500 mb-0">Total Sales</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>

									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Invoice</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">$1200</h2>
                                    <p class="fs-13 font-w500 mb-0">Send Invoices Total</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>

									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Quotes</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">20</h2>
                                    <p class="fs-13 font-w500 mb-0">Quotes Send</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>

									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Contacts</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">40k</h2>
                                    <p class="fs-13 font-w500 mb-0">Total Contacts</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">New Lead</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">1.2k</h2>
                                    <p class="fs-13 font-w500 mb-0">Total New Lead</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>

									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">New Clients</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">227</h2>
                                    <p class="fs-13 font-w500 mb-0">Total New Clients</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Repeat Clients</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">750</h2>
                                    <p class="fs-13 font-w500 mb-0">Total Repeat Clients</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-0 fs-15">Order</h6>
                                    </div>
                                    <div>
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<circle cx="9.99989" cy="10" r="0.833333"
													transform="rotate(105 9.99989 10)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="5.00002" r="0.833333"
													transform="rotate(105 9.99989 5.00002)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
												<circle cx="9.99989" cy="15" r="0.833333"
													transform="rotate(105 9.99989 15)" stroke="#313949"
													stroke-width="1.5" stroke-linecap="round" />
											</svg>

										</a>
                                        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start">
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0">$420</h2>
                                    <p class="fs-13 font-w500 mb-0">Total Order</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <p class="mb-0 me-1 fs-13 font-w500">Last</p>
                                    <select class="default-select style-2 fs-13 font-w500" aria-label="Default select example">
										<option selected="">30 Days</option>
										<option value="2">20 Days</option>
										<option value="1">15 Days</option>
										<option value="2">10 Days</option>
									</select>
                                    <a href="javascript:void(0);">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.6665 10L17.1968 9.46967L17.7272 10L17.1968 10.5303L16.6665 10ZM4.1665 10.75C3.75229 10.75 3.4165 10.4142 3.4165 10C3.4165 9.58579 3.75229 9.25 4.1665 9.25V10.75ZM12.1968 4.46967L17.1968 9.46967L16.1362 10.5303L11.1362 5.53033L12.1968 4.46967ZM17.1968 10.5303L12.1968 15.5303L11.1362 14.4697L16.1362 9.46967L17.1968 10.5303ZM16.6665 10.75H4.1665V9.25H16.6665V10.75Z"
												fill="#0176D3" />
										</svg>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Add new task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label class="form-label d-block mb-2">Summary:</label>
                            <input type="text" class="form-control w-100 mb-3" placeholder="As a user i need set m">

                            <label class="form-label d-block mb-2">Assigned:</label>
                            <input type="text" class="form-control w-100 mb-3" placeholder="Only my task">

                            <label class="form-label d-block mb-2">Tag:</label>
                            <input type="text" class="form-control w-100 mb-3" placeholder="Add tags">

                            <label class="form-label d-block mb-2">Description:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary light">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
@endsection