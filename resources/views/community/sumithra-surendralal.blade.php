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
                            <img src="{{ asset('/assets/images/faculty/faculty-21.webp') }}" alt="Dr. Manoranjan Ghosh"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Sumithra Surendralal</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Physics and Mathematics
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>sumithra.surendralal@ssla.edu.in</span>
                                        </p>
                                        <!-- <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Manoranjan_Ghosh_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
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
                            <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <p>
                                    Sumithra aims to cultivate a disposition towards making rather than merely
                                    consuming; whether that means constructing a mathematical model, developing an
                                    argument, designing an investigation, or creating a new way of understanding a
                                    problem. She hopes students come to appreciate the difference between encountering a
                                    finished idea and participating in the work of coming up with, testing, and refining
                                    one. Such work requires imagination and a willingness to ‘play’. Far from being
                                    opposed to rigour, play is often what allows new questions, connections, and
                                    possibilities to emerge.
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
                <p>Sumithra Surendralal is interested in how models help us make sense of complex phenomena. Trained as
                    a physicist, her work began with computational studies of biological sequence generation, and has
                    gradually expanded to questions about how modelling is learned, taught, and used in scientific
                    inquiry. Across both research and teaching, she is interested in how representations help us move
                    from observation to explanation. In her doctoral research at The Pennsylvania State University, she
                    studied the structure of songbird songs, using probabilistic models to infer the hidden mechanisms
                    that gave rise to observed vocal sequences. While situated within neuroscience, this work also drew
                    on concepts closely related to those used in computational linguistics and language modelling. More
                    recently, her interests have turned to modelling as a scientific practice and an educational goal.
                    She is particularly interested in how students learn to build and use models of the real world, and
                    in how the practices of scientific inquiry can be made accessible to learners.
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
                        <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}" alt="Introduction icon"
                            class="header-icon">
                        <h4 class="section-title">Publications</h4>
                    </div>
                    <ol class="ps-3">
                        <li>Surendralal, S., & Menon, V. R. Modelling the unfamiliar: Structuring simulation-based
                            activities to support liberal arts undergraduate students' understanding of complex systems.
                            Proceedings of the International Conference on Technology 4 Education 2025 (with publishers)
                        </li>
                        <li>Lu, J.*, Surendralal, S.*, Bouchard, K. E., & Jin, D. Z. (2025). Partially observable Markov
                            models inferred using statistical tests reveal context-dependent syllable transitions in
                            Bengalese finch songs. Journal of Neuroscience, 45(9). (* equally contributing authors)</li>
                        <li>Surendralal, S. (2023). Fiction and philosophy of science: Paired readings for the science
                            classroom. Resonance: Journal of Science Education, 28(7), 1065–1073.</li>
                        <li>Lu, J., Jin, D. Z., Surendralal, S., & Bouchard, K. (2022). Revealing context dependence
                            through partially observable Markov model. Bulletin of the American Physical Society, 67.
                        </li>
                        <li>Surendra Lal, S. (2016). Statistical inference of syntax from vocal sequences and
                            implications for neural mechanisms (Doctoral dissertation).</li>
                        <li>Surendralal, S., & Jin, D. Z. (2014). A model of songbird song syntax using Bayesian
                            nonparametrics. Bulletin of the American Physical Society, 59.</li>
                    </ol>
                    </div>
                </div>
                <!-- </div> -->
                <div class="col-md-6">
                    <!-- EDUCATION -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ul>
                            <li>PhD in Physics, The Pennsylvania State University (2016)</li>
                            <li>MSc in Physics, Department of Theoretical Physics, University of Madras (2009)</li>
                            <li>BSc in Physics, Women’s Christian College, University of Madras (2007)</li>
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
                    <li>Environment and Society, Climate Vulnerability and Adaptation, Heatwave and Health Risk,
                        Livelihoods, Natural Resource Uses, Climate Resilience and Development Practices, GIS and
                        Research
                        Methods, and Social and Environmental Data Analysis. </li>
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
                    <li>India Health Policy and System Research Fellowship, 2024-2025. </li>
                    <li>Climate Co-adaptation Fellowship, PlanAdapt, Germany, 2022-2023. </li>
                    <li>Youth Empowerment in Climate Action Platform (YECAP) Fellowship -2021-2022. </li>
                    <li>India Smart Cities Fellowship, Ministry of Housing and Urban Affairs, India, 2022. </li>
                    <li>Junior Research Fellowship (JRF/SRF), UGC, Government of India, 2016-2021. </li>
                    <li>West Bengal SET, Government of West Bengal, 2016. </li>
                    <li>Monthly Merit cum Scholarship, Govt. of West Bengal, 2013-2015. </li>
                    <li>Selected for Mentor of Change - Atal Innovation Mission, NITI Aayog, 2017. </li>

                </ul>
            </div> -->
            <!-- COURSES -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Liberal Arts Core: Explorations in Natural Sciences (co-taught with Vasudev Menon); Quantitative
                        Reasoning 1 (Mathematics and Statistics); Research Methodology III (Mathematics and Statistics);
                    </li>
                    <li>Physics: Classical Mechanics; Waves, Light, and Electromagnetism; Mathematical Methods in
                        Physics; Thermal and Statistical Physics; </li>
                    <li>Mathematics and Statistics: Foundation Course in Mathematics and Statistics; Calculus; Linear Algebra; Graph
                        Theory; Mathematics for Machine Learning; </li>
                    <li>Computer Studies: Theory of Computation; </li>
                    <li>Elective: Science as Muse: Intersections of Science and the Arts </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')