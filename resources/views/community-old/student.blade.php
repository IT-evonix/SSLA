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
                                aria-controls="contact-fist-tab" aria-selected="true">Student Council 2025-26</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab-2" data-bs-toggle="pill"
                                data-bs-target="#contact-second-tab" type="button" role="tab"
                                aria-controls="contact-second-tab" aria-selected="false">Clubs</a>
                        </li>
                    </ul>
                </div>
                <div class="inner_tab_content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="contact-fist-tab" role="tabpanel"
                            aria-labelledby="contact-tab-1" tabindex="0">
                            <div class="staff_main student-council">
                                <div class="container">
                                    <h2 class="inner_heading-red">Student Council 2025-26</h2>
                                    <div>
                                        <img src="/assets/images/community/students council.webp" alt="student_council"
                                            class="img-fluid student_council_img ">
                                    </div>
                                    <div class="council-table">
                                        <div class="table-responsive">
                                            <table class="table align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Name</th>
                                                        <th>Designation</th>
                                                        <th>Email ID</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Shreya Rajeev Nair</td>
                                                        <td>President</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.president@ssla.edu.in">sc.president@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:shreya.nair@ssla.edu.in">shreya.nair@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nihaal Krishnakumar</td>
                                                        <td>Batch Rep 2026</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.batchrep2026@ssla.edu.in">sc.batchrep2026@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:nihaal.krishnakumar@ssla.edu.in">nihaal.krishnakumar@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Parnika Karwade</td>
                                                        <td>Batch Rep 2027</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.batchrep2027@ssla.edu.in">sc.batchrep2027@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:parnika.karwade@ssla.edu.in">parnika.karwade@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Bhavya Balla</td>
                                                        <td>Batch Rep 2028</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.batchrep2028@ssla.edu.in">sc.batchrep2028@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:bhavya.balla@ssla.edu.in">bhavya.balla@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Sneha Bhalerao</td>
                                                        <td>Batch Rep 2029</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.batchrep2029@ssla.edu.in">sc.batchrep2029@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:sneha.bhalerao@ssla.edu.in">sneha.bhalerao@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Maahii Bajaj</td>
                                                        <td>Grievance Officer</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.grievance@ssla.edu.in">sc.grievance@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:maahii.bajaj@ssla.edu.in">maahii.bajaj@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Anwesha Tyagi</td>
                                                        <td>Events Coordinator</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.events@ssla.edu.in">sc.events@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:anwesha.tyagi@ssla.edu.in">anwesha.tyagi@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Advika Ponnappa</td>
                                                        <td>Sports Coordinator</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.sports@ssla.edu.in">sc.sports@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:advika.ponnappa@ssla.edu.in">advika.ponnappa@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Suhani Jain</td>
                                                        <td>Cultural Officer</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.culture@ssla.edu.in">sc.culture@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:suhani.jain@ssla.edu.in">suhani.jain@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Samaira Malhotra</td>
                                                        <td>Secretary</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.secretary@ssla.edu.in">sc.secretary@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:samaira.malhotra@ssla.edu.in">samaira.malhotra@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Haardik Juneja</td>
                                                        <td>Campus Officer</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.campus@ssla.edu.in">sc.campus@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:haardik.juneja@ssla.edu.in">haardik.juneja@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Anjali Valecha</td>
                                                        <td>Hostel Representative</td>
                                                        <td>
                                                            <a
                                                                href="mailto:sc.hostel@ssla.edu.in">sc.hostel@ssla.edu.in</a><br>
                                                            <a
                                                                href="mailto:anjali.valecha@ssla.edu.in">anjali.valecha@ssla.edu.in</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-second-tab" role="tabpanel"
                            aria-labelledby="contact-tab-2" tabindex="0">
                            <div class="rw-academic-modern py-5">
                                <div class="container">
                                    <!-- Header -->
                                    <div class="row mb-4">
                                        <div class="col-lg-12 text-center">
                                            <h2 class="rc-title" data-aos="fade-up">Clubs</h2>
                                            <!-- <p class="rc-subtitle">
                                                SSLA Research Cell, Symbiosis School for Liberal Arts
                                            </p> -->
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="rc-overview" data-aos="fade-up">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was popularised in the 1960s
                                                    with the release of Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software like Aldus
                                                    PageMaker including versions of Lorem Ipsum.</p>
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
                                                                1.Art Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapFour" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Art club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>Any event at SSLA is
                                                                                            incomplete
                                                                                            without the extravagance put
                                                                                            up by
                                                                                            the Art Club. The white of
                                                                                            the walls
                                                                                            after all seem prettier with
                                                                                            the
                                                                                            hues of the rainbow, mixed
                                                                                            and
                                                                                            matched.

                                                                                        </p>
                                                                                        <p>Art is an integral part and
                                                                                            an unsaid
                                                                                            essence of the college. The
                                                                                            term
                                                                                            Liberal Arts itself holds
                                                                                            true to
                                                                                            the identity of this stream.
                                                                                            The Art
                                                                                            Club tries to enhance the
                                                                                            ideas of
                                                                                            the students who harbour
                                                                                            this
                                                                                            passion, to colour the world
                                                                                            from
                                                                                            the bleakness. In print or
                                                                                            on paper,
                                                                                            on walls or on faces, the
                                                                                            Art Club
                                                                                            can be seen working its way,
                                                                                            tirelessly, through all
                                                                                            activities
                                                                                            at SSLA and continues to
                                                                                            spread
                                                                                            happiness.</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/artclub.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Riya Banthia</td>
                                                                                            <td>Aparna Shaji</td>
                                                                                            <td>Anukriti Bhagat</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Khushi Patel</td>
                                                                                            <td>Yayathi K P</td>
                                                                                            <td>Kirti Bansal</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Ojaswee Das</td>
                                                                                            <td>Sreeja</td>
                                                                                            <td>Rupsikha Bhuyan</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Tareena Kaur</td>
                                                                                            <td>Mahalakshmi</td>
                                                                                            <td>Karen Misquitta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Kompal Zinta</td>
                                                                                            <td>Muskan</td>
                                                                                            <td>Aryan Gupta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Aryan Gupta</td>
                                                                                            <td>Gunreet Marwah</td>
                                                                                            <td>Nishtha</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Shruti Niyogi</td>
                                                                                            <td>Ahaanaa Singh</td>
                                                                                            <td>Angela Prince</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Anandita Singh</td>
                                                                                            <td>Sheuli Banerjee</td>
                                                                                            <td>Ashwathy Kumar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Gaurie Rautela</td>
                                                                                            <td>Rachana Jadhav</td>
                                                                                            <td>Shreya Iyer</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Nandini Ginodia</td>
                                                                                            <td>Mahek Mehta</td>
                                                                                            <td>Ribhav Singh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Paarvani Srivastava</td>
                                                                                            <td>Naomi Samson</td>
                                                                                            <td>Navya Nayak</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Unnati Jain</td>
                                                                                            <td>Saima Singh</td>
                                                                                            <td>Trisha Chandra</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Adya Sharma</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                data-bs-toggle="collapse" data-bs-target="#rapFive">
                                                                2.Comedy Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapFive" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Comedy Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>The comedy club is a
                                                                                            community unique to the
                                                                                            generic college clubs. The
                                                                                            main objective is to share a
                                                                                            few laughs and have fun.
                                                                                            Whether it be through
                                                                                            stand-up comedy, improv
                                                                                            games, roasts, short comedy
                                                                                            sketches, and even a meme
                                                                                            page, basically for everyone
                                                                                            who loves to laugh, or make
                                                                                            people laugh. It’s not
                                                                                            necessary to be a performer;
                                                                                            you could just be a
                                                                                            supportive audience to cheer
                                                                                            up your monotonous routine!
                                                                                            Anyone can come up, perform
                                                                                            some good material, and
                                                                                            leave feeling happier and
                                                                                            comically satisfied</p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Kavisha Suna</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Sakshi Rawat</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/comedy_club.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Shambhavi Shastri</td>
                                                                                            <td>Sheuli Banerjee</td>
                                                                                            <td>Usri Banerjee</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Vatsal Khajuria</td>
                                                                                            <td>Diviya Makhija</td>
                                                                                            <td>Mahek Mehta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Idika Joshi</td>
                                                                                            <td>Lakshmi Pillai</td>
                                                                                            <td>Muskan Bhajanka</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Angad Malhi</td>
                                                                                            <td>Trisha Chandra</td>
                                                                                            <td>Megha Ghosh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Sara Marwah</td>
                                                                                            <td>Ahana Bhattacharji</td>
                                                                                            <td>Sakshi Rawat</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Kartik Anilkumar</td>
                                                                                            <td>Sneha Rath</td>
                                                                                            <td>Gaurie Rautela</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Kavisha Suna</td>
                                                                                            <td>Sanika Joshi</td>
                                                                                            <td>Harshita Dandamudi</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Rohail Shekhar</td>
                                                                                            <td>Gunreet Marwah</td>
                                                                                            <td>Lavanya Joshi</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                <!-- c.-->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapeleven">
                                                                3.Dance Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapeleven" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Dance Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>The Dance Club, one of the
                                                                                            most happening clubs in
                                                                                            college, is one that is
                                                                                            conducive for all dance
                                                                                            forms, be it Latin or
                                                                                            Bollywood. This club and its
                                                                                            members personify enthusiasm
                                                                                            and expressiveness. The
                                                                                            performance studio is
                                                                                            regularly filled with
                                                                                            members grooving along to
                                                                                            music and unwinding after a
                                                                                            long day at college. If
                                                                                            you’re someone who likes
                                                                                            dancing and loves having a
                                                                                            great time while doing it,
                                                                                            this is the club for you!

                                                                                        </p>
                                                                                        <p>
                                                                                            Besides performing at
                                                                                            various intra-SSLA events,
                                                                                            it represents the college at
                                                                                            various dance competitions
                                                                                            as well. Lively and
                                                                                            exuberant, this club will
                                                                                            make you want to step up and
                                                                                            have the time of your life!
                                                                                        </p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Mihika Bansal</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Aakanshaa Baruah</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/3.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Aakansha Baruah</td>
                                                                                            <td>Kirti Bansal</td>
                                                                                            <td>Rachana Jadhav</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Aarya Kulkarni</td>
                                                                                            <td>Kompal Zinta</td>
                                                                                            <td>S Sreeja</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Aditi Vaidyanathan</td>
                                                                                            <td>Malvika Singhal</td>
                                                                                            <td>Sai Khare</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Angela Roy</td>
                                                                                            <td>Mihika Bansal</td>
                                                                                            <td>Saima Singh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Aparna Shaji</td>
                                                                                            <td>Nandita Vaidyanathan
                                                                                            </td>
                                                                                            <td>Shambhavi Shastri</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Arpita Nayak</td>
                                                                                            <td>Nidhi Kondejkar</td>
                                                                                            <td>Shraddha Gajavelli</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Darshan Ray Hajong</td>
                                                                                            <td>Niketa Lawande</td>
                                                                                            <td>Sneha Rath</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Devika AK</td>
                                                                                            <td>Pragati Vasudeo</td>
                                                                                            <td>Vanshika Sonkar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Gauri Prasanth</td>
                                                                                            <td>Prarthana Dange</td>
                                                                                            <td>Vidhi Mehta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Geraldina George</td>
                                                                                            <td>Pravit Maganti</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                4.Film club
                                                            </button>
                                                        </h2>
                                                        <div id="raptweleve" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Film club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>The film club comprises of a
                                                                                            bunch of enthusiasts who
                                                                                            seek to not only appreciate
                                                                                            films in all their glory,
                                                                                            but also strive to engage
                                                                                            the rest of the student body
                                                                                            in doing the same. They
                                                                                            actively engage in
                                                                                            discussions on various
                                                                                            films, whether they are
                                                                                            Hollywood, Bollywood or
                                                                                            Regional. The club conducts
                                                                                            screenings of movies, which
                                                                                            bring together the movie
                                                                                            buffs of SSLA. There are
                                                                                            also workshops conducted for
                                                                                            those who wish to learn more
                                                                                            about the technical aspects
                                                                                            of film and how to make
                                                                                            films.</p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Radhika Mohite</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Rutvi Mehta</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/4.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Rouchelle Dabral</td>
                                                                                            <td>Chetna Anand</td>
                                                                                            <td>Roshni Mukherjee</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Palvi Angne</td>
                                                                                            <td>Aakash Ayyadevara</td>
                                                                                            <td>Payoshini Pandey</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Rutvi Mehta</td>
                                                                                            <td>Rohithaashv Gugolothu
                                                                                            </td>
                                                                                            <td>Pranati Narayan
                                                                                                Visweswaran</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Deepakshi Dutta</td>
                                                                                            <td>Tanvi Rao</td>
                                                                                            <td>Shreya Upendra</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Tanvi Shah</td>
                                                                                            <td>Atmadeep Sengupta</td>
                                                                                            <td>Khushboo Jajodia</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Malini Siruguri</td>
                                                                                            <td>Tejas Devamane</td>
                                                                                            <td>Dev Kakkar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Priyal Khade</td>
                                                                                            <td>Tanmay Guha Neogi</td>
                                                                                            <td>Aditi Natrajan</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Tanu Yadav</td>
                                                                                            <td>Simran Hora</td>
                                                                                            <td>Diveena Trehan</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Pranshu Kabra</td>
                                                                                            <td>Pratyaksha Prakash</td>
                                                                                            <td>Mahima Vidya Srikanth
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Anupoma Bandhyopadhyay
                                                                                            </td>
                                                                                            <td>Oishika Neogi</td>
                                                                                            <td>Vignesh Muthusubramaniam
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Aparna M Ganesh</td>
                                                                                            <td>Sanika Potnis</td>
                                                                                            <td>Aashtha Patel</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Daksh Bhasin</td>
                                                                                            <td>Anmol Sharma</td>
                                                                                            <td>Medha Guru</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Animesh Guatam</td>
                                                                                            <td>Punarwasu Kapgate</td>
                                                                                            <td>Suroraj Sen</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>14</td>
                                                                                            <td>Krishangi Jasani</td>
                                                                                            <td>Gaurav Gupta</td>
                                                                                            <td>Saniya Rohinda</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15</td>
                                                                                            <td>Devna Das</td>
                                                                                            <td>Nisha Bidkar</td>
                                                                                            <td>Chandanapriya D</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>16</td>
                                                                                            <td>Radhika Mohite</td>
                                                                                            <td>Vaishnavi S</td>
                                                                                            <td>Gourav Kumar Aich</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>17</td>
                                                                                            <td>Ava Gilder</td>
                                                                                            <td>Deepro Roy</td>
                                                                                            <td>Sanjana Verma</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>18</td>
                                                                                            <td>Rasika Lokhande</td>
                                                                                            <td>Irtika</td>
                                                                                            <td>Sanjana T</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19</td>
                                                                                            <td>Janhavi Nadkarni</td>
                                                                                            <td>Aditya Jaishankar</td>
                                                                                            <td>Janvi Mahnot</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>20</td>
                                                                                            <td>Raabia Khona</td>
                                                                                            <td>Neel Kenjale</td>
                                                                                            <td>Snigdha Todi</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>21</td>
                                                                                            <td>Narahari Jaahnavi</td>
                                                                                            <td>Yash Bandodker</td>
                                                                                            <td>Diveena Trehan</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                5.Poetry Club [It Could Be Verse]
                                                            </button>
                                                        </h2>
                                                        <div id="rapthirteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Poetry Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <p>Medicine, law, business,
                                                                                            engineering, these are noble
                                                                                            pursuits and necessary to
                                                                                            sustain life. But poetry,
                                                                                            beauty, romance, love, these
                                                                                            are what we stay alive for”.
                                                                                            The poetry club seems to
                                                                                            beautifully embody this
                                                                                            quote, and you’ll find this
                                                                                            club constantly reminding us
                                                                                            to remain in touch with our
                                                                                            emotions, in the midst of
                                                                                            the bustling SSLA corridors.
                                                                                            It’s here where any kind of
                                                                                            creativity thrives, and you
                                                                                            don’t have to be a poet to
                                                                                            join. This club helps
                                                                                            individuals connect to the
                                                                                            deepest corners of who they
                                                                                            are, through themes such as
                                                                                            self-reflection, longing and
                                                                                            therapy. The members of this
                                                                                            club have gone as far as
                                                                                            participating in the
                                                                                            National Youth Poetry Slam
                                                                                            along with introducing SSLA
                                                                                            to their brainchild, the
                                                                                            Verse-T festival. This
                                                                                            festival saw a string of
                                                                                            events, each brilliantly
                                                                                            crafted to cater to not only
                                                                                            our love for poems, but also
                                                                                            the emotions that we attach
                                                                                            to them. A wonderful space
                                                                                            to reconnect with who you
                                                                                            are, the poetry club is here
                                                                                            to inspire, create and grow.
                                                                                            Find us on instagram:
                                                                                            @verseitcouldbe</p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Alex Shah</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Angela Sabu</p>
                                                                                        <h5>Faculty In-Charge</h5>
                                                                                        <p>Dr. Suchetana Banerjee</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Aarushi Sharma</td>
                                                                                            <td>Idhaa Tripathi</td>
                                                                                            <td>Saaniya Zehra Husaini
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Ahaanaa Singh</td>
                                                                                            <td>Idika Joshi</td>
                                                                                            <td>Sai Khare</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Ahana Bhattacharji</td>
                                                                                            <td>Ishita Oganaja</td>
                                                                                            <td>Saint (Srishti Tanwar)
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Aishwarya Ghule</td>
                                                                                            <td>Ishwari dhok</td>
                                                                                            <td>Sakshi Ramesh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Alex Shah</td>
                                                                                            <td>Jayati Tripathi</td>
                                                                                            <td>Sanika Kalbhor</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Ali Mahmud</td>
                                                                                            <td>Karen Misquitta</td>
                                                                                            <td>Sanjana Rajesh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Ambrita Sangam Ramchiary
                                                                                            </td>
                                                                                            <td>Kartik Anilkumar</td>
                                                                                            <td>Sara Marwah</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Amrita Rath</td>
                                                                                            <td>Kashish Gupta</td>
                                                                                            <td>Selina Pandit</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Ananya Bhagwat</td>
                                                                                            <td>Kritika Anand</td>
                                                                                            <td>Shambhavi Shastri</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Ananya Ray</td>
                                                                                            <td>Lavanya Joshi</td>
                                                                                            <td>Sheuli Banerjee</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Angela Sabu</td>
                                                                                            <td>Madhuri Potharaju</td>
                                                                                            <td>Shreya Bansal</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Anika Arora</td>
                                                                                            <td>Mahalakshmi</td>
                                                                                            <td>Simran Minglani</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Aniriddhi Mistry</td>
                                                                                            <td>Mridu Nagori</td>
                                                                                            <td>Simran Paul</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>14</td>
                                                                                            <td>Aniya Kulkarni</td>
                                                                                            <td>Mukti Bari</td>
                                                                                            <td>Smrithika Rongali</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15</td>
                                                                                            <td>Anjali Roongta</td>
                                                                                            <td>Muskaan Jumani</td>
                                                                                            <td>Spandana Shaji</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>16</td>
                                                                                            <td>Anoushka Jha</td>
                                                                                            <td>Muskan Agrawal</td>
                                                                                            <td>Sruthi Venkatraman</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>17</td>
                                                                                            <td>Anuraag Chatterjee</td>
                                                                                            <td>Nandana Nair</td>
                                                                                            <td>Subarna Maitra</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>18</td>
                                                                                            <td>Anushka Sharma</td>
                                                                                            <td>Nandini Ginodia</td>
                                                                                            <td>Tanushree Gupta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19</td>
                                                                                            <td>Anvi Goyal</td>
                                                                                            <td>Ojaswee Das</td>
                                                                                            <td>Tanya Sunil</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>20</td>
                                                                                            <td>Arpita Nayak</td>
                                                                                            <td>Onam Wadhwa</td>
                                                                                            <td>Ujjwal Saraswat</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>21</td>
                                                                                            <td>Arya Suri</td>
                                                                                            <td>Prachi Singh</td>
                                                                                            <td>Vaidehi Rajput</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>22</td>
                                                                                            <td>Bhavya Jha</td>
                                                                                            <td>Rachana Jadhav</td>
                                                                                            <td>Vatsal Khajuria</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>23</td>
                                                                                            <td>Bhorum Kamboj</td>
                                                                                            <td>Raghavi Agarwal</td>
                                                                                            <td>Yashit Jain</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>24</td>
                                                                                            <td>D Lavanyaa</td>
                                                                                            <td>Rhea Rastogi</td>
                                                                                            <td>Yashwin Jain</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>25</td>
                                                                                            <td>Diviya Makhija</td>
                                                                                            <td>Riddhi Likhe</td>
                                                                                            <td>Zitin Kaul</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>26</td>
                                                                                            <td>Gunreet Marwah</td>
                                                                                            <td>Riya Banthia</td>
                                                                                            <td>Harshita Dandamudi</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>27</td>
                                                                                            <td>Roopkatha Misra</td>
                                                                                            <td>Rudraksha Kenge</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                6.Karaoke Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapfourteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Karaoke Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <p>We aim to celebrate the
                                                                                            musician in everyone!
                                                                                            Whether you’re a hip-hop or
                                                                                            country music fan, you can
                                                                                            come and sing to your
                                                                                            heart’s content. We have
                                                                                            theme nights for our
                                                                                            favorite singers and
                                                                                            holidays, so come vibe, jam
                                                                                            and stress-bust those
                                                                                            college-blues away with the
                                                                                            Karaoke Club!</p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Alex Shah</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Sanyukta Nair</p>
                                                                                        <h5>Faculty In-Charge</h5>
                                                                                        <p>Hitashree Pulapaka</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Adya Sharma</td>
                                                                                            <td>Ananya Bhagwat</td>
                                                                                            <td>Ananya Limaye</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Suhana Khan</td>
                                                                                            <td>Saanvi Singh</td>
                                                                                            <td>Yashwin Jain</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Sneha Rath</td>
                                                                                            <td>Sreeja S</td>
                                                                                            <td>Kirti Bansal</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Parvathi Vijay</td>
                                                                                            <td>Krishali Patel</td>
                                                                                            <td>Mredul Sarsar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Eshita Singh</td>
                                                                                            <td>Gunjan Kanoje</td>
                                                                                            <td>Sruthi Venkatraman</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Shreya Iyer</td>
                                                                                            <td>Mahek Mehta</td>
                                                                                            <td>Sudipti Kumar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Sakshi Ramesh</td>
                                                                                            <td>Krisha Shah</td>
                                                                                            <td>Prarthana Dange</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Rohail Shekhar</td>
                                                                                            <td>Shruti Chanda</td>
                                                                                            <td>Aarushi Sharma</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Gunreet Marwah</td>
                                                                                            <td>Chiranshie Vyas</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                7.Music Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapfifteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Music Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>Music is one of the various
                                                                                            hobbies and fascinations
                                                                                            that we at SSLA involve
                                                                                            ourselves in. The Music Club
                                                                                            at SSLA is a space for
                                                                                            students who have a passion
                                                                                            for this art form, to come
                                                                                            together, be it musicians,
                                                                                            singers, or keen listeners.
                                                                                            The Music Club has a wide
                                                                                            range of activities: games,
                                                                                            listening sessions,
                                                                                            interacting with unusual
                                                                                            genres, and even frequent
                                                                                            jam sessions. The Music Club
                                                                                            is also an integral part of
                                                                                            functions that take place in
                                                                                            SSLA as we, and other clubs,
                                                                                            perform at various
                                                                                            gatherings in college, all
                                                                                            leading up to the awaited
                                                                                            event at the end of the
                                                                                            year, the Red Carpet. Our
                                                                                            very own college indie rock
                                                                                            band, Ocean Avenue, was
                                                                                            mentioned in the Rolling
                                                                                            Stones India Magazine in
                                                                                            2016. We also take part in a
                                                                                            number of inter-college
                                                                                            festivals, with our members
                                                                                            shining in music related
                                                                                            competitions in Pune, as
                                                                                            well as other cities in
                                                                                            India.


                                                                                        </p>

                                                                                        <p><strong>HEAD :</strong>
                                                                                            Darren D’souza</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Eshwin Natrajan</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/7.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Darren D’souza</td>
                                                                                            <td>Tanmay Neogi</td>
                                                                                            <td>Soumya Barman</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Atmadeep Sengupta</td>
                                                                                            <td>Azade Aria</td>
                                                                                            <td>Shivani Murthy</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Mihir Oak</td>
                                                                                            <td>Deeksha Khaitan</td>
                                                                                            <td>Taruni Srinath</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Tanu Yadav</td>
                                                                                            <td>Raabia Khona</td>
                                                                                            <td>Hana Masood</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Pranati Visweswaran</td>
                                                                                            <td>Eshwin Natrajan</td>
                                                                                            <td>Khushboo Saluja</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Aarti Balaji</td>
                                                                                            <td>Aditya Lal</td>
                                                                                            <td>Arnev Chopra</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Drishti Ramchandani</td>
                                                                                            <td>Keerthana Aggappa</td>
                                                                                            <td>Radhika Mohite</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Malini Siriguri</td>
                                                                                            <td>Ishaan Moulik</td>
                                                                                            <td>Kaavya Ranjith</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Shantelle Nagarajan</td>
                                                                                            <td>Niranjan Nampoothri</td>
                                                                                            <td>Punarwasu Kapgate</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Roshini Mukherjee</td>
                                                                                            <td>Aniket Bhattacharya</td>
                                                                                            <td>Roshni Mukherjee</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Shubhayan Sengupta</td>
                                                                                            <td>Shreya Kumar</td>
                                                                                            <td>Deepakshi Dutta</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Rouchelle</td>
                                                                                            <td>Abhiyanjana Thatal</td>
                                                                                            <td>Charulatha Dasappa</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>>

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
                                                                8. Photography Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapSixteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Photography Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <p>Club members at SSLA's
                                                                                            photography club learn to
                                                                                            hone their creative skills,
                                                                                            analyze and critique their
                                                                                            own and fellow members'
                                                                                            works, and spread the joy of
                                                                                            photography
                                                                                            enthusiastically. We
                                                                                            organize workshops, photo
                                                                                            walks, and competitions to
                                                                                            inculcate an appreciation of
                                                                                            the art in the club members
                                                                                            and a passion for clicking
                                                                                            photos.</p>
                                                                                        <p><strong>HEAD :</strong>
                                                                                            Jai Bakshi</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Aditi M</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Thevesh Gujre</td>
                                                                                            <td>Ananya Chandramouli</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Animesh Gautam</td>
                                                                                            <td>Kaavya Ranjith</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Eashan Bhat</td>
                                                                                            <td>Anupoma Bandhyapadhyay
                                                                                            </td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Karan Madan</td>
                                                                                            <td>Prakriti Sharma</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Karan Kaul</td>
                                                                                            <td>Taruni Srinath</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Vignesh Muthusubramanium
                                                                                            </td>
                                                                                            <td>Priyansh Patel</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Abhiman Paul</td>
                                                                                            <td>Sharanya Subramanium
                                                                                            </td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Tejashree Bhandari</td>
                                                                                            <td>Tanishq Shroff</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Shreya Hiwale</td>
                                                                                            <td>Pooja Bhatripolu</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Radhika Mohite</td>
                                                                                            <td>Neeraj</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Daksh Bhasin</td>
                                                                                            <td>Tanu Yadav</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Tanvi Shah</td>
                                                                                            <td>Michelle Ajwani</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Shrikrishna Musnur</td>
                                                                                            <td>Anindita Sinh</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>14</td>
                                                                                            <td>Neha Jogi</td>
                                                                                            <td>Ishaan Moulik</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15</td>
                                                                                            <td>Shama Nair</td>
                                                                                            <td>Nishtha Ganotra</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>16</td>
                                                                                            <td>Pranshu Kabra</td>
                                                                                            <td>Chetna Anand</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>17</td>
                                                                                            <td>Narahari Jaahnavi</td>
                                                                                            <td>Orva Pathan</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>18</td>
                                                                                            <td>Ashnaa Changani</td>
                                                                                            <td>Samiksha Bhaiya</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>19</td>
                                                                                            <td>Dhwanil Kapasi</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#rapSeventeen">
                                                                9.
                                                                Theatre Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapSeventeen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Theatre Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>Natak Society, the theater
                                                                                            club of SSLA, is a space
                                                                                            where everyone is welcome.
                                                                                            Whether you are interested
                                                                                            in acting, directing,
                                                                                            writing, production, lights
                                                                                            or costume, and so much
                                                                                            more. Everyone who shares a
                                                                                            love for the stage and the
                                                                                            art of performance is a part
                                                                                            of this beautiful team that
                                                                                            Natak is. With its plays and
                                                                                            workshops, Natak not only
                                                                                            helps you hone your skills,
                                                                                            but you also find a safe
                                                                                            space amidst this team with
                                                                                            whom you work. It helps you
                                                                                            channel your energy toward
                                                                                            the only kind of drama you
                                                                                            need in your life ;). All
                                                                                            the world's a stage, and
                                                                                            here's your chance to be on
                                                                                            the one that SSLA has to
                                                                                            offer.
                                                                                        </p>

                                                                                        <p><strong>HEAD :</strong>
                                                                                            Sanika Joshi</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Khushi Tulsyan</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/9.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Gunreet Marwah</td>
                                                                                            <td>Kartik Anilkumar</td>
                                                                                            <td>Anushri Shah</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Ahana Bhattacharji</td>
                                                                                            <td>Kompal Zinta</td>
                                                                                            <td>Trisha Chandra</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Ali Mahmud</td>
                                                                                            <td>Lakshmi Pillai</td>
                                                                                            <td>Rohail</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Subarna Maitra</td>
                                                                                            <td>Prerna Chakraborthy</td>
                                                                                            <td>Evina</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Mahek Mehta</td>
                                                                                            <td>Sheuli</td>
                                                                                            <td>Sanika Joshi</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Roopkatha</td>
                                                                                            <td>Paarvani</td>
                                                                                            <td>Sneha Rath</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Gauri Rautela</td>
                                                                                            <td>Kavisha Suna</td>
                                                                                            <td>Zitin Kaul</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Khushi Tulsyan</td>
                                                                                            <td>Lavanya Joshi</td>
                                                                                            <td>Aditi Bhat</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Adya Sharma</td>
                                                                                            <td>Nishtha Sahdev</td>
                                                                                            <td>Muskan Narwani</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Sandhi</td>
                                                                                            <td>Diviya Makhija</td>
                                                                                            <td>Angela Sabu</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Muskaan Jumani</td>
                                                                                            <td>Usri Banerjee</td>
                                                                                            <td>Sakshi Ramesh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Bhavya Jha</td>
                                                                                            <td>Muskan Bhajanka</td>
                                                                                            <td>Alex Shah</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Spandana</td>
                                                                                            <td>Lisa Biswas</td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                <!-- G -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapEighteen">
                                                                10.
                                                                Fitness and Nutrition Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapEighteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Fitness and Nutrition Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <p>SSLA's Fitness & Nutrition
                                                                                            Club is the largest
                                                                                            community at SSLA with over
                                                                                            150 members. It's a space
                                                                                            that provides you with a
                                                                                            foundational understanding
                                                                                            of Nutrition and Fitness
                                                                                            while hosting fun events
                                                                                            along the way. A community
                                                                                            of like-minded individuals
                                                                                            seeking change and wanting
                                                                                            to better themselves
                                                                                            physically and mentally.
                                                                                            It's a platform for you to
                                                                                            showcase your progress,
                                                                                            share your journey, and seek
                                                                                            guidance from one another,
                                                                                            and a space to gain
                                                                                            perspective on your battles
                                                                                            with the hope of being
                                                                                            incrementally better every
                                                                                            day. The club is a
                                                                                            community-driven
                                                                                            organization that adapts and
                                                                                            evolves to cater to its
                                                                                            members' needs.
                                                                                        </p>

                                                                                        <p><strong>HEAD :</strong>
                                                                                            Hrishi Baney</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Jui Patil</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Ashwini Kakodkar</td>
                                                                                            <td>Sanjana Rajesh</td>
                                                                                            <td>S. Sreeja</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Kritika Anand</td>
                                                                                            <td>Ishika Paruthi</td>
                                                                                            <td>Paarvani Srivastava</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Prarthana Dange</td>
                                                                                            <td>Angad Malhi</td>
                                                                                            <td>Meghna Gadepalli</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Pragati Vasudeo</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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
                                                <!-- H -->
                                                <div class="rap-item" data-aos="fade-up">
                                                    <div class="rap-dot"></div>
                                                    <div class="rap-content accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed rap-acc-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#rapNineteen">
                                                                11.
                                                                Orator’s Club
                                                            </button>
                                                        </h2>
                                                        <div id="rapNineteen" class="accordion-collapse collapse"
                                                            data-bs-parent="#rapAccordion">
                                                            <div class="accordion-body">
                                                                <div class="read-more-wrapper">
                                                                    <div class="read-more-content">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <span class="badge">Club</span>
                                                                            </div>
                                                                            <div class="objective">
                                                                                <h2 class="text-center">About the
                                                                                    Orator’s Club</h2>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <p>Ever found yourself stumped
                                                                                            on stage under the spotlight
                                                                                            in front of a crowd? We've
                                                                                            all had one or two
                                                                                            experiences where our nerves
                                                                                            take over while we speak in
                                                                                            front of an audience. That
                                                                                            is where the Orator's club
                                                                                            comes in and strives to
                                                                                            create a space for
                                                                                            enthusiastic and motivated
                                                                                            speakers to work on their
                                                                                            public speaking skills for
                                                                                            academics and to build their
                                                                                            personalities. Knowing that
                                                                                            communication is the key to
                                                                                            dealing with a majority of
                                                                                            our situations in life, we
                                                                                            exercise skills such as
                                                                                            articulation, presentation,
                                                                                            and delivery. Along with
                                                                                            installing such traits, the
                                                                                            club includes interactive
                                                                                            activities such as Debates,
                                                                                            Model United Nations (MUN),
                                                                                            Red table discussions, and
                                                                                            just-a-minute sessions
                                                                                            (JAM). The club revolves
                                                                                            around discussions and ideas
                                                                                            as to what makes world
                                                                                            leaders stand out? Or what
                                                                                            is it that drives people to
                                                                                            listen to them?. At the same
                                                                                            time, considering we live in
                                                                                            a world where everyone has
                                                                                            an opinion or the need to
                                                                                            say something on a range of
                                                                                            topics, why not do it wisely
                                                                                            so that when you speak,
                                                                                            others will listen.
                                                                                        </p>

                                                                                        <p><strong>HEAD :</strong>
                                                                                            Karen Mesquitta</p>
                                                                                        <p><strong>SECRETARY : </strong>
                                                                                            Snehal Dasgupta</p>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="proceedings-image">
                                                                                            <img src="{{ asset('/assets/images/community/11.webp') }}"
                                                                                                alt="Banner image"
                                                                                                class="img-fluid">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="table-heading">
                                                                                Members
                                                                            </h3>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-bordered align-middle admission-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr. No.</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                            <th>Member Name</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Usri Banerjee</td>
                                                                                            <td>Kritika Anand</td>
                                                                                            <td>Akaansha Singh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Keertana Jaishankar</td>
                                                                                            <td>Shreya</td>
                                                                                            <td>Mahua Shah</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>3</td>
                                                                                            <td>Khushhi Mahensaria</td>
                                                                                            <td>ATHIRA</td>
                                                                                            <td>Ishita Oganaja</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>4</td>
                                                                                            <td>Eshita Singh</td>
                                                                                            <td>Gunjan Kanoje</td>
                                                                                            <td>Aashna Hattiholi</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>5</td>
                                                                                            <td>Atithi Nair</td>
                                                                                            <td>Ahaanaa</td>
                                                                                            <td>Gunreet</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>6</td>
                                                                                            <td>Keerthana Menon</td>
                                                                                            <td>Bhavya Jha</td>
                                                                                            <td>Krisha Shah</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>7</td>
                                                                                            <td>Yudhishtir Singh</td>
                                                                                            <td>Aishwarya Ghule</td>
                                                                                            <td>Riddhi Kelkar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>8</td>
                                                                                            <td>Aditi Agrawal</td>
                                                                                            <td>Ipshita Roy</td>
                                                                                            <td>Kaushal Balaji</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>9</td>
                                                                                            <td>Mahalakshmi R</td>
                                                                                            <td>Manishika Goel</td>
                                                                                            <td>Sanika Sardesai</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>10</td>
                                                                                            <td>Yakeen Jain</td>
                                                                                            <td>Tanisha Menon</td>
                                                                                            <td>Sheuli</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>11</td>
                                                                                            <td>Lakshita Tanwar</td>
                                                                                            <td>Madhumitha Lokanandan
                                                                                            </td>
                                                                                            <td>Nandini Agarwal</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>12</td>
                                                                                            <td>Mantavya</td>
                                                                                            <td>Abhinav Viswaroop</td>
                                                                                            <td>Shaunak Chodankar</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>13</td>
                                                                                            <td>Shreya Nair</td>
                                                                                            <td>Drishti Shukla</td>
                                                                                            <td>Janhavi Singh</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>14</td>
                                                                                            <td>Iliyan Sharif</td>
                                                                                            <td>Rohan Bhide</td>
                                                                                            <td>Anika Sriram</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15</td>
                                                                                            <td>Aarushi Pawar</td>
                                                                                            <td>Anohita Dutta</td>
                                                                                            <td>Rohan Singh Hajeri</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>16</td>
                                                                                            <td>Roopkatha Misra</td>
                                                                                            <td>Taniya Madan</td>
                                                                                            <td>Monisha</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>17</td>
                                                                                            <td>Suhani Sharan</td>
                                                                                            <td>Afreen Cheema</td>
                                                                                            <td>Krisha Shah</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
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