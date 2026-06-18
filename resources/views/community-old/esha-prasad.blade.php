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
                            <img src="{{ asset('/assets/images/faculty/Esha_Prasad_photo.webp') }}" alt="Dr. Esha Prasad"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Esha Prasad</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                           Archaeology & Anthropology
                                        </p>
                                        <!-- <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>manoranjan.ghosh@ssla.edu.in</span>
                                        </p> -->
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Esha_CV.pdf') }}"
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
                                <p>I believe teaching is also a continuous process of learning. It is a lifelong journey in which new ideas, techniques, paradigms, and strategies are constantly explored not only by students but also by teachers. As disciplines evolve over time, teaching philosophies must also adapt to accommodate new approaches, methodologies, and ways of understanding knowledge.</p>
                                <p>My teaching philosophy centres on creating an environment that encourages students to think beyond prescribed reading material. Subjects such as history and archaeology require not only a strong understanding of texts and theoretical frameworks, but also the ability to apply these ideas in the field. I believe that real-life examples and field experiences help students engage more deeply with theoretical concepts and understand their practical relevance. Since many theoretical models emerge from lived and field-based experiences, my teaching approach seeks to connect classroom learning with real-world contexts through interactive discussions, participation, and small research-based projects. I also encourage students to understand the meaning and process of research itself, while motivating them to undertake small-scale independent research projects. Through this approach, I aim to cultivate curiosity, critical thinking, and a deeper engagement with the discipline.</p>
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
                    Dr. Esha Prasad is an assistant professor at Symbiosis School for Liberal Arts, Symbiosis International (Deemed University). She holds a doctorate in archaeology from Deccan College Post Graduate and Research Institute, Pune. She is the receiver of the Homi Bhabha Fellow (2022-24) and Ashoka Fellow (2024-26). Dr. Prasad works in the field of archaeology, and her focus areas are field archaeology, protohistory, chalcolithic studies, ceramic studies, and cross-cultural comparison. Her current work, entitled Archaeological Assessment and Research in Khteri, is a long-term multidisciplinary project aimed at studying different archaeological cultural periods within the Khteri copper belt from 3000 BCE (Chalcolithic period) to 1st century CE (Early Historic period). Under AARKh, she recently excavated the site of Bansiyal in Rajasthan. 
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
                            <li>Prasad Esha, Prabodh Shirvalkar, Shashank Babu, Tariq Tamboli 2025. Beyond the mines: Chalcolithic pattern of settlement along the Khetri belt, Rajasthan, India. L'Anthropologie, Volume 129, Issue 4.  
                                <a href="https://doi.org/10.1016/j.anthro.2025.103405" target="_blank" rel="noopener noreferrer">https://doi.org/10.1016/j.anthro.2025.103405</a></li>
                            <li>Shirvalkar Prabodh, Esha Prasad and Y.S. Rawat 2025. Caravanserai, a lesser-known aspect of Harappan trade mechanism: A case study of Kotada Bhadli, Kachchh, Gujarat, India. L'Anthropologie, Volume 129, Issue 4.  
                                <a href="https://doi.org/10.1016/j.anthro.2025.103409 " target="_blank" rel="noopener noreferrer">https://doi.org/10.1016/j.anthro.2025.103409 </a></li>
                              <li>
                               Prasad Esha and Shweta Sinha Deshpande 2024. Relooking at the Archaeology of Neem ka Thana Tehsil, Rajasthan, India, Archaeological Research in Asia, volume 39.
                                <a href="https://doi.org/10.1016/j.ara.2024.100538" target="_blank" rel="noopener noreferrer">https://doi.org/10.1016/j.ara.2024.100538</a>
                            </li>

                            <li>
                               	Deshpande, Shweta, and Prasad, Esha. “A Reappraisal of the Chalcolithic of Central and Deccan India.” In Oxford Research Encyclopedia of Anthropology. Oxford University Press, 2018—. Article published October 18, 2023. doi: 
                                <a href="https://doi.org/10.1093/acrefore/9780190854584.013.567" target="_blank">
                                    https://doi.org/10.1093/acrefore/9780190854584.013.567
                                </a>
                            </li>

                            <li>
                              	Prasad Esha and R N Singh 2021. The Chronology of the Ganeshwar Jodhpura Culture: A Reassessment Based on Graffiti and Cross-Cultural Comparisons, Ancient Asia, 12, 10. http://doi.org/10.5334/aa.238 
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
                            <li>Ph.D. Characterising the Ganeshwar-Jodhpura Ceramic Assemblage: A Case Study of the Ceramics from Ganeshwar, Sikar, Rajasthan. Deccan College Post Graduate and Research Institute, Pune 2020</li>     
                            <li>Master of Arts (Ancient Indian History, Culture, and Archaeology), Deccan College Post Graduate and Research Institute, Pune, 2014 </li>                                                   
                            <li>B.A. History Honors, Sri Venketeswara College, University of Delhi, Delhi, 2012</li>                                                   
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
                    <li>Archaeology</li>
                    <li>Ethno-archaeology</li>
                    <li>Ceramic Studies</li>
                    <li>Proto-history</li>
                    <li>Chalcolithic cultures</li>
                    <li>Cultural Interactions</li>
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
                    <li>UGC-Junior and Senior Research Fellowship (2018-2023) </li>
                    <li>SAARC Japan Cultural-Exchange Program Awardee (2008)</li>
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
                    <li>What is Anthropology? </li>
                    <li>Introduction to Archaeology: Theory and Techniques</li>
                    <li>Socio-Cultural Anthropology</li>
                    <li>Anthropology Today: Its applications</li>
                    <li>Understanding India</li>
                    <li>The Living Past: Comprehending India</li>
                    <li>Verily Food is Life: The story of India through it's Food</li>
                   
                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')