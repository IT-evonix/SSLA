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
                                           Biology and Theatre
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
                    I completed my doctoral degree in Molecular Medicine at the University of Glasgow, UK and a Research Assistantship at the MRC Centre for Inflammation Research, University of Edinburgh, UK. My training and work there were broadly in the area of immunology/infectious disease, and specifically in the role of macrophages in the inflammatory pathogenesis and resolution in acute and chronic renal injury models. From here on, I developed an interest in what would broadly be in the area of history, philosophy and public understanding of immunology/infection biology and process ontology driven explanations to biological individuality.
                </p>
                <p>
                    I have been teaching at SSLA in various capacities since 2015. Outside of work, you may find me plying my trade in writing, directing or performing in theatre and film, having trained (albeit not as much as one would have liked) as an actor at The Royal Conservatoire of Scotland and a cinematographer at the L.V.Prasad Film and TV Institute, Chennai.
                </p>
                <p class="new_faculty_link">
                    If you enjoy conversations in process metaphysics, public understanding of immunity or infectious diseases, teaching-learning biology, performing Shakespeare or south Indian cinema feel free to shoot line or two to <a href="mailto:vasudev.menon@ssla.edu.in">vasudev.menon@ssla.edu.in</a> or meet me (prior appointment would help immensely) in the faculty office on the first floor of the Symbiosis School for Liberal Arts campus, Viman Nagar, Pune.
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
                <div class="col-md-12">
                    <!-- PUBLICATIONS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Publications</h4>
                        </div>
                        <ol class="ps-3">
                            <li>Surendralal S and Menon VR, <em>Modelling the Unfamiliar: Structuring Simulation-Based
                                    Activities to Support Liberal Arts Undergraduate Students’ Understanding of Complex
                                    Systems</em> (submitted - Conference Proceedings; International Tech4Education
                                Conference 2025)</li>

                            <li>
                                Menon VR, <em>On the ontology of biological entities – II : Conceptual or ‘mind
                                    dependent’ constituents of the biosphere</em>, Resonance: Journal of Science
                                Education, Vol.29, No.9, September 2024
                                <a href="https://www.ias.ac.in/article/fulltext/reso/029/09/1231-1253" target="_blank"
                                    class="text-danger">
                                    https://www.ias.ac.in/article/fulltext/reso/029/09/1231-1253
                                </a>
                            </li>

                            <li>
                                Menon VR, <em>On the ontology of biological entities – I : Material or ‘mind
                                    independent’ constituents of the biosphere</em>, Journal of Science Education,
                                Vol.29, No.8, August 2024
                                <a href="https://www.ias.ac.in/article/fulltext/reso/029/08/1111-1126" target="_blank"
                                    class="text-danger">
                                    https://www.ias.ac.in/article/fulltext/reso/029/08/1111-1126
                                </a>
                            </li>

                            <li>Menon VR, <em>Analysis of the role and regulation of disintegrin metalloproteases in
                                    renal fibrosis</em>. PhD thesis (2012), University of Glasgow</li>

                            <li>Menon VR, Denby L, Baker AH, <em>Canonical TGF-β regulated microRNA signature expression
                                    in experimental renal fibrosis</em>, Kidney Int. 2014 Sept</li>

                            <li>Menon VR, Denby L, Baker AH, <em>MicroRNA-214 antagonism protects against renal
                                    fibrois</em>, J Am Soc Nephrol. 2014 Jan;25(1):65-80</li>

                            <li>Menon VR, Denby L, Baker AH, <em>Canonical transforming growth factor-β signaling
                                    regulates disintegrin metalloprotease expression in experimental renal fibrosis via
                                    miR-29</em>, Am J Pathol. 2013 Dec;183(6):1885-96</li>

                            <li>Denby L, Menon VR, Baker AH, <em>miR-21 and miR-214 are consistently modulated in renal
                                    disease in rodent models</em>, Am J Pathol. 2011 Aug;179(2):661-72</li>

                            <li>Ferenbach DA, Menon VR, Kluth DC, <em>Macrophages expressing Hemoxyenase-1 improve renal
                                    function in ischemia-reperfusion injury</em>, Molecular Therapy. 2010
                                Sep;18(9):1706-13</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- EDUCATION -->
                    <!-- <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ul>
                            <li>Ph.D. in Climate and
                                Development, Indian
                                Institute of Technology,
                                Kharagpur, 2017-2021.</li>
                            <li>M.A. in Geography
                                (Climate
                                Change), University of
                                Burdwan, 2013-2015.</li>
                            <li>B.Ed. in Educational
                                Psychology, Himachal
                                Pradesh University, 2013.</li>
                            <li>B.A. in Geography
                                (Honours), Birpara
                                College, University of
                                North Bengal, 2009-2012.</li>
                        </ul>
                    </div> -->
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
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li><strong>Biology</strong></li>
                    <ul>
                        <li>Introduction to integrated biology (TH4940)</li>
                        <li>Cell, organismal and organizational biology (TH4939)</li>
                        <li>Applied biology and biotechnology (T4400)</li>
                    </ul>

                    <li><strong>Theatre</strong></li>
                    <ul>
                        <li>Introduction to theatre making (T6254)</li>
                        <li>Voice and speech (T6249)</li>
                        <li>Text analysis and playwriting lab (T6250)</li>
                    </ul>

                    <li><strong>Minor Core</strong></li>
                    <ul>
                        <li>Explorations in Natural Sciences (TH4077 - Co-taught with Dr Sumithra Surendralal)</li>
                    </ul>

                    <li><strong>Electives</strong></li>
                    <ul>
                        <li>Introduction to the Microbial World (T6602)</li>
                        <li>The Self, Individuality and Identity - A Biological Perspective (T6863)</li>
                        <li>Decoding the Genetically Modified (TH4078)</li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')