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
                            <img src="{{ asset('/assets/images/faculty/Aditi_Athreya_Photo.webp') }}" alt="Dr. Manoranjan Ghosh"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Aditi Athreya</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Anthropology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>aditi.athreya@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/ADITI_ATHREYA_CV.pdf') }}"
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
                Aditi Athreya is an Anthropologist with a PhD in History from the Katholieke Universiteit Leuven (KU
                Leuven), Belgium. She is currently serving as Assistant Professor at the Symbiosis School for Liberal
                Arts, Pune, India where she teaches courses in Social and Cultural Anthropology,History, Comparative
                Religion and Qualitative Research Methods.
                Her research lies at the intersection of education, and religion, with a particular focus on
                Christianity in India. Her work examines the historical and contemporary dynamics of missionary
                education, especially in Jharkhand, combining ethnographic fieldwork with archival research to bridge
                anthropology and history. She is also deeply engaged with questions of decolonsing education and
                academia, an interest shaped during her time at KU Leuven.
                Aditi has experience working in multicultural and interdisciplinary environments and has contributed to
                initiatives promoting diversity and inclusion, including her work with the Diversity Network at KU
                Leuven. She is multilingual, with proficiency in English, French, Dutch, Tamil, Marathi, and Hindi.

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
                        <li>Goddeeris, I., & Athreya, A. (2024). Whom to cater to? The challenges and choices of Jesuit education in Ranchi, 1947–1960s. Brill Academic Publishers. (SCOPUS Q1)</li>

<li>Athreya, A, Goddeeris, I. (2023). Indian authorities and mission schools in the aftermath of independence: Jesuit education in Chotanagpur, Bihar, Jharkhand. Contemporary Education Dialogue, 20(2), 187–205. (SCOPUS Q1)</li>

<li>Athreya, A. (2022). Objectivity in research: From Eurocentrism via decolonisation to transmodernity. C@hiers du CRHiDI. Histoire, droit, institutions, société, 45.</li>

<li>Athreya, A., D'Souza, R., & Goddeeris, I. (2021). The Postcolonial Expansion of a Mission: Jesuit education in Ranchi, India, after 1950. In P. Verstraete, I. Goddeeris, & K. Christiaens (Eds.), Missionary education: Historical approaches and global perspectives (pp. 80–117). Louvain: Leuven University Press.</li>

<li>Athreya, V. H. (2020). Modi’s New Education policy: A Next step in Saffronisation of India? Mondiaal Nieuws.</li>
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
                            <strong>PhD in History</strong>. KU Leuven, Faculty of Arts (2023)<br>
                            <strong>Thesis Topic:</strong> Missionaries in Post-Colonial India: Jesuit Education in
                            India after 1947
                        </li>

                        <li>
                            <strong>M.Sc. (Social & Cultural Anthropology)</strong>, KU Leuven, Faculty of Social
                            Sciences (2018)<br>
                            <strong>Grade:</strong> Cum Laude (Distinction)<br>
                            <strong>Thesis Topic:</strong> Social Work and Bureaucracy: A Study of Social Workers’
                            Engagement with Cultural differences while fulfilling their Professional Duties at the
                            Centre Regional de Verviers pour l’Integration
                        </li>

                        <li>
                            <strong>BA in Liberal Arts</strong>, Symbiosis International University, Pune, India
                            (2016)<br>
                            <strong>Grade:</strong> 3.5/5 GPA<br>
                            <strong>Major Subjects:</strong> Political Science and Public Policy<br>
                            <strong>Minor Subjects:</strong> Anthropology and International Relations
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
                <li>Climate Vulnerability & Adaptation</li>
                <li>Forest Resource Management</li>
                <li>Environmental Economics</li>
                <li>Green Urban Planning</li>
                <li>Environmental Justice</li>
                <li>Energy & Just Transitions</li>
                <li>Air Pollution Mitigation</li>
                <li>Dalit Environmentalism</li>
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