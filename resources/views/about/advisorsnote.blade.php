@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Advisor’s Note</h1> -->
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
            <h1 class="inner__red_heading mt-4">Advisor’s Note</h1>
            <div class="row  director-card" data-aos="fade-up">

                <!-- Image Column -->
                <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                    <div class="director-img-wrapper">
                        <img src="{{ asset('/assets/images/about/Anita-patankar.webp') }}"
                            alt="Dr. Shweta Sinha Deshpande" class="img-fluid director-img">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="ms-lg-5">
                        <!-- <h2 class="director-title">Advisor’s Profile</h2> -->
                        <h4 class="director-name">Anita Patankar</h4>

                        <p class="director-text">
                            With a PhD in Marketing, as well as an M. Com, M.S. (Psychotherapy and Counselling), and a
                            Post Graduate Diploma in Psychological Counselling, Dr. Anita Patankar is the
                            Founder-Director of Symbiosis School for Liberal Arts (SSLA) and has led the institute since
                            its inception in 2011. As a pioneer educator of liberal arts in India, she is the only
                            Indian representative and founder member of the Alliance of Asian Liberal Arts Universities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="director-text mt-4">
                        With over 37 years of expertise in the field of higher education, she is the founding member
                        of India’s first institute for liberal arts, the Symbiosis Centre for Liberal Arts and the
                        Centre for International Initiatives. She is the Director at the Symbiosis Centre for
                        International Studies (SCIE).
                    </p>
                    <p class="director-text">
                        Dr. Patankar’s teaching career has seen her head the Department of Marketing at the
                        Symbiosis College of Arts and Commerce (SCAC). Her courses such as Marketing and Consumer
                        Behaviour, and Advertising and Contemporary Culture, were much sought after. With numerous
                        papers published in prestigious international journals, she has also co-authored three
                        textbooks in Marketing and Business Administration, edited several books for Symbiosis
                        Centre for Distance Learning, and taught Marketing at the PG and MBA level; in addition to
                        conducting workshops on Communication Skills, Learning Pedagogies, Parenting Young Adults
                        and Personality Development.
                    </p>
                    <p class="director-text">
                        Her multi-hued career led her to become a member of the Confederation of Indian Industry
                        (CII) India-Africa committee. She is also a Trustee on the board of ECONET, an NGO dedicated
                        to offering support in the field of human and institutional development.
                    </p>

                    <p class="director-text">
                        She has authored numerous research publications, served as the founding President of the
                        India Big History Association, and is a founding member of the Society for South Asia
                        Archaeology (SOSAA).
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Interactive Accordion -->
                    <div class="director-desk">
                        <button class="desk-toggle">
                            <span>From the Advisor’s Desk</span>
                        </button>

                        <div class="director-text">
                            <p>We live in a world that seems to be forever changing… a new world with dynamic challenges
                                that requires young enthusiastic adults capable of playing positive and fruitful roles
                                in organizations and communities. Symbiosis School for Liberal Arts (SSLA) strongly
                                believes in the importance of a comprehensive education in preparation for career
                                advancement and the exercise of leadership.</p>
                            <p>
                                We believe organizations and society have an urgent need for creative individuals who
                                will readily learn on the job, after having been exposed to a broad and comprehensive
                                education. Based on our experiences with liberal arts in the last 16 years, we know that
                                a sound liberal arts education provides a much-needed cultural orientation to the world
                                in which we live.
                            </p>
                            <p>
                                It equips students with ideas, analytical and communication skills, and global
                                perspectives along with the ability to synthesize knowledge and make informed value
                                judgments. Our distinctive 4-year honours programme will also help students learn the
                                importance of being personally and socially responsible, something so necessary to grow
                                into leaders of substance, and be happy and successful in their future personal,
                                community and professional lives.
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