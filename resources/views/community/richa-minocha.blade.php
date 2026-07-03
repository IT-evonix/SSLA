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
                            <img src="{{ asset('/assets/images/faculty/Richa_photo.webp') }}" alt="Dr. Manoranjan Ghosh"
                                class="profile-img img-fluid">
                        </div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="col-lg-8">
                        <div class="ms-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h2 class="faculty-name">Dr. Richa Minocha</h2>
                                        <p class="faculty-designation">Associate Professor</p>
                                        <p class="faculty-institute">
                                            Women & Gender Studies
                                        </p>
                                        <p class="faculty-email-label d-flex align-items-center">
                                            <img src="{{ asset('/assets/images/icon/email.png') }}" alt="Email icon"
                                                class="icon-img me-2">
                                            <span> richa.minocha@ssla.edu.in</span>
                                        </p>
                                        <div class="action-btns mt-3">
                                            <a href="{{ asset('/assets/pdf/cv/Dr-Richa-Minocha-CV.pdf') }}"
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
                                <p>
                                    I believe teaching is as much about learning together as it is about facilitating
                                    learning in ways that nurture students' academic lives. In a Liberal Arts classroom,
                                    I engage with Feminist Pedagogies, thereby drawing from frameworks that mainstream
                                    empathy and justice-related issues in discourse, research and community engagement.
                                    Such pedagogies require that concepts not be treated as 'given', and that
                                    vocabularies and expressions be built on unambiguous connections among theory,
                                    research and experience. It is important to enable a class environment that
                                    encourages questioning and analysis. Learning does not begin and end in the
                                    classroom or with textbooks, and it needs connection and informal discussions.
                                    Hence, it is good if students follow you occasionally to your cabins to discuss
                                    their thoughts and ideas or engage in informal interactions in the corridors, to
                                    nourish their learning experience.
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
                    Dr richa minocha is an environmental anthropologist, a gender practitioner, a social worker, a
                    political ecologist, and a teacher and researcher. She works as an Associate Professor with the
                    Symbiosis School for Liberal Arts (SSLA). Under her collaboration with Prof Howard Rosing, a DePaul
                    Professor, for her elective course on Politics of Ecology, she engages critically with food, water,
                    and gender justice concerns. She has been proactively cultivating collaborations and associations
                    with NGOs such as Karunya Care Centre, Society of Christ Jesus and MaherAshram and Acwadam in Pune;
                    and YWCA (Young Women’s Christian Association) of Simla. She also collaborates with faculty and
                    research associates at Savitribai Phule Pune University (SPPU) and Centre for Women’s Development
                    Studies (CWDS) in Delhi for evolving feminist methodologies and pedagogies and contributing to
                    gender-sensitive campuses. Richa has been a core in-country faculty for the program Rethinking Food
                    Security: People, Agriculture and Politics under the International Honors' Program (IHP), a study
                    abroad program offered to students of American Universities. She is the Member Secretary and a
                    Founding Member of a grassroots-level organisation called Jan Abhiyan Sanstha (JAS), working on
                    issues such as food security, livelihoods, gender, and disaster prevention in the Himalayan region.
                    She has been a post-doctoral fellow at the London School of Economics and Political Science for her
                    research on ecological, cultural and gendered dimensions in development.
                </p>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <!-- PUBLICATIONS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/publication.svg') }}"
                                alt="Introduction icon" class="header-icon">
                            <h4 class="section-title">Publications</h4>
                        </div>
                        <ul class="student_research_databox_data">
                            <p class="mb-2"><strong>Books</strong></p>
                            <li>
                                Richa (2008). Environment, Agriculture and Community in Himachal Pradesh, Himalaya Publishing House, Mumbai. ISBN: 978-81-8488-134-9.
                            </li>
                            <hr>
                            <p class="mb-2"><strong>Book Reviews</strong></p>
                            <li>
                                2025: Review of Nitya Rao’s Quest for Identity: Gender, Land and Migration in Contemporary Jharkhand, Minocha, R, June 2025, Indian Journal of Gender Studies 32(2), pp.235-239.
                            </li>
                            <li>
                                2012: Book Review of Moving with the Times: Gender, Status and Migration of Nurses in    India” by Sreelekha Nair, Routledge, New Delhi, 2012; pp. 184-18.6 In Migration and Development, Journal by Routledge, Taylor & Francis Group.
                            </li>
                            <li>
                                2010: Book review of Ronnie Vernooy’s book “Social and gender analysis in Natural Resource Management – Learning Studies and Lessons from Asia”, Sage India, CAP, IDRC January 2006. ISBN: 0-76193-463-4, e-ISBN: 1-55250-218-X 2. In  Indian Journal of Gender Studies, Vol. 17, Issue 2, pp. 307-311.Sage Publications, New Delhi, 2010, ISSN: 0971-5215.
                            </li>
                            <li>
                                2004: “Challenge of Sustainable Development - The Indian Dynamics”. Eds. Ramprasad Sengupta and Anup K. Sinha, published by Centre for Development and Environment Policy, IIM, Calcutta; in The Indian Journal of Labour Economics, Vol. 47, No.2, April-June, 2004:419-421. ISSN: 0019-5308.
                            </li>
                            <hr>
                            <p class="mb-2"><strong>Chapters in Books</strong></p>
                            <li>
                                Minocha, Richa (2022). “Women’s Spirituality as a Measure of Deep Time and Social Ecology” in Science, Religion and Deep Time, Routledge India, ISBN 9781032188614. 
                            </li>
                            <li>
                                Minocha, Richa (2021). “Gender, Development, Social Transformation, and Growing Gender Inequality: A Comparative Study of Himachal Pradesh and Gujarat” in Sumita Sarkar (ed.) Gender Inequality and Discrimination in India: Discourse and Dilemmas, Jaipur: Rawat Publications ISBN: 9788131611500.
                            </li>
                            <li>
                                Minocha, Richa (2018). “Development at What Cost? A Study of Migration, Loss of Livelihood Security and Development-induced Displacement in Himachal Pradesh”. In Displacement, Impoverishment and Exclusion: Political Economy of Development in India, eds. Sujit Kumar Mishra and R Siva Prasad, Aakar Publications, ISBN 978-93-5002-531-4. 
                            </li>
                            <li>
                                Minocha, Richa (2007).  “Sustainable Nature Based Tourism: A Case Study of Kerala, Sikkim and Himachal Pradesh” in S.P. Bansal, Sonia Khan & Sushma (eds.), Cutting Edge Research in Tourism- Emerging Issues and Challenges, Vol. I & II, Abhishek Publications, Chandigarh. ISBN: 81-8247-152-4
                            </li>
                            <hr>
                            <p class="mb-2"><strong>Research Papers in Journals</strong></p>
                            <li>
                                Minocha, Richa, Aishi Mitra, and Neha Dadke. (2023) Social Singularities in Cosmic Environments: Engendering Big History. Journal of Big History, VI (2):  1–10.DOI | <a href="https://doi.org/10.22339/jbh.v6i2.6201https://jbh.journals.villanova.edu/index.php/JBH/article/view/2902/2733" target="_blank">https://doi.org/10.22339/jbh.v6i2.6201https://jbh.journals.villanova.edu/index.php/JBH/article/view/2902/2733</a>.
                            </li>
                            <li>
                                Minocha, Richa (2020). India’s Unabated Urbanization. Toward Freedom, A Progressive Perspective on World Events since 1952, Vermont, United States of America, July 31st. <a href="https://towardfreedom.org/story/indias-unabated-urbanization/" target="_blank">https://towardfreedom.org/story/indias-unabated-urbanization/</a>
                            </li>
                            <li>
                                Minocha, Richa (2015). Gender, Environment and Social Transformation: A Case of  Selected Villages in Himachal Pradesh. Indian Journal of Gender Studies, 22(3) 335–357, CWDS, New Delhi: Sage Publications. DOI: 10.1177/0971521515594274.  
                            </li>
                            <li>
                                Minocha, Richa (2006). “A Case for Dispersal of Tourism in Himachal Pradesh”, Tourism Development Journal, Vol. No. 4, No. 1, Himachal Pradesh University,  Simla. ISSN No. 09757376.
                            </li>
                            <li>
                                Minocha, Richa (2005). “A Case for Nature-Based Tourism in Himachal Pradesh- The Great Himalayan National Park”, The Green Portal Tourism Journal, Vol.2, No.2, Kerala Institute of Tourism and Travel Studies, Trivandrum. 
                            </li>
                            <li>
                                Minocha, Richa (2003). “Anthropological Reflections on Imaging of Women in Folkart and Folklore - An Analysis of Himachal Pradesh”- in Man in India, 83 (3 & 4), July-December 2003: 419-431. ISSN: 0025-1569.
                            </li>
                            <li>
                                Richa (2002). Sita in Himachal Pradesh in Manushi, A Journal of Women and Society, New Delhi, India, No.133:25-27, 2002. ISSN: 0257-7305.
                            </li>
                            <li>
                                Minocha, Richa (2002). Himachal Pradesh Mein Sita Ke Swaroop, translating to “Images of Sita in Himachal Pradesh”, in Somsi, No.3, July-December 2002:83-92, Journal of the Art, Culture, and Languages Academy, Himachal Pradesh. No. 1117ACD
                            </li>
                            <hr>
                            <p class="mb-2"><strong>Creative Pieces</strong></p>
                            <li>
                                Richa (2009). Communities and Diversity in Himachal Pradesh, Himalayan Studies Journal, Vol 2, No.1, June, pp. 81-85, Simla.
                            </li>
                            <li>
                                Richa & Chatopadhyay G.P. (2007). “Malana: Then and Now”, in Himalayan Studies Journal, Vol 1, No.1, June, pp. 83-85, Simla.
                            </li>
                            <hr>
                            <p class="mb-2"><strong>Editorials</strong></p>
                            <li>
                                Richa (2009). Editorial note, Himalayan Studies Journal, Vol 2, No.1, June.
                            </li>
                            <li>
                                Richa (2007). Editorial note, Himalayan Studies Journal, Vol 1, No.1, June.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="row mb-4">
                <div class="col-lg-6">
                    <!-- EDUCATION -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/education.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Education</h4>
                        </div>
                        <ul>
                            <li>Post-Doctoral Fellowship: C.R. Parekh Fellow (2008–2009) at the London School of
                                Economics and Political Science</li>

                            <li>PhD and MPhil in Social Sciences and Development Studies from the Centre for the Study
                                of Regional Development, Jawaharlal Nehru University (JNU), New Delhi</li>

                            <li>Master's in Tourism Administration from Himachal Pradesh University, Simla.</li>

                            <li>B.A pass course in Economics, Mathematics, English, and Hindi from Saint Bede’s
                                College, Simla, Himachal Pradesh.</li>

                            <li>Qualified University Grants Commission - National Educational Testing (NET) in
                                Economics.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- RESEARCH INTERESTS -->
                    <div class="section-card" data-aos="fade-up">
                        <div class="section-header">
                            <img src="{{ asset('/assets/images/faculty/inner/search-alt.svg') }}" alt="Introduction icon"
                                class="header-icon">
                            <h4 class="section-title">Research Interests</h4>
                        </div>
                        <ul class="research-list">
                            <li>Engendering Development, Sustainability and Food Security, Decolonising Gender and Ecology,
                                Community Engaged and Academic Service Learning, Social Impact Assessment of Development
                                Projects, Feminist Pedagogies in Education – Cultivating Interdisciplinary and Intersectional
                                perceptions and learning competencies in Social Sciences, Tourism and Travel Trends</li>
                        </ul>
                    </div>
                </div>
             </div>
            <!-- AWARDS -->
            <div class="section-card" data-aos="fade-up">
                <div class="section-header">
                    <img src="{{ asset('/assets/images/faculty/inner/awards.svg') }}" alt="Introduction icon"
                        class="header-icon">
                    <h4 class="section-title">Awards & Fellowships</h4>
                </div>
                <ul>
                    <li>
                        Global Learning Experience (GLE) Project Awarded in June 2026 by DePaul University's
                        Comprehensive Internationalization Committee (CIC) in collaboration with Professor Margaret
                        Workman on the theme "Promoting Global Understanding of Climate Justice".
                    </li>
                    <li>
                        GLE Project Awarded in March 2019 by DePaul University's Comprehensive Internationalization
                        Committee (CIC) in collaboration with Professor Howard Rosing on the theme Food Justice and
                        Engendering Food Security
                    </li>
                    <li>
                        C.R. Parekh Fellow (2008-2009) at the London School of Economics and Political Science
                    </li>
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
                    <p class="mb-2"><strong>Electives</strong></p>
                    <li>
                        Politics of Ecology and the Environment in Developing Countries (T6558)
                    </li>
                    <li>
                        Introduction to Social Work (T6669)
                    </li>
                    <hr>
                    <p class="mb-2"><strong>Core Courses</strong></p>
                    <li>Environment Studies: Our Common Earth (TM2005)</li>
                    <li>Multi-cultural Worldviews (Shared)</li>
                    <hr>
                    <p class="mb-2"><strong>Major/Minor Courses </strong></p>
                    <p class="mb-2 new_semi_bold">Women & Gender Studies</p>
                    <li>
                        Introduction to Women & Gender Studies (T6335)
                    </li>
                    <li>
                        Women in India (THM6180)
                    </li>
                    <li>
                        Gender, Labour, and Work (T6924) (shared with Dr Radhika Seshan)
                    </li>
                    <li>
                        Socialisation and Sexuality (T6339) (shared with Anagha Tambe, SPPU)
                    </li>
                    <li>
                        Understanding Feminisms (THM6235) (cotaught with Ananya Parikh)
                    </li>
                    <p class="mb-2 new_semi_bold">Sociology</p>
                    <li>Environment, Ecology and Society (T6899)</li>
                    <p class="mb-2 new_semi_bold">Multidisciplinary Courses</p>
                    <li>Women and Environment Ecofeminism (THM6234)</li>
                    <p class="mb-2 new_semi_bold">Offered and guided Seminar Papers on the following themes</p>
                    <li>
                        2019-2020 - Gender Geographies and Justice 
                    </li>
                    <li>
                        2020-2021 - Gender, Culture, and Development
                    </li>
                    <li>
                        2021-2022 - Gender, Culture and Development
                    </li>
                    <li>
                        2022-2023 - Engendering Narratives, Spaces, Development: Making Sense of Our Present
                    </li>
                    <li>
                        2023-2024 - Engendering Interpretations, Contexts, Singularity
                    </li>
                    <li>
                        2024-2025 - Quests for Identity: Gender in Context
                    </li>
                    <li>
                        2025-2026 - Towards Equality: Foregrounding & Contextualising Gender using a Disciplinary Approach
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Details section End -->
    <!-- Inner section ends  -->
</main>
@include('footer')