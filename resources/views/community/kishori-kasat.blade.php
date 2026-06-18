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
                            <img src="{{ asset('/assets/images/faculty/faculty-11-modified.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Kishori Kasat</h2>
                                        <p class="faculty-designation">Associate Professor</p>
                                        <p class="faculty-institute">
                                            Computer Studies
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>kishori.kasat@ssla.edu.in </span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('assets/pdf/cv/KishoriKasat_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>

                                                <img src="{{ asset('assets/images/icon/downloads.png') }}"
                                                    alt="Download Icon" class="icon-img me-2">

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
                                                <a href="https://scholar.google.com/citations?hl=en&user=hvzDKugAAAAJ"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://orcid.org/0000-0003-1576-5834" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=35753502900"
                                                    target="_blank" rel="noopener">
                                                    Scopus ID: 35753502900
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.webofscience.com/wos/author/record/GNP-6761-2022"
                                                    target="_blank" rel="noopener">
                                                    Web of Science Researcher ID: GNP-6761-2022
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
            <!-- <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/introduction.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Bio</h4>
                </div>
                <p>Doctorate in Science and Technology since 2018</p>

                <p>Associate Professor (Teaching experience: 23 years; multi-disciplinary)</p>

                <p>UGC-NET (Electronic Science) May 2009 Qualified</p>

                <p>
                    Research Interests: Digital Signal Processing; IoT; AI & ML; Education Technology;
                    Electronic Sciences; Management; Higher Education
                </p>

                <p>
                    PhD Supervisor under the faculty of Computer Studies and Management at
                    Symbiosis International University (SIU)
                </p>
            </div> -->
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
                <div class="col-md-12">
                    <!-- PUBLICATIONS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Publications</h4>
                        </div>
                        <ol class="ps-3">
                            <li>Kasat, K., Sinha, U., Juneja, S., Ghatge, A., Thorat, N., & Shaikh, N. (2023,
                                November). Artificial Intelligence in Education: A Comprehensive
                                Examination of Integration, Impact, and Future Implications.
                                In International Conference on Optimization and Data Science in Industrial
                                Engineering (pp. 182-198). Cham: Springer Nature Switzerland. </li>
                            <li>Ritonga, M., Bangare, M. L., Bangare, P. M., Bangare, Vanjire, S. S., Moholkar,
                                Kasat, K., & Rozak, P. (2025). Optimized convolutional neural network
                                deep learning for Arabian handwritten text recognition. Bulletin of
                                Electrical Engineering and Informatics, 14(2), 1497-1506.</li>
                            <li>Raghunath, M. P., Deshmukh, S., Chaudhari, P., Bangare, S. L., Kasat, K.,
                                Awasthy, M., ... & Waghulde, R. R. (2025). PCA and PSO based optimized
                                support vector machine for efficient intrusion detection in internet of
                                things. Measurement: Sensors, 37, 101806. </li>
                            <li>Rapaka, A., Dharmadhikari, S. C., Kasat, K., Mohan, C. R., Chouhan, K., &
                                Gupta, M. (2025). Revolutionizing learning− A journey into educational
                                games with immersive and AI technologies. Entertainment Computing, 52,
                                100809.</li>
                            <li>Pradeepa, M., Kumaraperumal, S., Kasat, K., Maguluri, L. P., Shajahan, U. S.,
                                & Gaikwad, S. M. (2024). Digital evolution: Investigating the dynamic
                                interactions of learners with social media. Entertainment Computing, 50,
                                100668. </li>
                            <li>Mahesh Babu, A., Jawarneh, M., Arias‐Gonzáles, J. L., Meenakshi, Kasat, K.,
                                & Yuvaraj, K. P. (2024). Conversational Chatbot With Object Recognition
                                Using Deep Learning and Machine Learning. Conversational Artificial
                                Intelligence, 335-352. </li>
                            <li>Kasat, K., Shaikh, N., & Iyengar, V. (2023, September). Omnichannel
                                Strategy Adoption Issues in an eCommerce Company: A SAP-LAP Analysis.
                                In International Conference on Science, Engineering Management and
                                Information Technology (pp. 245-257). Cham: Springer Nature Switzerland.</li>
                            <li>Shaikh, N., Kasat, K., Godi, R. K., Krishna, V. R., Chauhan, D. K., & Kharade,
                                J. (2023). Novel IoT framework for event processing in healthcare
                                applications. Measurement: Sensors, 27, 100733. </li>
                            <li> Shinde, M., Shaikh, N., & Kasat, K. (2023, December). Impact of local
                                cultures on implementation of industry 4.0. In AIP Conference
                                Proceedings (Vol. 2914, No. 1). AIP Publishing. </li>
                            <li> Kasat, K., Shaikh, N., Rayabharapu, V. K., Nayak, M., & Liyakat, K. K. S. (2023,
                                August). Implementation and Recognition of Waste Management System
                                with Mobility Solution in Smart Cities using Internet of Things. In 2023
                                Second International Conference on Augmented Intelligence and Sustainable
                                Systems (ICAISS) (pp. 1661-1665). IEEE. </li>
                            <li> Pawar, K., Kasat, K., Deshpande, A. P., & Shaikh, N. (2023, November).
                                Adoption of Industry 4.0 Technologies for Performance Management.
                                In 2023 1st DMIHER International Conference on Artificial Intelligence in
                                Education and Industry 4.0 (IDICAIEI) (Vol. 1, pp. 1-5). IEEE.</li>
                            <li> Ramkumar, G., Kasat, K., PK, N. M., Raghu, T., & Chhabra, S. (2022). Quality
                                enhanced framework through integration of blockchain with supply chain
                                management. Measurement: Sensors, 24, 100462. </li>
                            <li> Kasat, K., Rani, D. L., Khan, B., Kirubakaran, M. K., & Malathi, P. (2022). A
                                novel security framework for healthcare data through IOT
                                sensors. Measurement: Sensors, 24, 100535. </li>
                            <li> Shaikh, N., Kasat, K., & Jadhav, S. (2022, November). Secured
                                Authentication by Single Sign On (SSO): A Big Picture. In 2022 International
                                Conference on Computing, Communication, and Intelligent Systems
                                (ICCCIS) (pp. 951-955). IEEE.</li>
                            <li> Shaikh, N., Kasat, K., Moyal, V., Kumar, N. D., Ponnusamy, S., & Pavithra, K.
                                (2022, November). Application of IoT to Monitor the Shipping of Goods in
                                Maritime Transportation System. In 2022 IEEE North Karnataka Subsection
                                Flagship International Conference (NKCon) (pp. 1-5). IEEE. </li>
                            <li> Kasat, K., Sahasrabudhe, S., & Shaikh, N. (2021). Distilling factors
                                influencing
                                international
                                mobility:
                                international
                                students'
                                perspectives. International Journal of Public Sector Performance
                                Management, 8(1-2), 103-127. </li>
                            <li> Sahasrabudhe, S., Shaikh, N., & Kasat, K. (2020). Internationalisation of
                                higher education-Necessity to adapt to new forms of engagement for
                                ensuring
                                sustainability? Journal
                                of
                                Statistics
                                and
                                Management
                                Systems, 23(2), 431-444. </li>
                            <li>Kasat, K., Shaikh, N., Chandrachud, M., & Saini, J. R. (2019). Impact of
                                flipped classroom on engagement of post-graduate students under the
                                faculty of social sciences. In ICERI2019 Proceedings (pp. 7582-7590). IATED. </li>
                            <li> Shaikh, N., Kumari, S., & Kasat, K. (2018). Exploring e-governance of faculty
                                evaluation system: using a total interpretive structural modeling
                                approach. Journal of Cases on Information Technology (JCIT), 20(3), 36-47. </li>
                            <li> Kumari, S., Kasat, K., & Patil, Y. (2017). Resource Based View of Innovative
                                Strategies in Sugar Industry and Their Effects Towards Healthcare. Indian
                                Journal of Public Health Research & Development, 8(4). </li>
                            <li> Shaikh, N., & Kasat, K. (2009, December). E-governance in education as an
                                effective management control tool in developing human resource-faculty
                                appraisal system. In 2009 Second International Conference on Emerging
                                Trends in Engineering & Technology (pp. 410-415). IEEE. </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <!-- EDUCATION -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ul>
                            <li>PhD, M Phil, UGC-NET, M Sc in Electronic Sciences</li>
                            <li>MBA (Computer Management & Finance)</li>
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