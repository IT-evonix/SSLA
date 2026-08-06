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
                            <img src="{{ asset('/assets/images/faculty/Vasudev-Menon_Photo.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Vasudev Menon</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Biology and Performing Arts (Theatre)
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>vasudev.menon@ssla.edu.in </span>
                                        </p>
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
                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://scholar.google.com/citations?user=b0vVJ5gAAAAJ&hl=en"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://orcid.org/0000-0003-4845-3861" target="_blank"
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
                                    In my classroom, my fellow students and I become co-investigators of the living
                                    world. Together, we explore, integrate, discuss, challenge, fracture and develop
                                    ideas around how discourse and understanding in biology is shaped by cultural,
                                    historical, social and philosophical paradigms. The ultimate aim is to construct a
                                    fluid dialogical space where explanations in the sciences are not treated as static
                                    monolithic facts, existing in vacuum to be memorized, but need to be understood as
                                    being deeply human, perspectival, constantly evolving and entangled within webs of
                                    historical narratives. I am of the view that biological literacy, acquired this way,
                                    is transformative and simultaneously ushers in individual intellectual liberation
                                    and a more equitable, responsible society….and somewhere along the way you may
                                    encounter terms like critical thinking, inter/cross disciplinarity, problem solving,
                                    transferable skills, workforce competencies, employment readiness etc.
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
                <p>I have been teaching at SSLA in various capacities since 2015. I oversee the minor program in
                    Integrated Biology and teach courses within the Integrated Biology and Performing Arts (Theatre)
                    minors. Time and workload permitting, I offer the electives that explore contemporary issues in
                    biology lensed through philosophy, history and politics among others. </p>
                <p>My primary scholarly pursuit lies in the development of thought concerning immunity and immune
                    response to diseases. I am building an argument, inspired by frameworks developed by contemporary
                    philosophers like John Dupre, Anne Sophie-Meincke, Thomas Pradeau and others, that the twin
                    ontologies of host and pathogen are co-constructed and are processual in nature. I expect that this
                    will have a significant bearing not only on how biological individuality is understood but in a
                    pragmatic sense, on how both prophylactic and therapeutic interventions to infectious diseases are
                    imagined simultaneously at the levels of the individual and the populations.</p>
                <p>Meanwhile, I am keen on investigating the motivations behind why the language of discourse of
                    immunology is seasoned with metaphors and other linguistic devices that otherwise describe violence,
                    conflict and war. </p>
                <p>In addition to this, I hold a subsidiary interest in undergraduate Biology education, particularly in
                    developing and delivering curricula that integrate teaching-learning modalities across the Life
                    Science and humanitarian pursuits of History, Philosophy, Literature, Theatre and Film.</p>
                <p>If you enjoy conversations in process metaphysics, public understanding of immunity or infectious
                    diseases, teaching-learning biology, performing Shakespeare or south Indian cinema feel free to
                    shoot line or two to vasudev.menon@ssla.edu.in or drop by the faculty office on the first floor of
                    the Symbiosis School for Liberal Arts campus, Viman Nagar, Pune.</p>
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
                            <li>Surendralal S and Menon VR, Modelling the Unfamiliar: Structuring Simulation-Based
                                Activities to Support Liberal Arts Undergraduate Students’ Understanding of Complex
                                Systems (submitted - Conference Proceedings; International Tech4Education Conference
                                2025)</li>

                            <li>Menon VR, On the ontology of biological entities – II : Conceptual or ‘mind dependent’
                                constituents of the biosphere, Resonance: Journal of Science Education, Vol.29, No.9,
                                September 2024</li>

                            <li>Menon VR, On the ontology of biological entities – I : Material or ‘mind independent’
                                constituents of the biosphere,Journal of Science Education, Vol.29, No.8, August 2024
                            </li>

                            <li>Menon, VR, Analysis of the role and regulation of disintegrin metalloproteases in renal
                                fibrosis. PhD thesis (2012) University of Glasgow</li>

                            <li>Menon VR, Denby L, Baker AH Canonical TGF-β regulated microRNA signature expression in
                                experimental renal fibrosis, Kidney Int. 2014 Sept </li>

                            <li>Menon VR, Denby L, Baker AH MicroRNA-214 antagonism protects against renal fibrois, J Am
                                Soc Nephrol. 2014 Jan;25 (1):65-80 </li>

                            <li>Menon VR, Denby L, Baker AH Canonical transforming growth factor-β signaling regulates
                                disintegrin metalloprotease expression in experimental renal fibrosis via miR-29. Am J
                                Pathol. 2013 Dec;183(6):1885-96 </li>

                            <li>Denby L, Menon VR, Baker AH miR-21 and miR-214 are consistently modulated in renal
                                disease in rodent models, Am J Pathol. 2011 Aug;179(2):661-72 </li>

                            <li>Ferenbach DA, Menon VR, Kluth DC Macrophages expressing Hemoxyenase-1 improve renal
                                function in ischemia-reperfusion injury Molecular Therapy. 2010 Sep;18(9):1706-13 </li>

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
                            <li>PhD - Molecular Medicine; University of Glasgow, UK</li>
                            <li>M Phil - Infection, Inflammation and Immunity; University of Edinburgh, UK</li>
                            <li>M Sc - Biotechnology; University of Madras, India</li>
                            <li>B Sc - Biochemistry (with Microbiology and Clinical Biochemistry); University of Madras,
                                India</li>

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
                    <ul>
                        <li>
                            <strong>Biological Individuality</strong>
                            <ul>
                                <li>Process relational ontology of biological phenomena</li>
                                <li>Metaphysics of immunology and infection biology</li>

                            </ul>
                        </li>

                        <li>
                            <strong>Public understanding of science</strong>
                            <ul>
                                <li>Development of discourse in Immunology and infection biology</li>
                            </ul>
                        </li>

                        <li>
                            <strong>Undergraduate biology education</strong>
                            <ul>
                                <li>Curriculum development and delivery; Cross disciplinary learning competencies in
                                    Humanities and Life Sciences</li>

                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
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
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Introduction to integrated biology </li>
                    <li>Cell, organismal and organizational biology </li>
                    <li>Applied Biology, Biotech, Biopolicy and Bioethics </li>
                    <li>Biological Psychology </li>
                    <li>Introduction to theatre making </li>
                    <li>Voice and speech </li>
                    <li>Text analysis and playwriting lab </li>
                    <li>Explorations in Natural Sciences </li>
                    <li>Introduction to the Microbial World </li>
                    <li>The Self, Individuality and Identity - A Biological Perspective </li>
                    <li>Decoding the Genetically Modified </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')