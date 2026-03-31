
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Analytics | NexaDash Admin Dashboard Bootstrap 5 Template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="NexaDash is a modern admin dashboard template built with Bootstrap 5. Featuring a clean and responsive design, it provides a range of customizable components and tools to efficiently manage and oversee various administrative tasks.">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
    <meta name="og:title" content="NexaDash Admin Dashboard Bootstrap 5 Template">
    <meta name="og:description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
    <meta name="og:image" content="https://nexadash.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title" content="NexaDash Admin Dashboard Bootstrap 5 Template">
    <meta name="twitter:description" content="NexaDash Bootstrap 5 template, admin dashboard design, modern admin panel, responsive admin template, Bootstrap 5 admin components, administrative task management, customizable dashboard design, NexaDash features, Bootstrap admin template, user-friendly admin interface">
    <meta name="twitter:image" content="https://nexadash.dexignzone.com/xhtml/social-image.png">
    <meta name="twitter:card" content="summary_large_image">


    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendor/jqvmap/jquery-jvectormap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/public/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->


    <div id="main-wrapper" class="wallet-open active">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="https://nexadash.dexignzone.com/laravel/demo/index" class="brand-logo">
				<svg class="logo-abbr" width="30" height="33" viewBox="0 0 30 33" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M17.9757 0.803847C16.1193 -0.267949 13.8322 -0.267949 11.9757 0.803847L3 5.986C1.14359 7.05779 0 9.03856 0 11.1822V21.5464C0 23.69 1.14359 25.6708 3 26.7426L11.9757 31.9247C13.8322 32.9965 16.1193 32.9965 17.9757 31.9247L26.9515 26.7426C28.8079 25.6708 29.9515 23.69 29.9515 21.5464V11.1821C29.9515 9.03855 28.8079 7.05779 26.9515 5.986L17.9757 0.803847ZM16.4757 6.08629C15.5475 5.5504 14.4039 5.5504 13.4757 6.0863L6.8247 9.92627C5.8965 10.4622 5.3247 11.4526 5.3247 12.5243V20.2043C5.3247 21.2761 5.8965 22.2665 6.82471 22.8024L13.4757 26.6423C14.4039 27.1782 15.5475 27.1782 16.4757 26.6423L23.1268 22.8024C24.055 22.2665 24.6268 21.2761 24.6268 20.2043V12.5243C24.6268 11.4525 24.055 10.4622 23.1268 9.92627L16.4757 6.08629Z"
						fill="var(--primary)" />
				</svg>
				<svg class="brand-title" width="328" height="52" viewBox="0 0 328 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M41.8572 0.0909076V51H33.6541L9.66619 16.3232H9.24361V51H0.0213067V0.0909076H8.27415L32.2372 34.7926H32.6847V0.0909076H41.8572ZM68.4118 51.7457C64.5836 51.7457 61.2775 50.9503 58.4934 49.3594C55.7259 47.7519 53.5964 45.4815 52.1049 42.5483C50.6135 39.5985 49.8677 36.1267 49.8677 32.1328C49.8677 28.2053 50.6135 24.7583 52.1049 21.7919C53.613 18.8089 55.7176 16.4889 58.4189 14.8317C61.1201 13.1579 64.2936 12.321 67.9395 12.321C70.2927 12.321 72.5133 12.7022 74.6014 13.4645C76.706 14.2102 78.5621 15.3703 80.1696 16.9446C81.7936 18.5189 83.0697 20.5241 83.9977 22.9602C84.9257 25.3797 85.3897 28.2633 85.3897 31.6108V34.37H54.0936V28.3047H76.764C76.7475 26.5812 76.3746 25.0483 75.6454 23.706C74.9163 22.3471 73.8971 21.2782 72.5879 20.4993C71.2953 19.7204 69.7872 19.331 68.0637 19.331C66.2243 19.331 64.6085 19.7784 63.2164 20.6733C61.8244 21.5516 60.7389 22.7116 59.9601 24.1534C59.1977 25.5786 58.8083 27.1446 58.7917 28.8516V34.1463C58.7917 36.367 59.1977 38.2727 60.0098 39.8636C60.8218 41.438 61.957 42.6477 63.4153 43.4929C64.8736 44.3215 66.5806 44.7358 68.536 44.7358C69.8452 44.7358 71.0301 44.5535 72.0907 44.1889C73.1513 43.8078 74.0711 43.2526 74.85 42.5234C75.6288 41.7943 76.2172 40.8911 76.6149 39.8139L85.0169 40.7585C84.4866 42.9792 83.4757 44.9181 81.9842 46.5753C80.5093 48.2159 78.6201 49.492 76.3166 50.4034C74.0131 51.2983 71.3781 51.7457 68.4118 51.7457ZM99.5401 12.8182L107.246 26.9126L115.076 12.8182H124.597L113.088 31.9091L124.796 51H115.325L107.246 37.2536L99.2418 51H89.6964L101.33 31.9091L89.9947 12.8182H99.5401ZM142.408 51.7706C139.988 51.7706 137.809 51.3397 135.87 50.478C133.948 49.5997 132.423 48.3071 131.296 46.6001C130.186 44.8932 129.631 42.7886 129.631 40.2862C129.631 38.1319 130.028 36.3504 130.824 34.9418C131.619 33.5331 132.705 32.4062 134.08 31.5611C135.456 30.7159 137.005 30.0779 138.729 29.647C140.469 29.1996 142.267 28.8764 144.123 28.6776C146.36 28.4455 148.175 28.2384 149.567 28.0561C150.959 27.8572 151.97 27.5589 152.599 27.1612C153.246 26.7469 153.569 26.1089 153.569 25.2472V25.098C153.569 23.2254 153.014 21.7753 151.903 20.7479C150.793 19.7204 149.194 19.2067 147.106 19.2067C144.902 19.2067 143.153 19.6873 141.861 20.6484C140.585 21.6096 139.723 22.7448 139.276 24.054L130.874 22.8608C131.536 20.5407 132.63 18.6018 134.155 17.044C135.679 15.4697 137.544 14.2931 139.748 13.5142C141.952 12.7188 144.388 12.321 147.056 12.321C148.896 12.321 150.727 12.5365 152.55 12.9673C154.373 13.3982 156.038 14.1108 157.546 15.1051C159.054 16.0829 160.264 17.4169 161.175 19.1072C162.103 20.7976 162.567 22.9105 162.567 25.446V51H153.917V45.755H153.619C153.072 46.8156 152.301 47.8099 151.307 48.7379C150.329 49.6494 149.094 50.3868 147.603 50.9503C146.128 51.4972 144.396 51.7706 142.408 51.7706ZM144.744 45.1584C146.551 45.1584 148.117 44.8021 149.442 44.0895C150.768 43.3603 151.787 42.3991 152.5 41.206C153.229 40.0128 153.594 38.7119 153.594 37.3033V32.804C153.312 33.036 152.831 33.2514 152.152 33.4503C151.489 33.6491 150.743 33.8232 149.915 33.9723C149.086 34.1214 148.266 34.254 147.454 34.37C146.642 34.486 145.938 34.5855 145.341 34.6683C143.999 34.8506 142.797 35.1489 141.737 35.5632C140.676 35.9775 139.839 36.5575 139.226 37.3033C138.613 38.0324 138.306 38.977 138.306 40.1371C138.306 41.7943 138.911 43.0455 140.121 43.8906C141.33 44.7358 142.872 45.1584 144.744 45.1584Z" fill="#1C2430"/>
					<path d="M188.668 51H173.754V0.0909076H189.563C194.419 0.0909076 198.57 1.1018 202.017 3.12358C205.481 5.14536 208.132 8.04545 209.972 11.8239C211.811 15.6023 212.731 20.1347 212.731 25.4212C212.731 30.7573 211.786 35.3395 209.897 39.1676C208.024 42.9792 205.29 45.9041 201.694 47.9425C198.114 49.9808 193.772 51 188.668 51ZM178.402 46.8239H188.395C192.77 46.8239 196.432 45.9621 199.382 44.2386C202.332 42.5152 204.544 40.0542 206.019 36.8558C207.494 33.6574 208.232 29.8459 208.232 25.4212C208.215 21.0296 207.486 17.2512 206.044 14.0859C204.619 10.9207 202.498 8.4929 199.68 6.80256C196.88 5.11221 193.416 4.26704 189.29 4.26704H178.402V46.8239ZM233.742 51.87C231.439 51.87 229.334 51.4226 227.428 50.5277C225.522 49.6162 224.006 48.3071 222.879 46.6001C221.752 44.8767 221.189 42.7886 221.189 40.3359C221.189 38.4467 221.545 36.8558 222.258 35.5632C222.97 34.2706 223.981 33.21 225.29 32.3814C226.599 31.5528 228.149 30.8982 229.939 30.4176C231.729 29.937 233.701 29.5642 235.855 29.299C237.993 29.0339 239.799 28.8018 241.274 28.603C242.765 28.4041 243.901 28.0893 244.68 27.6584C245.458 27.2275 245.848 26.5315 245.848 25.5703V24.6754C245.848 22.0736 245.069 20.027 243.511 18.5355C241.97 17.0275 239.749 16.2734 236.849 16.2734C234.098 16.2734 231.853 16.8783 230.113 18.0881C228.389 19.2978 227.18 20.723 226.483 22.3636L222.282 20.8473C223.144 18.7592 224.337 17.0937 225.862 15.8509C227.387 14.5914 229.094 13.6882 230.983 13.1413C232.872 12.5779 234.786 12.2962 236.725 12.2962C238.183 12.2962 239.7 12.4867 241.274 12.8679C242.865 13.2491 244.34 13.9119 245.699 14.8565C247.058 15.7846 248.16 17.0855 249.005 18.7592C249.85 20.4164 250.273 22.5211 250.273 25.0732V51H245.848V44.9595H245.574C245.044 46.0864 244.257 47.1802 243.213 48.2408C242.169 49.3014 240.86 50.1714 239.285 50.8509C237.711 51.5303 235.863 51.87 233.742 51.87ZM234.339 47.8182C236.692 47.8182 238.73 47.2962 240.454 46.2521C242.177 45.2081 243.503 43.8243 244.431 42.1009C245.376 40.3608 245.848 38.4467 245.848 36.3587V30.8402C245.516 31.1551 244.961 31.4368 244.182 31.6854C243.42 31.9339 242.533 32.1577 241.523 32.3565C240.528 32.5388 239.534 32.6963 238.54 32.8288C237.545 32.9614 236.65 33.0774 235.855 33.1768C233.701 33.442 231.861 33.8563 230.336 34.4197C228.812 34.9832 227.644 35.7621 226.831 36.7564C226.019 37.7341 225.613 38.9936 225.613 40.5348C225.613 42.8549 226.442 44.6529 228.099 45.929C229.756 47.1884 231.836 47.8182 234.339 47.8182ZM287.696 21.1953L283.644 22.3388C283.247 21.1953 282.683 20.1596 281.954 19.2315C281.225 18.3035 280.272 17.5661 279.095 17.0192C277.935 16.4723 276.494 16.1989 274.77 16.1989C272.185 16.1989 270.064 16.812 268.406 18.0384C266.749 19.2647 265.921 20.8473 265.921 22.7862C265.921 24.4268 266.484 25.7609 267.611 26.7884C268.754 27.7992 270.511 28.603 272.881 29.1996L278.648 30.6165C281.846 31.3954 284.241 32.63 285.832 34.3203C287.439 36.0107 288.243 38.1319 288.243 40.6839C288.243 42.8383 287.646 44.7524 286.453 46.4261C285.26 48.0999 283.595 49.4174 281.457 50.3786C279.336 51.3232 276.875 51.7955 274.074 51.7955C270.345 51.7955 267.271 50.9586 264.852 49.2848C262.432 47.5945 260.883 45.1584 260.203 41.9766L264.454 40.9325C265.001 43.2029 266.07 44.9181 267.661 46.0781C269.268 47.2382 271.381 47.8182 273.999 47.8182C276.933 47.8182 279.278 47.1636 281.034 45.8544C282.791 44.5286 283.669 42.8714 283.669 40.8828C283.669 39.3416 283.155 38.049 282.128 37.005C281.101 35.9444 279.543 35.1655 277.455 34.6683L271.215 33.1768C267.901 32.3814 265.448 31.1219 263.857 29.3984C262.267 27.675 261.471 25.5372 261.471 22.9851C261.471 20.8804 262.043 19.0327 263.186 17.4418C264.33 15.8343 265.904 14.5748 267.909 13.6634C269.914 12.7519 272.201 12.2962 274.77 12.2962C278.267 12.2962 281.059 13.0916 283.147 14.6825C285.252 16.2569 286.768 18.4278 287.696 21.1953ZM302.356 27.1364V51H297.931V0.0909076H302.356V18.8089H302.754C303.649 16.8369 305.033 15.2625 306.905 14.0859C308.794 12.9093 311.181 12.321 314.064 12.321C316.65 12.321 318.92 12.8513 320.875 13.9119C322.831 14.9725 324.355 16.5386 325.449 18.6101C326.543 20.6816 327.09 23.2337 327.09 26.2663V51H322.64V26.5398C322.64 23.3911 321.762 20.9136 320.005 19.1072C318.265 17.2843 315.912 16.3729 312.946 16.3729C310.907 16.3729 309.093 16.8037 307.502 17.6655C305.911 18.5272 304.651 19.7701 303.723 21.3942C302.812 23.0017 302.356 24.9157 302.356 27.1364Z" fill="#6F767E"/>
					</svg>
					
			</a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.2047 14.6015C15.3496 14.4598 15.4221 14.2941 15.4221 14.1042C15.4221 13.9143 15.3496 13.7485 15.2047 13.6069L11.577 9.97917L15.2256 6.35146C15.3705 6.20985 15.4386 6.04756 15.43 5.86458C15.4214 5.68161 15.3463 5.51932 15.2047 5.37771C15.0631 5.23611 14.8982 5.16531 14.7099 5.16531C14.5217 5.16531 14.3551 5.23611 14.2102 5.37771L10.106 9.48188C10.0299 9.55797 9.97548 9.63656 9.94272 9.71763C9.90995 9.7987 9.89357 9.88588 9.89357 9.97917C9.89357 10.0725 9.90995 10.1631 9.94272 10.2511C9.97548 10.3391 10.0299 10.4212 10.106 10.4973L14.231 14.6223C14.3759 14.7639 14.5399 14.8312 14.7228 14.8243C14.9058 14.8173 15.0664 14.7431 15.2047 14.6015ZM9.88905 14.6015C10.034 14.4598 10.1064 14.2941 10.1064 14.1042C10.1064 13.9143 10.034 13.7485 9.88905 13.6069L6.26134 9.97917L9.90989 6.35146C10.0548 6.20985 10.123 6.04756 10.1144 5.86458C10.1058 5.68161 10.0307 5.51932 9.88905 5.37771C9.74744 5.23611 9.58251 5.16531 9.39426 5.16531C9.20601 5.16531 9.03942 5.23611 8.89449 5.37771L4.79032 9.48188C4.71422 9.55797 4.6598 9.63656 4.62705 9.71763C4.59429 9.7987 4.57791 9.88588 4.57791 9.97917C4.57791 10.0725 4.59429 10.1631 4.62705 10.2511C4.6598 10.3391 4.71422 10.4212 4.79032 10.4973L8.91532 14.6223C9.06025 14.7639 9.2242 14.8312 9.40716 14.8243C9.59013 14.8173 9.75076 14.7431 9.88905 14.6015Z"
								fill="var(--primary)" />
						</svg>
					</span>

                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="1.0"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1" />
										</g>
									</svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz- -user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<rect fill="#000000" opacity="0.3"
												transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
												x="14" y="7" width="2" height="10" rx="1" />
											<path
												d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
												fill="#000000" fill-rule="nonzero"
												transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
										</g>
									</svg>
								</a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<circle fill="#000000" cx="5" cy="12" r="2" />
												<circle fill="#000000" cx="12" cy="12" r="2" />
												<circle fill="#000000" cx="19" cy="12" r="2" />
											</g>
										</svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group
                                        </li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
												class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="1" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="1.0"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1" />
										</g>
									</svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="1" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <form>
                                <div class="input-group search-area">
                                    <span class="input-group-text"><button>
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.25 14.25C12.5637 14.25 15.25 11.5637 15.25 8.25C15.25 4.93629 12.5637 2.25 9.25 2.25C5.93629 2.25 3.25 4.93629 3.25 8.25C3.25 11.5637 5.93629 14.25 9.25 14.25Z" stroke="#6F767E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M16.75 15.75L13.4875 12.4875" stroke="#6F767E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</button></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
										<path d="M5.10317 19.6315C4.85704 19.6315 4.65213 19.5493 4.48844 19.3848C4.32476 19.2202 4.24292 19.0162 4.24292 18.7725C4.24292 18.5289 4.32476 18.3263 4.48844 18.1647C4.65213 18.0031 4.85616 17.9223 5.10055 17.9223H6.39672V10.4397C6.39672 9.03281 6.81719 7.75736 7.65814 6.61333C8.49908 5.4693 9.61249 4.7488 10.9984 4.45185V3.75925C10.9984 3.34602 11.1438 3.00394 11.4346 2.733C11.7255 2.46209 12.0786 2.32663 12.4941 2.32663C12.9096 2.32663 13.2647 2.46209 13.5595 2.733C13.8542 3.00394 14.0016 3.34602 14.0016 3.75925V4.45185C15.3915 4.7488 16.5111 5.4693 17.3603 6.61333C18.2096 7.75736 18.6342 9.03281 18.6342 10.4397V17.9223H19.9054C20.1453 17.9223 20.3483 18.0045 20.5142 18.1691C20.6801 18.3336 20.763 18.5377 20.763 18.7813C20.763 19.0249 20.6801 19.2276 20.5142 19.3891C20.3483 19.5507 20.1453 19.6315 19.9054 19.6315H5.10317ZM12.503 22.6495C11.9559 22.6495 11.4773 22.449 11.0673 22.0479C10.6572 21.6469 10.4522 21.1648 10.4522 20.6016H14.5538C14.5538 21.1676 14.3525 21.6504 13.95 22.05C13.5474 22.4496 13.0651 22.6495 12.503 22.6495V22.6495ZM8.09999 17.9223H16.925V10.4397C16.925 9.18966 16.5042 8.13549 15.6625 7.27716C14.8208 6.41882 13.7792 5.98966 12.5375 5.98966C11.2958 5.98966 10.2458 6.41882 9.38749 7.27716C8.52916 8.13549 8.09999 9.18966 8.09999 10.4397V17.9223Z" fill="black"/>
									</svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
										<path d="M5.05384 11.75C4.58544 11.75 4.18446 11.5832 3.85091 11.2495C3.51736 10.9159 3.35059 10.5129 3.35059 10.0407V5.05379C3.35059 4.58376 3.51736 4.18138 3.85091 3.84664C4.18446 3.51191 4.58544 3.34454 5.05384 3.34454H10.0468C10.5152 3.34454 10.9161 3.51191 11.2497 3.84664C11.5833 4.18138 11.75 4.58376 11.75 5.05379V10.0407C11.75 10.5129 11.5833 10.9159 11.2497 11.2495C10.9161 11.5832 10.5152 11.75 10.0468 11.75H5.05384ZM5.05384 21.6494C4.58544 21.6494 4.18446 21.4827 3.85091 21.1491C3.51736 20.8156 3.35059 20.4146 3.35059 19.9462V14.9533C3.35059 14.4849 3.51736 14.0839 3.85091 13.7503C4.18446 13.4168 4.58544 13.25 5.05384 13.25H10.0468C10.5152 13.25 10.9161 13.4168 11.2497 13.7503C11.5833 14.0839 11.75 14.4849 11.75 14.9533V19.9462C11.75 20.4146 11.5833 20.8156 11.2497 21.1491C10.9161 21.4827 10.5152 21.6494 10.0468 21.6494H5.05384ZM14.9593 11.75C14.4871 11.75 14.0842 11.5832 13.7505 11.2495C13.4169 10.9159 13.25 10.5129 13.25 10.0407V5.05379C13.25 4.58376 13.4169 4.18138 13.7505 3.84664C14.0842 3.51191 14.4871 3.34454 14.9593 3.34454H19.9462C20.4163 3.34454 20.8186 3.51191 21.1534 3.84664C21.4881 4.18138 21.6555 4.58376 21.6555 5.05379V10.0407C21.6555 10.5129 21.4881 10.9159 21.1534 11.2495C20.8186 11.5832 20.4163 11.75 19.9462 11.75H14.9593ZM14.9593 21.6494C14.4871 21.6494 14.0842 21.4827 13.7505 21.1491C13.4169 20.8156 13.25 20.4146 13.25 19.9462V14.9533C13.25 14.4849 13.4169 14.0839 13.7505 13.7503C14.0842 13.4168 14.4871 13.25 14.9593 13.25H19.9462C20.4163 13.25 20.8186 13.4168 21.1534 13.7503C21.4881 14.0839 21.6555 14.4849 21.6555 14.9533V19.9462C21.6555 20.4146 21.4881 20.8156 21.1534 21.1491C20.8186 21.4827 20.4163 21.6494 19.9462 21.6494H14.9593ZM5.05384 10.0407H10.0468V5.05379H5.05384V10.0407ZM14.9593 10.0407H19.9462V5.05379H14.9593V10.0407ZM14.9593 19.9462H19.9462V14.9533H14.9593V19.9462ZM5.05384 19.9462H10.0468V14.9533H5.05384V19.9462Z" fill="black"/>
									</svg>
								</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="https://nexadash.dexignzone.com/laravel/demo/images/avatar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>
                            
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen" href="javascript:void(0);">
									<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.56896 18.5C1.26722 18.5 1.01362 18.3973 0.808174 18.1918C0.602725 17.9864 0.5 17.7328 0.5 17.431V13.1751C0.5 12.8734 0.603248 12.6198 0.809743 12.4143C1.01624 12.2089 1.27114 12.1062 1.57445 12.1062C1.87774 12.1062 2.1308 12.2089 2.33364 12.4143C2.53647 12.6198 2.63789 12.8734 2.63789 13.1751V16.3621H5.8249C6.12664 16.3621 6.38024 16.4654 6.58569 16.6719C6.79111 16.8784 6.89383 17.1333 6.89383 17.4366C6.89383 17.7399 6.79111 17.9929 6.58569 18.1957C6.38024 18.3986 6.12664 18.5 5.8249 18.5H1.56896ZM1.56344 6.90133C1.26015 6.90133 1.00709 6.79861 0.804251 6.59319C0.601417 6.38774 0.5 6.13414 0.5 5.8324V1.57646C0.5 1.27472 0.602725 1.01987 0.808174 0.811908C1.01362 0.603969 1.26722 0.5 1.56896 0.5H5.8249C6.12664 0.5 6.38024 0.604504 6.58569 0.813509C6.79111 1.02249 6.89383 1.27864 6.89383 1.58195C6.89383 1.88524 6.79111 2.1383 6.58569 2.34114C6.38024 2.54397 6.12664 2.64539 5.8249 2.64539H2.63789V5.8324C2.63789 6.13414 2.53464 6.38774 2.32814 6.59319C2.12165 6.79861 1.86675 6.90133 1.56344 6.90133ZM13.1676 18.5C12.8659 18.5 12.6123 18.3968 12.4068 18.1903C12.2014 17.9838 12.0987 17.7289 12.0987 17.4256C12.0987 17.1223 12.2014 16.8692 12.4068 16.6664C12.6123 16.4635 12.8659 16.3621 13.1676 16.3621H16.3546V13.1751C16.3546 12.8734 16.4579 12.6198 16.6644 12.4143C16.8709 12.2089 17.1258 12.1062 17.4291 12.1062C17.7324 12.1062 17.9867 12.2089 18.192 12.4143C18.3973 12.6198 18.5 12.8734 18.5 13.1751V17.431C18.5 17.7328 18.396 17.9864 18.1881 18.1918C17.9801 18.3973 17.7253 18.5 17.4235 18.5H13.1676ZM17.4181 6.90133C17.1148 6.90133 16.8617 6.79861 16.6589 6.59319C16.456 6.38774 16.3546 6.13414 16.3546 5.8324V2.64539H13.1676C12.8659 2.64539 12.6123 2.54214 12.4068 2.33564C12.2014 2.12915 12.0987 1.87424 12.0987 1.57093C12.0987 1.26765 12.2014 1.01333 12.4068 0.807986C12.6123 0.602662 12.8659 0.5 13.1676 0.5H17.4235C17.7253 0.5 17.9801 0.603969 18.1881 0.811908C18.396 1.01987 18.5 1.27472 18.5 1.57646V5.8324C18.5 6.13414 18.3955 6.38774 18.1865 6.59319C17.9775 6.79861 17.7214 6.90133 17.4181 6.90133Z" fill="black"/>
									</svg>
                                </a>
                            </li>
                            <li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link p-0" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img src="{{ asset('admin/assets/public/images/user1.jpg')}}" alt="">
											</div>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img src="{{ asset('admin/assets/public/images/user1.jpg')}}" class="avatar avatar-md" alt="">
													<div>
														<h6>Thomas Fleming</h6>
														<span>Web Designer</span>	
													</div>	
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a href="https://nexadash.dexignzone.com/laravel/demo/app-profile" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>

													<span class="ms-2">Profile </span>
												</a>
												<a href="https://nexadash.dexignzone.com/laravel/demo/app-profile" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>

													<span class="ms-2">My Project</span><span class="badge badge-sm badge-secondary light rounded-circle text-white ms-2">4</span>
												</a>
												<a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>

													<span class="ms-2">Message </span>
												</a>
												<a href="https://nexadash.dexignzone.com/laravel/demo/email-inbox" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M14.3888 20.8572C13.0247 22.372 10.8967 22.3899 9.51947 20.8572" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>

													<span class="ms-2">Notification </span>
												</a>
											</div>
											<div class="card-footer px-0 py-2">
												<a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
														<circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
														</svg>

													<span class="ms-2">Settings </span>
												</a>
												<a href="javascript:void(0);" class="dropdown-item ai-icon text-danger"
												   onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#E55555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
													<span class="ms-2">Logout </span>
												</a>
                                                <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
											</div>
										</div>
										
									</div>
								</div>
							</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll grid-menu">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon ai-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M5.55286 19.446H9.14743V13.1482H14.8507V19.446H18.4453V9.77373L11.9991 4.94055L5.55286 9.77571V19.446ZM5.55286 21.1493C5.08446 21.1493 4.68348 20.9825 4.34993 20.6489C4.01638 20.3154 3.84961 19.9144 3.84961 19.446V9.77373C3.84961 9.50478 3.90971 9.25 4.02991 9.00938C4.15011 8.76876 4.31791 8.56974 4.53331 8.4123L10.9735 3.57915C11.1317 3.46719 11.2973 3.38222 11.4704 3.32426C11.6434 3.26629 11.8215 3.2373 12.0045 3.2373C12.1875 3.2373 12.3642 3.26629 12.5347 3.32426C12.7052 3.38222 12.8685 3.46719 13.0246 3.57915L19.4648 8.4123C19.6798 8.57115 19.8486 8.77066 19.9709 9.01083C20.0933 9.251 20.1545 9.5053 20.1545 9.77373V19.446C20.1545 19.9144 19.9871 20.3154 19.6524 20.6489C19.3177 20.9825 18.9153 21.1493 18.4453 21.1493H13.2132V14.7857H10.7849V21.1493H5.55286Z"
										fill="#6F767E" />
								</svg>
                            </div>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Projects</a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class="mode-btn d-flex align-items-center justify-content-between">
                    <div class="d-mode">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_4_82)">
								<path
									d="M12.025 23.3407L8.62955 20.0479H3.95118V15.3728L0.584229 12L3.95208 8.62704V3.94519H8.6272L12.025 0.572266L15.3731 3.94497H20.055V8.62694L23.4277 12L20.0549 15.3704V20.0488H15.3728L12.025 23.3407ZM12.025 18.3445C13.7812 18.3445 15.2745 17.7251 16.5049 16.4863C17.7353 15.2474 18.3506 13.7439 18.3506 11.9757C18.3506 10.2214 17.7348 8.72844 16.5034 7.49684C15.2719 6.26524 13.7791 5.64944 12.025 5.64944V18.3445ZM12.025 20.9538L14.6609 18.347H18.3513V14.6568L21.0098 12L18.3493 9.33697V5.64874H14.6645L12.025 2.99022L9.34323 5.64874H5.65298V9.33547L2.9962 12L5.65545 14.6592V18.3445H9.31575L12.025 20.9538Z"
									fill="#6F767E" />
							</g>
							<defs>
								<clipPath id="clip0_4_82">
									<rect width="24" height="24" fill="white" />
								</clipPath>
							</defs>
						</svg>
                        <span class="ms-2">Dark Mode</span>
                    </div>
                    <div class="dz-layout light">
                        <i class="fas fa-sun sun"></i>
                        <i class="fas fa-moon moon"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2025</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->



    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        var enableSupportButton = '1';
    </script>

    <script src="{{ asset('admin/assets/vendor/global/global.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/Chart.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/jqvmap/jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/jqvmap/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/jqvmap/jquery.vmap.usa.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/dashboard/analytics.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendor/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/plugins-init/datatables.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/deznav-init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo.js')}}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $(".sidebar-close").click(function() {
                $(".wallet-open").toggleClass("active");
                $(this).toggleClass("close");
            });
        });

        jQuery(document).ready(function() {
            setTimeout(function() {
                var dzSettingsOptions = {
                    typography: "Inter, sans-serif",
                    version: "light",
                    layout: "vertical",
                    primary: "color_1",
                    headerBg: "color_1",
                    navheaderBg: "color_4",
                    sidebarBg: "color_4",
                    sidebarStyle: "full",
                    sidebarPosition: "fixed",
                    headerPosition: "fixed",
                    containerLayout: "full",
                };
                new dzSettings(dzSettingsOptions);
                jQuery(window).on('resize', function() {
                    new dzSettings(dzSettingsOptions);
                })
            }, 1000)
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"0931814f84b94398b852d3ac91b5f293","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
