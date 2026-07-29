<!DOCTYPE html>
<html lang="en">

<head>
    @php($canonicalUrl = url()->current())
    <title>{{ $data_arr['title'] ?? '' }}</title>
    <meta name="title" content="{{ $data_arr['title'] ?? '' }}">
    <meta name="keywords" content="{{ $data_arr['keywords'] ?? '' }}">
    <meta name="description" content="{{ $data_arr['description'] ?? '' }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Start-->
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Favicon End-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/inner.css')}}">

</head>
<!-- Responsive Header start -->
<section class="header_banner_section">
    <header id="myHeader">
        <div class="container-fluid" style="max-width:100%">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_mainbox">
                        <div class="header_logobox">
                            <a href="/">
                                <img src="{{ asset('assets/images/home/header-logo.webp') }}" alt="SSLA Logo"
                                    class="img-fluid without_sticky">
                                <img src="{{ asset('assets/images/home/sticky-header-logo.webp') }}" alt="SSLA Logo"
                                    class="img-fluid with_sticky">
                            </a>
                            <div class="admission_floating_box" onclick="window.open('#', '_blank')" role="link"
                                tabindex="0">
                                <img src="{{ asset('assets/images/home/admission_open.webp') }}" alt="Admission image"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="header_menubox" id="menu_mainbox">
                            <div class="toggle_open_logo" onclick="menu()">
                                <img src="{{ asset('assets/images/home/toggle-menu.svg') }}" alt="Open icon"
                                    class="img-fluid">
                            </div>
                            <span class="overlay" onclick="menu()"></span>
                            <nav>
                                <div class="toggle_close_logo" onclick="menu()">
                                    <img src="{{ asset('assets/images/home/toggle-menu-close.svg') }}" alt="Close icon"
                                        class="img-fluid">
                                </div>
                                <div class="menu_scroll_area" id="menu_scroll_area">
                                    <ul>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="{{url('/aboutus')}}">About Us
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>About Us</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/aboutus')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">About SSLA</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <!-- <a href="{{url('/vission-and-mission')}}"> -->
                                                                <a target="_blank"
                                                                    href="https://www.siu.edu.in/about-us/vision-mission">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Vision and Mission
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/directorsnote')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Director’s Note
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/advisorsnote')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Advisor’s Note</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="https://www.siu.edu.in/about-us/leaderships"
                                                                    target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Leadership</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="https://www.siu.edu.in/" target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">About SIU</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a target="_blank"
                                                                    href="{{ asset('assets/pdf/SSLA-E-Brochure.pdf') }}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">E-Brochure</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="">Admissions
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>Admissions</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="{{url('/programme-details')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Programme Details
                                                                    </div>
                                                                </a>
                                                            </div> -->
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/admissionsprocess')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Symbiosis Entrance Test (SET)</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/rap-admission')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Rolling Admission Process (RAP)</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/eligibility3')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Eligibility</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/international-student')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">International
                                                                        Students</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/financials3')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Financials</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/admissions-webinar')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Admission Webinars
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/education-loans3')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Education Loan</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/career-options3')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Life After SSLA</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/deeksharambh-2025')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Induction and
                                                                        Orientation–DEEKSHARAMBH 2025</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="{{url('/programdetails')}}">Academics
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>Academics</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/programdetails')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">What SSLA Offers
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="https://www.siu.edu.in/programmes#gAttribute"
                                                                    target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box"> SIU Graduate
                                                                        Attributes</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/programme-outcomes')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Programme Outcomes
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Course Outcomes
                                                                    </div>
                                                                </a>
                                                            </div> -->
                                                            <div class="megamenu_listing">
                                                                <a href="{{ asset('assets/pdf/SSLA-Student-Handbook-2025-26.pdf') }}" target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Student Handbook
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="{{url('/stakeholder-feedback')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Stakeholder Feedback
                                                                    </div>
                                                                </a>
                                                            </div> -->
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/programme-structure')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Programme Structure
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/courses')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Courses</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/assessments-and-assignments')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Evaluations</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/credit-information')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Credit Information
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/academic-bank-of-credits')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Academic Bank of
                                                                        Credits (ABC)</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/additional-requirement')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Additional Academic
                                                                        Requirements</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/ssla-library')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">SSLA Library</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Internationlisation
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="https://www.scie.ac.in/" target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">SCIE</div>
                                                                </a>
                                                            </div> -->
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/academic-calender')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Academic Calendar
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Best Practices</div>
                                                                </a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="{{url('/thinking-research-at-ssla')}}">Research
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>Research</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/thinking-research-at-ssla')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Thinking Research at
                                                                        SSLA </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a
                                                                    href="{{url('/confluence-journal-interdisciplinary-studies')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Confluence: Journal
                                                                        of Interdisciplinary Studies</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/research-colloquium')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Research Colloquia and Workshops</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/student-research')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Student Research at
                                                                        SSLA</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="{{url('/faculty')}}">Community
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>Community</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/faculty')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Faculty</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/staff')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Staff</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/student')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Student</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/alumni')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Alumni</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">SSLA Committees
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/achievements')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Achievements</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown_menu">
                                            <a class="mobile_down_anchore" href="#">Events
                                                <span class="mobile_down_arrow" onclick="sub_menu(event)">
                                                    <svg width="20" height="20" x="0" y="0" viewBox="0 0 128 128">
                                                        <g>
                                                            <path
                                                                d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                                                fill="#ffffff" opacity="1" data-original="#000000">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="mega_menu_mainbox">
                                                <div class="mega_menu_imgbox">
                                                    <div class="mega_menu_img_first">
                                                        <img src="{{ asset('assets/images/home/collage-image-menu.webp') }}"
                                                            alt="SSLA Collage image" class="img-fluid">
                                                    </div>
                                                    <div class="mega_menu_img_second">
                                                        <img src="{{ asset('assets/images/home/menu-background-image.webp') }}"
                                                            alt="SSLA Menu Background image" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="mega_menu_list_box">
                                                    <div class="mega_menu_heading">
                                                        <h4>Events</h4>
                                                        <div class="mega_menu_listing_box">
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/inter-collegiate-event')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">I.C.E by SSLA</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/red-carpet')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Red Carpet</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Orientation Week
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Sports events</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="#" target="_blank">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Student Workshop
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">SSLA Presents</div>
                                                                </a>
                                                            </div> -->
                                                            <div class="megamenu_listing">
                                                                <a href="#">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Special Lecture
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/symbiosis-literary-festival')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Symbiosis Literary
                                                                        Festival</div>
                                                                </a>
                                                            </div>
                                                            <div class="megamenu_listing">
                                                                <a href="{{url('/events-archives')}}">
                                                                    <div class="mega_menu_icon_box">
                                                                        <svg width="14" height="14" x="0" y="0"
                                                                            viewBox="0 0 24 24">
                                                                            <g
                                                                                transform="matrix(1.500000000000001,0,0,1.500000000000001,-5.999943256378181,-6.00239682197572)">
                                                                                <path fill="#ffffff" fill-rule="evenodd"
                                                                                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                                                    clip-rule="evenodd" opacity="1"
                                                                                    data-original="#000000"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mega_menu_name_box">Events Archives</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="header_searchbox" id="searchTrigger" style="cursor: pointer;">
                                <svg width="30" height="30" x="0" y="0" viewBox="0 0 512 512">
                                    <g
                                        transform="matrix(6.123233995736766e-17,-1,1,6.123233995736766e-17,0.000560760498046875,512.000560760498)">
                                        <path
                                            d="M495.629 127.177A208.288 208.288 0 0 0 476.427 91.8c-7.446-11.022-15.998-21.387-25.416-30.806s-19.783-17.97-30.805-25.418a208.307 208.307 0 0 0-35.378-19.204C359.144 5.509 331.871 0 303.766 0c-28.104 0-55.377 5.509-81.061 16.373a208.307 208.307 0 0 0-35.378 19.204c-11.022 7.447-21.387 15.999-30.805 25.418s-17.97 19.783-25.416 30.806a208.358 208.358 0 0 0-19.202 35.377c-10.863 25.682-16.371 52.952-16.371 81.052 0 28.101 5.508 55.372 16.371 81.054a208.297 208.297 0 0 0 19.202 35.378 209.698 209.698 0 0 0 25.416 30.806 209.693 209.693 0 0 0 30.805 25.418 208.307 208.307 0 0 0 35.378 19.204c25.684 10.864 52.957 16.373 81.061 16.373s55.377-5.509 81.061-16.373a208.307 208.307 0 0 0 35.378-19.204c11.022-7.447 21.387-15.999 30.805-25.418s17.97-19.784 25.416-30.806a208.367 208.367 0 0 0 19.202-35.378C506.492 263.6 512 236.33 512 208.229c0-28.1-5.508-55.37-16.371-81.052zM303.767 381.378c-95.475 0-173.149-77.674-173.149-173.149 0-95.472 77.674-173.145 173.149-173.145s173.149 77.672 173.149 173.145c0 95.474-77.675 173.149-173.149 173.149zM103.629 383.563l-98.49 98.491c-6.851 6.851-6.85 17.958 0 24.808C8.564 510.287 13.053 512 17.542 512s8.979-1.713 12.404-5.138l98.49-98.491c6.851-6.851 6.851-17.958 0-24.808-6.85-6.851-17.957-6.851-24.807 0z"
                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>

<!-- Global Search Overlay -->
<div id="global-search-overlay" class="global-search-overlay">
    <div class="search-card">
        <button class="search-close-btn" id="searchCloseBtn" aria-label="Close search">&times;</button>
        <div class="search-input-wrapper">
            <svg class="search-input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" id="global-search-input" placeholder="Search pages, courses, fee structure..." autocomplete="off">
        </div>
        <div class="suggestions-container">
            <div class="suggestions-title" id="suggestions-title">Quick Links</div>
            <div id="search-suggestions-list">
                <!-- Suggestions will be populated dynamically -->
            </div>
        </div>
    </div>
</div>

<style>
    /* Global Search Styles */
    .global-search-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: none;
        align-items: flex-start;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding-top: 12vh;
    }
    .global-search-overlay.active {
        display: flex;
        opacity: 1;
    }
    .global-search-overlay .search-card {
        width: 90%;
        max-width: 650px;
        background: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        transform: translateY(-40px);
        transition: transform 0.3s ease;
        position: relative;
    }
    .global-search-overlay.active .search-card {
        transform: translateY(0);
    }
    .search-close-btn {
        position: absolute;
        top: 15px;
        right: 20px;
        background: none;
        border: none;
        font-size: 32px;
        color: #888;
        cursor: pointer;
        transition: color 0.2s, transform 0.2s;
        line-height: 1;
        outline: none;
    }
    .search-close-btn:hover {
        color: #de1d20;
        transform: scale(1.1);
    }
    .search-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        border-bottom: 2px solid #e9e5ff;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }
    .search-input-icon {
        margin-right: 15px;
    }
    #global-search-input {
        width: 100%;
        border: none;
        outline: none;
        font-size: 20px;
        color: #333;
        font-family: inherit;
        background: transparent;
    }
    #global-search-input::placeholder {
        color: #aaa;
    }
    .suggestions-container {
        max-height: 350px;
        overflow-y: auto;
        padding-right: 5px;
    }
    .suggestions-container::-webkit-scrollbar {
        width: 6px;
    }
    .suggestions-container::-webkit-scrollbar-thumb {
        background-color: #e0e0e0;
        border-radius: 4px;
    }
    .suggestions-title {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #999;
        margin-bottom: 12px;
        font-weight: 700;
    }
    .suggestion-item {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        border-radius: 10px;
        color: #333 !important;
        text-decoration: none !important;
        transition: background-color 0.2s, transform 0.15s;
        margin-bottom: 6px;
        cursor: pointer;
        border: 1px solid transparent;
    }
    .suggestion-item:hover, .suggestion-item.active {
        background-color: #f7f9fa;
        transform: translateX(4px);
        color: #de1d20 !important;
        border-color: #f0f0f0;
    }
    .suggestion-item-icon {
        margin-right: 12px;
        color: #de1d20;
        display: flex;
        align-items: center;
    }
    .suggestion-item-title {
        font-weight: 600;
        font-size: 15px;
    }
    .suggestion-item-category {
        font-size: 11px;
        background: #f1f2f6;
        color: #7f8c8d;
        padding: 2px 8px;
        border-radius: 20px;
        margin-left: 12px;
        font-weight: 500;
    }
    .suggestion-item-path {
        font-size: 11px;
        color: #999;
        margin-left: auto;
    }
    .no-results {
        padding: 30px;
        text-align: center;
        color: #777;
        font-size: 15px;
    }
    .no-results strong {
        color: #de1d20;
    }

    /* Mobile overrides to display search icon beautifully next to hamburger menu */
    @media (max-width: 991.98px) {
        header .header_mainbox {
            grid-template-columns: 1fr auto !important;
        }
        .header_mainbox .header_menubox {
            display: flex !important;
            align-items: center !important;
            gap: 15px !important;
        }
        .header_searchbox {
            display: block !important;
            cursor: pointer;
            line-height: 1;
        }
        .header_searchbox svg path {
            fill: #de1d20 !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchTrigger = document.getElementById('searchTrigger');
    const searchOverlay = document.getElementById('global-search-overlay');
    const searchCloseBtn = document.getElementById('searchCloseBtn');
    const searchInput = document.getElementById('global-search-input');
    const suggestionsList = document.getElementById('search-suggestions-list');
    const suggestionsTitle = document.getElementById('suggestions-title');

    // Premium predefined search index
    const searchIndex = [
        { title: "Academic Fees & Fee Structure", path: "/financials3", category: "Admissions", keywords: ["fee structure", "fees", "academic fees", "hostel fees", "mess fees", "nri fees", "foreign student fees", "financials", "payment", "cost"] },
        { title: "Admissions Process (SET)", path: "/admissionsprocess", category: "Admissions", keywords: ["admissions", "set exam", "entrance test", "apply", "registration", "admission process"] },
        { title: "Rolling Admission Process (RAP)", path: "/rap-admission", category: "Admissions", keywords: ["rap", "rolling admission", "admissions", "apply", "dates", "schedule"] },
        { title: "Eligibility Criteria", path: "/eligibility3", category: "Admissions", keywords: ["eligibility", "requirements", "criteria", "admission rules", "academic requirement"] },
        { title: "Education Loans & Scholarships", path: "/education-loans3", category: "Admissions", keywords: ["education loans", "loan", "bank loan", "scholarship", "financial aid"] },
        { title: "Career Options after SSLA", path: "/career-options3", category: "Admissions", keywords: ["career options", "careers", "jobs", "life after ssla", "placements", "future"] },
        { title: "International Students Admissions", path: "/international-student", category: "Admissions", keywords: ["international students", "nri", "foreign nationals", "fn", "oci", "admissions"] },
        { title: "Admission Webinars", path: "/admissions-webinar", category: "Admissions", keywords: ["webinar", "seminar", "online session", "information session", "admissions info"] },
        { title: "Programme Details", path: "/programme-details", category: "Admissions", keywords: ["programme details", "course details", "curriculum", "subjects"] },
        { title: "About SSLA (Symbiosis School for Liberal Arts)", path: "/aboutus", category: "About Us", keywords: ["about us", "ssla", "history", "liberal arts", "pune", "college", "campus"] },
        { title: "Director's Note", path: "/directorsnote", category: "About Us", keywords: ["director", "note", "message", "welcome", "head of department"] },
        { title: "Advisor's Note", path: "/advisorsnote", category: "About Us", keywords: ["advisor", "note", "message", "academic advice"] },
        { title: "Vision and Mission", path: "/vission-and-mission", category: "About Us", keywords: ["vision", "mission", "values", "goals", "philosophy"] },
        { title: "What SSLA Offers", path: "/programdetails", category: "Academics", keywords: ["academics", "program details", "majors", "minors", "degree offered", "what we offer"] },
        { title: "Programme Outcomes", path: "/programme-outcomes", category: "Academics", keywords: ["outcomes", "skills", "learning goals", "graduation outcomes"] },
        { title: "Programme Structure & Credits", path: "/programme-structure", category: "Academics", keywords: ["programme structure", "credits", "curriculum map", "semester wise"] },
        { title: "Assessments & Assignments", path: "/assessments-and-assignments", category: "Academics", keywords: ["assessments", "assignments", "exams", "grading", "evaluation"] },
        { title: "Credit System Information", path: "/credit-information", category: "Academics", keywords: ["credit system", "credits", "gpa", "course credits"] },
        { title: "Academic Bank of Credits (ABC)", path: "/academic-bank-of-credits", category: "Academics", keywords: ["academic bank of credits", "abc", "credit transfer", "government portal"] },
        { title: "Academic Calendar", path: "/academic-calender", category: "Academics", keywords: ["calendar", "schedule", "holidays", "semester dates", "academic calender"] },
        { title: "SSLA Library Resources", path: "/ssla-library", category: "Academics", keywords: ["library", "books", "journals", "e-resources", "study room"] },
        { title: "Additional Requirements", path: "/additional-requirement", category: "Academics", keywords: ["additional requirements", "eligibility", "prerequisites"] },
        { title: "Explore Our Courses (Majors/Minors)", path: "/courses", category: "Academics", keywords: ["courses", "explore courses", "majors", "minors", "cores", "electives"] },
        { title: "Faculty Profiles", path: "/faculty", category: "Community", keywords: ["faculty", "teachers", "professors", "lecturers", "staff list", "instructors"] },
        { title: "Staff Directory", path: "/staff", category: "Community", keywords: ["staff", "administration", "directory", "support staff", "office staff"] },
        { title: "Student Life & Clubs", path: "/student", category: "Community", keywords: ["student", "student life", "clubs", "activities", "campus life", "committees"] },
        { title: "Alumni Network & Success", path: "/alumni", category: "Community", keywords: ["alumni", "graduates", "alumni network", "success stories"] },
        { title: "Achievements & Awards", path: "/achievements", category: "Community", keywords: ["achievements", "awards", "ranking", "recognition", "success"] },
        { title: "Contact Us & Location", path: "/contact-us", category: "Contact Us", keywords: ["contact", "email", "phone number", "location", "address", "map", "office hours"] },
        { title: "Confluence Journal of Interdisciplinary Studies (CJIDS)", path: "/confluence-journal-interdisciplinary-studies", category: "Research", keywords: ["journal", "confluence", "cjids", "research journal", "publications", "interdisciplinary"] },
        { title: "Student Research Projects", path: "/student-research", category: "Research", keywords: ["student research", "projects", "thesis", "research paper"] },
        { title: "Research Colloquia & Workshops", path: "/research-colloquium", category: "Research", keywords: ["colloquium", "colloquia", "workshops", "seminars", "research cafe"] },
        { title: "Thinking Research at SSLA", path: "/thinking-research-at-ssla", category: "Research", keywords: ["thinking research", "research philosophy", "methodology"] },
        { title: "Symbiosis Literary Festival", path: "/symbiosis-literary-festival", category: "Events", keywords: ["literary festival", "lit fest", "events", "speakers", "books", "authors"] },
        { title: "Red Carpet Event", path: "/red-carpet", category: "Events", keywords: ["red carpet", "annual event", "showcase", "exhibition", "celebration"] },
        { title: "Inter-Collegiate Event (I.C.E.)", path: "/inter-collegiate-event", category: "Events", keywords: ["ice", "inter-collegiate", "festival", "competitions", "college fest"] },
        { title: "Life After SSLA Placement / Studies", path: "/life-after-ssla", category: "Admissions", keywords: ["life after ssla", "placements", "higher education", "jobs", "employability"] },
        
        // Courses
        { title: "Anthropology (Major/Minor)", path: "/course-anthropology", category: "Courses", keywords: ["anthropology", "culture", "human evolution", "major", "minor"] },
        { title: "Applied Environmental & Sustainability Science", path: "/course-appliedenviroment", category: "Courses", keywords: ["environmental science", "applied environment", "sustainability", "major", "minor", "ecology"] },
        { title: "Business Studies (Major/Minor)", path: "/course-business-studies", category: "Courses", keywords: ["business studies", "marketing", "management", "finance", "business"] },
        { title: "Media Studies (Major/Minor)", path: "/courese-media-studies", category: "Courses", keywords: ["media studies", "journalism", "mass communication", "advertising", "media"] },
        { title: "Philosophy (Major/Minor)", path: "/course-philoshpy", category: "Courses", keywords: ["philosophy", "logic", "ethics", "critical thinking", "major", "minor"] },
        { title: "Psychology (Major/Minor)", path: "/course-psychology", category: "Courses", keywords: ["psychology", "mental health", "human behavior", "clinical psychology", "counseling"] },
        { title: "Sociology (Major/Minor)", path: "/course-sociology", category: "Courses", keywords: ["sociology", "society", "social behavior", "institutions", "inequality"] },
        { title: "Education (Minor)", path: "/course-education", category: "Courses", keywords: ["education", "teaching", "pedagogy", "curriculum", "learning"] },
        { title: "English (Major/Minor)", path: "/course-english", category: "Courses", keywords: ["english", "literature", "creative writing", "poetry", "linguistics"] },
        { title: "History (Major/Minor)", path: "/course-history", category: "Courses", keywords: ["history", "world history", "indian history", "civilizations", "archives"] },
        { title: "Mathematics & Statistics (Minor)", path: "/course-mathematics-statistics", category: "Courses", keywords: ["mathematics", "math", "statistics", "data analysis", "calculus"] },
        { title: "Economics (Major/Minor)", path: "/course-economics", category: "Courses", keywords: ["economics", "microeconomics", "macroeconomics", "finance", "economy"] },
        { title: "Computer Studies (Major/Minor)", path: "/course-computer-studies", category: "Courses", keywords: ["computer studies", "programming", "coding", "software", "computer science"] },
        { title: "Political Science & Public Policy (Major/Minor)", path: "/course-political-science-public-policy", category: "Courses", keywords: ["political science", "public policy", "politics", "governance", "democracy"] },
        { title: "Law (Minor)", path: "/courses-law", category: "Courses", keywords: ["law", "legal studies", "jurisprudence", "constitution", "justice"] },
        { title: "Film Studies (Minor)", path: "/film-studies", category: "Courses", keywords: ["film studies", "cinema", "movies", "screenwriting", "direction"] },
        { title: "Performing Arts - Dance (Minor)", path: "/performing-arts-dance", category: "Courses", keywords: ["dance", "performing arts", "choreography", "movement"] },
        { title: "Performing Arts - Theatre (Minor)", path: "/course-performing-arts-theatre", category: "Courses", keywords: ["theatre", "acting", "drama", "stagecraft", "plays"] },
        { title: "Performing Arts - Music (Minor)", path: "/course-performing-arts-music", category: "Courses", keywords: ["music", "vocals", "instrumental", "composition", "harmony"] },
        { title: "Physics (Minor)", path: "/course-physics", category: "Courses", keywords: ["physics", "quantum mechanics", "relativity", "thermodynamics", "science"] },
        { title: "Women & Gender Studies (Minor)", path: "/course-women-gender-studies", category: "Courses", keywords: ["women studies", "gender studies", "feminism", "masculinity", "sexuality"] },
        { title: "Integrated Biology (Minor)", path: "/course-integrated-biology", category: "Courses", keywords: ["biology", "genetics", "evolution", "ecology", "life science"] },
        { title: "Peace & Conflict Studies (Minor)", path: "/course-peace-conflict-studies", category: "Courses", keywords: ["peace studies", "conflict resolution", "diplomacy", "international relations"] }
    ];

    // Popular links displayed when input is empty
    const popularLinks = [
        { title: "Academic Fees & Fee Structure", path: "/financials3", category: "Admissions" },
        { title: "Admissions Process (SET)", path: "/admissionsprocess", category: "Admissions" },
        { title: "Rolling Admission Process (RAP)", path: "/rap-admission", category: "Admissions" },
        { title: "Explore Our Courses (Majors/Minors)", path: "/courses", category: "Academics" },
        { title: "Contact Us & Location", path: "/contact-us", category: "Contact Us" }
    ];

    // Open Search
    function openSearch() {
        searchOverlay.style.display = 'flex';
        // force reflow
        searchOverlay.offsetHeight;
        searchOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            searchInput.focus();
        }, 100);
        showPopularLinks();
    }

    // Close Search
    function closeSearch() {
        searchOverlay.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            searchOverlay.style.display = 'none';
            searchInput.value = '';
        }, 300);
    }

    // Render suggestion items
    function renderSuggestions(items) {
        suggestionsList.innerHTML = '';
        if (items.length === 0) {
            suggestionsList.innerHTML = `<div class="no-results">No results found for "<strong>${escapeHtml(searchInput.value)}</strong>"</div>`;
            return;
        }

        items.forEach(item => {
            const suggestionItem = document.createElement('a');
            suggestionItem.href = item.path;
            suggestionItem.className = 'suggestion-item';
            suggestionItem.innerHTML = `
                <div class="suggestion-item-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"></path>
                    </svg>
                </div>
                <div class="suggestion-item-title">${item.title}</div>
                <div class="suggestion-item-category">${item.category}</div>
                <div class="suggestion-item-path">${item.path}</div>
            `;
            suggestionsList.appendChild(suggestionItem);
        });
    }

    function showPopularLinks() {
        suggestionsTitle.textContent = "Quick Links";
        renderSuggestions(popularLinks);
    }

    function escapeHtml(text) {
        return text
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    // Event listeners
    if (searchTrigger) {
        searchTrigger.addEventListener('click', function(e) {
            e.preventDefault();
            openSearch();
        });
    }

    if (searchCloseBtn) {
        searchCloseBtn.addEventListener('click', closeSearch);
    }

    // Close when clicking backdrop
    searchOverlay.addEventListener('click', function(e) {
        if (e.target === searchOverlay) {
            closeSearch();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
            closeSearch();
        }
    });

    // Search logic as user types
    searchInput.addEventListener('input', function() {
        const query = searchInput.value.trim().toLowerCase();
        
        if (query === '') {
            showPopularLinks();
            return;
        }

        suggestionsTitle.textContent = "Search Results";

        // Filter search index
        const results = searchIndex.filter(item => {
            const titleMatch = item.title.toLowerCase().includes(query);
            const categoryMatch = item.category.toLowerCase().includes(query);
            const pathMatch = item.path.toLowerCase().includes(query);
            const keywordMatch = item.keywords.some(keyword => keyword.toLowerCase().includes(query));
            return titleMatch || categoryMatch || pathMatch || keywordMatch;
        });

        // Limit results to top 8 for readability and premium look
        renderSuggestions(results.slice(0, 8));
    });
});
</script>