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
                            <img src="{{ asset('/assets/images/faculty/Dr-Manjari Jonnalagadda.webp') }}"
                                alt="Dr. Manjari Jonnalagadda" class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div>
                                        <h2 class="faculty-name">Dr. Manjari Jonnalagadda</h2>
                                        <p class="faculty-designation">Assistant Professor</p>
                                        <p class="faculty-institute">
                                            Anthropology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>manjari.jonnalagadda@ssla.edu.in</span>
                                        </p>
                                        <!-- <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/Manjari Jonnalagadda_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-md-5">
                                    <div class="">
                                        <h4 class="research-title">Research Profiles</h4>
                                        <ul class="profile-links">
                                            <li>
                                                <a href="https://www.ssla.edu.in/faculty" target="_blank"
                                                    rel="noopener">
                                                    Google Scholar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.webofscience.com/wos/author/record/HMO-8771-2023"
                                                    target="_blank" rel="noopener">
                                                    ResearcherID
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://orcid.org/signin" target="_blank" rel="noopener">
                                                    ORCID
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://vidwan.inflibnet.ac.in/profile/344147" target="_blank"
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
                        <div class="teaching-philosophy">
                            <h5>Teaching Philosophy</h5>
                            <p>
                                Teaching has made me an ardent learner, allowing constant questioning and exploration of
                                new ideas, advancements, and frameworks, enhancing my understanding of fundamental and
                                seminal concepts. My teaching philosophy is centred on creating a co-constructed
                                collaborative learning space wherein, I as a facilitator guide students in understanding
                                disciplinary content and help connect concepts to broader theoretical and societal
                                questions. Through inquiry and activity based learning, I believe in mentoring students
                                to cultivate their intellectual curiosity, analytical and critical thinking skills.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- BIO -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/introduction.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Bio</h4>
                </div>
                <p>
                    Dr. Manjari Jonnalagadda is currently serving as an Assistant Professor at the Symbiosis School for
                    Liberal Arts (SSLA), SIU, Pune. She has a Ph.D. in Anthropology from Savitribai Phule Pune
                    University (SPPU), Pune, specializing in Biological Anthropology. She is the recipient of the Homi
                    Bhabha Fellowship (2026-2028) and SERB, Early Career research Award (2016-2020). Her research
                    focuses on understanding the evolution of complex traits among Indian populations using phenotypic,
                    genetic and evolutionary perspectives. Her current projects focus on unraveling the role of myriad
                    factors contributing to evolution of complex traits of skin pigmentation and vitamin D in Indian
                    populations. She also works in the domain of personalized medicine through the analysis of genes and
                    genetic variations involved in drug metabolism.
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
                Invited as a <strong>Reviewer</strong> for manuscripts submitted to 
                <strong>PLoS ONE</strong>, <strong>Scientific Reports</strong>, and the 
                <strong>Journal of Human Genomics</strong>.
            </li>
            <li>
                Invited Speaker at the <strong>INBIX-ADNAT 2024</strong> international scientific conference titled 
                <em>“Integrating Archaeogenetics, Forensics & Multi-omics for Human Health Breakthrough”</em>, 
                organized by <strong>Banaras Hindu University, Varanasi</strong>. Delivered a talk titled 
                <em>“Fair & Lovely or Dark & Beautiful: Exploring Skin Pigmentation Diversity in India”</em>, 
                and also served as a <strong>Poster Evaluator</strong> at the conference.
            </li>
            <li>
                Invited Speaker at <strong>SSLA’s Research Colloquium</strong>, where she discussed 
                methodological challenges in studying skin pigmentation diversity in South Asia, 
                emphasizing the limitations of applying <strong>Eurocentric genetic models</strong> 
                to Indian contexts.
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

                            <li>Jonnalagadda, M., Bhumkar, S., Ozarkar, S., & Ashma, R. (2026). Determinants of Vitamin
                                D in Indian Populations: Understanding the Interplay of Skin Pigmentation, Sun Exposure,
                                and Genetic Variants. American Journal of Human Biology, 38(3), e70228. <a
                                    href="https://doi.org/10.1002/ajhb.70228" target="_blank"
                                    class="text-danger">https://doi.org/10.1002/ajhb.70228</a></li>
                            <li>Mendes, M., Jonnalagadda, M., Ozarkar, S., Torres, F. C. L., Pua, V. B., Kendall, C.,
                                Tarazona-Santos, E., & Parra, E. J. (2022). Identifying signatures of natural selection
                                in Indian populations. PLOS ONE, 17(8), e0271767. <a
                                    href="https://doi.org/10.1371/journal.pone.0271767" target="_blank"
                                    class="text-danger">https://doi.org/10.1371/journal.pone.0271767</a></li>
                            <li>Jonnalagadda, M., Bharti, N., Kasibhatla, S. M., Wagh, M. A., Joshi, R., Ozarkar, S., &
                                Ashma, R. (2022). MC1R diversity and its role in skin pigmentation variation in West
                                Maharashtra, India. American Journal of Human Biology, 34(7), e23734. <a
                                    href="https://doi.org/10.1002/ajhb.23734" target="_blank"
                                    class="text-danger">https://doi.org/10.1002/ajhb.23734</a></li>
                            <li>Debortoli, G., Abbatangelo, C., Ceballos, F., Fortes-Lima, C., Norton, H. L., Ozarkar,
                                S., Parra, E. J., & Jonnalagadda, M. (2020). Novel insights on demographic history of
                                tribal and caste groups from West Maharashtra (India) using genome-wide data. Scientific
                                Reports, 10(1), Article 1. <a href="https://doi.org/10.1038/s41598-020-66953-3"
                                    target="_blank" class="text-danger">https://doi.org/10.1038/s41598-020-66953-3</a>
                            </li>
                            <li>Jonnalagadda, M., Faizan, M. A., Ozarkar, S., Ashma, R., Kulkarni, S., Norton, H. L., &
                                Parra, E. (2019). A Genome-Wide Association Study of Skin and Iris Pigmentation among
                                Individuals of South Asian Ancestry. Genome Biology and Evolution, 11(4), 1066–1076. <a
                                    href="https://doi.org/10.1093/gbe/evz057" target="_blank"
                                    class="text-danger">https://doi.org/10.1093/gbe/evz057</a></li>
                            <li>Jonnalagadda, M., Norton, H., Ozarkar, S., Kulkarni, S., & Ashma, R. (2016). Association
                                of genetic variants with skin pigmentation phenotype among populations of west
                                Maharashtra, India. American Journal of Human Biology, 28(5), 610–618. <a
                                    href="https://doi.org/10.1002/ajhb.22836" target="_blank"
                                    class="text-danger">https://doi.org/10.1002/ajhb.22836</a></li>
                            <li>Jonnalagadda, M., Ozarkar, S., Ashma, R., & Kulkarni, S. (2016). Skin pigmentation
                                variation among populations of West Maharashtra, India. American Journal of Human
                                Biology: The Official Journal of the Human Biology Council, 28(1), 36–43. <a
                                    href="https://doi.org/10.1002/ajhb.22738" target="_blank"
                                    class="text-danger">https://doi.org/10.1002/ajhb.22738</a></li>



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
                            <li><strong>Ph.D. Anthropology</strong> – May 2016. Savitribai Phule Pune University
                                (Formerly University of
                                Pune), Pune. <strong>Specialization :</strong> Biological Anthropology. <strong>Thesis
                                    Title :</strong> The Study of
                                Phenotypic and Genotypic Variation in Skin Pigmentation among Select Populations of
                                Maharashtra</li>
                            <li><strong>M.Sc. Anthropology (with research)</strong> – CGPA – 7.19/10, Grade ‘A’ (66.6%).
                                June 2007,
                                University of Pune, Pune. <strong>Specialization :</strong> Biological Anthropology.
                                <strong>Dissertation title :</strong>
                                Continuity/Discontinuity of Dental Morphological traits among the Parsis.
                            </li>
                            <li><strong>B.Sc. Zoology - May 2004,</strong> University of Pune, Pune. First Class with
                                Distinction
                                (73.75%)</li>

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
                    <li>Anthropology</li>
                    <li>Genomics</li>
                    <li>Pigmentary traits</li>
                    <li>Human Adaptation</li>
                    <li>Bio-social adapatation</li>
                    <li>South Asian Diversity</li>
                    <li>Demographic history of populations</li>

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
                    <li>June 2026 – Homi Bhaba Fellowship.</li>
                    <li>October 2025 – International Travel Award, Department of Health Research, by Indian Council of
                        Medical Research (ICMR), New Delhi, India.</li>
                    <li>October 2019 – Developing country Travel Award by American Society of Human Genetics.</li>
                    <li>December 2016 - Early Career Research Award, SERB, Government of India.</li>
                    <li>September 2010: Junior Research Fellowship (JRF) by Indian Council of Medical Research (ICMR),
                        New Delhi, India.</li>
                    <li>June 2007 & December 2007: Awarded Lectureship by Qualifying the National Eligibility Test (NET)
                        conducted by University Grants Commission, New Delhi</li>

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
                    <li>Biological Anthropology</li>
                    <li>Human Biological Variation</li>
                    <li>Anthropology Today – Its Applications</li>
                    <li>Taxonomy, Diversity and Organization of life</li>
                    <li>Inheritance Biology</li>
                    <li>Cell and Molecular Biology </li>
                    <li>Introduction to Human Genetics</li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')