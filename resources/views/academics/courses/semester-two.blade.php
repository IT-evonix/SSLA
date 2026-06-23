@include('header')

<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Career options</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="courses_list_mainbox">
    @include('layout.back-button')
    <!-- Inner section start -->
    <section class="courses_list_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="inner__red_heading">Semester Two</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_course_listing_mainbox">
                        <!-- <div class="new_course_listing_para">
                            <p>
                                The Computer Studies curriculum offers a strong foundation in computing concepts,
                                programming, systems, and applications by integrating theory with practice. It covers
                                programming paradigms using Java, Python, and JavaScript, along with core areas such as
                                data structures, algorithms, databases, software engineering, computer systems, and
                                networks. Advanced topics include data warehousing, data mining, theory of computation,
                                and cloud computing. Emphasis on logical thinking, algorithmic problem-solving, and
                                system design is reinforced through labs, projects, case studies, and research-oriented
                                applications, preparing students for diverse technology-driven careers.
                            </p>
                        </div>-->
                        <div class="subject_listing_mainbox">
                            <div class="subject_listing">
                                <div class="subject_listing_heading">RM I: Introduction to Research</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">RM I: Introduction to Research is a foundational course designed
                                            to introduce students to the principles and practices of research in
                                            multidiclinary perspectives i.e. the humanities, social sciences, and
                                            natural sciences. The course familiarizes learners with the research
                                            philosphy and process, beginning from identifying research
                                            problems,reviewing literature, formulating research questions and
                                            objectives, hypotheses. It covers both quantitative and qualitative
                                            approaches, while emphasizing ethical considerations in research. Students
                                            are also trained in research proposal writing and the use of standard
                                            academic citation style such as APA and MLA. Overall, the course prepares
                                            students for advanced research methodology courses by building essential
                                            conceptual and practical skills.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-two-1.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Explorations in Natural Sciences</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Explorations in Natural Sciences introduces students to an
                                            integrated understanding of the natural world through concepts drawn from
                                            physics, chemistry, biology, and systems science. The course emphasizes the
                                            scientific method, evidence-based reasoning, and the development of
                                            scientific temper through hands-on investigations and discussion. Using
                                            themes such as colour, music, DNA, materials, and complex systems, students
                                            explore how scientific models explain natural phenomena across scales. By
                                            linking ideas from multiple disciplines and examining the relationship
                                            between science and society, the course fosters curiosity, critical inquiry,
                                            and an appreciation of how imagination and reasoning drive scientific
                                            discovery.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-two-2.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Quantitative Reasoning I: Mathematics and
                                    Statistics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Quantitative Reasoning I: Mathematics and Statistics introduces
                                            students to fundamental mathematical and statistical concepts essential for
                                            analytical thinking and everyday decision-making. The course emphasizes
                                            proportional reasoning, equations, commercial mathematics, and data
                                            interpretation, enabling students to work confidently with numbers in
                                            real-life contexts. Students learn key statistical tools such as measures of
                                            central tendency and dispersion, correlation, probability, and curve-fitting
                                            to analyze and interpret data. By integrating mathematical reasoning with
                                            practical applications in finance, management, and social contexts, the
                                            course develops logical, critical, and quantitative reasoning skills
                                            necessary for academic, professional, and civic life.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-two-3.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Rhetoric and Critical Writing</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Rhetoric and Critical Writing is a skill-based course that
                                            develops students’ abilities in critical thinking, reading, and effective
                                            written communication. The course introduces key theories and practices of
                                            critical reasoning and rhetoric, enabling students to analyze texts,
                                            arguments, and ideas with clarity and precision. Emphasis is placed on the
                                            mechanics, structure, and processes of effective and academic writing,
                                            including organization, argument development, referencing, and plagiarism
                                            awareness. Through continuous practice, feedback, and discussion, students
                                            learn to communicate ideas persuasively and responsibly across academic
                                            contexts, strengthening their analytical, interpretive, and expressive
                                            skills.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-two-4.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Understanding India: What is India? Unravelling the
                                    Mystery</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Understanding India: What is India? Unraveling the Mystery
                                            explores the complex and layered identity of India through an
                                            interdisciplinary approach combining history, archaeology, literature, and
                                            cultural studies. The course examines how India has perceived itself across
                                            time, how its identity was shaped by imperialism, nationalism, and post-1990
                                            reinterpretations, and how diverse peoples and traditions contributed to its
                                            cultural fabric. Key themes include the epics Ramayana and Mahabharata, the
                                            historical interaction between Islam and India, and socio-economic
                                            structures such as caste, tribe, and gender. Through critical discussion and
                                            evidence-based inquiry, students gain a nuanced understanding of India’s
                                            diversity, continuity, and evolving national identity.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-two-5.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner section ends  -->
</main>
@include('footer')