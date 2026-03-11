@include('header')
<!-- <div class="banner_box">
    <img src="{{ asset('assets/images/about/about-banner-image.webp') }}" alt="Banner image" class="img-fluid">
</div> -->
<div class="main-banner-box">
    <div class="sub-main-banner">
        <!-- <h1 class="inner_heading">Vision and Mission</h1> -->
        <div class="animated-bg">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
</section>
<!-- Responsive Header ends  -->
<main class="mission_vision_main">
    <!-- Inner section start -->
    <section class="vision-mission-section " data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <h1 class="inner__red_heading mt-4">Vision and Mission</h1>
            <div class="row align-items-center vision-box">
                <!-- Vision Content -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="section-title">Our Vision</h2>
                    <p class="section-text">
                        Promoting international understanding through quality education by fostering global
                        perspectives, cultural sensitivity, and academic excellence.
                    </p>
                    <p class="section-text">Our goal is to empower students to become responsible global citizens who
                        contribute meaningfully to an interconnected world.</p>
                </div>

                <!-- Vision Animation -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <!-- <lottie-player src="/assets/JSON/Man looking through binoculars.json" background="transparent"
                            speed="1" class="lottie-anim" loop autoplay>
                        </lottie-player> -->
                        <div class="vision-img-wrapper">
                            <img src="{{ asset('/assets/images/about/ssla-vision.png') }}" alt="Vision image"
                                class="img-fluid vision-mission-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-box flex-md-row-reverse">
                <!-- Mission Content -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="section-title">Our Mission</h2>
                    <ul class="mission-list">
                        <li>To inculcate the spirit of <strong>Vasudhaiva Kutumbakam</strong></li>
                        <li>To contribute to knowledge generation and dissemination</li>
                        <li>To promote ethical and value-based learning</li>
                        <li>To foster national development</li>
                        <li>To inculcate cross-cultural sensitization</li>
                        <li>To develop global competencies among students</li>
                        <li>To nurture creativity and entrepreneurship</li>
                        <li>To enhance employability and human resource development</li>
                        <li>To promote health and wellness</li>
                        <li>To instill environmental and social sensitivity</li>
                        <li>To develop thought-provoking leaders</li>
                    </ul>
                </div>

                <!-- Mission Animation -->
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <!-- <lottie-player src="/assets/JSON/Goal Achieved.json" background="transparent" speed="0.5"
                        class="lottie-anim" loop autoplay>
                    </lottie-player> -->
                      <div class="vision-img-wrapper">
                          <img src="{{ asset('/assets/images/about/ssla-mission.jpg') }}" alt="Mission image"
                              class="img-fluid vision-mission-img">
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner section ends  -->
</main>
@include('footer')