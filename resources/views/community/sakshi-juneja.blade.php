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
    @include('layout.back-button')
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
                            <img src="{{ asset('/assets/images/faculty/faculty-18.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Ms. Sakshi Juneja</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <!-- <p class="faculty-institute">
                                            Business Studies
                                        </p> -->
                                        <!-- <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">

                                            <a href="mailto: anurupaghatge583@gmail.com " class="text-decoration-none">
                                                anurupaghatge583@gmail.com
                                            </a>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Anurupa_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://scholar.google.com/citations?user=tr8PJHQAAAAJ&hl=en"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>

                                            <li> <a href="https://orcid.org/0000-0003-4510-5618" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a> </li>

                                            <li> <a href="#" target="_blank" rel="noopener">
                                                    Vidwan
                                                </a>
                                            </li>



                                        </ul>

                                    </div> -->
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
                            <p>Sakshi Juneja is an Assistant Professor of Economics. She believes that classroom is a collaborative space where teaching and learning are reciprocal processes and academic growth is for both students and the instructor. According to her, economics is best learned by connecting theory with real-world applications. Her teaching approach emphasizes conceptual clarity, analytical thinking, and the practical use of quantitative methods to solve economic problems. Through a combination of lectures, discussions, case studies, and hands-on data analysis, she strives to create an interactive and supportive learning environment where students are encouraged to engage in discussions, and develop confidence in analytical thinking required for higher education, research, and professional careers in economics and related fields. </p>
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
               <p>Her teaching spans undergraduate courses in Microeconomics, Econometrics, Statistics Methods, and Mathematical methods for Economics, where she focuses on helping students build strong conceptual foundations alongside practical analytical skills. She holds a Bachelor's degree in Economics and Master's degrees in Financial Economics. Her academic interests revolve around applying quantitative methods to understand economic issues and interpreting empirical evidence for informed decision-making. In addition to teaching, she is actively engaged in research curriculum development, and mentoring students in research and analytical thinking.</p>

            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <!-- EDUCATION -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Publications</h4>
                        </div>
                        <ul>
                          <li>Kasat, K., Sinha, U., Juneja, S., Ghatge, A., Thorat, N., & Shaikh, N. (2025). Artificial Intelligence in Education: A Comprehensive Examination of Integration, Impact, and Future Implications. In A. Mirzazadeh, Z. Molamohamadi, E. Babaee Tirkolaee, G.-W. Weber, & J. Leung (Eds), Optimization and Data Science in Industrial Engineering (pp. 182–198). Springer Nature Switzerland.<a href=" https://link.springer.com/chapter/10.1007/978-3-031-81458-7_11" target="_blank" class="text-danger"> https://link.springer.com/chapter/10.1007/978-3-031-81458-7_11</a></li>
                        </ul>
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
                          <li>UGC-NET Qualified in Economics</li>
                          <li>Master of Science (Financial Economics)<br>
                                    Gokhale Institute of Politics and Economics
                                    </li>
                          <li>Bachelor of Arts (Economics) Honours<br>
                                Lady Shri Ram College for Women, University of Delhi
                                </li>
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
               <li>Finance, Banking and Macroeconomics</li>
            </ul>
        </div>
            <div class="section-card aos-init aos-animate" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Financial Management, Microeconomics, Research Methodology, Business Statistics, Mathematical Methods for Economics, Econometrics</li>
                </ul>
            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')