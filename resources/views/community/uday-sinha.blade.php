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
                            <img src="{{ asset('/assets/images/faculty/Uday_Sinha_photo.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Mr
                                        . Uday Sinha</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Economics & Business Studies
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>uday.sinha@ssla.edu.in </span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Uday_Sinha_CV_website.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://scholar.google.com/citations?user=rtI0HlYAAAAJ&hl=en"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.ssla.edu.in/faculty" target="_blank"
                                                    rel="noopener">
                                                    ResearcherID
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://orcid.org/0000-0002-3411-3287" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://vidwan.inflibnet.ac.in/profile/427147" target="_blank"
                                                    rel="noopener">
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
                            <!-- <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <p>
                                    His pedagogical philosophy is rooted in experiential and problem-solving
                                    approaches, integrating field-based learning and cross-disciplinary
                                    frameworks. Dr. Ghosh envisions classrooms as collaborative spaces where
                                    knowledge creation is shared between educators and students.
                                </p>
                            </div> -->
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
                    Uday Sinha is an Assistant Professor of Economics at Symbiosis School for Liberal Arts, Symbiosis
                    International University. His academic interests span applied macroeconomics, public economics,
                    industrial economics, behavioural economics, and quantitative methods, with a focus on empirically
                    grounded and policy-oriented research in emerging economies. His published work includes research on
                    foreign direct investment, macroeconomic dynamics, and the role of artificial intelligence in
                    education.
                </p>

                <p>
                    His current research explores the intersection of behavioural economics, education, and
                    computational social science. In particular, he uses agent-based modelling to study learning
                    behaviour, institutional design, peer effects, and decision-making processes in educational
                    settings. More broadly, his work combines econometric analysis, large secondary datasets, and
                    computational approaches to examine questions related to economic policy, institutions, and
                    technology-enabled learning.
                </p>

                <p>
                    At the undergraduate level, he teaches courses in Public Economics, Industrial Economics, Research
                    Methodology and Proposal Writing, Quantitative Reasoning in Finance, and Current Economic and
                    Business Analysis. Over the course of his teaching career, he has taught a wide range of economics
                    and finance courses at institutions including Fergusson College, Gokhale Institute of Politics and
                    Economics, and L. S. Raheja College.
                </p>
            </div>
            <!-- achievement -->
            <!-- <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/achievement.png') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Achievement</h4>
                </div>
                <ul>
                    <li>
                        Led a collaborative research project with <strong>Greenpeace India</strong> titled 
                        <em>“HeatHavoc: Investigating the Impact on Street Vendors”</em>, examining the effects of 
                        heat waves and extreme temperatures on street vendors in Delhi.
                    </li>
                    <li>
                        Recipient of the <strong>India Health Policy & Systems Research (HPSR) Fellowship 2024 
                        (Cohort 4)</strong>, instituted through a collaboration of Indian and international 
                        institutions, including the <strong>Sir Ratan Tata Trust</strong> and the 
                        <strong>Bill & Melinda Gates Foundation</strong>, under the 
                        <strong>Health Systems Transformation Platform (HSTP)</strong>.
                    </li>
                    <li>
                        Served as a <strong>Resource Person</strong> for a lecture at the 
                        <strong>Central University of Kashmir</strong> titled 
                        <em>“Limits of Methods: Problem of Unification and Quest for Methodological and Scientific Pluralism”</em>. 
                        The week-long workshop was held from <strong>7 October to 11 October 2024</strong>.
                    </li>
                    </ul>
            </div> -->
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
                            <li>
                                Ghoshal, I., Ghosh, I., Sinha, U., & Jog, S. (2023). FDI Inflows into Select Emerging
                                Market Economies- A Macroeconomic Investigation Using Panel Techniques. Economic
                                and Political Weekly, 58(41), 41–48.
                            </li>

                            <li>
                                Ghoshal, I., Jog, S., Sinha, U., & Ghosh, I. (2021). Macroeconomic Factors Affecting FDI
                                Inflows into Emerging Economies—A Panel Study. In P. Lakhanpal, J. Mukherjee, B.
                                Nag, & D. Tuteja (Eds.), Trade, Investment and Economic Growth: Issues for India and
                                Emerging Economies (pp. 109–119). Springer.
                                <a href="https://link.springer.com/chapter/10.1007/978-981-33-6973-3_7" target="_blank"
                                    class="text-danger">
                                    https://link.springer.com/chapter/10.1007/978-981-33-6973-3_7
                                </a>
                            </li>

                            <li>
                                Kasat, K., Sinha, U., Juneja, S., Ghatge, A., Thorat, N., & Shaikh, N. (2025).
                                Artificial
                                Intelligence in Education: A Comprehensive Examination of Integration, Impact, and
                                Future Implications. In A. Mirzazadeh, Z. Molamohamadi, E. Babaee Tirkolaee, G.-W.
                                Weber, & J. Leung (Eds), Optimization and Data Science in Industrial Engineering (pp.
                                182–198). Springer Nature Switzerland.
                                <a href="https://link.springer.com/chapter/10.1007/978-3-031-81458-7_11" target="_blank"
                                    class="text-danger">
                                    https://link.springer.com/chapter/10.1007/978-3-031-81458-7_11
                                </a>
                            </li>
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
                            <li>
                                UGC-NET Qualified in Economics since June 2019 <br>
                                Member of Institute of Actuaries of India since 2013
                            </li>
                            <li>
                                Master of Arts (Economics) – 75.00% <br>
                                Fergusson College, Pune – April 2015
                            </li>

                            <li>
                                Bachelor of Arts (Economics) – 69.83% <br>
                                Fergusson College, Pune – April 2013
                            </li>

                            <li>
                                XII (H.S.C) – 70.50% <br>
                                Fergusson College, Pune – February 2010
                            </li>

                            <li>
                                X (I.C.S.E) – 93.86% <br>
                                Lilavatibai Podar High School, Mumbai
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- RESEARCH INTERESTS -->
            <!-- <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/search-alt.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Research Interests</h4>
                </div>
                <ul class="research-list">
                    <li>Languages known – English and Hindi.</li>
                    <li>Aptitude for Statistics, Mathematics,<br> and Econometrics.</li>
                   <li>Knowledge of word processing <br>and statistical analysis software, <br> including MS Excel, R Studio, and STATA.</li>
                    <li>Basic knowledge in Python.</li>
                </ul>
            </div> -->
            <!-- AWARDS -->
            <!-- <div class="section-card" data-aos="fade-up">
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
            </div> -->
            <!-- COURSES -->
            <!-- <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Introduction to Research: RM I</li>
                    <li>Research Methods and Analysis : RM II</li>
                    <li>Global Environmental Challenges</li>
                    <li>Revising the city: Urbanisation and Urban Reality</li>
                    <li>Core Environmental Studies</li>
                </ul>
            </div> -->
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')