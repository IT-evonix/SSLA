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
                            <img src="{{ asset('/assets/images/faculty/Renu-Vinod_photo.webp') }}"
                                alt="Dr. Manoranjan Ghosh" class="profile-img img-fluid">
                        </div>
                    </div>
                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Renu Vinod</h2>
                                        <p class="faculty-designation">Adjunct Faculty</p>
                                        <p class="faculty-institute">
                                            Sociology
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span>renu.vinod@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Renu_Vinod _CV.pdf') }}"
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
                                                <a href="https://orcid.org/0000-0002-0685-5785" target="_blank"
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
                                <p>As a teacher, I understand the enormity of my responsibility in presenting precise
                                    information objectively to students. Communication in the academic world needs to be
                                    sensitive to the crucial role that the teacher plays in shaping the worldview of
                                    another, without hampering who they finally become. At the same time, I think a
                                    holistic teaching experience is one which is based on a foundation of humility –
                                    both of the teacher’s and that of the students, as both complement each other,
                                    preferably through a collaborative format with shared academic goals.</p>
                                <p>In my classroom, students get an insight into contemporary social life within its
                                    historical context and in terms of the social structures that operate at the local,
                                    national and global levels. In teaching my courses, I have realized that not only
                                    dialogue but also active engagement with the issues by going out into the field, are
                                    the two main ways in which students can learn.</p>
                                <p>In all of my teaching experience, I have constantly reminded myself that true
                                    pedagogy is not one where the teacher assumes an air of aloofness to compete with
                                    students in demonstrating academic or intellectual superiority. Both my pedagogy and
                                    the teaching philosophy that shapes it, function on the awareness that the teacher,
                                    just as the student, is constantly growing and learning.</p>
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
                <p>Dr. Renu Vinod is Assistant Professor (Adjunct), at the Symbiosis School for Liberal Arts (SSLA),
                    SIU, Pune since 2020. Before SSLA, she worked as lecturer at the Department of Sociology, Savitribai
                    Phule Pune University. She received her PhD from Jawaharlal Nehru University, Delhi. She has
                    undertaken postdoctoral work at the University of Uppsala, Sweden (2015) and the University of
                    Freiburg, Germany (2009). Prior to joining the academia, she worked in the development sector in New
                    Delhi in the fields of right to information (Commonwealth Human Rights Initiative) and informal
                    sector livelihoods (Centre for Civil Society), and in the field of corporate social responsibility
                    (Times Foundation, Bennett, Coleman and Company Ltd.).</p>
                <p class="new_faculty_link">
                    Most recently, she has authored a book on the sociology of modernity in India titled, <a
                        href="https://www.routledge.com/Modernity-in-India-Issues-Perspectives-and-Challenges/Vinod/p/book/9781032622873"
                        target="_blank">Modernity in India: Issues, Perspectives and Challenges</a> (Routledge, 2024)
                    and a peer reviewed paper on
                    the subjective experiences of female leaders during the COVID-19 pandemic titled, <a
                        href="https://wiscomp.org/peaceprints/PPJ-Vol9-2023/PPJ-Vol9-Article5-2023-Renu-Vinod.pdf"
                        target="_blank">‘We Need to Provide Education’: A Phenomenological Study of Female School
                        Leaders During the
                        COVID-19 Lockdown</a> (Peace Prints, 2023). Her most recent research is on non-formal
                    educational spaces and the pedagogy of care.
                    She is currently researching the intersections between folk art, livelihoods and the state; climate
                    politics and development and slum
                    redevelopment in post-LPG India. More information on her work is available at: Renu Vinod Curriculum
                    Vitae.
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
                            <strong> Book</strong>
                            <li>Modernity in India: Issues, Challenges and Perspectives, Routledge, 2024</li>

                            <strong>Peer Reviewed Journal</strong>

                            <li>Resilient Solidarities: A Phenomenological Study of Female School Leaders in Five
                                Private Schools. Peace Prints, South Asian Journal of Peacebuilding, December 2023</li>

                            <strong>Chapter in Edited Book</strong>

                            <li>‘The Effect of Economic Capital and Swedish Cultural Capital on Bonding and Bridging
                                Ties: A Study of First-Generation Malayalees in Sweden’ in Rajan, Irudaya (ed) India
                                Migration Report 2019: Diaspora in Europe. Routledge, 2019</li>
                            <li>‘The Pedagogy of Poverty and the digitisation of education’ in Lakshminarayan, Devaki
                                (ed) Technology in Education: The Gap Between Policy and Praxis. Centre for
                                Communication and Development Studies, 2019</li>

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
                            <li><strong>Centre for the Study of Social Systems, School of Social Sciences, Jawaharlal
                                    Nehru University, Delhi, India (2000 – 2008)</strong>
                                <ul>
                                    <li>PhD in Sociology (2009) thesis titled ‘Mobilization for Participatory Democracy
                                        and Good Governance in India: A Sociological Study’. Focus areas: citizenship,
                                        civil society, new social movements, participatory democracy, good governance,
                                        Panchayati Raj, capacity building of rural women.</li>
                                    <li>MPhil in Sociology (2004) dissertation titled Saraswat Konkanis of Kerala: An
                                        Ethnographic Study. Focus areas: forced migration, ethnic minorities, Saraswat
                                        Brahmins of Kerala.</li>
                                    <li>MA in Sociology (2002).</li>
                                </ul>
                            </li>

                            <li><strong>Department of Sociology, Stella Maris College, Madras University
                                    (1997-2000)</strong>
                                <ul>
                                    <li>Graduate in Sociology (2000).</li>
                                </ul>
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
                    <li>Sociology of: education, development, India, modernity</li>

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
                    <li>Co-Principal Investigator, Minor Research Project (2021-2022) in Humanities and Social Sciences,
                        Symbiosis School for Liberal Arts, Symbiosis International University</li>
                    <li>Post-Doctoral Fellow, Erasmus Mundus EXPERTS4Asia Consortium Grant, Uppsala University, Sweden
                        (Dec 2015-June 2016)</li>
                    <li>Faculty Exchange, Erasmus Mundus Scholar Grant, University of Groningen, The Netherlands and
                        University of Uppsala, Sweden (October 2013)</li>
                    <li>Postdoctoral Fellow, Erasmus Mundus Grant, Albert-Ludwigs-Universität Freiburg, Germany (Sep
                        2009– June 2010)</li>

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
                    <li>Principles of Sociology</li>
                    <li>Sociology of India</li>
                    <li>Popular Culture, Media and Everyday Life</li>
                    <li>Environment, Ecology and Society</li>
                    <li>Sociology of Science and Technology</li>
                    <li>Sociology of Globalisation, Global Culture, Economy, Emerging Issues</li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')