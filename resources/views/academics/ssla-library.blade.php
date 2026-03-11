@include('header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
<main class="ssla_library_main">
    <section class="ssla_library_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="inner__red_heading">SSLA Library</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-slider-container">
                        <div class="nav">
                            <div class="swiper tabsSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1">About
                                            The Library</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2">Membership
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3">Services</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4">
                                            Library-committee</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5">
                                            Important-links</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab6">Library
                                            Feedback</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab7">Purchase
                                            Suggestions</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab8">Library-staff
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab9">Events</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nav-link" data-bs-toggle="tab" data-bs-target="#tab10">FAQs</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a target="_blank" href="{{ asset('assets/pdf/Revised-Library-Manual.pdf') }}"
                                            class="nav-link">Library
                                            Mannual</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Navigation -->
                        <div class="tabs-button-prev">
                            <svg width="24" height="24" x="0" y="0" viewBox="0 0 426.667 426.667"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g
                                    transform="matrix(-1,-1.2246467991473532e-16,1.2246467991473532e-16,-1,426.6679992675781,426.6679992675781)">
                                    <path
                                        d="M213.332 0C95.512 0 0 95.512 0 213.332s95.512 213.336 213.332 213.336 213.336-95.516 213.336-213.336C426.535 95.566 331.102.132 213.332 0zm0 405.332c-106.039 0-192-85.96-192-192 0-106.039 85.961-192 192-192 106.04 0 192 85.961 192 192-.121 105.988-86.012 191.879-192 192zm0 0"
                                        fill="#007382" opacity="1" data-original="#000000" class=""></path>
                                    <path
                                        d="M188.355 130.637c-4.437-3.88-11.175-3.426-15.054 1.008-3.875 4.437-3.422 11.175 1.012 15.054l76.156 66.633-76.16 66.637c-4.438 3.879-4.887 10.617-1.012 15.05 3.879 4.438 10.617 4.891 15.055 1.012l85.332-74.668a10.67 10.67 0 0 0 0-16.063zm0 0"
                                        fill="#007382" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </div>
                        <div class="tabs-button-next">
                            <svg width="24" height="24" x="0" y="0" viewBox="0 0 426.667 426.667">
                                <g>
                                    <path
                                        d="M213.332 0C95.512 0 0 95.512 0 213.332s95.512 213.336 213.332 213.336 213.336-95.516 213.336-213.336C426.535 95.566 331.102.132 213.332 0zm0 405.332c-106.039 0-192-85.96-192-192 0-106.039 85.961-192 192-192 106.04 0 192 85.961 192 192-.121 105.988-86.012 191.879-192 192zm0 0"
                                        fill="#007382" opacity="1" data-original="#000000" class=""></path>
                                    <path
                                        d="M188.355 130.637c-4.437-3.88-11.175-3.426-15.054 1.008-3.875 4.437-3.422 11.175 1.012 15.054l76.156 66.633-76.16 66.637c-4.438 3.879-4.887 10.617-1.012 15.05 3.879 4.438 10.617 4.891 15.055 1.012l85.332-74.668a10.67 10.67 0 0 0 0-16.063zm0 0"
                                        fill="#007382" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-content ssla_library_content_box">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="ssla_library_content_mainbox">
                                <div class="ssla_library_heading">
                                    Our Vision
                                </div>
                                <p>
                                    <strong>SSLA library is a true Learning Resource Center, which will provide latest
                                        literature and other learning aids and information on all topics, as required by
                                        Students and Teachers of the Institute..</strong>
                                </p>
                                <p>
                                    The library has an extensive collection of books covering all Subject like Social
                                    Science, information technology, Mathematics, G.K, Fictions, biography, Auto
                                    biography, Music, Art, Dictionary, Encyclopedia, etc. The Periodical section is also
                                    vital source for academic research & Current information. Also some newspapers, DVD
                                    & CD’s are available in library.
                                </p>
                                <p>
                                    The SSLA Pune library has a large reading hall and study spaces equipped with
                                    computers. There is also study / discussion tables which can be used for group work
                                    sessions. The library houses a Digital library inside the library premises where
                                    students and faculty members can browse varied databases such as CMIE, Project Muse,
                                    ProQuest, and Manupatra and centrally subscribed other online resources.
                                </p>
                                <p>
                                    The library is fully automated using KOHA software. KOHA is a true enterprise-class
                                    Integrated Library System with comprehensive functionality including basic and
                                    advanced options. It supports full text searching with enhanced catalogue display.
                                </p>
                                <hr>
                                <div class="ssla_library_heading">
                                    Collections
                                </div>
                                <p>
                                    SSLA Pune Library is well equipped with a rich collection of books, journals,
                                    magazines and Audio Visual resources. In addition to the institutionally subscribed
                                    resources, the library users have also access to the resources of the Central
                                    library.
                                </p>
                                <hr>
                                <div class="ssla_library_heading">
                                    Print resources
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name of the collection</th>
                                                <th>Number of the collection</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Books</td>
                                                <td>11,392</td>
                                            </tr>
                                            <tr>
                                                <td>Journals</td>
                                                <td>31</td>
                                            </tr>
                                            <tr>
                                                <td>Magazines</td>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <td>Newspapers</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Audio Visual Resources\CD\DVDs</td>
                                                <td>432</td>
                                            </tr>
                                            <tr>
                                                <td>Bound Volume</td>
                                                <td>282</td>
                                            </tr>
                                            <tr>
                                                <td>E-Journals</td>
                                                <td>45,062</td>
                                            </tr>
                                            <tr>
                                                <td>E-Books</td>
                                                <td>2,07,498</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">
                                    Non-print resources
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name of the collection</th>
                                                <th>Number of the collection</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Databases</td>
                                                <td>17</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">
                                    Library Timing
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Days</th>
                                                <th>Library hours</th>
                                                <th>Book Issue/ Return timing</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Monday To Saturday</td>
                                                <td>8:30 am to 7:30 pm</td>
                                                <td>8:30 am to 7:30 pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">General Rules</div>
                                <div class="student_research_databox_data">
                                    <ul>
                                        <li>
                                            Students are expected to produce their current college ID cards at the time
                                            of checking-out a book.
                                        </li>
                                        <li>
                                            The books issued to students must be returned to the Library within 7 days
                                            from the date of issue.
                                        </li>
                                        <li>
                                            In case a reader loses a book he/ she should replace the book. In case the
                                            book cannot be replaced, the current price of the book and the fine must be
                                            paid.
                                        </li>
                                        <li>
                                            Reference books and Journals will not be issued, but are available for study
                                            within the Library and for photocopying.
                                        </li>
                                        <li>
                                            Tearing out pages from books and newspapers is strictly prohibited and is
                                            punishable.
                                        </li>
                                        <li>
                                            Students are requested to turn off their mobile phones or put them on silent
                                            mode in the library.
                                        </li>
                                        <li>
                                            Students are not allowed to play music in the library.
                                        </li>
                                        <li>
                                            Consumption of food and beverages is strictly prohibited in the library.
                                            Students are not allowed to carry ANY bags into the library.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <div class="ssla_library_content_mainbox">
                                <p>
                                    <strong>The SSLA library membership is available for the following persons:</strong>
                                </p>
                                <div class="student_research_databox_data">
                                    <ul>
                                        <li>Students of SSLA </li>
                                        <li>All teaching and non-teaching staff of Symbiosis Institutions</li>
                                        <li>Members of the Symbiosis Society</li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">General Library Rules</div>
                                <div class="student_research_databox_data">
                                    <ul>
                                        <li>
                                            Issue of books is available to all library members.
                                        </li>
                                        <li>
                                            Members are expected to keep their college ID card at the time of
                                            checking-out book.
                                        </li>
                                        <li>
                                            Books other than reference books will be issued to a member on loan for a
                                            period of seven days. A book, once issued, must be returned on or before the
                                            last date stamped on the Due Date slip, pasted on the first page of the
                                            book.
                                        </li>
                                        <li>
                                            Reference books and Journals will not be issued; but are available for study
                                            within the Library.
                                        </li>
                                        <li>
                                            Members should use their own ID cards to issue books. Members should not
                                            lend their ID cards to others. If they do, they will have to suffer the
                                            losses incurred in the process.
                                        </li>
                                        <li>
                                            Students can issue and return books on all working days from 8:30 a.m. to
                                            7:30 pm.
                                        </li>
                                        <li>
                                            Students are not allowed to carry their bags into the library. There is a
                                            locker system outside the library where students can store their bags.
                                            Students are encouraged to carry small locks and keys for their personal use
                                            for these lockers.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <div class="ssla_library_content_mainbox">
                                <div class="ssla_library_heading">Borrowing Facility: Rules</div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Members</th>
                                                <th colspan="3">Borrowing Facility</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td><strong>Books</strong></td>
                                                <td><strong>Periodicals</strong></td>
                                                <td><strong>Time Period</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Student</td>
                                                <td>4</td>
                                                <td>0</td>
                                                <td>14 Days</td>
                                            </tr>
                                            <tr>
                                                <td>Faculty Member</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td>For Semester</td>
                                            </tr>
                                            <tr>
                                                <td>Visiting Faculty</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td>For Semester</td>
                                            </tr>
                                            <tr>
                                                <td>Staff</td>
                                                <td>2</td>
                                                <td>0</td>
                                                <td>One Month</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">
                                    Sections
                                </div>
                                <p>The library has following sections and resources:</p>
                                <p><strong>Reading room:</strong> The library has a spacious reading room with Wi-Fi
                                    facility. The reading room can accommodate about 60 Students and is kept open
                                    8.00a.m to 7.30p.m.</p>
                                <p><strong>News room:</strong> This section helps students and the community to remain
                                    updated on daily happenings. Below is a list of newspapers, magazines and journals
                                    subscribed by the SSLA library.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Newspaper</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>Indian Express</p>
                                                </td>
                                                <td>
                                                    <p>Sakal Times</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Times Of India</p>
                                                </td>
                                                <td>
                                                    <p>Sakal</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>The Hindu</p>
                                                </td>
                                                <td>
                                                    <p>The Economics Times</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Magazines and Journals</p>
                                                </td>
                                                <td>
                                                    <p>&nbsp;Jadavpur Journal of International Relation</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Archchaelogy</p>
                                                </td>
                                                <td>
                                                    <p>Journal Of Advance Research in Humanities And Social Sciences</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Asia Pacific Media Educator</p>
                                                </td>
                                                <td>
                                                    <p>Journal of Asian security &amp; International Affairs</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Asian Journal Of Legal Education</p>
                                                </td>
                                                <td>
                                                    <p>Journal of Creative Communication</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Asian Review of Social Sciences</p>
                                                </td>
                                                <td>
                                                    <p>Journal Of Earth System Science</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Bioscope South Asian Screen Studies</p>
                                                </td>
                                                <td>
                                                    <p>Journal Of Genetics</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Bloomberg Businessweek</p>
                                                </td>
                                                <td>
                                                    <p>Journal of Interdisciplinary Economics</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Business India</p>
                                                </td>
                                                <td>
                                                    <p>Journal of Psychology &amp; Developing Societies</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Business Today</p>
                                                </td>
                                                <td>
                                                    <p>Literary Imagination</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Competition Success</p>
                                                </td>
                                                <td>
                                                    <p>London Magazine</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Criminal Law Journal</p>
                                                </td>
                                                <td>
                                                    <p>National Geography</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Digit</p>
                                                </td>
                                                <td>
                                                    <p>Open</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Down To Earth</p>
                                                </td>
                                                <td>
                                                    <p>Outlook</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Economic &amp; Political Weekly</p>
                                                </td>
                                                <td>
                                                    <p>Pramana-Journal Of Physics</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Frontline</p>
                                                </td>
                                                <td>
                                                    <p>Reader Digest</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Global Journal Of Educational Administration</p>
                                                </td>
                                                <td>
                                                    <p>Resonance-Journal Of Science Education</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Global Journal of Emerging Market Economics</p>
                                                </td>
                                                <td>
                                                    <p>Science News Magazine</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Harvard Business Review</p>
                                                </td>
                                                <td>
                                                    <p>Science,Technology Societies</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Higher Education for the Future</p>
                                                </td>
                                                <td>
                                                    <p>SEMINAR</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>India Today</p>
                                                </td>
                                                <td>
                                                    <p>Social Change</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Indian Economics and Social History Review</p>
                                                </td>
                                                <td>
                                                    <p>Society And Culture In South Asia</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Indian Historical Review</p>
                                                </td>
                                                <td>
                                                    <p>South Asia Reserch</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Indian Journal of Gender Studies</p>
                                                </td>
                                                <td>
                                                    <p>Studies in History</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Indian Literature</p>
                                                </td>
                                                <td>
                                                    <p>Studies in Indian Politics</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Indian Quarterly</p>
                                                </td>
                                                <td>
                                                    <p>The Carvan</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>International Journal Of Marketing And Management Research</p>
                                                </td>
                                                <td>
                                                    <p>The Economist</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>International Research Journal Of Human Resources and Social
                                                        Sciences</p>
                                                </td>
                                                <td>
                                                    <p>The Week&nbsp;</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>IUP Journal Of International Relations</p>
                                                </td>
                                                <td>
                                                    <p>Time</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p><strong>Discussion Tables:</strong> The discussion tables are a place where users can
                                    discuss and work together.</p>
                                <p><strong>Reference section:</strong> The reference section houses the library's
                                    reference books. These books provide quick and accessible information on any
                                    particular topic. Reference books include materials such as dictionaries,
                                    encyclopedias, bibliographies, and style guides, among others.</p>
                                <hr>
                                <div class="ssla_library_heading">E-Resources</div>
                                <p><strong>Library Portal:</strong> <a href="https://elibrary.siu.edu.in/user/login"
                                        target="_blank">https://elibrary.siu.edu.in/user/login</a></p>
                                <p>
                                    Library members can get the access of all e-resources on library portal. To access
                                    these e-resources you should have the login credentials for it. Every year newly
                                    admitted student’s registration is done according to their course duration by the
                                    librarian.
                                </p>
                                <p>
                                    Once the registration is completed members get the access of all e-resources
                                    purchased by the SIU Central library. Also, all institutionally subscribed
                                    databases, e-books and e-journals can be accessed through this library portal.
                                </p>
                                <p><strong>Following e-resources can be accessed through the Library Portal:</strong>
                                </p>
                                <div class="student_research_databox_data">
                                    <ul>
                                        <li>ProQuest</li>
                                        <li>Project Muse</li>
                                        <li>Emerald case study collection 2018</li>
                                        <li>Manupatra</li>
                                        <li>CMIE Status of India</li>
                                        <li>Sage Research Methods</li>
                                        <li>EBSCO</li>
                                        <li>Pearson e-Books</li>
                                        <li>Web of Science</li>
                                        <li>Frost &amp; Sullivan</li>
                                        <li>JSTOR</li>
                                        <li>SCOPUS</li>
                                        <li>E- Research</li>
                                        <li>Turnitin</li>
                                        <li>Elsevier - Science direct - Management</li>
                                        <li>McGraw Hill Education India e-Books</li>
                                        <li>Emerald Management e-journal</li>
                                        <li>QuestionPro</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4">
                            <div class="ssla_library_content_mainbox">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Library Committee Constitution</th>
                                                <th>Names</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Chairperson<br>(Director of the Institute/ Head of the Department)
                                                </td>
                                                <td>Dr. Shweta Deshpande, Director-SSLA</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Invitee-Advisor from SIU Central Library</td>
                                                <td>Dr. Sangeeta Paliwal, Librarian-SIU</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Faculty- Library In-Charge (Member)</td>
                                                <td>Dr. Manoranjan Ghosh. - Assistant Professor -SSLA</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Faculty Members nominated by the Director/Head of the Constituent
                                                    (Members)</td>
                                                <td>1) Ms. Atiya Fathima, Assistant Professor-&nbsp;SSLA<br>
                                                    2) Dr. Damini kulkarni Assistant Professor-&nbsp;SSLA<br>
                                                    3) Ms. Gayatri Mendanha, Assistant Professor-&nbsp;SSLA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Student Representatives nominated by the Director/Head of the
                                                    Constituent (Members)</td>
                                                <td>1) Ms. Anvi Goyal - Batch 2021-25-SSLA<br>
                                                    2) Ms. Janvi Singh - Batch 2022-26-SSLA
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Administrative officer</td>
                                                <td>Ms. Anju Badhe-SSLA</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Library In-charge of the Constituent (Member Secretary)</td>
                                                <td>Ms. Smita Kadam, Librarian-SSLA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab5">
                            <div class="ssla_library_content_mainbox">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name of the Resources</th>
                                                <th>Summary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="3">
                                                    Journals
                                                </td>
                                                <td>
                                                    Sage 20 subscribed Journal
                                                </td>
                                                <td>
                                                    IP base access in collage primases only. Link-www.sagepub.com&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    The Economist
                                                </td>
                                                <td>
                                                    single user base access&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Economic and political Weekly
                                                </td>
                                                <td>
                                                    Five user base access&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Book
                                                </td>
                                                <td>
                                                    College physics; A strategic approach
                                                </td>
                                                <td>
                                                    User base access
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="ssla_library_heading">National Digital Library</div>
                                <p>
                                    Ministry of Human Resource Development (MHRD) under its National Mission on
                                    Education through Information and Communication Technology (NMEICT) has initiated
                                    the National Digital Library of India (NDL India) pilot project to develop a
                                    framework of virtual repository of learning resources with a single-window search
                                    facility. NDL India is designed to hold content of any language and provides
                                    interface support for leading Indian languages. It is being arranged to provide
                                    support for all academic levels including researchers and life-long learners, all
                                    disciplines, all popular form of access devices and differently-abled learners. It
                                    is being developed to help students to prepare for entrance and competitive
                                    examination, to enable people to learn and prepare from best practices from all over
                                    the world and to facilitate researchers to perform inter-linked exploration from
                                    multiple sources.
                                </p>
                                <p>
                                    <a href="https://ndl.iitkgp.ac.in/" target="_blank">https://ndl.iitkgp.ac.in/</a>
                                </p>
                                <hr>
                                <div class="ssla_library_heading">
                                    Swayam
                                </div>
                                <p>
                                    SWAYAM is a programme initiated by Government of India and designed to achieve the
                                    three cardinal principles of Education Policy viz., access, equity and quality. The
                                    objective of this effort is to take the best teaching learning resources to all,
                                    including the most disadvantaged. SWAYAM seeks to bridge the digital divide for
                                    students who have hitherto remained untouched by the digital revolution and have not
                                    been able to join the mainstream of the knowledge economy.
                                </p>
                                <p>
                                    <a href="https://swayam.gov.in/Home" target="_blank">https://swayam.gov.in/Home</a>
                                </p>
                                <hr>
                                <div class="ssla_library_heading">Shodhganga</div>
                                <p>
                                    The Shodhganga@INFLIBNET is set-up using an open source digital repository software
                                    called DSpace developed by MIT (Massachusetts Institute of Technology) in
                                    partnership between Hewlett- Packard (HP). The DSpace uses internationally
                                    recognized protocols and interoperability standards. Shodhganga provides a platform
                                    for research scholars to deposit their Ph.D. theses and make it available to the
                                    entire scholarly community in open access. The repository has the ability to
                                    capture, index, store, disseminate and preserve ETDs (Electronic Theses and
                                    Dissertations) submitted by the researchers.
                                </p>
                                <p>
                                    <a href="http://shodhganga.inflibnet.ac.in/"
                                        target="_blank">http://shodhganga.inflibnet.ac.in/</a>
                                </p>
                                <hr>
                                <div class="ssla_library_heading">
                                    DELNET
                                </div>
                                <p>
                                    DELNET - Developing Library Network, New Delhi is a major resource-sharing library
                                    Network in India connecting more than 8800 institutions in 28 States and 6 Union
                                    Territories in India and a few other countries comprising Universities, Colleges,
                                    R&D organizations, medical hospitals, etc.
                                </p>
                                <p class="m-0">
                                    <a href="https://delnet.in/index.html"
                                        target="_blank">https://delnet.in/index.html</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab6">
                            <div class="ssla_library_content_mainbox">
                                <div class="ssla_library_heading">Feedback Form</div>
                                <p>
                                    Feedback Form - <a
                                        href="https://docs.google.com/forms/u/0/d/1Hhttri0idQtSi9-TCWmkOdSqpZgGTuDAF6YEL4K5Ds4/viewform?edit_requested=true"
                                        target="_blank">Click Here</a>
                                </p>
                                <p class="m-0">
                                    <a href="mailto:librarian@ssla.edu.in">librarian@ssla.edu.in</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab7">
                            <div class="ssla_library_content_mainbox">
                                <p class="m-0">
                                    To suggest or recommend a reading material (book/ Journal/ Magazine/ CD etc.) to
                                    purchase in the Library, you may submit your purchase request through ‘Koha Web
                                    OPAC’ (hyperlink with <a href="http://symbiosis-koha.informindia.co.in/"
                                        target="_blank">http://symbiosis-koha.informindia.co.in/</a>) or you can send
                                    your purchase suggestions on <a
                                        href="mailto:librarian@ssla.edu.in">librarian@ssla.edu.in</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab8">
                            <div class="ssla_library_content_mainbox">
                                <div class="ssla_library_staff_mainbox">
                                    <div class="ssla_library_staff_listing">
                                        <div class="ssla_library_staff_img">
                                            <img src="{{ asset('assets/images/academics/library-smita.jpg') }}"
                                                alt="Smita" class="img-fluid">
                                        </div>
                                        <div class="ssla_library_staff_name">Mrs. Smita Kadam</div>
                                        <div class="ssla_library_staff_designation">Library In-Charge</div>
                                        <div class="ssla_library_staff_education">B.A. M.A. M.Lib. I.Sc. M.Phil.</div>
                                        <div class="ssla_library_staff_email">
                                            <a href="mailto:Librarian@ssla.edu.in">Librarian@ssla.edu.in</a>
                                        </div>
                                    </div>
                                    <div class="ssla_library_staff_listing">
                                        <div class="ssla_library_staff_img">
                                            <img src="{{ asset('assets/images/academics/library-mahesh.jpg') }}"
                                                alt="Mahesh" class="img-fluid">
                                        </div>
                                        <div class="ssla_library_staff_name">Mr. Mahesh Patil</div>
                                        <div class="ssla_library_staff_designation">Library Assistant</div>
                                        <div class="ssla_library_staff_education">B.A.M.Lib. I.Sc.</div>
                                        <div class="ssla_library_staff_email">
                                            <a href="mailto:Mahesh.patil@ssla.edu.in">Mahesh.patil@ssla.edu.in</a>
                                        </div>
                                    </div>
                                    <div class="ssla_library_staff_listing">
                                        <div class="ssla_library_staff_img">
                                            <img src="{{ asset('assets/images/academics/library-sanjay.jpg') }}"
                                                alt="Sanjay" class="img-fluid">
                                        </div>
                                        <div class="ssla_library_staff_name">Mr.Sanjay Londhe</div>
                                        <div class="ssla_library_staff_designation">Library Attendant</div>
                                    </div>
                                </div>
                                <div class="ssla_library_staff_adderessbox">
                                    <div class="ssla_library_heading">
                                        Contact
                                    </div>
                                    <p class="m-0">
                                        Symbiosis School for Liberal Arts
                                        S.No. 231/3A,Symbiosis Road,
                                        Viman Nagar, PUNE: 411 014
                                        Maharashtra, India
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab9">
                            <div class="ssla_library_content_mainbox">
                                <div class="ssla_library_event_mainbox">
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-01.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-02.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-03.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-04.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-05.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-06.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-07.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                    <div class="ssla_library_event_listing">
                                        <img src="{{ asset('assets/images/academics/ssla-library-event/ssla-library-event-08.webp') }}"
                                            alt="SSLA Library Events" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab10">
                            <div class="ssla_library_content_mainbox">
                                <p><strong>1. Who can access the library Services?</strong></p>
                                <div class="student_research_databox_data">
                                    <ul>
                                        <li>Students of SSLA</li>
                                        <li>All teaching and non-teaching staff of Symbiosis Institutions</li>
                                        <li>Members of the Symbiosis Society</li>
                                    </ul>
                                </div>
                                <hr>
                                <p><strong>2. Can I bring the personal book in the library?</strong></p>
                                <p>You can carry own books to the library without any bag.</p>
                                <hr>
                                <p><strong>3. How many books a member get issued?</strong></p>
                                <p>Following are the details of books to each category of member</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Category of Member</th>
                                                <th>No of Books</th>
                                                <th>Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Director
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    20 Days
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Dy. Director&nbsp;
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    20 Days
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Faculty
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    20 Days
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Staff
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    15 Days
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Students
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    7 Days
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <p><strong>4. What are the issue return timings in the library?</strong></p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Days</th>
                                                <th>Library</th>
                                                <th>Reading Hall</th>
                                                <th>Issue-Return</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Monday to Saturday</td>
                                                <td>8.30 am to 7.30 pm</td>
                                                <td>8.30 am to 7.30 pm</td>
                                                <td>9.00 am to 7.00 pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <p><strong>5. What are the overdue charges against late return of the book?</strong></p>
                                <p>Over dues, as laid down hereunder, shall be charged from the students if they fail to
                                    return the book(s) on or before the deadline as indicated on the Due-Date-Slip in
                                    the book: </p>
                                <p>
                                    Fine will be charged including all Sundays and Holidays.
                                </p>
                                <p>
                                    Rs.5.00 per book per day shall be charged
                                </p>
                                <hr>
                                <p><strong>6. I have lost the library Book, What I require to do?</strong></p>
                                <p>
                                    In case of loss of a book(s), the member will either have to replace the same or pay
                                    the current value of the book.
                                </p>
                                <hr>
                                <p><strong>7. Where can I make a suggestion to the library?</strong></p>
                                <p>
                                    “Suggestion Box” placed at the entrance of the library where you can drop-in your
                                    valuable suggestion(s). You can also email the suggestions at <a
                                        href="mailto:librarian@ssla.edu.in">librarian@ssla.edu.in</a>
                                </p>
                                <hr>
                                <p><strong>8. How can I recommend a book for purchase in the Library?</strong></p>
                                <p>
                                    Students can give their recommendations through the <a
                                        href="http://symbiosis-koha.informindia.co.in/" target="_blank">Web OPAC</a>.
                                    Login with your PRN fill the form and submit it. Or email at <a
                                        href="mailto:librarian@ssla.edu.in">librarian@ssla.edu.in</a>
                                </p>
                                <hr>
                                <p><strong>9. How can I access the E-Recourses?</strong></p>
                                <p class="m-0">
                                    As it is mentioned on the web site under the E-Resources. You can access these
                                    databases through the login credentials of SIU Central library Gateway Portal which
                                    is been issued to all the registered students of SSLA. Those who don’t know the
                                    credentials can contact to the librarian. Only Symbiosis students and faculty can
                                    access these databases through their own login credentials.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var tabsSwiper = new Swiper(".tabsSwiper", {
    slidesPerView: "auto",
    spaceBetween: 10,
    freeMode: true,
    watchOverflow: true,
    resistanceRatio: 0,
    navigation: {
        nextEl: ".tabs-button-next",
        prevEl: ".tabs-button-prev",
    },
});
</script>
@include('footer')