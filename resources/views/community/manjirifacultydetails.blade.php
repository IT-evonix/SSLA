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
                            <img src="{{ asset('/assets/images/faculty/Dr. Manjari Jonnalagadda.png') }}"
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
                                        <p class="faculty-designation">(Assistant Professor)</p>
                                        <p class="faculty-institute">
                                            Anthropology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>manjari.jonnalagadda@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/Manjari Jonnalagadda_CV.pdf') }}"
                                                class="btn btn-outline-light d-inline-flex align-items-center" download>
                                                <img src="{{ asset('/assets/images/icon/downloads.png') }}"
                                                    alt="Download icon" class="icon-img me-2">
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
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
                                    Her teaching philosophy emphasizes experiential and problem-solving approaches to
                                    learning, integrating field-based experiences with cross-disciplinary frameworks.
                                    She views the classroom as a collaborative space where educators and students
                                    actively engage in shared knowledge creation, encouraging critical thinking,
                                    participation, and real-world application of concepts.

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
                    Dr. Manjari Jonnalagadda is a molecular anthropologist specializing in the evolution of complex
                    traits in Indian populations. Her research integrates phenotypic, genetic, and evolutionary
                    approaches, with a primary focus on skin pigmentation, population structure, and health-related
                    genetic variation. Her work highlights the role of endogamy and genetic variants over natural
                    selection in shaping pigmentation diversity across Indian populations.
                </p>
            </div>
                    <!-- achievement -->
            <div class="section-card" data-aos="fade-up">
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

                            <li>Jonnalagadda, M. <em>Phenotypic and genotypic variation in skin pigmentation among
                                    Indian populations</em>.</li>
                            <li>Jonnalagadda, M. <em>Genome-wide association studies on skin pigmentation diversity in
                                    Indians</em>.</li>
                            <li>Jonnalagadda, M. <em>Role of SLC24A5 in skin pigmentation variation in West
                                    Maharashtra</em>.</li>
                            <li>Jonnalagadda, M. <em>MC1R gene diversity and pigmentation variation among caste and
                                    tribal populations</em>.</li>
                            <li>Jonnalagadda, M. <em>Skin pigmentation and vitamin D metabolism in Indian
                                    populations</em>.</li>
                            <li>Jonnalagadda, M. <em>Pharmacogenomics and personalized medicine in Indian
                                    populations</em>.</li>


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
                            <li><strong>PhD (Doctoral Research):</strong>
                                Focused on phenotypic and genotypic variation in skin pigmentation among caste and
                                tribal populations of West Maharashtra
                                Supported by the Women Scientist-A Grant, DST (Government of India)</li>
                            <li><strong>Post-Doctoral Research:</strong>
                                University of Toronto, Canada
                                Focused on whole-genome approaches to study the genetic architecture of skin
                                pigmentation in Indian populations using GWAS</li>
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
                    <li>Evolution of complex traits in Indian populations</li>
                    <li>Evolution of complex traits in Indian populations</li>
                    <li>Skin pigmentation diversity and population structure</li>
                    <li>Genetic and phenotypic variation across caste and tribal groups</li>
                    <li>Genome-wide association studies (GWAS)</li>
                    <li>Role of pigmentation genes (e.g., SLC24A5, MC1R)</li>
                    <li>Skin pigmentation and vitamin D metabolism</li>
                    <li>Genetic basis of vitamin D deficiency in Indian populations</li>
                    <li>Personalized medicine and pharmacogenomics</li>
                    <li>Genes involved in drug metabolism</li>
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
                    <li><strong>Women Scientist-A Grant,</strong> Department of Science and Technology (DST), Government
                        of India</li>
                    <li><strong>Early Career Research Award (ECRA),</strong> SERB, Government of India
            </div>
            <!-- COURSES -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/cource.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Courses Taught</h4>
                </div>
                <ul>
                    <li>Rewrite this for SSLA faculty profile format</li>
                    <li>Make it shorter for a website</li>
                    <li>Convert it into third-person bio / CV format</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')