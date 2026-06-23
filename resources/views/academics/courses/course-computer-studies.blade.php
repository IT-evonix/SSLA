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
                    <h1 class="inner__red_heading">Computer Studies</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_course_listing_mainbox">
                        <div class="new_course_listing_para">
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
                        </div>
                        <div class="subject_listing_mainbox">
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Logic Designing and Research techniques in Python
                                </div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The course Logic Designing and Research Techniques in Python at
                                            Symbiosis School for Liberal Arts equips students with programming and
                                            research skills using Python, a versatile and widely adopted language.
                                            Beginning with programming fundamentals, algorithms, and flowcharts, the
                                            course progresses to structured programming, data types, control structures,
                                            functions, and modules. Students gain hands-on experience with Python
                                            environments like Spyder and Jupyter, and learn to apply statistical
                                            concepts using packages such as Numpy and Matplotlib for data analysis. By
                                            integrating programming logic with research-oriented computations, the
                                            course prepares students for data-driven problem-solving, scientific
                                            computation, and future industry requirements in IT and analytics.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/web-programming.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Object Oriented Programming</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Object Oriented Programming (OOP) is a comprehensive course
                                            designed to teach students the fundamental concepts of programming using
                                            Java. It covers essential topics such as classes, objects, inheritance,
                                            polymorphism, abstraction, interfaces, exception handling, streams, GUI
                                            programming, and database connectivity. Through lectures, hands-on lab
                                            sessions, presentations, and discussions, students learn to design and
                                            develop efficient, well-structured applications. The course emphasizes
                                            practical application of Java concepts, problem-solving skills, and software
                                            development best practices. Assessments include quizzes, assignments,
                                            practical exams, and presentations, ensuring students gain both theoretical
                                            understanding and practical proficiency in object-oriented programming.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-2.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Relational Database Management System</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The Relational Database Management System course introduces
                                            students to the concepts, architecture, and practical applications of modern
                                            database systems. It covers database fundamentals, conceptual modeling,
                                            entity-relationship modeling, relational database systems, normalization,
                                            transaction processing, concurrency control, and database security. Students
                                            gain hands-on experience with SQL, including DDL, DML, DCL, joins, and
                                            subqueries, enabling them to manipulate and query databases effectively. The
                                            course also explores advances like data warehousing, data mining, and
                                            OLAP/OLTP systems. Pedagogy combines lectures and lab sessions, with
                                            assessments through quizzes, assignments, tests, and viva, preparing
                                            students to manage and analyze real-world data efficiently.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-3.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>

                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Advanced Python and Data Analytics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The course Advanced Python and Data Analytics equips students
                                            with
                                            advanced programming and data analysis skills using Python. It covers core
                                            concepts such as data types, loops, functions, sequences, and
                                            object-oriented
                                            programming, alongside essential libraries like NumPy, Pandas, and
                                            Matplotlib.
                                            Students learn file handling, GUI development using Streamlit, and database
                                            integration with SQL. The course emphasizes practical application through
                                            coding
                                            exercises, statistical analysis, and a mini-project, reinforcing
                                            problem-solving
                                            and analytical skills. Through continuous assessments, hands-on sessions,
                                            and
                                            projects, students gain proficiency in Python programming and data
                                            analytics,
                                            preparing them for real-world data-driven challenges in computing and
                                            analytics
                                            domains.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-4.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Network Security Essentials</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The course Network Security Essentials introduces students to the
                                            fundamentals of network security, including attacks, threats, and protective
                                            mechanisms. It covers cryptography, public-key and symmetric encryption,
                                            digital
                                            signatures, and secure electronic transactions. Students learn security
                                            issues
                                            in internet protocols, network defense tools like firewalls, VPNs, and
                                            intrusion
                                            detection systems, as well as key security protocols such as IPsec, SSL/TLS,
                                            and
                                            Kerberos. The course also addresses wireless and mobile security, web
                                            security,
                                            and practical applications of authentication and email protection. Through
                                            lectures, hands-on labs, assignments, and projects, students develop the
                                            skills
                                            to identify vulnerabilities and implement effective security strategies to
                                            safeguard networks.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-5.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Interactive Web Designing using JavaScript</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The Interactive Web Designing using JavaScript course introduces
                                            students to
                                            web development using JavaScript, focusing on dynamic and interactive web
                                            pages. It
                                            covers JavaScript fundamentals, data types, operators, built-in functions,
                                            arrays,
                                            input/output statements, control structures, loops, and functions. Students
                                            learn to
                                            handle events, create interactivity, and validate forms. Emphasis is placed
                                            on modular
                                            programming and external JS file integration. Practical sessions and
                                            mini-projects
                                            enable hands-on experience in designing responsive web pages. Through
                                            continuous
                                            assessments, coding exercises, and presentations, students develop the
                                            ability to create
                                            interactive web applications, enhancing both their programming skills and
                                            understanding
                                            of web technologies.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-6.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Design and Implementation of Algorithms Software
                                    Engineering</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Design and Implementation of Algorithms introduces undergraduate
                                            students to fundamental principles of algorithm design and analysis with a
                                            strong mathematical foundation. The course focuses on developing efficient
                                            algorithms and understanding how data structures influence program
                                            performance. Students learn to analyze time and space complexity using
                                            asymptotic notations and evaluate algorithms through best, average, and
                                            worst-case scenarios. Key topics include recursion, divide-and-conquer and
                                            greedy strategies, and the use of graphs and heaps. Through lectures,
                                            programming exercises, and tutorials, the course builds students’ ability to
                                            design correct, optimized algorithms for solving computational problems
                                            effectively.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-7.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>

                                <div class="subject_listing">
                                <div class="subject_listing_heading">Software Engineering</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">The Software Engineering course equips undergraduate students
                                            with a systematic understanding of software development processes and
                                            practices. It covers software process models, project planning and
                                            management, requirements analysis, design principles, architectural styles,
                                            and quality assurance. Students learn to model real-world applications,
                                            apply design methodologies, and develop effective testing strategies and
                                            test cases. The course emphasizes managing software projects, assessing
                                            risks, and ensuring quality through standards and configuration management.
                                            Through classroom teaching, seminars, brainstorming sessions, and case
                                            studies, students gain both theoretical knowledge and practical insights
                                            necessary to design, develop, test, and maintain reliable and scalable
                                            software systems.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-8.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>

                            <div class="subject_listing">
                                <div class="subject_listing_heading">Foundations of Data Warehousing and Data Mining</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Foundation of Data Warehousing and Data Mining introduces
                                            undergraduate students to the concepts and techniques that support
                                            large-scale data storage, analysis, and knowledge discovery. The course
                                            explains the need for data warehouses, their architecture, dimensional
                                            modeling, OLAP, and performance optimization. It also covers the data mining
                                            process, key algorithms, and techniques such as classification, clustering,
                                            and association analysis. Students learn to differentiate between
                                            operational databases and analytical systems and explore real-world
                                            applications of data warehousing and data mining. Through lectures, case
                                            studies, and presentations, the course builds a strong foundation for
                                            analyzing data to support informed decision making.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-9.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                                 <div class="subject_listing">
                                <div class="subject_listing_heading">Theory of Computation</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Theory of Computation provides undergraduate students with a
                                            rigorous foundation in the mathematical principles that underlie computer
                                            science. The course introduces automata theory, regular expressions, and
                                            formal languages, progressing to context-free grammars, pushdown automata,
                                            and Turing machines. Students learn to model computation, analyze language
                                            recognition, and understand the limits of what problems can be solved by
                                            machines. Emphasis is placed on equivalence, conversions, decidability, and
                                            computational complexity. Through classroom teaching, problem solving, and
                                            application studies, the course develops analytical and abstract reasoning
                                            skills essential for advanced study in algorithms, compiler design, and
                                            theoretical computer science.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-10.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Cryptography</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Cryptography is a core undergraduate course that introduces
                                            students to the principles and practices of securing information in modern
                                            computing systems. The course covers mathematical foundations, symmetric and
                                            public key cryptography, message integrity, and digital signatures. Students
                                            gain hands-on understanding of encryption, decryption, authentication, and
                                            key management using standard algorithms such as DES, AES, RSA, and
                                            Diffie–Hellman. Emphasis is also placed on cryptanalysis techniques to
                                            evaluate the strength of cryptographic schemes. By integrating theory with
                                            practical security applications, the course equips learners with essential
                                            skills to design, analyze, and implement secure solutions in information
                                            technology and networked environments.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-11.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                               <div class="subject_listing">
                                <div class="subject_listing_heading">Information Technology for Management</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Information Technology for Management is an interdisciplinary
                                            undergraduate course designed to help future managers understand the
                                            strategic role of information technology in contemporary organizations. The
                                            course focuses on how IT enables business strategy, innovation, process
                                            integration, analytics, and competitive advantage rather than on technical
                                            details. Students explore IT-enabled business models, collaboration tools,
                                            outsourcing, and the management of IT investments. Ethical, legal, privacy,
                                            and security issues are examined from a managerial perspective, along with
                                            emerging digital markets and future trends. Through lectures, case studies,
                                            discussions, and experiential learning, the course equips students to
                                            effectively leverage IT as a strategic enabler in diverse business contexts.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-12.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="subject_listing">
                                <div class="subject_listing_heading">Artificial Intelligence</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Artificial Intelligence is an advanced undergraduate course that
                                            introduces students to the principles, techniques, and applications of
                                            intelligent systems. The course covers problem formulation, search
                                            strategies, knowledge representation, reasoning, planning, and learning
                                            mechanisms used in AI. Students gain a strong foundation in heuristic and
                                            adversarial search, logic-based knowledge representation, inference methods,
                                            and uncertainty handling using probabilistic and fuzzy approaches. The
                                            course also introduces artificial neural networks and optimization
                                            techniques. Through lectures, case studies, hands-on programming exercises,
                                            and capstone projects such as chatbots, smart applications, and prediction
                                            systems, students develop analytical and practical skills to design AI-based
                                            solutions for real-world problems.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-13.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                                    <div class="subject_listing">
                                <div class="subject_listing_heading">Machine Learning</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Machine Learning is an advanced undergraduate course that
                                            provides students with strong theoretical foundations and practical skills
                                            required to build data-driven learning systems. The course introduces key
                                            concepts such as supervised, unsupervised, and semi-supervised learning,
                                            statistical learning theory, and model evaluation. Students study core
                                            algorithms including decision trees, clustering methods, classification, and
                                            regression techniques. Emphasis is placed on problem identification, model
                                            training, validation, performance evaluation, and optimization. Through
                                            interactive lectures, collaborative problem-solving, and extensive hands-on
                                            programming using Python libraries such as scikit-learn and Keras, students
                                            gain the ability to apply and compare machine learning approaches for
                                            solving real-world problems across domains.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-14.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                                 <div class="subject_listing">
                                <div class="subject_listing_heading">Data Analytics</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Data Analytics is an advanced undergraduate course that equips
                                            students with the knowledge and skills required to analyze data for informed
                                            business decision-making. The course introduces fundamentals of data
                                            analytics, data types, data preparation, visualization, and statistical
                                            concepts. Students explore descriptive and predictive analytics, data
                                            analysis techniques, and business analytics frameworks using real-world
                                            datasets. Emphasis is placed on applying analytics across domains such as
                                            marketing, finance, healthcare, supply chain, and e-commerce. Through
                                            lectures, case studies, projects, and interactive discussions, students
                                            learn how managers leverage analytics to generate insights, build predictive
                                            models, and support strategic and operational decisions while addressing
                                            ethical considerations and emerging trends.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-15.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>

                                <div class="subject_listing">
                                <div class="subject_listing_heading">Introduction to Vulnerability Assessment
                                    Penetration Testing</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Introduction to Vulnerability Assessment and Penetration Testing
                                            is an undergraduate course designed to provide students with a practical
                                            understanding of identifying, analyzing, and mitigating security
                                            vulnerabilities in information systems. The course introduces core concepts
                                            of vulnerability management, common attack vectors, countermeasures, and
                                            incident handling processes. Students gain exposure to penetration testing
                                            methodologies, tools, and testing approaches such as black-box, white-box,
                                            and grey-box testing. Emphasis is placed on application-layer protocols,
                                            sniffing, firewalls, authentication techniques, and professional report
                                            writing. Through lectures, case studies, and evaluations, learners develop
                                            the ability to plan tests, analyze risks, and recommend effective remedial
                                            security measures.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-16.svg') }}"
                                            alt="icon" class="img-fluid"></div>
                                </div>
                            </div>
                            
                                <div class="subject_listing">
                                <div class="subject_listing_heading">Data Structures</div>
                                <div class="subject_listing_content_box">
                                    <div class="subject_listing_content">
                                        <p class="m-0">Data Structures is a foundational undergraduate course that
                                            introduces students to the organization, management, and storage of data in
                                            computer programs for efficient access and modification. The course covers
                                            linear structures such as arrays, stacks, queues, and linked lists, as well
                                            as non-linear structures including trees and graphs. Students learn to
                                            implement these structures, analyze their performance, and apply them to
                                            solve computational problems. Emphasis is placed on algorithm design,
                                            traversal techniques, and complexity analysis. Through lectures, programming
                                            exercises, and problem-solving sessions, students develop the skills to
                                            select and implement appropriate data structures for diverse applications in
                                            software development and computer science.</p>
                                    </div>
                                    <div class="subject_listing_icon"><img
                                            src="{{ asset('assets/images/academics/icons/computer-studies-17.svg') }}"
                                            alt="icon" class="img-fluid"></div>
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