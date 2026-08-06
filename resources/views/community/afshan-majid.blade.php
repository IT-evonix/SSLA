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
                            <img src="{{ asset('/assets/images/faculty/faculty-3.webp') }}" alt="Dr. Manoranjan Ghosh"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Afshan Majid</h2>
                                        <p class="faculty-designation">Assistant Professor</p>

                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">

                                            <a href="mailto:afshan.majid@ssla.edu.in " class="text-decoration-none">
                                                afshan.majid@ssla.edu.in
                                            </a>
                                        </p>
                                        <!-- <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Shweta_Sinha_Deshpande_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-md-6"> -->
                                <!-- <div class="mt-5">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://orcid.org/0000-0003-4510-5618" target="_blank"
                                                    rel="noopener">
                                                    ORCID
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://scholar.google.com/citations?user=tr8PJHQAAAAJ&hl=en"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=57192752335"
                                                    target="_blank" rel="noopener">
                                                    SCOPUS: 57192752335
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId=59193033300"
                                                    target="_blank" rel="noopener">
                                                    SCOPUS: 59193033300
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank" rel="noopener">
                                                    Web of Science / Publons / Researcher ID: AAO86892020
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" target="_blank" rel="noopener">
                                                    SSRN: 4196880
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://vidwan.inflibnet.ac.in/profile/50795" target="_blank"
                                                    rel="noopener">
                                                    Vidwan: 279989
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
                                <!-- </div> -->
                            </div>
                            <!-- Teaching Philosophy -->
                            <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <p>
                                    An aspiring science student who stumbled on to history serendipitously, I not only
                                    found a new passion but also promised myself that I will work to make the discipline
                                    accessible to everyone. History suffers from a reputation of being dry as dust and
                                    an insufferable list of facts that need to be memorised. Positioning myself against
                                    yellowed notes, verbose PPTs and droning lectures, in my class the students are
                                    motivated to reach conclusions and ideas by themselves. My role is to facilitate the
                                    journey. In this process, they discover that history is not a fossilised discipline
                                    but is an exciting subject. It is, to quote E.H. Carr, ‘an unending dialogue between
                                    the past and the present’.


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
                    Dr. Afshan Majid is Deputy Director and Assistant Professor at the Symbiosis School for Liberal
                    Arts. Trained as a Medieval Indian historian, she holds a doctorate from Centre of Advanced Study,
                    Department of History, AMU. Her doctoral research reinterpreted Mughal society and courtly culture
                    through the writings of the sixteenth century historian Abdul Qadir Badauni, reflecting her
                    long-standing engagement with textual analysis, primary sources, and socio-cultural history. She
                    also holds a postgraduate diploma in Women's Studies. Her work bridges Medieval Indian history, Big
                    History, Education and Gender Studies. She co-developed and co-taught one of the first
                    university-level Big History courses in South Asia. In her free time, she can be found reading and
                    re-reading Douglas Adams, Terry Pratchett and P.G. Wodehouse.
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
                        <ol class="ps-3 publication-list">
                           <strong>Papers</strong>

                            <li>‘An Accidental Deity: A New Religious Icon for the Modern Age’, Social Evolution &
                                History, Vol. 24, No. 1, 2025,</li>
                            <li>‘Pedagogy in Akbar’s Reign: A Big Historical Perspective’, Journal of Big History, Vol 6
                                No 1, 2023, pp 7-13</li>
                            <li>‘Akbar's Views on Women as Recorded by Badauni and Abul Fazl’, Proceedings of Indian
                                History Congress, JNU, 2015</li>
                            <li>‘Women and a Theologian; The Ideas and Narratives of Abdul Qadir Badauni’, Proceedings
                                of Indian History Congress, 2011, Gaur Banga University, Malda</li>
                            <li>‘Ideology and Personal Grievances; Badauni’s Career at Akbar’s Court’, Proceedings of
                                the Indian History Congress, 2011 Punjabi University, Patiala</li>
                          <strong>Books</strong>
                            <li>Co-author, Women and Society, book for MA Sociology (Distance mode), Jamia Millia
                                Islamia, ISBN: 978-93-5259-692-8</li>
                            <li>Co-author, Gender History, Book for MA History (Distance Learning), Gauhati University,
                                ISBN: 978-93-259-8780-7</li>

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
                            <li>PhD. Badauni and Mughal Society and Culture as Reflected in his Works. Centre of
                                Advanced Study in History, Department of History, Aligarh Muslim University, 2015</li>
                            <li>P.G. Diploma in Women's Studies, Centre of Women’s Studies, Aligarh Muslim University,
                                2010 </li>
                            <li>UGC JRF, 2010</li>
                            <li>M.A. (History), Centre of Advanced Study in History, Department of History, Aligarh
                                Muslim University, 2009
                            </li>
                            <li>B.A (Hons., History), Centre of Advanced Study in History, Department of History,
                                Aligarh Muslim University, 2007 </li>
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
                    <li>Textual Analysis</li>
                    <li>Medieval Indian history</li>
                    <li>Socio-cultural history</li>
                    <li>Women’s History</li>
                    <li>Big History</li>

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
                    <li>History of Ideas</li>
                    <li>Understanding India; What is India? Unravelling the Mystery</li>
                    <li>Histories and Historiographies</li>
                    <li>Connected World</li>
                    <li>Medieval India: 11th to 18th Century</li>
                    <li>South Asian History and Culture</li>
                    <li>Colonialism in Latin America and Africa</li>
                    <li>Contemporary Latin America and Africa</li>
                    <li>History of West Asia</li>
                    <li>The Emerging Global Order</li>
                    <li>History of Man; From Ape to Alexander and Beyond</li>
                    <li>Humanity and Big History: Our Challenge for Survival</li>
                    <li>History and Story Through the Looking Glass of Fiction</li>
                    <li>Leadership in World Politics</li>
                    <li>Issues in World Politics</li>
                    <li>History of Law and Legal Institutions in Ancient and Medieval India</li>
                    <li>Indian National Movement</li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')