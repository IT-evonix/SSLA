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
                            <img src="{{ asset('/assets/images/faculty/Silvia-Fernandes-color.webp') }}"
                                alt="Dr. Silvia Fernandes" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Silvia Fernandes</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Psychology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>silvia.fernandes09@gmail.com</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/silvia-fernandes-cv.pdf') }}"
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
                    Dr. Silvia Fernandes boasts a diverse background in the realm of Psychology. Her journey commenced
                    with a Bachelor’s degree, followed by a Master’s degree in Psychology, which laid a strong
                    foundation for her in the field of Clinical Psychology. Subsequently, she successfully completed her
                    Ph.D., focusing on Internet addiction and its associations among adolescents from Savitribai Phule
                    Pune University.
                </p>
                <p>
                    Over the last ten years, she has assumed significant roles in various domains of Psychology,
                    encompassing research, Alzheimer’s and dementia care, and teaching Psychology for the IB Diploma
                    Program. She has also contributed as a Visiting Faculty of Psychology at Flame University, Lavale.
                    Presently, she serves as an Assistant Professor of Psychology at Symbiosis School for Liberal Arts
                    (Pune). Here, she assumes multiple roles including teaching, and dissertation and seminar mentorship
                    and guidance.
                </p>
                <p>
                    Notably, Dr. Fernandes has contributed to the field by presenting her work at various conferences
                    through published articles centered around factors linked to Internet addiction and its effect on
                    adolescents. Additionally, she has channeled her creative talents into writing by authoring a book
                    chapter on Screentime Addiction, which is currently in the publication process further showcasing
                    her multifaceted expertise. Dr. Fernandes is inspired to understand and address modern-day
                    psychological challenges in order to make a valuable impact on the field.
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
                            <!-- <li>
                                Menon VR, <em>On the ontology of biological entities – II : Conceptual or ‘mind
                                    dependent’ constituents of the biosphere</em>, Resonance: Journal of Science
                                Education, Vol.29, No.9, September 2024
                                <a href="https://www.ias.ac.in/article/fulltext/reso/029/09/1231-1253" target="_blank"
                                    class="text-danger">
                                    https://www.ias.ac.in/article/fulltext/reso/029/09/1231-1253
                                </a>
                            </li> -->
                            <!-- --- -->
                            <li>
                                Fernandes, S. (2024). Understanding and Promoting Teachers’ OCB During the COVID-19
                                Pandemic. In: Patki, S.M., Abhyankar, S.C. (eds) Organizational Citizenship Behaviour
                                (OCB) in India. Springer, Singapore.
                                <a href="https://doi.org/10.1007/978-981-99-9688-9_2" target="_blank"
                                    class="text-danger">https://doi.org/10.1007/978-981-99-9688-9_2</a>
                            </li>
                            <li>
                                Fernandes, S. (2023). Screen Time Addiction: An Overview. In: Gupta, S. (ed) Handbook of
                                Research on Child and Adolescent Psychology Practices and Interventions. IGI Global.
                                ISBN: 9781668499832.
                            </li>
                            <li>
                                Fernandes, S., & Natu, S. (2016). Internet Addiction: Can Cognitive Behaviour Therapy
                                Help? International Journal of Indian Psychology, 4(1), 76, 53-71.
                            </li>
                            <li>
                                Fernandes, S., & Natu, S. (2016). Internet Addiction: A Focus Group Discussion Approach.
                                IOSR Journal of Humanities and Social Science, 21(10), 11, 19-23.
                            </li>
                            <!-- --- -->
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- PUBLICATIONS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ol class="ps-3">
                            <li>Ph. D. Psychology (SPPU) on the topic of Internet Abuse and its Related Variables among
                                Teenagers (2018)</li>

                            <li>MA Clinical Psychology (SPPU) [4.94 GPA]</li>

                            <li>BA Psychology (Wadia College) [77.75%]</li>

                            <li>HSC (Wadia College) (74.17%)</li>

                            <li>SSC (St. Josephs’ Convent, Kirkee) (69%)</li>
                            <!-- --- -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')