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
                            <img src="{{ asset('/assets/images/faculty/Karishma-Modi.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Ms. Karishma Modi</h2>
                                        <p class="faculty-designation">Adjunct Faculty</p>
                                        <p class="faculty-institute">
                                            Humanities and Social Sciences
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>karishma.modi@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Karishma_Modi_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
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
                                                <a href="https://scholar.google.com/citations?hl=en&user=L-PQSJwAAAAJ&view_op=list_works&gmla=AH8HC4y8J5Ae-i8_ya--wMRouGq77I8g0Oc-MBLndzUWOzron3h5-m4Q--mO9MGWhEDJCRizCmRtGYqBHAsIbW-0"
                                                    target="_blank" rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://orcid.org/0009-0002-9444-8481" target="_blank"
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
                            <!-- <div class="teaching-philosophy">
                                <h5>Teaching Philosophy</h5>
                                <ul>
                                    <li>Education Specialisation</li>
                                    <li>Education in the Contemporary World</li>
                                    <li>Humanity and Big History: Our Challenge for Survival</li>
                                    <li>Research Methods II: Overview of Methods and Analysis</li>
                                </ul>
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
                    Ms. Karishma Modi comes from the education industry with over thirteen years in experience as a
                    teacher, experiential education facilitator, curriculum and learning materials designer and a
                    teacher trainer. While simultaneously completing her Master of Arts degree in Education (Elementary)
                    from Tata Institute of Social Sciences and working under the Environmental Education Programme at
                    Dakshin Foundation, she developed an interest in place-based and environmental education which she
                    carries into her present work. She co-founded the Local Voices in Conservation Programme and
                    co-facilitated its first Summer School in Port Blair in 2023.
                </p>
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
                          <li><strong>Journal Article</strong><br>Modi, K. (2022) What Can a Caged Bird Sing? A Case for a Place-based Component of Curriculum. Language and Language Teaching: A Peer-reviewed Journal, 11(2), 37-44.</li>

<li><strong>Popular Article</strong><br>Modi, K. (2021, April 17). Cast Away: A Case For Place-based Education in the Andaman and Nicobar Islands. Retrieved from The Bastion: <a href="https://thebastion.co.in/politics-and/cast-away-a-case-for-place-based-education-in-the-andaman-and-nicobar-islands/" class="text-danger">https://thebastion.co.in/politics-and/cast-away-a-case-for-place-based-education-in-the-andaman-and-nicobar-islands/</a></li>

<li><strong>Student Book Chapter</strong><br>Modi, K. (2020) Reproducing Silences: Using “purity” of language to maim the disenfranchised. In O. Prakash, & R. Kumar (Eds.), Apprenticeship in Language Studies (pp. 148-159). Guwahati: Eastern Book House.</li>

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
                           <li>2017 – 2019<br>
Master of Arts  <br>
(Elementary Education)
Tata Institute of Social Sciences, 
Mumbai</li>
                           <li>2008 – 2011<br>
Bachelor of Arts (Economics)
University of Pune, Pune</li>
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
                    <li>Curriculum and Pedagogy</li>
                    <li>Nature Connectedness in Education</li>
                    <li>Environmental Literacy</li>
                    <li>Elementary Education</li>
                    <li>Curriculum Design</li>
                    <li>Learning Experience and Instructional Material Design</li>
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
                    <li>Research Methodology: Environmental Education, Place-based Education</li>
                </ul>
            </div> -->
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')