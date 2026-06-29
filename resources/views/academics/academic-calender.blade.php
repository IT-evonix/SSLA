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
                                Academic Calender
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
                    <div class="calendar-columns">
                        <section class="calendar-card">
                            <header class="calendar-card-header">
                                <div class="title-row">
                                    <h2 id="cal1-title">August 2024</h2>
                                    <div class="nav-buttons">
                                        <button class="nav-btn" onclick="changeMonth(1, -1)">
                                            <svg height="16" viewBox="0 0 24 24" width="16">
                                                <g id="_17" data-name="17">
                                                    <path
                                                        d="m15 19a1 1 0 0 1 -.71-.29l-6-6a1 1 0 0 1 0-1.41l6-6a1 1 0 0 1 1.41 1.41l-5.29 5.29 5.29 5.29a1 1 0 0 1 -.7 1.71z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="nav-btn" onclick="changeMonth(1, 1)">
                                            <svg id="fi_2989988" height="16" viewBox="0 0 6.3499999 6.3500002"
                                                width="16">
                                                <g id="layer1" transform="translate(0 -290.65)">
                                                    <path id="path9429"
                                                        d="m2.2580394 291.96502a.26460982.26460982 0 0 0 -.1741496.46871l1.6190225 1.38699-1.6190225 1.38648a.26460982.26460982 0 1 0 .3436483.40049l1.8536335-1.58595a.26460982.26460982 0 0 0 0-.40256l-1.8536335-1.5875a.26460982.26460982 0 0 0 -.1694987-.0667z"
                                                        font-variant-ligatures="normal" font-variant-position="normal"
                                                        font-variant-caps="normal" font-variant-numeric="normal"
                                                        font-variant-alternates="normal" font-feature-settings="normal"
                                                        text-indent="0" text-align="start" text-decoration-line="none"
                                                        text-decoration-style="solid" text-decoration-color="rgb(0,0,0)"
                                                        text-transform="none" text-orientation="mixed"
                                                        white-space="normal" shape-padding="0" isolation="auto"
                                                        mix-blend-mode="normal" solid-color="rgb(0,0,0)"
                                                        solid-opacity="1" vector-effect="none"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </header>
                            <div class="weekday-row">
                                <div>SUN</div>
                                <div>MON</div>
                                <div>TUE</div>
                                <div>WED</div>
                                <div>THU</div>
                                <div>FRI</div>
                                <div>SAT</div>
                            </div>
                            <div class="calendar-grid" id="cal1-grid"></div>
                        </section>

                        <section class="calendar-card">
                            <header class="calendar-card-header">
                                <div class="title-row">
                                    <h2 id="cal2-title">September 2024</h2>
                                    <div class="nav-buttons">
                                        <button class="nav-btn" onclick="changeMonth(2, -1)">
                                            <svg height="16" viewBox="0 0 24 24" width="16">
                                                <g id="_17" data-name="17">
                                                    <path
                                                        d="m15 19a1 1 0 0 1 -.71-.29l-6-6a1 1 0 0 1 0-1.41l6-6a1 1 0 0 1 1.41 1.41l-5.29 5.29 5.29 5.29a1 1 0 0 1 -.7 1.71z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="nav-btn" onclick="changeMonth(2, 1)">
                                            <svg id="fi_2989988" height="16" viewBox="0 0 6.3499999 6.3500002"
                                                width="16">
                                                <g id="layer1" transform="translate(0 -290.65)">
                                                    <path id="path9429"
                                                        d="m2.2580394 291.96502a.26460982.26460982 0 0 0 -.1741496.46871l1.6190225 1.38699-1.6190225 1.38648a.26460982.26460982 0 1 0 .3436483.40049l1.8536335-1.58595a.26460982.26460982 0 0 0 0-.40256l-1.8536335-1.5875a.26460982.26460982 0 0 0 -.1694987-.0667z"
                                                        font-variant-ligatures="normal" font-variant-position="normal"
                                                        font-variant-caps="normal" font-variant-numeric="normal"
                                                        font-variant-alternates="normal" font-feature-settings="normal"
                                                        text-indent="0" text-align="start" text-decoration-line="none"
                                                        text-decoration-style="solid" text-decoration-color="rgb(0,0,0)"
                                                        text-transform="none" text-orientation="mixed"
                                                        white-space="normal" shape-padding="0" isolation="auto"
                                                        mix-blend-mode="normal" solid-color="rgb(0,0,0)"
                                                        solid-opacity="1" vector-effect="none"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </header>
                            <div class="weekday-row">
                                <div>SUN</div>
                                <div>MON</div>
                                <div>TUE</div>
                                <div>WED</div>
                                <div>THU</div>
                                <div>FRI</div>
                                <div>SAT</div>
                            </div>
                            <div class="calendar-grid" id="cal2-grid"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="holiday-panel" id="holiday-panel">
    <div class="panel-content" id="panel-content">
        <div class="panel-body">
            <div class="panel-top-row">
                <div class="badge-type" id="holiday-badge">Type</div>
                <button class="panel-close" onclick="closePanel()">
                    <svg fill="none" height="20" viewBox="0 0 24 24" width="20">
                        <path clip-rule="evenodd"
                            d="m5.00073 17.5864c-.3905.3906-.39044 1.0237.00012 1.4142s1.02372.3905 1.41421-.0001l5.58524-5.5862 5.5857 5.5857c.3905.3905 1.0237.3905 1.4142 0s.3905-1.0237 0-1.4142l-5.5858-5.5858 5.5854-5.58638c.3904-.39056.3904-1.02372-.0002-1.41421-.3905-.3905-1.0237-.39044-1.4142.00012l-5.5853 5.58627-5.58572-5.58579c-.39052-.39052-1.02369-.39052-1.41421 0-.39053.39053-.39053 1.02369 0 1.41422l5.58593 5.58587z"
                            fill="rgb(0,0,0)" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <h3 id="holiday-name">Holiday Name</h3>
            <p class="panel-date" id="holiday-date">Date String</p>
            <div class="panel-divider"></div>
            <p class="panel-desc" id="holiday-desc">Detailed description of the institutional or national holiday.</p>
        </div>
        <div class="panel-footer d-none">
            <button class="btn-primary" onclick="closePanel()">Acknowledge</button>
        </div>
    </div>
</div>

<script>
const holidays = {
    "2026-01-02": {
        name: "Classes begin",
        type: "Academic Event",
        colorClass: "holiday-academic",
        desc: "The official assembly for all faculty members to inaugurate the new academic year and discuss research priorities."
    },
    "2026-01-14": {
        name: "Makar Sankranti",
        type: "National Holiday",
        colorClass: "holiday-national",
        desc: "Official commencement of the Fall academic session. Enrollment verification and syllabus distribution day."
    },
    "2025-07-14": {
        name: "15th PRC Meeting",
        type: "Academic Event",
        colorClass: "holiday-academic",
        desc: "The institution is closed in observance of Labor Day. All research labs and libraries will remain accessible via keycard."
    },
    "2025-07-21": {
        name: "Classes begin",
        type: "Academic Event",
        colorClass: "holiday-academic",
        desc: "The institution is closed in observance of Labor Day. All research labs and libraries will remain accessible via keycard."
    },


    // "2024-09-02": {
    //     name: "Labor Day",
    //     type: "National Holiday",
    //     colorClass: "holiday-national",
    //     desc: "The institution is closed in observance of Labor Day. All research labs and libraries will remain accessible via keycard."
    // },
    // "2024-09-21": {
    //     name: "Research Symposium",
    //     type: "Conference",
    //     colorClass: "holiday-conference",
    //     desc: "A full-day event showcasing ongoing institutional research projects and collaborative faculty presentations."
    // }
};

// State for both calendars
const state = {
    cal1: {
        year: 2026,
        month: 0
    }, 
    cal2: {
        year: 2025,
        month: 6
    }
};

const monthNamesCal1 = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
    "October", "November", "December"
];

const monthNamesCal2 = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
    "October", "November", "December"
];

const monthNamesByCal = {
    1: monthNamesCal1,
    2: monthNamesCal2
};

function renderCalendar(id) {
    const calState = state[`cal${id}`];
    const grid = document.getElementById(`cal${id}-grid`);
    const title = document.getElementById(`cal${id}-title`);

    grid.innerHTML = '';
    title.innerText = `${monthNamesByCal[id][calState.month]} ${calState.year}`;

    const firstDay = new Date(calState.year, calState.month, 1).getDay();
    const daysInMonth = new Date(calState.year, calState.month + 1, 0).getDate();

    for (let i = 0; i < firstDay; i++) {
        grid.innerHTML += `<div class="day-cell empty"></div>`;
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const dateKey =
            `${calState.year}-${String(calState.month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        const isHoliday = holidays[dateKey];

        const cell = document.createElement('div');
        cell.className = `day-cell${isHoliday ? ` holiday ${isHoliday.colorClass}` : ''}`;
        cell.innerText = day;

        if (isHoliday) {
            cell.onclick = () => showHoliday(dateKey);
        } else {
            cell.onclick = () => showEmptyDay(day, calState.month + 1, calState.year);
        }

        grid.appendChild(cell);
    }
}

function changeMonth(id, delta) {
    const calKey = `cal${id}`;
    let newMonth = state[calKey].month + delta;
    let newYear = state[calKey].year;

    if (newMonth < 0) {
        newMonth = 11;
        newYear--;
    } else if (newMonth > 11) {
        newMonth = 0;
        newYear++;
    }

    state[calKey].month = newMonth;
    state[calKey].year = newYear;
    renderCalendar(id);
}

function showHoliday(key) {
    const data = holidays[key];
    const date = new Date(key + 'T00:00:00');
    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    document.getElementById('holiday-name').innerText = data.name;
    document.getElementById('holiday-badge').innerText = data.type;
    document.getElementById('holiday-date').innerText = date.toLocaleDateString('en-US', options);
    document.getElementById('holiday-desc').innerText = data.desc;

    openPanel();
}

function showEmptyDay(day, month, year) {
    const date = new Date(year, month - 1, day);
    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    document.getElementById('holiday-name').innerText = "Academic Workday";
    document.getElementById('holiday-badge').innerText = "Standard";
    document.getElementById('holiday-date').innerText = date.toLocaleDateString('en-US', options);
    document.getElementById('holiday-desc').innerText =
        "Regular academic operations are in effect. No institutional holidays or special events scheduled for this date.";

    openPanel();
}

function openPanel() {
    const panel = document.getElementById('holiday-panel');
    panel.classList.add('show');
    setTimeout(() => {
        document.getElementById('panel-content').classList.add('modal-enter-active');
    }, 10);
}

function closePanel() {
    document.getElementById('holiday-panel').classList.remove('show');
    document.getElementById('panel-content').classList.remove('modal-enter-active');
}

// Initial render
renderCalendar(1);
renderCalendar(2);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closePanel();
});
</script>

@include('footer')
