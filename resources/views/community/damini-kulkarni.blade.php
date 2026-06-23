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
                            <img src="{{ asset('/assets/images/faculty/faculty-6.webp') }}" alt="Dr. Manoranjan Ghosh"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Damini Kulkarni</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Media Studies & Film Studies
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>damini.kulkarni@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/DaminiKulkarni_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6"> -->
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
                                <!-- </div> -->
                            </div>
                            <!-- Teaching Philosophy -->
                            <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <p>Damini aims to ground her pedagogy in a belief in value-creating education—one that
                                    refuses
                                    to treat value as fixed or inherited. She also hopes to encourage students to
                                    imagine the “real
                                    world” outside the university not as a pre-given against which they must fortify
                                    themselves,
                                    but as one that can be brought into being through their own creativity and labour.
                                    She is
                                    guided by the hope that attention itself can be transformative, and that careful
                                    reading,
                                    watching, and listening remain among our most powerful tools for imagining just and
                                    equal
                                    futures.
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
                    Damini holds a PhD from the Department of Media and Communication Studies at Savitribai
                    Phule Pune University, where her doctoral research examined Indian women’s engagements
                    with cinema on digital screens. This work attends closely to practices of watching—pausing,
                    rewinding, sharing, abandoning—and asks what these gestures reveal about body and agency
                    in a post-pandemic media landscape. Across her scholarship, Damini is drawn to moments
                    where media slip from the categories and roles assigned to them: when popular forms harbour
                    dissent, when song sequences interrupt narrative time, when viewing becomes an intimate,
                    domestic, or quietly political act. Her intellectual commitments are shaped by feminist
                    theory, film phenomenology, and critical media studies, and by a deep belief that teaching
                    and scholarship are forms of care.
                </p>
                <p>Damini’s academic writing has appeared in journals such as Journal of Postcolonial Writing,
                    Film International, Film Criticism, Cinergie, and Economic and Political Weekly, as well as
                    in edited volumes published by Routledge. Alongside peer-reviewed work, she has
                    consistently written for wider publics, publishing essays and criticism in Scroll.in, Himal
                    Southasian, and other platforms. She has written across various registers with the goals of
                    building and articulating theory to and with wider audiences, letting critical thought circulate
                    beyond the university, and making it answerable to the worlds it describes.</p>
                <p>At the Symbiosis School for Liberal Arts, she teaches courses on Indian cinema, film studies,
                    media research, media economics and critical writing. Damini’s commitment to education
                    extends beyond formal classrooms. She has conducted gender-sensitisation workshops for
                    adolescents, curated visual essays for Google Arts and Culture, contributed to curriculum
                    development, and participated in public conversations around cinema, gender, and digital life. </p>
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
                    </ul>-->
            </div> 
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
                                <li>Kulkarni, D. (2024). Displacing difference, interrupting Indianness: Song sequences
                                    in
                                    digitally-released Indian-American films. Journal of Postcolonial Writing, 1–14.
                                    <a href="https://doi.org/10.1080/17449855.2024.2353088 " target="_blank" class="text-danger">https://doi.org/10.1080/17449855.2024.2353088 </a>
                                </li>
                                <li>Kulkarni, D (2023) History into Myth: Popular Hindi cinema and the politics of “True
                                    Stories”. In Historicising Myths in Contemporary India. Gopinath and Deshmukh
                                    (Eds.),
                                    Routledge.</li>
                                <li>Kulkarni, D (2022) Screening Bodies: Women watching cinema in post-pandemic India.
                                    Interactive Film and Media Journal, 2 (1).</li>
                                <li>Kulkarni, D (2020) Appropriation and Articulation: Mapping movements in ‘Gully Boy’,
                                    Cinergie – Il Cinema e le altre Arti, 9(17), 87-96.
                                    doi:<a href="https://doi.org/10.6092/issn.2280-9481/10508" target="_blank" class="text-danger">https://doi.org/10.6092/issn.2280- 9481/10508 </a></li>
                                <li>Kulkarni, D (2019) Beyond the Clouds and the Construction of Indian Slums in Hindi
                                    Cinema, Film International, 17(1):89-95, DOI: 10.1386/fiin.17.1.89_1</li>
                                <li>Gajjala R, Kulkarni D, Rahut D (2019) Dialogue Interlude: Extending and Nuancing the
                                    Framework, in Digital Diasporas: Labor and Affect in Gendered Indian Digital
                                    Publics,
                                    Gajjala et al. Rowman & Littlefield.</li>
                                <li>Kulkarni, D (2019) Mapping political consciousness: Samskara’s journey from novel to
                                    film,
                                    Economic and Political Weekly, Vol. 54, Issue 39 pp 77-78 </li>
                                <li>Kulkarni, D (2018) The Many Forms of Islamophobia, Film Criticism, Vol. 42, Issue 3,
                                    DOI: <a href="http://dx.doi.org/10.3998/fc.13761232.0042.317 " target="_blank" class="text-danger">http://dx.doi.org/10.3998/fc.13761232.0042.317 </a></li>
                                <li>Kulkarni, D (2018) The Politics of Food and Sexuality in Lust Stories, Economic and
                                    Political Weekly, Vol. 53, Issue 45</li>
                                <li>Kulkarni, D (2017) ‘Strong Female Characters’ in Hindi Cinema, Economic and
                                    Political
                                    Weekly, Vol. 52, Issue 14 </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- EDUCATION -->
                        <div class="section-card" data-aos="fade-up">
                            <div class="section-header">
                                <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}"
                                    alt="Introduction icon" class="header-icon">
                                <h4 class="section-title">Education</h4>
                            </div>
                            <ul>
                                <li>PhD in Media and Communication Studies – Department of Media and Communication
                                    Studies, Savitribai Phule Pune University (2018-2023)</li>
                                <li>MA in Communication and Journalism – Department of Communication and Journalism,
                                    Mumbai University (2013-2015)
                                </li>
                                <li>Bachelor's in Mass Media – Usha Pravin Gandhi College of Management, University of
                                    Mumbai (2010-2013) </li>
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
                        <li>Critical Media Theory, Media Philosophy, Cinema Studies, Film Audiences, Digital Media </li>

                    </ul>
                </div>
                <!-- AWARDS -->
                <div class="section-card" data-aos="fade-up">
                    <div class="section-header">
                        <img src="{{ asset('/assets/images/faculty/inner/awards.svg') }}" alt="Introduction icon"
                            class="header-icon">
                        <h4 class="section-title">Awards & Fellowships</h4>
                    </div>
                    <ul>
                        <li>UGC-Junior and Senior Research Fellowship (2018-2023) </li>
                        <li>SAARC Japan Cultural-Exchange Program Awardee (2008)</li>
                    </ul>
                </div>
                <!-- COURSES -->
                <div class="section-card" data-aos="fade-up">
                    <div class="section-header">
                        <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                            class="header-icon">
                        <h4 class="section-title">Courses Taught</h4>
                    </div>
                    <ul>
                        <li>Introduction to Films, Key Concepts in Indian Cinema, Media Research and Capstone
                            Project, Rhetoric and Critical Writing, Evolution of Media, Media Ethics and Laws,
                            Economics and Business of Media, Research Methodology, and Digital Media: Frameworks,
                            Practices and Methods</li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')