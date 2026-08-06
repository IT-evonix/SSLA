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
                            <img src="{{ asset('/assets/images/faculty/Debapriya_photo.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Debapriya Ganguly</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Sociology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>debapriya.ganguly@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Dr_Debapriya_Ganguly_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6"> -->
                                <div class="mt-5">
                                    <h4 class="research-title">Research Profiles</h4>
                                    <ul class="profile-links">

                                        <li>
                                            <a href="https://orcid.org/0000-0001-8320-273X" target="_blank"
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
                            <p>Debapriya’s training in Sociology for more than a decade in both public and private
                                institutions has exposed her to diverse pedagogical frameworks, which have empowered her
                                to articulate within the discipline. These processes were mediated by a reflexive self.
                                As an educator formerly associated with a public higher educational institution, her
                                teaching methods have been significantly influenced by her interactions with students of
                                M.A. Sociology as well as B.A. Liberal Arts. This learning experience has made her
                                sensitive to the diversity in and across classrooms, but also gave her cues to handle it
                                effectively. Debapriya focuses on being an accessible teacher who believes in the
                                principles of inclusivity, dialogical exchanges, and processes of mutual learning.</p>
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
                    Dr. Debapriya Ganguly is a Sociologist with interests in Urban Studies, Social Theory, Popular
                    Culture,
                    Sociology of Education, and Digital Populism.
                </p>

                <p>
                    Debapriya has been an Assistant Professor at the Symbiosis School for Liberal Arts, SIU, since
                    January
                    2026. Prior to that, she worked as an Assistant Professor in the Department of Sociology at
                    Savitribai
                    Phule Pune University for more than 6 years. She also contributed as a Visiting Faculty for the B.A.
                    Liberal Arts program at the Interdisciplinary School of Science, SPPU, between 2019 and 2022.
                    Debapriya
                    completed her Doctoral degree at the University of Hyderabad, followed by her role as a research
                    consultant with the Citizens' Rights Collective and ActionAid Karnataka.
                </p>

                <p>
                    She has presented papers in various national and international conferences, seminars, and workshops,
                    and
                    her work has been published as journal articles and book chapters in Sage, Taylor &amp; Francis,
                    Wiley,
                    Springer, Bloomsbury, among others. Her current research is on three specific areas: climate
                    governance
                    and urban rivers, pedagogical changes in higher education, and horror and sexual violence.
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
                            <li>[Co-Authored with Vishal Chaudhari] “Vulnerabilities of Private Healthcare Workers
                                during COVID19 Pandemic” in South Asia Research (2026), Volume 45, No. 3. <a
                                    href="https://doi/10.1177/02627280261415967" class="text-danger"
                                    target="_blank">https://doi/10.1177/02627280261415967</a>. </li>
                            <li>[Co-Authored with Aaron Reudenbach] “Spa Tourism and Urban Transformation: The
                                (re)imagination of Montecatini” in Urbanities (2025), Volume 15, Issue No.2. </li>
                            <li>The right to sustainable urban life? Contextualising the Chipko March in Pune. (2025).
                                Urban Now, International Journal of Urban and Regional Research.<a
                                    href="https://www.ijurr.org/the-urban-now/the-right-to-sustainable-urban-life-contextualizing-the-chipko-march-in-pune/"
                                    class="text-danger"
                                    target="_blank">https://www.ijurr.org/the-urban-now/the-right-to-sustainable-urban-life-contextualizing-the-chipko-march-in-pune/</a>.
                            </li>
                            <li>Internet Activism and the Populist Agenda, in Joseph Chacko Chennattuserry, Madhumati
                                Deshpande, Paul Hong (ed.) Encyclopaedia of New Populism and Responses in the 21st
                                Century, Springer (Singapore), 2024. <a
                                    href="https://doi.org/10.1007/978-981-16-9859-0_424-1" class="text-danger"
                                    target="_blank">https://doi.org/10.1007/978-981-16-9859-0_424-1</a>.</li>
                            <li>‘Death’ of a Teacher?: Pandemic, Pedagogy and Virtual Classrooms in Globalisation,
                                Societies and Education (2023), Volume 23, Issue 5. <a
                                    href="https://doi.org/10.1080/14767724.2023.2249432" class="text-danger"
                                    target="_blank">https://doi.org/10.1080/14767724.2023.2249432</a>. </li>
                            <li>[Co-Authored with Rakesh M Krishnan] Class, Consumption and Culture: High Streets and
                                the Neoliberal Imagination of the Indian Cities, Sadan Jha and Gauri Bharat (eds.).
                                Social Life of Streets in India, Bloomsbury, 2023.</li>
                            <li>State, Governance and Urban Poor: Insights from Visakhapatnam City, in Jenia Mukherjee
                                (ed.) Sustainable Urbanisation in India: Challenges and Opportunities, Springer
                                (Singapore), 2018. <a href="https://link.springer.com/book/10.1007/978-981-10-4932-3"
                                    class="text-danger"
                                    target="_blank">https://link.springer.com/book/10.1007/978-981-10-4932-3</a>. </li>
                            <li>“Free Nagas” and the Indian State: Negotiations between a 'Nation' and a 'Region'" in
                                Man and Society: A Journal of North-East Studies (2017), Volume XIV. [An ICSSR-NERC
                                journal].</li>

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
                            <li><strong>PhD in Sociology :</strong> Department of Sociology, University of Hyderabad
                                (2019)</li>
                            <li><strong>Thesis Title :</strong> Development, Local State and Labouring Poor: A Study of
                                Urban Processes in
                                Visakhapatnam.</li>
                            <li><strong>M.Phil. in Regional Studies :</strong> Centre for Regional Studies, University
                                of Hyderabad (2013)
                            </li>
                            <li><strong>Dissertation Title :</strong> 'Free Nagas' and the Paradox of Development.</li>
                            <li><strong>M. A. in Sociology :</strong> Department of Sociology, University of Hyderabad
                                (2011)</li>
                            <li><strong>B. A. (with Honours) in Sociology :</strong> St. Xavier's College, University of
                                Calcutta (2009).
                            </li>

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
                    <li>Urban Studies</li>
                    <li>Social Theory</li>
                    <li>Sociology of Education</li>
                    <li>Popular Culture</li>
                    <li>Gender Studies and Digital Populism</li>

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
                    <li>Research Grant of the Interdisciplinary School of Science, Savitribai Phule Pune University, for
                        the project titled, ‘Diseased City and Disaster Managers: A Study on the Health Care Workers in
                        Pune’ (2021-22)</li>
                    <li>International Travel Grant sanctioned under UPE II of the University of Hyderabad for presenting
                        papers at the University of Leeds and the University of London (June-July 2016)</li>
                    <li>Indian Council of Social Science Research Doctoral Fellowship (2015)</li>

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
                    <li>Classical Sociological Theory, State, Civil Society and Market</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')