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
                    <h1 class="inner__red_heading">Semester Five</h1>
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
                                <div class="subject_listing_heading">Research Methodology II: Overview of Research
                                    Methods and Analysis</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Research Methodology II: Overview of Research Methods and
                                            Analysis builds on foundational research skills by introducing students to a
                                            wide range of qualitative, quantitative, and mixed research methods. The
                                            course examines research design, data collection, analysis, and
                                            interpretation, emphasizing the strengths and limitations of different
                                            research methods. Students engage with various methods such as interviews,
                                            ethnography, case studies, surveys, experiments, content analysis, and
                                            discourse analysis. Through practical exercises and assignments, the course
                                            also strengthens academic writing and reporting skills. Overall, it equips
                                            students with a holistic and critical understanding of research methods
                                            essential for conducting rigorous and ethically grounded research in the
                                            Humanities, Social Sciences, and Natural Sciences.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-five-1.svg') }}"
                                            alt="icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Service Learning (Community Outreach Programme)
                                </div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The Community Outreach Programme (COP) is designed to encourage
                                            meaningful student engagement with issues of social justice and community
                                            development through experiential learning and active participation. At its
                                            core, the programme seeks to cultivate socially sensitive, ethically
                                            grounded, and critically aware individuals who are capable of engaging
                                            responsibly with the communities around them and contributing positively to
                                            society at large. By creating opportunities for direct interaction with
                                            diverse social contexts and challenges, the programme aims to strengthen
                                            students’ understanding of social realities and foster a deeper sense of
                                            civic responsibility. Students are expected to develop a greater awareness
                                            of the relationship between academic learning and social responsibility
                                            through the COP. It is a mandatory component structured as a full-time
                                            project to be completed during the first summer break, providing students
                                            with an immersive experience that integrates learning with meaningful
                                            community engagement.</p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/semester-five-2.svg') }}"
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