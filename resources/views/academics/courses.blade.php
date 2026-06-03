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
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        href="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        Majors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        href="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">
                                        Minors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        href="#contact-tab-pane" type="button" role="tab"
                                        aria-controls="contact-tab-pane" aria-selected="false">
                                        Cores
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        href="#settings-tab-pane" type="button" role="tab"
                                        aria-controls="settings-tab-pane" aria-selected="false">
                                        Electives
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="new_tab_courses_mainbox">
                                        <div class="new_tab_courses_parabox">
                                            <p>
                                                 It closely mirrors international standards for Liberal Arts where students are offered a wide range of learning experiences through the Electives, Cores, Majors and Minors. The Electives and Cores offer an interdisciplinary base and the Major and Minor provide an in depth understanding of the disciplines. Liberal Arts at SSLA also aims to fulfil a niche gap in the industry by inculcating core transferable skills among its students
                                            </p>
                                        </div>
                                        <div class="new_tab_courses_listing_mainbox">
                                            <a href="{{url('/course-anthropology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Anthropology.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Anthropology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-appliedenviroment')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Applied-Environmental-and-Sustainability-Science.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Applied Environmental and Sustainability Science</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-business-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Business-Studies.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Business Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-computer-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Computer-Studies.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Computer Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-economics')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Economics.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Economics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-education')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Education.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Education</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-english')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/English.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">English</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-history')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/History.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">History</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/International-Relations.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">International Relations</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-mathematics-statistics')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Mathematics-and-Statistics.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Mathematics & Statistics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/courese-media-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Media-Studies.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Media Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-philoshpy')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Philosophy.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Philosophy</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-political-science-public-policy')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Political-Science-and-Public-Policy.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Political Science & Public Policy</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-psychology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Psychology.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Psychology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/course-sociology')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Sociology.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Sociology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox">

                                         <div class="new_tab_courses_listing_mainbox">    
                                        
                                        <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Integrated-Biology.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Integrated Biology</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/film-studies')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Film-Studies.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Film Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/courses-law')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Law.jpg') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Law</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Peace-and-Conflict-Studies.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Peace & Conflict Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Dance-Theatre-and-Music.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Dance, Theatre & Music</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Theatre.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Theatre</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Music.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Music</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/performing-arts-dance')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Performing-Arts-Dance.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Performing Arts: Dance</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Physics.webp') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Physics</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/')}}" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/academics/Women-and-Gender-Studies.jpg') }}" alt="Courses image" class="img-fluid">
                                                </div>
                                                <div class="new_tab_courses_listing_gredient"></div>
                                                <div class="new_tab_courses_listing_content">
                                                    <div class="new_tab_courses_listing_heading">Women & Gender Studies</div>
                                                    <div class="new_tab_courses_listing_icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="15.5" stroke="#C8D3EA"/>
                                                            <path d="M20.8906 17.0391L17.1406 20.7891C16.8594 21.0938 16.3672 21.0938 16.0859 20.7891C15.7812 20.5078 15.7812 20.0156 16.0859 19.7344L18.5469 17.25H11.375C10.9531 17.25 10.625 16.9219 10.625 16.5C10.625 16.1016 10.9531 15.75 11.375 15.75H18.5469L16.0859 13.2891C15.7812 13.0078 15.7812 12.5156 16.0859 12.2344C16.3672 11.9297 16.8594 11.9297 17.1406 12.2344L20.8906 15.9844C21.1953 16.2656 21.1953 16.7578 20.8906 17.0391Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                         </div> 


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 1</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6114</td>
                                                        <td>
                                                            Writing across Genre: Freeing Creativity
                                                        </td>
                                                        <td>
                                                            Writing across Genre: Freeing Creativity is an experiential writing course that places the student at the center of creative inquiry. Designed to immerse learners in writing, reading, and thinking across genres, the course encourages exploration of self, language, memory, body, and the world through sustained practice and reflection. Students experiment with forms, develop their individual voice, and engage deeply with contemporary poetry, essays, and creative texts. Emphasis is placed on attention, play, difficulty, and creative feedback within a respectful classroom space. Through journals, prompts, readings, and portfolio work, the course nurtures curiosity, confidence, and awareness of one’s creative process.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6556</td>
                                                        <td>
                                                            History of Ideas
                                                        </td>
                                                        <td>
                                                            History of Ideas introduces students to foundational concepts that have shaped human thought, society, and institutions across time. Drawing from philosophy, science, politics, and social theory, the course traces the evolution of ideas from myth and religion to rationality, modernity, and postmodernism. Key themes include scientific enquiry, humanism, nationalism, capitalism and socialism, colonialism and anti-colonial movements, feminism, environmentalism, and human rights. Through historical examples, interdisciplinary readings, and critical discussion, students develop the ability to think analytically about ideas and their impact on social structures. The course equips learners with a shared intellectual foundation essential for critical engagement across disciplines in the liberal arts.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T1199</td>
                                                        <td>
                                                            Legal Awareness
                                                        </td>
                                                        <td>
                                                            Legal Awareness is an introductory course designed to familiarize undergraduate students with fundamental legal concepts and processes relevant to contemporary Indian society. The course provides an overview of law as an instrument of social change, covering essential areas such as the Constitution of India, contracts, criminal law, consumer protection, cyber law, intellectual property, and rights-based legislation. Emphasis is placed on understanding everyday legal issues, including documentation, public rights, and remedies available to citizens. Through lectures, case discussions, opinion writing, court visits, and documentary screenings, the course aims to build legal literacy, critical thinking, and practical awareness among students for informed civic engagement.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3217</td>
                                                        <td>
                                                            Fundamentals of IT
                                                        </td>
                                                        <td>
                                                            Fundamentals of IT introduces students to essential concepts and practical skills in computing, tailored to support their academic and professional development in law and other disciplines. The course covers computer basics, operating systems, file management, internet browsing, and use of electronic legal resources. Students gain hands-on experience in creating presentations, word processing, and spreadsheets, while also learning principles of computer security, digital signatures, and ethical computing. Through interactive lectures, projects, and class activities, students develop confidence in using technology for research, documentation, and communication, ensuring they are equipped to navigate the digital landscape effectively and responsibly.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3827</td>
                                                        <td>
                                                            Essentials of Information Technology
                                                        </td>
                                                        <td>
                                                            Essentials of Information Technology (T3827) is a foundational course designed to equip students with practical and conceptual knowledge of modern computing. The course introduces computer systems, operating systems, file management, web browsing, and essential productivity tools such as Word and Excel. It also builds awareness of computer security, cyber ethics, and emerging areas like Artificial Intelligence, Cloud Computing, and the Internet of Things. Emphasis is placed on developing basic coding skills through algorithms and flowcharts. Through lectures, demonstrations, and practical activities, the course enhances students’ confidence, technical competence, and readiness for academic and professional environments in an ever-evolving digital world.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TM2005</td>
                                                        <td>
                                                            Environmental Studies: Our Common Earth
                                                        </td>
                                                        <td>
                                                            Environmental Studies: Our Common Earth introduces students to the ecological, social, and developmental dimensions of environmental issues. The course examines natural resources, ecosystems, biodiversity, energy, pollution, climate change, and disaster management, while emphasizing sustainable development and environmental governance. Drawing from multiple disciplines, it explores the relationship between environment and society, including issues of livelihoods, urbanization, gender, caste, and poverty. Through classroom learning, case studies, field visits, and practical analysis, students develop environmental awareness, civic responsibility, and an understanding of individual and collective roles in environmental conservation. The course encourages informed engagement with sustainability challenges at local, national, and global levels.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 2</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6560</td>
                                                        <td>
                                                            RM I: Introduction to Research
                                                        </td>
                                                        <td>
                                                            RM I: Introduction to Research is a foundational course designed to introduce students to the principles and practices of research in multidiclinary perspectives i.e. the humanities, social sciences, and natural sciences. The course familiarizes learners with the research philosphy and process, beginning from identifying research problems,reviewing literature, formulating research questions and objectives, hypotheses. It covers both quantitative and qualitative approaches, while emphasizing ethical considerations in research. Students are also trained in research proposal writing and the use of standard academic citation style such as APA and MLA. Overall, the course prepares students for advanced research methodology courses by building essential conceptual and practical skills.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4077</td>
                                                        <td>
                                                            Explorations in Natural Sciences
                                                        </td>
                                                        <td>
                                                            Explorations in Natural Sciences introduces students to an integrated understanding of the natural world through concepts drawn from physics, chemistry, biology, and systems science. The course emphasizes the scientific method, evidence-based reasoning, and the development of scientific temper through hands-on investigations and discussion. Using themes such as colour, music, DNA, materials, and complex systems, students explore how scientific models explain natural phenomena across scales. By linking ideas from multiple disciplines and examining the relationship between science and society, the course fosters curiosity, critical inquiry, and an appreciation of how imagination and reasoning drive scientific discovery.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T2974</td>
                                                        <td>
                                                            Quantitative Reasoning 1: Mathematics and Statistics
                                                        </td>
                                                        <td>
                                                            Quantitative Reasoning I: Mathematics and Statistics introduces students to fundamental mathematical and statistical concepts essential for analytical thinking and everyday decision-making. The course emphasizes proportional reasoning, equations, commercial mathematics, and data interpretation, enabling students to work confidently with numbers in real-life contexts. Students learn key statistical tools such as measures of central tendency and dispersion, correlation, probability, and curve-fitting to analyze and interpret data. By integrating mathematical reasoning with practical applications in finance, management, and social contexts, the course develops logical, critical, and quantitative reasoning skills necessary for academic, professional, and civic life.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6731</td>
                                                        <td>
                                                            Rhetoric and Critical Writing
                                                        </td>
                                                        <td>
                                                            Rhetoric and Critical Writing is a skill-based course that develops students’ abilities in critical thinking, reading, and effective written communication. The course introduces key theories and practices of critical reasoning and rhetoric, enabling students to analyze texts, arguments, and ideas with clarity and precision. Emphasis is placed on the mechanics, structure, and processes of effective and academic writing, including organization, argument development, referencing, and plagiarism awareness. Through continuous practice, feedback, and discussion, students learn to communicate ideas persuasively and responsibly across academic contexts, strengthening their analytical, interpretive, and expressive skills.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6212</td>
                                                        <td>
                                                            Understanding India: What is India? Unravelling the Mystery
                                                        </td>
                                                        <td>
                                                            Understanding India: What is India? Unraveling the Mystery explores the complex and layered identity of India through an interdisciplinary approach combining history, archaeology, literature, and cultural studies. The course examines how India has perceived itself across time, how its identity was shaped by imperialism, nationalism, and post-1990 reinterpretations, and how diverse peoples and traditions contributed to its cultural fabric. Key themes include the epics Ramayana and Mahabharata, the historical interaction between Islam and India, and socio-economic structures such as caste, tribe, and gender. Through critical discussion and evidence-based inquiry, students gain a nuanced understanding of India’s diversity, continuity, and evolving national identity.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>SMC001</td>
                                                        <td>
                                                            Vasudhaiva Kutumbakam
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4788</td>
                                                        <td>
                                                            Health and Wellness Module I
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD1</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 3</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6868</td>
                                                        <td>
                                                            Introduction to Philosophy
                                                        </td>
                                                        <td>
                                                            Introduction to Philosophy offers students a foundational engagement with philosophical inquiry through key areas such as logic, epistemology, ontology, metaphysics, and ethics. The course introduces both Western and Indian philosophical traditions, encouraging comparative perspectives on enduring questions concerning knowledge, reality, self, freedom, and morality. Through the study of logical reasoning, theories of knowledge, conceptions of being, and ethical frameworks, students develop critical and reflective thinking skills. Emphasis is placed on applying philosophical methods and ideas to everyday life and contemporary issues. Through interactive discussions and multimedia-supported learning, the course equips students with analytical tools to thoughtfully examine ideas, arguments, and values across disciplines.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6843</td>
                                                        <td>
                                                            Multicultural Worldviews
                                                        </td>
                                                        <td>
                                                            Multicultural Worldviews is an interdisciplinary course that explores the origins, meanings, and contemporary expressions of diversity and multiculturalism in a globalized world. Drawing from psychology, sociology, history, political theory, and cultural studies, the course examines how difference is socially constructed and shaped by power, privilege, and identity. Students engage with themes such as group behavior, gender, culture, media, workspaces, and ecology, while critically analyzing global discourses like Orientalism and the future of multiculturalism. Through interactive discussions, case studies, and applied projects, the course equips students with conceptual frameworks to understand and respond thoughtfully to diverse lived experiences at local and global levels.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>THM6152</td>
                                                        <td>
                                                            Humanity and Big History: Our Challenge for Survival
                                                        </td>
                                                        <td>
                                                            Humanity and Big History: Our Challenge for Survival offers an interdisciplinary exploration of human existence from the origins of the universe to possible future scenarios. Integrating insights from natural sciences, social sciences, and the humanities, the course traces key milestones such as the Big Bang, the evolution of life and humans, the rise of agriculture, civilizations, industrialization, and global conflicts. It also examines imperialism, ecological change, climate crisis, and resource challenges shaping the contemporary world. Through discussions, fieldwork, creative projects, and scenario-building, students develop a comparative and realistic understanding of humanity’s place in the cosmos and the critical choices that will shape our collective future.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4789</td>
                                                        <td>
                                                            Health and Wellness Module II
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD2</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 4</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T2857</td>
                                                        <td>
                                                            Quantitative Reasoning 2: Finance
                                                        </td>
                                                        <td>
                                                            Quantitative Reasoning 2: Finance introduces students to the logic of financial decision-making through everyday life. While rooted in the language of finance, the course is oriented toward personal financial thinking rather than corporate balance sheets. It helps students understand how money behaves over time and how individuals can make better choices about saving, spending, borrowing, and investing.
                                                            <br>
                                                            Beginning with the nature and objectives of financial management, the course builds an intuitive understanding of risk and return, opportunity cost, and trade-offs. Students learn to evaluate real-life choices using the time value of money, compounding and discounting, and simple growth models. Tools such as present value, future value, and capital budgeting are taught as ways to reason about education loans, EMIs, long-term savings, and financial goals.
                                                            <br>
                                                            Concepts like sources of finance, cost of capital, and leverage are translated into personal contexts, while working capital is reframed as budgeting and cash-flow management for individuals and households.
                                                            <br>
                                                            By the end of the course, students gain numerical confidence and a practical framework for financial thinking. More than a finance paper, it functions as a life skill, enabling students to manage their own money with clarity and foresight.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD3</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 5</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6803</td>
                                                        <td>
                                                            Research Methodology II: Overview of Research Methods and Analysis
                                                        </td>
                                                        <td>
                                                            Research Methodology II: Overview of Research Methods and Analysis builds on foundational research skills by introducing students to a wide range of qualitative, quantitative, and mixed research methods. The course examines research design, data collection, analysis, and interpretation, emphasizing the strengths and limitations of different research methods. Students engage with various methods such as interviews, ethnography, case studies, surveys, experiments, content analysis, and discourse analysis. Through practical exercises and assignments, the course also strengthens academic writing and reporting skills. Overall, it equips students with a holistic and critical understanding of research methods essential for conducting rigorous and ethically grounded research in the Humanities, Social Sciences, and Natural Sciences.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T8000</td>
                                                        <td>
                                                            Service Learning (Community Outreach Programme)
                                                        </td>
                                                        <td>
                                                            The Community Outreach Programme (COP) is designed to encourage meaningful student engagement with issues of social justice and community development through experiential learning and active participation. At its core, the programme seeks to cultivate socially sensitive, ethically grounded, and critically aware individuals who are capable of engaging responsibly with the communities around them and contributing positively to society at large. By creating opportunities for direct interaction with diverse social contexts and challenges, the programme aims to strengthen students’ understanding of social realities and foster a deeper sense of civic responsibility. Students are expected to develop a greater awareness of the relationship between academic learning and social responsibility through the COP. It is a mandatory component structured as a full-time project to be completed during the first summer break, providing students with an immersive experience that integrates learning with meaningful community engagement.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 6</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6115</td>
                                                        <td>
                                                            Short Stories from around the World
                                                        </td>
                                                        <td>
                                                            Short Stories from around the World offers students an in-depth engagement with short fiction from diverse literary traditions and cultural contexts. The course examines selected stories by various writers to understand the genre’s distinctive features, narrative techniques, tone, and use of language. Emphasis is placed on reading texts within their social, political, and historical contexts while engaging with relevant literary theories and critical debates. Students actively discuss and compare texts, explore film adaptations of selected stories, and develop informed interpretations. Through close reading, discussion, and essay writing, the course strengthens critical thinking, comparative analysis, and expressive skills in literary studies.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 7</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6363</td>
                                                        <td>
                                                            Current Economic and Business Analysis
                                                        </td>
                                                        <td>
                                                            Current Economic and Business Analysis is designed for all students, regardless of discipline, to help them make sense of the economy they live in. The course introduces the basic structure of the Indian and global economy and familiarises students with the economic language that appears daily in news, policy debates, and public conversations.
                                                            <br>
                                                            Students learn to understand terms such as GDP, inflation, fiscal deficit, interest rates, exchange rates, and investment climate, and what these actually mean for jobs, prices, growth, and opportunity. Using real data, reports, and current events, the course builds the ability to read newspapers, budgets, and economic commentary with clarity rather than confusion.
                                                            <br>
                                                            By moving from broad macroeconomic trends to sectors, firms, and public institutions, the course helps students see how abstract numbers connect to real lives and real choices. Its goal is not to train specialists, but to create economically literate citizens who can interpret the world around them, ask informed questions, and engage thoughtfully with economic issues in everyday life. 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6904</td>
                                                        <td>
                                                            Summer Internship
                                                        </td>
                                                        <td>
                                                            The Summer Internship is a mandatory component of the curriculum and forms an important part of the programme’s emphasis on Experiential Learning. It is designed to provide students with practical exposure to professional environments and enable them to bridge the gap between academic knowledge and real-world application. Through direct engagement with industry, organisations, institutions, or relevant professional settings, the internship offers students an opportunity to gain insight into potential career pathways and develop a clearer understanding of the practical dimensions of their chosen fields of study.  The internship experience encourages students to engage with workplace practices, understand organisational structures and responsibilities, and gain preliminary exposure to the expectations and demands of professional environments. By combining practical experience with skill development, the Summer Internship prepares students for future academic and career opportunities and contributes to their development as competent and responsible professionals.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 8</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6804</td>
                                                        <td>
                                                            Final Year Seminar Paper
                                                        </td>
                                                        <td>
                                                            The Final Year Seminar Paper is a 4-credit course, designed to provide students with an opportunity to engage in independent and academically rigorous research. The course aims to cultivate critical thinking, analytical abilities, and scholarly writing skills by encouraging students to undertake methodologically sound research on interdisciplinary themes that draw from multiple areas of study. 
                                                            <br>
                                                            Throughout the process, each student is guided and mentored by a faculty member who provides academic support in selecting the research topic, developing an appropriate methodology, and refining the overall research and writing process. The mentorship enables students to gain hands-on experience in conducting systematic research and adhering to academic standards. It also serves to develop research competencies that are valuable for higher studies, professional pursuits, and future scholarly work.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6804</td>
                                                        <td>
                                                            Research Project: Proposal Writing
                                                        </td>
                                                        <td>
                                                            Building upon the knowledge, research competencies, and methodological skills acquired through Research Methodology I & II courses, the students are expected to undertake the development of a research proposal in Research Project: Proposal Writing, under the guidance of their dissertation committee members, along with the faculty instructor for the course. The intent of the course is to help students consolidate their understanding of the research process and apply the theoretical and practical skills gained in earlier stages of their academic programme. The development of the proposal enables students to engage critically with their chosen topic while strengthening their abilities in research design, academic writing, and scholarly inquiry. The proposal serves as an important preparatory step for the Research Project by providing students with a structured and well-defined foundation for future research work.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6808</td>
                                                        <td>
                                                            Research Project
                                                        </td>
                                                        <td>
                                                            The Research Project is an integral component of the academic requirements of the Jajor specialization in the liberal arts programme and is submitted in the form of a dissertation. The course is designed to provide students with an opportunity to undertake substantial independent research and apply the analytical, critical, and academic skills developed throughout the programme. While the dissertation is expected to be primarily grounded in the student’s Major discipline, interdisciplinary projects are encouraged. Students are required to identify a suitable area for intensive study, constitute a dissertation committee with faculty members possessing relevant expertise, and carry out the project under their guidance and mentorship. Through this process, students gain experience in conducting rigorous research and producing a well-structured scholarly work.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                Reading World Poetry–II is an undergraduate course that introduces students to major poetic traditions across cultures, regions, and historical periods. The course explores mystical Indian poets, voices from East Asia, the Middle East, Europe, Australia, New Zealand, South America, and Britain, alongside long poems and brief histories of poetry. Through close reading, comparative analysis, and interdisciplinary perspectives, students engage with enduring human values, cultural contexts, and poetic forms such as haiku and epic sections. Emphasis is placed on critical thinking, informed appreciation, and understanding the creative process of poetry through interactive discussions and continuous assessment.
            </td>
        </tr>

        <tr>
            <td>T1236</td>
            <td>Law Relating to Intellectual Property Rights</td>
            <td>
                Law Relating to Intellectual Property Rights introduces undergraduate students to the foundations, scope, and contemporary relevance of intellectual property in a globalized knowledge economy. The course examines the nature and creation of intellectual property, the rationale for its protection, and the legal frameworks governing copyrights, patents, trademarks, designs, and geographical indications. Students engage with national and international regimes such as TRIPS, GATT, and the Patent Cooperation Treaty, while also exploring emerging areas including software, biotechnology, domain names, and Creative Commons. Through lectures, case analysis, moot courts, opinion writing, and debates, the course develops legal reasoning, critical analysis, and practical understanding of IPR.
            </td>
        </tr>

        <tr>
            <td>T1235</td>
            <td>Law Relating to Information Technology</td>
            <td>
                Law Relating to Information Technology introduces undergraduate students to the dynamic relationship between law and rapidly evolving digital technologies. The course examines the foundations of cyber law with a primary focus on the Indian legal framework, while also engaging with key international perspectives. Students study issues related to cybercrime, e-commerce, digital signatures, electronic contracts, jurisdiction, and digital evidence, along with the intersection of cyber law and intellectual property rights. Through lectures, case discussions, moot courts, opinion writing, and critical analysis of legal developments, the course builds an understanding of how law responds to technological change and equips students with analytical and practical skills to address contemporary cyber legal challenges.
            </td>
        </tr>

        <tr>
            <td>T2879</td>
            <td>Living with Climate Change</td>
            <td>
                Living with Climate Change is an undergraduate course that examines climate change as a scientific, social, economic, and political challenge. The course introduces the science of climate change, its global and Indian impacts, and the vulnerabilities of diverse ecosystems and communities. It explores climate justice, equity, development debates, and the links between poverty, gender, and environmental change. Students engage with international and national policy frameworks, including the UNFCCC and India’s climate initiatives, and examine action perspectives at global, national, and local levels. Through interactive discussions, case studies, and applied learning, the course encourages critical thinking and practical approaches to sustainable and climate-resilient living.
            </td>
        </tr>
        <tr>
    <td>T4392</td>
    <td>Introduction to Wellness Management, Complementary and Alternative Medicine</td>
    <td>
        Introduction to Wellness Management, Complementary and Alternative Medicine is an undergraduate elective that familiarizes students with diverse approaches to health and well-being beyond conventional medicine. The course explores mind-body interactions through practices such as yoga, meditation, and pranayama, alongside dietary awareness, nutrition, and lifestyle-based wellness. Students are introduced to various complementary and alternative therapies including homeopathy, naturopathy, acupuncture, aromatherapy, and energy-based healing methods, while critically examining their benefits, risks, and scientific foundations. Emphasis is placed on understanding stress, disease factors, and preventive care in everyday life. Through interactive discussions and applied learning, the course encourages informed, holistic, and positive health-related decision-making.
    </td>
</tr>

<tr>
    <td>T6330</td>
    <td>Introduction to Social Justice</td>
    <td>
        This course is hoped to stimulate critical thinking in young minds and help them comprehend their lived experiences and social realities. India is a heterogeneous society with many cultures and subcultures, social and religious differences that make it difficult to understand the dynamics reflected in social policies and legislation. The course is conceived and structured to enable students to identify, comprehend, and de-construct these complexities and understand the internal dynamics of these differences. Critical thinking may also motivate students to address issues of injustice that they experience and observe around them in innovative ways, influence policy and law-making, and strengthen processes that promote greater social justice in society.
    </td>
</tr>

<tr>
    <td>T6224</td>
    <td>Urdu Paper 1</td>
    <td>
        This course has been created for beginners and is intended to enable basic communication using the four skills: reading, writing, listening, and speaking. Students learn to read and write Urdu alphabets, words, and sentences and build up a basic vocabulary.
    </td>
</tr>

<tr>
    <td>T6269</td>
    <td>Greek Philosophy</td>
    <td>
        This course is aimed at students with little or no background in Philosophy. Through the ancient Greeks, students will learn about how Philosophy took birth with its lasting influence on civilization across the globe. Pioneers of philosophical thinking will be explored through their own writings. A historical approach is taken through most of the course, starting with the early Greek philosophers and moving to Socrates, Plato, and Aristotle. The lasting influence of these systems of thought will be discussed and examined in class.
    </td>
</tr>

<tr>
    <td>T6349</td>
    <td>Analysis of Current Events</td>
    <td>
        Current Events is a one-semester course/workshop structured to give students an understanding of current issues in areas as diverse as sports, politics, culture, history, science, economics, finance, and more. In this course, a cultural or sporting event could be analyzed along with political, financial, and other issues. Students are encouraged to look beyond the obvious and develop critical understanding. The course emphasizes student-led research covering topics that hold meaning in today’s life.
    </td>
</tr>
<tr>
    <td>T6267</td>
    <td>Women Philosophers</td>
    <td>
        The mind of a woman, her experience of her own embodiment, her voice as heard in her time and questions that remain unanswered are what this course aims to present. It is not a feminist denouncement of the patriarchal male, nor is it a battle of the sexes. It is a journey—a journey into the female experience, a search for identity and desire for self-expression. The course is entitled Women Philosophers because it also explores ideas put forth by philosophers who happen to be women. It looks at moral prejudices, the sovereignty of good and an ethics of care (that changes the moral question from "what is just?" to "how to respond?"). It brings to the fore ideas, thoughts and dreams on freedom, individuality and cultural politics. In dialogue with minds that intrigue and challenge us, we find our own truths, our own identity and our own voice.
    </td>
</tr>

<tr>
    <td>T1043</td>
    <td>Law of Torts</td>
    <td>
        'Law of Torts' sets out the law of private rights and remedies which are not covered by statutes. Students need to be well acquainted with this branch of law governing actions for damages for injuries to certain kinds of rights, like the right to personal security, property and reputation. This branch of common law has large potential to expand and apply its principles in contemporary areas like Human Rights, Environmental Rights, and Intellectual Property Rights. Hence, a student of Law needs to have good knowledge about Law of Torts.
    </td>
</tr>

<tr>
    <td>THM6108</td>
    <td>Creative Dance as a Narrative: Uday Shankar's Form</td>
    <td>
        Creative Dance as a Narrative: Uday Shankar’s Form introduces students to the evolution of Indian dance through the innovative vision of Uday Shankar. The course examines classical and folk dance traditions of India while highlighting how Shankar broke conventional boundaries to create a modern, narrative-driven dance form. Students explore the theoretical foundations of dance, the Natyashastra, and the social role of performance, alongside practical understanding of Shankar’s choreographic style and movement vocabulary. Through multimedia resources, demonstrations, and critical scholarship, the course situates Uday Shankar’s work as a cultural narrative of modern India, fostering analytical thinking, creative expression, and effective written and verbal communication.
    </td>
</tr>

<tr>
    <td>T6091</td>
    <td>Introduction to Violence, Conflict and Peace Studies</td>
    <td>
        This course is for students who want to understand the world and make a meaningful difference while maintaining balance in their lives. It focuses on recognizing different levels of violence and conflict, from interpersonal and community settings to national and global contexts. Students examine both direct violence and structural violence rooted in institutional inequality. The course emphasizes practical applications of peacebuilding, broadly understood to include conflict resolution, human rights, development, security, social justice, and advocacy. Assessment is based on structured, flexible assignments rather than exams, allowing students to engage deeply with areas of personal interest while developing practical theoretical insights for real-world peacebuilding.
    </td>
</tr>

<tr>
    <td>T6305</td>
    <td>Marxism</td>
    <td>
        The course on Marxism introduces undergraduate students to Marxism as a socio-economic and political theory and examines its evolution, applications, and critiques. Beginning with the historical context of colonialism, industrial capitalism, and democratic revolutions, the course explores key Marxian concepts such as dialectical and historical materialism, alienation, exploitation, imperialism, the state, revolution, socialism, and communism. It critically engages with major contributions by thinkers including Lenin, Gramsci, Lukács, Mao, and the Frankfurt School, while analyzing Marxism’s influence on twentieth-century political systems. Through interactive discussions, group research, and continuous assessment, students develop analytical skills to evaluate Marxism’s relevance in contemporary global politics.
    </td>
</tr>

<tr>
    <td>T6671</td>
    <td>Oop's: Objects Out of Place, the Unexplained and the Unexplainable</td>
    <td>
        Throughout one’s life we have read or heard about histories, mysteries, legends, myths and things that just should not be there—the infamous OOP’s or Objects Out of Place. This course is a journey that will take us through the ages and around the world as we together search the mass of material generated from scientific, traditional or just plain unusual perspectives. This course is an attempt to understand these enigmatic mysteries.
        <br><br>
        We will look at how ancient people and cultures viewed the stories and events that were interwoven into their lives and identities—the very stories that we often today treat as fiction, legend or myth. We will re-evaluate a small sample of these stories and events to see if we can bring a fresh and modern perspective that will replace explanations often crafted during the Colonial Age of Discovery with its inherent Western and 17th–18th century perspective.
        <br><br>
        During this journey we will also look at how science and society view these topics and the reasons why they do so. We will look at theories developed to ‘explain’ or ‘solve’ them to see whether they follow established scientific research methodologies and try to determine how much value to place on them based on the corpus of available material.
    </td>
</tr>
<tr>
    <td>THM6106</td>
    <td>Mahabharata</td>
    <td>
        The Mahabharata course introduces students to one of India’s most influential epics through a multidisciplinary and comparative framework. Students engage with the narrative across the eighteen parvas while situating the epic within ancient Indian history and culture. The course examines the Mahabharata through perspectives from politics, ethics, psychology, anthropology, archaeology, and philosophy, and compares it with other Indian and Western epics. Emphasis is placed on concepts such as dharma, adharma, just war, leadership, and moral dilemmas. Through interactive discussions, multimedia resources, and expert insights, students explore the epic’s continuing relevance in contemporary life while developing critical thinking, communication skills, and academic integrity.
    </td>
</tr>

<tr>
    <td>T6120</td>
    <td>The Novel</td>
    <td>
        The novel is a mighty melting pot and as a genre resists exact definition. It may be said to be a prose fiction of a reasonable length, though there are novels in verse. Typically written in a narrative style and presented as a bound book, novels tell stories.
        <br><br>
        The novel has been a part of human culture for a few hundred years, although its origins are somewhat debated. Regardless of how it began, the novel has risen to prominence and remained one of the most popular and treasured examples of human culture and writing. Its form and presentation tend to change with the times, but it remains an essential part of the literary cultures of nearly all societies around the world.
        <br><br>
        Through the novels taught in this module, students may have the opportunity to investigate human consciousness, go on adventures recounted, or follow historical, sociological, and psychological tales that portray human thought, culture, tradition, philosophy, perception, and much more, through the ages.
    </td>
</tr>

<tr>
    <td>T6092</td>
    <td>Comparative Mythology</td>
    <td>
        Comparative Mythology introduces students to myths from diverse cultures through an interdisciplinary and analytical framework. The course examines symbols, narratives, and archetypal patterns across world mythologies, drawing on approaches from symbolic anthropology, depth psychology, comparative religion, and myth criticism. Students study creation myths, journey myths, rituals, and archetypes through thinkers such as Jung, Eliade, Campbell, Zimmer, and Coomaraswamy. Emphasis is placed on interpreting verbal and visual motifs and understanding myth as a fundamental mode of human expression. Through interactive discussions and cross-cultural comparisons, the course encourages students to engage critically with myths as living narratives that shape individual identity, cultural imagination, and contemporary worldviews.
    </td>
</tr>

<tr>
    <td>T1202</td>
    <td>Indian Penal Code</td>
    <td>
        The Indian Penal Code course introduces undergraduate students to the foundations of criminal law in India within its social, economic, and political context. The course examines the concept of crime, elements of criminal liability, and the historical evolution of the IPC, while engaging with offences against the human body, property, and group liability. Attention is also given to emerging forms of crime such as terrorism, environmental offences, money laundering, and crimes against vulnerable communities. Through lectures, moot courts, opinion writing, and critical discussions, students develop an analytical understanding of criminal responsibility and the role of law in creating a just, humane, and responsive society.
    </td>
</tr>

<tr>
    <td>T6331</td>
    <td>Revisiting the City: Urbanization, Urban Aspiration and Urban Reality</td>
    <td>
        Revisiting the City: Urbanization, Urban Aspiration and Urban Reality examines Pune as a dynamic urban space shaped by economic change, cultural practices, and global influences since the 1990s. The course traces the city’s urbanization history while exploring themes of aspiration, consumption, commodification, and spatial segregation. Students analyze urban inequalities related to class, caste, gender, migration, and displacement, alongside processes of exclusion and gated development. Using sociological theory, visual media, and field research, the course connects local urban experiences to broader global city frameworks. Through critical discussions and empirical engagement, students develop an informed understanding of urban culture, identity, and the lived realities of contemporary city life.
    </td>
</tr>

<tr>
    <td>T6214</td>
    <td>20th Century - Bloodiest Century in Human History</td>
    <td>
        The very first decade of the 21st century has witnessed the world’s sole remaining super power engaging in costly and seemingly endless wars. The wars began with the 9/11 attacks on the World Trade Center towers in New York. From the American perspective, the attacks were a geopolitical disaster as they destroyed the American self-perception of insularity and impregnability. The wars of the 21st century, however, cannot be studied in isolation. This course seeks to comprehend the evolving relationship between the wars of the 21st century and the wars of the 20th century.
    </td>
</tr>

<tr>
    <td>T6121</td>
    <td>Haiku Poetry</td>
    <td>
        This course introduces students to the traditional Japanese poetic forms of haiku, haibun, and tanka, emphasizing both their historical depth and aesthetic discipline. Students engage with the intricacy and restraint characteristic of Japanese art forms, learning to capture singular moments through concrete imagery, juxtaposition, and seasonal awareness. The course explores haiku as an objective, minimalist poetic form, haibun as a synthesis of prose and verse, and tanka as a lyrical yet image-driven expression of emotion. Through guided practice, critical reading, and creative experimentation, students develop sensitivity to language, form, and nuance while cultivating patience, precision, and poetic insight.
    </td>
</tr>
<tr>
    <td>T6254</td>
    <td>Introduction to Theatre Making</td>
    <td>
        The introductory course will help students appreciate and understand the art of theatre making. The course will introduce students to various tools and fundamental principles of the theatre-making process, through which they will gain a deeper understanding of the role of the performer as creator, the construction of performance, and the creative process.
    </td>
</tr>

<tr>
    <td>T6209</td>
    <td>Roots of India: Ancient Indian History and Culture (Pre-history to 1200 AD)</td>
    <td>
        The history of ancient India offers the learner immense opportunities to comprehend the genesis and growth of a remarkable civilization that has been interacting with the world, is influenced by the same, and yet is uniquely Indian. It also delves into the impact ancient India had on the world in terms of its dazzling achievements in the realm of matter and mind. Through separated by centuries from contemporary times, ancient India tantalizingly interacts and influences the contemporary in myriad ways. The present course is an attempt at making sense of the same.
    </td>
</tr>

<tr>
    <td>T6210</td>
    <td>India and Growth of Islam in Medieval Era (1200 AD - 1700 AD)</td>
    <td>
        The Mughal prince Dara Shikoh in the 17th century wrote a text for perusal of his family that was titled as "Majma ul Baharein" (the meeting of two oceans) which talks about the similarities between Islam and Hinduism. Between 1200 A.D. and 1700 A.D., India was ruled by various Kings and Queens whose religious beliefs were formed outside India. However, in terms of governance of their territories there was a lot of similarity with the earlier Indian rulers. This paper seeks to understand the relationships between state and society in medieval times.
    </td>
</tr>

<tr>
    <td>T6368</td>
    <td>Verify Food is Life: The Story of India through its Food</td>
    <td>
        Food is far more than a biological necessity; it is deeply connected to culture, identity, politics, religion, economy, and everyday social life. This course explores the many dimensions of food in the Indian context, examining how eating practices reflect larger historical, social, and political processes. From questions of hunger, poverty, and malnutrition to debates surrounding caste, religion, regional identity, and nationalism, the course investigates the complex meanings attached to food in India. The course also traces the historical evolution of Indian food traditions, including the influence of trade, colonialism, migration, and cultural exchange on ingredients and cooking practices. Topics such as the Green Revolution, food security, institutional food systems like langars and lunchbox networks, and the rise of food media help students understand the relationship between food and society. Special attention is given to controversies around meat consumption, the sociology of caste and purity, gender roles in cooking, and indigenous food traditions. By combining historical, anthropological, and sociological perspectives, this course encourages students to critically analyse food not merely as sustenance, but as a powerful lens through which to understand Indian society, culture, inequality, and change.
    </td>
</tr>

<tr>
    <td>T6361</td>
    <td>Modern Drama from Around the World</td>
    <td>
        Modern Drama from Around the World introduces students to influential theatrical works and movements, offering insight into how language, stagecraft, dialogue, and character convey a playwright's vision. The course explores diverse genres, including the Theatre of the Absurd, Brechtian epic theatre, and mirror theatre, through seminal plays by Samuel Beckett, Bertolt Brecht, Tennessee Williams, Maxim Gorky, Luigi Pirandello, and Federico García Lorca. Students examine historical and cultural contexts, engage in critical analysis, and discuss thematic and stylistic innovations. Through lectures, discussions, presentations, and audio-visual materials, the course develops appreciation for modern drama while enhancing analytical, interpretive, and communication skills in reading, discussing, and performing theatre.
    </td>
</tr>

<tr>
    <td>T6350</td>
    <td>Soundscapes of Pune City</td>
    <td>
        Soundscapes of Pune City introduces students to the study of sound in cultural and urban contexts, emphasizing the intersection of place, society, and auditory experience. The course covers theoretical frameworks in sound studies, ethnomusicology, and anthropology while training students in fieldwork methods, including observation, interviewing, recording, transcription, and ethnographic writing. Students apply these techniques to construct a mini-ethnography of a local soundscape, exploring the social, cultural, and historical dimensions of urban sound. Through seminar-style discussions, experiential activities, and both physical and virtual collaboration, students develop analytical, observational, and interpretive skills, gaining hands-on experience in documenting, analyzing, and ethically representing sound in an urban environment.
    </td>
</tr>

<tr>
    <td>T6358</td>
    <td>Culture in Making</td>
    <td>
        In this course we will explore intersections between Culture and Power and develop interdisciplinary approaches to analyse them in post-colonial India. We will focus on cultural practices ranging from cinema and literature to paintings, drama, and sculptures to engage with “cultural politics” in post-independence India.
        <br><br>
        At a more specific level, we will think of culture as: (1) a whole way of life, and (2) a site of struggle over meaning, representation, and identities. We will view cultural practices through the prism of ideas of nation, class, gender and sexuality, caste, communalism and secularism, and globalization in a society like ours.
        <br><br>
        The course will introduce students to the history of Cultural Studies, a range of cultural practices and movements in post-independence India, and their historical socio-political determinants, approaches and concepts in structuralist, post-structuralist, Marxist, Post-Colonial, Feminist theories of culture.
    </td>
</tr>

<tr>
    <td>T6404</td>
    <td>Dance/Movement Therapy</td>
    <td>
        Dance/Movement Therapy is an approach to healing that has become an increasingly useful way of working with people of all ages who cannot express themselves verbally, have problems that are manifested somatically (e.g., eating disorders), have been abused, struggle with emotions, have difficulty coping with relationships, find themselves in creative blocks, or are trapped in situations that seem unspeakable.
        <br><br>
        Modern approaches to dance/movement therapy began in the United States and are now being used throughout the world. People have begun to understand that expressive dance—the creative use of both natural and formal elements of dance—is (1) inherently healing and (2) neuroscience can explain what dance/movement therapists have known for decades. With India being such an important player on the international stage, it is essential that students learn how dance/movement therapy and the growing science of the brain can have a positive effect on mental health in India.
    </td>
</tr>

<tr>
    <td>THM6101</td>
    <td>The Poetic Body, Absurd and the Surreal</td>
    <td>
        The Poetic Body, Absurd and the Surreal explores Modernist, Surrealist, and Absurdist artistic interventions to deepen students’ awareness of existence and creative expression. The course examines Surrealism in art, literature, and cinema, studying key texts and works by Salvador Dalí, Luis Buñuel, and Andre Breton, alongside Absurdist philosophy and theatre by Albert Camus and Samuel Beckett. Students analyze the body as a poetic and expressive site through literature, poetry, and performance, connecting history, philosophy, fine arts, and cinema. Through interactive discussions, multimedia modules, and analytical exercises, students develop critical thinking, creative intuition, and the ability to interpret the self and the world through modern artistic expression.
    </td>
</tr>

<tr>
    <td>T6406</td>
    <td>Art, Philosophy and Society</td>
    <td>
        The course Art, Philosophy and Society introduces students to key theoretical concepts of art, including beauty, sublime, form, content, and bhāva-rasa, while examining art’s relationship with society. It explores Western and Eastern theories of art, such as expression, communication, imitation, and significant form, alongside cultural perspectives. Students develop critical tools to analyze and question artworks, their processes, and social influence, fostering an aesthetic attitude and understanding of art’s relevance. Through interactive discussions, multimedia resources, and applied analysis of selected works, the course equips students to appreciate art in a social context, consider historical notions of morality, and reflect on the role of artists in shaping culture.
    </td>
</tr>

<tr>
    <td>T6407</td>
    <td>Scientific Inquiry and Learning Science</td>
    <td>
        Learning science is often equated with the familiarity of technical terms and laws combined with the ability to manipulate formulae and equations (e.g. f = ma) or having information about various disciplines of science e.g. physics, chemistry, biology. Furthermore, epistemic fragmentation that isolates one subject from the other starts from school education and continues unless exclusive efforts are made to comprehend inter-connectedness or unified nature of science.
        <br><br>
        Inquiry means investigation, the process of finding out something through one’s own thinking, reasoning and/or observation. ‘Scientific inquiry’ refers to the mode of investigation that is characteristic of science.
        <br><br>
        In this course, the focus will be on understanding scientific concepts and propositions and integrating ideas across disciplinary boundaries. The pursuit of inquiry offers us a learning process through observing, thinking, and reasoning like scientists and developing agile minds that will know “How to learn”.
    </td>
</tr>

<tr>
    <td>T6408</td>
    <td>Buddhist Philosophy: The Indian Tradition</td>
    <td>
        This course will introduce students of any academic background to the fundamentals of Buddhist thought and philosophy. Given the sheer breadth of Buddhist philosophy, this course will cover only the Indian traditions. The syllabus will thus include the origins of Buddhism and then move to Mahayana Buddhism and Vajrayana (tantric) Buddhism. The philosophical context in which the Buddha taught will be introduced to the students, after which they will study basic philosophical and soteriological concerns as seen in the writings of Indian Buddhism. The course is a basic introduction to the subject and does not presuppose any prior subject knowledge on the part of the student.
    </td>
</tr>

<tr>
    <td>T6264</td>
    <td>Phenomenology and Existentialism</td>
    <td>
        This course is meant to introduce students to the foundational texts and thinkers of phenomenology and existentialism. This school of thought is being presented as one of the three main branches of contemporary philosophy, along with analytic philosophy and pragmatism. Students will read works by Husserl, Heidegger, Sartre, and other major thinkers, while also being introduced to contemporary debates within phenomenology and existentialism.
    </td>
</tr>
<tr>
    <td>T6410</td>
    <td>Introduction to Social Sculpture and the Field of Freedom</td>
    <td>
        This course on Social Sculpture explores Joseph Beuys’ concept of ‘Soziale Plastik’, emphasizing an expanded understanding of art where every individual is a creative participant shaping society. Students engage with the works of Beuys and contemporary practitioner Shelley Sacks to explore fields of interaction linking inner and outer, individual and community. Through experiential, embodied practices, the course fosters a connective aesthetics that encourages imagination, reflection, and ethical engagement. Moving beyond linear problem-solving, students learn to perceive social, political, and environmental systems as dynamic forms of creative expression, developing capacities to contribute meaningfully to society while cultivating awareness, ecological responsibility, and philosophical creativity.
    </td>
</tr>

<tr>
    <td>T6411</td>
    <td>Evolutionary Psychology</td>
    <td>
        Evolutionary theory provides a powerful framework for understanding the incredible biological diversity we observe in nature. Over the past three decades or so, a growing number of researchers have begun to appreciate that the evolutionary forces that acted on our ancestors have sculpted the human brain, and the psychological and behavioural phenomena it produces. This course provides an introduction to the field of Evolutionary Psychology. Specifically, it covers fundamental aspects of evolutionary theory and its application to understanding human psychology and behaviour through a variety of methods, including experimental, survey, cross-cultural, and comparative research. This course also covers topics that have been central to the field of Evolutionary Psychology such as mating, parenting, altruism, and cooperation. In addition, a number of topics will be explored to illustrate unique areas of research that have emerged from the field of Evolutionary Psychology. The impact of Evolutionary Psychology on certain traditional areas of Psychology, including the study of development, cognition, mental illness, personality, and culture, will also be considered. The overall aim of this course is to demonstrate the scientific approaches that can be used to discover how evolutionary processes influence human psychology and behaviour.
    </td>
</tr>

<tr>
    <td>T6371</td>
    <td>Cinema, Masculinity and Culture</td>
    <td>
        If cinema has been the dominant cultural expression of the last century, masculinity is often the prism through which cinematic narratives unravel themselves. On one hand, the masculine desires shape the figure of the individual hero or the idealized male spectator through the cinematic aesthetic, the cinematic image has also shaped the forms of masculinity in society. This course explores various manifestations of masculinity as seen in popular Hollywood and Indian cinema. It offers students a fresh look at questions that have perturbed film scholars and social theorists including historians. Students will read through theoretical texts about patriarchy, feminism and queer theory in relation to cinema.
    </td>
</tr>

<tr>
    <td>T3317</td>
    <td>Programming Concepts and C Language</td>
    <td>
        C is one of the most widely used programming languages of all time. It was designed to be used on computers of the early 70's, but is still taken as reference before any other language has to be learnt. Nearly all languages invented today have borrowed their basic features directly or indirectly from C.
        <br><br>
        'C' is still used in appliances, applications, mobile apps. Thus the benefits of knowing this language can go a long way for a person who wants to be part of the IT world today.
    </td>
</tr>

<tr>
    <td>T6373</td>
    <td>The Literature of Fantasy and Science Fiction</td>
    <td>
        The course will focus on science fiction and fantasy as genres. It will look at the literature content as creating an understanding of society. It will survey the history of the genre and then delve into representative themes, rhetoric, and methods of storytelling in texts, films and other media. In addition, the composition of science fiction and fantasy from a writer’s standpoint and an individual student will be examined. Science fiction and fantasy as a genre seeks to examine the possibilities of existence and society beyond what seems too real and often creates a world that allows for speculation of all the future context.
    </td>
</tr>

<tr>
    <td>T6374</td>
    <td>Imagery in Creative Writing</td>
    <td>
        Imagery in Creative Writing introduces students to the subtle art of evoking images through multiple artistic forms. The course emphasizes observation, sensory awareness, and creative expression, drawing from poetry, haiku, tanka, painting, Indian classical dance, and nature walks. Students learn to distinguish concrete imagery, experiment with storytelling, and critically review their work through interactive workshops. Pedagogy combines experiential learning, field-based exercises, and guided writing sessions, culminating in staged performances of original work. Assessments consider practical engagement, originality in imagery, and performance. This course cultivates imagination, a deep appreciation of the arts, and an ability to communicate experiences creatively and meaningfully.
    </td>
</tr>

<tr>
    <td>T2713</td>
    <td>Innovation Management and New Product Development</td>
    <td>
        Active management of innovation and the development of New Products / services plays a pivotal role in the success or failure of organizations. A new product launch is one of the most thrilling as well as risky tasks a company can take on. With the global environment undergoing rapid transformations, innovation and new product development can be a crucial factor for the long-term success of the firm. From creation of "new-to-the-world" products to re-positioning existing products, the product launch cuts across the functional boundaries of the firm.
    </td>
</tr>

<tr>
    <td>T4403</td>
    <td>Health and Wellness Management</td>
    <td>
        Health and Wellness Management is an advanced course building on foundational wellness knowledge, guiding students to critically assess and improve their lifestyles. The course emphasizes understanding the nutritional, physiological, and psychosocial factors that influence health across different age groups and conditions. Students explore wellness planning for healthy individuals and those with specific disorders, including metabolic, musculoskeletal, circulatory, and lifestyle-related conditions. Pedagogy combines discussion-based lectures, critical reading, multimedia resources, and debates, encouraging practical application of concepts. Assessments follow SIU guidelines, evaluating comprehension and application. By the end, students are equipped to design personalized, evidence-informed wellness strategies for diverse populations.
    </td>
</tr>

<tr>
    <td>T6444</td>
    <td>Adaptation: Cinema and Literature</td>
    <td>
        This course explores the dynamic relationship between literature and cinema, examining how written texts are transformed into audio-visual narratives. Students investigate adaptations of works by Shakespeare, Jane Austen, fairy tales, Harry Potter, and The Godfather, analyzing changes in narrative, form, and cultural context. The course emphasizes intertextuality, encouraging students to move beyond traditional literary study to understand cinema as a complementary aesthetic experience. Through close readings of novels, poems, plays, and films, students develop analytical skills to interpret artistic forms, explore how stories traverse time and space, and cultivate informed perspectives on the interplay of literature and cinematic expression.
    </td>
</tr>

<tr>
    <td>T6442</td>
    <td>Foundational Course in Economics</td>
    <td>
        The Foundational Course in Economics introduces students to the principles, theories, and philosophical underpinnings of economics. Beyond learning models and laws, students explore the assumptions and axioms that shape economic thought, understanding the distinction between hypothetical constructs and real-world applicability. The course examines contrasting schools of thought, highlighting strengths and limitations of each approach, and emphasizes critical thinking and structured reasoning. By connecting economic ideas to broader cultural, artistic, and scientific contexts, students develop the ability to synthesize arguments independently, question conventional wisdom, and engage with economic theories not merely as abstract rules, but as frameworks for interpreting everyday social and economic phenomena.
    </td>
</tr>

<tr>
    <td>T6443</td>
    <td>Mathematical Methods for Economics</td>
    <td>
        Mathematical Methods for Economics equips students with essential mathematical tools to analyze and solve economic problems. The course covers functions, graphs, financial mathematics, calculus, partial and constrained optimization, and econometric techniques, emphasizing real-world applications. Students learn to interpret data, derive economic relationships, and apply models to policy and financial decision-making. Through problem-solving, reverse engineering, and continuous assessment, the course develops analytical rigor and critical thinking. By linking mathematical methods with economic reasoning, students gain the ability to approach complex and abstract concepts, contrast multiple solutions, and make informed inferences, preparing them for practical and theoretical challenges in economics and related disciplines.
    </td>
</tr>

<tr>
    <td>T6446</td>
    <td>Other Asian Imaginations: Cinema from Japan and China after the Second World War</td>
    <td>
        The module is an introductory class to post World War cinema in Japan and China. The post-war landscape in Japan and China were highly charged ones. The nuclear attack and subsequent foreign occupation had devastated the national spirit in one and a civil war had divided the other. The cinema and other arts produced in the two countries were often severe reflections and responses to these political and social changes. The films that will be screened in the module provide a point of entry into the cultural churnings that were occurring in China and Japan at the time.
        <br><br>
        While in the case of Japanese films, we see tireless attempts to subvert existing social order through radical experimentation with cinematic form and frequent engagement with the literature and music of the time, Chinese cinema and art has always had to create innovative ways of working under consistent governmental censure. In the class, we shall look closely at cinematic works that challenge traditional conventions of narrative and style. Besides addressing questions of image aesthetics by engaging with the films themselves, the module will also attempt to situate the films in larger cultural contexts of sub-cultures, protests and state propaganda.
    </td>
</tr>

<tr>
    <td>T6445</td>
    <td>Understanding Hindi Cinema Since Independence</td>
    <td>
        This course critically examines Hindi cinema as a central cultural force in post-colonial India, tracing its evolution from independence to contemporary Bollywood. Students explore how cinema has shaped notions of national identity, language, and culture, while engaging with the political and social debates surrounding the medium. The course introduces key films, industry practices, aesthetics, and cinematic techniques, providing students with the vocabulary and conceptual tools to analyze films critically. Emphasizing an interdisciplinary approach, it integrates perspectives from history, sociology, and cultural studies, enabling students to understand cinema not only as entertainment but as a powerful site of cultural expression and negotiation.
    </td>
</tr>

<tr>
    <td>T6421</td>
    <td>Introduction to the 20th Century Theory: I</td>
    <td>
        In Literary and Cultural Studies, theory provides a framework to understand human practices and cultural phenomena. This course introduces students to key theoretical approaches that shaped 20th-century thought, offering tools to analyze literature, art, and society. Students explore Modernism, Formalism, Psychoanalysis (Freud), Critical Theory (Frankfurt School), early Marxism, Feminism, and Existentialism, gaining insight into critical debates that continue to influence contemporary scholarship. Through these perspectives, the course develops students’ ability to engage with complex ideas, think critically, and appreciate how theory shapes our understanding of culture, human behavior, and the social world, bridging conceptual inquiry with practical interpretation.
    </td>
</tr>
<tr>
    <td>T6433</td>
    <td>Introduction to Linguistics</td>
    <td>
        Language is central to human activity and life and Linguistics is a study of language and communication as it focuses on structure, use and psychology of language. The course will introduce students to basic concepts in Linguistics such as Morphology, Phonology and Phonetics, Syntax, Semantics etc. The course will also look at the socio-cultural and psychological aspects of language in terms of its acquisition and use.
        <br><br>
        In the last century, Linguistics formed the basis for development of a variety of theories in disciplines such as Psychology, Sociology, Anthropology, Cultural Studies and English Literary Studies. It has been at the basis of theories ranging from structuralism/post structuralism to post-modernism and post-colonialism. The course will equip students with a conceptual map of and vocabulary for advanced and nuanced theoretical arguments from various disciplines.
    </td>
</tr>

<tr>
    <td>T6432</td>
    <td>Critical Writing: Writing as Resistance, Writing as Recovery</td>
    <td>
        Writing is a core component of a liberal arts education, enabling students to engage critically with complex ideas and express themselves clearly. This course trains students to write systematically and coherently across diverse topics and modes, fostering independence of thought, judgment, and expression. Students will critically read texts—written, oral, and visual—by thinkers, scholars, and journalists from varied cultural, philosophical, and ideological contexts. They will write analytically, persuasively, and creatively, using response, comparison, argumentation, and literary commentary. All reading and writing will be framed within interdisciplinary theoretical perspectives on rhetoric, language, ideology, poetics, aesthetics, cultural theory, and media studies.
    </td>
</tr>

<tr>
    <td>T6449</td>
    <td>Knowledge: Contested, Contextualized, Confirmed</td>
    <td>
        This course examines knowledge as contested, contextualized, and confirmed, exploring how traditional and modern paradigms shape our understanding of the world. Students critically reflect on the historical, cultural, and ethical foundations of knowledge, comparing cumulative, participatory, holistic, and atomistic approaches across disciplines such as science, medicine, economics, and the arts. Through case studies, discussions, and writing assignments, students analyze the consequences of knowledge claims and methods, develop interdisciplinary frameworks, and cultivate self-awareness as knowers. The course encourages evaluation of rival perspectives, ethical reasoning, and the possibility of integrating diverse approaches to foster responsible, sustainable, and nuanced understanding of knowledge in contemporary contexts.
    </td>
</tr>

<tr>
    <td>T6434</td>
    <td>Literary Imagination in the World</td>
    <td>
        This course explores the power of literature and the arts to illuminate social, political, and ecological issues while fostering ethical reflection and aesthetic sensitivity. Students read diverse texts—including fairy tales, fables, classics, and religious literature—alongside visual and musical adaptations, examining thematic patterns such as heroism, hubris, and transformation. The course emphasizes critical perspectives, including feminist, Marxist, and psychoanalytic approaches, to understand literature’s potential to challenge oppression and inspire alternatives to divisive, power-centric modes of living. Through discussion, analysis, and creative projects, students develop interpretive skills, aesthetic judgment, and an appreciation of literature’s role in connecting cultural particularity to universal human experience.
    </td>
</tr>

<tr>
    <td>T6453</td>
    <td>From Marxism to Post-Marxism: Critical Discourses</td>
    <td>
        From Marxism to Post-Marxism: Critical Discourses is a course that builds on the introductory course on Marxism. This advanced level course on Marxism intends to make the students familiar with the growth of Marxist methodology, its contribution in the social sciences and the important challenges it faced and still continues to face. The students will engage in discussing important contributions of Marxism, both as a theory and as a discourse, extending till the 20th century in terms of philosophical and critical enquiry. The students will not necessarily be referring to texts written by Marx and later ‘classical’ Marxists. The course will use Marxism as an intellectual tradition and draw concepts, ideas and practices from it and analyze them in the larger socio-political and historical debates and practices.
    </td>
</tr>

<tr>
    <td>T6420</td>
    <td>An Introduction to Cultural Studies</td>
    <td>
        The course will attempt to introduce students to the new and exciting discipline of Cultural Studies. In this course, we will try to grasp how cultural spaces, times, products and ideologies are implicated in the power relations of the society. This course will help students from across disciplines such as Sociology, Psychology, Anthropology, History, and English Literature to get acquainted with novel and nuanced theoretical concepts and familiarize themselves with the novel approaches to the study of culture that have developed in the last few years across the world.
        <br><br>
        In this course, we will take a critical stock of how the idea of culture has been framed by scholars from various disciplines. By questioning the traditional formalist approaches to culture, we will expand the scope of culture to deal with concepts such as “Culture Industry and Art”, “Modernity and History”, “the City and Architecture”, “The Popular Culture and the Nation”, “Multiculturalism”, “Culture/Gender/Politics”, and “Globalization and Culture” etc.
    </td>
</tr>

<tr>
    <td>T6568</td>
    <td>Modern Indian Theatre and Performance: History, Theory, Text and Culture</td>
    <td>
        This course examines modern Indian theatre from its mid-19th-century origins to the present, highlighting its role in shaping popular imagination and modern consciousness. It explores the blending of Western, classical, and Indian folk theatrical forms, emphasizing theatre’s capacity to engage audiences while reflecting socio-political histories. Students study key texts alongside critical writings on colonial and postcolonial India, gender, and identity, analyzing both dramatic works and their performance. By focusing on playwrights, directors, performers, and texts, the course situates theatre within broader cultural, historical, and political contexts, fostering interdisciplinary understanding across literature, performance, history, and cultural studies.
    </td>
</tr>

<tr>
    <td>T6572</td>
    <td>Re-conceptualizing the Noir Film</td>
    <td>
        This course explores Film Noir, a cinematic genre that emerged in 1940s USA, examining its dark aesthetic, morally ambiguous characters, and tragic narratives. Students study noir’s origins, stylistic features, and thematic concerns, analyzing key films to understand its historical and cultural context. The course traces the evolution of noir into neo-noir, its adaptations in European, Asian, and Indian cinemas, and its influence on contemporary television. By considering both form and content, students investigate whether noir is simply a genre or a global cinematic style, engaging with its enduring appeal, cultural resonance, and the ways it continues to shape narrative and visual storytelling worldwide.
    </td>
</tr>

<tr>
    <td>T6577</td>
    <td>Labour in India-Past and Present</td>
    <td>
        This course attempts to introduce students to the study of industrial labour in India from its inception to the present period. The objective is to familiarize students with various categories of work and working lives in India and the history of their development. Drawing from labour history, early industrial sociology and current labour anthropology, the course seeks to interrogate India’s development experience from the perspective of labour. Students will be familiarized with complexities associated with understanding and classifying working lives of various kinds for both academic and policy purposes. The course aims at intensive interaction with a wide range of sources, ranging from colonial administrative documents, policy briefs, NSSO classification schemes, legal documents, ethnographic writing and trade union documents. The course will provide an overview of the trajectory of labour in India particularly in the current scenario and locate it within the context of the developing economy.
    </td>
</tr>
  <tr>
            <td>T6578</td>
            <td>Understanding Urbanity: Classical and Contemporary Approaches</td>
            <td>
                This course attempts to introduce students to classical and contemporary
                approaches to urban studies and the complications that lie within them.
                The objective of the course is to trace the development of the City in
                understanding modern life and various historical contexts.
            </td>
        </tr>

        <tr>
            <td>T6565</td>
            <td>Religion and Rebellion: Roots of Resistance in the Ground of Tradition</td>
            <td>
                This course examines the potential of religious ideas, practices, and
                philosophies to inspire critical thought and constructive resistance
                to oppression. Students explore various religious traditions and
                analyze texts, practices, and figures that embody transformative potential.
            </td>
        </tr>

        <tr>
            <td>T5633</td>
            <td>Use of Signs and Symbols for Marketing and Branding</td>
            <td>
                Signs and symbols are part of daily life, giving quick and easy access
                to information. This course explores symbolic communication in branding,
                advertising, and consumer engagement.
            </td>
        </tr>

        <tr>
            <td>T6569</td>
            <td>Love in Literature: Literary Expressions and Explorations across World Cultures</td>
            <td>
                The course attempts to explore the types and aspects of human experience
                of love through literary texts from various cultures and historical periods,
                including fiction, drama, poetry, autobiography, and memoir.
            </td>
        </tr>

        <tr>
            <td>T6567</td>
            <td>The Politics of Difference</td>
            <td>
                This course examines the social and literary dynamics of “difference”
                through selected works of fiction and drama. Students analyze themes
                of religion, caste, gender, class, and sexuality in shaping societal
                hierarchies and conflicts.
            </td>
        </tr>

        <tr>
            <td>T6574</td>
            <td>Critical Ideas of the 20th Century</td>
            <td>
                This course introduces critical ideas that shaped modern intellectual
                thought and academic disciplines. Students examine how theories influence
                the way we understand society, culture, and history.
            </td>
        </tr>

        <tr>
            <td>T6575</td>
            <td>Postmodernism: Literature and Philosophy</td>
            <td>
                The course explores the meaning and significance of postmodernism,
                including its relation to truth, ethics, subjectivity, power, and
                intellectual history through thinkers such as Derrida, Foucault,
                Lyotard, and Deleuze.
            </td>
        </tr>

        <tr>
            <td>T6573</td>
            <td>Crisis in West Asia</td>
            <td>
                This course examines the roots of conflicts in the Middle East,
                including religion, geopolitics, oil politics, proxy wars,
                and superpower interventions that shaped the modern region.
            </td>
        </tr>

        <tr>
            <td>T6566</td>
            <td>Colonial Encounters: Literary Representations and Theoretical Reflections</td>
            <td>
                The course examines how literature represents the human dimensions
                of colonialism through multiple perspectives and critical traditions
                such as postcolonial, feminist, and Marxist approaches.
            </td>
        </tr>

        <tr>
            <td>T4686</td>
            <td>Introduction to Human Genetics</td>
            <td>
                This course introduces the basics of genetics, inheritance,
                genetic disorders, and genetic counseling, while discussing
                the social and psychological aspects of genetic science.
            </td>
        </tr>

        <tr>
            <td>T6570</td>
            <td>World Drama, Text and Performance Traditions in their Cultural Context</td>
            <td>
                The course exposes students to drama traditions across cultures,
                including Greek, Japanese, Indian, and African traditions,
                with emphasis on theatre concepts and performance practices.
            </td>
        </tr>

        <tr>
            <td>T6576</td>
            <td>Sport and Performance Psychology</td>
            <td>
                This course introduces the principles of sport and performance psychology,
                focusing on motivation, performance enhancement, exercise psychology,
                and psychological well-being in competitive environments.
            </td>
        </tr>

        <tr>
            <td>T3251</td>
            <td>Design Tools-I</td>
            <td>
                This course introduces undergraduate students to essential digital
                design tools for web, print, and photography using Adobe Photoshop,
                including image editing, color correction, layers, filters,
                and retouching techniques.
            </td>
        </tr>
        <tr>
    <td>T3252</td>
    <td>Design Tools-II</td>
    <td>
        Design Tools II is a Level 2 undergraduate course that introduces students
        to advanced design and page layout techniques using CorelDRAW. Students learn
        illustration, typography, vector effects, transparency, layers, and multi-page
        layouts through practical exercises and demonstrations for professional graphic
        design and visual communication.
    </td>
</tr>

<tr>
    <td>T6571</td>
    <td>Postmodernism: Literary and Philosophical Perspectives</td>
    <td>
        This course introduces students to postmodernism, exploring its philosophical
        origins, significance, and impact on contemporary thought. Students study
        thinkers such as Lyotard, Derrida, Foucault, Deleuze, Guattari, and Kafka,
        while examining feminism, postcolonial theory, ethics, and cultural interaction.
    </td>
</tr>

<tr>
    <td>T6559</td>
    <td>The Psychology of Good and Evil</td>
    <td>
        This undergraduate course examines human behavior through morality, exploring
        destructive and altruistic actions. Students study topics such as genocide,
        terrorism, domestic violence, altruism, and volunteerism while developing
        critical analysis and ethical reasoning skills.
    </td>
</tr>

<tr>
    <td>T6564</td>
    <td>Sustainability for the Post-2015 World</td>
    <td>
        This course examines sustainability issues after 2015, including climate change,
        sustainable development goals, terrorism, refugee crises, food-water-energy
        security, urbanization, and green business processes from global and local perspectives.
    </td>
</tr>

<tr>
    <td>T6557</td>
    <td>Critical Debates in 21st Century Technology</td>
    <td>
        This course explores the rapid expansion of 21st-century technologies and
        their social consequences, including social media, cryptocurrencies,
        artificial intelligence, digital rights, surveillance, ethics, and algorithmic power.
    </td>
</tr>

<tr>
    <td>T6558</td>
    <td>Politics of Ecology and Environment in Developing Countries</td>
    <td>
        This course examines environmental challenges in developing countries,
        including natural resource management, pollution, industrialization,
        urbanization, tribal rights, fisheries, mining, forests, and alternative energy.
    </td>
</tr>

<tr>
    <td>T6563</td>
    <td>Creative Writing - Media, Advertising, Content, and Screenplay</td>
    <td>
        This course focuses on professional creative writing for media, advertising,
        digital content, and screenwriting. Students learn audience analysis,
        communication strategies, content design, and screenplay development through
        practical and analytical approaches.
    </td>
</tr>

<tr>
    <td>T6555</td>
    <td>Contemporary Fiction Today: A Junior Seminar Course</td>
    <td>
        This seminar course examines contemporary fiction through interdisciplinary
        literary approaches. Students analyze works by major international writers
        in relation to local and global cultural, political, and social contexts.
    </td>
</tr>
<tr>
    <td>T3253</td>
    <td>Design Tools-III</td>
    <td>
        Design Tools III builds advanced competencies in professional page layout
        and publication design using software such as Adobe InDesign and QuarkXPress.
        Students learn to integrate text, images, graphics, colour, and typography
        into production-ready layouts for print and interactive media.
    </td>
</tr>

<tr>
    <td>T3254</td>
    <td>Design Tools-IV</td>
    <td>
        Design Tools IV focuses on advanced vector-based design skills using
        Adobe Illustrator. Students create scalable illustrations, manipulate
        vector graphics, and develop professional visual assets for print
        and publication environments.
    </td>
</tr>

<tr>
    <td>T3255</td>
    <td>Introduction to Web Design</td>
    <td>
        This course introduces students to the fundamentals of web design and
        web technologies, including HTML, CSS, tables, forms, frames, and
        responsive page structure through practical exercises and projects.
    </td>
</tr>

<tr>
    <td>T3198</td>
    <td>Introduction to Python</td>
    <td>
        Introduction to Python is an entry-level programming course that
        familiarizes students with Python programming concepts such as data types,
        control structures, functions, modules, and structured data types through
        lectures and hands-on lab sessions.
    </td>
</tr>

<tr>
    <td>T3326</td>
    <td>Foundation of Web Technologies</td>
    <td>
        This course provides a comprehensive grounding in web technologies,
        including HTML, CSS, JavaScript, jQuery, e-commerce concepts,
        user experience considerations, and web security fundamentals.
    </td>
</tr>

<tr>
    <td>T3201</td>
    <td>Mobile Programming</td>
    <td>
        Mobile Programming introduces students to Android application development,
        covering the Android ecosystem, SDK, application lifecycle, layouts,
        event handling, data storage, permissions, testing, and deployment.
    </td>
</tr>

<tr>
    <td>T7527</td>
    <td>Internet of Things</td>
    <td>
        This course provides a comprehensive understanding of Internet of Things (IoT)
        concepts, including wireless communication, RFID, sensor networks,
        IoT middleware, routing protocols, IPv6, security, privacy, and
        real-time monitoring systems.
    </td>
</tr>
<tr>
    <td>T6601</td>
    <td>The Illbeing - Disease, Health and Socio-politics</td>
    <td>
        This interdisciplinary elective introduces students to the biological
        foundations of health and disease while critically examining their
        social, economic, and political dimensions, including healthcare systems,
        vaccines, antibiotics, inequality, lifestyle, and public policy.
    </td>
</tr>

<tr>
    <td>T6629</td>
    <td>Of Scripts and Shots</td>
    <td>
        This practice-oriented film studies course trains students to think
        cinematically through scriptwriting, storyboarding, shooting, editing,
        and visual storytelling while developing skills in cinematic meaning-making
        and film analysis.
    </td>
</tr>

<tr>
    <td>T6600</td>
    <td>Caste in India: Origin and Practice</td>
    <td>
        This course examines the historical and sociological dimensions of caste
        in India, helping students understand Indian social hierarchies,
        political life, and critical social issues through interdisciplinary perspectives.
    </td>
</tr>

<tr>
    <td>T6602</td>
    <td>Introduction to the Microbial World</td>
    <td>
        This course explores microorganisms and their impact on human life,
        healthcare, ecosystems, and society. Students study microbes such as
        viruses, bacteria, fungi, and protozoa, along with immunity, antibiotics,
        and public health issues.
    </td>
</tr>

<tr>
    <td>T1511</td>
    <td>Principles of Taxation Law</td>
    <td>
        This Level 4 undergraduate course introduces students to taxation in India,
        covering direct and indirect taxes, Income Tax, GST, constitutional
        frameworks, assessments, deductions, tax treaties, and transfer pricing.
    </td>
</tr>

<tr>
    <td>THM6004</td>
    <td>An Introduction to the Study of Foreign Policy of the United States of America in the Post-Cold War World</td>
    <td>
        This course examines the foreign policy of the United States in the
        post-Cold War era, focusing on global politics, diplomacy,
        international relations, and strategic policy developments.
    </td>
</tr>

<tr>
    <td>T6615</td>
    <td>Literature and Religion</td>
    <td>
        This course studies cross-cultural religious worldviews through literature,
        enabling students to compare philosophical ideas, themes, and religious
        understandings while exploring identity, truth, and global diversity.
    </td>
</tr>

<tr>
    <td>TE7093</td>
    <td>Everyday Physics</td>
    <td>
        This course introduces basic concepts of physics and explains how
        physical principles shape the natural world and everyday technologies.
        It emphasizes conceptual understanding, logical thinking, and analytical skills.
    </td>
</tr>
<tr>
    <td>T6341</td>
    <td>Women and Environment Eco-feminism</td>
    <td>
        This course explores the intersection of gender and environmental issues,
        focusing on ecofeminism, feminist political ecology, and environmentalism.
        Students examine women’s roles in environmental struggles and engage with
        thinkers such as Rachel Carson, Vandana Shiva, and Wangari Maathai.
    </td>
</tr>

<tr>
    <td>T6342</td>
    <td>Gender Justice and Law</td>
    <td>
        This course examines the relationship between gender, justice, and the legal
        system, focusing on laws related to sexuality, violence against women,
        workplace discrimination, sexual harassment, trafficking, and LGBT rights.
    </td>
</tr>

<tr>
    <td>T6343</td>
    <td>Class Caste Race and Patriarchy</td>
    <td>
        This course examines the interlinked structures of class, caste, gender,
        and race as systems of social stratification. Students explore inequality,
        social institutions, and lived experiences through feminist and intersectional perspectives.
    </td>
</tr>

<tr>
    <td>T6344</td>
    <td>Women in Conflict and Peace Process</td>
    <td>
        This course explores women’s roles in conflict resolution, peacebuilding,
        and post-conflict reconstruction through feminist and peace studies perspectives,
        using regional and global case studies.
    </td>
</tr>

<tr>
    <td>T6175</td>
    <td>Feminist Criticism, Semiotics, Psychoanalysis</td>
    <td>
        This course introduces students to feminist film criticism, semiotics,
        and psychoanalysis as frameworks for reading cinema, analyzing imagery,
        symbolism, narrative, and visual pleasure in Indian and international films.
    </td>
</tr>

<tr>
    <td>T6176</td>
    <td>Indian Parallel Cinema/Art Cinema/Regional Cinema</td>
    <td>
        This course traces the emergence and evolution of Indian parallel cinema
        and regional cinema in relation to nationalism, cultural history,
        socialism, capitalism, and global recognition of alternative filmmaking traditions.
    </td>
</tr>

<tr>
    <td>T6177</td>
    <td>Cinema and the Market; Digital Cinema and the Market</td>
    <td>
        This course examines the relationship between cinema and the market,
        exploring commercialization, Bollywood, digital technologies,
        audience culture, and the impact of new media on filmmaking practices.
    </td>
</tr>

<tr>
    <td>T6178</td>
    <td>Film Analysis and Research</td>
    <td>
        This course develops research and analytical skills through film analysis,
        essay writing, archival research, interviews, film viewing, and
        cultural and political interpretation of cinema.
    </td>
</tr>

<tr>
    <td>T6669</td>
    <td>Introduction to Social Work</td>
    <td>
        This course introduces students to the foundations of social work,
        including its history, ideology, professional values, and intervention
        methods at individual, family, and community levels.
    </td>
</tr>

<tr>
    <td>T6668</td>
    <td>Politics and the Media in India</td>
    <td>
        This course examines how political discourse is covered by the media in India,
        focusing on elections, political reporting, party systems, public policy,
        and major political developments in post-independence India.
    </td>
</tr>

<tr>
    <td>T6667</td>
    <td>Natyashastra: An Indian Perspective of Performance</td>
    <td>
        This course introduces students to the ancient Indian treatise Natyashastra,
        exploring drama, dance, music, aesthetics, stage design, acting techniques,
        and performance traditions in Indian theatre and performing arts.
    </td>
</tr>
<tr>
    <td>T6690</td>
    <td>Science as Muse: Intersections of Science and the Arts</td>
    <td>
        This course explores how science inspires poetry, literature, theatre,
        and the arts. Students examine scientific concepts in mathematics,
        neuroscience, and physics through creative works, discovering connections
        between scientific inquiry and artistic imagination.
    </td>
</tr>

<tr>
    <td>T6744</td>
    <td>Carnatic Music in Indian Musicology</td>
    <td>
        This course introduces students to Carnatic music, tracing its traditions,
        evolution, and core elements such as raga, tala, swara, and shruti.
        Students gain practical and theoretical understanding of vocal and instrumental forms.
    </td>
</tr>

<tr>
    <td>T6142</td>
    <td>Intermediate Econometrics</td>
    <td>
        This course builds quantitative and analytical skills in econometrics,
        covering simultaneous equation models, time-series analysis, forecasting
        methods such as ARIMA, VAR, ARCH, and GARCH, along with statistical software applications.
    </td>
</tr>

<tr>
    <td>T6676</td>
    <td>Introduction to Moral Philosophy</td>
    <td>
        This course introduces students to moral philosophy and ethical questions
        concerning right and wrong, good and evil, through the ideas of major
        Western and modern Indian philosophers.
    </td>
</tr>

<tr>
    <td>T6689</td>
    <td>Communication for Social Change</td>
    <td>
        This course examines the role of communication and media in promoting
        inclusive development and social change, focusing on marginalized communities,
        development campaigns, alternative media, and collaborative communication practices.
    </td>
</tr>

<tr>
    <td>TE7439</td>
    <td>An Introduction to Maker Culture: Developing Technologies</td>
    <td>
        This course introduces students to the global maker movement and citizen-led
        innovation through digital fabrication tools such as 3D printing, laser cutting,
        electronics, sensors, and microcontrollers, encouraging hands-on problem solving.
    </td>
</tr>

<tr>
    <td>T6745</td>
    <td>Global Justice</td>
    <td>
        This course explores global justice through political thought and ethical theory,
        examining international institutions, global citizenship, inequality, poverty,
        humanitarian responsibility, and contemporary debates on justice.
    </td>
</tr>

<tr>
    <td>T6131</td>
    <td>Micro Economics II</td>
    <td>
        This course develops an intermediate understanding of microeconomic theory,
        including market structures, competition, pricing strategies, labour markets,
        equilibrium, market failure, and welfare-related economic issues.
    </td>
</tr>

<tr>
    <td>T6230</td>
    <td>Hindi 1</td>
    <td>
        Hindi 1 is an introductory language course designed to build basic proficiency
        in Hindi through grammar, vocabulary, reading, writing, speaking, conversation,
        and cultural understanding in academic and everyday contexts.
    </td>
</tr>
<tr>
    <td>T6231</td>
    <td>Hindi 2</td>
    <td>
        Hindi II builds on foundational Hindi language skills and strengthens
        reading, writing, comprehension, vocabulary, grammar, pronunciation,
        and spoken communication through practical exercises and everyday conversations.
    </td>
</tr>

<tr>
    <td>T6397</td>
    <td>Basic Hindi I</td>
    <td>
        This introductory language course develops basic Hindi proficiency through
        grammar, vocabulary, sentence construction, reading, writing, speaking,
        and conversational practice for academic and social contexts.
    </td>
</tr>

<tr>
    <td>T6398</td>
    <td>Basic Hindi II</td>
    <td>
        Basic Hindi II builds upon foundational language skills by enhancing grammar,
        vocabulary, translation, comprehension, speaking, reading, and writing abilities
        through practical communication exercises and role play.
    </td>
</tr>

<tr>
    <td>TH4078</td>
    <td>Decoding the Genetically Modified</td>
    <td>
        This course introduces students to genetically modified organisms (GMOs),
        exploring their scientific basis, applications, ethical debates,
        environmental impacts, food security concerns, and public policy dimensions.
    </td>
</tr>

<tr>
    <td>T6784</td>
    <td>Comparative Literature</td>
    <td>
        This course introduces students to Comparative Literature by exploring
        literary systems, cultural texts, translation, and methodologies of reading
        across languages, traditions, and historical contexts.
    </td>
</tr>

<tr>
    <td>T3614</td>
    <td>Logic Designing and Research Techniques in Python</td>
    <td>
        This course introduces students to logic design, programming,
        and research applications using Python, covering algorithms,
        data structures, programming concepts, and libraries such as NumPy and Matplotlib.
    </td>
</tr>

<tr>
    <td>T1200</td>
    <td>Human Rights and Related Laws</td>
    <td>
        This course familiarizes students with human rights, their legal foundations,
        constitutional protections, international frameworks, and the rights
        of vulnerable groups through case studies and interactive learning methods.
    </td>
</tr>

<tr>
    <td>T4395</td>
    <td>Ecology and Evolution</td>
    <td>
        This course introduces the principles of ecology and evolution,
        including ecosystem diversity, population dynamics, environmental conservation,
        evolutionary mechanisms, and human impacts on biological systems.
    </td>
</tr>

<tr>
    <td>T4399</td>
    <td>Reproductive and Developmental Biology</td>
    <td>
        This course explores reproductive and developmental biology in plants
        and animals, covering embryogenesis, reproduction, genetics,
        tissue development, regeneration, and experimental biological methods.
    </td>
</tr>

<tr>
    <td>T4400</td>
    <td>Applied Biology and Biotechnology</td>
    <td>
        This course introduces applied biology and biotechnology concepts,
        including plant biotechnology, microbiology, tissue culture,
        biofertilizers, fermentation, vaccines, DNA fingerprinting,
        and laboratory techniques for practical applications.
    </td>
</tr>
   <tr>
            <td>T4401</td>
            <td>Mathematical Biology</td>
            <td>
                This course in Mathematical Biology introduces students to the
                mathematical modeling and analysis of biological processes using
                applied mathematical techniques.
            </td>
        </tr>

        <tr>
            <td>T4402</td>
            <td>Behavioral Biology</td>
            <td>
                This course explores the interplay between biology and behavior,
                integrating cognitive science, sociology, and evolutionary psychology.
            </td>
        </tr>

        <tr>
            <td>T6151</td>
            <td>Comparative Economics</td>
            <td>
                Comparative Economics deals with the comparative study of different
                systems of economic organization such as capitalism, socialism,
                feudalism, and mixed economies.
            </td>
        </tr>

        <tr>
            <td>T6153</td>
            <td>Economic History and Thought</td>
            <td>
                A comprehensive survey of world economic history designed to
                introduce students to economic history and methodology.
            </td>
        </tr>

        <tr>
            <td>T6155</td>
            <td>Contemporary Indian Economy</td>
            <td>
                Provides a comprehensive analysis of India's economic structure,
                development, public policy, and current challenges.
            </td>
        </tr>

        <tr>
            <td>T6821</td>
            <td>Conversational Skills in Spanish</td>
            <td>
                Introduces students to basic Spanish language and culture with a
                focus on speaking, listening, reading, and writing skills.
            </td>
        </tr>

        <tr>
            <td>T6818</td>
            <td>Conversational Skills in French</td>
            <td>
                Develops basic communicative competence in French through speaking,
                listening, reading, and writing.
            </td>
        </tr>

        <tr>
            <td>T6822</td>
            <td>Conversational Skills in Chinese</td>
            <td>
                Focuses on foundational communication skills in Mandarin through
                speaking, listening, reading, and writing.
            </td>
        </tr>

        <tr>
            <td>T6820</td>
            <td>Conversational Skills in Japanese</td>
            <td>
                Builds communication proficiency in Japanese through role plays,
                dialogues, and practical activities.
            </td>
        </tr>

        <tr>
            <td>T6819</td>
            <td>Conversational Skills in German</td>
            <td>
                Develops practical communication competence in German for everyday
                situations and cultural interactions.
            </td>
        </tr>

        <tr>
            <td>T6847</td>
            <td>Sociology of Health</td>
            <td>
                Introduces students to the sociological study of health, illness,
                and medicine within broader social and cultural frameworks.
            </td>
        </tr>

        <tr>
            <td>T6865</td>
            <td>Classical Hinduism - A Study Through Scriptures</td>
            <td>
                Introduces students to the philosophical, ritual, and devotional
                traditions of Hinduism through close engagement with scriptures.
            </td>
        </tr>
        <tr>
    <td>T6864</td>
    <td>Permaculture Design and Regenerative Ecosystems</td>
    <td>
        The course introduces undergraduate students to permaculture as a holistic
        design science for creating sustainable and regenerative human–nature systems.
    </td>
</tr>

<tr>
    <td>T6859</td>
    <td>History and Story: Through the Looking Glass</td>
    <td>
        Explores the relationship between historical facts, myths, and fictional
        narratives and how fiction reshapes historical understanding.
    </td>
</tr>

<tr>
    <td>T6858</td>
    <td>The History of Small Things</td>
    <td>
        Introduces students to microhistory by examining how seemingly ordinary
        objects and events shape major historical processes.
    </td>
</tr>

<tr>
    <td>T6862</td>
    <td>From Products to Self: Personal, Image and Reputation Brand Management</td>
    <td>
        Introduces principles and practices of personal branding in the digital age,
        including self-branding, communication, and reputation management.
    </td>
</tr>

<tr>
    <td>T6863</td>
    <td>The Self, Individuality and Identity - A Biological Perspective</td>
    <td>
        Examines the concept of self through biology and its connections with
        psychology, sociology, and the humanities.
    </td>
</tr>

<tr>
    <td>T6861</td>
    <td>Role of Armed Forces in International Politics</td>
    <td>
        Examines the strategic, organizational, and diplomatic roles of military
        forces in shaping international relations and national security.
    </td>
</tr>

<tr>
    <td>T6860</td>
    <td>United Nations Peacekeeping Operations</td>
    <td>
        Explores the role of the United Nations in conflict prevention,
        peacekeeping, conflict management, and post-conflict peacebuilding.
    </td>
</tr>

<tr>
    <td>T6866</td>
    <td>Basics of Western Music</td>
    <td>
        Introduces students to the fundamental principles of reading, writing,
        and understanding Western musical notation.
    </td>
</tr>

<tr>
    <td>T6856</td>
    <td>Maritime History of India</td>
    <td>
        Explores the role of seas and oceans in shaping India's historical,
        economic, and cultural development.
    </td>
</tr>

<tr>
    <td>T6857</td>
    <td>Urban Studies: Cross-Disciplinary Perspectives</td>
    <td>
        Examines the historical evolution and contemporary dynamics of cities in
        India through interdisciplinary frameworks.
    </td>
</tr>
<tr>
    <td>T6867</td>
    <td>Introduction to Hindustani Classical Music</td>
    <td>Offers students a foundational understanding of North Indian classical music, including swaras, taals, raags, gharanas, and performance traditions.</td>
</tr>

<tr>
    <td>T6894</td>
    <td>Contemporary India</td>
    <td>Provides an in-depth understanding of India's political, social, and economic evolution from colonial rule to the present.</td>
</tr>

<tr>
    <td>T6898</td>
    <td>Global Mental Health</td>
    <td>Examines mental health issues in low-resource and developing countries, focusing on cultural, social, and gender dimensions.</td>
</tr>

<tr>
    <td>T6895</td>
    <td>Internal Security in India</td>
    <td>Explores India's internal security challenges including terrorism, insurgencies, communal violence, and extremism.</td>
</tr>

<tr>
    <td>THM6005</td>
    <td>Humour Studies: An Interdisciplinary Introduction</td>
    <td>Introduces the history, philosophy, science, and social functions of humour across different disciplines.</td>
</tr>

<tr>
    <td>T6892</td>
    <td>Digital Tools for Qualitative Analysis</td>
    <td>Introduces students to digital platforms and CAQDAS software for collecting, coding, and analyzing qualitative data.</td>
</tr>

<tr>
    <td>T6893</td>
    <td>Digital Tools for Quantitative Analysis</td>
    <td>Focuses on quantitative research methods using statistical software and practical data analysis techniques.</td>
</tr>

<tr>
    <td>T6991</td>
    <td>Reading Ethnography Through the Ages</td>
    <td>Explores the development, methods, and purposes of ethnographic research through classical and contemporary studies.</td>
</tr>

<tr>
    <td>THM6007</td>
    <td>Educational Psychology</td>
    <td>Introduces learning theories, educational psychology principles, classroom management, and student development.</td>
</tr>

<tr>
    <td>THM6006</td>
    <td>Indian Contemporary Dance: Techniques and Choreography</td>
    <td>Provides theoretical and practical understanding of Indian contemporary dance, choreography, and movement composition.</td>
</tr>

<tr>
    <td>T6990</td>
    <td>Economic Anthropology and Value-centred Praxis</td>
    <td>Examines economic practices through an anthropological lens, emphasizing ethics, value, and social context.</td>
</tr>

<tr>
    <td>T6993</td>
    <td>Conversational Skills in Korean</td>
    <td>Introduces conversational Korean with practical speaking, listening, reading, and writing exercises.</td>
</tr>

<tr>
    <td>THM6054</td>
    <td>Beginner's Course in Marathi</td>
    <td>Introduces students to the Marathi language and culture with emphasis on everyday communication skills.</td>
</tr>
<tr>
    <td>T6262</td>
    <td>Advanced Ethical Theory</td>
    <td>
        An in-depth study of ethical theory, tracing its development from ancient Greek philosophy to modern human rights movements.
    </td>
</tr>

<tr>
    <td>T5999</td>
    <td>Key Concepts in Indian Film Studies</td>
    <td>
        Introduces students to Indian Film Studies, exploring cinema as an art form and social medium through historical and contemporary perspectives.
    </td>
</tr>

<tr>
    <td>T6352</td>
    <td>Politics of Social Justice</td>
    <td>
        Examines theories of justice, democracy, morality, public good, and social equality with special reference to the Indian context.
    </td>
</tr>

<tr>
    <td>T3487</td>
    <td>Network Security Essentials</td>
    <td>
        Provides a comprehensive introduction to network security, including threats, protocols, cryptography, firewalls, VPNs, and intrusion detection.
    </td>
</tr>

<tr>
    <td>THM6107</td>
    <td>Business Strategy and Long-Term Sustainable Growth</td>
    <td>
        Explores business strategy with a focus on sustainable growth, business models, customer outcomes, and value creation.
    </td>
</tr>

<tr>
    <td>T6295</td>
    <td>Indian Political Thought</td>
    <td>
        Studies the evolution of political philosophy in India from ancient thinkers to modern leaders and their relevance to contemporary governance.
    </td>
</tr>

<tr>
    <td>T6248</td>
    <td>Theatre Games and Movement</td>
    <td>
        Introduces theatre through games, movement, improvisation, ensemble work, and body awareness to develop acting and expressive skills.
    </td>
</tr>

<tr>
    <td>TM2153</td>
    <td>Career Management</td>
    <td>
        Helps students develop self-management, career planning, employability skills, and professional growth strategies.
    </td>
</tr>

<tr>
    <td>THM6053</td>
    <td>Project Ecology - An Experiential Learning Program</td>
    <td>
        Introduces biodiversity, sustainability, ecological interconnections, and community engagement through hands-on learning experiences.
    </td>
</tr>

<tr>
    <td>THM6109</td>
    <td>Introduction to Scoring Music for Film</td>
    <td>
        Familiarizes students with the aesthetic, theoretical, and practical dimensions of music and sound in cinema, including film scoring techniques.
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
    <!-- old code start  -->
    <section class="new_credit_information_section our_courses_section d-none">
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
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        href="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        Majors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        href="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">
                                        Minors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        href="#contact-tab-pane" type="button" role="tab"
                                        aria-controls="contact-tab-pane" aria-selected="false">
                                        Cores
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        href="#settings-tab-pane" type="button" role="tab"
                                        aria-controls="settings-tab-pane" aria-selected="false">
                                        Electives
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox">

                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Anthropology">Anthropology</div>
                                            <div class="inner_courses_content" id="Anthropology">
                                                <span class="close_btn">x</span>
                                                Anthropology as a Major Discipline provides a comprehensive and holistic study of humankind by integrating biological, socio-cultural, archaeological, and applied perspectives. The curriculum enables students to examine human evolution, biological variation, cultural systems, social institutions, economies, power structures, and material culture across time and space. Emphasis is placed on anthropological theory, ethnographic and archaeological research methods, and interdisciplinary analytical skills. Students are trained to critically engage with issues of identity, inequality, adaptation, and cultural change within diverse ecological and historical contexts. The programme further highlights the practical applications of anthropology in development, health, heritage, business, and governance, preparing students for research-oriented and socially responsive careers.
                                                
                                                <!-- COURSE-TITLE-BOX-START -->
                                                <div class="row">
                                                    <div class="col-lg-12 mt-4">
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Anthropology-title">What is Anthropology?</div>
                                                            <div class="course_title_text" id="Anthropology-title">
                                                                What is Anthropology? introduces students to the study of humans, their societies, cultures, and evolution. Covering the five sub-disciplines of anthropology, the course explores human adaptability, social structures, economies, political systems, and cultural processes. Students learn research methods, including ethnography and participant observation, and examine applied anthropology. Through discussions, multimedia resources, and projects, the course develops analytical, observational, and research skills, providing a comprehensive understanding of human behavior, cultural variation, and societal dynamics across diverse historical, geographical, and ecological contexts.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Biological-title">Biological Anthropology</div>
                                                            <div class="course_title_text" id="Biological-title">
                                                                Biological Anthropology introduces students to the scientific study of human biological evolution and variation. The course traces the historical development of evolutionary thought, from Darwin and Mendelian genetics to the modern evolutionary synthesis, and examines major theories explaining human evolution. It also explores human biological diversity, critically engaging with concepts of race, genetics, and biocultural evolution. Emphasis is placed on understanding the scope and applications of biological anthropology in addressing contemporary human issues. Through interactive discussions, case studies, audiovisual resources, and engagement with research literature, the course develops analytical skills and a comprehensive understanding of humanity’s biological past and present.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#SocioCultural-title">Socio-Cultural Anthropology 1</div>
                                                            <div class="course_title_text" id="SocioCultural-title">
                                                                Socio-Cultural Anthropology I introduces students to the holistic study of human societies and cultures, emphasizing diversity, interdependence, and adaptation. The course traces the evolution of anthropological thought and familiarizes students with key theories such as evolutionism, diffusionism, functionalism, cultural ecology, and globalization. It explores language, religion, art, media, ethnicity, race, and gender as central dimensions of social life. By engaging with societies different from their own, students develop cultural sensitivity and critical perspectives on contemporary global issues. Through interactive discussions, ethnographic insights, and applied projects, the course fosters analytical thinking and problem-solving skills relevant to real-world contexts.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#SocioCulturalAnthropology2-title">Socio-Cultural Anthropology 2</div>
                                                            <div class="course_title_text" id="SocioCulturalAnthropology2-title">
                                                                The Advance Social Psychology course provides students with a comprehensive understanding of social psychological theories, principles, and human behavior. It emphasizes self-concept, social cognition, cultural diversity, persuasion, prejudice, aggression, conflict, and relationships. Students learn to critically analyze research and apply social psychology to real-world situations, including sustainability and social influence. The curriculum integrates theoretical knowledge with experiential activities, research papers, guest lectures, and lab work. Through Socratic teaching, class discussions, and practical exercises, learners develop analytical skills and an ability to interpret human behavior across diverse contexts. The course prepares students to apply psychological insights effectively in everyday life and research settings.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#AnthropologyToday-title">Anthropology Today: Its Application</div>
                                                            <div class="course_title_text" id="AnthropologyToday-title">
                                                                Anthropology Today: Its Application explores the practical relevance of anthropology in contemporary society, business, and governance. The course traces the historical development of applied anthropology and examines its expanding role across biological, bio-cultural, social, and cultural domains. Students engage with applications in health, nutrition, public policy, forensic science, education, media, urban planning, business, and technology. Through case studies, fieldwork, interaction with industry practitioners, and research-based learning, the course builds analytical and critical reasoning skills. Emphasis is placed on identifying real-world problems, conducting applied research, and using anthropological insights to address social challenges and benefit global society.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Archaeology-title">Introduction to Archaeology: Theory and Techniques</div>
                                                            <div class="course_title_text" id="Archaeology-title">
                                                                Introduction to Archaeology: Theory and Techniques course provides students with a comprehensive understanding of archaeology as both a scientific and social science discipline. It explores the historical development of archaeology, excavation methods, site identification, and analysis of artefacts. Students learn to apply interdisciplinary techniques from anthropology, earth sciences, and social sciences to interpret archaeological data. The course emphasizes understanding cultural identity, ancient economies, politics, and technology through material remains. Field visits to excavation sites enhance practical skills, while discussions, case studies, and audiovisual materials foster critical thinking, analytical abilities, and an appreciation of archaeology’s scientific and cultural significance.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Shifting-title">Shifting Homelands: Ideology, Migration and Conflict</div>
                                                            <div class="course_title_text" id="Shifting-title">
                                                                Human societies are characterised with the ‘roving instinct’ and many scholar have put forth that migration is natural to humanity since this is what led to the population of the world. The ‘Out of Africa theory’ and various waves of movement into the continents along with the displacement of the Neanderthal cousins by the Anatomically Modern Humans suggests a constantly mobile community often engaged in interactions and conflicts for resources and benefits. In the contemporary and the modern world approximately 3% of the world population live away from the region that they were born in and contribute to the migratory population engaged in economic pursuits for a ‘better life’ away from their homeland. This course aims at engaging in a multi-disciplinary and interdisciplinary understanding of Migration often understood and closely associated as a ‘problem’ (Castles, 2010) (in both its cause and effect) leading to conflict, violence, social transformation and change throughout history.
                                                                <br><br>
                                                                This course will engage in analysing the phenomena of mobility within and without (international) political and territorial borders through legal and illegal forms due to the classical push and pull factors of climate and culture to the concept of migration not as a sedentary bias but as a normal component of social relations including the determinants, assimilation and conflicts involved.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#PoliticsEcology-title">Politics of Ecology and Environment in Developing Countries</div>
                                                            <div class="course_title_text" id="PoliticsEcology-title">
                                                                The ecology and environment of developing countries have been significantly altered through colonization and after independence. Developing countries has had to make negotiations between utilizing natural resources and conserving its environment. In the 21st Century, these negotiations have become more intense as we grapple with reduced resources, natural disasters, urban pollution and global warming. As developing countries gear up for industrial and development projects, they also negotiate with claims of indigenous forest lands, fishing rights, grazing rights etc. This course is aimed at considering the various challenges, policies, laws and approaches of developing countries in negotiating environmental sustenance, and management of ecology and environment. The course will address forests, fisheries, mining, pollution, industrialization, water resources, urban pollution, tribal rights and alternative energy.
                                                                <br><br>
                                                                Learning Objective/
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#GlobalJustice-title">Global Justice</div>
                                                            <div class="course_title_text" id="GlobalJustice-title">
                                                                This course introduces key themes in modern political thought and the emergence of international organizations, with a focused study of global justice in an era of intensified transnational interaction and conflict. It critically examines the power and influence of the United Nations, international courts, and transnational actors in shaping global norms of justice. Core debates include global citizenship, international equality, world poverty, limits of sovereignty, cosmopolitanism, and the human capabilities approach. Drawing on thinkers such as Rawls, Sen, Nussbaum, Pogge, and Singer, students engage through essays, presentations, and an in-depth theoretical analysis.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Women-title">Women in Conflict and Peace Process</div>
                                                            <div class="course_title_text" id="Women-title">
                                                                This course examines the critical role of women in conflict, peacebuilding, and post-conflict reconstruction across diverse global and regional contexts. Moving beyond the depiction of women solely as victims, it highlights their agency as negotiators, activists, and peacebuilders. Through case studies from Rwanda, North-East India, Jammu and Kashmir, the Middle East, and Sri Lanka, students analyze women’s participation in conflict resolution and its impact on sustainable peace. Using interdisciplinary readings, discussions, and visual media, the course develops an informed understanding of gendered perspectives in conflict and long-term peace processes.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#SociologyGlobalization-title">Sociology of Globalization: Global Culture, Economy, Emerging Issues</div>
                                                            <div class="course_title_text" id="SociologyGlobalization-title">
                                                                This course offers a critical sociological understanding of globalization as a complex and contested process shaping contemporary society. It examines the historical evolution and multiple dimensions of globalization—economic, cultural, social, and ecological—while engaging with key theoretical perspectives. Emphasis is placed on the relationship between knowledge and power, the crisis of globalization, and its unequal impacts on marginalized communities. Through themes such as gender, migration, environmental challenges, and resistance movements, students develop analytical skills to evaluate globalization’s consequences and explore alternative futures in an interconnected global society.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#UnderstandingUrbanity-title">Understanding Urbanity: Classical and Contemporary Approaches</div>
                                                            <div class="course_title_text" id="UnderstandingUrbanity-title">
                                                                This course attempts to introduce students to classical and contemporary approaches to urban studies and the complications that lie within them. The objective of the course is to trace the deployment of The City in the understanding of modern life in varied historical contexts. In doing this, the course unfolds in four modules- two dedicated to discussing key classical and contemporary theorists on the city and two to gaining familiarity with urban experiences across the world. One of the latter modules focuses on exploring cities in India in their historical and political contexts. Students are expected to engage with and bring to the discussion diverse positions on urban life. The course is also intended as an exercise in exploring methodological and disciplinary diversity in urban studies, as both the texts and the discussion seek to transcend conventional boundaries of disciplines and techniques.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Variation-title">Human Biological Variation</div>
                                                            <div class="course_title_text" id="Variation-title">
                                                                People are biologically very diverse, and often these differences are thought of in terms of race or ethnic groups. Human variation can be visible (e.g. Differences in skin color, hair form and nose shape) or invisible (bio-chemical differences, e.g. Blood group antigens, serum proteins, and molecular traits). Anthropologists have studied these variations for years and have attempted to understand why populations have different traits or same traits with different frequencies.
                                                                <br><br>
                                                                A major goal in studying human diversity is to determine the genetic similarity or dissimilarity between populations. The unique approach that anthropology takes in the study of human diversity is to focus on understanding, studying and explaining variation between human populations by applying evolutionary theory. We try to understand how these differences help humans adapt to varying environments rather than to simply document differences in order to create racial groups.
                                                                <br><br>
                                                                The course provides the basics of population genetics, genetic polymorphism, and the important genetic markers in human populations, and biological consequences and consanguinity.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Violence-title">Introduction to Violence, Conflict and Peace Studies</div>
                                                            <div class="course_title_text" id="Violence-title">
                                                                This is the class for people who want to understand the world and make a difference (and have a life, too!). The primary focus will be on recognizing levels of violence and conflict – from interpersonal, community-level to intrastate, interstate, and global. Within these levels, there is direct violence (physical, observable violence/aggression) and structural violence (in the form of institutional oppression). Many of the insights gained through the course are subject for discussions and possible applications for peacemaking and peacebuilding. My interpretation of peacebuilding is as broad as conflict resolution, to traditional peace movements to a full range of dispute resolution and peacebuilding roles. Also included in this idea are closely related fields like human rights, development, security, social justice and advocacy. I will not use tests. Instead, I will ask you to complete a number of fairly structured assignments that demonstrate that you have mastered key insights from the class. These assignments incorporate a fair amount of flexibility, allowing you to focus on those aspects of the course that you find most valuable. The focus of the course, therefore, is practical theory which provides a basis for adapting to unforeseen circumstances.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Contemporary-title">Advertising and Contemporary Culture</div>
                                                            <div class="course_title_text" id="Contemporary-title">
                                                                Almost all media is commercially driven today. John Dewey suggested, in the 1920s, that we have a paradoxical relationship with media. Large-scale democracy is impossible without modern technologies that facilitate mass communication (and transportation). But what will happen to our democracy when the role of media becomes an unapologetically profit driven one? How will the democracy work if the media looks at citizens as potential target customers for their industry partners, their advertising clients? What is the nexus between media, industry and government?
                                                                <br><br>
                                                                Advertising is part of an extremely sophisticated system of corporate communications that is embedded within and acted upon by contemporary culture. It has the power to shape consciousness and makes firm and definitive statements about culturally ‘normal’ and desirable relationships and behaviour. Advertising thus plays an important role in helping people form ideas about themselves and their social relationships.
                                                                <br><br>
                                                                This course aims at helping students study the phenomenon of corporate communications in general and advertising in specific. It will expose them to different schools of thought related to culture and the specific culture of consumption. It will also explore the power we believe advertising possesses and it’s positive and negative implications on the life we lead.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#IndependentStudy-title">Independent Study</div>
                                                            <div class="course_title_text" id="IndependentStudy-title">
                                                                This Independent Study course enables students in Peace and Conflict Studies to pursue an in-depth exploration of a specialized topic aligned with their academic interests. Designed as a self-directed learning experience, the course emphasizes independent research, critical inquiry, and sustained intellectual engagement under faculty supervision. Students design and implement a semester-long research or field-based project, developing advanced analytical, evaluative, and reflective skills. Through regular consultation with a faculty advisor, learners produce a substantial scholarly or applied work, fostering academic independence, methodological rigor, and interdisciplinary thinking in peace and conflict studies.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#CultureMaking-title">Culture in Making</div>
                                                            <div class="course_title_text" id="CultureMaking-title">
                                                                In this course we will explore intersections between Culture and Power and develop interdisciplinary approaches to analyse them in the post-colonial India. We will focus on cultural practices ranging from cinema and literature to paintings, drama and sculptures to engage with “cultural politics” in post independence India.
                                                                <br><br>
                                                                At a more specific level, we will think of culture as: 1) a whole way of life, and 2) a site of struggle over meaning, representation and identities. We will view cultural practices through the prism of ideas of nation, class, gender and sexuality, caste, communalism and secularism, and globalization in a society like ours.
                                                                <br><br>
                                                                The course will introduce students to the history of Cultural Studies, a range of cultural practices and movements in the post-independence India and their historical socio-political determinants, approaches and concepts in structuralist, post-structuralist, Marxist, Post-Colonial, Feminist theories of culture.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#PopularCulture-title">Popular Culture, Media and Everyday Life</div>
                                                            <div class="course_title_text" id="PopularCulture-title">
                                                                This course examines popular culture and media as key sites through which everyday life, power, and politics are produced and contested. It introduces students to sociological and cultural approaches to understanding media, representation, and identity in Indian and global contexts. Through the study of visual media, cinema, performance traditions, sports, and beauty cultures, the course analyzes constructions of gender, class, sexuality, and nationalism. Using interactive discussions, multimedia resources, and continuous assessment, students develop critical skills to interpret popular culture as a dynamic force shaping social meanings and identities.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Ethnography-title">The History of Anthropological Theory and Changing Ethnography</div>
                                                            <div class="course_title_text" id="Ethnography-title">
                                                                A need to comprehend or engage in writings about the ‘other’ has been a pre-occupation of civilized societies. Beginning with Herodotus ‘the father of History’ during the classical Greek era to the Islamic world with Ibn Khaldun’s The Muqaddimah and some of the most recent works like, Modernity at Large by Arjun Appadurai, Anthropology as a discipline has journeyed through contrasting paradigms with the ‘other’ to ‘ones own community’ or the ‘global culture’. This course will engage in analyzing the original works that have contributed to Anthropological Theory and History from the mid 19th century onwards. The course is not an attempt to look at the people and cultures studied in these texts but the emphasis will be on comprehending the textual data that will reveal the theoretical orientations of the authors who worked on these texts and the emerging history and paradigm shifts in Anthropology.
                                                                <br><br>
                                                                Through anthropologies changing and emerging history, the course will also study the changing trends in the writing of Anthropology through contemporary studies of issues that emerge out of the changing global structure. There is increasing need for the discipline to engage itself with changing times in developed and developing countries for its new identity free of the colonial baggage.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Emerging-title">The Emerging Global Order</div>
                                                            <div class="course_title_text" id="Emerging-title">
                                                                One of the principal concerns of this course to understand how and why political systems develop the way they do. Why do some countries develop into democracies, while others experience various forms of authoritarian rule? How do factors such as class conflict, timing of industrialization, the nature of the elite, and the influence of political culture affect the development of political institutions? This course reviews the literature in various cross-disciplinary fields which includes comparative politics, political economy and sociology focusing on these concerns. While most of the cases are drawn from the histories of the advanced industrial states as well as developing regions some attention is also accorded to countries which are currently deemed "underdeveloped".
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Conflict-title">Conflict, Diplomacy and War</div>
                                                            <div class="course_title_text" id="Conflict-title">
                                                                This course explores conflict, diplomacy, and war as central processes shaping the international system. It introduces key theories of international relations and examines how internal socio-economic and ideological factors influence external relations. Using historical and contemporary case studies, students analyze the causes, types, and resolution of conflicts, the role of diplomacy, and the dynamics of war. Models of conflict resolution and major theoretical perspectives are critically assessed. Through interactive discussions, continuous assessment, and applied research tasks, the course develops analytical skills essential for understanding world politics.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#WorldMusic-title">World Music: Crossroads of Space, Place and Identity</div>
                                                            <div class="course_title_text" id="WorldMusic-title">
                                                                This course explores world music as a dynamic intersection of space, place, culture, and identity in a globalized world. Drawing on anthropological and ethnomusicological perspectives, it examines how music reflects and shapes social histories, power relations, and cultural politics. Through diverse case studies—including colonial brass bands, jazz, hip-hop, diaspora music, and popular media—the course engages debates on globalization, authenticity, appropriation, and identity. Using critical listening, readings, and reflective writing, students develop informed, independent perspectives on music as a cultural practice and a site of social meaning.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#AnthropologyGlobalization-title">Anthropology of Globalization, Development and Consequential Urbanization</div>
                                                            <div class="course_title_text" id="AnthropologyGlobalization-title">
                                                                Globalization was described by Thomas Larson in 2001 as “the process of world shrinkage, of distances getting shorter, things moving closer. It pertains to the increasing ease with which somebody on one side of the world can interact, to mutual benefit, with somebody on the other side of the world.”
                                                                <br><br>
                                                                In its colonial tradition, anthropology studied or understood ‘Development’ as a mechanism through which the differences between the urban, industrial, educated, modern (among other features) ‘West’ and the ‘Other’ was to be obliterated. Recently [it] has taken on the limited meaning of the practice of development agencies, especially in aiming at reducing poverty and the Millennium Development Goals (Thomas, 2004: 1, 2).
                                                                <br><br>
                                                                Current academia, the government agencies and the population who either benefit or struggle with both development and globalization have (each) their own underpinnings.
                                                                <br><br>
                                                                This course in Anthropology with its interdisciplinary and multi-disciplinary perspective with a focus on human society as a participant and recipient in / of these processes aims to study and analyze the causes, effects and controversies surrounding development and globalization. Since the process is too broad to be covered in totality the course will focus and evaluated issues including urbanization, migration and displacement, individual identity, ethnicity and fundamentalism. This course is about the ways that anthropology can contribute to the understanding of "development" and “globalization” and the basic human problems that seem to have evolved from these processes. The aim is to find solutions and address the issues at hand at local and global levels.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Fundamentalism-title">Identity, Ethnicity, Nationality, and Fundamentalism</div>
                                                            <div class="course_title_text" id="Fundamentalism-title">
                                                                Identity is the individual or group notion and expression of affiliations such as language, religion, race, ethnicity, social class and other differences that can be used distinguish people and cultures. Identity formation and transformation is a psychological and social construct with multidisciplinary underpinnings. The individual is the cause or the agent of and for social action consequentially leading to a social product of identities for individual and group.
                                                                <br><br>
                                                                Ethnicity, Nationalism and Fundamentalism all integrate with identities in varied relations that need to be understood for the sustenance of the individual and group cohesion in the contemporary global culture. The need to interact at multiple levels for maximum output in this global economy enforces these multiple identities to engage in dialogue. The course will enable students to identify this exchange in an effort to realize the associated and contentious issues.
                                                                <br><br>
                                                                The concepts discussed have been part of the learning process through the course, though here they will be clearly outlined with the existent controversies that go hand in hand with these established ideas in various disciplines.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Comprehending-title">The Living Past: Comprehending India</div>
                                                            <div class="course_title_text" id="Comprehending-title">
                                                                The course seeks to look at the present modern day India from the perspective of India of the yesteryears. It aims to acquaint the learner with the various interactions between the past and the present in the Indian context as also with the reasons and methods employed by academics in dealing with the same. It seeks to focus on aspects of the Indian past that aren’t dead but continue to persist in the present, shape and influence it.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Analysis-title">Analysis of Current Events</div>
                                                            <div class="course_title_text" id="Analysis-title">
                                                                Current Events is a one-semester course /workshop, structured to give the student an understanding of current issues in areas as wide as sports, politics, culture, history, science, economics, finance etc.
                                                                <br><br>
                                                                In this course a cultural or sporting event could be analyzed along with political, financial and other issues. We will make an attempt to look beyond the obvious and develop critical understanding.
                                                                <br><br>
                                                                The course emphasizes research done by the student covering topics that hold meaning in today’s life.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Revisiting-title">Revisiting the City: Urbanization, Urban Aspiration and Urban Reality</div>
                                                            <div class="course_title_text" id="Revisiting-title">
                                                                This course offers a sociological exploration of urbanization through the lens of Pune city, linking local experiences to global urban processes. It examines the historical trajectory of Pune’s urban growth, diverse urban aspirations, and everyday urban realities shaped by consumption, commodification, and inequality. Key themes include spatial segregation, social exclusion, migration, poverty, and the formation of urban identities. Through classroom discussions, visual media, and field research, students develop a grounded understanding of urban culture and critically compare Pune with global cities to analyze contemporary urban transformations.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#HumanGenetics-title">Introduction to Human Genetics</div>
                                                            <div class="course_title_text" id="HumanGenetics-title">
                                                                This course in Genetics (minor) attempts to address some of the basic and fundamental issues related to field of genetics. It further narrows the focus of genetics to deal with concepts in Human Genetics covering areas from basics like DNA, inheritance and the occurrence of mutations, mechanisms that lead to uniqueness in humans, to understanding the prevalence of genetic disease in humans, that modes of passing through generations and our understanding of how they need to be tackled on the social and psychological front through Genetic Counseling. The course also includes a short understanding of where the subject of genetics is applied in our everyday lives and how it will affect the way we look at our lifestyles in the future.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#Illbeing-title">The Illbeing - Disease, Health and Socio-politics</div>
                                                            <div class="course_title_text" id="Illbeing-title">
                                                                This course introduces the biological foundations of physical health for students from a humanities and social sciences background. It explains health, illness, and disease in accessible terms, encouraging informed perspectives on the body and healthcare choices. Beginning with basic anatomy and physiology, the course examines major categories of disease, including infectious, genetic, immunological, and lifestyle-related conditions. It also explores prevention and treatment through different systems of medical care such as allopathy, homeopathy, and alternative medicine. The course concludes with a discussion on vaccines, antibiotics, and emerging challenges like antibiotic resistance.
                                                            </div>
                                                        </div>
                                                        <div class="course_title_list">
                                                            <div class="course_title" data-bs-toggle="offcanvas" data-bs-target="#UrbanStudies-title">Urban Studies: Cross-Disciplinary Perspectives</div>
                                                            <div class="course_title_text" id="UrbanStudies-title">
                                                                This course offers a cross-disciplinary exploration of urbanization, situating Indian cities within historical, theoretical, and global frameworks. Drawing on history, sociology, anthropology, and geography, it traces the origins and evolution of urban processes in India while engaging with key Western theories of the city. Students examine classical and contemporary perspectives on urbanism, urban planning, and governance, with particular attention to colonial, post-independence, and post-liberalization contexts. Through readings, discussions, media, and field-based learning, the course develops a nuanced understanding of cities as dynamic social, cultural, and political spaces.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- COURSE-TITLE-BOX-END -->

                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Applied">Applied Environmental and Sustainability Science</div>
                                            <div class="inner_courses_content" id="Applied">
                                                <span class="close_btn">x</span>
                                                Applied Environmental and Sustainability Science is a multidisciplinary field that examines interactions between natural systems, human societies, technology, and development. The curriculum equips students with conceptual, analytical, and technical skills to understand environmental change, sustainability challenges, and resource governance at multiple scales. Students will study ten major papers covering earth systems, climate and water systems, sustainable development, emerging green technology and planning, environmental justice, and environmental law and policy alongside hands-on training in data analytics, laboratory measurements, GIS, remote sensing. Emphasis is placed on resource management, environmental impact assessment, ESG frameworks, urban planning, and business sustainability. Integrating science with social and economic perspectives, the programme prepares graduates for real-world environmental problem-solving.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Business">Business Studies</div>
                                            <div class="inner_courses_content" id="Business">
                                                <span class="close_btn">x</span>
                                                Business Studies provide a comprehensive foundation in the legal, financial, human, operational, and strategic dimensions of organizations. Drawing from business law, management principles, finance, marketing, human resource management, and operations, the curriculum equips students with analytical, decision-making, and problem-solving skills essential for contemporary business environments. Students gain an understanding of legal frameworks governing business, financial decision-making, market analysis, production systems, and workforce management. Emphasis is placed on practical application through case studies, simulations, projects, and industry exposure. The programme integrates theoretical knowledge with real-world business practices, preparing students for managerial roles, entrepreneurship, and further professional studies
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Computer">Computer Studies</div>
                                            <div class="inner_courses_content" id="Computer">
                                                <span class="close_btn">x</span>
                                                The Computer Studies curriculum offers a strong foundation in computing concepts, programming, systems, and applications by integrating theory with practice. It covers programming paradigms using Java, Python, and JavaScript, along with core areas such as data structures, algorithms, databases, software engineering, computer systems, and networks. Advanced topics include data warehousing, data mining, theory of computation, and cloud computing. Emphasis on logical thinking, algorithmic problem-solving, and system design is reinforced through labs, projects, case studies, and research-oriented applications, preparing students for diverse technology-driven careers.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Economics">Economics</div>
                                            <div class="inner_courses_content" id="Economics">
                                                <span class="close_btn">x</span>
                                                The Economics major offers a rigorous and comprehensive understanding of economic theory, quantitative methods, and real-world policy applications. The curriculum covers core areas such as microeconomics, macroeconomics, public economics, international economics, development economics, industrial economics, money and banking, and financial systems. Strong emphasis is placed on quantitative analysis through business statistics, econometrics, and mathematical methods for economics, enabling students to analyze data and test economic hypotheses. Through case studies, empirical analysis, policy evaluation, and research-oriented learning, students develop analytical reasoning, problem-solving skills, and an informed perspective on contemporary economic issues at national and global levels.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Education">Education</div>
                                            <div class="inner_courses_content" id="Education">
                                                <span class="close_btn">x</span>
                                                Education as an Interdisciplinary Discipline examines education as a social, philosophical, political, and ethical enterprise situated within broader historical and contemporary contexts. The curriculum enables students to critically analyze education systems, pedagogical practices, policy frameworks, and governance structures at local, national, and global levels. Drawing on philosophy, sociology, economics, and public policy, students engage with debates on equity, access, curriculum, assessment, and the future of learning. Emphasis is placed on reflective inquiry, policy analysis, and long-term perspectives, preparing learners to thoughtfully engage with educational challenges and contribute to socially just and context-sensitive educational practices.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#English">English</div>
                                            <div class="inner_courses_content" id="English">
                                                <span class="close_btn">x</span>
                                                English as a Major/MInor Discipline offers a comprehensive study of literature, language, and critical thought across historical periods, genres, and cultural contexts. The curriculum spans British, American, Indian, and global literatures, covering Romantic, Victorian, Modern, Postcolonial, and Contemporary traditions alongside popular literature and genre studies. Students engage deeply with poetry, fiction, drama, and prose, supported by rigorous training in literary criticism, theory, linguistics, and cultural studies. Emphasis is placed on close reading, historical contextualization, comparative analysis, and critical writing. Through interdisciplinary perspectives and diverse texts, the programme develops interpretive, analytical, and communicative skills essential for academic, creative, and professional pursuits.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#History">History</div>
                                            <div class="inner_courses_content" id="History">
                                                <span class="close_btn">x</span>
                                                The History discipline offers a broad, comparative, and critical understanding of the human past across regions, cultures, and time periods. The curriculum integrates global, regional, and thematic histories, covering ancient, medieval, and modern worlds, including India, Africa, the Americas, West Asia, East Asia, and Oceania. Courses emphasize connected histories, historiography, geography, archaeology, and textual analysis, enabling students to examine how ideas, institutions, economies, and cultures interact across space and time. Through engagement with diverse sources—texts, material culture, visual media, and popular culture—students develop historical thinking, analytical rigor, and interpretive skills essential for research, policy, education, and interdisciplinary careers.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#International">International Relations</div>
                                            <div class="inner_courses_content" id="International">
                                                <span class="close_btn">x</span>
                                                The International Relations discipline offers a comprehensive and multidisciplinary understanding of global politics, diplomacy, conflict, and cooperation. The curriculum introduces students to core theories, concepts, and approaches in international relations, international law, political economy, and comparative politics. Through detailed case studies, it examines war, peace, leadership, ideology, foreign policy, global governance, security, and the role of armed forces. Special emphasis is placed on India’s foreign policy, contemporary global issues, globalization, and power dynamics among major states. Interactive pedagogy, policy analysis, and research-based assessments enable students to develop critical thinking, analytical skills, and informed perspectives essential for careers in diplomacy, policy research, international organizations, and strategic studies.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Mathematics">Mathematics & Statistics</div>
                                            <div class="inner_courses_content" id="Mathematics">
                                                <span class="close_btn">x</span>
                                                The Mathematics and Statistics discipline offers a rigorous and structured foundation in quantitative reasoning, logical thinking, and analytical problem-solving. The curriculum spans core areas such as calculus, real analysis, linear algebra, discrete mathematics, probability, statistical inference, operations research, and computational methods. Students engage with both pure and applied perspectives, learning to model real-world problems, analyze data, and interpret results across disciplines such as economics, management, social sciences, and technology. Emphasis on proofs, modelling, optimization, and software-based analysis is reinforced through tutorials, projects, and continuous assessment. The programme equips learners with strong quantitative skills for research, analytics, finance, data science, and advanced academic pursuits.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Media">Media Studies</div>
                                            <div class="inner_courses_content" id="Media">
                                                <span class="close_btn">x</span>
                                                The Media Studies program at SSLA offers a comprehensive and hands-on approach to understanding the media landscape. Spanning journalism, advertising, PR, events, audio-visual production, film, and consumer behavior, the curriculum blends theory with practical application. Students learn content creation, media management, and communication strategies while developing critical thinking, research skills, and audience analysis. The program emphasizes experiential learning through projects, case studies, and media production, preparing students to navigate traditional and digital platforms. With exposure to industry practices, ethical frameworks, and media laws, graduates gain the expertise to contribute creatively and strategically to the dynamic media and communication sector.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Philosophy">Philosophy</div>
                                            <div class="inner_courses_content" id="Philosophy">
                                                <span class="close_btn">x</span>
                                                The Philosophy Major-Minor program at SSLA offers a comprehensive exploration of philosophical thought from ancient to contemporary times. Students engage with Western and Indian philosophy, covering metaphysics, epistemology, ethics, logic, and philosophy of science. Core courses examine foundational thinkers such as Plato, Aristotle, Descartes, Kant, and modern Indian philosophers like Gandhi and Ambedkar. Advanced electives introduce analytic philosophy, phenomenology, existentialism, and pragmatism, fostering critical analysis of ideas in historical and social contexts. Through lectures, discussions, presentations, and essays, students develop rigorous reasoning, ethical reflection, and an understanding of philosophy’s enduring relevance to contemporary intellectual and societal issues.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Political">Political Science & Public Policy</div>
                                            <div class="inner_courses_content" id="Political">
                                                <span class="close_btn">x</span>
                                                The Political Science curriculum at Symbiosis School for Liberal Arts offers a comprehensive understanding of governance, policy, and global affairs. Courses like Introduction to Public Administration and Public Policy explore administrative theories, policy formulation, and evaluation. Global Justice examines ethical and philosophical debates in international contexts, while Peace & Conflict Studies focuses on political philosophy, Indian and Western traditions, and conflict resolution. Catch 22 in Politics and Comparative Politics engage students with real-world dilemmas, ethics, and the functioning of contemporary governments. The pedagogy emphasizes interactive discussions, research, presentations, and critical analyses, preparing students for nuanced understanding of politics globally.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Psychology">Psychology</div>
                                            <div class="inner_courses_content" id="Psychology">
                                                <span class="close_btn">x</span>
                                                The psychology major at Symbiosis School for Liberal Arts offers an in-depth exploration of human behavior, cognition, and mental processes across ten specialized courses. Students engage with cognitive, biological, organizational, clinical, and counseling psychology, alongside contemporary issues shaping the field. The curriculum combines interactive lectures, laboratory experiments, case studies, and seminar-style discussions to encourage critical thinking, practical application, and research skills. Emphasis is placed on understanding real-world behavior, mental health, and workplace dynamics, while fostering analytical and therapeutic competencies. Assessments include continuous evaluation and end-semester exams, ensuring both theoretical understanding and applied proficiency in psychological practice.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing">
                                            <div class="our_course_headingbox" data-bs-toggle="offcanvas" data-bs-target="#Sociology">Sociology</div>
                                            <div class="inner_courses_content" id="Sociology">
                                                <span class="close_btn">x</span>
                                                The Sociology curriculum at Symbiosis School for Liberal Arts offers a comprehensive exploration of classical and contemporary sociological theories, social inequalities, globalization, and critical discourses. Beginning with foundational thinkers like Marx, Durkheim, and Weber, students examine concepts such as class, caste, gender, and colonialism, linking theory to contemporary Indian society. Advanced courses engage with post-Marxism, reflexive sociology, and global sociological perspectives, including the social impacts of globalization. Pedagogy emphasizes interactive discussions, multimedia resources, and field research, fostering critical thinking. Students develop analytical skills to understand societal structures, evaluate inequalities, and propose informed solutions, bridging theory with practical relevance.
                                            </div>                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox">

                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Integrated">
                                            <div class="our_course_headingbox">Integrated Biology </div>
                                            <div class="inner_courses_content" id="Integrated">
                                                <span class="close_btn">x</span>
                                                <b>The Integrated Biology</b> Minor at SSLA offers a dynamic, interdisciplinary approach to the Life Sciences, moving beyond traditional boundaries to sit within a liberal arts framework. The program is designed for students who want to understand the biosphere through integrations across the Humanities and the other Natural, Social & Formal sciences.
                                                <br><br>
                                                <b>Core Curriculum & Pedagogy</b> The minor comprises six thematically coherent papers (4 credits each) that explore biological phenomena across scales of time, space and complexity. The program emphasizes conceptual- and inquiry-based learning, Students are trained not only in core biological concepts but also in effective science communication and critical thinking. The pedagogy of the course is integrative and one will be expected to make connections across disciplines outside of the biosciences.
                                                <br><br>
                                                <b>Who Should Enroll?</b> While highly beneficial for Psychology and Anthropology majors, the program actively encourages students from disparate fields like Philosophy, Literature, Film and Media Studies and Political Science & Public Policy. 
                                                <br><br>
                                                <b>Future Prospects</b> Graduates are prepared for diverse pathways, ranging from conventional Master’s programs in Genetics or Microbiology to interdisciplinary careers in Neuroscience, Science Media, and Public Health Policy. Ultimately, the program produces well-rounded thinkers capable of applying biological insights to complex global challenges.
                                            </div>                                            
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#FilmStudies">
                                            <div class="our_course_headingbox">Film Studies</div>
                                            <div class="inner_courses_content" id="FilmStudies">
                                                <span class="close_btn">x</span>
                                                The Film Studies curriculum offers a comprehensive exploration of cinema as an art form, cultural practice, and technological medium. Beginning with pre-cinematic traditions and silent cinema, the programme traces the historical evolution of film across global contexts. Students engage with key movements, theories of realism, narrative structures, and the cinematic apparatus, examining how image, sound, technology, and ideology shape meaning. Through the study of fiction, documentary, and non-fiction cinema, learners analyze representation, politics, and aesthetics. Advanced courses emphasize global auteurs and contemporary cinema, enabling students to synthesize cinema as a civilizational, artistic, and critical practice.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Law">
                                            <div class="our_course_headingbox">Law</div>
                                            <div class="inner_courses_content" id="Law">
                                                <span class="close_btn">x</span>
                                                The Law curriculum provides a comprehensive understanding of legal systems, institutions, and justice mechanisms through an integrated study of public law, private law, corporate regulation, human rights, and criminal justice. Students examine constitutional principles, legislative and administrative processes, contractual obligations, corporate governance, and regulatory frameworks. The programme emphasizes law as an instrument of social change, focusing on rights, duties, accountability, and state intervention. Courses on human rights and criminal justice cultivate sensitivity toward vulnerable groups, crime, and justice delivery systems. Through case studies, moot courts, opinion writing, and critical debates, students develop analytical, ethical, and practical legal skills essential for informed citizenship and professional engagement.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#ConflictStudies">
                                            <div class="our_course_headingbox">Peace & Conflict Studies</div>
                                            <div class="inner_courses_content" id="ConflictStudies">
                                                <span class="close_btn">x</span>
                                                The Peace and Conflict Studies curriculum offers an interdisciplinary understanding of violence, inequality, migration, gender, and global justice through anthropological, sociological, legal, and political perspectives. Students examine direct and structural violence, social inequalities of class, caste, race, gender, and ethnicity, and the links between migration, conflict, and peacebuilding. The programme integrates theories of conflict resolution, human rights, gender justice, and global citizenship, emphasizing practical approaches to peacemaking and policy formation. Through case studies, simulations, field research, independent study, and critical analysis, students develop analytical, ethical, and research skills essential for addressing contemporary conflicts and promoting sustainable peace at local and global levels.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#DanceTheatreMusic">
                                            <div class="our_course_headingbox">Performing Arts: Dance, Theatre & Music</div>
                                            <div class="inner_courses_content" id="DanceTheatreMusic">
                                                <span class="close_btn">x</span>
                                                he Performing Arts curriculum offers a holistic, practice-led engagement with theatre, music, and dance as creative, cultural, and critical disciplines. Students develop foundational and advanced skills in performance, voice, movement, musical analysis, choreography, and composition while exploring Western and Indian traditions. The programme integrates studio practice with theoretical inquiry, examining performance through historical, social, political, and aesthetic lenses. Courses emphasize collaboration, creativity, and critical reflection through ensemble work, solo projects, and research-led practice. By engaging with diverse forms—from classical and folk traditions to modern and global expressions—students gain a comprehensive understanding of the performing arts as dynamic mediums of expression, identity, and cultural dialogue.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Theatre">
                                            <div class="our_course_headingbox">Performing Arts: Theatre</div>
                                            <div class="inner_courses_content" id="Theatre">
                                                <span class="close_btn">x</span>
                                                The Performing Arts curriculum offers an intensive, practice-led engagement with theatre as a creative, analytical, and collaborative art form. Students develop core skills in voice, speech, movement, improvisation, text analysis, and playwriting while exploring acting techniques across Western and Indian dramatic traditions. The programme emphasizes the actor as creator, integrating devising processes, ensemble work, and performance-making through solo and group projects. Courses examine dramatic theory, narrative structures, character development, and stagecraft, including design and aesthetics. Through studio-based learning, research, and performance, students gain artistic discipline, creative confidence, and a holistic understanding of contemporary theatre-making.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Music">
                                            <div class="our_course_headingbox">Performing Arts: Music</div>
                                            <div class="inner_courses_content" id="Music">
                                                <span class="close_btn">x</span>
                                                The Performing Arts (Music) curriculum offers a comprehensive, interdisciplinary study of music as sound, culture, history, and social practice. Students engage with global musical systems by analyzing rhythm, melody, harmony, form, timbre, and instrumentation across diverse traditions. Advanced courses examine American popular music, civil rights movements, Asian American and South Asian musical cultures, and world music through lenses of identity, power, migration, race, gender, and politics. Emphasizing critical listening, cultural analysis, and historical context, the programme integrates theory with practice to foster informed, reflective, and socially engaged understandings of music in local, transnational, and global contexts.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Dance">
                                            <div class="our_course_headingbox">Performing Arts: Dance</div>
                                            <div class="inner_courses_content" id="Dance">
                                                <span class="close_btn">x</span>
                                                The Performing Arts (Dance) curriculum offers a practice-based and theoretically informed engagement with diverse dance traditions from India and the world. Students study Western ballroom and Latin American dances alongside Indian folk and classical forms such as Bharatanatyam and Odissi, developing technical proficiency, musicality, and choreographic skills. The programme also explores creative and modern expressions through Uday Shankar’s narrative dance, situating movement within historical, cultural, social, and spiritual contexts. Emphasizing performance, choreography, and critical appreciation, the courses integrate embodied practice with academic inquiry, enabling students to understand dance as a dynamic medium of expression, identity, and cultural continuity.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Physics">
                                            <div class="our_course_headingbox">Physics</div>
                                            <div class="inner_courses_content" id="Physics">
                                                <span class="close_btn">x</span>
                                                The Physics curriculum offers a rigorous and conceptually integrated study of the fundamental laws governing nature, spanning classical mechanics, waves, electromagnetism, quantum mechanics, thermal and statistical physics, and solid-state physics. Students develop strong analytical and mathematical skills while exploring motion, energy, fields, waves, and matter from macroscopic to microscopic scales. Advanced courses examine quantum behavior, thermodynamic systems, and the physics of solids, linking theory to modern technologies such as semiconductors, superconductors, quantum computing, and electronic devices. Emphasizing problem-solving, experimentation, computation, and research-based learning, the programme fosters critical thinking and prepares students to engage with contemporary scientific and technological challenges.
                                            </div>
                                        </div>
                                        <div class="inner_course_listing " data-bs-toggle="offcanvas" data-bs-target="#Women">
                                            <div class="our_course_headingbox">Women & Gender Studies</div>
                                            <div class="inner_courses_content" id="Women">
                                                <span class="close_btn">x</span>
                                                The Women and Gender Studies curriculum offers a critical, interdisciplinary exploration of gender, power, and social justice across historical, cultural, political, and economic contexts. Students engage with feminist theories, women’s movements, and key debates on patriarchy, caste, class, sexuality, labour, and representation, with a strong focus on India within global frameworks. Courses examine institutions such as family, work, law, media, and culture, analyzing how gendered identities are constructed, contested, and transformed. Through theory, case studies, visual media, fieldwork, and discussion-based pedagogy, the programme fosters intersectional thinking, critical analysis, and socially engaged scholarship.
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 1</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6114</td>
                                                        <td>
                                                            Writing across Genre: Freeing Creativity
                                                        </td>
                                                        <td>
                                                            Writing across Genre: Freeing Creativity is an experiential writing course that places the student at the center of creative inquiry. Designed to immerse learners in writing, reading, and thinking across genres, the course encourages exploration of self, language, memory, body, and the world through sustained practice and reflection. Students experiment with forms, develop their individual voice, and engage deeply with contemporary poetry, essays, and creative texts. Emphasis is placed on attention, play, difficulty, and creative feedback within a respectful classroom space. Through journals, prompts, readings, and portfolio work, the course nurtures curiosity, confidence, and awareness of one’s creative process.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6556</td>
                                                        <td>
                                                            History of Ideas
                                                        </td>
                                                        <td>
                                                            History of Ideas introduces students to foundational concepts that have shaped human thought, society, and institutions across time. Drawing from philosophy, science, politics, and social theory, the course traces the evolution of ideas from myth and religion to rationality, modernity, and postmodernism. Key themes include scientific enquiry, humanism, nationalism, capitalism and socialism, colonialism and anti-colonial movements, feminism, environmentalism, and human rights. Through historical examples, interdisciplinary readings, and critical discussion, students develop the ability to think analytically about ideas and their impact on social structures. The course equips learners with a shared intellectual foundation essential for critical engagement across disciplines in the liberal arts.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T1199</td>
                                                        <td>
                                                            Legal Awareness
                                                        </td>
                                                        <td>
                                                            Legal Awareness is an introductory course designed to familiarize undergraduate students with fundamental legal concepts and processes relevant to contemporary Indian society. The course provides an overview of law as an instrument of social change, covering essential areas such as the Constitution of India, contracts, criminal law, consumer protection, cyber law, intellectual property, and rights-based legislation. Emphasis is placed on understanding everyday legal issues, including documentation, public rights, and remedies available to citizens. Through lectures, case discussions, opinion writing, court visits, and documentary screenings, the course aims to build legal literacy, critical thinking, and practical awareness among students for informed civic engagement.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3217</td>
                                                        <td>
                                                            Fundamentals of IT
                                                        </td>
                                                        <td>
                                                            Fundamentals of IT introduces students to essential concepts and practical skills in computing, tailored to support their academic and professional development in law and other disciplines. The course covers computer basics, operating systems, file management, internet browsing, and use of electronic legal resources. Students gain hands-on experience in creating presentations, word processing, and spreadsheets, while also learning principles of computer security, digital signatures, and ethical computing. Through interactive lectures, projects, and class activities, students develop confidence in using technology for research, documentation, and communication, ensuring they are equipped to navigate the digital landscape effectively and responsibly.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3827</td>
                                                        <td>
                                                            Essentials of Information Technology
                                                        </td>
                                                        <td>
                                                            Essentials of Information Technology (T3827) is a foundational course designed to equip students with practical and conceptual knowledge of modern computing. The course introduces computer systems, operating systems, file management, web browsing, and essential productivity tools such as Word and Excel. It also builds awareness of computer security, cyber ethics, and emerging areas like Artificial Intelligence, Cloud Computing, and the Internet of Things. Emphasis is placed on developing basic coding skills through algorithms and flowcharts. Through lectures, demonstrations, and practical activities, the course enhances students’ confidence, technical competence, and readiness for academic and professional environments in an ever-evolving digital world.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TM2005</td>
                                                        <td>
                                                            Environmental Studies: Our Common Earth
                                                        </td>
                                                        <td>
                                                            Environmental Studies: Our Common Earth introduces students to the ecological, social, and developmental dimensions of environmental issues. The course examines natural resources, ecosystems, biodiversity, energy, pollution, climate change, and disaster management, while emphasizing sustainable development and environmental governance. Drawing from multiple disciplines, it explores the relationship between environment and society, including issues of livelihoods, urbanization, gender, caste, and poverty. Through classroom learning, case studies, field visits, and practical analysis, students develop environmental awareness, civic responsibility, and an understanding of individual and collective roles in environmental conservation. The course encourages informed engagement with sustainability challenges at local, national, and global levels.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 2</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6560</td>
                                                        <td>
                                                            RM I: Introduction to Research
                                                        </td>
                                                        <td>
                                                            RM I: Introduction to Research is a foundational course designed to introduce students to the principles and practices of research in multidiclinary perspectives i.e. the humanities, social sciences, and natural sciences. The course familiarizes learners with the research philosphy and process, beginning from identifying research problems,reviewing literature, formulating research questions and objectives, hypotheses. It covers both quantitative and qualitative approaches, while emphasizing ethical considerations in research. Students are also trained in research proposal writing and the use of standard academic citation style such as APA and MLA. Overall, the course prepares students for advanced research methodology courses by building essential conceptual and practical skills.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4077</td>
                                                        <td>
                                                            Explorations in Natural Sciences
                                                        </td>
                                                        <td>
                                                            Explorations in Natural Sciences introduces students to an integrated understanding of the natural world through concepts drawn from physics, chemistry, biology, and systems science. The course emphasizes the scientific method, evidence-based reasoning, and the development of scientific temper through hands-on investigations and discussion. Using themes such as colour, music, DNA, materials, and complex systems, students explore how scientific models explain natural phenomena across scales. By linking ideas from multiple disciplines and examining the relationship between science and society, the course fosters curiosity, critical inquiry, and an appreciation of how imagination and reasoning drive scientific discovery.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T2974</td>
                                                        <td>
                                                            Quantitative Reasoning 1: Mathematics and Statistics
                                                        </td>
                                                        <td>
                                                            Quantitative Reasoning I: Mathematics and Statistics introduces students to fundamental mathematical and statistical concepts essential for analytical thinking and everyday decision-making. The course emphasizes proportional reasoning, equations, commercial mathematics, and data interpretation, enabling students to work confidently with numbers in real-life contexts. Students learn key statistical tools such as measures of central tendency and dispersion, correlation, probability, and curve-fitting to analyze and interpret data. By integrating mathematical reasoning with practical applications in finance, management, and social contexts, the course develops logical, critical, and quantitative reasoning skills necessary for academic, professional, and civic life.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6731</td>
                                                        <td>
                                                            Rhetoric and Critical Writing
                                                        </td>
                                                        <td>
                                                            Rhetoric and Critical Writing is a skill-based course that develops students’ abilities in critical thinking, reading, and effective written communication. The course introduces key theories and practices of critical reasoning and rhetoric, enabling students to analyze texts, arguments, and ideas with clarity and precision. Emphasis is placed on the mechanics, structure, and processes of effective and academic writing, including organization, argument development, referencing, and plagiarism awareness. Through continuous practice, feedback, and discussion, students learn to communicate ideas persuasively and responsibly across academic contexts, strengthening their analytical, interpretive, and expressive skills.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6212</td>
                                                        <td>
                                                            Understanding India: What is India? Unravelling the Mystery
                                                        </td>
                                                        <td>
                                                            Understanding India: What is India? Unraveling the Mystery explores the complex and layered identity of India through an interdisciplinary approach combining history, archaeology, literature, and cultural studies. The course examines how India has perceived itself across time, how its identity was shaped by imperialism, nationalism, and post-1990 reinterpretations, and how diverse peoples and traditions contributed to its cultural fabric. Key themes include the epics Ramayana and Mahabharata, the historical interaction between Islam and India, and socio-economic structures such as caste, tribe, and gender. Through critical discussion and evidence-based inquiry, students gain a nuanced understanding of India’s diversity, continuity, and evolving national identity.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>SMC001</td>
                                                        <td>
                                                            Vasudhaiva Kutumbakam
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4788</td>
                                                        <td>
                                                            Health and Wellness Module I
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD1</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 3</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6868</td>
                                                        <td>
                                                            Introduction to Philosophy
                                                        </td>
                                                        <td>
                                                            Introduction to Philosophy offers students a foundational engagement with philosophical inquiry through key areas such as logic, epistemology, ontology, metaphysics, and ethics. The course introduces both Western and Indian philosophical traditions, encouraging comparative perspectives on enduring questions concerning knowledge, reality, self, freedom, and morality. Through the study of logical reasoning, theories of knowledge, conceptions of being, and ethical frameworks, students develop critical and reflective thinking skills. Emphasis is placed on applying philosophical methods and ideas to everyday life and contemporary issues. Through interactive discussions and multimedia-supported learning, the course equips students with analytical tools to thoughtfully examine ideas, arguments, and values across disciplines.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6843</td>
                                                        <td>
                                                            Multicultural Worldviews
                                                        </td>
                                                        <td>
                                                            Multicultural Worldviews is an interdisciplinary course that explores the origins, meanings, and contemporary expressions of diversity and multiculturalism in a globalized world. Drawing from psychology, sociology, history, political theory, and cultural studies, the course examines how difference is socially constructed and shaped by power, privilege, and identity. Students engage with themes such as group behavior, gender, culture, media, workspaces, and ecology, while critically analyzing global discourses like Orientalism and the future of multiculturalism. Through interactive discussions, case studies, and applied projects, the course equips students with conceptual frameworks to understand and respond thoughtfully to diverse lived experiences at local and global levels.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>THM6152</td>
                                                        <td>
                                                            Humanity and Big History: Our Challenge for Survival
                                                        </td>
                                                        <td>
                                                            Humanity and Big History: Our Challenge for Survival offers an interdisciplinary exploration of human existence from the origins of the universe to possible future scenarios. Integrating insights from natural sciences, social sciences, and the humanities, the course traces key milestones such as the Big Bang, the evolution of life and humans, the rise of agriculture, civilizations, industrialization, and global conflicts. It also examines imperialism, ecological change, climate crisis, and resource challenges shaping the contemporary world. Through discussions, fieldwork, creative projects, and scenario-building, students develop a comparative and realistic understanding of humanity’s place in the cosmos and the critical choices that will shape our collective future.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TH4789</td>
                                                        <td>
                                                            Health and Wellness Module II
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD2</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 4</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T2857</td>
                                                        <td>
                                                            Quantitative Reasoning 2: Finance
                                                        </td>
                                                        <td>
                                                            Quantitative Reasoning 2: Finance introduces students to the logic of financial decision-making through everyday life. While rooted in the language of finance, the course is oriented toward personal financial thinking rather than corporate balance sheets. It helps students understand how money behaves over time and how individuals can make better choices about saving, spending, borrowing, and investing.
                                                            <br>
                                                            Beginning with the nature and objectives of financial management, the course builds an intuitive understanding of risk and return, opportunity cost, and trade-offs. Students learn to evaluate real-life choices using the time value of money, compounding and discounting, and simple growth models. Tools such as present value, future value, and capital budgeting are taught as ways to reason about education loans, EMIs, long-term savings, and financial goals.
                                                            <br>
                                                            Concepts like sources of finance, cost of capital, and leverage are translated into personal contexts, while working capital is reframed as budgeting and cash-flow management for individuals and households.
                                                            <br>
                                                            By the end of the course, students gain numerical confidence and a practical framework for financial thinking. More than a finance paper, it functions as a life skill, enabling students to manage their own money with clarity and foresight.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MD3</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 5</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6803</td>
                                                        <td>
                                                            Research Methodology II: Overview of Research Methods and Analysis
                                                        </td>
                                                        <td>
                                                            Research Methodology II: Overview of Research Methods and Analysis builds on foundational research skills by introducing students to a wide range of qualitative, quantitative, and mixed research methods. The course examines research design, data collection, analysis, and interpretation, emphasizing the strengths and limitations of different research methods. Students engage with various methods such as interviews, ethnography, case studies, surveys, experiments, content analysis, and discourse analysis. Through practical exercises and assignments, the course also strengthens academic writing and reporting skills. Overall, it equips students with a holistic and critical understanding of research methods essential for conducting rigorous and ethically grounded research in the Humanities, Social Sciences, and Natural Sciences.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T8000</td>
                                                        <td>
                                                            Service Learning (Community Outreach Programme)
                                                        </td>
                                                        <td>
                                                            The Community Outreach Programme (COP) is designed to encourage meaningful student engagement with issues of social justice and community development through experiential learning and active participation. At its core, the programme seeks to cultivate socially sensitive, ethically grounded, and critically aware individuals who are capable of engaging responsibly with the communities around them and contributing positively to society at large. By creating opportunities for direct interaction with diverse social contexts and challenges, the programme aims to strengthen students’ understanding of social realities and foster a deeper sense of civic responsibility. Students are expected to develop a greater awareness of the relationship between academic learning and social responsibility through the COP. It is a mandatory component structured as a full-time project to be completed during the first summer break, providing students with an immersive experience that integrates learning with meaningful community engagement.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 6</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6115</td>
                                                        <td>
                                                            Short Stories from around the World
                                                        </td>
                                                        <td>
                                                            Short Stories from around the World offers students an in-depth engagement with short fiction from diverse literary traditions and cultural contexts. The course examines selected stories by various writers to understand the genre’s distinctive features, narrative techniques, tone, and use of language. Emphasis is placed on reading texts within their social, political, and historical contexts while engaging with relevant literary theories and critical debates. Students actively discuss and compare texts, explore film adaptations of selected stories, and develop informed interpretations. Through close reading, discussion, and essay writing, the course strengthens critical thinking, comparative analysis, and expressive skills in literary studies.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 7</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6363</td>
                                                        <td>
                                                            Current Economic and Business Analysis
                                                        </td>
                                                        <td>
                                                            Current Economic and Business Analysis is designed for all students, regardless of discipline, to help them make sense of the economy they live in. The course introduces the basic structure of the Indian and global economy and familiarises students with the economic language that appears daily in news, policy debates, and public conversations.
                                                            <br>
                                                            Students learn to understand terms such as GDP, inflation, fiscal deficit, interest rates, exchange rates, and investment climate, and what these actually mean for jobs, prices, growth, and opportunity. Using real data, reports, and current events, the course builds the ability to read newspapers, budgets, and economic commentary with clarity rather than confusion.
                                                            <br>
                                                            By moving from broad macroeconomic trends to sectors, firms, and public institutions, the course helps students see how abstract numbers connect to real lives and real choices. Its goal is not to train specialists, but to create economically literate citizens who can interpret the world around them, ask informed questions, and engage thoughtfully with economic issues in everyday life. 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6904</td>
                                                        <td>
                                                            Summer Internship
                                                        </td>
                                                        <td>
                                                            The Summer Internship is a mandatory component of the curriculum and forms an important part of the programme’s emphasis on Experiential Learning. It is designed to provide students with practical exposure to professional environments and enable them to bridge the gap between academic knowledge and real-world application. Through direct engagement with industry, organisations, institutions, or relevant professional settings, the internship offers students an opportunity to gain insight into potential career pathways and develop a clearer understanding of the practical dimensions of their chosen fields of study.  The internship experience encourages students to engage with workplace practices, understand organisational structures and responsibilities, and gain preliminary exposure to the expectations and demands of professional environments. By combining practical experience with skill development, the Summer Internship prepares students for future academic and career opportunities and contributes to their development as competent and responsible professionals.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 text-center" style="font-size: 26px;font-family: 'Roboto-Bold', sans-serif;">Semester 8</div>
                                        <div class="col-lg-12"></div>
                                    </div>
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
                                                        <td>T6804</td>
                                                        <td>
                                                            Final Year Seminar Paper
                                                        </td>
                                                        <td>
                                                            The Final Year Seminar Paper is a 4-credit course, designed to provide students with an opportunity to engage in independent and academically rigorous research. The course aims to cultivate critical thinking, analytical abilities, and scholarly writing skills by encouraging students to undertake methodologically sound research on interdisciplinary themes that draw from multiple areas of study. 
                                                            <br>
                                                            Throughout the process, each student is guided and mentored by a faculty member who provides academic support in selecting the research topic, developing an appropriate methodology, and refining the overall research and writing process. The mentorship enables students to gain hands-on experience in conducting systematic research and adhering to academic standards. It also serves to develop research competencies that are valuable for higher studies, professional pursuits, and future scholarly work.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6804</td>
                                                        <td>
                                                            Research Project: Proposal Writing
                                                        </td>
                                                        <td>
                                                            Building upon the knowledge, research competencies, and methodological skills acquired through Research Methodology I & II courses, the students are expected to undertake the development of a research proposal in Research Project: Proposal Writing, under the guidance of their dissertation committee members, along with the faculty instructor for the course. The intent of the course is to help students consolidate their understanding of the research process and apply the theoretical and practical skills gained in earlier stages of their academic programme. The development of the proposal enables students to engage critically with their chosen topic while strengthening their abilities in research design, academic writing, and scholarly inquiry. The proposal serves as an important preparatory step for the Research Project by providing students with a structured and well-defined foundation for future research work.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T6808</td>
                                                        <td>
                                                            Research Project
                                                        </td>
                                                        <td>
                                                            The Research Project is an integral component of the academic requirements of the Jajor specialization in the liberal arts programme and is submitted in the form of a dissertation. The course is designed to provide students with an opportunity to undertake substantial independent research and apply the analytical, critical, and academic skills developed throughout the programme. While the dissertation is expected to be primarily grounded in the student’s Major discipline, interdisciplinary projects are encouraged. Students are required to identify a suitable area for intensive study, constitute a dissertation committee with faculty members possessing relevant expertise, and carry out the project under their guidance and mentorship. Through this process, students gain experience in conducting rigorous research and producing a well-structured scholarly work.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel"
                                    aria-labelledby="settings-tab" tabindex="0">
                                    <div class="our_courses_list_mainbox">
                                        <div class="our_course_listing" data-bs-toggle="offcanvas"
                                            data-bs-target="#elective-01" aria-controls="offcanvasRight">
                                            <div class="our_course_iconbox">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 520 520">
                                                    <g
                                                        transform="matrix(1.1199999999999999,0,0,1.1199999999999999,-31.199793090820208,-31.200270538330074)">
                                                        <path
                                                            d="M239.987 460.841a10 10 0 0 1-7.343-3.213L34.657 243.463A10 10 0 0 1 42 226.675h95.3a10.006 10.006 0 0 1 7.548 3.439l66.168 76.124c7.151-15.286 20.994-40.738 45.286-71.752 35.912-45.85 102.71-113.281 216.994-174.153a10 10 0 0 1 10.85 16.712c-.436.341-44.5 35.041-95.212 98.6-46.672 58.49-108.714 154.13-139.243 277.6a10 10 0 0 1-9.707 7.6z"
                                                            data-name="6-Check" fill="#000000" opacity="1"
                                                            data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="our_course_contentbox">
                                                ELECTIVES Across 4 years
                                            </div>
                                        </div>
                                        <!-- Offcanvas data start -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="elective-01"
                                            aria-labelledby="offcanvasRightLabel" data-bs-scroll="false"
                                            data-bs-backdrop="true" data-lenis-prevent>
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title" id="offcanvasRightLabel">ELECTIVES
                                                    Across 4 years</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <div class="our_extra_course_listing">
                                                    <ul>
                                                        <li>Reading the Classics</li>
                                                        <li>Film Appreciation</li>
                                                        <li>Creativity and Innovations</li>
                                                        <li>Idea of Art: Art, Art History and Aesthetics</li>
                                                        <li>Comparative Religion: Their greater similarities and
                                                            finer differences</li>
                                                        <li>Indian Constitution</li>
                                                        <li>World Music: Crossroads of Space, Place and Identity
                                                        </li>
                                                        <li>Society and Science</li>
                                                        <li>Sustainability Studies</li>
                                                        <li>Literature and Gender: The Politics</li>
                                                        <li>Advertising and Contemporary Culture</li>
                                                        <li>Philosophical Reflections on Money and Wealt</li>
                                                        <li>The Living Past: Comprehending India</li>
                                                        <li>Reading World Poetry 1</li>
                                                        <li>Reading World Poetry 2</li>
                                                        <li>Law Relating to Intellectual Property Rights</li>
                                                        <li>Laws Relating to Information Technology</li>
                                                        <li>Living with Climate Change</li>
                                                        <li>Introduction to Wellness Management, Complementary
                                                            and Alternative Medicine</li>
                                                        <li>Introduction to Social Justice</li>
                                                        <li>Urdu Paper 1</li>
                                                        <li>Greek Philosophy</li>
                                                        <li>Analysis of Current Events</li>
                                                        <li>Women Philosophers</li>
                                                        <li>Law of Torts</li>
                                                        <li>Uday Shankar Style of Creative Dance</li>
                                                        <li>Introduction to Violence, Conflict and Peace Studie
                                                        </li>
                                                        <li>Marxism</li>
                                                        <li>Oop’s: Objects Out of Place, the Unexplained and the
                                                            Unexplainable</li>
                                                        <li>Mahabharata</li>
                                                        <li>The Novel</li>
                                                        <li>Comparative Mythology</li>
                                                        <li>Indian Penal Code</li>
                                                        <li>Revisiting the City: Urbanization, Urban Aspiration
                                                            and Urban Reality</li>
                                                        <li>20th Century- Bloodiest Century in Human History
                                                        </li>
                                                        <li>Haiku Poetry</li>
                                                        <li>Introduction to Theatre Making</li>
                                                        <li>Roots of India: Ancient Indian History and Culture
                                                            (Pre- history to 1200 AD)</li>
                                                        <li>India and Growth of Islam in Medieval Era (1200AD -
                                                            1700AD)</li>
                                                        <li>Verily Food is Life: The Story of India through it’s
                                                            Food</li>
                                                        <li>Modern Drama from around the World</li>
                                                        <li>Soundscapes of Pune City</li>
                                                        <li>Culture in Making</li>
                                                        <li>Dance/Movement Therapy</li>
                                                        <li>The Poetic Body, Absurd and the Surreal</li>
                                                        <li>Art, Philosophy and Society</li>
                                                        <li>Scientific Inquiry and Learning Science</li>
                                                        <li>Buddhist Philosophy: The Indian Tradition</li>
                                                        <li>Phenomenology and Existentialism</li>
                                                        <li>Introduction to Social Sculpture and the Field of
                                                            Freedom</li>
                                                        <li>Evolutionary Psychology</li>
                                                        <li>Cinema, Masculinity and Culture</li>
                                                        <li>Programming Concepts and C Language</li>
                                                        <li>The Literature of Fantasy and Science Fiction</li>
                                                        <li>Imagery in Creative Writing</li>
                                                        <li>Innovation Management and New Product Development
                                                        </li>
                                                        <li>Health and Wellness Management</li>
                                                        <li>Adaptation: Cinema and Literature</li>
                                                        <li>Foundational Course in Economics</li>
                                                        <li>Mathematical Methods for Economics</li>
                                                        <li>Other Asian Imaginations: Cinema from Japan and
                                                            China after the Second World War</li>
                                                        <li>Understanding Hindi Cinema since Independence</li>
                                                        <li>Introduction to the 20th Century Theory: I</li>
                                                        <li>Introduction to Linguistics</li>
                                                        <li>Critical Writing: Writing as Resistance, Writing as
                                                            Recovery</li>
                                                        <li>Knowledge: Contested, Contextualized, Confirme</li>
                                                        <li>Literary Imagination in the World</li>
                                                        <li>From Marxism to Post-Marxism: Critical Discourse
                                                        </li>
                                                        <li>An Introduction to Culture Studies</li>
                                                        <li>Modern Indian Theatre and Performance: History,
                                                            Theory, Text and Culture</li>
                                                        <li>Re-conceptualizing the Noir Film</li>
                                                        <li>Labour in India-Past and Present</li>
                                                        <li>Understanding Urbanity: Classical and Contemporary
                                                            Approaches</li>
                                                        <li>Religion and Rebellion: Roots of Resistance in the
                                                            Ground of Tradition</li>
                                                        <li>Use of Signs and Symbols for Marketing and Branding
                                                        </li>
                                                        <li>Love in Literature; Literary Expressions and
                                                            Explorations across World Cultures</li>
                                                        <li>The Politics of Difference</li>
                                                        <li>Critical Ideas of the 20thCentury</li>
                                                        <li>Postmodernism: Literature and Philosophy</li>
                                                        <li>Crisis in West Asia</li>
                                                        <li>Colonial Encounters: Literary Representations and
                                                            Theoretical Reflections</li>
                                                        <li>Introduction to Human Genetics</li>
                                                        <li>World Drama: Text and Performance Traditions in
                                                            their Cultural Context</li>
                                                        <li>Sport and Performance Psychology</li>
                                                        <li>Design Tools- I</li>
                                                        <li>Design Tools- II</li>
                                                        <li>Postmodernism: Literary and Philosophical
                                                            Perspectives</li>
                                                        <li>The Psychology of Good and Evil</li>
                                                        <li>Sustainability for the post-2015 World</li>
                                                        <li>Critical Debates in 21st Century Technology</li>
                                                        <li>Politics of Ecology and Environment in Developing
                                                            Countries</li>
                                                        <li>Creative Writing - Media, Advertising, Content, and
                                                            Screenplay</li>
                                                        <li>Contemporary Fiction Today: A Junior Seminar Course
                                                        </li>
                                                        <li>Design Tools-III</li>
                                                        <li>Design Tools- IV</li>
                                                        <li>Introduction to Web Design</li>
                                                        <li>Introduction to Python</li>
                                                        <li>Foundation of Web Technologies</li>
                                                        <li>Mobile Programming</li>
                                                        <li>Internet of Things</li>
                                                        <li>The Illbeing – Disease, Health and Socio-politics
                                                        </li>
                                                        <li>Of Scripts and Shots</li>
                                                        <li>Caste in India: Origin and Practice</li>
                                                        <li>Introduction to the Microbial World</li>
                                                        <li>Principles of Taxation Law</li>
                                                        <li>American Foreign Policy in the Post-Cold War World:
                                                            Processes, Policies and Debates</li>
                                                        <li>Literature and Religion</li>
                                                        <li>Everyday Physics</li>
                                                        <li>Women and Environment Eco-feminism</li>
                                                        <li>Gender Justice and Law</li>
                                                        <li>Class Caste Race and Patriarchy</li>
                                                        <li>Women in Conflict and Peace Process</li>
                                                        <li>Feminist Criticism, Semiotics, Psychoanalysis</li>
                                                        <li>Indian Parallel Cinema/Art Cinema/Regional Cinem
                                                        </li>
                                                        <li>Cinema and the Market; Digital Cinema and the New
                                                            Media</li>
                                                        <li>Film Analysis and Research</li>
                                                        <li>Introduction to Social Work</li>
                                                        <li>Politics and the Media in India</li>
                                                        <li>Natyashastra: An Indian perspective of Performing
                                                            Art</li>
                                                        <li>Science as Muse: Intersections of Science and the
                                                            Arts</li>
                                                        <li>Carnatic Music in Indian Musicology</li>
                                                        <li>Intermediary Econometrics</li>
                                                        <li>Introduction to Moral Philosophy</li>
                                                        <li>Communication for Social Change</li>
                                                        <li>An Introduction to Maker Culture: Developing
                                                            Technological Interventions for Societal Needs</li>
                                                        <li>Global Justice</li>
                                                        <li>Micro Economics II</li>
                                                        <li>Hindi 1</li>
                                                        <li>Hindi 2</li>
                                                        <li>Basic Hindi I</li>
                                                        <li>Basic Hindi II</li>
                                                        <li>Decoding the Genetically Modified</li>
                                                        <li>Comparative Literature</li>
                                                        <li>Logic Designing and Research Techniques in Pytho
                                                        </li>
                                                        <li>Human Rights and related Laws</li>
                                                        <li>Flexi Credit Course</li>
                                                        <li>Ecology and Evolution</li>
                                                        <li>Reproductive and Developmental Biology</li>
                                                        <li>Applied Biology and Biotechnology</li>
                                                        <li>Mathematical Biology</li>
                                                        <li>Behavioural Biology (Cognitive Science, Sociobiology
                                                            and Evolutionary Psychology)</li>
                                                        <li>Comparative Economics</li>
                                                        <li>Economic, History and Thought</li>
                                                        <li>Contemporary Indian Economy</li>
                                                        <li>Conversational Skills in Spanish</li>
                                                        <li>Conversational Skills in French</li>
                                                        <li>Conversational Skills in Chinese</li>
                                                        <li>Conversational Skills in Japanese</li>
                                                        <li>Conversational Skills in German</li>
                                                        <li>Sociology of Health</li>
                                                        <li>Classical Hinduism: A Study through Scriptures</li>
                                                        <li>Permaculture Design and Regenerative Ecosystem</li>
                                                        <li>History and Story: Through the Looking Glass of
                                                            Fiction</li>
                                                        <li>The History of Small Things</li>
                                                        <li>From Products to Self: Personal, Image & Reputation
                                                            Brand Management</li>
                                                        <li>The Self, Individuality and Identity – A Biological
                                                            Perspective</li>
                                                        <li>Role of Armed Forces in International Politics</li>
                                                        <li>United Nations Peacekeeping Operations - Resolution
                                                            and Management of Conflict for Sustainable Peace
                                                        </li>
                                                        <li>Basics of Western Music</li>
                                                        <li>Maritime History of India</li>
                                                        <li>Urban Studies: Cross-Disciplinary Perspectives</li>
                                                        <li>Introduction to Hindustani Classical Music</li>
                                                        <li>Global Mental Health</li>
                                                        <li>Contemporary India</li>
                                                        <li>Internal Security in India</li>
                                                        <li>Conversational Skills in Korean</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Offcanvas data ends  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- old code ends  -->
    <!-- Inner section ends  -->
</main>
@include('footer')