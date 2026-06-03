@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Academic Profile</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="staff_main">
    <!-- Inner section start -->
    <!-- Details section start -->
    <section class="faculty_details_section">
        <div class="container">
             <h2 class="inner__red_heading mb-5">Academic Profile</h2>
            <!-- PROFILE HEADER -->
            <div class="profile-header" data-aos="fade-up">
                <div class="row align-items-center gy-4">
                   
                    <!-- IMAGE COLUMN -->
                    <div class="col-lg-4 text-center">
                        <div class="profile-img-wrapper">
                            <span class="img-bg"></span>
                            <img src="{{ asset('/assets/images/faculty/Dr. Renu Vinod.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>
                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Renu Vinod</h2>
                                        <p class="faculty-designation">Adjunct Faculty & Sociology In-Charge</p>
                                        <p class="faculty-institute">
                                            Sociology of Development
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>renu.vinod@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Renu_Vinod _CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://orcid.org/0000-0002-0685-5785" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/cv/Dr_Manoranjan_Ghosh_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
                                </div>
                            </div>
                            <!-- Teaching Philosophy -->
                            <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <p>
                                    His pedagogical philosophy is rooted in experiential and problem-solving
                                    approaches, integrating field-based learning and cross-disciplinary
                                    frameworks. Dr. Ghosh envisions classrooms as collaborative spaces where
                                    knowledge creation is shared between educators and students.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BIO -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/introduction.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Bio</h4>
                </div>
                <p>
                    Dr. Manoranjan Ghosh is currently serving as an Assistant
                    Professor at the Symbiosis School for Liberal Arts (SSLA), SIU,
                    Pune. At SSLA Pune, Dr. Ghosh is spearheading the development
                    of a full-fledged B.Sc. program in Applied Environmental and
                    Sustainability Sciences, an initiative that reflects his commitment
                    to fostering interdisciplinary environmental education.
                </p>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <!-- PUBLICATIONS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Publications</h4>
                        </div>
                        <ol class="ps-3">
                            <li>Kumar, H., Ghosh, M., & Ghosal, S. (2025). <em>Environmental Science and Pollution
                                    Research</em>, Springer.</li>
                            <li>Ghosh, M. & Garnaik, S. (2025). <em>Greenpeace India</em>.</li>
                            <li>Ghosh, M. (2024). <em>Greenpeace India & National Hawker Federation</em>.</li>
                            <li>Ghosh, M. & Ghosal, S. (2022). <em>Asia-Pacific Journal of Regional Science</em>.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- EDUCATION -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ul>
                            <li>Ph.D. Climate & Development – IIT Kharagpur (2017–2021)</li>
                            <li>M.A. Geography (Climate Change) – University of Burdwan</li>
                            <li>B.Ed. Educational Psychology – Himachal Pradesh University</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- RESEARCH INTERESTS -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/search-alt.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Research Interests</h4>
                </div>
                <ul class="research-list">
                    <li>Climate Vulnerability & Adaptation</li>
                    <li>Forest Resource Management</li>
                    <li>Environmental Economics</li>
                    <li>Green Urban Planning</li>
                    <li>Environmental Justice</li>
                    <li>Energy & Just Transitions</li>
                    <li>Air Pollution Mitigation</li>
                    <li>Dalit Environmentalism</li>
                </ul>
            </div>
            <!-- AWARDS -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/awards.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Awards & Fellowships</h4>
                </div>
                <ul>
                    <li><strong>India Health Policy and Systems Research Fellowship</strong> (2024–2025)</li>
                    <li><strong>Climate Co-adaptation Fellowship</strong>, PlanAdapt, Germany (2022–2023)</li>
                    <li><strong>Youth Empowerment in Climate Action Platform (YECAP) Fellowship</strong> (2021–2022)
                    </li>
                    <li><strong>India Smart Cities Fellowship</strong>, Ministry of Housing and Urban Affairs,
                        Government of India (2022)</li>
                    <li><strong>Junior Research Fellowship (JRF/SRF)</strong>, UGC, Government of India (2016–2021)
                    </li>
                    <li><strong>West Bengal State Eligibility Test (WB SET)</strong>, Government of West Bengal
                        (2016)
                    </li>
                    <li><strong>Monthly Merit-cum-Scholarship</strong>, Government of West Bengal (2013–2015)</li>
                    <li><strong>Selected as Mentor of Change</strong>, Atal Innovation Mission, NITI Aayog,
                        Government
                        of India (2017)</li>
                </ul>
            </div>
            <!-- COURSES -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Research Methodology: Philosophy, Methods & Analysis</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')