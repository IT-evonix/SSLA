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
                    <h1 class="inner__red_heading">Business Studies</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_course_listing_mainbox">
                        <div class="new_course_listing_para">
                            <p>
                                Business Studies provide a comprehensive foundation in the legal, financial, human,
                                operational, and strategic dimensions of organizations. Drawing from business law,
                                management principles, finance, marketing, human resource management, and operations,
                                the curriculum equips students with analytical, decision-making, and problem-solving
                                skills essential for contemporary business environments. Students gain an understanding
                                of legal frameworks governing business, financial decision-making, market analysis,
                                production systems, and workforce management. Emphasis is placed on practical
                                application through case studies, simulations, projects, and industry exposure. The
                                programme integrates theoretical knowledge with real-world business practices, preparing
                                students for managerial roles, entrepreneurship, and further professional studies
                            </p>
                        </div>
                        <div class="subject_listing_mainbox">
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Management Essentials</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Management Essentials provides students with a comprehensive foundation in
                                            core management concepts and business practices. The course introduces the
                                            nature and purpose of business, types of business entities, and the
                                            classification of business activities within industry and commerce. It
                                            explores key management functions such as planning, organizing, staffing,
                                            directing, and controlling, while highlighting contributions of classical
                                            and contemporary management thinkers. Special emphasis is placed on
                                            leadership, motivation, communication, and ethical decision-making in a
                                            dynamic business environment. Through lectures, discussions, projects, and
                                            experiential activities, students develop practical insights into trade,
                                            commerce, and emerging managerial perspectives relevant to present and
                                            future organizational challenges.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-1.svg') }}"
                                            alt="Management Essentials icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Business Laws</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The course Business Laws provides students with a comprehensive
                                            understanding of the legal framework governing business and commercial
                                            activities in India. It introduces foundational legal concepts, sources of
                                            law, and the structure of courts, followed by an in-depth study of core
                                            commercial statutes such as the Indian Contract Act, Sale of Goods Act,
                                            Partnership Act, and Company Law. The course also covers taxation
                                            principles, negotiable instruments, consumer protection, intellectual
                                            property rights, and information technology law. Emphasizing practical
                                            application through case studies, simulations, and moot courts, the course
                                            equips students with essential legal knowledge and skills necessary for
                                            effective business decision-making and corporate compliance.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-2.svg') }}"
                                            alt="Business Laws icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Financial Management</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The course Financial Management equips students with a strong foundation in
                                            corporate finance and financial decision-making. It introduces the nature,
                                            scope, and objectives of financial management, emphasizing the roles and
                                            responsibilities of financial managers. The course covers key concepts such
                                            as time value of money, capital budgeting techniques, cost of capital,
                                            leverage, and capital structure decisions. Special focus is given to working
                                            capital management and sources of finance essential for business operations.
                                            Through discussions, numerical problem-solving, and case studies, students
                                            develop analytical and strategic skills required to apply financial theories
                                            and techniques to real-world corporate and banking decisions.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-3.svg') }}"
                                            alt="Financial Management icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Human Resource Management</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The Human Resource Management course introduces students to the principles,
                                            functions, and evolving role of HRM in organizations. It differentiates HRM
                                            from traditional personnel management and emphasizes the competencies
                                            required of HR professionals. Key areas include manpower planning,
                                            recruitment and selection, job analysis, evaluation, and design, along with
                                            training, development, performance appraisal, and compensation management.
                                            Through case studies, role plays, presentations, and project work, students
                                            gain practical insights into workforce management, performance optimization,
                                            and strategic HR practices. The course equips learners with the skills to
                                            assess organizational needs, implement HR strategies, and contribute
                                            effectively to human capital development.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-4.svg') }}"
                                            alt="Human Resource Management icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Fundamentals of Marketing</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Fundamentals of Marketing introduces students to core marketing concepts,
                                            processes, and strategies, including consumer behavior, market segmentation,
                                            product development, pricing, distribution, and promotion. The course uses
                                            case studies, field visits, assignments, and projects to provide practical
                                            exposure. Students gain insights into sales management, contemporary
                                            marketing trends, and integrated marketing communications. Recommended
                                            textbooks by Kotler, Armstrong, and others offer a strong foundation, while
                                            evaluation through projects ensures application of concepts in real-world
                                            scenarios. This course equips students with the knowledge and skills needed
                                            to understand, analyze, and implement effective marketing practices.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-5.svg') }}"
                                            alt="Fundamentals of Marketing icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Production/Operations Management</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The Production/Operations Management course provides students with a
                                            comprehensive understanding of the principles, processes, and practices that
                                            drive operational efficiency in organizations. Covering topics from product
                                            design, process selection, and facilities planning to capacity planning,
                                            inventory management, quality control, and maintenance, the course equips
                                            students with both theoretical knowledge and practical skills. Emphasis is
                                            placed on analyzing real-world production systems, planning and controlling
                                            operations, and applying work-study techniques. Through lectures, case
                                            studies, presentations, practical assignments, and organizational visits,
                                            students gain hands-on exposure to operational challenges, preparing them to
                                            effectively evaluate and improve production processes in diverse industrial
                                            and service settings.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-6.svg') }}"
                                            alt="Production Operations Management icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Information Technology for Management</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Information Technology for Management is designed to help non-technical
                                            undergraduate students understand the strategic role of IT in contemporary
                                            organizations. The course examines how information technology acts as a key
                                            enabler of business strategy, innovation, and competitive advantage. Through
                                            an integrative approach drawing from strategy, marketing, and operations,
                                            students explore IT-enabled business models, process innovation, analytics,
                                            collaboration tools, and outsourcing. The course also addresses ethical,
                                            legal, privacy, and security concerns associated with technology use. Using
                                            case studies, discussions, and presentations, students develop managerial
                                            perspectives on leveraging IT effectively in dynamic and digital business
                                            environments.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-7.svg') }}"
                                            alt="Information Technology for Management icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Data Analytics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The Data Analytics course equips students with analytical skills to support
                                            data-driven managerial decision making across industries. It introduces the
                                            fundamentals of data analytics, including data types, collection, cleaning,
                                            visualization, and statistical foundations. Students learn descriptive and
                                            predictive analytics, exploratory data analysis, and a range of analytical
                                            techniques such as regression, clustering, simulation, and machine learning
                                            models. The course emphasizes translating data insights into business value
                                            through applications in healthcare, finance, supply chain, and e-commerce.
                                            Through lectures, case studies, and projects, students develop practical
                                            competence in applying analytics tools ethically and effectively to solve
                                            real-world business problems.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-8.svg') }}"
                                            alt="Data Analytics icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Organizational Behaviour</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Organizational Behaviour is designed to help undergraduate students
                                            understand how individual, group, and organizational factors influence
                                            performance and effectiveness at the workplace. The course introduces
                                            foundational concepts of organizational behaviour, individual differences,
                                            attitudes, values, personality, and motivation. It emphasizes group
                                            dynamics, team effectiveness, and leadership in contemporary organizations.
                                            Students explore organizational culture, leadership theories, and the
                                            distinction between managers and leaders. Through lectures, discussions,
                                            caselets, and experiential exercises, the course enables students to apply
                                            behavioural concepts to real organizational contexts and develop insights
                                            into managing people, teams, and organizational change effectively.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-9.svg') }}"
                                            alt="Organizational Behaviour icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Corporate Governance and Ethics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Corporate Governance and Ethics introduces undergraduate students to the
                                            principles, frameworks, and practices that guide responsible corporate
                                            conduct. The course examines key governance models, theoretical approaches,
                                            and regulatory mechanisms, with specific reference to the Indian and global
                                            contexts. It emphasizes the role of boards, auditors, regulatory
                                            institutions, and corporate social responsibility in ensuring transparency
                                            and accountability. The course also explores business ethics, ethical
                                            dilemmas, stakeholder perspectives, and ethical practices across functional
                                            areas such as marketing, finance, and human resources. Through lectures,
                                            case studies, and projects, students develop a grounded understanding of
                                            ethical decision making and sound governance in organizations.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-10.svg') }}"
                                            alt="Corporate Governance and Ethics icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Business Ethics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            Business Ethics introduces undergraduate students to the philosophical
                                            foundations and practical relevance of ethical behaviour in business and
                                            society. The course explores key ethical theories, moral responsibilities,
                                            justice, and social cooperation, while examining moral issues in business
                                            such as consumer protection, environmental responsibility, whistleblowing,
                                            and social audits. It provides an overview of major socio-ethical
                                            traditions, including Gandhian, Jain, Islamic, and Marxist perspectives.
                                            Students also study ethical challenges across functional areas like
                                            marketing, finance, employment, and technology. Through lectures, case
                                            studies, and assignments, the course fosters ethical awareness, responsible
                                            decision making, and the ability to institutionalize ethics within
                                            organizations.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-11.svg') }}"
                                            alt="Business Ethics icon" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Accounting</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">
                                            The Accounting course provides undergraduate students with a comprehensive
                                            understanding of financial and managerial accounting concepts essential for
                                            managerial decision making. It introduces the role of accounting in the
                                            business environment, the accounting cycle, and the preparation and
                                            interpretation of financial statements. Students learn to analyze assets,
                                            liabilities, shareholders’ equity, income, and cash flows while
                                            understanding the application of accounting principles such as GAAP and
                                            IFRS. The course emphasizes linking financial statements, evaluating
                                            business performance, and assessing financial health. Through lectures, case
                                            studies, and practical assignments, students develop analytical skills to
                                            interpret accounting information for effective management and control.
                                        </p>
                                    </div>
                                    <div class="subject_listing_icon">
                                        <img src="{{ asset('assets/images/academics/icons/business-studies-12.svg') }}"
                                            alt="Accounting icon" class="img-fluid">
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