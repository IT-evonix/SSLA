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
                                                            <div class="megamenu_listing">
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
                                                            </div>
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
                                                                    <div class="mega_menu_name_box">Research Colloquia,
                                                                        Workshops and Cafes</div>
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
                                                                    <div class="mega_menu_name_box">SSLA Presents</div>
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
                                                                    <div class="mega_menu_name_box">Speical Lecture
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="header_searchbox">
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
                        <!-- <div class="admission_floating_box">
                            <a href="" id="blinking-button">
                                Admission Open
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>