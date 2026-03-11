@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Director's Note</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="directors_note_main">
    <!-- Inner section start -->
    <section class="director-profile-section">
        <div class="bg-animated"></div>

        <div class="container">
            <h1 class="inner__red_heading mt-4">Director's Note</h1>
            <div class="row  director-card" data-aos="fade-up">

                <!-- Image Column -->
                <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                    <div class="director-img-wrapper">
                        <img src="{{ asset('/assets/images/about/Shweta-Sinha.webp') }}"
                            alt="Dr. Shweta Sinha Deshpande" class="img-fluid director-img">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="ms-lg-4">
                        <!-- <h2 class="director-title">Director’s Profile</h2> -->
                        <h4 class="director-name">Dr. Shweta Sinha Deshpande</h4>

                        <p class="director-text">
                            Dr. Shweta Sinha Deshpande has a Ph.D. in Archaeology and has contributed to
                            archaeological and associated anthropological research through an interdisciplinary and
                            multidisciplinary approach. She has been associated with Liberal Arts education for more
                            than a decade and has an in-depth and a keen understanding of this model and the value
                            addition this model offers to the world and India’s growing population dividend, the
                            globalized industry and the service sector. Her current research focus is on Globalization
                            and
                            its influence on the socio-cultural space including religion, trends in migration, education
                            and development.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="director-text mt-4">
                        The thrust of her research is on interactions between individuals and
                        cultures, both modern and ancient. Her work has led her to conclude that the key to
                        understanding current social issues is to recognize the often-unrealized cultural baggage
                        that people carry.
                    </p>

                    <p class="director-text">
                        She has authored many research articles and books and was the founding President of the
                        India Big History Association and a founding Member of the Society for South Asia
                        Archaeology (SOSAA). She currently serves on the Editorial Board of Migration Letters an
                        international journal on migration and is a member of the Executive Committee of the Nehru
                        Science Centre, Mumbai under the Ministry of Culture, Government of India.
                    </p>
                    <!-- Interactive Accordion -->
                    <div class="director-desk">
                        <button class="desk-toggle">
                            <span>From the Director’s Desk</span>
                        </button>

                        <div class="director-text">
                            <p>The Twenty-first century is unprecedented and crucial for the globe and humanity. It is
                                the
                                fastest-changing that history has ever seen and offers innumerable opportunities like
                                never
                                before to those who are quick at adapting and learning the new ways of this world. It is
                                also
                                vulnerable to the challenges and threats of the social, political, and physical
                                environment
                                leading to an ‘existential risk’. This dynamic world needs educated citizens equipped
                                with
                                skillsets to drive into uncharted territories and help shape our future</p>
                            <p>
                                The world we engage with every day is not compartmentalised. It flows from one to the
                                other. Culture, media, and education influence and shape the worldviews and lenses with
                                which we view ourselves and the surroundings. Since it is not always within our hands to
                                shape the culture or media that we engage with, education becomes the means that will
                                lead to a critical comprehensive understanding.
                            </p>
                            <p>
                                Education, according to Nelson Mandela, ‘is the most powerful weapon which can be used
                                to change the world’. Education steers curiosity, and together, they become the means
                                that
                                allow individuals and societies to truly engage, comprehend and make sense of the world
                                that we live in.
                                Today technology has created a borderless experience of learning with access to
                                unparalleled data, people and answers to questions. What is therefore needed, is the
                                skill to
                                make sense of the information that is around them. The education needed therefore is not
                                facts, figures and information but the capability of creative and critical thinking;
                                communication and collaboration for problem solving at social, professional and personal
                                levels.
                            </p>
                            <p>
                                SSLA’s four-year B.A/B.Sc. Liberal Arts Honours degree moves beyond the traditional
                                degree
                                to promote an inter-multi-and-trans-disciplinary holistic and well-rounded education. It
                                brings together the deep knowledge of individual disciplines and transferable skills of
                                creative problem solving; reasoning and critical thinking, intercultural collaboration
                                and
                                team work with communication for the 21st century dynamic world. It provides the much-
                                needed agility, adaptability and ability to identify and connect the dots to see the
                                whole and
                                the parts as it exists in the real world offering an opportunity for those who are
                                interested in
                                positions of responsibility and decision making in their professional, personal and
                                public lives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner section ends  -->
</main>
@include('footer')