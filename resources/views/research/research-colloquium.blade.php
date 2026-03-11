@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Faculty</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="staff_main research-main-sec">
    <!-- Inner section start -->
    <section class="inner_section">
        <div class="container">
            <div class="inner_tab_mainbox">
                <div class="inner_tab_box">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="contact-tab-1" data-bs-toggle="pill"
                                data-bs-target="#contact-fist-tab" type="button" role="tab"
                                aria-controls="contact-fist-tab" aria-selected="true">Research Colloquium</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab-2" data-bs-toggle="pill"
                                data-bs-target="#contact-second-tab" type="button" role="tab"
                                aria-controls="contact-second-tab" aria-selected="false">Workshop</a>
                        </li>
                    </ul>
                </div>
                <div class="inner_tab_content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="contact-fist-tab" role="tabpanel"
                            aria-labelledby="contact-tab-1" tabindex="0">
                            <section class="research-colloquia-bs">
                                <div class="container">
                                    <!-- Header -->
                                    <div class="row mb-3">
                                        <div class="col-lg-12 text-center">
                                            <h2 class="rc-title">Research Colloquia</h2>
                                        </div>
                                    </div>

                                    <!-- Main Content -->
                                    <div class="row g-5 align-items-start">
                                        <!-- Left Content -->
                                        <div class="col-lg-12">
                                            <div class="rc-overview">
                                                <h4>About the Colloquia</h4>
                                                <p>
                                                    The Research Colloquium at the Symbiosis School for Liberal Arts
                                                    (SSLA) is a structured academic forum designed to cultivate a
                                                    vibrant research culture among faculty and enrich the intellectual
                                                    environment of the institution. The colloquium provides a formal
                                                    platform for faculty members to present ongoing research, share
                                                    scholarly insights, and engage in critical interdisciplinary
                                                    dialogue with peers and students.
                                                </p>
                                                <p>
                                                    It contributes to SSLA’s broader objective of fostering a culture of
                                                    inquiry, knowledge exchange, and academic excellence that aligns
                                                    with liberal arts ideals of critical thinking and
                                                    interdisciplinarity. The primary aims of the Research Colloquium are
                                                    to:
                                                </p>
                                                <!-- Right Objectives -->
                                                <div class="research-main-sec mt-5">
                                                    <div class="container">
                                                        <div class="row g-4">

                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="rc-card">
                                                                    <span class="rc-num">01</span>
                                                                    <h5>Showcase Faculty Research</h5>
                                                                    <p>
                                                                        Enable faculty to present completed work or
                                                                        work-in-progress across diverse disciplines to
                                                                        their peers and students.
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="rc-card">
                                                                    <span class="rc-num">02</span>
                                                                    <h5>Stimulate Scholarly Dialogue</h5>
                                                                    <p>
                                                                        Facilitate critical engagement with research
                                                                        topics through discussion, feedback, and
                                                                        exchange of ideas.
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="rc-card">
                                                                    <span class="rc-num">03</span>
                                                                    <h5>Bridge Disciplinary Silos</h5>
                                                                    <p>
                                                                        Encourage interactions across academic fields,
                                                                        to foster a true liberal arts space in research.
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="rc-card">
                                                                    <span class="rc-num">04</span>
                                                                    <h5>Inspire Student Insight</h5>
                                                                    <p>
                                                                        By opening the forum to students, the colloquium
                                                                        aims to familiarise students to research
                                                                        methodologies and themes.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Series Info -->
                                    <div class="row mt-5 mb-5">
                                        <div class="col-12">
                                            <div class="rc-series text-center">
                                                <h4>Colloquia Series Format</h4>
                                                <p>
                                                    Conducted as seasonal series including
                                                    <strong>Monsoon Research Colloquia (July–November)</strong> and
                                                    <strong>Spring Research Colloquia (January–May)</strong>.
                                                    Each session features a faculty presentation followed by discussion.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="rap_admission_main">
                                <div class="rap_admission_mainbox">
                                    <div class="rap-admission-section">
                                        <div class="rap-timeline">
                                            <div class="accordion" id="rapAccordion">
                                                <!-- A. SET Online Registration -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapOne">
                                                                <img src="{{ asset('/assets/images/research/r3.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img"> 1.
                                                                Research Methods in Skin Pigmentation Studies
                                                            </button>
                                                        </h2>
                                                        <div id="rapOne" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card research-card">
                                                                            <!-- Objective -->
                                                                            <div class="objective">
                                                                                <h2>Objective of the Colloquium</h2>
                                                                                <p>
                                                                                    SSLA is a space that encourages
                                                                                    research and aims to equip its
                                                                                    students with
                                                                                    valuable knowledge and insights into
                                                                                    various aspects of research,
                                                                                    including
                                                                                    methodology. The colloquium provided
                                                                                    an opportunity for students and
                                                                                    faculty
                                                                                    to gain new perspectives on research
                                                                                    undertaken by SSLA faculty. The
                                                                                    session
                                                                                    was open to the entire SSLA
                                                                                    community, fostering dialogue,
                                                                                    learning, and
                                                                                    collaborative academic engagement.
                                                                                </p>
                                                                            </div>
                                                                            <!-- Proceedings -->
                                                                            <div class="proceedings">
                                                                                <h2>Colloquium’s Proceedings</h2>

                                                                                <!-- IMAGE COLLAGE -->
                                                                                <div class="proceedings-collage">
                                                                                    <img src="{{ asset('/assets/images/research/r2.webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r3.webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r4.webp') }}"
                                                                                        alt="">
                                                                                </div>

                                                                                <!-- TEXT FLOW -->
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        The colloquium commenced with
                                                                                        the serving of refreshing hot
                                                                                        tea, setting a
                                                                                        warm and engaging tone for the
                                                                                        session. Prof. Uday Sinha
                                                                                        formally welcomed
                                                                                        the gathering and introduced Dr.
                                                                                        Manjari Jonnalagadda, who
                                                                                        outlined her
                                                                                        research focus and key findings.
                                                                                    </p>

                                                                                    <p>
                                                                                        Her research examined the
                                                                                        hypothesis of
                                                                                        <strong>MC1R</strong> as a
                                                                                        candidate
                                                                                        gene contributing to skin
                                                                                        pigmentation in Indian
                                                                                        populations. Over 100
                                                                                        samples were collected and
                                                                                        analysed, with population
                                                                                        selection informed by
                                                                                        UV exposure, cultural practices,
                                                                                        and regional diversity.
                                                                                    </p>

                                                                                    <p>
                                                                                        Findings indicated that MC1R did
                                                                                        not significantly contribute to
                                                                                        observed
                                                                                        phenotypes, reinforcing that
                                                                                        skin pigmentation is polygenic
                                                                                        and
                                                                                        population-specific.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <!-- SPEAKER -->
                                                                            <div class="speaker">
                                                                                <h2>The Colloquium’s Speaker</h2>

                                                                                <div class="speaker-content">
                                                                                    <p>
                                                                                        Dr. Manjari Jonnalagadda is a
                                                                                        molecular anthropologist
                                                                                        teaching biological
                                                                                        anthropology and biology at the
                                                                                        Symbiosis School for Liberal
                                                                                        Arts. Her
                                                                                        research focuses on the
                                                                                        evolution of complex traits such
                                                                                        as skin
                                                                                        pigmentation in Indian
                                                                                        populations.
                                                                                    </p>

                                                                                    <p>
                                                                                        Motivated by limited research in
                                                                                        this area, she designed a
                                                                                        quantitative
                                                                                        genetic study among populations
                                                                                        in Western Maharashtra,
                                                                                        integrating
                                                                                        phenotypic and genetic data.
                                                                                    </p>

                                                                                    <p>
                                                                                        She also serves as the
                                                                                        <strong>Editor-in-Chief</strong>
                                                                                        of
                                                                                        <em>Confluence: Journal of
                                                                                            Interdisciplinary Studies
                                                                                            (CJIDS)</em>.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <!-- CONCLUSION -->
                                                                            <div class="proceedings-text">
                                                                                <p>
                                                                                    The discussion that followed was
                                                                                    intellectually stimulating, with
                                                                                    faculty and
                                                                                    students engaging on methodological
                                                                                    concerns and comparative approaches.
                                                                                    Dr.
                                                                                    Jonnalagadda concluded by
                                                                                    introducing her forthcoming project
                                                                                    on
                                                                                    <strong>vitamin D and skin
                                                                                        colour</strong>.
                                                                                </p>

                                                                                <p>
                                                                                    Overall, the colloquium offered
                                                                                    students a rich academic experience,
                                                                                    fostering
                                                                                    scholarly dialogue beyond the
                                                                                    conventional classroom.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- B. Fee Payment -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapTwo">
                                                                <img src="{{ asset('/assets/images/research/r6.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img">
                                                                2.Narrative Influences on Financial Decision-Making
                                                            </button>
                                                        </h2>
                                                        <div id="rapTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">

                                                                        <div class="card research-card">

                                                                            <!-- Objective -->
                                                                            <div class="objective">
                                                                                <h2>Objective of the Colloquium</h2>
                                                                                <p>
                                                                                    SSLA is a space which encourages
                                                                                    research and aims to equip its
                                                                                    students with valuable knowledge and
                                                                                    insight into the various aspects of
                                                                                    research including methodology. The
                                                                                    colloquium creates an opportunity
                                                                                    for students and faculty to gain new
                                                                                    perspectives on research done by
                                                                                    faculty at SSLA. The floor was open
                                                                                    to the entire SSLA community to
                                                                                    participate in the colloquium.
                                                                                </p>
                                                                            </div>
                                                                            <!-- Proceedings -->
                                                                            <div class="proceedings">
                                                                                <h2>Colloquium’s Proceedings</h2>

                                                                                <!-- IMAGE COLLAGE -->
                                                                                <div class="proceedings-collage">
                                                                                    <img src="{{ asset('/assets/images/research/r5 (1).webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r6.webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r7.webp') }}"
                                                                                        alt="">
                                                                                </div>

                                                                                <!-- TEXT FLOW -->
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        The morning started with the
                                                                                        participants being treated to
                                                                                        hot tea and an array of
                                                                                        biscuits. Dr. Sumithra
                                                                                        Surendralal welcomed the day’s
                                                                                        speaker, Prof. Uday Sinha, and
                                                                                        introduced the topic to the
                                                                                        audience: titled, aptly, as The
                                                                                        Investor’s Tale - How Narratives
                                                                                        Influence Financial Choices.
                                                                                    </p>
                                                                                    <p>Prof. Sinha started that talk by
                                                                                        explaining that traditionally,
                                                                                        economics as a discipline
                                                                                        assumes that humans are not
                                                                                        prone to any biases while making
                                                                                        investment decisions. However,
                                                                                        in the real world, this is not
                                                                                        true - and introduces a new,
                                                                                        rapidly expanding branch of
                                                                                        economics referred to as
                                                                                        Behavioural Economics, which is
                                                                                        mainly an intersection of
                                                                                        psychology and economics. Prof.
                                                                                        Sinha’s research interest is in
                                                                                        the fact that people’s
                                                                                        investment decisions can be
                                                                                        swayed by outside influences,
                                                                                        particularly by narratives they
                                                                                        are exposed to through different
                                                                                        media and popculture. Financial
                                                                                        decision analysis is
                                                                                        traditionally based on
                                                                                        “fundamental analysis,” looking
                                                                                        purely at quantitative data
                                                                                        surrounding financial choices.
                                                                                        If we do not consider these
                                                                                        influences and consider merely
                                                                                        the quantitative data, we cannot
                                                                                        claim to fully understand the
                                                                                        decision-making process.</p>

                                                                                    <p>
                                                                                        Prof. Sinha talked about his
                                                                                        extensive literature review. For
                                                                                        the purposes of his research, he
                                                                                        defines “narratives” to be
                                                                                        coming from newspaper articles
                                                                                        and television news coverage.
                                                                                        Narratives influence the
                                                                                        formation of “bubbles” of
                                                                                        like-minded individuals, in
                                                                                        terms of investment. The
                                                                                        cultural context, as well as
                                                                                        effects of these bubbles need to
                                                                                        be studied in different systems
                                                                                        / different economies. Prof.
                                                                                        Sinha explains this by giving
                                                                                        the example of how Gamestop’s
                                                                                        share values were affected by
                                                                                        people coming together on the
                                                                                        social platform Reddit. This
                                                                                        incident is a prime example of
                                                                                        how while people largely get
                                                                                        influenced by social media
                                                                                        narratives, the decisions taken
                                                                                        under this influence are not
                                                                                        necessarily rational - and so,
                                                                                        narratives can have both, a
                                                                                        positive or negative impact, on
                                                                                        investment decisions. Prof.
                                                                                        Sinha’s literature review
                                                                                        suggests that people are
                                                                                        susceptible to influence of
                                                                                        narratives because of the
                                                                                        uncertainty and lack of
                                                                                        transparency about stakeholder
                                                                                        information in the financial
                                                                                        market. Thus, a decision
                                                                                        informed by narratives may not
                                                                                        necessarily be well-informed,
                                                                                        even if the outcome is
                                                                                        desirable. Narratives can also,
                                                                                        thus, be used as marketing
                                                                                        tools.
                                                                                    </p>

                                                                                    <p>
                                                                                        Prof. Sinha plans to investigate
                                                                                        the effects of narratives by
                                                                                        demographic data collection
                                                                                        through questionnaires, trying
                                                                                        to understand a participant’s
                                                                                        background and experience with
                                                                                        investments. This information
                                                                                        can be used to craft a financial
                                                                                        literacy index of participants
                                                                                        in the form of a Likert scale.
                                                                                        This scale can have three
                                                                                        primary scenarios - the
                                                                                        overconfidence bias, a loss
                                                                                        aversion score, and a herding
                                                                                        score. However, questionnaires
                                                                                        have a lot of limitations, and
                                                                                        may result in collection of
                                                                                        flawed data. Therefore, Prof.
                                                                                        Sinha proposes setting up
                                                                                        experimental scenarios for
                                                                                        respondents to actually
                                                                                        participate in a decision-making
                                                                                        simulation using the platform
                                                                                        Otree. This experiment looks at
                                                                                        the choices oriented around
                                                                                        three investment narratives -
                                                                                        positive, neutral, or negative -
                                                                                        and three investment options.

                                                                                        The investment options are:

                                                                                        High risk, high reward
                                                                                        Moderate risk, moderate reward
                                                                                        Low risk, low reward
                                                                                        This experiment has two
                                                                                        hypotheses:

                                                                                        Positive narratives lead people
                                                                                        to take higher risks, and
                                                                                        negative narratives lead to
                                                                                        lower risk-taking.
                                                                                        People with a predisposition
                                                                                        towards cognitive biases are
                                                                                        more influenced by narratives.
                                                                                        This experiment design spurred a
                                                                                        lot of discussion and debate
                                                                                        among the participants of the
                                                                                        Colloquium. These conversations
                                                                                        starkly highlighted the
                                                                                        difference between qualitative
                                                                                        and quantitative approaches to
                                                                                        research. This kind of research
                                                                                        question cannot be studied from
                                                                                        only an economics perspective -
                                                                                        it requires to be viewed from
                                                                                        psychology and media lenses as
                                                                                        well. This debate was very
                                                                                        insightful for the students who
                                                                                        attended the Colloquium, acting
                                                                                        as a glimpse into how research
                                                                                        is conducted among professional
                                                                                        academics.
                                                                                    </p>
                                                                                </div>
                                                                            </div>

                                                                            <!-- SPEAKER -->
                                                                            <div class="speaker">
                                                                                <h2>The Colloquium’s Speaker</h2>

                                                                                <div class="speaker-content">
                                                                                    <p>
                                                                                        Prof. Uday Sinha is primarily an
                                                                                        economist, and teaches courses
                                                                                        in Economics, Quantitative
                                                                                        Reasoning, and Research
                                                                                        Methodology at Symbiosis School
                                                                                        for Liberal Arts. His research
                                                                                        is based on macroeconomics, with
                                                                                        a strong emphasis on
                                                                                        quantitative methodologies -
                                                                                        particularly focusing on
                                                                                        international investments. Prof.
                                                                                        Sinha is also the
                                                                                        Faculty-in-Charge of the
                                                                                        Research Cell at SSLA.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- C. Selection Process -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapThree">
                                                                <img src="{{ asset('/assets/images/research/r9.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img">
                                                                3. Integrating Archaeology, Oral History & GIS
                                                            </button>
                                                        </h2>
                                                        <div id="rapThree" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card research-card mt-3">

                                                                            <!-- Objective -->
                                                                            <div class="objective">
                                                                                <h2>Objective of the Colloquium</h2>
                                                                                <p>
                                                                                    SSLA opens the floor of knowledge
                                                                                    exchange in a level where Professors
                                                                                    can share their work and research
                                                                                    with students and peers who may not
                                                                                    be engaging with the same subject
                                                                                    matter, by providing an
                                                                                    interdisciplinary lens which helps
                                                                                    the participants engage with the
                                                                                    subject matter more holistically and
                                                                                    also learn more about other
                                                                                    disciplines. This colloquium
                                                                                    provided an opportunity for the
                                                                                    participants to get a peek into what
                                                                                    and how the research and fieldwork
                                                                                    are conducted by their faculty.
                                                                                </p>
                                                                            </div>

                                                                            <!-- Proceedings -->
                                                                            <div class="proceedings">
                                                                                <h2>Colloquium’s Proceedings</h2>

                                                                                <!-- IMAGE COLLAGE -->
                                                                                <div class="proceedings-collage">
                                                                                    <img src="{{ asset('/assets/images/research/r8.webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r9.webp') }}"
                                                                                        alt="">
                                                                                    <img src="{{ asset('/assets/images/research/r10.webp') }}"
                                                                                        alt="">
                                                                                </div>

                                                                                <!-- TEXT FLOW -->
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        Dr. Esha initiated the talk by
                                                                                        emphasising on the importance of
                                                                                        archaeological findings in
                                                                                        learning more about our ancient
                                                                                        civilisations, their culture and
                                                                                        the spread of the civilisation
                                                                                        across vast areas. These
                                                                                        cultures are traced through the
                                                                                        materials found at these
                                                                                        settlements, the oral histories
                                                                                        that have been passed down
                                                                                        through generations and the use
                                                                                        of new technology in the field
                                                                                        has further facilitated in
                                                                                        learning, understanding and
                                                                                        validation of the findings
                                                                                        collected. She then showed us
                                                                                        the pictures of the site she has
                                                                                        been working on. The settlement
                                                                                        at the site was a massive
                                                                                        fortification unit made out of
                                                                                        stones, which had outer and
                                                                                        inner walls with a gap between
                                                                                        them. The gap was filled with
                                                                                        ash and also composed of cow
                                                                                        dung, organic matter; which
                                                                                        indicated that it could have
                                                                                        been used as a waste management
                                                                                        system.
                                                                                    </p>

                                                                                    <p>
                                                                                        The structure had many rooms but
                                                                                        were not accompanied by doors,
                                                                                        which was common structure
                                                                                        formation in Harappan sites. In
                                                                                        the stead of doors, ladders were
                                                                                        used to climb in or out of the
                                                                                        rooms, this was used as a
                                                                                        security tactic to guard against
                                                                                        intruders.
                                                                                    </p>

                                                                                    <p>
                                                                                        She then further explained the
                                                                                        methodologies and processes
                                                                                        applied in the study of the
                                                                                        site. She also emphasised that
                                                                                        the first step in the study of
                                                                                        any site involves mapping the
                                                                                        site. The methodologies used
                                                                                        included reconnaissance survey
                                                                                        and site census, where village
                                                                                        to village survey is taken
                                                                                        alongside field walking.
                                                                                        Ethnography has been an integral
                                                                                        part of the methodology of
                                                                                        anthropology, documentation of
                                                                                        oral histories, folklores and
                                                                                        interviews enriches the holistic
                                                                                        understanding of the site by
                                                                                        adding more depth. The study
                                                                                        encountered the oral history
                                                                                        imbued with the site, the legend
                                                                                        of Jakh. The story revolves
                                                                                        around heavenly Gods who came to
                                                                                        the area to kill the King and
                                                                                        restore the stability. The
                                                                                        legend is supported by evidence
                                                                                        of stone buildings, temples,
                                                                                        horse sculptures found at the
                                                                                        site.
                                                                                    </p>
                                                                                    <p>The methods used include Site
                                                                                        Catchment Analysis, which
                                                                                        studies the materials found at
                                                                                        the site to restructure the
                                                                                        economic and social system of
                                                                                        the settlement. Pottery which
                                                                                        imitated Chinese pottery were
                                                                                        found, glass bangles and
                                                                                        steatite beads made of clay were
                                                                                        found which can be traced back
                                                                                        to the medieval period.
                                                                                        Accelerated mass spectrometry
                                                                                        was used to date sediments of
                                                                                        the site and also the temples.
                                                                                        Adding to this, GIS was used to
                                                                                        gather Paleo vegetation data and
                                                                                        predict a model of the
                                                                                        vegetation and landscape of the
                                                                                        area during that period. Hence
                                                                                        this research shows the
                                                                                        importance and benefits of
                                                                                        integrating archaeology, oral
                                                                                        history and GIS to enhance our
                                                                                        knowledge about a particular
                                                                                        civilisation by allowing us to
                                                                                        visualise a model along with
                                                                                        living tales about the place.
                                                                                    </p>
                                                                                    <p>Following the lecture, various
                                                                                        questions were put forward
                                                                                        addressing the accuracy and
                                                                                        reliance of the GIS, oral
                                                                                        histories; how does geological
                                                                                        timescale affect the area; about
                                                                                        the legend of the Jakhs etc. The
                                                                                        colloquium became a platform
                                                                                        where the participants could not
                                                                                        only learn about the various
                                                                                        methodologies involved in the
                                                                                        field work, but also share their
                                                                                        knowledge, stories and
                                                                                        experiences of archaeological
                                                                                        findings.</p>

                                                                                </div>
                                                                            </div>

                                                                            <!-- SPEAKER -->
                                                                            <section class="speaker">
                                                                                <h2>The Colloquium’s Speaker</h2>

                                                                                <div class="speaker-content">
                                                                                    <p>
                                                                                        Dr. Esha Prasad is part of the
                                                                                        Anthropology faculty in SSLA as
                                                                                        an Assistant Professor. She is
                                                                                        trained as an archaeologist and
                                                                                        specializes in ceramic studies
                                                                                        of the Chalcolithic period and
                                                                                        the Harappan Civilization. Her
                                                                                        deep passion for field work and
                                                                                        ceramic studies paved the way
                                                                                        for her current research in a
                                                                                        Harappan site at Northeast
                                                                                        Rajasthan. She studies the sites
                                                                                        with a main focus on
                                                                                        technological advancements,
                                                                                        cultural practices and trade
                                                                                        networks prevalent in the
                                                                                        Chalcolithic period. The current
                                                                                        study was conducted by
                                                                                        integrating the archeological
                                                                                        findings, oral history and the
                                                                                        use of GIS (Geographical
                                                                                        Information System); hence using
                                                                                        technology to validate the
                                                                                        findings.
                                                                                    </p>

                                                                                    <p>
                                                                                        The methods used include Site
                                                                                        Catchment Analysis, which
                                                                                        studies the materials found at
                                                                                        the site to restructure the
                                                                                        economic and social system of
                                                                                        the settlement. Pottery which
                                                                                        imitated Chinese pottery were
                                                                                        found, glass bangles and
                                                                                        steatite beads made of clay were
                                                                                        found which can be traced back
                                                                                        to the medieval period.
                                                                                    </p>

                                                                                    <p>
                                                                                        Accelerated mass spectrometry
                                                                                        was used to date sediments of
                                                                                        the site and also the temples.
                                                                                        Adding to this, GIS was used to
                                                                                        gather Paleo vegetation data and
                                                                                        predict a model of the
                                                                                        vegetation and landscape of the
                                                                                        area during that period. Hence
                                                                                        this research shows the
                                                                                        importance and benefits of
                                                                                        integrating archaeology, oral
                                                                                        history and GIS to enhance our
                                                                                        knowledge about a particular
                                                                                        civilisation by allowing us to
                                                                                        visualise a model along with
                                                                                        living tales about the
                                                                                        place.</em>.
                                                                                    </p>
                                                                                </div>
                                                                            </section>

                                                                            <!-- CONCLUSION -->
                                                                            <div class="proceedings-text">
                                                                                <p>
                                                                                    Following the lecture, various
                                                                                    questions were put forward
                                                                                    addressing the accuracy and reliance
                                                                                    of the GIS, oral histories; how does
                                                                                    geological timescale affect the
                                                                                    area; about the legend of the Jakhs
                                                                                    etc. The colloquium became a
                                                                                    platform where the participants
                                                                                    could not only learn about the
                                                                                    various methodologies involved in
                                                                                    the field work, but also share their
                                                                                    knowledge, stories and experiences
                                                                                    of archaeological findings.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- d.  -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapSix">
                                                                <img src="{{ asset('/assets/images/research/science.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img">
                                                                4. Science, Technology, and Right-Wing
                                                                Populism
                                                            </button>
                                                        </h2>
                                                        <div id="rapSix" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="objective">
                                                                    <p>Elections are glorified experiments. In
                                                                        democracies today, they are at the very least,
                                                                        models of public ambitions, goals and desires.
                                                                        Lest we forget, the elected are representative
                                                                        abstractions of the prevailing nature of the
                                                                        larger phenomenon namely, the electorate.
                                                                        Nothing mobilizes and at the same time
                                                                        represents public will more than an election.
                                                                        The race to the White House last year was touted
                                                                        as the ‘Election to Save Science’ and indeed the
                                                                        front runner journal in the discipline, Nature
                                                                        ran an editorial titled ‘On November 3, Vote to
                                                                        End Attacks on Science‘. </p>
                                                                    <p> Readers were urged – “Instead of thinking about
                                                                        whether to vote Democratic or Republican in the
                                                                        upcoming U.S. election, think about voting to
                                                                        protect science instead of destroying it.”
                                                                        ("Vote, for science!," 2020). Few disagreed that
                                                                        the Trump administration over its tenure had
                                                                        dealt a significant blow to progress in the area
                                                                        via often simultaneous articulations such as
                                                                        substantial funding cuts (J. Mervis, 2020a and
                                                                        2020b) and a sustained disinformation campaign
                                                                        on media platforms, often involving the
                                                                        President himself (Motta, Stecula, & Farhart,
                                                                        2020; Tollefson, 2020) and so on. Similar notes
                                                                        of caution had already been sounded in 2018 with
                                                                        the Brazilian (Escobar, 2018; Tollefson, 2018)
                                                                        and Italian (Abbott, 2018) Presidential
                                                                        Elections.</p>
                                                                    <p>The recent handling of the COVID19 pandemic by
                                                                        countries under right-wing dispensation has
                                                                        starkly brought this troubled relationship
                                                                        between the Sciences and policy makers into
                                                                        glaring focus (Leonhardt, 2020). Suddenly, the
                                                                        very relevance of the enterprise of science
                                                                        within societies appears to be fragile to say
                                                                        the least.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- E  -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapSeven">
                                                                <img src="{{ asset('/assets/images/research/healthcare.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img">
                                                                5.Healthcare Diplomacy: The Path Ahead for
                                                                India?
                                                            </button>
                                                        </h2>
                                                        <div id="rapSeven" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="objective">
                                                                    <p>Soft Power, according to Jospeh Nye, Jr, who
                                                                        coined the term, is the ability to achieve
                                                                        desired outcomes in international affairs
                                                                        through attraction rather than coercion.
                                                                        Traditionally, cultural and literary exchanges
                                                                        through various festivals, sports – especially
                                                                        like cricket and table-tennis and grants for
                                                                        higher education, have been used as tools of
                                                                        soft power. However, over the past decade,
                                                                        medicine as a tool or currency for diplomacy has
                                                                        become a game-changer in International
                                                                        Relations.</p>
                                                                    <p>USA, China and Cuba have already successfully
                                                                        implemented healthcare or medical diplomacy as
                                                                        an integral part of their foreign policy. UK is
                                                                        also looking at using their well-established NHS
                                                                        as the way forward. However, as far as India is
                                                                        concerned, while health/medical tourism is a
                                                                        watchword for India, and India has sent medical
                                                                        support as part of humanitarian aid to different
                                                                        parts of the world, in response to various
                                                                        natural calamities and other situations,
                                                                        including engaging in vaccine diplomacy during
                                                                        the pandemic, we are yet to formalize a strategy
                                                                        or policy on healthcare diplomacy.</p>
                                                                    <p>Given the absence of any formalised policy for
                                                                        medical or healthcare diplomacy in India, the
                                                                        purpose of this paper is to explore whether
                                                                        India can use medicine/healthcare as a currency
                                                                        to advance its interests in the present
                                                                        international order; and whether healthcare
                                                                        diplomacy can be incorporated as a strategy and
                                                                        an instrument of soft power in India’s foreign
                                                                        policy concerns.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- F  -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapEight">
                                                                <img src="{{ asset('/assets/images/research/coali.webp') }}"
                                                                    alt="Banner image" class="img-fluid accor-img">
                                                                6. Coalition Governments & Making of Security Policy
                                                                in India: <br />Study of Domestic Determinants of
                                                                Making of India's Security Policy
                                                            </button>
                                                        </h2>
                                                        <div id="rapEight" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="objective">
                                                                    <p>A nation’s security policy is essentially aimed
                                                                        at creating and sustaining the space -
                                                                        regionally and globally - which enables it to
                                                                        pursue its national interests. Devising such a
                                                                        policy requires an assessment of external
                                                                        environment, the nature and intensity of the
                                                                        threat as well as the means, both internal and
                                                                        external, to mitigate such a threat. It is
                                                                        therefore a critical instrument to understand
                                                                        the nature of threats and the avenues and
                                                                        approaches applied by the State to deal with it.
                                                                        India is a diverse democracy with multiplicity
                                                                        of political actors at play. The most visible of
                                                                        those are the political parties, both regional
                                                                        and national, who are prime drivers of the
                                                                        public discourse and also of the public policy.
                                                                        In the initial years after the independence,
                                                                        this diversity was relatively less pronounced at
                                                                        the policy level given the prominence of the
                                                                        Congress party which ruled at the centre as well
                                                                        as in the majority of the states. </p>
                                                                    <p>The single-party dominance implied a relatively
                                                                        one-dimensional approach to policy making. This
                                                                        was true also in case of making of security
                                                                        policy. The one party-dominance started fading
                                                                        in the mid-seventies, essentially after the
                                                                        emergency, and the phenomenon of coalition of
                                                                        political parties to form government started
                                                                        gaining currency. The coalition inevitably meant
                                                                        a multi-dimensional approach to policy to
                                                                        satisfy the multiple and at time conflicting
                                                                        interests of the coalition partners. </p>
                                                                    <p>The diversity thus started getting pronounced at
                                                                        the policy level as well. This diversity of
                                                                        political opinions and resulting lack of
                                                                        consensus is reflected also in the making of
                                                                        security policy. There is no unanimity in the
                                                                        political class, for instance, in the approach
                                                                        to deal with the Pakistan or China, arguably the
                                                                        two most significant strategic challenges facing
                                                                        India. Similarly, there are differing approach
                                                                        to deal with terrorism and the insurgencies as
                                                                        well. The advent of coalition governments
                                                                        compounded this effect of the differing
                                                                        opinions. The proposed study intends to study
                                                                        comprehensively the dynamics of Coalition
                                                                        Governments and its impact on the making of
                                                                        Security Policy in India. It bases on the
                                                                        primary assumption that a nuanced study, which
                                                                        incorporates the variables such as ideological
                                                                        inclinations of the coalition partners,
                                                                        political capital, the nature of the leadership
                                                                        along with the contemporary structural
                                                                        environment, is imperative to have a
                                                                        comprehensive study of Security Policy Making in
                                                                        India.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-second-tab" role="tabpanel"
                            aria-labelledby="contact-tab-2" tabindex="0">
                            <div class="rw-academic-modern">
                                <div class="container">
                                    <!-- Header -->
                                    <div class="row mb-3">
                                        <div class="col-lg-12 text-center">
                                            <h2 class="rc-title" data-aos="fade-up">Research Workshops</h2>
                                            <!-- <p class="rc-subtitle">
                                                SSLA Research Cell, Symbiosis School for Liberal Arts
                                            </p> -->
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="rc-overview" data-aos="fade-up">
                                                <p>
                                                    The Research Cell at Symbiosis School for Liberal Arts (SSLA)
                                                    conducts comprehensive research workshops designed to equip students
                                                    with essential academic and research skills. These workshops serve
                                                    as pivotal platforms for developing skills in research
                                                    methodologies, citation practices, and scholarly writing. The
                                                    workshops include intensive training sessions on specialised tools
                                                    and methodologies.
                                                </p>

                                                <p>
                                                    Every year, SSLA organises three fundamental workshops for students.
                                                    The workshop on Reference Management Using Zotero equips students
                                                    with tools to organise citations efficiently. The workshop on Basics
                                                    of APA Citation Style provides comprehensive guidance on proper
                                                    citation formatting and academic documentation. The workshop on
                                                    Academic Integrity & Ethics fosters a culture of honesty by
                                                    addressing plagiarism, authorship responsibilities, and proper
                                                    attribution practices.
                                                </p>

                                                <p class="mb-0">
                                                    Facilitated by experienced faculty members and experts, these
                                                    workshops combine theoretical knowledge with practical application.
                                                    Sessions typically include interactive discussions, case studies,
                                                    hands-on training, and question-and-answer segments. By conducting
                                                    these programs annually, SSLA promotes excellence in research and
                                                    equips all students with rigorous research skills essential for
                                                    academic success and professional endeavors.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rap_admission_main">
                                <div class="rap_admission_mainbox">
                                    <div class="rap-admission-section">
                                        <div class="rap-timeline">
                                            <div class="accordion" id="rapAccordion">
                                                <!-- A. SET Online Registration -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapFour">
                                                                1.Academic Integrity & Ethics
                                                            </button>
                                                        </h2>
                                                        <div id="rapFour" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>

                                                                            <div class="objective">
                                                                                <h2>Objective of the Workshop </h2>
                                                                                <p>
                                                                                    SSLA is an institute which fosters
                                                                                    academic
                                                                                    writing, and as such it becomes a
                                                                                    matter of great
                                                                                    significance to guide the students
                                                                                    towards
                                                                                    the right direction and instill a
                                                                                    value and practice
                                                                                    of academic honesty. The workshop
                                                                                    aimed to
                                                                                    help students of batch 2028 to
                                                                                    understand the
                                                                                    importance of academic integrity in
                                                                                    their
                                                                                    future projects and all the future
                                                                                    work they take up.
                                                                                    This workshop is held for the first
                                                                                    year
                                                                                    students to know what academic
                                                                                    integrity means, and
                                                                                    also understand the responsibility
                                                                                    of
                                                                                    authorship.
                                                                                </p>
                                                                            </div>
                                                                            <h2 class="facilator-heading">Workshop
                                                                                Facilitators </h2>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r11.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        Dr. Sumitra Surendralal and
                                                                                        Prof.
                                                                                        Uday Sinha conducted the
                                                                                        workshop
                                                                                        together. They are
                                                                                        also the Faculty-in-Charge of
                                                                                        the
                                                                                        Research Cell at SSLA. Dr.
                                                                                        Sumitra
                                                                                        is
                                                                                        primarily a
                                                                                        physicist and teaches courses in
                                                                                        Physics, Mathematics and
                                                                                        Explorations
                                                                                        of Natural
                                                                                        Sciences at SSLA. Prof. Uday is
                                                                                        an
                                                                                        economist, and teaches courses
                                                                                        in
                                                                                        Economics,
                                                                                        Quantitative Reasoning, and
                                                                                        research
                                                                                        methodology at SSLA.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <section class="proceedings">
                                                                                <div class="proceedings-grid reverse">
                                                                                    <!-- <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r12.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div> -->
                                                                                    <!-- Speaker Section -->
                                                                                    <section class="speaker mt-5">
                                                                                        <h2>Workshop Proceedings </h2>
                                                                                        <div class="speaker-card">
                                                                                            <div
                                                                                                class="speaker-content">
                                                                                                <p>The workshop was
                                                                                                    initiated
                                                                                                    with an intriguing
                                                                                                    activity,
                                                                                                    the
                                                                                                    students were shown
                                                                                                    a
                                                                                                    slide containing 15
                                                                                                    different images of
                                                                                                    sweets/
                                                                                                    desserts. They
                                                                                                    were asked to
                                                                                                    make a guess on what
                                                                                                    connects all of
                                                                                                    these images
                                                                                                    together.
                                                                                                    After various
                                                                                                    guesses, it was
                                                                                                    revealed
                                                                                                    that Android had
                                                                                                    used these
                                                                                                    names as
                                                                                                    their various
                                                                                                    android versions.
                                                                                                    Another
                                                                                                    slide containing two
                                                                                                    pictures were
                                                                                                    shown, one in which
                                                                                                    Deepika Padikone is
                                                                                                    dancing
                                                                                                    while the other was
                                                                                                    a poster
                                                                                                    of the
                                                                                                    film : eh
                                                                                                    Ballet. Students
                                                                                                    were again
                                                                                                    asked to make a
                                                                                                    connection
                                                                                                    between
                                                                                                    these two
                                                                                                    pictures. This
                                                                                                    exercise was
                                                                                                    done to make the
                                                                                                    point that
                                                                                                    there
                                                                                                    are consequences
                                                                                                    to plagiarism. The
                                                                                                    first
                                                                                                    picture was from
                                                                                                    Levi’s Join
                                                                                                    the
                                                                                                    Movement which was
                                                                                                    accused of
                                                                                                    plagiarism of the
                                                                                                    set design used in
                                                                                                    the film.
                                                                                                    The
                                                                                                    set was
                                                                                                    specifically built
                                                                                                    for the
                                                                                                    film, which meant
                                                                                                    the ad
                                                                                                    built a
                                                                                                    similar set design
                                                                                                    without giving any
                                                                                                    acknowledgement to
                                                                                                    the
                                                                                                    original. Addressing
                                                                                                    this issue, it
                                                                                                    was brought to the
                                                                                                    students
                                                                                                    that Plagiarism of
                                                                                                    any form
                                                                                                    is not
                                                                                                    allowed and is
                                                                                                    considered a
                                                                                                    violation of
                                                                                                    academic integrity
                                                                                                    and
                                                                                                    honesty. </p>
                                                                                                <p>
                                                                                                    Dr. Sumitra and
                                                                                                    Prof. Uday
                                                                                                    then further
                                                                                                    explained what
                                                                                                    the term
                                                                                                    academic
                                                                                                    integrity means and
                                                                                                    what
                                                                                                    values it upholds.
                                                                                                    Then they
                                                                                                    delved
                                                                                                    into the various
                                                                                                    types of academic
                                                                                                    dishonesty
                                                                                                    which includes
                                                                                                    plagiarism,
                                                                                                    cheating,
                                                                                                    facilitation,
                                                                                                    etc. They also
                                                                                                    shared
                                                                                                    examples of the
                                                                                                    consequences
                                                                                                    of academic
                                                                                                    dishonesty which
                                                                                                    included scientific
                                                                                                    fraud,
                                                                                                    publishing of fake
                                                                                                    journals.
                                                                                                    They
                                                                                                    also showed the
                                                                                                    statistics of the
                                                                                                    number of
                                                                                                    academic papers
                                                                                                    retracted
                                                                                                    from
                                                                                                    journals due to
                                                                                                    image
                                                                                                    duplication,
                                                                                                    manipulation
                                                                                                    and plagiarism. The
                                                                                                    intention behind
                                                                                                    this was to show
                                                                                                    the seriousness of
                                                                                                    upholding
                                                                                                    academic integrity
                                                                                                    and
                                                                                                    honesty.
                                                                                                </p>
                                                                                                <p>
                                                                                                    After discussing all
                                                                                                    this,
                                                                                                    they then provided a
                                                                                                    deeper
                                                                                                    understanding of
                                                                                                    what
                                                                                                    plagiarism in
                                                                                                    writing means
                                                                                                    and entails; they
                                                                                                    showed
                                                                                                    examples
                                                                                                    which would guide
                                                                                                    them to distinguish
                                                                                                    what a
                                                                                                    plagiarized text
                                                                                                    looks like
                                                                                                    and how
                                                                                                    changing names,
                                                                                                    words or phrases
                                                                                                    does not
                                                                                                    make the work
                                                                                                    original. They
                                                                                                    then
                                                                                                    further gave an
                                                                                                    overview of the
                                                                                                    different
                                                                                                    types of plagiarism.
                                                                                                    They
                                                                                                    also
                                                                                                    explained the
                                                                                                    different
                                                                                                    types of citation
                                                                                                    styles,
                                                                                                    primarily APA and
                                                                                                    MLA.
                                                                                                </p>
                                                                                                <p>With the advent of
                                                                                                    artificial
                                                                                                    intelligence and its
                                                                                                    increased
                                                                                                    usage amongst
                                                                                                    students made it
                                                                                                    important
                                                                                                    to discuss why and
                                                                                                    how its
                                                                                                    usage
                                                                                                    through generative
                                                                                                    AI, paraphrasing, is
                                                                                                    considered to be
                                                                                                    violating
                                                                                                    academic
                                                                                                    integrity. The
                                                                                                    workshop
                                                                                                    also addressed this
                                                                                                    issue
                                                                                                    and its ethical
                                                                                                    concerns.
                                                                                                    The workshop
                                                                                                    was concluded
                                                                                                    by discussing the
                                                                                                    positive
                                                                                                    consequences of
                                                                                                    upholding
                                                                                                    academic
                                                                                                    honesty along with
                                                                                                    the negative
                                                                                                    consequences of
                                                                                                    academic dishonesty.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- B. Fee Payment -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapFive">
                                                                2.Academic
                                                                Writing- Constructing an Argument
                                                            </button>
                                                        </h2>
                                                        <div id="rapFive" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2>Objective of the Workshop </h2>
                                                                                <p>
                                                                                    Dissertation is an integral part of
                                                                                    the curriculum for the 3rd and final
                                                                                    year
                                                                                    students, it also
                                                                                    becomes an important aspect of daily
                                                                                    life of the students as they emerge
                                                                                    themselves in research
                                                                                    and writing. The undergraduate
                                                                                    dissertation provides the students
                                                                                    with a
                                                                                    platform to pursue and
                                                                                    learn about academic writing in the
                                                                                    area of their interests. This
                                                                                    workshop’s
                                                                                    objective was to
                                                                                    provide a direction to the research
                                                                                    process and ways of constructing an
                                                                                    argument
                                                                                    around the
                                                                                    research topic.
                                                                                </p>
                                                                            </div>
                                                                            <h2 class="facilator-heading">Workshop
                                                                                Facilitators </h2>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r14.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        Dr. Damini Kulkarni is an
                                                                                        assistant professor in the
                                                                                        Symbiosis School of
                                                                                        Liberal Arts,
                                                                                        and teaches courses in media
                                                                                        and film studies. She also
                                                                                        consistently
                                                                                        engages with the
                                                                                        theoretical frameworks and
                                                                                        facilitates students to
                                                                                        think critically
                                                                                        about how
                                                                                        theoretical paradigms and
                                                                                        ideas have shaped or
                                                                                        influenced the
                                                                                        construction of reality
                                                                                        and fiction alike. The
                                                                                        workshop provided an
                                                                                        opportunity to share her
                                                                                        deliberate and
                                                                                        experienced engagement with
                                                                                        research methodologies and
                                                                                        processes with
                                                                                        the students. </p>
                                                                                </div>
                                                                            </div>
                                                                            <section class="proceedings">
                                                                                <div class="proceedings-grid reverse">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <!-- Speaker Section -->
                                                                                            <section
                                                                                                class="speaker mt-5">
                                                                                                <h2>Workshop Proceedings
                                                                                                </h2>
                                                                                                <div
                                                                                                    class="speaker-card">
                                                                                                    <div
                                                                                                        class="speaker-content">
                                                                                                        <p>A number of
                                                                                                            third and
                                                                                                            fourth year
                                                                                                            students
                                                                                                            attended the
                                                                                                            workshop,
                                                                                                            and the
                                                                                                            atmosphere
                                                                                                            was
                                                                                                            filled with
                                                                                                            anticipation
                                                                                                            and
                                                                                                            excitement
                                                                                                            for the
                                                                                                            session. Dr.
                                                                                                            Damini
                                                                                                            opened the
                                                                                                            floor by
                                                                                                            asking what
                                                                                                            is an
                                                                                                            argument and
                                                                                                            how do
                                                                                                            we construct
                                                                                                            one.
                                                                                                            Everyone
                                                                                                            came
                                                                                                            up with
                                                                                                            different
                                                                                                            answers and
                                                                                                            Dr.
                                                                                                            Damini led
                                                                                                            them to
                                                                                                            arrive
                                                                                                            at their own
                                                                                                            answers.
                                                                                                            After
                                                                                                            everyone’s
                                                                                                            discussion,
                                                                                                            the
                                                                                                            descriptions
                                                                                                            were
                                                                                                            written
                                                                                                            on the board
                                                                                                            and the
                                                                                                            discussion
                                                                                                            was led
                                                                                                            forward
                                                                                                            through
                                                                                                            that.
                                                                                                            The root of
                                                                                                            the
                                                                                                            word
                                                                                                            argument was
                                                                                                            first
                                                                                                            dissected.
                                                                                                            It
                                                                                                            came from
                                                                                                            the word
                                                                                                            ‘argumentare’
                                                                                                            which
                                                                                                            meant to
                                                                                                            make clear,
                                                                                                            known or
                                                                                                            prove and
                                                                                                            gain
                                                                                                            knowledge.
                                                                                                            An
                                                                                                            argument was
                                                                                                            thus
                                                                                                            defined to
                                                                                                            be an
                                                                                                            assertion
                                                                                                            that
                                                                                                            defends or
                                                                                                            refutes a
                                                                                                            statement
                                                                                                            or an idea
                                                                                                            to
                                                                                                            fulfil a
                                                                                                            clear
                                                                                                            epistemological
                                                                                                            goal.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                        <div class="col-md-6">

                                                                                            <div
                                                                                                class="proceedings-image mt-5">
                                                                                                <img src="{{ asset('/assets/images/research/r13.webp') }}"
                                                                                                    alt="Banner image"
                                                                                                    class="img-fluid">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <p class="mt-4">After
                                                                                                arriving at the
                                                                                                definition, the
                                                                                                strategies of
                                                                                                approaching a
                                                                                                research model
                                                                                                was also discussed
                                                                                                along with
                                                                                                identifying the
                                                                                                boundaries of
                                                                                                limitations and
                                                                                                delimitations.
                                                                                                Thereafter,
                                                                                                discussions on the
                                                                                                appropriateness of
                                                                                                a research
                                                                                                model were
                                                                                                presented, of how to
                                                                                                match the
                                                                                                epistemology and
                                                                                                ontology of the
                                                                                                model. Other
                                                                                                concepts about
                                                                                                novelty, heuristics
                                                                                                and knowledge
                                                                                                models were also
                                                                                                discussed.
                                                                                            </p>
                                                                                            <p>The workshop became a
                                                                                                field of engagement
                                                                                                amongst the students
                                                                                                and the
                                                                                                facilitator guiding
                                                                                                the thought process
                                                                                                deliberating on how
                                                                                                to
                                                                                                arrive at an
                                                                                                argument and how to
                                                                                                structure a research
                                                                                                model. The three
                                                                                                hours
                                                                                                passed so
                                                                                                quickly that the
                                                                                                students didn’t even
                                                                                                get tired and wanted
                                                                                                to
                                                                                                engage more. Dr.
                                                                                                Damini through her
                                                                                                guidance and fun
                                                                                                presentation
                                                                                                provided
                                                                                                engaging and
                                                                                                astounding insights
                                                                                                into the research
                                                                                                process to the
                                                                                                students.
                                                                                                At the end of the
                                                                                                workshop, Dr. Damini
                                                                                                asked the students
                                                                                                to write about their
                                                                                                dissertation’s
                                                                                                research topics and
                                                                                                construct an
                                                                                                argument for their
                                                                                                research
                                                                                                question,
                                                                                                thereafter providing
                                                                                                feedback to how the
                                                                                                students can
                                                                                                approach
                                                                                                it.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- c.-->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapeleven">
                                                                3.Workshop on Gender Equity and Inclusion
                                                            </button>
                                                        </h2>
                                                        <div id="rapeleven" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        <strong>Workshop on Gender
                                                                                            Equity and Inclusion:
                                                                                        </strong>Transformative Pathways
                                                                                        in Higher Education with Wiscomp
                                                                                        : A unique first-of-its-kind
                                                                                        workshop was organised at Pune
                                                                                        from 22-24 August, 2019. The
                                                                                        workshop was hosted by Symbiosis
                                                                                        School for Liberal Arts (SSLA)
                                                                                        in collaboration with Women in
                                                                                        Security, Conflict Management
                                                                                        and Peace (WISCOMP), a New Delhi
                                                                                        based South Asian initiative
                                                                                        that promotes women’s equal
                                                                                        participation and leadership in
                                                                                        security and peacebuilding. The
                                                                                        workshop sought to facilitate
                                                                                        and institutionalise gender-just
                                                                                        norms, policies and practices at
                                                                                        Higher Educational Institutions
                                                                                        (HEIs).This workshop seeks to
                                                                                        open up spaces within college
                                                                                        and university campuses for
                                                                                        engaged dialogue to promote and
                                                                                        nurture inclusion and equity.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/sslapi13.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                    <p class="img-name-below">Wiscomp
                                                                                        participate and Team at SSLA MPH
                                                                                        on 23rd August 2019</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- d.-->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#raptweleve">
                                                                4.Women's Medical Camp
                                                            </button>
                                                        </h2>
                                                        <div id="raptweleve" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        Symbiosis School for Liberal
                                                                                        Arts in partnership with Asia
                                                                                        Foundation, Prayas and Centre
                                                                                        for Action and Reconducted
                                                                                        medical camps in Bopkhel on 11th
                                                                                        of September and at the
                                                                                        Symbiosis Vimannagar New Campus
                                                                                        (SVNC) on 16th September ‘2019.
                                                                                        At the camps, blood tests and
                                                                                        cervical cancer screenings were
                                                                                        conducted. Awareness campaigns
                                                                                        about cervical and breast cancer
                                                                                        were also held. Cervical cancer
                                                                                        screening was conducted for 50
                                                                                        women in Bopkhel and 90 women at
                                                                                        SVNC. Blood tests were conducted
                                                                                        for 113 women at Bopkhel and 87
                                                                                        women at SVNC. A team of 8
                                                                                        doctor-volunteers was present on
                                                                                        both days to collect the sample,
                                                                                        perform the screening and note
                                                                                        the patient history. The format
                                                                                        of the camp was such that first
                                                                                        the women were made aware of
                                                                                        what is cervical cancer.</p>
                                                                                </div>
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r15.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- e -->
                                                <!-- d.-->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapthirteen">
                                                                5.Workshop on Gender Sensitisation
                                                            </button>
                                                        </h2>
                                                        <div id="rapthirteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-text">
                                                                                    <p>
                                                                                        On 13 August 2019 Ms Renuka
                                                                                        Mukadam (Independent Consultant
                                                                                        on POSH, trainer and external
                                                                                        member on IC under sexual
                                                                                        harassment law) discussed the
                                                                                        various factors revolving around
                                                                                        the subject of sexual
                                                                                        harassment. She began by
                                                                                        defining it as a breakdown of
                                                                                        four ideologies: understanding
                                                                                        of gender, power, the role of
                                                                                        patriarchy and the expression of
                                                                                        sexuality. Views over the new
                                                                                        law, Sexual Harassment of Women
                                                                                        at the Workplace (Prevention,
                                                                                        Prohibition and Redressal) Act-
                                                                                        2013, were exchanged. She
                                                                                        mentioned the tools and
                                                                                        ideologies which supported women
                                                                                        to wield the law to their
                                                                                        advantages.</p>
                                                                                </div>
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r16.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- E -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapfourteen">
                                                                6.Workshop Organised by the Community Outreach Cell -
                                                                The COP Module on Gender
                                                            </button>
                                                        </h2>
                                                        <div id="rapfourteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-text">
                                                                                    <p>Dr. Sneha Gole who teaches at the
                                                                                        Krantijyoti Savitribai Phule
                                                                                        Women's Studies Centre conducted
                                                                                        a teaching module on Thinking
                                                                                        and Doing Gender for SSLA
                                                                                        students. The module was
                                                                                        conducted three times during the
                                                                                        2019-2020 and 2020-2021 and
                                                                                        2021-2022 academic years between
                                                                                        5th June, 2020 - 30th June,
                                                                                        2020, and 9th December, 2020 –
                                                                                        29th December, 2020 and 14th
                                                                                        June to 29th July, 2021. The
                                                                                        module’s focus was on creating
                                                                                        an understanding of gender,
                                                                                        which moves away from the focus
                                                                                        on 'men' and 'women' as
                                                                                        homogenous and mutually
                                                                                        exclusive categories to
                                                                                        understanding gender as a
                                                                                        structure and an analytical tool
                                                                                        which will help us make sense of
                                                                                        the world around us, from wars,
                                                                                        pandemics to our everyday life
                                                                                        experiences to understanding
                                                                                        debates from bois locker room to
                                                                                        how we romance and love. The
                                                                                        project work can be undertaken
                                                                                        individually or as a group and
                                                                                        will involve picking an issue/
                                                                                        everyday phenomenon and
                                                                                        analyzing it through a gender
                                                                                        lens, as well as developing an
                                                                                        intervention to address
                                                                                        common-sense ideas around it.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="proceedings-text">
                                                                                    <p>The nature of the project and the
                                                                                        intervention will be highly
                                                                                        personalized for each student,
                                                                                        helping them identify areas that
                                                                                        are of concern and interest to
                                                                                        them and allowing them to
                                                                                        develop analytical and
                                                                                        conceptual skills to address the
                                                                                        same.</p>
                                                                                    <p>Professor Uma Chakravarti, well
                                                                                        known feminist historian,
                                                                                        author, and film director
                                                                                        visited SSLA campus on 13 April,
                                                                                        2019 and interacted with
                                                                                        students and faculty. Her film,
                                                                                        Ek Inquilab aur Aaya, was
                                                                                        screened on this occasion.</p>
                                                                                    <p>Professor Lata Singh of the
                                                                                        Centre for Women's Studies,
                                                                                        School of Social Sciences,
                                                                                        Jawaharlal Nehru University
                                                                                        visited SSLA on 12–13 April,
                                                                                        2019. She interacted with
                                                                                        students of the course
                                                                                        Understanding Feminism. She was
                                                                                        also a discussant at the
                                                                                        screening of Prof. Chakravarti's
                                                                                        film.</p>
                                                                                </div>
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r18.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                    <p class="img-name-below">Panel on
                                                                                        Engendering Big History and
                                                                                        Envisioning Common Futures</p>
                                                                                </div>
                                                                                <div class="proceedings-text">
                                                                                    <p>Penelope Markle, R.N., N.P., USVA
                                                                                        (ret.), interacted with students
                                                                                        in Dr. Minocha's course, Women
                                                                                        and Work, on the theme of
                                                                                        'Negotiating Motherhood and
                                                                                        Workplace: Women in the
                                                                                        Caregiving Sector' on 12 August
                                                                                        2019.</p>
                                                                                    <p>A lecture on Prevention of Sexual
                                                                                        Harassment and Regulations and
                                                                                        Policy in Higher Education
                                                                                        Institutes was conducted by Mr.
                                                                                        Gaurav Sharma on 14th September,
                                                                                        2019, for Law students at SSLA.
                                                                                        The nuances of the law governing
                                                                                        sexual harassment at workplaces
                                                                                        in general and educational
                                                                                        institutes, in particular, were
                                                                                        discussed. Also, legal
                                                                                        provisions regarding the nature
                                                                                        and constitution of the Internal
                                                                                        Committee at an institute were
                                                                                        discussed.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-sub">
                                                                                <strong>Special Lecture organised at
                                                                                    SSLA in Blended Learning Mode :
                                                                                    Gender and Global Learning
                                                                                    Experience</strong>
                                                                                <p>Inaugural GLE Lecture in Blended
                                                                                    mode: Dr. Richa Minocha presenting
                                                                                    to DePaul students and faculty and
                                                                                    Symbiosis students on the theme:
                                                                                    Gender, Livelihoods and Food
                                                                                    Security, 12 April 2022.</p>
                                                                                <img src="{{ asset('/assets/images/research/r19.webp') }}"
                                                                                    alt="Banner image"
                                                                                    class="img-fluid">
                                                                                <strong>SSLA students visited Savitribai
                                                                                    Phule Pune University</strong>
                                                                                <p> on 5 March, 2019 as feminist scholar
                                                                                    and writer V. Geetha was delivering
                                                                                    the seventh Mukta Salve lecture on
                                                                                    the theme of 'Religion and the
                                                                                    Feminist Subject: Thoughts on a
                                                                                    Possible History.'</p>
                                                                                <p>Women and Gender Studies students,
                                                                                    accompanied by Prof. Richa Minocha,
                                                                                    went on a day excursion on 15 March
                                                                                    2022, to explore sites associated
                                                                                    with Savitribai Phule in Pune.</p>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <img src="{{ asset('/assets/images/research/r20.webp') }}"
                                                                                            alt="Banner image"
                                                                                            class="img-fluid">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <img src="{{ asset('/assets/images/research/r21.webp') }}"
                                                                                            alt="Banner image"
                                                                                            class="img-fluid">
                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <p class="img-name-below mt-3">
                                                                                            EVENTS RELATED TO GENDER
                                                                                            ORGANISED BY STUDENTS</p>
                                                                                    </div>
                                                                                </div>
                                                                                <strong>The Natak Society</strong>
                                                                                <p>The body is a story, was organised as
                                                                                    an online theatre movement workshop
                                                                                    on 26th June, '21 by the Natak
                                                                                    Society at SSLA. There is a way in
                                                                                    performance to build empathy, to
                                                                                    connect with people, and to connect
                                                                                    with our own bodies-- something that
                                                                                    performers, had lost since bodies
                                                                                    had become limited to the boundaries
                                                                                    of a screen during the lockdown. To
                                                                                    try and compensate for this loss, to
                                                                                    reconnect with our bodies, to let
                                                                                    our bodies tell stories, Natak
                                                                                    Society organized an online theatre
                                                                                    movement workshop along with Queer
                                                                                    Qrew for their pride week in June
                                                                                    '21. Facilitated by filmmaker and
                                                                                    theatre practitioner Gillian Pinto,
                                                                                    and theatre practitioner and gender
                                                                                    educator Hina Siddiqui, this
                                                                                    workshop included close readings of
                                                                                    texts from Bhakti poetry and
                                                                                    discussions on personal experiences
                                                                                    after each activity to understand
                                                                                    ways in which the body has been
                                                                                    perceived away from the modern
                                                                                    markings of gender.</p>
                                                                                <p>Silence the court is in session - An
                                                                                    audio adaptation for the BITS WAVES
                                                                                    fest: (27th October to 2nd November,
                                                                                    '21). In their submission for the
                                                                                    BITS Goa annual WAVES fest, the
                                                                                    Natak society worked on an audio
                                                                                    adaptation of Vijay Tendulkar's
                                                                                    'Silence! The Court is in Session'
                                                                                    (Originally, 'Shantata! Court Chaalu
                                                                                    Aahe'). They played around with the
                                                                                    characters and reimagined the story
                                                                                    with Samant and Miss Benare as a
                                                                                    queer romance. This became a key
                                                                                    point in the play since it helped
                                                                                    explore Miss Benare's motivations as
                                                                                    a character. It was easy to imagine
                                                                                    Miss Benare as queer because the way
                                                                                    her character is written in
                                                                                    opposition to a dominant patriarchal
                                                                                    discourse. One of the most important
                                                                                    ways for her to respond to this
                                                                                    dominant discourse is by expressing
                                                                                    her sexuality and agency freely. The
                                                                                    play builds up to an important
                                                                                    question about her agency over her
                                                                                    body and her unborn child – a very
                                                                                    important question that the world is
                                                                                    struggling with and going back and
                                                                                    forth on today. Miss Samant,
                                                                                    initially confused about Miss
                                                                                    Benare's flirtatious passes at her,
                                                                                    later accepts and reverts to them,
                                                                                    and the other characters of the play
                                                                                    don't recognize it as a romantic
                                                                                    encounter.</p>
                                                                                <strong>Traditional Day performance:
                                                                                    (12th April, '22)</strong>
                                                                                <p>For SSLA's traditional day in April
                                                                                    themed '90s Bollywood', the Natak
                                                                                    Society put up a play showing an
                                                                                    audition setting where aspiring
                                                                                    actors play 90s Bollywood actors,
                                                                                    with tones of nostalgia from the 90s
                                                                                    in the music and dialogues. The two
                                                                                    central characters built a queer
                                                                                    intimacy which comforted one of them
                                                                                    who was nervous about their audition
                                                                                    and they ended up expressing
                                                                                    themselves in the clothes they
                                                                                    liked. To make a character
                                                                                    comfortable in a role is something
                                                                                    realized through these plays, when
                                                                                    they are exposed to the public gaze
                                                                                    in the clothes that they like to
                                                                                    wear, which is often treated as a
                                                                                    spectacle. The Natak society hopes
                                                                                    to have more conversations about the
                                                                                    comfort and care that can be shared
                                                                                    with each other through these plays
                                                                                    as acting on the other hand also
                                                                                    exposes students to vulnerability.
                                                                                </p>
                                                                                <strong>'Stories by women, about women,
                                                                                    for everyone', an outing: (24th
                                                                                    April, '22)</strong>
                                                                                <p>The Natak society students went for
                                                                                    an outing to watch an experimental
                                                                                    play, a rehearsed reading of 3
                                                                                    stories by Gingertea Drama
                                                                                    Productions. Three stories (in
                                                                                    Marathi, Hindi and English) written
                                                                                    by women were read out and
                                                                                    performed, while giving the audience
                                                                                    an immersive experience of the three
                                                                                    stories by engaging our senses
                                                                                    (smell, sound, taste even) with
                                                                                    elements of the stories. Gingertea
                                                                                    Drama Productions picked out stories
                                                                                    of love, desire and labour, followed
                                                                                    by questions that the audience was
                                                                                    supposed to answer anonymously and
                                                                                    the answers were read out in the
                                                                                    end, forming stories of their own.
                                                                                    This was a great experience for the
                                                                                    members who attended in
                                                                                    understanding how theatre can be
                                                                                    used as a political tool to tell
                                                                                    important stories and bring them to
                                                                                    life</p>
                                                                                <strong>'How I learned to drive', a play
                                                                                    reading: (24th June, '22)</strong>
                                                                                <p>A collaboration with the Thought
                                                                                    Project under their key initiative
                                                                                    'Curtain Call', a play reading was
                                                                                    organized by Natak Society open to
                                                                                    everyone at SSLA. Thought Project is
                                                                                    an organization that works at the
                                                                                    intersection of theatre, gender,
                                                                                    sexuality and mental health.

                                                                                    Present student members of the Natak
                                                                                    Society include Diviya Makhija,
                                                                                    Zitin Kaul, Khushi Tulsyan, Ribhav
                                                                                    Singh, Evina Lakra, Sheuli Banerjee,
                                                                                    Trisha Chandra, Nayanika Shome,
                                                                                    Sakshi Ramesh, Ali Mahmud, Lakshmi
                                                                                    Pillai, Adithi Bhat, Rohail Shekhar,
                                                                                    Anushri Shah, Alex Shah, Angela
                                                                                    Sabu, Dharshini Kannan, Kompal
                                                                                    Zinta, Keerthana Menon, Diya Nayak,
                                                                                    Samikshya Panda, Ipshita Roy, Adya
                                                                                    Sharma, Muskaan Narwani, Vatsal
                                                                                    Khajuria, Kartik Nair, Simran Naik,
                                                                                    Subarna Maitra, Urvi Ganjoo, and
                                                                                    Gunreet Marwah.</p>
                                                                                <strong>SSLA Presents</strong>
                                                                                <p>SSLA Presents is the annual theatre
                                                                                    production put up by the faculty and
                                                                                    students of Symbiosis School for
                                                                                    Liberal Arts. Each year students
                                                                                    from across four batches along with
                                                                                    the faculty get together and create
                                                                                    a theatre collective. The faculty
                                                                                    members and students try to create a
                                                                                    space where creativity flourishes.
                                                                                    Gender has been one of the common
                                                                                    themes that the makers have tried to
                                                                                    explore over various productions.
                                                                                    SSLA Presents performed A Midsummer
                                                                                    Night's Dream by William Shakespeare
                                                                                    (2016), The Resistible Rise of
                                                                                    Arturo Ui by Bertolt Brecht (2017),
                                                                                    Oedipus Rex by Sophocles and Medea
                                                                                    by Euripides (2018), Hayavadan and
                                                                                    Boiled Beans on Toast by Girish
                                                                                    Karnad (2019), Adaptations of Fear
                                                                                    and Misery of the Third Reich by
                                                                                    Bertolt Brecht and Henrik Ibsen's An
                                                                                    Enemy of the People (2021).</p>
                                                                                <p>Four plays that were produced and
                                                                                    directed in the first three years of
                                                                                    SSLA Presents were chosen keeping in
                                                                                    mind intersectional issues of
                                                                                    gender, race, and class- questions
                                                                                    of power and violence and
                                                                                    resistance. Conceptualised by Ananya
                                                                                    Parekh and Nikhil Narkar, the plays
                                                                                    tried to highlight the above
                                                                                    mentioned issues through the
                                                                                    aesthetics and the performance.
                                                                                    Almost the entire team consisted of
                                                                                    women- as assistant directors,
                                                                                    production in charge at various
                                                                                    levels, as well as actors. In
                                                                                    midsummer nights dream, the plot
                                                                                    itself addresses questions of gender
                                                                                    and power. Many of our women actors
                                                                                    took on male roles. As Ananya Parekh
                                                                                    recalls, the dialogues of the women
                                                                                    characters, especially those about
                                                                                    being a woman in a man's world were
                                                                                    highlighted. In the second play, The
                                                                                    resistible rise of Arturo Ui all
                                                                                    major male characters were played by
                                                                                    women actors. Ananya and Nikhil
                                                                                    deliberately highlighted male
                                                                                    friendships by using a variety of
                                                                                    songs and tried to ask actors to
                                                                                    play roles in a gender neutral
                                                                                    manner.</p>
                                                                                <p>The third play, Medea is about
                                                                                    women's conflict and it was an
                                                                                    entirely women led production and
                                                                                    cast. Many songs were used to
                                                                                    universalise certain issues, an all
                                                                                    woman chorus was deployed and the
                                                                                    play was set in the modern context.
                                                                                    Ananya Parekh expressed similar
                                                                                    sentiment for the fourth play
                                                                                    Oedipus Rex and Suchetana Banerjee
                                                                                    who directed Hayavadan and Boiled
                                                                                    Beans on Toast echoed Ananya's
                                                                                    thoughts when she said that women
                                                                                    actors took on male roles and that
                                                                                    she worked hard along with student
                                                                                    Tanmay Guha Neogi as Co- Director to
                                                                                    help female actors bring in their
                                                                                    own ways of performing and feel
                                                                                    comfortable with their bodies.</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- E -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapfifteen">
                                                                7.Workshop on Tryst with Sustainability
                                                            </button>
                                                        </h2>
                                                        <div id="rapfifteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-text">
                                                                                    <p>Symbiosis School for Liberal Arts
                                                                                        (SSLA), Pune, in collaboration
                                                                                        with the Council on Energy,
                                                                                        Environment, and Water (CEEW),
                                                                                        New Delhi, is thrilled to
                                                                                        present a unique workshop for
                                                                                        students who are interested in
                                                                                        issues of sustainability and
                                                                                        communication. Join us for an
                                                                                        engaging workshop on Tryst with
                                                                                        Sustainability: Mainstreaming
                                                                                        Sustainability & Climate Through
                                                                                        Storytelling on 9th January 2025
                                                                                        at SSLA, Pune. Mark your
                                                                                        calendars and stay tuned. Don’t
                                                                                        miss this chance to learn,
                                                                                        engage, and lead in
                                                                                        sustainability.</p>

                                                                                </div>
                                                                                <img src="/assets/images/research/Workshop-on-Tryst.webp"
                                                                                    alt="Dr. Gitanjali Roy"
                                                                                    class="img-fluid">

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- F. -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapSixteen">

                                                                8. 5th Annual Research Workshop Series Report - Basics
                                                                of
                                                                APA Citation Style

                                                            </button>
                                                        </h2>
                                                        <div id="rapSixteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>

                                                                            <div class="objective">
                                                                                <h2>Objective of the Workshop </h2>
                                                                                <p>Every year, the research cell
                                                                                    conducts a series of research
                                                                                    workshops to provide the students
                                                                                    with all four batches of resources
                                                                                    and guidance for proper research and
                                                                                    writing. As a part of the 5th annual
                                                                                    research workshop Vaidyanatha
                                                                                    Gundlupet, a permanent faculty at
                                                                                    the Symbiosis School for Liberal
                                                                                    Arts, conducted a workshop on APA
                                                                                    citation techniques. The workshop
                                                                                    aimed to provide students with tips
                                                                                    and techniques to help cite in the
                                                                                    APA format and other resources they
                                                                                    need for their academic work in a
                                                                                    neat, organized manner to make their
                                                                                    academic writing process more
                                                                                    manageable.</p>
                                                                            </div>
                                                                            <h2 class="facilator-heading">Workshop
                                                                                Facilitators </h2>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r11.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="proceedings-text">
                                                                                    <p>Vaidyanatha Gundlupet has a Ph.D.
                                                                                        in Political Science and is
                                                                                        currently working as an
                                                                                        Assistant Professor for
                                                                                        Political Science at the
                                                                                        Symbiosis School for Liberal
                                                                                        Arts. His research and teaching
                                                                                        interests focus on political
                                                                                        rhetoric, modern Indian
                                                                                        politics, international
                                                                                        relations theory, and
                                                                                        international security issues,
                                                                                        particularly the impact of
                                                                                        nuclear proliferation on
                                                                                        strategic stability and
                                                                                        diplomatic practice. He has a
                                                                                        passion for thinking about the
                                                                                        philosophy of (social) science,
                                                                                        its implications for the
                                                                                        practice of research, and
                                                                                        teaching qualitative research
                                                                                        methods. He may be reached via
                                                                                        e-mail at
                                                                                        vaidya.gundlupet@ssla.edu.in.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <section class="proceedings">
                                                                                <div class="proceedings-grid reverse">
                                                                                    <!-- <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r12.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div> -->
                                                                                    <!-- Speaker Section -->
                                                                                    <section class="speaker mt-5">
                                                                                        <h2>Workshop Proceedings </h2>
                                                                                        <div class="speaker-card">
                                                                                            <div>
                                                                                                <ul>
                                                                                                    <li>Purpose of
                                                                                                        citation - Why
                                                                                                        to cite,
                                                                                                        differentiate
                                                                                                        between
                                                                                                        quotations and
                                                                                                        citations, when
                                                                                                        should one cite,
                                                                                                        and what should
                                                                                                        one cite. Under
                                                                                                        this, the
                                                                                                        facilitator made
                                                                                                        use of a
                                                                                                        flowchart by
                                                                                                        UCSD libraries.
                                                                                                    </li>
                                                                                                    <li>Format of
                                                                                                        citation –
                                                                                                        Instructions
                                                                                                        were given on
                                                                                                        where a citation
                                                                                                        is placed in a
                                                                                                        research paper,
                                                                                                        how the
                                                                                                        citations are
                                                                                                        organized, and
                                                                                                        what type of
                                                                                                        citation must be
                                                                                                        used.
                                                                                                        Citation styles
                                                                                                        – Under this the
                                                                                                        two broad types
                                                                                                        of citation
                                                                                                        styles – bracket
                                                                                                        citation and
                                                                                                        footnote
                                                                                                        citation were
                                                                                                        introduced. The
                                                                                                        facilitator
                                                                                                        further
                                                                                                        elaborated on
                                                                                                        what style
                                                                                                        should fit under
                                                                                                        each of the
                                                                                                        broad types.
                                                                                                        Introduction of
                                                                                                        the APA style –
                                                                                                        APA citation
                                                                                                        style was
                                                                                                        introduced as a
                                                                                                        bracket citation
                                                                                                        style.</li>
                                                                                                    <li>How to cite
                                                                                                        under the APA
                                                                                                        style - This
                                                                                                        portion covered
                                                                                                        a major part of
                                                                                                        the workshop.. A
                                                                                                        few of the many
                                                                                                        major highlights
                                                                                                        under this
                                                                                                        section
                                                                                                        included:
                                                                                                        <ul>
                                                                                                            <li>In-text
                                                                                                                citations
                                                                                                            </li>
                                                                                                            <li>Citations
                                                                                                                with
                                                                                                                page
                                                                                                                numbers
                                                                                                                and
                                                                                                                citations
                                                                                                                without
                                                                                                                page
                                                                                                                numbers
                                                                                                            </li>
                                                                                                            <li>Citations
                                                                                                                with an
                                                                                                                unknown
                                                                                                                author
                                                                                                            </li>
                                                                                                            <li>Citations
                                                                                                                with
                                                                                                                multiple
                                                                                                                authors
                                                                                                            </li>
                                                                                                            <li>Reference
                                                                                                                list
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>Understanding
                                                                                                        capitalization –
                                                                                                        In this part,
                                                                                                        tips were given
                                                                                                        on how to
                                                                                                        identify what
                                                                                                        kind of source
                                                                                                        needs to
                                                                                                        capitalize and
                                                                                                        what does not.
                                                                                                        The same was
                                                                                                        demonstrated
                                                                                                        through the
                                                                                                        sample
                                                                                                        professional
                                                                                                        paper from
                                                                                                        Purdue owl.</li>
                                                                                                </ul>
                                                                                                <h2 class="mt-4">List of
                                                                                                    participants
                                                                                                </h2>
                                                                                                <div
                                                                                                    class="table-responsive">
                                                                                                    <table
                                                                                                        class="table ">
                                                                                                        <thead
                                                                                                            class=" ">
                                                                                                            <tr>
                                                                                                                <th>S.No.
                                                                                                                </th>
                                                                                                                <th>Name
                                                                                                                </th>
                                                                                                                <th>PRN
                                                                                                                </th>
                                                                                                                <th>Batch
                                                                                                                </th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>1
                                                                                                                </td>
                                                                                                                <td>Mogili
                                                                                                                    Srivardhan
                                                                                                                    Reddy
                                                                                                                </td>
                                                                                                                <td>20060322078
                                                                                                                </td>
                                                                                                                <td>2024
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>2
                                                                                                                </td>
                                                                                                                <td>Hansini
                                                                                                                    Ruparel
                                                                                                                </td>
                                                                                                                <td>19060322041
                                                                                                                </td>
                                                                                                                <td>2023
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>3
                                                                                                                </td>
                                                                                                                <td>Lakshmi
                                                                                                                    Pillai
                                                                                                                </td>
                                                                                                                <td>19060322053
                                                                                                                </td>
                                                                                                                <td>2023
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>4
                                                                                                                </td>
                                                                                                                <td>Sandhi
                                                                                                                    Umredkar
                                                                                                                </td>
                                                                                                                <td>20060322120
                                                                                                                </td>
                                                                                                                <td>2024
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>5
                                                                                                                </td>
                                                                                                                <td>Tareena
                                                                                                                    Kaur
                                                                                                                    Chandhok
                                                                                                                </td>
                                                                                                                <td>21060322167
                                                                                                                </td>
                                                                                                                <td>2025
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td>6
                                                                                                                </td>
                                                                                                                <td>Yashit
                                                                                                                    Jain
                                                                                                                </td>
                                                                                                                <td>21060322179
                                                                                                                </td>
                                                                                                                <td>2025
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- F. -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#rapSeventeen">
                                                                9.
                                                                Workshop: Research Methods in Business Studies
                                                            </button>
                                                        </h2>
                                                        <div id="rapSeventeen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Workshop</span>
                                                                            </div>

                                                                            <div class="objective">
                                                                                <h2>Objective of the Workshop </h2>
                                                                                <p>The Research Cell, along with Dr.
                                                                                    Anurupa Ghatge, organized this
                                                                                    workshop on Research Methods in
                                                                                    Business Studies for third-year
                                                                                    Business Studies majors with the aim
                                                                                    to develop a comprehensive
                                                                                    understanding of research
                                                                                    methodologies and techniques among
                                                                                    the Business Studies Students at
                                                                                    SSLA. Therefore, even though the
                                                                                    workshop was exclusively organized
                                                                                    for students with a major in
                                                                                    Business Studies, students with a
                                                                                    minor in Business Studies were also
                                                                                    encouraged to join. The two-day
                                                                                    workshop on "Fast-Tracking Research
                                                                                    Capabilities Using SPSS" was
                                                                                    basically designed to equip
                                                                                    participants with the essential
                                                                                    tools and methodologies required for
                                                                                    rigorous academic research. The
                                                                                    workshop focused on defining
                                                                                    research problems, setting clear
                                                                                    objectives, formulating hypotheses,
                                                                                    and using SPSS to validate these
                                                                                    hypotheses with appropriate
                                                                                    statistical techniques. Through
                                                                                    engaging case discussions,
                                                                                    participants were encouraged to
                                                                                    learn how to effectively map
                                                                                    research problems, align objectives,
                                                                                    and select the right tools for
                                                                                    evidence building, all crucial steps
                                                                                    in preparing for dissertation
                                                                                    writing.</p>
                                                                            </div>
                                                                            <h2 class="facilator-heading">Workshop
                                                                                Facilitators </h2>
                                                                            <div class="proceedings-grid-workshop">
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/Business-Studies1.jpg') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/Business-Studies2.jpg') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                            </div>
                                                                            <section class="proceedings">
                                                                                <div class="proceedings-grid reverse">
                                                                                    <!-- <div class="proceedings-image">
                                                                                    <img src="{{ asset('/assets/images/research/r12.webp') }}"
                                                                                        alt="Banner image"
                                                                                        class="img-fluid">
                                                                                </div> -->
                                                                                    <!-- Speaker Section -->
                                                                                    <section class="speaker mt-5">
                                                                                        <h2>Workshop Proceedings </h2>
                                                                                        <div class="speaker-card">
                                                                                            <p><strong>Day 1:</strong>
                                                                                                On the first day the
                                                                                                facilitator focused on
                                                                                                laying a strong
                                                                                                foundation for research
                                                                                                by guiding participants
                                                                                                through the process of
                                                                                                defining a research
                                                                                                problem. He demonstrated
                                                                                                how to set precise and
                                                                                                achievable objectives
                                                                                                and guide the
                                                                                                formulation of relevant
                                                                                                hypotheses and students
                                                                                                engaged in interactive
                                                                                                sessions that included
                                                                                                real-world case
                                                                                                discussions to
                                                                                                understand the alignment
                                                                                                between research
                                                                                                problems, objectives,
                                                                                                and hypotheses. This day
                                                                                                ensured that
                                                                                                participants were left
                                                                                                with a clear
                                                                                                understanding of the
                                                                                                importance of each
                                                                                                component in the
                                                                                                research process.</p>
                                                                                            <p><strong>Day 2:</strong>
                                                                                                On the second day the
                                                                                                facilitator delved into
                                                                                                the application of
                                                                                                statistical techniques
                                                                                                using SPSS and taught
                                                                                                the students how to
                                                                                                select and apply the
                                                                                                correct statistical
                                                                                                methods to validate
                                                                                                their hypotheses. During
                                                                                                this workshop, he
                                                                                                provided students with
                                                                                                hands-on training with
                                                                                                SPSS, where students
                                                                                                analyzed data sets and
                                                                                                were explained the
                                                                                                nuances of evidence
                                                                                                building. The
                                                                                                facilitator also delved
                                                                                                into case studies and
                                                                                                helped the students with
                                                                                                mapping research
                                                                                                problems with objectives
                                                                                                and hypothesis testing,
                                                                                                and evidence building
                                                                                                tools. By the end of the
                                                                                                day, the students were
                                                                                                well-prepared to apply
                                                                                                these skills to their
                                                                                                dissertations.</p>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                    <button class="read-more-btn" type="button">
                                                                        Read More
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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