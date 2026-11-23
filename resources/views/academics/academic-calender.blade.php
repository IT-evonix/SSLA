@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Career options</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="student_research_main d-none">
    <!-- Inner section start -->
    <section class="student_research_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="inner__red_heading" data-aos="fade-up">
                        Academic Calender
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_stakeholder_mainbox" data-aos="fade-up">
                        <a href="{{ asset('assets/pdf/Academic-Calendar-Jan-May-2026.pdf') }}" target="_blank">
                            <div class="new_stakeholder_listing">
                                <div class="new_stakeholder_list_pdf_icon">
                                    <svg width="25" height="25" x="0" y="0" viewBox="0 0 48 48" fill-rule="evenodd">
                                        <g>
                                            <path
                                                d="m31.023 36.718 2.828 2.828a1 1 0 0 0 1.414 0l5.656-5.656a1 1 0 0 0-1.414-1.414l-4.949 4.949-2.121-2.121a1 1 0 0 0-1.414 1.414zM13 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 17H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 19.2zM13 27.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 25H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 27.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 28.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 27h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 27.2zM13 35.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 33H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 35.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 36.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 35h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 35.2zM21 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 19.2zM21 27.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 25h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 27.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 28.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 27h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 27.2zM21 35.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 33h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 35.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 36.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 35h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 35.2zM29 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 26.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 23 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 25 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 25.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 27 19.2zM37 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 34.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 31 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 33 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 33.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 35 19.2z"
                                                fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M27.517 43H6a5.004 5.004 0 0 1-3.536-1.464A5.004 5.004 0 0 1 1 38V10a5 5 0 0 1 5-5h3V4a3 3 0 1 1 6 0v1h14V4a3 3 0 1 1 6 0v1h3a5 5 0 0 1 5 5v17.517c2.443 2.019 4 5.07 4 8.483 0 6.071-4.929 11-11 11a10.979 10.979 0 0 1-8.483-4zM36 27c4.967 0 9 4.033 9 9s-4.033 9-9 9-9-4.033-9-9 4.033-9 9-9zm5-.799V15H3v23c0 .796.316 1.559.879 2.121A2.996 2.996 0 0 0 6 41h20.201C25.433 39.5 25 37.8 25 36c0-6.071 4.929-11 11-11 1.8 0 3.5.433 5 1.201zM35 7v1a3 3 0 1 1-6 0V7H15v1a3 3 0 1 1-6 0V7H6a3 3 0 0 0-3 3v3h38v-3a3 3 0 0 0-3-3zm-2-3v4a1 1 0 0 1-2 0V4a1 1 0 0 1 2 0zM13 4v4a1 1 0 0 1-2 0V4a1 1 0 0 1 2 0z"
                                                fill="#ffffff" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="new_stakeholder_list_heading_box">
                                    <div class="new_stakeholder_list_subheading">
                                        Academic Calender
                                    </div>
                                    <div class="new_stakeholder_list_heading">
                                        Jan - May 2026
                                    </div>
                                </div>
                                <div class="new_stakeholder_list_download_icon">
                                    <svg width="16" height="16" x="0" y="0" viewBox="0 0 682.667 682.667">
                                        <g>
                                            <defs>
                                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                    <path d="M0 512h512V0H0Z" fill="#000000" opacity="1"
                                                        data-original="#000000"></path>
                                                </clipPath>
                                            </defs>
                                            <path d="m0 0 125.5-125.5L251 0"
                                                style="stroke-width:40;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="matrix(1.33333 0 0 -1.33333 174 371.333)" fill="none"
                                                stroke="#000000" stroke-width="40" stroke-linecap="square"
                                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none"
                                                stroke-opacity="" data-original="#000000"></path>
                                            <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                <path d="M0 0v366"
                                                    style="stroke-width:40;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                    transform="translate(256 126)" fill="none" stroke="#000000"
                                                    stroke-width="40" stroke-linecap="square" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                    data-original="#000000"></path>
                                                <path d="M0 0h512"
                                                    style="stroke-width:40;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                    transform="translate(0 20)" fill="none" stroke="#000000"
                                                    stroke-width="40" stroke-linecap="butt" stroke-linejoin="miter"
                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                    data-original="#000000"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="{{ asset('assets/pdf/Academic-Calendar-Jul-Dec-2025.pdf') }}" target="_blank">
                            <div class="new_stakeholder_listing">
                                <div class="new_stakeholder_list_pdf_icon">
                                    <svg width="25" height="25" x="0" y="0" viewBox="0 0 48 48" fill-rule="evenodd">
                                        <g>
                                            <path
                                                d="m31.023 36.718 2.828 2.828a1 1 0 0 0 1.414 0l5.656-5.656a1 1 0 0 0-1.414-1.414l-4.949 4.949-2.121-2.121a1 1 0 0 0-1.414 1.414zM13 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 17H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 19.2zM13 27.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 25H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 27.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 28.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 27h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 27.2zM13 35.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 10.8 33H9.2c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 7 35.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059H9.2a.197.197 0 0 1-.141-.059A.197.197 0 0 1 9 36.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 9.2 35h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 11 35.2zM21 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 19.2zM21 27.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 25h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 27.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 28.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 27h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 27.2zM21 35.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 18.8 33h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 15 35.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 17 36.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 17.2 35h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 19 35.2zM29 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 26.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 23 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 25 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 25.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 27 19.2zM37 19.2c0-.583-.232-1.143-.644-1.556A2.205 2.205 0 0 0 34.8 17h-1.6c-.583 0-1.143.232-1.556.644A2.205 2.205 0 0 0 31 19.2v1.6c0 .583.232 1.143.644 1.556.413.412.973.644 1.556.644h1.6c.583 0 1.143-.232 1.556-.644.412-.413.644-.973.644-1.556zm-2 0v1.6a.197.197 0 0 1-.059.141.197.197 0 0 1-.141.059h-1.6a.197.197 0 0 1-.141-.059A.197.197 0 0 1 33 20.8v-1.6c0-.053.021-.104.059-.141A.197.197 0 0 1 33.2 19h1.6c.053 0 .104.021.141.059A.197.197 0 0 1 35 19.2z"
                                                fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            <path
                                                d="M27.517 43H6a5.004 5.004 0 0 1-3.536-1.464A5.004 5.004 0 0 1 1 38V10a5 5 0 0 1 5-5h3V4a3 3 0 1 1 6 0v1h14V4a3 3 0 1 1 6 0v1h3a5 5 0 0 1 5 5v17.517c2.443 2.019 4 5.07 4 8.483 0 6.071-4.929 11-11 11a10.979 10.979 0 0 1-8.483-4zM36 27c4.967 0 9 4.033 9 9s-4.033 9-9 9-9-4.033-9-9 4.033-9 9-9zm5-.799V15H3v23c0 .796.316 1.559.879 2.121A2.996 2.996 0 0 0 6 41h20.201C25.433 39.5 25 37.8 25 36c0-6.071 4.929-11 11-11 1.8 0 3.5.433 5 1.201zM35 7v1a3 3 0 1 1-6 0V7H15v1a3 3 0 1 1-6 0V7H6a3 3 0 0 0-3 3v3h38v-3a3 3 0 0 0-3-3zm-2-3v4a1 1 0 0 1-2 0V4a1 1 0 0 1 2 0zM13 4v4a1 1 0 0 1-2 0V4a1 1 0 0 1 2 0z"
                                                fill="#ffffff" opacity="1" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="new_stakeholder_list_heading_box">
                                    <div class="new_stakeholder_list_subheading">
                                        Academic Calender
                                    </div>
                                    <div class="new_stakeholder_list_heading">
                                        July - Dec 2025
                                    </div>
                                </div>
                                <div class="new_stakeholder_list_download_icon">
                                    <svg width="16" height="16" x="0" y="0" viewBox="0 0 682.667 682.667">
                                        <g>
                                            <defs>
                                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                    <path d="M0 512h512V0H0Z" fill="#000000" opacity="1"
                                                        data-original="#000000"></path>
                                                </clipPath>
                                            </defs>
                                            <path d="m0 0 125.5-125.5L251 0"
                                                style="stroke-width:40;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="matrix(1.33333 0 0 -1.33333 174 371.333)" fill="none"
                                                stroke="#000000" stroke-width="40" stroke-linecap="square"
                                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none"
                                                stroke-opacity="" data-original="#000000"></path>
                                            <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                <path d="M0 0v366"
                                                    style="stroke-width:40;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                    transform="translate(256 126)" fill="none" stroke="#000000"
                                                    stroke-width="40" stroke-linecap="square" stroke-linejoin="round"
                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                    data-original="#000000"></path>
                                                <path d="M0 0h512"
                                                    style="stroke-width:40;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                    transform="translate(0 20)" fill="none" stroke="#000000"
                                                    stroke-width="40" stroke-linecap="butt" stroke-linejoin="miter"
                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                    data-original="#000000"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner section ends  -->
</main>

<main class="student_research_main">
    <section class="student_research_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div>
                            <h1 class="inner__red_heading">
                                Academic Calendar July-Dec 2026
                            </h1>
                            <p class="m-0">
                                All holidays are tentative and subject to change as per the SIU Calendar.
                            </p>
                        </div>
                        <div class="legend">
                            <span class="legend-pill"><span class="legend-dot academic"></span> Academic</span>
                            <span class="legend-pill"><span class="legend-dot national"></span> National</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="new_academic_calender_table">
                                <div class="table-responsive mb-2">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Date</th>
                                                <th>Event</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="academic_event_color">
                                                <td>Sunday</td>
                                                <td>12 Jul 2026</td>
                                                <td rowspan="2">Orientation for Batch 2026-2030</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Saturday</td>
                                                <td>18 Jul 2026</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Wednesday</td>
                                                <td>15 Jul 2026</td>
                                                <td>18th PRC</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Monday</td>
                                                <td>20 Jul 2026</td>
                                                <td>Classes begin</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Thursday</td>
                                                <td>6 Aug 2026</td>
                                                <td>Staff meeting</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Thursday</td>
                                                <td>13 Aug 2026</td>
                                                <td>1st QIC meeting</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Saturday</td>
                                                <td>15 Aug 2026</td>
                                                <td>Holiday (Independence Day)</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Thursday</td>
                                                <td>20 Aug 2026</td>
                                                <td>COP Reports due for Batch 2024-28</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Wednesday</td>
                                                <td>26 Aug 2026</td>
                                                <td>Holiday (Eid-e-Milad)</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Friday</td>
                                                <td>28 Aug 2026</td>
                                                <td>Holiday (Raksha Bandhan)</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Tuesday</td>
                                                <td>1 Sep 2026</td>
                                                <td>Internship Reports due for Batch 2023-27</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Monday</td>
                                                <td>14 Sep 2026</td>
                                                <td>Holiday (Ganesh Chaturthi)</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Friday</td>
                                                <td>25 Sep 2026</td>
                                                <td>Holiday (Anant Chaturdashi)</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Wednesday</td>
                                                <td>1 Oct 2025</td>
                                                <td>
                                                    Deadline to share marks for assignments worth at least
                                                    35 marks (out of a total of 75 marks CA) with students
                                                    and Academics Department
                                                </td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Friday</td>
                                                <td>2 Oct 2026</td>
                                                <td>Holiday (Gandhi Jayanti)</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Tuesday</td>
                                                <td>20 Oct 2026</td>
                                                <td>Holiday (Dussehra)</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Saturday,<br>Sunday</td>
                                                <td>24-25 Oct 2026</td>
                                                <td>Symbiosis Literature Festival (tentative)</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Friday</td>
                                                <td>23 Oct 2026</td>
                                                <td>
                                                    Deadline to share marks for assignments worth at least
                                                    50 marks (out of a total of 75 marks CA) with students
                                                    and Academics Department
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Friday</td>
                                                <td>30th Oct 2026</td>
                                                <td>Traditional day (tentative)</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Friday</td>
                                                <td>6 Nov 2026</td>
                                                <td rowspan="2">Holidays (Diwali)</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Wednesday</td>
                                                <td>11 Nov 2026</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Friday</td>
                                                <td>13 Nov 2026</td>
                                                <td>QIC Meeting</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Monday</td>
                                                <td>16 Nov 2026</td>
                                                <td>
                                                    Attendance freezes (at 11.45 am) &amp;<br>
                                                    Last date to apply for condonation (12 noon)
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Monday</td>
                                                <td>16 Nov 2026</td>
                                                <td>
                                                    Deadline to share all CA marks with students
                                                    and Academics Department
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Tuesday</td>
                                                <td>17 Nov 2026</td>
                                                <td>Last date for students to request a correction in CA marks</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Wednesday</td>
                                                <td>18 Nov 2026</td>
                                                <td>
                                                    CNG list declared (Calculated as on 17th Nov);<br>
                                                    TNG list will be declared after finalizing CNG list<br>
                                                    CA marks freeze
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Thursday</td>
                                                <td>19 Nov 2026</td>
                                                <td>Staff meeting</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Friday</td>
                                                <td>20 Nov 2026</td>
                                                <td>Last date for faculty members to make any correction in CA marks
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Saturday</td>
                                                <td>21 Nov 2026</td>
                                                <td>Last day of classes</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Sunday</td>
                                                <td>22 Nov 2026</td>
                                                <td rowspan="2">Study Break</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Monday</td>
                                                <td>23 Nov 2026</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Monday</td>
                                                <td>23 Nov 2026</td>
                                                <td>2nd QIC meeting</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Tuesday</td>
                                                <td>24 Nov 2026</td>
                                                <td rowspan="2">Semester End Evaluations - SEE</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Wednesday</td>
                                                <td>9 Dec 2026</td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Thursday</td>
                                                <td>10 Dec 2026</td>
                                                <td rowspan="2">
                                                    Backlog examinations (including Research Project
                                                    (dissertation), Internship and COP – exact dates
                                                    to be declared 2 months in advance)
                                                </td>
                                            </tr>
                                            <tr class="academic_event_color">
                                                <td>Wednesday</td>
                                                <td>23 Dec 2026</td>
                                            </tr>
                                            <tr class="national_holiday_color">
                                                <td>Friday</td>
                                                <td>25 Dec 2026</td>
                                                <td>Christmas</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('footer')