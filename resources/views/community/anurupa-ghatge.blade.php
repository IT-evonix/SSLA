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
                            <img src="{{ asset('/assets/images/faculty/anurupa-ghatge.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Anurupa R. Ghatge</h2>
                                        <p class="faculty-designation">Assistant Professor </p>
                                        <p class="faculty-institute">
                                            Business Studies
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
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
                                        </div>
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
                            <p>Dr Anurupa Ghatge’s teaching philosophy is founded on the belief that education should
                                cultivate not only competent professionals but also thoughtful, ethical, and socially
                                responsible leaders.</p>
                            <p>In a liberal arts environment, I view business as deeply interconnected with society,
                                culture, technology, and public policy. Consequently, I encourage students to examine
                                managerial decisions through multiple disciplinary lenses and to appreciate the broader
                                impact of organizations on people and communities.</p>
                            <p>I strive to create an interactive learning environment where students actively engage
                                with concepts rather than passively receive information. Through case studies,
                                simulations, discussions, industry examples, reflective exercises, and experiential
                                learning, I encourage students to analyze problems critically, question assumptions, and
                                develop evidence-based solutions. I believe that effective learning occurs when theory
                                is consistently linked with contemporary organizational practice.</p>
                            <p>My classroom values curiosity, intellectual openness, collaboration, and respect for
                                diverse perspectives. Recognizing that students bring varied backgrounds and
                                aspirations, I seek to make learning inclusive, relevant, and intellectually
                                challenging. Assessment is designed not merely to evaluate knowledge but to develop
                                analytical thinking, communication, creativity, and ethical judgement.</p>
                            <p>Ultimately, my goal is to prepare graduates who can navigate complexity with confidence,
                                lead with integrity, and contribute meaningfully to organizations and society. I aspire
                                to inspire lifelong learning, adaptability, and responsible leadership in an
                                increasingly dynamic global environment.</p>
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
                <p>Dr. Anurupa Ghatge is an Assistant Professor at the Symbiosis School of Liberal Arts (SSLA),
                    Symbiosis International (Deemed University), India, where she serves as the Faculty in charge of the
                    Business Studies Program and Career Cell. She is a management scholar, educator, and corporate
                    trainer whose work spans management education, organizational behaviour, human resource management,
                    business sustainability, employee experience, and interdisciplinary liberal arts pedagogy.</p>
                <p>Dr. Ghatge's academic and professional career reflects a distinctive integration of scholarship,
                    industry practice, and international engagement. Her research explores how organizations can build
                    sustainable, ethical, and human-centred workplaces in an era increasingly shaped by digital
                    transformation, artificial intelligence, hybrid work, and changing employee expectations. She is
                    particularly interested in understanding the human dimensions of organizational change and in
                    developing management education that prepares graduates to navigate complex business and societal
                    challenges.</p>
                <p>Beyond academia, Dr. Ghatge has extensive experience in executive education and corporate training.
                    She has designed and delivered management development programs for professionals across multiple
                    organizational levels at leading multinational and Indian organizations, including Wipro, Mahindra,
                    Godrej, Accenture, and Avaya. She has also led the Communication Management ( MBA ) at Symbiosis
                    Institute of Media and Communication PG at Lavale,Pune</p>
                <p>Prior to entering academia, Dr. Ghatge worked in international business, exports, and global trade
                    with organizations including Premier Vinyl Trading Corporation, Weikfield Food Products, and Voltas
                    International. Her industry experience in international markets continues to shape her research and
                    teaching, allowing her to bridge academic theory with managerial practice and global business
                    realities.</p>
                <p>An advocate of experiential and inquiry-based learning, Dr. Ghatge regularly mentors undergraduate
                    research, develops innovative teaching resources, and collaborates with industry to create
                    meaningful learning experiences that prepare students for leadership in an increasingly
                    interconnected world. Her work reflects a commitment to combining academic excellence with practical
                    relevance, fostering graduates who are not only professionally competent but also socially
                    responsible and globally aware.</p>

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
                            <li>Sabyasachi Dasgupta and <strong>Ghatge Anurupa (2015)</strong> Understanding the
                                theoretical convergence of Corporate Social Responsibility reporting in practice: A
                                thematic analysis of automobile websites. * International Journal of Business and Social
                                Science Vol. 6, No. 2; February <strong>2015,</strong> 175, <strong>(ISSN 2219-1933
                                    (Print), 2219-6021 (Online))</strong></li>

                            <li>Sabyasachi Dasgupta and <strong>Ghatge Anurupa (2015)</strong> Understanding the
                                Stickiness of Corporate Social Responsibility Reporting as a Post Globalization Digital
                                Marketing Strategy: A Study of Multinational Automobile Companies in India. Indian
                                Journal of Science and Technology, Special Issue. Indexed in Scopus. (Vol. 8(S4),
                                283–292, <strong>February 2015 ISSN (Print) : 0974-6846 ISSN (Online) :
                                    0974-5645)</strong></li>

                            <li><strong>Ghatge Anurupa</strong> and Verghese Raju (2017) Communication, A personality
                                perspective, Journal for Contemporary Research in Management <strong>January 2017, ISSN
                                    No. 2348-0092)</strong></li>

                            <li>Sabyasachi Dasgupta and Ghatge Anurupa (2017) Exploring the Competitive Advantage of
                                Cross Culture Communication Training: A Conceptual Semantic Study’ International Journal
                                of Management and Development Studies (<strong>March 2017, ISSN No. 2321-1423</strong>)
                            </li>

                            <li>Sabyasachi Dasgupta and <strong>Ghatge Anurupa (2015)</strong> Understanding the
                                Stickiness of Corporate Social Responsibility Reporting as a Post Globalization Digital
                                Marketing Strategy: A Study of Multinational Automobile Companies in India., as
                                proceedings of SITM-IRC-TEC, Pune, India.</li>

                            <li>Paper (coauthored), titled , Exploring the Effectiveness of Knowledge Transfer in a
                                Virtual Environment ; A Conceptual Semantic Study published in Wesleyan Journal of
                                Research, Vol 12 No 10 (June 2020)</li>

                            <li>Paper(co-authored) presented in 4th Virtual International Conference, 2023 of Symbiosis
                                Institute of Human Resource Management SCMHRD in collaboration with EM Normandie
                                Business School.</li>

                            <li>Paper (co-authored) titled, Artificial Intelligence in Education; A Comprehensive
                                Examination of Integration, Impact and Future Implications presented and published in
                                Scopus Indexed Book series of Optimization and Data Science in Industrial Engineering
                                (ODSIE), Communications in Computer and Information Science (CCIS, Volume 2205), 2024
                            </li>
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
                            <li><strong>PhD</strong> in Organizational Management from SPPU (Pune University)</li>

                            <li><strong>MBA</strong> with specialization in Marketing, Indira Gandhi National Open
                                University, Delhi.</li>

                            <li><strong>M.A</strong>. (Russian Language), Jawaharlal Nehru University, New Delhi.</li>

                            <li><strong>PG Diploma in Public Relations and Advertising</strong>, Centre for Mass Media,
                                New Delhi.</li>

                            <li><strong>B.A (Hons.)</strong> ( Russian, French,) Jawaharlal Nehru University, New Delhi
                            </li>

                            <li>Attended a short term course (through evening lectures) in Exim Management from IIFT,
                                New Delhi.</li>
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
            <div class="section-card aos-init aos-animate" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Organizational Behavior</li>
                    <li>Management Essentials</li>
                    <li>Human Resource Management</li>
                    <li>Multicultural World Views</li>
                    <li>Services Marketing</li>
                    <li>Business Communication</li>
                    <li>International Trade</li>
                    <li>Export Management</li>
                    <li>Russian Language</li>
                    <li>Teaching in various academic programs</li>
                    <li>MBA (Communication Management)</li>
                    <li>MBA (International Business)</li>
                    <li>EPGDBM (Executive Post Graduate Diploma in Business Management)</li>
                    <li>PGPCS (Post Graduate Program in Corporate Studies)</li>
                    <li>BA/BSc Hons Liberal Arts</li>
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