@include('header')

<!-- <style>
body{
    overflow: visible !important;
    padding: 0 !important;
}
</style> -->

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
<main class="academics_courses_mainbox">
    <!-- Inner section start -->
    <section class="new_credit_information_section our_courses_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="top">
                    <h1 class="inner__red_heading">Explore Our Courses</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="our_courses_rightbox pt-0">
                        <div class="our_courses_tabingbox">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home-tab-pane"
                                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                        Majors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile-tab-pane"
                                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                        Minors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact-tab-pane"
                                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                        Cores
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="settings-tab" data-bs-toggle="tab" href="#settings-tab-pane"
                                        type="button" role="tab" aria-controls="settings-tab-pane"
                                        aria-selected="false">
                                        Electives
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="new_tab_courses_mainbox">
                                        <div class="new_tab_courses_parabox">
                                            <p>
                                                It closely mirrors international standards for Liberal Arts where
                                                students are offered a wide range of learning experiences through the
                                                Electives, Cores, Majors and Minors. The Electives and Cores offer an
                                                interdisciplinary base and the Major and Minor provide an in depth
                                                understanding of the disciplines. Liberal Arts at SSLA also aims to
                                                fulfil a niche gap in the industry by inculcating core transferable
                                                skills among its students
                                            </p>
                                        </div>
                                        <div class="new_tab_courses_listing_mainbox">
                                            <a href="{{url('/course-anthropology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Anthropology.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Anthropology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-appliedenviroment')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Applied-Environmental-and-Sustainability-Science.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Applied Environmental
                                                        and Sustainability Science</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-business-studies')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Business-Studies.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Business Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-computer-studies')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Computer-Studies.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Computer Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-economics')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Economics.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Economics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-education')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Education.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Education</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-english')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/English.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">English</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-history')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/History.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">History</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/International-Relations.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">International Relations
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-mathematics-statistics')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Mathematics-and-Statistics.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Mathematics &
                                                        Statistics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/courese-media-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Media-Studies.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Media Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-philoshpy')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Philosophy.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Philosophy</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-political-science-public-policy')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Political-Science-and-Public-Policy.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Political Science &
                                                        Public Policy</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-psychology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Psychology.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Psychology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-sociology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Sociology.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Sociology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox">

                                        <div class="new_tab_courses_listing_mainbox">

                                            <a href="{{url('/course-integrated-biology')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Integrated-Biology.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Integrated Biology
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/film-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Film-Studies.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Film Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/courses-law')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Law.jpg') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Law</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-peace-conflict-studies')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Peace-and-Conflict-Studies.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Peace & Conflict
                                                        Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Dance-Theatre-and-Music.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Dance,
                                                        Theatre & Music</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-performing-arts-theatre')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Theatre.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts:
                                                        Theatre</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-performing-arts-music')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Music.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Music
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/performing-arts-dance')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Dance.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Dance
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-physics')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Physics.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Physics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-women-gender-studies')}}"
                                                class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Women-and-Gender-Studies.jpg') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Women & Gender Studies
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">

                                    <div class="our_courses_list_mainbox">

                                        <div class="new_tab_courses_listing_mainbox">

                                            <a href="{{url('/semester-one')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-11.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 1
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-two')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-12.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 2</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-three')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-13.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 3</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-four')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-14.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 4
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-five')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-15.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 5</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-six')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-16.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 6</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-seven')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-17.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 7
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/semester-eight')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/semester-18.webp') }}"
                                                        alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Semester 8
                                                    </div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA" />
                                                            <path
                                                                d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel"
                                    aria-labelledby="settings-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox table__our_courses_list_mainbox">
                                        <div class="table-responsive" style="min-width: 100%;">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th width="15%">Catalog Course Code</th>
                                                        <th width="20%">Course Name</th>
                                                        <th>Course Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>T6119</td>
                                                        <td>Reading World Poetry 2</td>
                                                        <td>
                                                            Reading World Poetry–II is an undergraduate course that
                                                            introduces students to major poetic traditions across
                                                            cultures, regions, and historical periods. The course
                                                            explores mystical Indian poets, voices from East Asia, the
                                                            Middle East, Europe, Australia, New Zealand, South America,
                                                            and Britain, alongside long poems and brief histories of
                                                            poetry. Through close reading, comparative analysis, and
                                                            interdisciplinary perspectives, students engage with
                                                            enduring human values, cultural contexts, and poetic forms
                                                            such as haiku and epic sections. Emphasis is placed on
                                                            critical thinking, informed appreciation, and understanding
                                                            the creative process of poetry through interactive
                                                            discussions and continuous assessment.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1236</td>
                                                        <td>Law Relating to Intellectual Property Rights</td>
                                                        <td>
                                                            Law Relating to Intellectual Property Rights introduces
                                                            undergraduate students to the foundations, scope, and
                                                            contemporary relevance of intellectual property in a
                                                            globalized knowledge economy. The course examines the nature
                                                            and creation of intellectual property, the rationale for its
                                                            protection, and the legal frameworks governing copyrights,
                                                            patents, trademarks, designs, and geographical indications.
                                                            Students engage with national and international regimes such
                                                            as TRIPS, GATT, and the Patent Cooperation Treaty, while
                                                            also exploring emerging areas including software,
                                                            biotechnology, domain names, and Creative Commons. Through
                                                            lectures, case analysis, moot courts, opinion writing, and
                                                            debates, the course develops legal reasoning, critical
                                                            analysis, and practical understanding of IPR.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1235</td>
                                                        <td>Law Relating to Information Technology</td>
                                                        <td>
                                                            Law Relating to Information Technology introduces
                                                            undergraduate students to the dynamic relationship between
                                                            law and rapidly evolving digital technologies. The course
                                                            examines the foundations of cyber law with a primary focus
                                                            on the Indian legal framework, while also engaging with key
                                                            international perspectives. Students study issues related to
                                                            cybercrime, e-commerce, digital signatures, electronic
                                                            contracts, jurisdiction, and digital evidence, along with
                                                            the intersection of cyber law and intellectual property
                                                            rights. Through lectures, case discussions, moot courts,
                                                            opinion writing, and critical analysis of legal
                                                            developments, the course builds an understanding of how law
                                                            responds to technological change and equips students with
                                                            analytical and practical skills to address contemporary
                                                            cyber legal challenges.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T2879</td>
                                                        <td>Living with Climate Change</td>
                                                        <td>
                                                            Living with Climate Change is an undergraduate course that
                                                            examines climate change as a scientific, social, economic,
                                                            and political challenge. The course introduces the science
                                                            of climate change, its global and Indian impacts, and the
                                                            vulnerabilities of diverse ecosystems and communities. It
                                                            explores climate justice, equity, development debates, and
                                                            the links between poverty, gender, and environmental change.
                                                            Students engage with international and national policy
                                                            frameworks, including the UNFCCC and India’s climate
                                                            initiatives, and examine action perspectives at global,
                                                            national, and local levels. Through interactive discussions,
                                                            case studies, and applied learning, the course encourages
                                                            critical thinking and practical approaches to sustainable
                                                            and climate-resilient living.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T4392</td>
                                                        <td>Introduction to Wellness Management, Complementary and
                                                            Alternative Medicine</td>
                                                        <td>
                                                            Introduction to Wellness Management, Complementary and
                                                            Alternative Medicine is an undergraduate elective that
                                                            familiarizes students with diverse approaches to health and
                                                            well-being beyond conventional medicine. The course explores
                                                            mind-body interactions through practices such as yoga,
                                                            meditation, and pranayama, alongside dietary awareness,
                                                            nutrition, and lifestyle-based wellness. Students are
                                                            introduced to various complementary and alternative
                                                            therapies including homeopathy, naturopathy, acupuncture,
                                                            aromatherapy, and energy-based healing methods, while
                                                            critically examining their benefits, risks, and scientific
                                                            foundations. Emphasis is placed on understanding stress,
                                                            disease factors, and preventive care in everyday life.
                                                            Through interactive discussions and applied learning, the
                                                            course encourages informed, holistic, and positive
                                                            health-related decision-making.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6330</td>
                                                        <td>Introduction to Social Justice</td>
                                                        <td>
                                                            This course it is hoped will stimulate critical thinking in
                                                            the young minds and help them to comprehend their lived
                                                            experiences and social realities. India is such a
                                                            heterogeneous society with so many cultures and sub
                                                            cultures, social and religious differences that it is
                                                            difficult to understand the dynamics of all these which get
                                                            reflected in social policies and legislations. This course
                                                            is conceived and structured to enable the students to
                                                            identify, comprehend, and de-construct these complexities
                                                            and understand the internal dynamics of all these
                                                            differences. Critical thinking may also motivate them to
                                                            address issues of injustice that they experience and see
                                                            around them in their own innovative ways, influence policy
                                                            and law making and strengthen the processes to bring about
                                                            greater social justice in our society.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6224</td>
                                                        <td>Urdu Paper 1</td>
                                                        <td>
                                                            This course has been created for beginners and is intended
                                                            to enable basic communication using the four skills:
                                                            reading, writing, listening and speaking. Students learn to
                                                            read and write Urdu alphabets, words and sentences and build
                                                            up a basic vocabulary.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6269</td>
                                                        <td>Greek Philosophy</td>
                                                        <td>
                                                            This course is aimed at students with little or no
                                                            background in Philosophy. Through the ancient Greeks,
                                                            students will learn about how Philosophy took birth what its
                                                            lasting influence has been on civilization, all across the
                                                            globe. Pioneers of philosophical thinking will be explored
                                                            through their own writings. A historical approach will be
                                                            taken through most of the course, starting with the early
                                                            Greek philosopher, moving to Socrates, Plato & Aristotle.
                                                            The lasting influence of these systems of thought will be
                                                            discussed and examined in class.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6349</td>
                                                        <td>Analysis of Current Events</td>
                                                        <td>
                                                            Current Events is a one-semester course /workshop,
                                                            structured to give the student an understanding of current
                                                            issues in areas as wide as sports, politics, culture,
                                                            history, science, economics, finance etc.
                                                            In this course a cultural or sporting event could be
                                                            analyzed along with political, financial and other issues.
                                                            We will make an attempt to look beyond the obvious and
                                                            develop critical understanding.
                                                            The course emphasizes research done by the student covering
                                                            topics that hold meaning in today’s life.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6267</td>
                                                        <td>Women Philosophers</td>
                                                        <td>
                                                            The mind of a woman, her experience of her own embodiment,
                                                            her voice as heard in her time and questions that remain
                                                            unanswered are what this course aims to present. It is not a
                                                            feminist denouncement of the patriarchal male, nor is it a
                                                            battle of the sexes. It is a journey—a journey into the
                                                            female experience, a search for identity and desire for
                                                            self-expression. The course is entitled Women Philosophers
                                                            because it also explores ideas put forth by philosophers who
                                                            happen to be women. It looks at moral prejudices, the
                                                            sovereignty of good and an ethics of care (that changes the
                                                            moral question from "what is just?" to "how to respond?").
                                                            It brings to the fore ideas, thoughts and dreams on freedom,
                                                            individuality and cultural politics. In dialogue with minds
                                                            that intrigue and challenge us, we find our own truths, our
                                                            own identity and our own voice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1043</td>
                                                        <td>Law of Torts</td>
                                                        <td>
                                                            'Law of Torts' sets out the law of private rights and
                                                            remedies which are not covered by statutes. Students need to
                                                            be well acquainted with this branch of law governing actions
                                                            for damages for injuries to certain kinds of rights, like
                                                            the right to personal security, property and reputation.
                                                            This branch of common law has large potential to expand and
                                                            apply its principles in contemporary areas like Human
                                                            Rights, Environmental Rights, and Intellectual Property
                                                            Rights. Hence, a student of Law needs to have good knowledge
                                                            about Law of Torts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6108</td>
                                                        <td>Creative Dance as a Narrative: Uday Shankar's Form</td>
                                                        <td>
                                                            Creative Dance as a Narrative: Uday Shankar’s Form
                                                            introduces students to the evolution of Indian dance through
                                                            the innovative vision of Uday Shankar. The course examines
                                                            classical and folk dance traditions of India while
                                                            highlighting how Shankar broke conventional boundaries to
                                                            create a modern, narrative-driven dance form. Students
                                                            explore the theoretical foundations of dance, the
                                                            Natyashastra, and the social role of performance, alongside
                                                            practical understanding of Shankar’s choreographic style and
                                                            movement vocabulary. Through multimedia resources,
                                                            demonstrations, and critical scholarship, the course
                                                            situates Uday Shankar’s work as a cultural narrative of
                                                            modern India, fostering analytical thinking, creative
                                                            expression, and effective written and verbal communication.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6091</td>
                                                        <td>Introduction to Violence, Conflict and Peace Studies</td>
                                                        <td>
                                                            This course is for students who want to understand the world
                                                            and make a meaningful difference while maintaining balance
                                                            in their lives. It focuses on recognizing different levels
                                                            of violence and conflict, from interpersonal and community
                                                            settings to national and global contexts. Students examine
                                                            both direct violence and structural violence rooted in
                                                            institutional inequality. The course emphasizes practical
                                                            applications of peacebuilding, broadly understood to include
                                                            conflict resolution, human rights, development, security,
                                                            social justice, and advocacy. Assessment is based on
                                                            structured, flexible assignments rather than exams, allowing
                                                            students to engage deeply with areas of personal interest
                                                            while developing practical theoretical insights for
                                                            real-world peacebuilding.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6305</td>
                                                        <td>Marxism</td>
                                                        <td>
                                                            The course on Marxism introduces undergraduate students to
                                                            Marxism as a socio-economic and political theory and
                                                            examines its evolution, applications, and critiques.
                                                            Beginning with the historical context of colonialism,
                                                            industrial capitalism, and democratic revolutions, the
                                                            course explores key Marxian concepts such as dialectical and
                                                            historical materialism, alienation, exploitation,
                                                            imperialism, the state, revolution, socialism, and
                                                            communism. It critically engages with major contributions by
                                                            thinkers including Lenin, Gramsci, Lukács, Mao, and the
                                                            Frankfurt School, while analyzing Marxism’s influence on
                                                            twentieth-century political systems. Through interactive
                                                            discussions, group research, and continuous assessment,
                                                            students develop analytical skills to evaluate Marxism’s
                                                            relevance in contemporary global politics.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6671</td>
                                                        <td>Oop's: Objects Out of Place, the Unexplained and the
                                                            Unexplainable</td>
                                                        <td>
                                                            Throughout one’s life we have read or heard about Histories
                                                            Mysteries, Legends, Myths and things that just should not be
                                                            there - the infamous OOP’s or Objects Out of Place. This
                                                            course is a journey that will take us through the Ages and
                                                            Around the World as we together search the mass of material
                                                            generated from scientific, traditional or just plain unusual
                                                            perspectives. This course is an attempt to understand these
                                                            enigmatic mysteries.
                                                            We will look at how ancient people and cultures viewed the
                                                            stories and events that were interwoven into their lives and
                                                            identities – the very stories that we often today treat as
                                                            fiction, legend or myth. We will re-evaluate a small sample
                                                            of these stories and events to see if we can bring a fresh
                                                            and modern perspective that will replace explanations often
                                                            crafted during the Colonial Age of Discovery with its
                                                            inherent Western and 17th - 18th Century Perspective.
                                                            During this journey we will also look at how science and
                                                            society view these topics and the reasons why they do so. We
                                                            will look at theories developed to ‘explain’ or ‘solve’ them
                                                            to see whether they follow established scientific research
                                                            methodologies to try and determine how much value to place
                                                            on them based on the corpus of available material.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>THM6106</td>
                                                        <td>Mahabharata</td>
                                                        <td>
                                                            The Mahabharata course introduces students to one of India’s
                                                            most influential epics through a multidisciplinary and
                                                            comparative framework. Students engage with the narrative
                                                            across the eighteen parvas while situating the epic within
                                                            ancient Indian history and culture. The course examines the
                                                            Mahabharata through perspectives from politics, ethics,
                                                            psychology, anthropology, archaeology, and philosophy, and
                                                            compares it with other Indian and Western epics. Emphasis is
                                                            placed on concepts such as dharma, adharma, just war,
                                                            leadership, and moral dilemmas. Through interactive
                                                            discussions, multimedia resources, and expert insights,
                                                            students explore the epic’s continuing relevance in
                                                            contemporary life while developing critical thinking,
                                                            communication skills, and academic integrity.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6120</td>
                                                        <td>The Novel</td>
                                                        <td>
                                                            The novel is a mighty melting pot and as a genre resists
                                                            exact definition. It may be said to be a prose fiction of a
                                                            reasonable length, though there are novels in verse.
                                                            Typically written in a narrative style and presented as a
                                                            bound book, Novels tell stories.
                                                            The novel has been a part of human culture for a few hundred
                                                            years, although its origins are somewhat debated. Regardless
                                                            of how it began, the novel has risen to prominence and
                                                            remained one of the most popular and treasured examples of
                                                            human culture and writing. Its form and presentation tends
                                                            to change with the times, but it remains an essential part
                                                            of the literary cultures of nearly all societies around the
                                                            world.
                                                            Through the novels taught in this module, students may have
                                                            the opportunity to investigate human consciousness, go on
                                                            adventures recounted, or follow historical, sociological,
                                                            and psychological tales that portray human thought, culture,
                                                            tradition, philosophy, perception and much more, through the
                                                            ages
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6092</td>
                                                        <td>Comparative Mythology</td>
                                                        <td>
                                                            Comparative Mythology introduces students to myths from
                                                            diverse cultures through an interdisciplinary and analytical
                                                            framework. The course examines symbols, narratives, and
                                                            archetypal patterns across world mythologies, drawing on
                                                            approaches from symbolic anthropology, depth psychology,
                                                            comparative religion, and myth criticism. Students study
                                                            creation myths, journey myths, rituals, and archetypes
                                                            through thinkers such as Jung, Eliade, Campbell, Zimmer, and
                                                            Coomaraswamy. Emphasis is placed on interpreting verbal and
                                                            visual motifs and understanding myth as a fundamental mode
                                                            of human expression. Through interactive discussions and
                                                            cross-cultural comparisons, the course encourages students
                                                            to engage critically with myths as living narratives that
                                                            shape individual identity, cultural imagination, and
                                                            contemporary worldviews.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1202</td>
                                                        <td>Indian Penal Code</td>
                                                        <td>
                                                            The Indian Penal Code course introduces undergraduate
                                                            students to the foundations of criminal law in India within
                                                            its social, economic, and political context. The course
                                                            examines the concept of crime, elements of criminal
                                                            liability, and the historical evolution of the IPC, while
                                                            engaging with offences against the human body, property, and
                                                            group liability. Attention is also given to emerging forms
                                                            of crime such as terrorism, environmental offences, money
                                                            laundering, and crimes against vulnerable communities.
                                                            Through lectures, moot courts, opinion writing, and critical
                                                            discussions, students develop an analytical understanding of
                                                            criminal responsibility and the role of law in creating a
                                                            just, humane, and responsive society.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6331</td>
                                                        <td>Revisiting the City: Urbanization, Urban Aspiration and
                                                            Urban Reality</td>
                                                        <td>
                                                            Revisiting the City: Urbanization, Urban Aspiration and
                                                            Urban Reality examines Pune as a dynamic urban space shaped
                                                            by economic change, cultural practices, and global
                                                            influences since the 1990s. The course traces the city’s
                                                            urbanization history while exploring themes of aspiration,
                                                            consumption, commodification, and spatial segregation.
                                                            Students analyze urban inequalities related to class, caste,
                                                            gender, migration, and displacement, alongside processes of
                                                            exclusion and gated development. Using sociological theory,
                                                            visual media, and field research, the course connects local
                                                            urban experiences to broader global city frameworks. Through
                                                            critical discussions and empirical engagement, students
                                                            develop an informed understanding of urban culture,
                                                            identity, and the lived realities of contemporary city life.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6214</td>
                                                        <td>20th Century - Bloodiest Century in Human History</td>
                                                        <td>
                                                            The very first decade of the 21st century has witnessed the
                                                            world’s sole remaining super power engaging in costly and
                                                            seemingly endless wars. The wars began with the 9/11 attacks
                                                            on the world trade center towers in New York. From the
                                                            American perspective the attacks were a geopolitical
                                                            disaster as they destroyed the American self-perception of
                                                            insularity and impregnability. The wars of the 21st century
                                                            however cannot be studied in isolation. This course seeks to
                                                            comprehend the evolving relationship between the wars of the
                                                            21st and the wars of the 20th century.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6121</td>
                                                        <td>Haiku Poetry</td>
                                                        <td>
                                                            This course introduces students to the traditional Japanese
                                                            poetic forms of haiku, haibun, and tanka, emphasizing both
                                                            their historical depth and aesthetic discipline. Students
                                                            engage with the intricacy and restraint characteristic of
                                                            Japanese art forms, learning to capture singular moments
                                                            through concrete imagery, juxtaposition, and seasonal
                                                            awareness. The course explores haiku as an objective,
                                                            minimalist poetic form, haibun as a synthesis of prose and
                                                            verse, and tanka as a lyrical yet image-driven expression of
                                                            emotion. Through guided practice, critical reading, and
                                                            creative experimentation, students develop sensitivity to
                                                            language, form, and nuance while cultivating patience,
                                                            precision, and poetic insight.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6254</td>
                                                        <td>Introduction to Theatre Making</td>
                                                        <td>
                                                            The introductory course will help students appreciate and
                                                            understand the art of theatre making. The course will
                                                            introduce students to various tools and fundamental
                                                            principles of theatre making process, through which they
                                                            will gain a deeper understanding of, the role of performer
                                                            as creator, the construction and the creation process.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6209</td>
                                                        <td>Roots of India: Ancient Indian History and Culture
                                                            (Pre-history to 1200 AD)</td>
                                                        <td>
                                                            The history of ancient India offers the learner immense
                                                            opportunities to comprehend the genesis and growth of a
                                                            remarkable civilization that has been interacting with the
                                                            world, is influenced by the same and yet is uniquely Indian.
                                                            It also delves into the impact ancient India had on the
                                                            world in terms of its dazzling achievements in the realm of
                                                            matter and mind. Though separated by centuries from
                                                            contemporary times, ancient India tantalizingly interacts
                                                            and influences the contemporary in myriad ways. The present
                                                            course is an attempt at making sense of the same.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6210</td>
                                                        <td>India and Growth of Islam in Medieval Era (1200 AD - 1700
                                                            AD)</td>
                                                        <td>
                                                            The Mughal prince Dara Shikoh in the 17th century wrote a
                                                            text for perusal of his family that was titled as "Majma ul
                                                            Baharein" (the meeting of two oceans) which talks about the
                                                            similarities between Islam and Hinduism. Between 1200 A.D.
                                                            and 1700 A.D., India was ruled by various Kings and Queens
                                                            whose religious beliefs were formed outside India. However,
                                                            in terms of governance of their territories there was a lot
                                                            of similarity with the earlier Indian rulers. This paper
                                                            seeks to understand the relationships between state and
                                                            society in medieval times.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6368</td>
                                                        <td>Verify Food is Life: The Story of India through its Food
                                                        </td>
                                                        <td>
                                                            Food is far more than a biological necessity; it is deeply
                                                            connected to culture, identity, politics, religion, economy,
                                                            and everyday social life. This course explores the many
                                                            dimensions of food in the Indian context, examining how
                                                            eating practices reflect larger historical, social, and
                                                            political processes. From questions of hunger, poverty, and
                                                            malnutrition to debates surrounding caste, religion,
                                                            regional identity, and nationalism, the course investigates
                                                            the complex meanings attached to food in India. The course
                                                            also traces the historical evolution of Indian food
                                                            traditions, including the influence of trade, colonialism,
                                                            migration, and cultural exchange on ingredients and cooking
                                                            practices. Topics such as the Green Revolution, food
                                                            security, institutional food systems like langars and
                                                            lunchbox networks, and the rise of food media will help
                                                            students understand the relationship between food and
                                                            society. Special attention is given to controversies around
                                                            meat consumption, the sociology of caste and purity,
                                                            gendered roles in cooking, and indigenous food traditions.
                                                            By combining historical, anthropological, and sociological
                                                            perspectives, this course encourages students to critically
                                                            analyse food not merely as sustenance, but as a powerful
                                                            lens through which to understand Indian society, culture,
                                                            inequality, and change.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6361</td>
                                                        <td>Modern Drama from Around the World</td>
                                                        <td>
                                                            Modern Drama from Around the World introduces students to
                                                            influential theatrical works and movements, offering insight
                                                            into how language, stagecraft, dialogue, and character
                                                            convey a playwright's vision. The course explores diverse
                                                            genres, including the Theatre of the Absurd, Brechtian epic
                                                            theatre, and mirror theatre, through seminal plays by Samuel
                                                            Beckett, Bertolt Brecht, Tennessee Williams, Maxim Gorky,
                                                            Luigi Pirandello, and Federico García Lorca. Students
                                                            examine historical and cultural contexts, engage in critical
                                                            analysis, and discuss thematic and stylistic innovations.
                                                            Through lectures, discussions, presentations, and
                                                            audio-visual materials, the course develops appreciation for
                                                            modern drama while enhancing analytical, interpretive, and
                                                            communication skills in reading, discussing, and performing
                                                            theatre.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6350</td>
                                                        <td>Soundscapes of Pune City</td>
                                                        <td>
                                                            Soundscapes of Pune City introduces students to the study of
                                                            sound in cultural and urban contexts, emphasizing the
                                                            intersection of place, society, and auditory experience. The
                                                            course covers theoretical frameworks in sound studies,
                                                            ethnomusicology, and anthropology while training students in
                                                            fieldwork methods, including observation, interviewing,
                                                            recording, transcription, and ethnographic writing. Students
                                                            apply these techniques to construct a mini-ethnography of a
                                                            local soundscape, exploring the social, cultural, and
                                                            historical dimensions of urban sound. Through seminar-style
                                                            discussions, experiential activities, and both physical and
                                                            virtual collaboration, students develop analytical,
                                                            observational, and interpretive skills, gaining hands-on
                                                            experience in documenting, analyzing, and ethically
                                                            representing sound in an urban environment.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6358</td>
                                                        <td>Culture in Making</td>
                                                        <td>
                                                            In this course we will explore intersections between Culture
                                                            and Power and develop interdisciplinary approaches to
                                                            analyse them in the post-colonial India. We will focus on
                                                            cultural practices ranging from cinema and literature to
                                                            paintings, drama and sculptures to engage with “cultural
                                                            politics” in post independence India.
                                                            At a more specific level, we will think of culture as: 1) a
                                                            whole way of life, and 2) a site of struggle over meaning,
                                                            representation and identities. We will view cultural
                                                            practices through the prism of ideas of nation, class,
                                                            gender and sexuality, caste, communalism and secularism, and
                                                            globalization in a society like ours.
                                                            The course will introduce students to the history of
                                                            Cultural Studies, a range of cultural practices and
                                                            movements in the post-independence India and their
                                                            historical socio-political determinants, approaches and
                                                            concepts in structuralist, post-structuralist, Marxist,
                                                            Post-Colonial, Feminist theories of culture.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6404</td>
                                                        <td>Dance/Movement Therapy</td>
                                                        <td>
                                                            Dance/Movement Therapy is an approach to healing that has
                                                            become an increasingly useful way of working with people of
                                                            all ages who cannot express themselves verbally, have
                                                            problems that are manifested somatically (e.g., eating
                                                            disorders), have been abused, struggle with emotions, have
                                                            difficulty coping with relationships, find themselves in
                                                            creative blocks., or are trapped in situations that seem
                                                            unspeakable.
                                                            Modern approaches to dance/movement therapy began in the
                                                            United States and are now being used through out the world.
                                                            People have begun to understand that expressive dance —the
                                                            creative use of both natural and formal elements of dance—is
                                                            (1) inherently healing and that (2) neuroscience can explain
                                                            what dance/movement therapists have known for decades. With
                                                            India being such an important player on the international
                                                            stage, it is essential that students learn how
                                                            dance/movement therapy and the growing science of the brain
                                                            can have a positive affect on mental health in India.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6101</td>
                                                        <td>The Poetic Body, Absurd and the Surreal</td>
                                                        <td>
                                                            The Poetic Body, Absurd and the Surreal explores Modernist,
                                                            Surrealist, and Absurdist artistic interventions to deepen
                                                            students’ awareness of existence and creative expression.
                                                            The course examines Surrealism in art, literature, and
                                                            cinema, studying key texts and works by Salvador Dalí, Luis
                                                            Buñuel, and Andre Breton, alongside Absurdist philosophy and
                                                            theatre by Albert Camus and Samuel Beckett. Students analyze
                                                            the body as a poetic and expressive site through literature,
                                                            poetry, and performance, connecting history, philosophy,
                                                            fine arts, and cinema. Through interactive discussions,
                                                            multimedia modules, and analytical exercises, students
                                                            develop critical thinking, creative intuition, and the
                                                            ability to interpret the self and the world through modern
                                                            artistic expression.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6406</td>
                                                        <td>Art, Philosophy and Society</td>
                                                        <td>
                                                            The course Art, Philosophy and Society introduces students
                                                            to key theoretical concepts of art, including beauty,
                                                            sublime, form, content, and bhāva-rasa, while examining
                                                            art’s relationship with society. It explores Western and
                                                            Eastern theories of art, such as expression, communication,
                                                            imitation, and significant form, alongside cultural
                                                            perspectives. Students develop critical tools to analyze and
                                                            question artworks, their processes, and social influence,
                                                            fostering an aesthetic attitude and understanding of art’s
                                                            relevance. Through interactive discussions, multimedia
                                                            resources, and applied analysis of selected works, the
                                                            course equips students to appreciate art in a social
                                                            context, consider historical notions of morality, and
                                                            reflect on the role of artists in shaping culture.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6407</td>
                                                        <td>Scientific Inquiry and Learning Science</td>
                                                        <td>
                                                            Learning science is often equated with the familiarity of
                                                            technical terms and laws combined with the ability to
                                                            manipulate formulae and equations (e.g. f = ma) or having
                                                            ‘information’ about various disciplines of sciences e.g.
                                                            physics, chemistry, biology. Furthermore, epistemic
                                                            fragmentation that isolates one subject from the other,
                                                            starts from school education and continues unless exclusive
                                                            efforts are made to comprehend inter-connectedness or
                                                            unified nature of science.
                                                            Inquiry means investigation, the process of finding out
                                                            something through one’s own thinking, reasoning and/or
                                                            observation. ‘Scientific inquiry’ refers to the mode of
                                                            investigation that is characteristic of science.
                                                            In this course, the focus will be on understanding
                                                            scientific concepts and propositions and integrating ideas
                                                            across disciplinary boundaries. The pursuit of inquiry
                                                            offers us a learning process through observing, thinking,
                                                            and reasoning like scientists and developing agile minds
                                                            that will know ‘How to learn’.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6408</td>
                                                        <td>Buddhist Philosophy: The Indian Tradition</td>
                                                        <td>
                                                            This course will introduce students of any academic
                                                            background the fundamentals of Buddhist thought and
                                                            philosophy. Given the sheer breadth of Buddhist philosophy,
                                                            this course will cover only the Indian traditions. The
                                                            syllabus will thus include the origins of Buddhism and then
                                                            move to Mahayana Buddhism, and Vajrayana (tantric) Buddhism.
                                                            The philosophical context in which the Buddha taught will be
                                                            introduced to the students, after which they will study
                                                            basic philosophical and soteriological concerns as seen in
                                                            the writings of Indian Buddhism. The course is a basic
                                                            introduction to the subject and does not presuppose any
                                                            prior subject knowledge on the part of the student.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6264</td>
                                                        <td>Phenomenology and Existentialism</td>
                                                        <td>
                                                            This course is meant to introduce students to the
                                                            foundational texts and thinkers of phenomenology and
                                                            existentialism. This school of thought is being presented as
                                                            one of the three main branches of contemporary philosophy,
                                                            along with analytic philosophy and pragmatism. Students will
                                                            read works by Husserl, Heidegger & Sartre among others. They
                                                            will also be introduced to contemporary debates within
                                                            phenomenology and existentialism.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6410</td>
                                                        <td>Introduction to Social Sculpture and the Field of Freedom
                                                        </td>
                                                        <td>
                                                            This course on Social Sculpture explores Joseph Beuys’
                                                            concept of ‘Soziale Plastik’, emphasizing an expanded
                                                            understanding of art where every individual is a creative
                                                            participant shaping society. Students engage with the works
                                                            of Beuys and contemporary practitioner Shelley Sacks to
                                                            explore fields of interaction linking inner and outer,
                                                            individual and community. Through experiential, embodied
                                                            practices, the course fosters a connective aesthetics that
                                                            encourages imagination, reflection, and ethical engagement.
                                                            Moving beyond linear problem-solving, students learn to
                                                            perceive social, political, and environmental systems as
                                                            dynamic forms of creative expression, developing capacities
                                                            to contribute meaningfully to society while cultivating
                                                            awareness, ecological responsibility, and philosophical
                                                            creativity.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6411</td>
                                                        <td>Evolutionary Psychology</td>
                                                        <td>
                                                            Evolutionary theory provides a powerful framework for
                                                            understanding the incredible biological diversity we observe
                                                            in nature. Over the past three decades or so, a growing
                                                            number of researchers have begun to appreciate that the
                                                            evolutionary forces that acted on our ancestors have
                                                            sculpted the human brain, and the psychological and
                                                            behavioural phenomena it produces.
                                                            This course provides an introduction to the field of
                                                            Evolutionary Psychology. Specifically, it covers fundamental
                                                            aspects of evolutionary theory and its application to
                                                            understanding human psychology and behaviour through a
                                                            variety of methods, including experimental, survey,
                                                            cross-cultural, and comparative research. This course will
                                                            also cover topics that have been central to the field of
                                                            Evolutionary Psychology such as mating, parenting, altruism,
                                                            and cooperation. In addition, a number of topics will be
                                                            explored to illustrate unique areas of research that have
                                                            emerged from the field of Evolutionary Psychology. The
                                                            impact of Evolutionary Psychology on certain traditional
                                                            areas of Psychology, including the study of development,
                                                            cognition, mental illness, personality, and culture, will
                                                            also be considered. The overall aim of this course is to
                                                            demonstrate the scientific approaches that can be used to
                                                            discover how evolutionary processes influence human
                                                            psychology and behaviour.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6371</td>
                                                        <td>Cinema, Masculinity and Culture</td>
                                                        <td>
                                                            If cinema has been the dominant cultural expression of the
                                                            last century, masculinity is often the prism through which
                                                            cinematic narratives unravel them selves. On one hand, the
                                                            masculine desires shape the figure of the individual hero or
                                                            the idealized male spectator through the cinematic
                                                            aesthetic, the cinematic image has also shaped the forms of
                                                            masculinity in society.
                                                            This course explores various manifestations of masculinity
                                                            as seen in popular Hollywood and Indian cinema. It will
                                                            offer students a fresh look at questions that have perturbed
                                                            film scholars and social theorists including ‘his’torians.
                                                            Students will read through theoretical texts about
                                                            patriarchy, feminism and queer theory in relation to cinema.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3317</td>
                                                        <td>Programming Concepts and C Language</td>
                                                        <td>
                                                            C is one of the most widely used programming languages of
                                                            all time. It was designed to be used on computers of the
                                                            early 70's, but is still taken as reference before any other
                                                            language has to be learnt. Nearly all languages invented
                                                            today have borrowed their basic features directly or
                                                            indirectly from C.
                                                            <br><br>
                                                            'C' is still used in appliances, applications, mobile apps.
                                                            Thus the benefits of knowing this language can go a long way
                                                            for a person who wants to be part of the IT world today.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6373</td>
                                                        <td>The Literature of Fantasy and Science Fiction</td>
                                                        <td>
                                                            The course will focus on science fiction and fantasy as
                                                            genres. It will look at the literature content as creating
                                                            an understanding of society. It will survey the history of
                                                            the genre and then delve into representative themes,
                                                            rhetoric, and methods of storytelling in texts, films and
                                                            other media. In addition, the composition of science fiction
                                                            and fantasy from a writer’s standpoint and an individual
                                                            student will be examined. Science fiction and fantasy as a
                                                            genre seeks to examine the possibilities of existence and
                                                            society beyond what seems too real and often creates a world
                                                            that allows for speculation of all the future context.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6374</td>
                                                        <td>Imagery in Creative Writing</td>
                                                        <td>
                                                            Imagery in Creative Writing introduces students to the
                                                            subtle art of evoking images through multiple artistic
                                                            forms. The course emphasizes observation, sensory awareness,
                                                            and creative expression, drawing from poetry, haiku, tanka,
                                                            painting, Indian classical dance, and nature walks. Students
                                                            learn to distinguish concrete imagery, experiment with
                                                            storytelling, and critically review their work through
                                                            interactive workshops. Pedagogy combines experiential
                                                            learning, field-based exercises, and guided writing
                                                            sessions, culminating in staged performances of original
                                                            work. Assessments consider practical engagement, originality
                                                            in imagery, and performance. This course cultivates
                                                            imagination, a deep appreciation of the arts, and an ability
                                                            to communicate experiences creatively and meaningfully.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T2713</td>
                                                        <td>Innovation Management and New Product Development</td>
                                                        <td>
                                                            Active management of innovation and the development of New
                                                            Products / services play a pivotal role in the success or
                                                            failure of organizations. A new product launch is one of the
                                                            most thrilling as well as risky tasks a company can take on.
                                                            With the global environment undergoing rapid
                                                            transformations, innovation and new product development can
                                                            be a crucial factor for the long-term success of the firm.
                                                            From creation of “new-to-the-world” products to
                                                            re-positioning existing products, the product launches cut
                                                            across the functional boundaries of the firm.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4403</td>
                                                        <td>Health and Wellness Management</td>
                                                        <td>
                                                            Health and Wellness Management is an advanced course
                                                            building on foundational wellness knowledge, guiding
                                                            students to critically assess and improve their lifestyles.
                                                            The course emphasizes understanding the nutritional,
                                                            physiological, and psychosocial factors that influence
                                                            health across different age groups and conditions. Students
                                                            explore wellness planning for healthy individuals and those
                                                            with specific disorders, including metabolic,
                                                            musculoskeletal, circulatory, and lifestyle-related
                                                            conditions. Pedagogy combines discussion-based lectures,
                                                            critical reading, multimedia resources, and debates,
                                                            encouraging practical application of concepts. Assessments
                                                            follow SIU guidelines, evaluating comprehension and
                                                            application. By the end, students are equipped to design
                                                            personalized, evidence-informed wellness strategies for
                                                            diverse populations.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6444</td>
                                                        <td>Adaptation: Cinema and Literature</td>
                                                        <td>
                                                            This course explores the dynamic relationship between
                                                            literature and cinema, examining how written texts are
                                                            transformed into audio-visual narratives. Students
                                                            investigate adaptations of works by Shakespeare, Jane
                                                            Austen, fairy tales, Harry Potter, and The Godfather,
                                                            analyzing changes in narrative, form, and cultural context.
                                                            The course emphasizes intertextuality, encouraging students
                                                            to move beyond traditional literary study to understand
                                                            cinema as a complementary aesthetic experience. Through
                                                            close readings of novels, poems, plays, and films, students
                                                            develop analytical skills to interpret artistic forms,
                                                            explore how stories traverse time and space, and cultivate
                                                            informed perspectives on the interplay of literature and
                                                            cinematic expression.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6442</td>
                                                        <td>Foundational Course in Economics</td>
                                                        <td>
                                                            The Foundational Course in Economics introduces students to
                                                            the principles, theories, and philosophical underpinnings of
                                                            economics. Beyond learning models and laws, students explore
                                                            the assumptions and axioms that shape economic thought,
                                                            understanding the distinction between hypothetical
                                                            constructs and real-world applicability. The course examines
                                                            contrasting schools of thought, highlighting strengths and
                                                            limitations of each approach, and emphasizes critical
                                                            thinking and structured reasoning. By connecting economic
                                                            ideas to broader cultural, artistic, and scientific
                                                            contexts, students develop the ability to synthesize
                                                            arguments independently, question conventional wisdom, and
                                                            engage with economic theories not merely as abstract rules,
                                                            but as frameworks for interpreting everyday social and
                                                            economic phenomena.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6443</td>
                                                        <td>Mathematical Methods for Economics</td>
                                                        <td>
                                                            Mathematical Methods for Economics equips students with
                                                            essential mathematical tools to analyze and solve economic
                                                            problems. The course covers functions, graphs, financial
                                                            mathematics, calculus, partial and constrained optimization,
                                                            and econometric techniques, emphasizing real-world
                                                            applications. Students learn to interpret data, derive
                                                            economic relationships, and apply models to policy and
                                                            financial decision-making. Through problem-solving, reverse
                                                            engineering, and continuous assessment, the course develops
                                                            analytical rigor and critical thinking. By linking
                                                            mathematical methods with economic reasoning, students gain
                                                            the ability to approach complex and abstract concepts,
                                                            contrast multiple solutions, and make informed inferences,
                                                            preparing them for practical and theoretical challenges in
                                                            economics and related disciplines.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6446</td>
                                                        <td>Other Asian Imaginations: Cinema from Japan and China after
                                                            the Second World War</td>
                                                        <td>
                                                            The module is an introductory class to post World War cinema
                                                            in Japan and China. The post-war landscape in Japan and
                                                            China were highly charged ones. The nuclear attack and
                                                            subsequent foreign occupation had devastated the national
                                                            spirit in one and a civil war had divided the other. The
                                                            cinema and other arts produced in the two countries were
                                                            often severe reflections and responses to these political
                                                            and social changes. The films that will be screened in the
                                                            module provide a point of entry into the cultural churnings
                                                            that were occurring in China and Japan at the time.
                                                            <br><br>
                                                            While in the case of Japanese films, we see tireless
                                                            attempts to subvert existing social order through radical
                                                            experimentation with cinematic form and frequent engagement
                                                            with the literature and music of the time, Chinese cinema
                                                            and art has always had to create innovative ways of working
                                                            under consistent governmental censure. In the class, we
                                                            shall look closely at cinematic works that challenge
                                                            traditional conventions of narrative and style. Besides
                                                            addressing questions of image aesthetics by engaging with
                                                            the films themselves, the module will also attempt to
                                                            situate the films in larger cultural contexts of
                                                            sub-cultures, protests and state propaganda.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6445</td>
                                                        <td>Understanding Hindi Cinema Since Independence</td>
                                                        <td>
                                                            This course critically examines Hindi cinema as a central
                                                            cultural force in post-colonial India, tracing its evolution
                                                            from independence to contemporary Bollywood. Students
                                                            explore how cinema has shaped notions of national identity,
                                                            language, and culture, while engaging with the political and
                                                            social debates surrounding the medium. The course introduces
                                                            key films, industry practices, aesthetics, and cinematic
                                                            techniques, providing students with the vocabulary and
                                                            conceptual tools to analyze films critically. Emphasizing an
                                                            interdisciplinary approach, it integrates perspectives from
                                                            history, sociology, and cultural studies, enabling students
                                                            to understand cinema not only as entertainment but as a
                                                            powerful site of cultural expression and negotiation.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6421</td>
                                                        <td>Introduction to the 20th Century Theory: I</td>
                                                        <td>
                                                            In Literary and Cultural Studies, theory provides a
                                                            framework to understand human practices and cultural
                                                            phenomena. This course introduces students to key
                                                            theoretical approaches that shaped 20th-century thought,
                                                            offering tools to analyze literature, art, and society.
                                                            Students explore Modernism, Formalism, Psychoanalysis
                                                            (Freud), Critical Theory (Frankfurt School), early Marxism,
                                                            Feminism, and Existentialism, gaining insight into critical
                                                            debates that continue to influence contemporary scholarship.
                                                            Through these perspectives, the course develops students’
                                                            ability to engage with complex ideas, think critically, and
                                                            appreciate how theory shapes our understanding of culture,
                                                            human behavior, and the social world, bridging abstract
                                                            concepts with practical analysis.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6433</td>
                                                        <td>Introduction to Linguistics</td>
                                                        <td>
                                                            Language is central to human activity and life and
                                                            Linguistics is a study of language and communication as it
                                                            focuses on structure, use and psychology of language. The
                                                            course will introduce students to basic concepts in
                                                            Linguistics such as Morphology, Phonology and Phonetics,
                                                            Syntax, Semantics etc. The course will also look at the
                                                            socio-cultural and psychological aspects of language in
                                                            terms of its acquisition and use. In the last century,
                                                            Linguistics formed the basis for development of a variety of
                                                            theories in the disciplines such as Psychology, Sociology,
                                                            Anthropology, Cultural Studies and English Literary Studies.
                                                            It has been at the basis of theories ranging from
                                                            structuralism/post structuralism to post-modernism and
                                                            post-colonialism. The course will equip students with a
                                                            conceptual map of and vocabulary for advanced and nuanced
                                                            theoretical arguments from various disciplines.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6432</td>
                                                        <td>Critical Writing: Writing as Resistance, Writing as Recovery
                                                        </td>
                                                        <td>
                                                            Writing is a core component of a liberal arts education,
                                                            enabling students to engage critically with complex ideas
                                                            and express themselves clearly. This course trains students
                                                            to write systematically and coherently across diverse topics
                                                            and modes, fostering independence of thought, judgment, and
                                                            expression. Students will critically read texts—written,
                                                            oral, and visual—by thinkers, scholars, and journalists from
                                                            varied cultural, philosophical, and ideological contexts.
                                                            They will write analytically, persuasively, and creatively,
                                                            using response, comparison, argumentation, and literary
                                                            commentary. All reading and writing will be framed within
                                                            interdisciplinary theoretical perspectives on rhetoric,
                                                            language, ideology, poetics, aesthetics, cultural theory,
                                                            and media studies.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6449</td>
                                                        <td>Knowledge: Contested, Contextualized, Confirmed</td>
                                                        <td>
                                                            This course examines knowledge as contested, contextualized,
                                                            and confirmed, exploring how traditional and modern
                                                            paradigms shape our understanding of the world. Students
                                                            critically reflect on the historical, cultural, and ethical
                                                            foundations of knowledge, comparing cumulative,
                                                            participatory, holistic, and atomistic approaches across
                                                            disciplines such as science, medicine, economics, and the
                                                            arts. Through case studies, discussions, and writing
                                                            assignments, students analyze the consequences of knowledge
                                                            claims and methods, develop interdisciplinary frameworks,
                                                            and cultivate self-awareness as knowers. The course
                                                            encourages evaluation of rival perspectives, ethical
                                                            reasoning, and the possibility of integrating diverse
                                                            approaches to foster responsible, sustainable, and nuanced
                                                            understanding of knowledge in contemporary contexts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6434</td>
                                                        <td>Literary Imagination in the World</td>
                                                        <td>
                                                            This course explores the power of literature and the arts to
                                                            illuminate social, political, and ecological issues while
                                                            fostering ethical reflection and aesthetic sensitivity.
                                                            Students read diverse texts—including fairy tales, fables,
                                                            classics, and religious literature—alongside visual and
                                                            musical adaptations, examining thematic patterns such as
                                                            heroism, hubris, and transformation. The course emphasizes
                                                            critical perspectives, including feminist, Marxist, and
                                                            psychoanalytic approaches, to understand literature’s
                                                            potential to challenge oppression and inspire alternatives
                                                            to divisive, power-centric modes of living. Through
                                                            discussion, analysis, and creative projects, students
                                                            develop interpretive skills, aesthetic judgment, and an
                                                            appreciation of literature’s role in connecting cultural
                                                            particularity to universal human experience.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6453</td>
                                                        <td>From Marxism to Post-Marxism: Critical Discourses</td>
                                                        <td>
                                                            From Marxism to Post-Marxism: Critical Discourses is a
                                                            course that builds on the introductory course on Marxism.
                                                            This advanced level course on Marxism intends to make the
                                                            students familiar with the growth of Marxist methodology,
                                                            its contribution in the social sciences and the important
                                                            challenges it faced and still continues to face. The
                                                            students will engage in discussing important contributions
                                                            of Marxism, both as a theory and as a discourse, extending
                                                            till the 20th century in terms of philosophical and critical
                                                            enquiry. The students will not necessarily be referring to
                                                            texts written by Marx and later ‘classical’ Marxists. The
                                                            course will use Marxism as an intellectual tradition and
                                                            draw concepts, ideas and practices from it and analyze them
                                                            in the larger socio-political and historical debates and
                                                            practices.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6420</td>
                                                        <td>An Introduction to Cultural Studies</td>
                                                        <td>
                                                            The course will attempt to introduce students to the new and
                                                            exciting discipline of Cultural Studies. In this course, we
                                                            will try to grasp with how cultural spaces, times, products
                                                            and ideologies are implicated in the power relations of the
                                                            society. This course will help students from across
                                                            disciplines such as Sociology, Psychology, Anthropology,
                                                            History, and English Literature to get acquainted with novel
                                                            and nuanced theoretical concepts and familiarize themselves
                                                            with the novel approaches to the study of culture that have
                                                            developed in the last few years across the world.
                                                            In this course, we will take a critical stock of how the
                                                            idea of culture has been framed by scholars from various
                                                            disciplines. By questioning the traditional formalist
                                                            approaches to culture, we will expand the scope of culture
                                                            to deal with concepts such as “Culture Industry and Art”,
                                                            “Modernity and History”, “the City and Architecture”, “The
                                                            Popular Culture and the Nation”, “Multiculturalism”,
                                                            “Culture/Gender/Politics”, and “Globalization and Culture”
                                                            etc.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6568</td>
                                                        <td>Modern Indian Theatre and Performance: History, Theory, Text
                                                            and Culture</td>
                                                        <td>
                                                            This course examines modern Indian theatre from its
                                                            mid-19th-century origins to the present, highlighting its
                                                            role in shaping popular imagination and modern
                                                            consciousness. It explores the blending of Western,
                                                            classical, and Indian folk theatrical forms, emphasizing
                                                            theatre’s capacity to engage audiences while reflecting
                                                            socio-political histories. Students study key texts
                                                            alongside critical writings on colonial and postcolonial
                                                            India, gender, and identity, analyzing both dramatic works
                                                            and their performance. By focusing on playwrights,
                                                            directors, performers, and texts, the course situates
                                                            theatre within broader cultural, historical, and political
                                                            contexts, fostering interdisciplinary understanding across
                                                            literature, performance, history, and cultural studies.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6572</td>
                                                        <td>Re-conceptualizing the Noir Film</td>
                                                        <td>
                                                            This course explores Film Noir, a cinematic genre that
                                                            emerged in 1940s USA, examining its dark aesthetic, morally
                                                            ambiguous characters, and tragic narratives. Students study
                                                            noir’s origins, stylistic features, and thematic concerns,
                                                            analyzing key films to understand its historical and
                                                            cultural context. The course traces the evolution of noir
                                                            into neo-noir, its adaptations in European, Asian, and
                                                            Indian cinemas, and its influence on contemporary
                                                            television. By considering both form and content, students
                                                            investigate whether noir is simply a genre or a global
                                                            cinematic style, engaging with its enduring appeal, cultural
                                                            resonance, and the ways it continues to shape narrative and
                                                            visual storytelling worldwide.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6577</td>
                                                        <td>Labour in India-Past and Present</td>
                                                        <td>
                                                            This course attempts to introduce students to the study of
                                                            industrial labour in India from its inception to the present
                                                            period. The objective is to familiarize students with
                                                            various categories of work and working lives in India and
                                                            the history of their development. Drawing from labour
                                                            history, early industrial sociology and current labour
                                                            anthropology, the course seeks to interrogate India’s
                                                            development experience from the perspective of labour.
                                                            Students will be familiarized with complexities associated
                                                            with understanding and classifying working lives of various
                                                            kinds for both academic and policy purposes. The course aims
                                                            at intensive interaction with a wide range of sources,
                                                            ranging from colonial administrative documents, policy
                                                            briefs, NSSO classificatory schemes, legal documents,
                                                            ethnographic writing and trade union documents. The course
                                                            will provide an overview of the trajectory of labour in
                                                            India particularly in the current scenario and locate it
                                                            within the context of the developing world.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6578</td>
                                                        <td>Understanding Urbanity: Classical and Contemporary
                                                            Approaches</td>
                                                        <td>
                                                            This course attempts to introduce students to classical and
                                                            contemporary approaches to urban studies and the
                                                            complications that lie within them. The objective of the
                                                            course is to trace the deployment of The City in the
                                                            understanding of modern life in varied historical contexts.
                                                            In doing this, the course unfolds in four modules- two
                                                            dedicated to discussing key classical and contemporary
                                                            theorists on the city and two to gaining familiarity with
                                                            urban experiences across the world. One of the latter
                                                            modules focuses on exploring cities in India in their
                                                            historical and political contexts. Students are expected to
                                                            engage with and bring to the discussion diverse positions on
                                                            urban life. The course is also intended as an exercise in
                                                            exploring methodological and disciplinary diversity in urban
                                                            studies, as both the texts and the discussion seek to
                                                            transcend conventional boundaries of disciplines and
                                                            techniques.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6565</td>
                                                        <td>Religion and Rebellion: Roots of Resistance in the Ground of
                                                            Tradition</td>
                                                        <td>
                                                            This course examines the potential of religious ideas,
                                                            practices, and philosophies to inspire critical thought and
                                                            constructive resistance to oppression. Students explore how
                                                            various religious traditions—including tribal, ancient, and
                                                            contemporary—address abuses of power, social exclusion, and
                                                            ecological harm. The course links socio-political ethics to
                                                            metaphysical principles, considers both external and
                                                            internal dimensions of critique, and analyzes texts,
                                                            practices, and figures that embody transformative potential.
                                                            Through a comparative framework, students assess religion
                                                            alongside secular humanist ethics emerging from
                                                            Enlightenment, modernization, and colonial histories,
                                                            evaluating how faith can both challenge and reinforce
                                                            societal norms while fostering ethical, reflective, and
                                                            socially engaged modes of being.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T5633</td>
                                                        <td>Use of Signs and Symbols for Marketing and Branding</td>
                                                        <td>
                                                            Signs & Symbols are part of daily life, giving quick and
                                                            easy access to information. They make up our communication
                                                            system, which includes both verbal and non-verbal
                                                            components. There is considerable evidence that shows that
                                                            use of signs and symbols enhances spoken language or
                                                            understanding. Signs and symbols are particularly important
                                                            in supporting the development of marketing communication
                                                            program e.g. helping consumers respond, initiate
                                                            interactions and also provide clues to motivate customers at
                                                            a subconscious level. Collectively signs & symbols negotiate
                                                            meaning at a deeper level and create a brand engram to which
                                                            consumer seem to be connecting. Symbolic communication ties
                                                            consumer needs, wants, and behaviors to the form of brand
                                                            communication in advertising.


                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6569</td>
                                                        <td>Love in Literature: Literary Expressions and Explorations
                                                            across World Cultures</td>
                                                        <td>
                                                            The course attempts to explore the types and aspects of the
                                                            human experience of love, with special
                                                            emphasis on romantic or conjugal love. We shall study
                                                            literary texts from a range of periods and
                                                            cultures (ancient Indian, Chinese, Hebrew Arab; “primitive,”
                                                            “tribal” cultures; medieval and
                                                            renaissance European; modern Indian and European, etc.) in a
                                                            variety of genres (fiction, drama,
                                                            poetry, autobiography) within a framework incorporating
                                                            relevant cultural and literary concepts.
                                                            The way in which culture lends particular emotional
                                                            colouring to the experience of love and
                                                            literary shape to its expressions will be emphasized. The
                                                            study will also seek to enhance the
                                                            specifically aesthetic experience of the literature of love
                                                            through philosophical, ethical
                                                            and aesthetic categories derived from the cultural contexts
                                                            of the texts. Questions concerning
                                                            universality and particularity will be discussed.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6567</td>
                                                        <td>The Politics of Difference</td>
                                                        <td>
                                                            This course examines the social and literary dynamics of
                                                            “difference” through selected works of fiction and drama,
                                                            including To Kill a Mockingbird, Ice-Candy-Man, Kanyadaan,
                                                            and Do the Needful. It explores how perceptions of religion,
                                                            caste, gender, class, and sexuality shape societal
                                                            hierarchies, prejudices, and conflicts. Students analyze
                                                            narrative techniques, characterization, themes, and
                                                            socio-historical contexts to understand the formation of
                                                            biased mindsets and the politics of co-existence. Pedagogy
                                                            combines close textual reading, film adaptations, critical
                                                            commentaries, and presentations. The course aims to
                                                            sensitize students to socialization processes, develop
                                                            critical thinking, and foster balanced responses to societal
                                                            differences, emphasizing both ethical and analytical
                                                            engagement.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6574</td>
                                                        <td>Critical Ideas of the 20th Century</td>
                                                        <td>
                                                            In the field of Literary and Cultural Studies, critical
                                                            ideas occupy a central place. If “practice” is what defines
                                                            a human activity, we often need a set of ideas that help us
                                                            understand such practices. Such a set of ideas can be
                                                            understood (of course only in a generalized manner) as
                                                            Theory. The last century saw a phenomenal rise of academic
                                                            institutions that were defined in terms of their theoretical
                                                            outlooks. Theory pervaded every imaginable discipline and
                                                            helped define their contours. This course is a journey
                                                            through such myriad ways, which shape the ways we understand
                                                            the world.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6575</td>
                                                        <td>Postmodernism: Literature and Philosophy</td>
                                                        <td>
                                                            What is postmodernism? Can postmodernism be described as a
                                                            consistent philosophical position?
                                                            How does the question of postmodernism relate to other
                                                            significant questions of contemporary
                                                            intellectual life? Can the human subject master its own
                                                            destiny? Can meaningful claims to truth
                                                            still be made? What is the relationship between
                                                            subjectivity, sexuality, discipline and power? Is
                                                            there a possibility of ethics in our "postmodern" condition?
                                                            And finally what are the implications
                                                            of postmodernism for interaction among different cultures,
                                                            specifically interaction between
                                                            Western culture and its others? The aim of this course is to
                                                            understand the significance and the
                                                            origins of these questions. We will also investigate the
                                                            relationship of postmodernism to feminism
                                                            and postcolonial theory. The initial focus of the course
                                                            will be to survey the philosophical origins
                                                            of 20th Century intellectual movements. In this context, we
                                                            will read the works of some
                                                            postmodern thinkers Jean-François Lyotard, Jacques Derrida,
                                                            Michel Foucault, Gilles Deleuze,
                                                            Félix Guattari and Kafka. We will then investigate the
                                                            relationship between postmodernism and
                                                            knowledge particularly in philosophy of science. Finally, we
                                                            will move to the question of the
                                                            relationship between postmodernism and feminism and read the
                                                            works of SeylaBenhabib,Judith
                                                            Butler, and Sandra Harding.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6573</td>
                                                        <td>Crisis in West Asia</td>
                                                        <td>
                                                            The Middle East today remains one of the most contentious
                                                            and hotly disputed regions on the planet.
                                                            The roots of these modern day conflicts go back millennia,
                                                            to different religions and faith traditions
                                                            as well as tribal and ethnic identities. This course
                                                            attempts to explore these early rivalries and trace
                                                            back the roots of the conflicts to their sources. While
                                                            doing so, we will explore the origins of the
                                                            different Abrahamic religions; different tribal customs and
                                                            modern day Geo political issues that mar
                                                            this region today. This course also traces the path that the
                                                            conflict has taken over the centuries and
                                                            the influences that it has come under. We take an in-depth
                                                            look at how 20th century imperialism and
                                                            an unquenchable thirst for resources have led to a state of
                                                            perpetual conflict that centers on oil and
                                                            natural gas. We shall study the role of Cold war politics
                                                            and tyrannical dictatorships and their
                                                            influences on civilian populations living in the area.
                                                            Lastly, we shall also study the rise of radical
                                                            groups, primarily as a result of Proxy wars that were a
                                                            subset of superpower confrontation and
                                                            secondly as a result of power vacuums created in the region.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6566</td>
                                                        <td>Colonial Encounters: Literary Representations and
                                                            Theoretical Reflections</td>
                                                        <td>
                                                            The course proposes to examine ways in which literature,
                                                            through its characteristic aesthetic formal elements,
                                                            represents the profoundly human dimensions of the impact of
                                                            colonialism on cultures, communities and people.
                                                            Literary texts from various national, cultural contexts
                                                            (Asia, Africa, the Americas, Australia) and multiple
                                                            perspectives (colonizer/colonized) and in a variety of
                                                            genres (novel, short story, essay, poetry, autobiography,
                                                            speech, etc.) will be studied within a framework of concepts
                                                            and theories drawn from different cultures (Asian, African,
                                                            Latin American, etc.), critical traditions (postcolonial,
                                                            feminist, postmodern, Marxist, Subaltern, Critical
                                                            Traditional) and disciplines (History, Anthropology, etc.).
                                                            The texts span various stages from the first phase of
                                                            colonialism to globalization, contemporary
                                                            migrations/diasporas.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4686</td>
                                                        <td>Introduction to Human Genetics</td>
                                                        <td>
                                                            This course in Genetics (minor) attempts to address some of
                                                            the basic and fundamental issues related to field of
                                                            genetics. It further narrows the focus of genetics to deal
                                                            with concepts in Human Genetics covering areas from basics
                                                            like DNA, inheritance and the occurrence of mutations,
                                                            mechanisms that lead to uniqueness in humans, to
                                                            understanding the prevalence of genetic disease in humans,
                                                            that modes of passing through generations and our
                                                            understanding of how they need to be tackled on the social
                                                            and psychological front through Genetic Counseling. The
                                                            course also includes a short understanding of where the
                                                            subject of genetics is applied in our everyday lives and how
                                                            it will affect the way we look at our lifestyles in the
                                                            future.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6570</td>
                                                        <td>World Drama, Text and Performance Traditions in their
                                                            Cultural Context</td>
                                                        <td>
                                                            The course proposes to give students exposure to the way in
                                                            which the great (and sometimes
                                                            “small”) texts of the composite art of drama represent the
                                                            central themes concerning human
                                                            life, human destiny, personality and society in a way that
                                                            enables them to respond to and
                                                            understand the emotional power of the art of drama.
                                                            The texts will be drawn from diverse cultural, historical,
                                                            literary and theatrical contexts, e.g.
                                                            Japan, Greece, India, Western Europe. They will be studied
                                                            within a framework of relevant
                                                            religions (e.g. these concepts would include Greek, Zen
                                                            Buddhist and African religions -
                                                            philosophical concepts, aesthetic concepts concerning
                                                            aesthetic emotion from ancient India
                                                            and Greece, and modern and avant-garde theories from Europe
                                                            and contemporary activist
                                                            theatre. Besides literary texts, video clips, performances
                                                            and visits to/by practicing theatre
                                                            artists would be included.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6576</td>
                                                        <td>Sport and Performance Psychology</td>
                                                        <td>
                                                            The field of Sport and Performance Psychology is a
                                                            relatively new domain in
                                                            Psychology. Sport psychology is the study of optimizing and
                                                            enhancing performance
                                                            not only in the field of sports but can be applied to any
                                                            competitive and performance
                                                            oriented industry (such as dance, exercise or
                                                            organizations). Engagement in
                                                            recreational and competitive sport is increasing in India.
                                                            With the growth of
                                                            professional sport, the sport science industry is also
                                                            finding its footing and
                                                            recognition.
                                                            In this course students will be exposed to various important
                                                            concepts and tenets of
                                                            theories in the field of Sport and Performance Psychology.
                                                            Students will get an
                                                            overview of the subject and an understanding of Psychology
                                                            in practice. The course is
                                                            also outlined to introduce students to Exercise psychology
                                                            which is broadly focused
                                                            on physical activity, adherence to exercise, exercise
                                                            dependence, etc.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3251</td>
                                                        <td>Design Tools-I</td>
                                                        <td>
                                                            This course, Design Tools I, introduces undergraduate
                                                            students to essential digital design tools for web, print,
                                                            and photography. Focusing on Adobe Photoshop, it covers
                                                            image resolution, scanning, color modes, layers, adjustment
                                                            layers, filters, and retouching techniques. The pedagogy
                                                            combines lectures, demonstrations, and practical exercises
                                                            to build hands-on proficiency. Students learn to enhance,
                                                            transform, and restore images, work with channels and file
                                                            formats, and automate tasks. Assessment includes class tests
                                                            and individual assignments, ensuring applied understanding.
                                                            Recommended readings include Adobe Photoshop manuals and
                                                            texts on digital photography and image restoration. The
                                                            course provides a foundational skill set for further study
                                                            in design and digital media.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3252</td>
                                                        <td>Design Tools-II</td>
                                                        <td>
                                                            Design Tools II is a Level 2 undergraduate course that
                                                            introduces students to advanced design and page layout
                                                            techniques using CorelDRAW. Students learn to combine
                                                            illustrations, text, and graphics effectively, while
                                                            exploring font selection, colors, and formatting. The
                                                            curriculum covers working with shapes, vector effects,
                                                            transparency, 3D effects, artistic media, layers, bitmaps,
                                                            and multi-page layouts. Practical exercises, demonstrations,
                                                            and lectures develop hands-on skills in brochure design,
                                                            file management, and printing/publishing. Assessment
                                                            includes class tests and individual assignments. Recommended
                                                            readings include CorelDRAW manuals and color theory guides.
                                                            The course equips students with foundational skills for
                                                            professional graphic design and visual communication.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6571</td>
                                                        <td>Postmodernism: Literary and Philosophical Perspectives</td>
                                                        <td>
                                                            This course introduces students to postmodernism, exploring
                                                            its philosophical origins, significance, and impact on
                                                            contemporary thought. It addresses key questions about
                                                            truth, ethics, subjectivity, power, sexuality, and human
                                                            agency, examining whether postmodernism can be a consistent
                                                            philosophical position. Students will study the works of
                                                            foundational thinkers such as Lyotard, Derrida, Foucault,
                                                            Deleuze, Guattari, and Kafka, and investigate
                                                            postmodernism’s relationship to knowledge, especially in the
                                                            philosophy of science. The course also examines
                                                            intersections with feminism and postcolonial theory,
                                                            engaging with theorists like Benhabib, Butler, and Harding,
                                                            to understand postmodernism’s implications for ethics,
                                                            cultural interaction, and critical inquiry.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6559</td>
                                                        <td>The Psychology of Good and Evil</td>
                                                        <td>
                                                            This undergraduate course, The Psychology of Good and Evil,
                                                            examines human behavior through the lens of morality,
                                                            exploring both destructive and altruistic actions. Students
                                                            study topics such as genocide, terrorism, domestic violence,
                                                            bullying, altruism, and volunteerism, integrating
                                                            perspectives from psychology, sociology, philosophy, media,
                                                            and literature. The course develops skills in critical
                                                            analysis, empirical evaluation, ethical reasoning, and
                                                            application of theory to social issues. Through lectures,
                                                            discussions, case studies, and experiential activities,
                                                            students learn to distinguish individual and social
                                                            influences on behavior, critically evaluate events, and
                                                            propose ways to enhance good and reduce evil, fostering
                                                            awareness and agency in personal and societal contexts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6564</td>
                                                        <td>Sustainability for the Post-2015 World</td>
                                                        <td>
                                                            The year 2015 was a watershed year for the concept of
                                                            sustainability. The world saw culmination of the
                                                            international efforts under the Millennium Development
                                                            Goals, and framing of the Sustainable Development Goals. An
                                                            international agreement on climate change mitigation and
                                                            adaptation was also achieved after prolonged negotiations
                                                            that had been going on for more than 5 years. The year also
                                                            saw an escalation of terrorist activities across the world,
                                                            leading to an international refugee crisis, which too is and
                                                            will continue to have impacts on local sustainability across
                                                            the world.
                                                            The course is aimed at understanding the implications of
                                                            these events from the perspective of a sustainable future
                                                            for humanity. The broad focus of the course will be on
                                                            global issues of food-water-energy security, green business
                                                            processes, urbanization, etc. Specific challenges faced in
                                                            the Indian and local (Pune) context will also be addressed
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6557</td>
                                                        <td>Critical Debates in 21st Century Technology</td>
                                                        <td>
                                                            This course examines the rapid expansion of 21st-century
                                                            technologies and their wide-ranging social consequences. It
                                                            explores how the internet, social media, citizen journalism,
                                                            cryptocurrencies, open-source platforms, and artificial
                                                            intelligence are reshaping politics, economies, governance,
                                                            and everyday life. Students engage with debates around
                                                            digital rights, surveillance, data, ethics, and the claim to
                                                            internet access as a fundamental right, alongside concerns
                                                            about information leaks and algorithmic power. The course
                                                            also studies alternative technological spaces, from virtual
                                                            learning platforms to the Deep Web, encouraging critical
                                                            reflection on the social, political, legal, economic, and
                                                            philosophical implications of contemporary technological
                                                            change.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6558</td>
                                                        <td>Politics of Ecology and Environment in Developing Countries
                                                        </td>
                                                        <td>
                                                            The ecology and environment of developing countries have
                                                            been significantly altered through colonization and after
                                                            independence. Developing countries has had to make
                                                            negotiations between utilizing natural resources and
                                                            conserving its environment. In the 21st Century, these
                                                            negotiations have become more intense as we grapple with
                                                            reduced resources, natural disasters, urban pollution and
                                                            global warming. As developing countries gear up for
                                                            industrial and development projects, they also negotiate
                                                            with claims of indigenous forest lands, fishing rights,
                                                            grazing rights etc. This course is aimed at considering the
                                                            various challenges, policies, laws and approaches of
                                                            developing countries in negotiating environmental
                                                            sustenance, and management of ecology and environment. The
                                                            course will address forests, fisheries, mining, pollution,
                                                            industrialization, water resources, urban pollution, tribal
                                                            rights and alternative energy.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6563</td>
                                                        <td>Creative Writing - Media, Advertising, Content, and
                                                            Screenplay</td>
                                                        <td>
                                                            This course focuses on professional creative writing for
                                                            media, advertising, digital content, and screenwriting,
                                                            bridging creative expression with commercial communication.
                                                            It trains students to write effectively for mass audiences
                                                            by developing rhetorical awareness, audience analysis, and
                                                            user-centered content design. Through hands-on practice in
                                                            advertising copy, public relations, digital media, crisis
                                                            communication, and screenplay formats, students learn to
                                                            generate, pitch, draft, and refine ideas for real-world
                                                            media contexts. The course emphasizes critical analysis of
                                                            existing media texts, experimentation with form and
                                                            language, and the ethical, strategic, and technological
                                                            processes involved in producing impactful media content
                                                            across platforms in contemporary professional environments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6555</td>
                                                        <td>Contemporary Fiction Today: A Junior Seminar Course</td>
                                                        <td>
                                                            The field of literature studies has grown tremendously in
                                                            the past couple of decades and now, the traditional
                                                            discipline of English Literature taught across various
                                                            Universities has become more and more interdisciplinary.
                                                            This seminar course draws its methodology from this
                                                            interdisciplinary nature of Literature and Comparative
                                                            Literature Studies and combines it with a deep analytical
                                                            approach to literary texts.
                                                            The course will examine original and translated works by
                                                            major international fiction writers who have achieved both
                                                            popular success and critical acclaim. The works will be
                                                            placed against their local contexts as well as the global
                                                            conditions in which they were produced and in which they
                                                            thrive. There will be in-depth textual analysis along side
                                                            with cultural and political understandings of larger issues.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3253</td>
                                                        <td>Design Tools-III</td>
                                                        <td>
                                                            Design Tools III builds advanced competencies in
                                                            professional page layout and publication design using
                                                            industry-standard software such as Adobe InDesign and
                                                            QuarkXPress. The course trains students to integrate text,
                                                            images, graphics, colour, and typography into coherent
                                                            layouts for print and interactive media. Through hands-on
                                                            practice, students learn concepts such as frames, styles,
                                                            master pages, layers, tables, books, and export workflows,
                                                            while developing an understanding of design consistency and
                                                            production standards. Emphasis is placed on practical
                                                            application through demonstrations and exercises, enabling
                                                            students to translate design principles into effective,
                                                            production-ready layouts suitable for professional
                                                            publishing environments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3254</td>
                                                        <td>Design Tools-IV</td>
                                                        <td>
                                                            Design Tools IV focuses on developing advanced vector-based
                                                            design skills through the creation of original artwork
                                                            suitable for high-quality print and publication. Using Adobe
                                                            Illustrator, students learn to design and manipulate vector
                                                            graphics, typography, colour, gradients, brushes, symbols,
                                                            layers, and effects. The course emphasizes transforming
                                                            conceptual ideas into professional visual assets that can be
                                                            seamlessly integrated into documents produced using layout
                                                            and publishing software. Through lectures, demonstrations,
                                                            practical exercises, and a final project, students gain
                                                            hands-on experience in producing scalable, print-ready
                                                            illustrations, strengthening both their creative expression
                                                            and technical proficiency for professional design
                                                            environments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3255</td>
                                                        <td>Introduction to Web Design</td>
                                                        <td>
                                                            Introduction to Web Design introduces students to the
                                                            fundamentals of computer-based communication and web design
                                                            through hands-on engagement with core web technologies. The
                                                            course familiarizes learners with HTML, basic formatting,
                                                            images, tables, frames, forms, and cascading style sheets,
                                                            enabling them to understand the structure and presentation
                                                            of web pages. Using tools such as Dreamweaver, students
                                                            progress from learning individual HTML elements to designing
                                                            complete, functional websites. Through lectures,
                                                            demonstrations, practical exercises, and a project-based
                                                            approach, the course builds foundational technical skills
                                                            and conceptual clarity required for creating simple,
                                                            effective, and user-oriented web interfaces.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3198</td>
                                                        <td>Introduction to Python</td>
                                                        <td>
                                                            Introduction to Python is an entry-level programming course
                                                            designed to familiarize students with Python as a simple,
                                                            powerful, and versatile programming language widely used in
                                                            web development, scientific computing, and engineering
                                                            applications. The course introduces core programming
                                                            concepts such as data types, control structures, functions,
                                                            modules, and structured data types, along with exposure to
                                                            key standard libraries. Through lectures and hands-on lab
                                                            sessions, students learn to solve basic computational
                                                            problems using a clear, Pythonic approach. The course builds
                                                            a strong foundation for logic development and prepares
                                                            students for advanced programming languages and technologies
                                                            in subsequent semesters.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3326</td>
                                                        <td>Foundation of Web Technologies</td>
                                                        <td>
                                                            Foundation of Web Technologies is an introductory
                                                            undergraduate course that provides students with a
                                                            comprehensive grounding in core web technologies. It
                                                            introduces the structure and working of the Internet,
                                                            followed by in-depth training in HTML, CSS, and basic
                                                            scripting languages such as JavaScript and jQuery. The
                                                            course also familiarizes students with HTML5 features,
                                                            e-commerce concepts, user experience considerations, and
                                                            fundamental issues of web security. Through a combination of
                                                            classroom instruction and hands-on lab sessions, students
                                                            develop practical skills in creating and styling web pages.
                                                            The course builds a strong foundation for advanced studies
                                                            in web and internet technologies.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3201</td>
                                                        <td>Mobile Programming</td>
                                                        <td>
                                                            Mobile Programming is an undergraduate, advanced-level
                                                            course that introduces students to the fundamentals and
                                                            contemporary trends of mobile application development, with
                                                            a primary focus on the Android platform. The course covers
                                                            the Android ecosystem, architecture, SDK, and application
                                                            lifecycle, along with user interface components, layouts,
                                                            event handling, data storage, and permissions. Through a
                                                            combination of lectures, discussions, self-study, and
                                                            intensive lab sessions, students gain hands-on experience in
                                                            designing, developing, testing, and deploying Android
                                                            applications, including publishing apps on the Google Play
                                                            Store. The course builds practical skills essential for
                                                            developing robust, user-centric mobile applications in
                                                            real-world environments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T7527</td>
                                                        <td>Internet of Things</td>
                                                        <td>
                                                            Internet of Things (IoT) is an advanced undergraduate course
                                                            that provides a comprehensive understanding of Internet-2
                                                            and the Internet of Things paradigm. The course explores
                                                            enabling technologies such as wireless communication, RFID,
                                                            sensor networks, low-power systems, and IoT middleware. It
                                                            examines routing protocols, IPv6, 6LoWPAN, and security and
                                                            privacy challenges in domains such as smart grids,
                                                            healthcare, and intelligent transportation systems. Through
                                                            lectures, case studies, research papers, and student-led
                                                            discussions, learners gain analytical and research-oriented
                                                            skills. The course also emphasizes real-time monitoring,
                                                            performance analysis, and hands-on, project-based learning
                                                            within practical IoT frameworks.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6601</td>
                                                        <td>The Illbeing - Disease, Health and Socio-politics</td>
                                                        <td>
                                                            The Illbeing – Disease, Health and Socio-politics is an
                                                            interdisciplinary elective that introduces students to the
                                                            biological foundations of health and disease while
                                                            critically examining their social, economic, and political
                                                            dimensions. Designed for students from humanities and social
                                                            sciences, the course explains basic anatomy, physiology, and
                                                            major disease categories in an accessible manner. It
                                                            compares different systems of healthcare, explores
                                                            preventive and therapeutic interventions such as vaccines
                                                            and antibiotics, and highlights issues of inequality,
                                                            lifestyle, and policy. By linking biological processes with
                                                            social structures, the course enables students to make
                                                            informed, critical choices about health, wellbeing, and
                                                            healthcare systems.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6629</td>
                                                        <td>Of Scripts and Shots</td>
                                                        <td>
                                                            Of Scripts and Shots is a practice-oriented film studies
                                                            course that trains students to think cinematically by
                                                            understanding the shot as the fundamental unit of meaning in
                                                            cinema. Moving from script to screen, the course focuses on
                                                            how shots are conceived, designed, and sequenced to create
                                                            scenes and narratives. Through film viewing, script
                                                            deconstruction, storyboarding, shooting, and basic editing,
                                                            students learn to translate ideas into visual form.
                                                            Emphasizing aesthetics, space, actors, and visual
                                                            storytelling over technical equipment, the course develops
                                                            skills in cinematic meaning-making, direction, and
                                                            documentation, benefiting both aspiring filmmakers and
                                                            critical film scholars.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6600</td>
                                                        <td>Caste in India: Origin and Practice</td>
                                                        <td>
                                                            Introduction: Much of social and political change in India’s
                                                            history and present can be understood through the question
                                                            of caste. Caste is integral to how social, economic and
                                                            political life in India has and continues to be structured.
                                                            This course offers a basic understanding of the working of
                                                            caste through a historical mapping and a sociological
                                                            exploration. This course aims at sensitising, developing an
                                                            objective understanding towards Indian social hierarchies
                                                            within the caste system and developing analytical skills in
                                                            grappling with the critical issues of Indian social life.
                                                            The course is thus an inter-disciplinary one open to
                                                            students of History, Sociology, Peace and Conflict Studies,
                                                            Economics and Anthropology.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6602</td>
                                                        <td>Introduction to the Microbial World</td>
                                                        <td>
                                                            Introduction to the Microbial World explores the invisible
                                                            yet vital realm of microorganisms and their profound impact
                                                            on human life, society, and ecosystems. The course
                                                            introduces students to the biology, diversity, and functions
                                                            of microbes—viruses, bacteria, fungi, and
                                                            protozoa—highlighting both disease-causing and beneficial
                                                            forms used in healthcare, industry, and the environment.
                                                            Emphasizing microbial interactions, immunity, antibiotics,
                                                            and ecological relationships, it connects biological
                                                            processes to social structures, policy, and public health.
                                                            Designed for students from humanities and social sciences as
                                                            well as biology, the course fosters interdisciplinary
                                                            thinking and informed global citizenship.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1511</td>
                                                        <td>Principles of Taxation Law</td>
                                                        <td>
                                                            Principles of Taxation Law is a Level 4 undergraduate course
                                                            designed to provide a comprehensive understanding of the
                                                            theoretical and practical aspects of taxation in India. The
                                                            course introduces students to direct and indirect taxes,
                                                            including Income Tax and GST, while examining the
                                                            constitutional framework governing taxation. It covers
                                                            computation of income under various heads, deductions,
                                                            assessments, appeals, and filing of individual income tax
                                                            returns. The course also introduces international taxation,
                                                            tax treaties, and transfer pricing. Through lectures,
                                                            discussions, projects, and practical exercises, students
                                                            develop analytical and applied skills relevant to legal
                                                            practice and policy.
                                                        </td>
                                                    </tr>

                                                    <!-- <tr>
                                                        <td>THM6004</td>
                                                        <td>An Introduction to the Study of Foreign Policy of the United
                                                            States of America in the Post-Cold War World</td>
                                                        <td>
                                                            This course examines the foreign policy of the United States
                                                            in the
                                                            post-Cold War era, focusing on global politics, diplomacy,
                                                            international relations, and strategic policy developments.
                                                        </td>
                                                    </tr> -->

                                                    <tr>
                                                        <td>T6615</td>
                                                        <td>Literature and Religion</td>
                                                        <td>
                                                            Studying cross-cultural religious worldviews through
                                                            literature, allows students to experience the diversity and
                                                            interdependence of a global society. Through these
                                                            inter-disciplinary perspectives students will compare and
                                                            contrast philosophies, themes and ideas of religious
                                                            understandings. In dialogue with ideas and worldviews that
                                                            intrigue and challenge us, we find our own truths, our own
                                                            identity and our own voice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>TE7093</td>
                                                        <td>Everyday Physics</td>
                                                        <td>
                                                            Physics is at the outset the science that explains the basic
                                                            rules that govern the natural world around us. As we delve
                                                            deeper into it, physics also helps us understand how these
                                                            so-called ‘rules’ have emerged essentially out of
                                                            randomness, and also how the various components of the
                                                            natural world are connected with each other. A lot of the
                                                            technologies that govern the various aspects of our life
                                                            were invented on the basis of the understanding of physics.
                                                            Learning physics imparts skills of logical and rational
                                                            thinking as well as quantitative and analytical skills that
                                                            are useful in other spheres of life. From this perspective,
                                                            the course has been designed to give a flavour of some of
                                                            the basic concepts in physics, with emphasis on
                                                            understanding how these concepts are reflected in the world
                                                            around us. The course is focused more on building conceptual
                                                            understanding than mastering the mathematical framework of
                                                            physics.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6341</td>
                                                        <td>Women and Environment Eco-feminism</td>
                                                        <td>
                                                            This course explores the intersection of gender and
                                                            environmental issues, focusing on how development paradigms
                                                            and environmental crises disproportionately impact women,
                                                            especially in the Global South. It introduces key debates
                                                            and frameworks such as ecofeminism, feminist political
                                                            ecology, and feminist environmentalism. Students examine
                                                            historical and contemporary discourses on women and the
                                                            environment, alongside civil society movements like Chipko,
                                                            Appiko, and the Green Belt Movement. Through discussions,
                                                            readings, and visual media, the course highlights women’s
                                                            roles in environmental struggles and engages with thinkers
                                                            and activists such as Rachel Carson, Vandana Shiva, Maria
                                                            Mies, and Wangari Maathai.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6342</td>
                                                        <td>Gender Justice and Law</td>
                                                        <td>
                                                            This course examines the relationship between gender,
                                                            justice, and the legal system, focusing on how law shapes
                                                            and regulates personal and social life. It analyses key
                                                            legislations and judicial interventions related to
                                                            sexuality, violence against women, reproduction, marriage
                                                            and divorce, workplace discrimination, sexual harassment,
                                                            trafficking, and LGBT rights. Emphasis is placed on landmark
                                                            developments such as the Vishakha Guidelines, the Verma
                                                            Committee recommendations, debates on sex-selective
                                                            abortion, and the evolution of Article 377. Through
                                                            discussions, readings, and visual material, students
                                                            critically engage with feminist legal perspectives and
                                                            assess the role of courts in advancing gender justice in
                                                            India.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6343</td>
                                                        <td>Class Caste Race and Patriarchy</td>
                                                        <td>
                                                            This course examines the interlinked structures of class,
                                                            caste, gender, and race as systems of social stratification
                                                            shaping everyday life. It introduces key concepts and
                                                            institutions, with particular emphasis on caste in the
                                                            Indian context, and explores how power, resources, and
                                                            knowledge are distributed unequally through these
                                                            structures. Using feminist and intersectional perspectives,
                                                            the course analyses family, marriage, education, and other
                                                            social institutions to understand lived experiences of
                                                            inequality. Classroom discussions, visual materials, and
                                                            film screenings encourage critical engagement, enabling
                                                            students to synthesize theoretical frameworks with empirical
                                                            realities and develop a nuanced understanding of patriarchy
                                                            and social justice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6344</td>
                                                        <td>Women in Conflict and Peace Process</td>
                                                        <td>
                                                            This course explores women’s roles in conflict,
                                                            peacebuilding, and post-conflict reconstruction, challenging
                                                            the dominant portrayal of women solely as victims of
                                                            violence. Using feminist and peace studies perspectives, it
                                                            examines women as active agents in conflict resolution and
                                                            sustainable peace processes. Through global and regional
                                                            case studies—including Rwanda, North-East India, Jammu and
                                                            Kashmir, the Middle East, and Sri Lanka—the course analyses
                                                            women’s participation at grassroots, community, and policy
                                                            levels. Classroom discussions, readings, and film screenings
                                                            enable students to critically assess gendered dimensions of
                                                            conflict, evaluate women’s contributions to peacebuilding,
                                                            and argue for inclusive and long-term peace processes
                                                            grounded in gender justice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6175</td>
                                                        <td>Feminist Criticism, Semiotics, Psychoanalysis</td>
                                                        <td>
                                                            This course introduces students to Western feminist film
                                                            criticism, semiotics, and psychoanalysis as critical
                                                            frameworks for reading cinema. It situates feminist film
                                                            theory within the history of feminist movements and examines
                                                            how cinema is produced within male-dominated social and
                                                            symbolic systems. Drawing on thinkers such as Laura Mulvey,
                                                            Freud, Lacan, Peirce, Jung, and Propp, the course trains
                                                            students to read film images “against the grain” by
                                                            analysing representation, symbolism, narrative, and visual
                                                            pleasure. Through Indian and international films, students
                                                            critically engage with gendered imagery, stereotypes,
                                                            authorship, and the possibilities of feminist and
                                                            alternative cinematic practices.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6176</td>
                                                        <td>Indian Parallel Cinema/Art Cinema/Regional Cinema</td>
                                                        <td>
                                                            This course traces the emergence and evolution of Indian
                                                            parallel cinema in relation to mainstream studio filmmaking.
                                                            It examines a historical phase when distinctions between art
                                                            and commercial cinema blurred, followed by conscious efforts
                                                            by independent filmmakers and the state to create
                                                            alternatives to formula-driven films. Situating cinema
                                                            within India’s political, social, and cultural history, the
                                                            course explores nationalism, artistic renaissance, state
                                                            cultural policies, and debates around socialism and
                                                            capitalism. Students study the role of government
                                                            institutions, film societies, and international festivals in
                                                            shaping parallel cinema, and analyse its aesthetic and
                                                            political trajectories alongside the later liberalized
                                                            market and global recognition.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6177</td>
                                                        <td>Cinema and the Market; Digital Cinema and the Market</td>
                                                        <td>
                                                            This course examines the shifting relationship between
                                                            cinema and the market, highlighting how commercial
                                                            imperatives have shaped production, aesthetics, and audience
                                                            taste over time. It critically analyses the rise of a
                                                            market-driven “taste” that enabled industry control over
                                                            spectatorship and how commercial success became a key
                                                            measure of value. The course situates the emergence of
                                                            “Bollywood” as an industrial and cultural package rather
                                                            than merely a cinematic form. It also explores the
                                                            transition from analogue to digital technologies, the impact
                                                            of new media on filmmaking practices, and the ways
                                                            commercialization continues to dominate cinema alongside
                                                            ongoing efforts to resist and reimagine it.This course
                                                            examines the shifting relationship between cinema and the
                                                            market, highlighting how commercial imperatives have shaped
                                                            production, aesthetics, and audience taste over time. It
                                                            critically analyses the rise of a market-driven “taste” that
                                                            enabled industry control over spectatorship and how
                                                            commercial success became a key measure of value. The course
                                                            situates the emergence of “Bollywood” as an industrial and
                                                            cultural package rather than merely a cinematic form. It
                                                            also explores the transition from analogue to digital
                                                            technologies, the impact of new media on filmmaking
                                                            practices, and the ways commercialization continues to
                                                            dominate cinema alongside ongoing efforts to resist and
                                                            reimagine it.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6178</td>
                                                        <td>Film Analysis and Research</td>
                                                        <td>
                                                            This paper brings to culmination all that the students had
                                                            learnt over the previous nine papers. Students are required
                                                            to write two long essays—one on a particular film and the
                                                            other on a topic of their research.
                                                            Firstly, they see a few films and engage in writing small
                                                            essays on some sequences; they learn how to perfect their
                                                            ability to write film synopses; and they learn to write
                                                            about films in ways that reveal their most essential
                                                            qualities.
                                                            While doing this they are, once again, taught the ways and
                                                            methodologies of research. They discuss their area of
                                                            research with the professors and embark on their search.
                                                            They are required to do field work, archival work,
                                                            interviews and film viewing.
                                                            Much of what they write and what they research would involve
                                                            the cultural and political histories of the country.
                                                            If they choose a foreign film to write on, they would be
                                                            required to read primary and secondary materials.
                                                            The research paper would be on an Indian film, because it is
                                                            not possible for students to do field work on a foreign
                                                            film.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6669</td>
                                                        <td>Introduction to Social Work</td>
                                                        <td>
                                                            Social work is described as a helping profession that
                                                            enables people to help themselves. Social work draws
                                                            extensively upon the knowledge base from various streams in
                                                            order to achieve the goal of helping people to help
                                                            themselves.
                                                            The course Introduction to Social Work aims to enable
                                                            students to understand history and ideological background
                                                            within which social work profession is situated. It also
                                                            aims to touch upon the professional values and ethics that a
                                                            person is expected to hold in social work, and expose
                                                            students to different intervention skills required at
                                                            different levels of intervention (individual, family and
                                                            community).
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6668</td>
                                                        <td>Politics and the Media in India</td>
                                                        <td>
                                                            The course will serve as an introduction to how political
                                                            discourse is covered by the media in India. It will acquaint
                                                            students with the language of political reporting and make
                                                            them familiar with political processes such as elections,
                                                            exit-polls, budgets and the workings of political parties.
                                                            Unlike countries where two-party systems thrive, politics in
                                                            India is multi-party in nature. Regional politics plays an
                                                            important role in the national political discourse. The
                                                            course seeks to familiarize students with the national and
                                                            local political landscape while also equipping them with the
                                                            skills of a political reporter.
                                                            The course will also provide a broad outline of political
                                                            developments in post-Independence India discussing important
                                                            events such as the linguistics reorganization of states, the
                                                            Emergency and its aftermath, the post-Liberalization era and
                                                            contemporary political developments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6667</td>
                                                        <td>Natyashastra: An Indian Perspective of Performance</td>
                                                        <td>
                                                            Natyashastra, composed by sage Bharata, is an ancient
                                                            Sanskrit text is said to have been derived by putting
                                                            together all that was best of the four Vedas namely:
                                                            Rigveda, Yajurveda, Samaveda, Atharvaveda. It delineates a
                                                            sophisticated and stylish technique of performing arts.
                                                            While Bhava, Rasa, Raga, Tala constitutes the basic
                                                            essentials of Natyashastra, it also covers the aspects of
                                                            drama, dance aesthetics, stage design, abhinaya, makeup,
                                                            mathematical and rhythmic footsteps, eye movement, arm
                                                            movement, music and audience. Indian theatre/performance
                                                            techniques have evolved from Natyashastra.
                                                            The course seeks to introduce different elements of
                                                            Natyashastra to students and provide practical instruction
                                                            to help them perform stage productions. Students will be
                                                            able to appreciate the nuances of drama and dance through
                                                            Bharatanatyam. Knowledge of the rules of “Natya” or drama
                                                            will enhance students’ ability to appreciate structural
                                                            designs of performing arts. The course seeks to spread
                                                            awareness amongst the young generation about an ancient
                                                            treatise of Natyashastra, which helps connect the body and
                                                            mind.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6690</td>
                                                        <td>Science as Muse: Intersections of Science and the Arts</td>
                                                        <td>
                                                            Science has played muse to poets, playwrights, and artists,
                                                            by inspiring not just content, but style, and spirit as
                                                            well. This course will be of interest to any student curious
                                                            about these intersections, and ready to invest the time and
                                                            effort required to understand concepts in the natural
                                                            sciences and mathematics that form the basis of creative
                                                            pieces selected for the course. While reading the Polish
                                                            poet Wislawa Szymborska about the digits of the number pi
                                                            “nudging a sluggish eternity”, examining the Spanish
                                                            neuroscientist Santiago Ramón y Cajal’s intricate drawings
                                                            of neurons, or watching a staging of the play Copenhagen
                                                            about a meeting between physicists Werner Heisenberg and
                                                            Niels Bohr, an understanding of the mathematics and science
                                                            that is being referred to greatly enhances our appreciation
                                                            of the poem, sketch, or play. This course will introduce
                                                            students to these and other fascinating structures,
                                                            phenomena, and ideas in the sciences. It is hoped that by
                                                            the end of the course students will not only be conversant
                                                            in the topics discussed, but also recognize that science
                                                            offers a goldmine of inspiration for creative pursuits
                                                            (other than the practice of science itself).
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6744</td>
                                                        <td>Carnatic Music in Indian Musicology</td>
                                                        <td>
                                                            This course introduces students to Carnatic music, one of
                                                            the major traditions of Indian classical music, with deep
                                                            roots in ancient musical practices of South India. Tracing
                                                            its codification by Sri Purandara Dasa and its evolution
                                                            over four centuries, the course explores core elements such
                                                            as raga, tala, swara, and sruti. Students engage with both
                                                            kritis (composed pieces) and manodharma (improvisation),
                                                            gaining insight into vocal and instrumental forms. Through
                                                            practical instruction and guided listening, the course
                                                            develops basic performance skills and cultivates an informed
                                                            appreciation of the aesthetic, historical, and cultural
                                                            richness of the Carnatic classical tradition.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6142</td>
                                                        <td>Intermediate Econometrics</td>
                                                        <td>
                                                            This course builds on Introductory Econometrics and equips
                                                            students with intermediate-level quantitative tools to
                                                            analyse real-world economic problems. It focuses on the
                                                            application and interpretation of econometric theory through
                                                            simultaneous equation models and time-series techniques.
                                                            Students learn to address identification problems, estimate
                                                            structural relationships using methods such as 2SLS and
                                                            3SLS, and work with non-stationary data, unit roots, and
                                                            co-integration. The course also introduces forecasting
                                                            models including ARIMA, VAR, ARCH, and GARCH. Through
                                                            lectures, case studies, research articles, and hands-on lab
                                                            sessions using statistical software, students develop strong
                                                            data analysis, inference, and policy-oriented research
                                                            skills.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6676</td>
                                                        <td>Introduction to Moral Philosophy</td>
                                                        <td>
                                                            This course is an introduction to moral philosophy and is
                                                            intended for students with no prior exposure to philosophy
                                                            as well as for students with some training in philosophy and
                                                            related disciplines. The course will introduce the students
                                                            to philosophical ethics- questions about right and wrong,
                                                            good and evil in the light of the major Western and modern
                                                            Indian philosophers and thinkers.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6689</td>
                                                        <td>Communication for Social Change</td>
                                                        <td>
                                                            This course examines the role of communication and media in
                                                            promoting inclusive development within the Indian
                                                            post-liberalization context. While economic growth has
                                                            benefited some groups, many marginalized communities remain
                                                            excluded and underrepresented in mainstream media. The
                                                            course critiques this gap and explores how governmental and
                                                            non-governmental initiatives use media for social change.
                                                            Combining theory with practice, students study effective
                                                            development communication campaigns and engage directly with
                                                            marginalized communities. Through hands-on projects, they
                                                            experiment with traditional and alternative media forms to
                                                            design creative, impactful communication materials. Designed
                                                            for students from diverse disciplinary backgrounds, the
                                                            course fosters interdisciplinary understanding, critical
                                                            reflection, and collaborative, peer-based learning.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>TE7439</td>
                                                        <td>An Introduction to Maker Culture: Developing Technologies
                                                        </td>
                                                        <td>
                                                            This course introduces students to the global maker movement
                                                            and the rise of citizen scientists and engineers enabled by
                                                            affordable digital technologies. It challenges the
                                                            perception that technology development is limited to
                                                            engineers by fostering hands-on maker literacy. Through
                                                            problem-based learning, students explore real-world issues
                                                            and design customizable solutions using digital fabrication
                                                            tools such as 3D printing and laser cutting, alongside basic
                                                            electronics, sensors, and microcontrollers. Drawing on
                                                            global examples of grassroots innovation, the course
                                                            emphasizes experimentation, collaboration, and learning by
                                                            doing. By actively participating in maker culture, students
                                                            develop confidence, creativity, and practical skills to
                                                            design accessible, low-cost technological solutions.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6745</td>
                                                        <td>Global Justice</td>
                                                        <td>
                                                            This course examines global justice through key debates in
                                                            modern political thought and ethical theory amid increasing
                                                            transnational interaction and global conflict. It critically
                                                            analyses the role and influence of international
                                                            institutions such as the United Nations, transnational
                                                            organizations, and the International Criminal Court in
                                                            shaping contemporary notions of justice. Core themes include
                                                            global citizenship, international equality, world poverty,
                                                            humanitarian responsibility, the limits of state
                                                            sovereignty, and cosmopolitan and capability-based
                                                            approaches to justice. Engaging with thinkers such as Rawls,
                                                            Sen, Nussbaum, Pogge, and Singer, the course balances
                                                            theoretical frameworks with applied global issues. Through
                                                            essays, presentations, and in-depth analyses, students
                                                            develop critical, independent perspectives on global
                                                            justice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6131</td>
                                                        <td>Micro Economics II</td>
                                                        <td>
                                                            This course develops an intermediate understanding of
                                                            microeconomic theory by analysing market structures, input
                                                            markets, and welfare-related issues. It examines how
                                                            consumers and firms make decisions and how markets function
                                                            under different competitive conditions, including perfect
                                                            competition, monopoly, monopolistic competition, and
                                                            oligopoly. Students study pricing strategies, factor price
                                                            determination, and labour and land markets, alongside
                                                            concepts of efficiency, general equilibrium, and market
                                                            failure. Using real-life examples, collaborative learning,
                                                            and problem-solving exercises, the course equips students
                                                            with analytical skills to interpret micro-level economic
                                                            behaviour and evaluate policy interventions, enabling them
                                                            to apply microeconomic concepts to practical and
                                                            contemporary economic issues.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6230</td>
                                                        <td>Hindi 1</td>
                                                        <td>
                                                            Hindi I is an introductory language course designed to build
                                                            basic proficiency in Hindi through grammar, vocabulary,
                                                            reading, writing, and speaking skills. The course
                                                            familiarizes students with the Hindi script, sentence
                                                            structure, nouns, gender, number, cases, and tenses,
                                                            enabling them to understand and construct simple sentences.
                                                            Emphasis is placed on everyday conversation, basic
                                                            translation, and vocabulary related to daily life. Students
                                                            are also introduced to selected poems and passages from
                                                            Hindi literature to develop cultural and literary awareness.
                                                            Through lectures, discussions, tutorials, projects, and
                                                            experiential learning activities, the course aims to develop
                                                            functional communication skills and confidence in using
                                                            Hindi in academic and everyday contexts.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6231</td>
                                                        <td>Hindi 2</td>
                                                        <td>
                                                            Hindi II builds on the foundational skills acquired in Hindi
                                                            I and aims to strengthen students’ reading, writing,
                                                            comprehension, and spoken communication in Hindi. The course
                                                            focuses on practical language use through letter writing,
                                                            comprehension, vocabulary building, synonyms and antonyms,
                                                            pronouns, conjunctions, active and passive voice, and
                                                            punctuation. Emphasis is placed on everyday conversations,
                                                            greetings, and situational dialogue to enhance fluency and
                                                            confidence. Students are also introduced to selected
                                                            passages from Hindi literature to develop cultural and
                                                            literary appreciation. Through lectures, discussions,
                                                            tutorials, projects, and experiential learning activities,
                                                            the course enables students to use Hindi effectively in
                                                            academic, professional, and daily-life contexts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6397</td>
                                                        <td>Basic Hindi I</td>
                                                        <td>
                                                            Basic Hindi I is an introductory language course designed
                                                            for beginners to develop foundational proficiency in Hindi.
                                                            The course focuses on learning the Hindi alphabet, basic
                                                            grammar, and sentence construction, including nouns, gender,
                                                            number, cases, and tenses. Emphasis is placed on building
                                                            everyday vocabulary and enabling students to understand,
                                                            translate, and use simple Hindi sentences. Through lectures,
                                                            discussions, self-study, and role play, students practice
                                                            day-to-day conversation and situational communication. The
                                                            course also introduces poem recitation, administrative
                                                            terminology, and selected literary elements, helping
                                                            students develop confidence in spoken and written Hindi
                                                            while gaining cultural and practical language awareness
                                                            relevant to academic and social contexts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6398</td>
                                                        <td>Basic Hindi II</td>
                                                        <td>
                                                            Basic Hindi II builds on the foundational language skills
                                                            developed in Basic Hindi I and aims to enhance students’
                                                            functional proficiency in Hindi. The course focuses on
                                                            strengthening grammar, vocabulary, and sentence construction
                                                            through practical components such as letter writing, essay
                                                            writing, translation, and role play. Students learn to use
                                                            pronouns, adjectives, adverbs, conjunctions, prefixes, and
                                                            suffixes, along with active and passive voice and
                                                            punctuation. Special emphasis is placed on administrative
                                                            and legal translation and on expressing ideas in simple
                                                            Hindi for everyday and professional contexts. Through
                                                            lectures, discussions, self-study, and experiential
                                                            learning, the course develops confidence in reading,
                                                            writing, and speaking Hindi effectively.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>TH4078</td>
                                                        <td>Decoding the Genetically Modified</td>
                                                        <td>
                                                            Time and the exponential growth in world population have
                                                            driven consumable resources thin. The race for alternate
                                                            sources and strategies for consumables has become hotter
                                                            than ever. Consequently, it becomes imperative that members
                                                            of the public participate and engage in a healthy debate
                                                            about the eventual application of these innovations on
                                                            society. One such strategy that has been demonstrating the
                                                            greatest promise is Gene Technology. This relies on the
                                                            understanding that large-scale issues such as world hunger
                                                            and growing disease may potentially be remedied by changes
                                                            in the smallest units of life – the gene. In this context,
                                                            the Genetically Modified Organism - of which much has been
                                                            spoken, much debated but very little critically understood.
                                                            This course introduces aspects such as the definition,
                                                            history, development, application, safety/ethics,
                                                            policy/regulation and future perspectives of this field.
                                                            Ultimately the course presents cases for and against the use
                                                            of genetically modified organisms – animal and plant, for
                                                            human consumption. For this, is the future. The choices that
                                                            we have to work with are limited to barely two – utilize
                                                            available resources to their fullest potential, or evolve
                                                            into a completely new species. What are we going to choose?
                                                            What are we going to become?
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6784</td>
                                                        <td>Comparative Literature</td>
                                                        <td>
                                                            This course will introduce students to the discipline of
                                                            Comparative Literature which is concerned with mapping the
                                                            varieties of the "literary phenomenon", the process by which
                                                            it forms, crystallizes and moves between and across the
                                                            literary systems and languages. The study of Comparative
                                                            Literature therefore is a dynamic, context related exercise.
                                                            Major texts from all over the world, whether orally
                                                            transmitted, performed or written come within the purview of
                                                            our syllabus, and our primary consideration is their
                                                            relation with the context in which they are written, their
                                                            reception in the contexts in which they are read, their
                                                            relevance to the thematological or genological process of
                                                            literature that cuts across single literary systems in
                                                            specific languages. This course is not designed to provide
                                                            cursory acquaintance with "great texts" of world literature
                                                            – rather, they aim to equip the student with methodologies
                                                            of reading, and train her in the application of these
                                                            methodologies to cultural texts.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3614</td>
                                                        <td>Logic Designing and Research Techniques in Python</td>
                                                        <td>
                                                            This course introduces students, particularly from
                                                            non-computer science backgrounds, to logic design,
                                                            programming, and research applications using Python.
                                                            Beginning with fundamental programming concepts, algorithms,
                                                            and flowcharts, the course emphasizes logical thinking and
                                                            structured problem-solving. Students learn to write and
                                                            execute Python programs using environments such as Anaconda,
                                                            Jupyter, and Spyder, and gain proficiency in data types,
                                                            control structures, functions, and modules. Integrating
                                                            programming with research, the course covers statistical
                                                            concepts and their application through Python libraries such
                                                            as NumPy and Matplotlib. Through classroom and lab sessions,
                                                            students develop practical coding skills and the ability to
                                                            use Python for data analysis, visualization, and
                                                            research-oriented tasks relevant to contemporary industry
                                                            and academia.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1200</td>
                                                        <td>Human Rights and Related Laws</td>
                                                        <td>
                                                            This course familiarizes students with Human Rights, tracing
                                                            their evolution, legal foundations, and contemporary
                                                            significance. It examines historical milestones like the
                                                            Magna Carta and modern constitutions, alongside
                                                            international frameworks including the UN, regional
                                                            conventions, and treaties. Special focus is given to the
                                                            rights of vulnerable groups in India, such as women,
                                                            children, elders, persons with disabilities, and the third
                                                            gender. Teaching combines lectures with interactive methods
                                                            like moot courts, opinion drafting, debates, and case study
                                                            analysis. By the end, students develop a critical
                                                            understanding of enforcement mechanisms, the role of
                                                            national commissions, NGOs, and media in safeguarding human
                                                            rights locally and globally.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4395</td>
                                                        <td>Ecology and Evolution</td>
                                                        <td>
                                                            This course introduces students to the principles of ecology
                                                            and evolution, highlighting their interdependence in shaping
                                                            biological systems. It covers population dynamics, community
                                                            interactions, behavioral ecology, and life history
                                                            strategies, emphasizing evolutionary perspectives on social
                                                            behavior, sexual selection, and host-parasite coevolution.
                                                            Applied ecology topics include ecosystem diversity, human
                                                            impacts, sustainable resource management, pollution control,
                                                            and environmental conservation. The course combines
                                                            lectures, interactive discussions, field visits, and
                                                            analysis of articles, videos, and case studies. By semester
                                                            end, students gain a conceptual and practical understanding
                                                            of ecological processes, evolutionary mechanisms, and their
                                                            relevance to environmental and human health challenges.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4399</td>
                                                        <td>Reproductive and Developmental Biology</td>
                                                        <td>
                                                            This course introduces students to reproductive and
                                                            developmental biology, emphasizing normal processes,
                                                            regulatory mechanisms, and selected clinical applications.
                                                            It covers reproductive diversity across microbes, plants,
                                                            and animals, including sexual and asexual reproduction, sex
                                                            determination, and sex ratios. Animal developmental biology
                                                            topics include embryogenesis, pattern formation, morphogen
                                                            gradients, cell–cell interactions, growth, differentiation,
                                                            stem cells, tissue repair, and regeneration. Plant
                                                            developmental biology focuses on embryogenesis, gene
                                                            regulation, flowering, and floral organ specification.
                                                            Pedagogy combines lectures, discussions, field visits, and
                                                            multimedia resources. By semester end, students gain a
                                                            conceptual and practical understanding of reproduction,
                                                            development, and experimental methods in both animals and
                                                            plants.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4400</td>
                                                        <td>Applied Biology and Biotechnology</td>
                                                        <td>
                                                            This course on Applied Biology and Biotechnology introduces
                                                            students to the use of biological systems, organisms, and
                                                            derivatives for practical and technological applications. It
                                                            covers plant biotechnology including ethnobotany, plant
                                                            breeding, tissue culture, and biofertilizers; applied
                                                            zoology including animal breeding, sericulture, and
                                                            fisheries; and applied microbiology such as microbial
                                                            fermentation, food, water, and air microbiology. The course
                                                            also addresses vaccines, nutrition, molecular biotechnology
                                                            including cloning, vectors, and DNA fingerprinting, and
                                                            laboratory methods such as gene cloning, tissue culture,
                                                            fermentation, and water testing. Pedagogy includes lectures,
                                                            lab sessions, field visits, and interactive discussions for
                                                            hands-on understanding.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T4401</td>
                                                        <td>Mathematical Biology</td>
                                                        <td>
                                                            This course in Mathematical Biology introduces students to
                                                            the mathematical modeling and analysis of biological
                                                            processes using applied mathematical techniques. It covers
                                                            modeling in population dynamics, epidemiology, biochemistry,
                                                            and neuroscience, enabling students to understand complex,
                                                            non-linear biological mechanisms. Topics include growth and
                                                            population models, disease transmission and epidemiological
                                                            modeling, enzyme kinetics, metabolic and gene networks, and
                                                            computational neuroscience models. Pedagogy combines
                                                            lectures, interactive discussions, field visits, and the use
                                                            of articles, videos, and case studies to provide practical
                                                            understanding. The course is interdisciplinary, requiring
                                                            foundational knowledge in both mathematics and biology to
                                                            facilitate effective learning and simulations.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T4402</td>
                                                        <td>Behavioral Biology (Cognitive Science, Sociobiology and
                                                            Evolutionary Psychology)</td>
                                                        <td>
                                                            This course, Behavioral Biology, explores the interplay
                                                            between biology and behavior, integrating Cognitive Science,
                                                            Sociobiology, and Evolutionary Psychology. It examines how
                                                            biological mechanisms influence perception, decision-making,
                                                            social behavior, and hormonal and physiological responses.
                                                            Topics include classical and cognitive ethology, behavioral
                                                            decision-making, neurobiology of behavior, genetic
                                                            predispositions, and evolutionary psychology concepts such
                                                            as sexual jealousy, aggression, and consciousness. Pedagogy
                                                            combines lectures, interactive discussions, field visits,
                                                            lab demonstrations, and multimedia resources to provide
                                                            practical understanding. The course is interdisciplinary,
                                                            bridging biology, psychology, and anthropology, enabling
                                                            students to analyze behavior through evolutionary,
                                                            cognitive, and biological perspectives.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6151</td>
                                                        <td>Comparative Economics</td>
                                                        <td>
                                                            Comparative Economics deals with the comparative study of
                                                            different systems of economic organization, such as
                                                            capitalism, socialism, feudalism and the mixed economy. The
                                                            course also deals with economic effects of transitions from
                                                            one economic organization to another. This is a new and
                                                            evolving field of economic study.
                                                            1. An off-shoot of Political Science, International
                                                            Relations developed as an independent field of study
                                                            primarily in the post-World War I era. With imperialism,
                                                            globalization, liberalization, and finally neo-imperialism,
                                                            the political destiny of every nation has become intensely
                                                            inter-dependent on the political economy of other nations.
                                                            In the present milieu, politics of an individual country
                                                            cannot be correctly assessed in isolation. The study of
                                                            International Relations has therefore become an
                                                            indispensable tool in the analysis of politics and economics
                                                            of any nation state.
                                                            2. Paper 1 entitled Introduction to International Relations
                                                            I will focus primarily on the scope of International
                                                            Relations and the various approaches through which it is
                                                            studied.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6153</td>
                                                        <td>Economic History and Thought</td>
                                                        <td>
                                                            This course offers a comprehensive survey of world economic
                                                            history, designed to introduce students to the subject
                                                            matter and methodology of economic history. Topics are
                                                            chosen to show a wide variety of historical experience and
                                                            illuminate the process of industrialization. The course
                                                            focuses on a set of countries, which followed clearly
                                                            diverse trajectories and patterns of growth to achieve their
                                                            industrial transition and compares the outcomes of these
                                                            diverse trajectories on sectoral change, inter-sectoral
                                                            relations, labour processes and industrial relations and
                                                            also compares the role of the state in facilitating the
                                                            respective trajectories
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6155</td>
                                                        <td>Contemporary Indian Economy</td>
                                                        <td>
                                                            The course Contemporary Indian Economy provides a
                                                            comprehensive analysis of India’s economic structure,
                                                            development, and current challenges. It examines the nature
                                                            of a developing economy, human development, economic
                                                            planning, public and private sectors, demographic
                                                            transitions, urbanization, reforms, poverty, unemployment,
                                                            and inclusive growth. It also explores agriculture,
                                                            industry, and infrastructure in India, emphasizing
                                                            data-driven analysis and critical evaluation of policies.
                                                            Pedagogy includes interactive discussions, multimedia
                                                            resources, and continuous assessments to ensure practical
                                                            understanding. Students gain analytical skills to evaluate
                                                            economic performance, sectoral issues, and policy impacts,
                                                            preparing them to critically engage with contemporary Indian
                                                            economic issues.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6821</td>
                                                        <td>Conversational Skills in Spanish</td>
                                                        <td>
                                                            The Conversational Skills in Spanish course introduces
                                                            students to basic Spanish language and culture, focusing on
                                                            speaking, listening, reading, and writing skills. It
                                                            emphasizes everyday communication in contexts like
                                                            greetings, self-introduction, hobbies, family, shopping,
                                                            dining, travel, and health. Grammar is taught functionally,
                                                            supporting sentence construction and comprehension. Pedagogy
                                                            uses immersive methods—role-plays, games, audio-visual aids,
                                                            and cultural activities—to encourage practical application.
                                                            Students practice dialogues, comprehension, and writing
                                                            informal messages while learning about Spain and Latin
                                                            American societies, cuisine, and customs. Continuous
                                                            evaluations through projects, written tests, dictation,
                                                            vocabulary exercises, and role-plays assess proficiency and
                                                            practical conversational competence.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6818</td>
                                                        <td>Conversational Skills in French</td>
                                                        <td>
                                                            The course Conversational Skills in French (Level 2) offered
                                                            at the Symbiosis School for Liberal Arts aims to develop
                                                            basic communicative competence in French through speaking,
                                                            listening, reading, and writing skills. Designed as an
                                                            activity-based and task-oriented course, it emphasizes
                                                            direct teaching methodology with minimal use of English.
                                                            Students learn to handle everyday situations such as
                                                            introductions, shopping, dining, travel, and social
                                                            interactions through role plays, games, audio-visual aids,
                                                            and cultural activities. Grammar is taught functionally to
                                                            support real-life communication while fostering
                                                            cross-cultural awareness and confidence in using the
                                                            language.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6822</td>
                                                        <td>Conversational Skills in Chinese</td>
                                                        <td>
                                                            The course Conversational Skills in Chinese (Level 2) at the
                                                            Symbiosis School for Liberal Arts focuses on developing
                                                            foundational communicative competence in Mandarin through
                                                            speaking, listening, reading, and writing. Using a direct
                                                            and activity-based pedagogy, the course emphasizes
                                                            pronunciation, tones, script, radicals, and sentence
                                                            construction for everyday communication. Students engage in
                                                            role plays, dialogues, dictation, translation, and
                                                            situational conversations covering daily routines,
                                                            self-introduction, travel, shopping, and classroom
                                                            interactions. Functional grammar, vocabulary building, and
                                                            exposure to Chinese culture and history enable learners to
                                                            communicate confidently while developing cross-cultural
                                                            awareness and practical language skills.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6820</td>
                                                        <td>Conversational Skills in Japanese</td>
                                                        <td>
                                                            The course Conversational Skills in Japanese (Level 2) at
                                                            the Symbiosis School for Liberal Arts is designed to build
                                                            foundational communicative proficiency in Japanese through
                                                            speaking, listening, reading, and writing. Adopting a
                                                            direct, activity-based pedagogy, the course emphasizes
                                                            everyday communication through role plays, dialogues,
                                                            audio-visual aids, and cultural activities. Learners acquire
                                                            practical language skills for self-introduction, social
                                                            interactions, travel, shopping, dining, and daily routines.
                                                            Grammar is taught functionally to support real-life usage,
                                                            while structured assessments, projects, and continuous
                                                            evaluation help develop linguistic accuracy, cultural
                                                            sensitivity, and confidence in conversational Japanese.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6819</td>
                                                        <td>Conversational Skills in German</td>
                                                        <td>
                                                            The course Conversational Skills in German (Level 2) at the
                                                            Symbiosis School for Liberal Arts aims to develop practical
                                                            communicative competence in German through speaking,
                                                            listening, reading, and writing. Using a direct,
                                                            activity-based pedagogy with minimal use of English, the
                                                            course focuses on everyday situations such as introductions,
                                                            free-time activities, dining, shopping, travel, healthcare,
                                                            and city navigation. Students engage in role plays,
                                                            dialogues, audio-visual materials, and continuous
                                                            assessments to apply language skills in real-life contexts.
                                                            Grammar is taught functionally to support communication,
                                                            while cultural sensitization introduces learners to
                                                            German-speaking countries, fostering cross-cultural
                                                            awareness and confidence in conversational German. </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6847</td>
                                                        <td>Sociology of Health</td>
                                                        <td>
                                                            The course Sociology of Health introduces undergraduate
                                                            students to the sociological study of health, illness, and
                                                            medicine within broader social, political, and cultural
                                                            frameworks. It examines theoretical perspectives such as
                                                            biomedical, neo-Marxist, feminist, and poststructural
                                                            approaches to understand public health, medical
                                                            institutions, and health inequalities. Through concepts of
                                                            social epidemiology, political economy, and societal
                                                            responses to disease, the course critically analyses health
                                                            systems in India and globally. Using lectures, discussions,
                                                            readings, case studies, and guest lectures, students develop
                                                            the ability to connect theory with contemporary health
                                                            practices and public policy debates.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6865</td>
                                                        <td>Classical Hinduism - A Study Through Scriptures</td>
                                                        <td>
                                                            The course Classical Hinduism: A Study Through Scriptures
                                                            introduces undergraduate students to the philosophical,
                                                            ritual, and devotional traditions of Hinduism through close
                                                            engagement with primary texts and scholarly interpretations.
                                                            It explores the origins of Vedic religion, scriptural
                                                            authority, ritual practices, renunciation, and concepts of
                                                            self and liberation across traditions such as Sāṅkhya, Yoga,
                                                            Advaita, Viśiṣṭādvaita, and Bhakti. Emphasizing close
                                                            textual reading, critical analysis, and discussion, the
                                                            course develops students’ abilities to interpret classical
                                                            Hindu texts and articulate coherent arguments. Interactive
                                                            pedagogy, multimedia resources, and expert lectures support
                                                            a nuanced understanding of Hindu thought and practice.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6864</td>
                                                        <td>Permaculture Design and Regenerative Ecosystems</td>
                                                        <td>
                                                            The course Permaculture Design and Regenerative Ecosystems
                                                            introduces undergraduate students to permaculture as a
                                                            holistic design science for creating sustainable and
                                                            regenerative human–nature systems. It explores core
                                                            principles such as ethics, patterns, energy flows, soil,
                                                            water, forests, climate, and cultivated ecologies across
                                                            diverse biomes. Emphasizing systems thinking and hands-on
                                                            learning, the course enables students to design regenerative
                                                            landscapes and evaluate their ecological and social impact.
                                                            Through site analysis, design projects, fieldwork,
                                                            discussions, and expert inputs, students develop practical
                                                            skills to address sustainability challenges and create
                                                            resilient natural and community-based ecosystems.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6859</td>
                                                        <td>History and Story: Through the Looking Glass</td>
                                                        <td>
                                                            The course History and Story: Through the Looking Glass of
                                                            Fiction examines the complex relationship between historical
                                                            facts, myths, and fictional narratives. It explores how
                                                            history influences popular culture and how fiction reshapes
                                                            historical understanding through literature, films, and
                                                            graphic narratives. By engaging with texts from the West and
                                                            East, including novels, epics, comics, and cinematic
                                                            adaptations, students critically analyse themes such as
                                                            revolution, capitalism, colonialism, partition, gender, and
                                                            memory. Through close reading, discussions, and
                                                            interpretative assignments, the course develops skills to
                                                            distinguish between fact and fiction while understanding
                                                            their intersections in historical representation.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6858</td>
                                                        <td>The History of Small Things</td>
                                                        <td>
                                                            The course The History of Small Things introduces students
                                                            to microhistory by examining how seemingly ordinary objects
                                                            and minor events shape major historical processes. Through
                                                            case studies such as salt, cotton, tea, chocolate, sugar,
                                                            gunpowder, and everyday commodities, the course reveals the
                                                            hidden connections between material culture, empire,
                                                            colonialism, capitalism, and power. By shifting focus from
                                                            grand narratives to the overlooked and mundane, students
                                                            learn to reinterpret history from alternative perspectives.
                                                            Using discussions, multimedia resources, and interpretative
                                                            assignments, the course develops critical historical
                                                            thinking and demonstrates how small things can have
                                                            transformative global consequences.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6862</td>
                                                        <td>From Products to Self: Personal, Image and Reputation Brand
                                                            Management</td>
                                                        <td>
                                                            The course From Products to Self: Personal, Image &
                                                            Reputation Brand Management introduces undergraduate
                                                            students to the principles and practices of personal
                                                            branding in the digital age. It explores self-branding
                                                            concepts, strategic self-analysis, communication, and
                                                            marketing mix approaches to build and manage personal and
                                                            professional identities. Emphasis is placed on online
                                                            reputation management, digital security, and the effective
                                                            use of platforms such as LinkedIn, blogs, and SEO tools.
                                                            Through live projects, case discussions, and expert
                                                            interactions, students learn to design, launch, and evaluate
                                                            personal brand campaigns while developing skills relevant to
                                                            contemporary careers.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6863</td>
                                                        <td>The Self, Individuality and Identity - A Biological
                                                            Perspective</td>
                                                        <td>
                                                            The dialectical concept of the Self lies at the very
                                                            foundations of the epistemic cultures of Humanities and the
                                                            Social Sciences. Here, the acknowledgement of the Self
                                                            presents as individuality and an understanding of the
                                                            aspects of the Self and consequently ‘the other’ in turn,
                                                            results in the synthesis of identity. Indeed ‘Identity’ and
                                                            ‘Individuality’ have been considered the agencies of thought
                                                            and action for centuries and appears most relevant in the
                                                            current times than ever before.
                                                            In the life sciences, these discussions have a long history,
                                                            their own epistemology and meaning. The understanding has
                                                            progressed from an isolated, static, deterministic and
                                                            reductionist nature to a dynamic and holistic one that now
                                                            finds extrapolations in Social Sciences such as
                                                            anthropology, psychology and sociology. This one of a kind
                                                            course explores the Self through the lens of Biology, both
                                                            notionally and in scale. We will look at the different
                                                            levels of abstraction and perspectives used by biologists to
                                                            define the Self. We will explore how this notion can be
                                                            applied phenomenologically, via inclusion and exclusion.
                                                            Finally we will address the new paradigms in thinking about
                                                            inter-identities and integrated identities to more radical
                                                            views where the concept of individuality needs to be
                                                            discarded to understand life as a functional process As an
                                                            outcome of the course, the student will be able to identify
                                                            inter-connectedness between concepts and themes in Social
                                                            Sciences and Humanities and those in Natural Sciences and
                                                            consequently extrapolate these identifications to create
                                                            spaces of conversation and activity between the three
                                                            domains.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6861</td>
                                                        <td>Role of Armed Forces in International Politics</td>
                                                        <td>
                                                            The course Role of Armed Forces in International Politics
                                                            examines the strategic, organizational, and diplomatic roles
                                                            of military forces in shaping international relations and
                                                            national security. It introduces students to the command
                                                            structures and functions of the Indian Army, Navy, and Air
                                                            Force, with comparative perspectives on the armed forces of
                                                            the United States, Russia, and China. Through key concepts
                                                            such as deterrence, balance of power, coercive and benign
                                                            diplomacy, and military ethics, the course analyzes the use
                                                            of force in global politics. Case studies of major
                                                            international conflicts and regions enable students to
                                                            understand military diplomacy and security dynamics in
                                                            contemporary world affairs.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6860</td>
                                                        <td>United Nations Peacekeeping Operations</td>
                                                        <td>
                                                            The course United Nations Peacekeeping Operations:
                                                            Resolution and Management of Conflict for Sustainable Peace
                                                            examines the role of the United Nations in conflict
                                                            prevention, management, and post-conflict peacebuilding. It
                                                            introduces students to the functions of the UN General
                                                            Assembly, Security Council, and the Department of
                                                            Peacekeeping Operations, along with core peacekeeping
                                                            principles and doctrines. Through theoretical frameworks on
                                                            conflict, peace, and humanitarian intervention, the course
                                                            explores the military, police, and civilian dimensions of
                                                            peacekeeping. Extensive case studies of UN missions across
                                                            regions enable students to critically assess operational
                                                            challenges, effectiveness, and the need for reforms in
                                                            achieving sustainable peace.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6866</td>
                                                        <td>Basics of Western Music</td>
                                                        <td>
                                                            The course Basics of Western Music introduces undergraduate
                                                            students to the fundamental principles of reading, writing,
                                                            and understanding Western musical notation. It develops
                                                            essential skills in rhythm, melody, keys, clefs, dynamics,
                                                            and time signatures, enabling students to interpret and
                                                            notate music accurately. Through guided transcription,
                                                            composition, and performance, learners acquire the ability
                                                            to translate heard music into written form and analyze basic
                                                            musical structures. The course also provides a foundation
                                                            for further studies in musicology and ethnomusicology,
                                                            equipping students with transferable notation skills
                                                            applicable across musical traditions and performance-based
                                                            academic projects.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6856</td>
                                                        <td>Maritime History of India</td>
                                                        <td>
                                                            The course Maritime History of India explores the centrality
                                                            of the seas and oceans in shaping India’s historical,
                                                            economic, and cultural trajectories. It introduces students
                                                            to maritime historiography, connected oceanic worlds, and
                                                            networks of trade, knowledge, and power across the Indian
                                                            Ocean. Through the study of coastal polities, early
                                                            seafaring traditions, Asian trading networks, and European
                                                            interventions, the course highlights India’s long maritime
                                                            engagement from ancient to post-colonial times. Emphasis is
                                                            placed on critical thinking, interdisciplinary approaches,
                                                            and contemporary relevance, enabling students to understand
                                                            maritime history as a vital lens for global and regional
                                                            historical analysis.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6857</td>
                                                        <td>Urban Studies: Cross-Disciplinary Perspectives</td>
                                                        <td>
                                                            The course Urban Studies: Cross-Disciplinary Perspectives
                                                            examines the historical evolution and contemporary dynamics
                                                            of cities in India through interdisciplinary frameworks
                                                            drawn from history, sociology, anthropology, geography, and
                                                            urban planning. It traces the origins of urbanization from
                                                            ancient Indian civilizations to modern metropolitan
                                                            formations, situating Indian urban experiences within wider
                                                            Western theoretical traditions. By engaging with classical
                                                            and contemporary thinkers, the course encourages critical
                                                            reflection on urban processes, spatial practices,
                                                            governance, and social inequalities. Through comparative
                                                            perspectives, theoretical readings, and empirical case
                                                            studies, students develop a nuanced understanding of the
                                                            city as a complex social, cultural, economic, and political
                                                            space shaped by both local histories and global forces.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6867</td>
                                                        <td>Introduction to Hindustani Classical Music</td>
                                                        <td>The course Introduction to Hindustani Classical Music offers
                                                            students a foundational understanding of North Indian
                                                            classical music, encompassing both theoretical concepts and
                                                            practical applications. Students learn to identify swaras,
                                                            taals, and elementary raags, performing alankaars and simple
                                                            bandishes, while gaining insights into the historical
                                                            evolution of Hindustani music. The course introduces the
                                                            concept of gharanas, eminent musicians, and various forms
                                                            such as Thumri, Dadra, and Bhajan. Comparative studies with
                                                            Carnatic and Western classical music enhance contextual
                                                            appreciation. Through interactive lectures, audio-visual
                                                            demonstrations, and hands-on practice, students develop the
                                                            skills to read, perform, and critically engage with the
                                                            nuances of Hindustani music.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6894</td>
                                                        <td>Contemporary India</td>
                                                        <td>The course Contemporary India provides an in-depth
                                                            understanding of India’s political, social, and economic
                                                            evolution from colonial rule to the present. It examines the
                                                            impact of colonialism, the process of decolonization, and
                                                            the framing of the Indian Constitution. Students analyze the
                                                            functioning of political parties, democratic institutions,
                                                            and economic reforms, alongside debates on agriculture and
                                                            development. The course also explores challenges to Indian
                                                            democracy, including communalism, institutional issues, and
                                                            secessionist movements. Through interactive discussions,
                                                            assignments, and multimedia resources, students develop
                                                            critical insights into India’s nation-building process, the
                                                            role of political actors, and the complexities of sustaining
                                                            a vibrant democracy.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6898</td>
                                                        <td>Global Mental Health</td>
                                                        <td>Global Mental Health examines mental health issues in
                                                            low-resource and developing countries, emphasizing cultural,
                                                            social, and gender dimensions. The course explores the
                                                            global burden of disease, mental health across the lifespan,
                                                            stigma, and the impact of violence and complex emergencies.
                                                            Students learn methods for cross-cultural assessment,
                                                            instrument development, and adaptation of interventions for
                                                            local contexts. Gender-specific concerns, psychosocial
                                                            strategies, and ethical considerations for vulnerable
                                                            populations are discussed. Through case studies,
                                                            assignments, and experiential activities, students develop
                                                            critical insights into culturally sensitive mental health
                                                            research and intervention strategies, preparing them to
                                                            address global mental health challenges in diverse and
                                                            resource-limited settings.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6895</td>
                                                        <td>Internal Security in India</td>
                                                        <td>Internal Security in India explores the multifaceted
                                                            security challenges facing the nation, including terrorism,
                                                            insurgencies, communal violence, and extremism. The course
                                                            examines the historical evolution, causes, and contemporary
                                                            trends of these threats, emphasizing their implications for
                                                            India’s sovereignty, development, and state response.
                                                            Students study institutional frameworks, legal structures,
                                                            and counter-terrorism and counter-insurgency strategies.
                                                            Through interactive discussions, case studies, and
                                                            multimedia resources, learners gain a critical understanding
                                                            of internal security dynamics and the capacities of agencies
                                                            like IB, RAW, CRPF, and NIA. The course equips students to
                                                            analyze, evaluate, and respond to India’s internal security
                                                            environment in a comprehensive and informed manner.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6005</td>
                                                        <td>Humour Studies: An Interdisciplinary Introduction</td>
                                                        <td>Humour Studies: An Interdisciplinary Introduction explores
                                                            the history, philosophy, science, and social function of
                                                            humour. Students examine theoretical frameworks,
                                                            methodologies, and limitations while analyzing humour across
                                                            anthropology, sociology, linguistics, politics, and popular
                                                            culture. The course investigates irony, parody, satire, and
                                                            gallows humour, and addresses humour’s role in identity,
                                                            religion, gender, and sexuality. Contemporary trends in
                                                            digital humour and applications in business, education,
                                                            arts, and research are discussed. Through interactive
                                                            discussions, multimedia, guest lectures, and projects,
                                                            students develop critical understanding of humour as a
                                                            communication tool, cultural practice, and instrument for
                                                            social critique and creative expression.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6892</td>
                                                        <td>Digital Tools for Qualitative Analysis</td>
                                                        <td>Digital Tools for Qualitative Analysis introduces students
                                                            to the use of digital platforms and CAQDAS software—such as
                                                            NVivo, Atlas.ti, MAXQDA—for collecting, coding, and
                                                            analyzing qualitative data. The course covers online data
                                                            collection methods, textual and multimedia data management,
                                                            and digital techniques for pattern recognition,
                                                            visualization, content analysis, and mixed-methods research.
                                                            Students gain hands-on experience entering and coding data,
                                                            generating reports, and applying analytical tools to
                                                            humanities and social sciences research. Ethical
                                                            considerations and academic writing are integrated
                                                            throughout. Through lectures, demonstrations, and
                                                            project-based learning, students develop practical skills to
                                                            conduct rigorous, software-assisted qualitative research.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6893</td>
                                                        <td>Digital Tools for Quantitative Analysis</td>
                                                        <td>Digital Tools for Quantitative Analysis introduces students
                                                            to the principles and applications of quantitative research
                                                            using digital software. Students learn to organize, code,
                                                            and enter data, and perform statistical analyses for
                                                            continuous and discrete variables, including parametric and
                                                            non-parametric tests. The course covers frequency
                                                            distributions, measures of central tendency, dispersion, and
                                                            interpretation of outputs using software like PSPP, SPSS,
                                                            STATA, R, Python, or Jamovi. Through practical
                                                            demonstrations, hands-on exercises, and project-based
                                                            learning, students develop the ability to analyze data
                                                            effectively, generate reports, and interpret results,
                                                            equipping them with essential skills for quantitative
                                                            research across disciplines.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6991</td>
                                                        <td>Reading Ethnography Through the Ages</td>
                                                        <td>Reading Ethnography Through the Ages introduces students to
                                                            the historical development, methods, and purposes of
                                                            ethnographic research. The course examines classical and
                                                            contemporary ethnographies, exploring themes such as magic,
                                                            myth, religion, performance, symbols, markets, gender, and
                                                            digital ethnography. Students learn to interpret cultural
                                                            contexts, analyze ethnographic texts critically, and
                                                            understand the motivations and limitations of ethnographers.
                                                            Through interactive discussions, multimedia resources, and
                                                            guided readings, students develop skills in evaluating
                                                            ethnographic work, comparing methodologies, and appreciating
                                                            diverse approaches, including autoethnography and visual
                                                            methods. The course cultivates both theoretical
                                                            understanding and practical analytical skills in
                                                            anthropology and social research.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6007</td>
                                                        <td>Educational Psychology</td>
                                                        <td>Educational Psychology at SSLA is an undergraduate course
                                                            under the Psychology specialization. It introduces students
                                                            to major learning theories, their practical applications in
                                                            education, and the holistic understanding of learners,
                                                            teachers, knowledge, activities, community, and assessment.
                                                            Students explore behavioral, social-cognitive, and
                                                            instructional theories, examine learner differences and
                                                            exceptionalities, and develop classroom management
                                                            strategies. The course emphasizes interactive discussions,
                                                            multimedia resources, projects, and guest lectures. Key
                                                            references include Santrock, Woolfolk, Mathur, Bhatia, and
                                                            Mangal.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6006</td>
                                                        <td>Indian Contemporary Dance: Techniques and Choreography</td>
                                                        <td>Indian Contemporary Dance: Techniques and Choreography at
                                                            SSLA is an undergraduate course under the Performing Arts
                                                            specialization. It provides students with a comprehensive
                                                            understanding of contemporary dance globally and its
                                                            evolution in India. The course covers the theory and
                                                            practice of Indian contemporary dance, focusing on Preeti
                                                            Athreya’s techniques in coordination, choreography, leg
                                                            work, and movement composition. Students explore how
                                                            classical dance movements are adapted in contemporary forms,
                                                            study diverse background disciplines like jazz, boxing, and
                                                            physical fitness, and participate in practical sessions to
                                                            apply their learning. The pedagogy combines interactive
                                                            discussions, multimedia resources, and hands-on dance
                                                            practice, with evaluation aligned to SIU rules.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6990</td>
                                                        <td>Economic Anthropology and Value-centred Praxis</td>
                                                        <td>This course explores the study of economic practices through
                                                            an anthropological lens, emphasizing context-sensitive
                                                            analysis and ethical responsibility. Students engage with
                                                            historical and contemporary theories, ethnography, and
                                                            participant observation to understand money, value, debt,
                                                            and trust in diverse social settings. The curriculum
                                                            encourages critical reflection on human-centered and
                                                            ecology-focused solutions, fostering adaptive and
                                                            responsible frameworks for addressing real-world challenges.
                                                            Through case studies, projects, and interactive discussions,
                                                            students develop practical skills to analyze complex
                                                            systems, balance local and global perspectives, and propose
                                                            socially conscious interventions, cultivating a nuanced
                                                            understanding of the intersection between economic behavior,
                                                            ethics, and society.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6993</td>
                                                        <td>Conversational Skills in Korean</td>
                                                        <td>This course introduces students to conversational Korean,
                                                            combining language skills with cultural understanding.
                                                            Learners practice constructing simple sentences and everyday
                                                            expressions for situations such as social interactions,
                                                            travel, shopping, and dining. Emphasis is placed on reading,
                                                            writing informal texts, listening comprehension, and
                                                            engaging in basic conversations. Students gain fluency in
                                                            pronunciation, numbers, dates, and common verbs, and learn
                                                            to use particles for sentence construction. Interactive
                                                            activities, role-plays, quizzes, and projects support
                                                            practical application, while cultural insights enhance
                                                            cross-cultural competence. By the end of the course,
                                                            students develop foundational Korean communication skills
                                                            applicable in real-life contexts.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6054</td>
                                                        <td>Beginner's Course in Marathi</td>
                                                        <td>This beginner’s course in Marathi introduces students to the
                                                            language and culture of Maharashtra, with a focus on Pune.
                                                            Learners develop basic communication skills in reading,
                                                            writing, listening, and speaking, using essential grammar
                                                            and vocabulary. The course covers everyday conversations,
                                                            self-introduction, telling time, expressing likes and
                                                            dislikes, and using common verbs and suffixes. Students also
                                                            explore Marathi food, proverbs, and cultural nuances.
                                                            Interactive classroom activities, role-plays, outdoor
                                                            exercises, and audiovisual aids enhance practical learning.
                                                            By the end of the course, students can confidently
                                                            communicate in basic Marathi and gain an appreciation of its
                                                            linguistic and cultural richness.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6262</td>
                                                        <td>Advanced Ethical Theory</td>
                                                        <td>
                                                            This course is meant to be an in depth study of the theory
                                                            of ethics, meant for students who already have a familiarity
                                                            with the subject. The course will track the development of
                                                            the theory of ethics from the ancient Greeks up to the
                                                            philosophical foundations of the modern human rights
                                                            movement.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T5999</td>
                                                        <td>Key Concepts in Indian Film Studies</td>
                                                        <td>
                                                            This course introduces students to key concepts in Indian
                                                            Film Studies, focusing on understanding cinema as both an
                                                            art form and a social medium. Learners explore historical
                                                            and contemporary Indian cinema, from silent films to the New
                                                            Wave, Bollywood, and regional cinemas. Topics include film
                                                            techniques, narrative structures, aesthetics, star systems,
                                                            and socio-political influences on filmmaking. Students
                                                            analyze how films reflect cultural, economic, and
                                                            technological changes, and discuss representations of
                                                            gender, class, and identity. Through lectures, screenings,
                                                            presentations, and workshops, students develop critical
                                                            skills to interpret, analyze, and contextualize Indian films
                                                            within local, national, and global frameworks.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6352</td>
                                                        <td>Politics of Social Justice</td>
                                                        <td>
                                                            The course will begin with the contemporary ideas on justice
                                                            found in the western world and question the need to add the
                                                            ‘social’ component to it. It will deal with important modern
                                                            thinkers who have worked on justice within the tradition of
                                                            utilitarianism, libertarianism and communitarianism. After
                                                            the tracing the historical trajectory of the concept, we
                                                            will shift to the Indian variant of the idea of justice. In
                                                            the concluding section the course will analyse ways of
                                                            creating a more egalitarian global social order by building
                                                            upon notions of democracy, morality and ‘public good’.
                                                            Concepts such as race, caste, women, subalterns and
                                                            indigenous will be utilized to understand the scope as well
                                                            as the claims to justice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T3487</td>
                                                        <td>Network Security Essentials</td>
                                                        <td>
                                                            This course provides a comprehensive introduction to network
                                                            security, focusing on understanding potential threats,
                                                            security protocols, and protective mechanisms. Students
                                                            explore security attacks, malicious software, cryptography,
                                                            and Internet protocol vulnerabilities. The curriculum
                                                            includes hands-on sessions on firewalls, VPNs, intrusion
                                                            detection, and wireless security standards like WEP, WPA,
                                                            and WPA2. Key applications such as email security, mobile
                                                            security, and web security models are studied in detail.
                                                            Through classroom lectures, practical labs, quizzes, and
                                                            mini-projects, students develop the ability to identify,
                                                            analyze, and implement security solutions, preparing them to
                                                            safeguard organizational network systems effectively in
                                                            real-world scenarios.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6107</td>
                                                        <td>Business Strategy and Long-Term Sustainable Growth</td>
                                                        <td>
                                                            This course explores business strategy with a focus on
                                                            long-term sustainable growth. Students examine the ethical
                                                            role of business in capitalist societies and the scope,
                                                            advantages, and limitations of various business models.
                                                            Through case studies, company visits, and hands-on projects,
                                                            learners understand critical success factors, customer
                                                            outcomes, industry evolution, and responses to disruptive
                                                            challenges. The curriculum emphasizes visual representation
                                                            of business models, leveraging core strengths, and
                                                            identifying untapped growth opportunities. A
                                                            learning-by-doing approach integrates readings, field
                                                            experiences, and group projects, equipping students to
                                                            analyze, design, and implement strategies that foster
                                                            sustainable value creation and resilience in dynamic
                                                            business environments.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6295</td>
                                                        <td>Indian Political Thought</td>
                                                        <td>
                                                            Indian Political Thought explores the evolution of political
                                                            philosophy in India from ancient texts to twentieth-century
                                                            thinkers. The course introduces students to key ideas and
                                                            debates articulated by figures such as Manu, Kautilya, Raja
                                                            Ram Mohan Roy, Vivekananda, Gandhi, Ambedkar, Nehru, and
                                                            others. It situates these ideas within their historical,
                                                            social, and political contexts, enabling students to
                                                            understand the philosophical foundations of the Indian
                                                            Constitution and contemporary Indian polity. Through
                                                            interactive discussions, readings, and continuous
                                                            assessments, the course encourages critical engagement with
                                                            indigenous political traditions and their relevance to
                                                            modern governance, democracy, and public policy in India.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T6248</td>
                                                        <td>Theatre Games and Movement</td>
                                                        <td>
                                                            This paper begins with an introduction to theatre through
                                                            games and movement; focusing on awareness of the body and
                                                            mind. Theatre games are one of the core pillars which will
                                                            help build imagination, a sense of play, and playfulness.
                                                            Learning how to play theatre games helps develop basic
                                                            acting skills.
                                                            This foundational paper introduces students to group work
                                                            through ensemble movement and improvisation. Along with
                                                            ensemble work the students will build an awareness of the
                                                            self and an expressive body.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>TM2153</td>
                                                        <td>Career Management</td>
                                                        <td>
                                                            Career Management is designed to equip undergraduate
                                                            students with self-management and career navigation skills
                                                            relevant to contemporary employment realities. The course
                                                            introduces key career theories, self-awareness tools, and
                                                            decision-making frameworks to help students identify
                                                            strengths, interests, and transferable skills. It engages
                                                            with changing career landscapes, including organisational
                                                            careers, entrepreneurship, and the gig economy. Through
                                                            reflective exercises, personality assessments, industry
                                                            interactions, and guest lectures, students develop
                                                            competencies in personal branding, career planning, and
                                                            employability. The course culminates in the creation of a
                                                            structured career roadmap, supporting a smooth transition
                                                            from student life to professional, entrepreneurial, or
                                                            freelance pathways.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6053</td>
                                                        <td>Project Ecology - An Experiential Learning Program</td>
                                                        <td>
                                                            Project Ecology is an experiential, multidisciplinary course
                                                            that introduces students to biodiversity, ecological
                                                            interconnections, and sustainable living practices through
                                                            hands-on, field-based learning. The course integrates
                                                            scientific monitoring techniques, urban ecology, and
                                                            ecological farming to help students understand the
                                                            relationship between biodiversity and human health. Students
                                                            engage with traditional ecological knowledge by documenting
                                                            herbal remedies, food practices, and nature-based wisdom.
                                                            Through community outreach, volunteering, and reflective
                                                            activities, learners develop tangible green skills,
                                                            environmental literacy, and values of ecological
                                                            responsibility, while exploring pathways for sustainable
                                                            lifestyle choices and meaningful community engagement.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6109</td>
                                                        <td>Introduction to Scoring Music for Film</td>
                                                        <td>
                                                            Introduction to Scoring Music for Film familiarises students
                                                            with the aesthetic, theoretical, and practical dimensions of
                                                            music and sound in cinema. The course examines the
                                                            relationship between image, sound, and narrative,
                                                            introducing key concepts in film music, sound design, and
                                                            listening practices. Students explore multiple approaches to
                                                            scoring, from thematic composition to sound-based and
                                                            electronic techniques, while gaining hands-on experience
                                                            with recording tools, digital platforms, and
                                                            music-production software. Through guided scoring exercises
                                                            and project-based learning, students create original scores
                                                            in response to visual texts, developing critical, creative,
                                                            and technical skills essential for contemporary film
                                                            practice.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>THM6110</td>
                                                        <td>Introduction to Film Music Studies</td>
                                                        <td>
                                                            Introduction to Film Music Studies provides a critical and
                                                            theoretical foundation for understanding music and sound in
                                                            cinema. The course examines how film music functions
                                                            aesthetically, narratively, and philosophically through key
                                                            writings in film theory, sound studies, and music analysis.
                                                            Students engage with the work of influential composers,
                                                            music directors, and theorists to compare diverse approaches
                                                            to film music across traditions and periods. Emphasis is
                                                            placed on analytical tools, listening modes, and audiovisual
                                                            relationships through detailed case studies. Designed as a
                                                            conceptual grounding, the course prepares students for
                                                            applied and practice-based work in film scoring and sound
                                                            design.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6147</td>
                                                        <td>Introduction to Mathematical Logic and Proofs</td>
                                                        <td>
                                                            Introduction to Mathematical Logic and Proofs introduces
                                                            students to the foundations of formal reasoning and rigorous
                                                            mathematical thinking. The course covers propositional and
                                                            predicate logic, symbolic notation, and rules of inference,
                                                            enabling students to translate between natural language and
                                                            logical expressions. Emphasis is placed on problem-solving
                                                            strategies and proof techniques, including direct, indirect,
                                                            and contradiction-based proofs. Through puzzles, games, and
                                                            examples drawn from different branches of mathematics,
                                                            students develop logical intuition and precision. The course
                                                            highlights the necessity of proof in validating mathematical
                                                            statements, cultivating analytical skills applicable across
                                                            mathematics, statistics, and related disciplines.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6179</td>
                                                        <td>Representation of Gender in Image and Word (Film / TV /
                                                            Literature / Advertising / Music)</td>
                                                        <td>
                                                            Representation of Gender in Image and Word examines how
                                                            gendered identities and power relations are constructed,
                                                            reinforced, and contested across visual and textual media,
                                                            including film, television, literature, advertising, and
                                                            music. Drawing on feminist and gender theory, the course
                                                            introduces key concepts such as patriarchy, identity,
                                                            subcultures, and gender politics. Students critically
                                                            analyse representations of femininity, masculinity, and
                                                            queer identities across cultural and historical contexts,
                                                            engaging with ethical questions surrounding visibility,
                                                            stereotyping, and power. Through film screenings, readings,
                                                            and discussions, the course develops analytical skills to
                                                            interpret gender representation and its broader social,
                                                            political, and cultural implications.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6180</td>
                                                        <td>Women in India</td>
                                                        <td>
                                                            Women in India examines the historical, social, and
                                                            political positioning of women across diverse contexts in
                                                            the subcontinent. The course engages with women’s
                                                            personalities, social reform movements, and rights-based
                                                            struggles to understand the evolution of women’s status in
                                                            India. Emphasising intersectionality, it explores how caste,
                                                            class, religion, region, sexuality, and disability shape
                                                            women’s lived experiences. Through ethnographic narratives,
                                                            cultural texts, and case studies, students analyse women’s
                                                            movements, labour, citizenship, and identity. The course
                                                            adopts a cross-cultural and interdisciplinary approach,
                                                            enabling students to critically assess social change,
                                                            feminist interventions, and the diversity of women’s
                                                            realities in contemporary India.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1792</td>
                                                        <td>Law and Society</td>
                                                        <td>
                                                            Law and Society introduces students to the study of law as a
                                                            socially embedded and interdisciplinary phenomenon. The
                                                            course examines how law operates within cultural, political,
                                                            and economic contexts, engaging with themes such as justice,
                                                            legal pluralism, human rights, governance, and social
                                                            transformation. Drawing on perspectives from anthropology,
                                                            sociology, and jurisprudence, students explore state and
                                                            non-state legal systems, religion, gender, conflict
                                                            resolution, and law in everyday life. Through empirical case
                                                            studies, critical readings, and discussions, the course
                                                            develops ethical reasoning, analytical thinking, and
                                                            problem-solving skills, enabling students to understand
                                                            law’s role in a rapidly changing, globalised Indian society.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>T1779</td>
                                                        <td>Introduction to Forensics</td>
                                                        <td>
                                                            Introduction to Forensics familiarises students with the
                                                            scientific, legal, and technological foundations of forensic
                                                            science and its role in criminal investigation and justice
                                                            delivery. The course introduces various forms of forensic
                                                            evidence, including physical, biological, and digital
                                                            forensics, and examines procedures for crime scene
                                                            management, evidence collection, preservation, and chain of
                                                            custody. Students engage with the legal framework governing
                                                            the admissibility of forensic evidence under contemporary
                                                            Indian laws. Through hands-on laboratory sessions, case
                                                            studies, and discussions on forensics in popular culture,
                                                            the course develops analytical skills and critical
                                                            understanding of the strengths, limitations, and ethical
                                                            dimensions of forensic science in legal practice.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>THM6133</td>
                                                        <td>Digital Cartography and Geographical Information System (GIS)</td>
                                                        <td>
                                                            Digital Cartography and Geographical Information System
                                                            (GIS) introduces students to the technological tools and
                                                            spatial thinking required to map and analyse changing
                                                            environments. The course familiarises learners with the
                                                            fundamentals of GIS, spatial data structures, and
                                                            cartographic principles, including raster and vector models,
                                                            map projections, and thematic mapping techniques. Students
                                                            gain hands-on experience in creating, editing, and managing
                                                            spatial data, and apply spatial analysis methods to classify
                                                            and visualise socio-economic and environmental scenarios.
                                                            Emphasising practical applications in urban planning and
                                                            development studies, the course builds analytical,
                                                            technical, and visualisation skills essential for
                                                            interdisciplinary research and decision-making.
                                                        </td>
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
            </div>
        </div>
    </section>

    <!-- Inner section ends  -->
</main>
@include('footer')