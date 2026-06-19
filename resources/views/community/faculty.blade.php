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
<main class="staff_main">
    <!-- Inner section start -->
    <section class="inner_section">
        <div class="container">
            <h1 class="inner__red_heading">Faculty</h1>
            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <!-- shweta Deshpande -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/sweta.webp') }}" alt="shweta" class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/about/Shweta-Sinha.webp') }}" alt="shweta" class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Shweta Deshpande</div>
                            <div class="faculty_position">(Associate Professor)</div>
                            <a class="faculty_mail" href="mailto:shwetasdeshpande@yahoo.com">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                director@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/shweta-deshpande')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Afshan Majid -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/afshan.png') }}" alt="Dr. Afshan Majid"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-3.webp') }}" alt="Dr. Afshan Majid"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Afshan Majid</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:afshan.majid@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                afshan.majid@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/afshan-majid')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Barry H. Rodrigue -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/about/about-banner-image.webp') }}/assets/images/faculty/Dr. Barry H. Rodrigueb.webp" alt="Dr. Barry H. Rodrigue"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/about/about-banner-image.webp') }}/assets/images/faculty/Dr. Barry H. Rodrigue.jpg" alt="Dr. Barry H. Rodrigue"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Barry H. Rodrigue</div>
                            <div class="faculty_position">(Professor and Scholar-in-Residence)</div>

                            <a class="faculty_mail" href="mailto:barry.rodrigue@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                barry.rodrigue@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="/barry-rodrigue">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Ms. Gayatri Mendanha -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Gayatri-Mendahna_photo-modified_black-white.webp') }}"
                                alt="Ms. Gayatri Mendanha" class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Gayatri-Mendahna_photo.webp') }}" alt="Ms. Gayatri Mendanha"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Ms. Gayatri Mendanha</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto: gayatri@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                gayatri@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/gayatri-mendanha')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Mr. Nikhil Thorat -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Nikhil-Thorat-Photo-for-Website-modified.webp') }}" alt="Mr. Nikhil Thorat"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Nikhil-Thorat-Photo-for-Website.webp') }}" alt="Mr. Nikhil Thorat"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Mr. Nikhil Thorat</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:nikhil.thorat@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                nikhil.thorat@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/nikhil-thorat')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Manjari Jonnalagadda -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Dr-Manjari Jonnalagadda-modified.webp') }}" alt="Dr. Manjari Jonnalagadda"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Dr-Manjari Jonnalagadda.webp') }}" alt="Dr. Manjari Jonnalagadda"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Manjari Jonnalagadda</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:manjari.jonnalagadda@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                manjari.jonnalagadda@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/manjari-jonnalagadda')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Ms. Ananya Dutta -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/anaya.png') }}" alt="Ms. Ananya Dutta"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-1.webp') }}" alt="Ms. Ananya Dutta"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Ms. Ananya Dutta</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:Ananya.dutta@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                Ananya.dutta@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/ananya-dutta')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Ms. Sakshi Juneja -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/sakshi_juneja.png') }}" alt="Ms. Sakshi Juneja"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-18.webp') }}" alt="Ms. Sakshi Juneja"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Ms. Sakshi Juneja</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <!-- <a class="faculty_mail" href="mailto:anurupa.ghatge@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                anurupa.ghatge@ssla.edu.in
                            </a> -->

                            <div class="know_more_btn">
                                <a href="{{url('/sakshi-juneja')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sumithra Surendralal -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/sumitra.png') }}" alt="Sumithra Surendralal"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-21.webp') }}" alt="Sumithra Surendralal"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Sumithra Surendralal</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:sumithra.surendralal@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                sumithra.surendralal@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/sumithra-surendralal')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Richa Minocha -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Richa_photo-modified.webp') }}" alt="Dr. Richa Minocha"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Richa_photo.webp') }}" alt="Dr. Richa Minocha"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Richa Minocha</div>
                            <div class="faculty_position">(Associate Professor)</div>
                            <a class="faculty_mail" href="mailto:richa.minocha@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                richa.minocha@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/richa-minocha')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Suchetana Banerjee -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Suchetana Banerjee_photo-modified.webp') }}" alt="Dr. Suchetana Banerjee"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Suchetana Banerjee_photo.webp') }}" alt="Dr. Suchetana Banerjee"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Suchetana Banerjee</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:suchetana.banerjee@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                suchetana.banerjee@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/suchetana-banerjee')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Sulakshna Sen -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/sulakshna.png') }}" alt="Dr. Sulakshna Sen"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Dr. Sulakshana Sen.png') }}" alt="Dr. Sulakshna Sen"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Sulakshna Sen</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto: sulakshana@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                sulakshana@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/sulakshna-sen')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Vasudev Menon -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Vasudev-Menon_Photo-modified.webp') }}" alt="Dr. Vasudev Menon"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Vasudev-Menon_Photo.webp') }}" alt="Dr. Vasudev Menon"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Vasudev Menon</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:vasudev.menon@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                vasudev.menon@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/vasudev-menon')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Kishori Kasat -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/faculty-11-modified.webp') }}" alt="Dr. Kishori Kasat"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-11.webp') }}" alt="Dr. Kishori Kasat"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Kishori Kasat</div>
                            <div class="faculty_position">(Associate Professor)</div>
                            <a class="faculty_mail" href="mailto:kishori.kasat@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                kishori.kasat@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/kishori-kasat')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Prof. Uday Sinha -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Uday_Sinha_photo-modified.webp') }}" alt="Prof. Uday Sinha"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Uday_Sinha_photo.webp') }}" alt="Prof. Uday Sinha"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Prof. Uday Sinha</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:uday.sinha@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                uday.sinha@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/uday-sinha')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Manoranjan Ghosh -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/manoranjanbw.png') }}" alt="Dr. Manoranjan Ghosh"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/manoranjan.png') }}" alt="Dr. Manoranjan Ghosh"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Manoranjan Ghosh</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:manoranjan.ghosh@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                manoranjan.ghosh@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/facultydetails')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Damini Kulkarni -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/damini.png') }}" alt=" Dr. Damini Kulkarni"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/faculty-6.webp') }}" alt=" Dr. Damini Kulkarni"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name"> Dr. Damini Kulkarni</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:damini.kulkarni@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                damini.kulkarni@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/damini-kulkarni')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Gitanjali Roy -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Dr. Gitanjali Royb.webp') }}" alt="Dr. Gitanjali Roy"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Dr. Gitanjali Roy.webp') }}" alt="Dr. Gitanjali Roy"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Gitanjali Roy</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:gitanjali.roy@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                gitanjali.roy@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/gitanjali-roy')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Esha Prasad -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Esha_Prasad_photo-modified.webp') }}" alt="Dr. Esha Prasad"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Esha_Prasad_photo.webp') }}" alt="Dr. Esha Prasad"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Esha Prasad</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:esha.prasad@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                esha.prasad@ssla.edu.in
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/esha-prasad')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Debapriya Ganguly -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Debapriya_photo-modified.webp') }}" alt="Dr.Debapriya Ganguly"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Debapriya_photo.webp') }}" alt="Dr. Debapriya Ganguly"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Debapriya Ganguly</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:Demo@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                debapriyaganguly@gmail.com
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/debapriya-ganguly')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -Dr Anurupa Ghatge -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/dummy-avatar.jpg') }}" alt="Dr.Debapriya Ganguly"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/dummy-avatar.jpg') }}" alt="Dr. Debapriya Ganguly"
                                class="img-fluid hover-img">
                        </div>

                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr Anurupa Ghatge</div>
                            <div class="faculty_position">(Assistant Professor)</div>

                            <a class="faculty_mail" href="mailto:Demo@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                anurupaghatge583@gmail.com
                            </a>

                            <div class="know_more_btn">
                                <a href="{{url('/anurupa-ghatge')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ms. Atiya Fatima -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/atiya_fatima.png') }}" alt="Ms. Atiya Fatima "
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Atiya Fathima.png') }}" alt="Ms. Atiya Fatima "
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Ms. Atiya Fatima </div>
                            <div class="faculty_position">(Adjunct Faculty)</div>
                            <a class="faculty_mail" href="mailto:atiya.fathima@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                atiya.fathima@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/atiya-fatima')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Renu Vinod -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Renu-Vinod_photo-modified.webp') }}" alt="Dr. Renu Vinod"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Renu-Vinod_photo.webp') }}" alt="Dr. Renu Vinod"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Renu Vinod</div>
                            <div class="faculty_position">(Adjunct Faculty)</div>
                            <a class="faculty_mail" href="mailto:renu.vinod@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                renu.vinod@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/renu-vinod')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Ms. Karishma Modi -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Karishma-Modib.png') }}" alt="Ms. Karishma Modi"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Karishma-Modi.webp') }}" alt="Ms. Karishma Modi"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Ms. Karishma Modi</div>
                            <div class="faculty_position">(Adjunct Faculty)</div>
                            <a class="faculty_mail" href="mailto:karishma.modi@ssla.edu.in">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                karishma.modi@ssla.edu.in
                            </a>
                            <div class="know_more_btn"><a href="{{url('/karishma-modi')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Aditi_Athreya_Photo.webp') }}" alt="Ms. Karishma Modi"
                                class="img-fluid hover-img">
                            <img src="{{ asset('assets/images/faculty/Aditi-Athreya_Photo-modified.webp') }}" alt="Ms. Karishma Modi"
                                class="img-fluid normal-img">

                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Aditi Athreya</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:aditiathreya@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                aditiathreya@gmail.com
                            </a>
                            <div class="know_more_btn"><a href="{{url('/aditi-athreya')}}">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Silvia Fernandes -->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Silvia-Fernandes-black.webp') }}" alt="Silvia Fernandes"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Silvia-Fernandes-color.webp') }}" alt="Silvia Fernandes"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Silvia Fernandes</div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:silvia.fernandes09@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                                silvia.fernandes09@gmail.com
                            </a>
                            <div class="know_more_btn"><a href="{{url('/silvia-fernandes')}}">Read More</a></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="faculty_box_inner">
                        <div class="faculty_profile">
                            <img src="{{ asset('assets/images/faculty/Abhik_photo-modified.webp') }}" alt="Silvia Fernandes"
                                class="img-fluid normal-img">
                            <img src="{{ asset('assets/images/faculty/Abhik_photo.webp') }}" alt="Silvia Fernandes"
                                class="img-fluid hover-img">
                        </div>
                        <div class="faculty_content_box">
                            <div class="faculty_name">Dr. Abhik Bhattacharya  </div>
                            <div class="faculty_position">(Assistant Professor)</div>
                            <a class="faculty_mail" href="mailto:Abhikbhattacharya2002@gmail.com  ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                              Abhikbhattacharya2002@gmail.com  
                            </a>
                            <div class="know_more_btn"><a href="{{url('/abhik-bhattacharya')}}">Read More</a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Inner section ends  -->
</main>
@include('footer')