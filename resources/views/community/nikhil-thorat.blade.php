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
                            <img src="{{ asset('/assets/images/faculty/Nikhil-Thorat-Photo-for-Website.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Mr. Nikhil Thorat</h2>
                                        <p class="faculty-designation">Assistant Professor </p>
                                        <p class="faculty-institute">
                                          Economics
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">

                                            <a href="mailto:nikhil.thorat@ssla.edu.in" class="text-decoration-none">
                                                nikhil.thorat@ssla.edu.in
                                            </a>
                                        </p>
                                        <!-- <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Gayatri _Mendanha _CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://scholar.google.com/citations?user=Xt-odtoAAAAJ&hl=en"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>

                                            <li> <a href="https://orcid.org/0000-0002-5796-2396" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a> </li>

                                            <li> <a href="https://vidwan.inflibnet.ac.in/profile/276683" target="_blank" rel="noopener">
                                                    Vidwan
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
                                    Over a teaching career spanning 13 years, Nikhil Thorat has delivered learning
                                    experiences across branches of economics. Currently engaged in courses such as
                                    Principles of Macroeconomics, International Economics, Development Economics an
                                    International Political Economy, his teaching portfolio spans other distinct courses
                                    such as Microeconomics, Public Economics, Indian Economy, Comparative Economics,
                                    Economic History & Thought and Money, Banking & Finance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BIO -->
            <!-- <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/introduction.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Bio</h4>
                </div>
                <p>With 13 years of experience in academia, Nikhil Thorat serves as a part of SSLA’s ecosystem. He
                    provides expertise in economic sciences and also contributes to university governance through
                    curriculum design, student welfare, quality assurance, and regulatory compliance, he plays a role in
                    driving academic excellence and shaping a progressive, student-centric campus culture.</p>
            </div> -->

            <div class="col-md-6">
                <!-- EDUCATION -->
                <div class="section-card" data-aos="fade-up">
                    <div class="section-header">
                        <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                            class="header-icon">
                        <h4 class="section-title">Education</h4>
                    </div>
                    <ul>
                        <li>M.A. Economics, UGC-NET</li>
                    </ul>
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
                <li>Nikhil Thorat is engaged in areas such Social & Income Inequality. Growth and Development.</li>
               
            </ul>
        </div>
        </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')