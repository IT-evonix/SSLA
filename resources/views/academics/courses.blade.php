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
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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
                                            <a href="" class="new_tab_courses_listing">
                                                <div class="new_tab_courses_listing_img">
                                                    <img src="{{ asset('assets/images/course-demo-image.webp') }}" alt="Courses image" class="img-fluid">
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