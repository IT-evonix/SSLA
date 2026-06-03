<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    $data_arr = array();
    $data_arr['title'] = "Liberal Arts and Science College Pune | BA and BSc Programs";
    $data_arr['keywords'] = "bachelor in liberal arts and science, liberal arts colleges in india, liberal arts colleges in pune";
    $data_arr['description'] = "SSLA Pune offers Bachelor in Liberal Arts and Science with BA and BSc degrees, interdisciplinary subjects, faculty mentoring, and student-focused learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/";
    return view('index', ['data_arr' => $data_arr]);
});

///////// About Routes Start /////////
Route::get('aboutus', function () {
    $data_arr = array();
    $data_arr['title'] = "About SSLA Pune | Liberal Arts and Science College India";
    $data_arr['keywords'] = "liberal arts and science colleges in india, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "SSLA Pune is a Liberal Arts and Science college in India offering BA and BSc degrees, interdisciplinary subjects, academic mentoring, and student-focused education.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/aboutus";
    return view('/about/aboutus', ['data_arr' => $data_arr]);
});

Route::get('vission-and-mission', function () {
    $data_arr = array();
    $data_arr['title'] = "Vision and Mission | Liberal Arts and Science College Pune";
    $data_arr['keywords'] = "bachelor in liberal arts and science, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "SSLA Pune’s vision and mission guide Liberal Arts and Science education through BA and BSc programs rooted in ethics, academic depth, and social responsibility.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/vission-and-mission";
    return view('/about/vission-and-mission', ['data_arr' => $data_arr]);
});

Route::get('directorsnote', function () {
    $data_arr = array();
    $data_arr['title'] = "Director’s Note | Liberal Arts and Science College Pune";
    $data_arr['keywords'] = "bachelor in liberal arts and science, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "The Director shares SSLA Pune’s academic philosophy behind the Bachelor in Liberal Arts and Science, student growth, and values-led BA and BSc education.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/directorsnote";
    return view('/about/directorsnote', ['data_arr' => $data_arr]);
});

Route::get('advisorsnote', function () {
    $data_arr = array();
    $data_arr['title'] = "Advisor’s Note | Liberal Arts and Science College India";
    $data_arr['keywords'] = "liberal arts and science colleges in india, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "An academic perspective on Liberal Arts and Science education at SSLA Pune, highlighting BA and BSc programs, curriculum design, and long-term learning goals.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/advisorsnote";
    return view('/about/advisorsnote', ['data_arr' => $data_arr]);
});

Route::get('newsnevents', function () {
    $data_arr = array();
    $data_arr['title'] = "";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "https://www.ssla.edu.in/newsnevents";
    return view('/about/newsnevents', ['data_arr' => $data_arr]);
});
///////// About Routes Ends //////////

///////// Admissions Routes Start //////////

Route::get('education-loans3', function () {
    $data_arr = array();
    $data_arr['title'] = "Education Loans | Liberal Arts and Science College Pune";
    $data_arr['keywords'] = "BA in Liberal Arts, bsc liberal arts, bachelor degree in liberal arts and sciences";
    $data_arr['description'] = "SSLA Pune provides education loan guidance for BA and BSc Liberal Arts and Science degrees, helping students plan finances and access institutional support.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/education-loans3";
    return view('/admissions/education-loans3', ['data_arr' => $data_arr]);
});

Route::get('career-options3', function () {
    $data_arr = array();
    $data_arr['title'] = "Career Options | BA & BSc Liberal Arts Programs Pune";
    $data_arr['keywords'] = "BA in Liberal Arts, bsc liberal arts, bachelor in liberal arts and science";
    $data_arr['description'] = "SSLA Pune guides students of BA and BSc Liberal Arts and Science programs toward careers in arts, humanities, social sciences, research, and interdisciplinary fields.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/career-options3";
    return view('/admissions/career-options3', ['data_arr' => $data_arr]);
});

Route::get('eligibility3', function () {
    $data_arr = array();
    $data_arr['title'] = "Eligibility | BA and BSc Liberal Arts Programs Pune";
    $data_arr['keywords'] = "bachelor in liberal arts and science, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "Check eligibility criteria for SSLA Pune’s Bachelor in Liberal Arts and Science, including BA and BSc pathways, academic requirements, and subject background.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/eligibility3";
    return view('/admissions/eligibility3', ['data_arr' => $data_arr]);
});

Route::get('rap-admission', function () {
    $data_arr = array();
    $data_arr['title'] = "RAP Admission | Liberal Arts and Science Programs Pune";
    $data_arr['keywords'] = "BA in Liberal Arts, bsc liberal arts, bachelor in liberal arts and science";
    $data_arr['description'] = "SSLA Pune’s RAP admission pathway supports entry into BA and BSc Liberal Arts and Science programs through structured academic preparation and guidance.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/rap-admission";
    return view('/admissions/rap-admission', ['data_arr' => $data_arr]);
});

Route::get('deeksharambh-2025', function () {
    $data_arr = array();
    $data_arr['title'] = "Deeksharambh 2025 | Liberal Arts & Science College Pune";
    $data_arr['keywords'] = "BA in Liberal Arts, bsc liberal arts, liberal arts courses";
    $data_arr['description'] = "Deeksharambh 2025 at SSLA Pune welcomes new BA and BSc Liberal Arts and Science students, introducing courses, campus culture, faculty, and academic programs.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/deeksharambh-2025";
    return view('/admissions/deeksharambh-2025', ['data_arr' => $data_arr]);
});

Route::get('admissionsprocess', function () {
    $data_arr = array();
    $data_arr['title'] = "Admissions Process | Liberal Arts and Science College Pune";
    $data_arr['keywords'] = "bachelor in liberal arts and science, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] =  "Learn about SSLA Pune’s admissions process for the Bachelor in Liberal Arts and Science, including application steps, evaluation stages, and selection criteria.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/admissionsprocess";
    return view('/admissions/admission_process', ['data_arr' => $data_arr]);
});

Route::get('financials3', function () {
    $data_arr = array();
    $data_arr['title'] = "Media Management Course | Liberal Arts Colleges in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] =  "Master media management at premier liberal arts colleges in Pune. Elevate your skills in communication, strategy, and digital media.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/financials3";
    return view('/admissions/financials3', ['data_arr' => $data_arr]);
});

Route::get('admissions-webinar', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Liberal Studies | Degree in Liberal Arts Webinar";
    $data_arr['keywords'] = "bachelor of liberal studies, degree in liberal arts";
    $data_arr['description'] =  "Join our admissions webinar to learn about the Bachelor of Liberal Studies and Degree in Liberal Arts, curriculum details, career options, and admissions process.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/admissions-webinar";
    return view('/admissions/admissions-webinar', ['data_arr' => $data_arr]);
});

Route::get('international-student', function () {
    $data_arr = array();
    $data_arr['title'] = "Best Colleges for BSc in Pune | Top Liberal Arts India";
    $data_arr['keywords'] = "best colleges for bsc in pune, top liberal arts colleges in india";
    $data_arr['description'] =  "Discover one of the best colleges for BSc in Pune and among the top liberal arts colleges in India for international students.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/international-student";
    return view('/admissions/international-student', ['data_arr' => $data_arr]);
});

Route::get('programme-details', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Liberal Studies | Bachelor of Arts Honours Program";
    $data_arr['keywords'] = "ba in liberal studies, bachelor of arts honours";
    $data_arr['description'] =  "Explore BA in Liberal Studies and Bachelor of Arts Honours program offering interdisciplinary learning, global exposure, and career-focused education.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/programme-details";
    return view('/admissions/programme-details', ['data_arr' => $data_arr]);
});

///////// Admissions Routes Ends //////////

///////// ACADEMICS Routes START //////////

Route::get('programdetails', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor in Liberal Arts and Science Program | SSLA Pune";
    $data_arr['keywords'] = "bachelor degree in liberal arts and sciences, bachelor in liberal arts and science, BA in Liberal Arts, bsc liberal arts";
    $data_arr['description'] = "SSLA Pune offers a Bachelor degree in Liberal Arts and Sciences with BA and BSc options, major-minor flexibility, core courses, and applied learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/programdetails";
    return view('/academics/programdetails', ['data_arr' => $data_arr]);
});

Route::get('programme-outcomes', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Liberal Studies Outcomes | Best Liberal Arts Colleges in India";
    $data_arr['keywords'] = "ba in liberal studies, best liberal arts colleges in india";
    $data_arr['description'] = "Explore BA in Liberal Studies programme outcomes at one of the best liberal arts colleges in India. Learn skills, career paths, and learning goals.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/programme-outcomes";
    return view('/academics/programme-outcomes', ['data_arr' => $data_arr]);
});

Route::get('stakeholder-feedback', function () {
    $data_arr = array();
    $data_arr['title'] = "Stakeholder Feedback | SSLA Pune – Best Liberal Arts Colleges in India";
    $data_arr['keywords'] = "best liberal arts colleges in india, ssla pune ";
    $data_arr['description'] = "Read stakeholder feedback about SSLA Pune, one of the best liberal arts colleges in India. Discover student, parent, and industry insights.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/stakeholder-feedback";
    return view('/academics/stakeholder-feedback', ['data_arr' => $data_arr]);
});

Route::get('programme-structure', function () {
    $data_arr = array();
    $data_arr['title'] = "Degree in Liberal Arts Programme Structure | BA Hons Humanities.";
    $data_arr['keywords'] = "degree in liberal arts, BA hons humanities and social sciences";
    $data_arr['description'] = "Explore the degree in liberal arts programme structure at SSLA Pune, including BA Hons Humanities and Social Sciences curriculum, credits, and learning pathway.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/programme-structure";
    return view('/academics/programme-structure', ['data_arr' => $data_arr]);
});

Route::get('assessments-and-assignments', function () {
    $data_arr = array();
    $data_arr['title'] = "Assessments & Assignments | Top Liberal Arts Colleges in India";
    $data_arr['keywords'] = "top liberal arts colleges in india, liberal arts courses";
    $data_arr['description'] = "Learn how assessments work in liberal arts courses at SSLA Pune, one of the top liberal arts colleges in India. Explore evaluation methods and assignments.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/assessments-and-assignments";
    return view('/academics/assessments-and-assignments', ['data_arr' => $data_arr]);
});

Route::get('credit-information', function () {
    $data_arr = array();
    $data_arr['title'] = "Credit System | BA in Liberal Studies | Top Liberal Arts Colleges in India";
    $data_arr['keywords'] = "top liberal arts colleges in india, ba in liberal studies";
    $data_arr['description'] = "Understand the credit system for BA in Liberal Studies at SSLA Pune, one of the top liberal arts colleges in India. Learn how credits are structured.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/credit-information";
    return view('/academics/credit-information', ['data_arr' => $data_arr]);
});

Route::get('academic-bank-of-credits', function () {
    $data_arr = array();
    $data_arr['title'] = "Academic Bank of Credits | Best Colleges for BSc in Pune";
    $data_arr['keywords'] = "best colleges for bsc in pune, ba in arts and science";
    $data_arr['description'] = "Learn how the Academic Bank of Credits supports BA in Arts and Science at SSLA Pune, among the best colleges for BSc in Pune. Track and transfer credits easily.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/academic-bank-of-credits";
    return view('/academics/academic-bank-of-credits', ['data_arr' => $data_arr]);
});

Route::get('academic-calender', function () {
    $data_arr = array();
    $data_arr['title'] = "Academic Calendar | Top Liberal Arts Colleges in India";
    $data_arr['keywords'] = "top liberal arts colleges in india, bachelor of liberal studies";
    $data_arr['description'] = "View the academic calendar for Bachelor of Liberal Studies at SSLA Pune, one of the top liberal arts colleges in India. Stay updated with key dates and terms.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/academic-calender";
    return view('/academics/academic-calender', ['data_arr' => $data_arr]);
});

Route::get('ssla-library', function () {
    $data_arr = array();
    $data_arr['title'] = "SSLA Library | Best Colleges for BSc in Pune | Liberal Arts";
    $data_arr['keywords'] = "best colleges for bsc in pune, bsc liberal arts and sciences";
    $data_arr['description'] = "Explore the SSLA Library for BSc Liberal Arts and Sciences students at SSLA Pune, among the best colleges for BSc in Pune. Access books, journals, and e-resources.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/ssla-library";
    return view('/academics/ssla-library', ['data_arr' => $data_arr]);
});

Route::get('additional-requirement', function () {
    $data_arr = array();
    $data_arr['title'] = "Additional Requirements | BA Hons Humanities & BA Liberal Studies";
    $data_arr['keywords'] = "BA hons humanities and social sciences, ba in liberal studies";
    $data_arr['description'] = "Check additional requirements for BA Hons Humanities and Social Sciences and BA in Liberal Studies at SSLA Pune. Know eligibility, documents, and criteria.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/additional-requirement";
    return view('/academics/additional-requirement', ['data_arr' => $data_arr]);
});

Route::get('courses', function () {
    $data_arr = array();
    $data_arr['title'] = "Best Colleges for B.sc in Pune | BA in Arts and Science";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Explore the best colleges for B.Sc in Pune and pursue a BA in Arts and Science. Gain a comprehensive education focused on critical thinking, creativity, and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/additional-requirement";
    return view('/academics/courses', ['data_arr' => $data_arr]);
});

Route::get('course-anthropology', function () {
    $data_arr = array();
    $data_arr['title'] = "Best Colleges for B.sc in Pune | BA in Arts and Science";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Explore the best colleges for B.Sc in Pune and pursue a BA in Arts and Science. Gain a comprehensive education focused on critical thinking, creativity, and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/additional-requirement";
    return view('/academics/courses/course-anthropology', ['data_arr' => $data_arr]);
});

///////// ACADEMICS Routes Ends //////////

///////// Community Routes Start //////////

Route::get('staff', function () {
    $data_arr = array();
    $data_arr['title'] = "Media Management Course | Liberal Arts Colleges in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Master media management at premier liberal arts colleges in Pune. Elevate your skills in communication, strategy, and digital media.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/staff";
    return view('/community/staff', ['data_arr' => $data_arr]);
});

Route::get('faculty', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/faculty', ['data_arr' => $data_arr]);
});

Route::get('achievements', function () {
    $data_arr = array();
    $data_arr['title'] = "SSLA Pune Achievements | Liberal Arts College India";
    $data_arr['keywords'] = "liberal arts colleges in india, BA in Liberal Arts, bsc liberal arts and sciences, degree in liberal arts";
    $data_arr['description'] = "SSLA Pune achievements reflect excellence in BA Liberal Arts and BSc Liberal Arts and Sciences at one of the leading liberal arts colleges in India today.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/achievements";
    return view('/community/achievements', ['data_arr' => $data_arr]);
});

Route::get('alumni', function () {
    $data_arr = array();
    $data_arr['title'] = "SSLA Pune Alumni | Liberal Arts Colleges in India";
    $data_arr['keywords'] = "liberal arts colleges in india, BA in Liberal Arts, bsc liberal arts and sciences";
    $data_arr['description'] =  "SSLA Pune alumni represent success in BA in Liberal Arts and BSc Liberal Arts and Sciences from one of the leading liberal arts colleges in India today!";
    $data_arr['canonical'] = "https://www.ssla.edu.in/alumni";
    return view('/community/alumni', ['data_arr' => $data_arr]);
});

Route::get('facultydetails', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/facultydetails', ['data_arr' => $data_arr]);
});
Route::get('manjari-jonnalagadda', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/manjirifacultydetails', ['data_arr' => $data_arr]);
});
Route::get('renu-vinod', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/renufacultydetails', ['data_arr' => $data_arr]);
});
Route::get('karishma-modi', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/karishmafacultydetails', ['data_arr' => $data_arr]);
});
Route::get('barry-rodrigue', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/barryfacultydetails', ['data_arr' => $data_arr]);
});
Route::get('gitanjali-roy', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/gitanjalifacultydetails', ['data_arr' => $data_arr]);
});

Route::get('student', function () {
    $data_arr = array();
    $data_arr['title'] = "Students at SSLA Pune | Liberal Arts Programme India";
    $data_arr['keywords'] = "liberal arts programme, BA hons humanities and social sciences, bachelor of arts honours";
    $data_arr['description'] = "Student life at SSLA Pune within a liberal arts programme offering BA Hons Humanities and Social Sciences and Bachelor of Arts Honours degrees in Pune.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/student";
    return view('/community/student', ['data_arr' => $data_arr]);
});

Route::get('anurupa-ghatge', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/anurupa-ghatge', ['data_arr' => $data_arr]);
});
Route::get('shweta-deshpande', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/shweta-deshpande', ['data_arr' => $data_arr]);
});
Route::get('gayatri-mendanha', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/gayatri-mendanha', ['data_arr' => $data_arr]);
});
Route::get('nikhil-thorat', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/nikhil-thorat', ['data_arr' => $data_arr]);
});
Route::get('ananya-dutta', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/ananya-dutta', ['data_arr' => $data_arr]);
});

Route::get('richa-minocha', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/richa-minocha', ['data_arr' => $data_arr]);
});
Route::get('suchetana-banerjee', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/suchetana-banerjee', ['data_arr' => $data_arr]);
});
Route::get('vasudev-menon', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";
    return view('/community/vasudev-menon', ['data_arr' => $data_arr]);
});
Route::get('kishori-kasat', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/kishori-kasat', ['data_arr' => $data_arr]);
});
Route::get('uday-sinha', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/uday-sinha', ['data_arr' => $data_arr]);
});
Route::get('atiya-fatima', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/atiya-fatima', ['data_arr' => $data_arr]);
});
Route::get('debapriya-ganguly', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/debapriya-ganguly', ['data_arr' => $data_arr]);
});
Route::get('damini-kulkarni', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/damini-kulkarni', ['data_arr' => $data_arr]);
});
Route::get('afshan-majid', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/afshan-majid', ['data_arr' => $data_arr]);
});
Route::get('sakshi-juneja', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/sakshi-juneja', ['data_arr' => $data_arr]);
});
Route::get('sumithra-surendralal', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/sumithra-surendralal', ['data_arr' => $data_arr]);
});
Route::get('sulakshna-sen', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   
    return view('/community/sulakshna-sen', ['data_arr' => $data_arr]);
});
Route::get('esha-prasad', function () {
    $data_arr = array();
    $data_arr['title'] = "Bachelor of Arts Honours | Best Colleges for B.sc in Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a Bachelor of Arts Honours at one of the best colleges for B.Sc in Pune. Enjoy a well-rounded education with a focus on critical thinking and interdisciplinary skills.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/faculty";   

    return view('/community/esha-prasad', ['data_arr' => $data_arr]);
});


///////// Community Routes Ends //////////

Route::get('contact-us', function () {
    $data_arr = array();
    $data_arr['title'] = "Contact SSLA Pune | Top Liberal Arts College in India";
    $data_arr['keywords'] = "liberal arts colleges in pune, liberal arts colleges in india, BA in Liberal Arts, bsc liberal arts and sciences, liberal arts courses, degree in liberal arts, bachelor of liberal arts degree";
    $data_arr['description'] = "Contact SSLA Pune, one of the liberal arts colleges in India, for BA Liberal Arts, BSc Liberal Arts and Sciences, admissions, courses and academic support.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/contact-us";
    return view('contact-us', ['data_arr' => $data_arr]);
});

///////// Research Routes Start //////////

Route::get('confluence-journal-interdisciplinary-studies', function () {
    $data_arr = array();
    $data_arr['title'] = "CJIDS at SSLA Pune | Liberal Arts Programme India";
    $data_arr['keywords'] = "liberal arts programme, BA in Liberal Arts, degree in liberal arts, liberal arts colleges in india";
    $data_arr['description'] = "CJIDS at SSLA Pune supports teaching and research within a liberal arts programme, strengthening BA in Liberal Arts and degree in liberal arts studies in India.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/confluence-journal-interdisciplinary-studies";
    return view('/research/confluence-journal-interdisciplinary-studies', ['data_arr' => $data_arr]);
});

Route::get('student-research', function () {
    $data_arr = array();
    $data_arr['title'] = "Student Research at SSLA Pune | Liberal Arts Degree";
    $data_arr['keywords'] = "ba liberal arts subjects, bsc liberal arts and sciences, liberal arts programme";
    $data_arr['description'] = "Student research at SSLA Pune supports BA Liberal Arts subjects and BSc Liberal Arts and Sciences within a strong liberal arts programme in India.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/student-research";
    return view('/research/student-research', ['data_arr' => $data_arr]);
});

Route::get('research-colloquium', function () {
    $data_arr = array();
    $data_arr['title'] = "Research Colloquium at SSLA Pune | Liberal Arts India";
    $data_arr['keywords'] = "ba liberal arts subjects, bsc liberal arts and sciences, liberal arts colleges in india";
    $data_arr['description'] = "Research colloquium at SSLA Pune features BA Liberal Arts subjects and BSc Liberal Arts and Sciences at liberal arts colleges in India programme study.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/research-colloquium";
    return view('/research/research-colloquium', ['data_arr' => $data_arr]);
});

Route::get('thinking-research-at-ssla', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Arts and Science | Bachelor of Arts Honours - SSLA Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a BA in Arts and Science or Bachelor of Arts Honours at SSLA Pune. Enjoy a comprehensive curriculum that fosters critical thinking and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/thinking-research-at-ssla";
    return view('/research/thinking-research-at-ssla', ['data_arr' => $data_arr]);
});

///////// Research Routes Ends //////////

///////// Events Routes Start /////////

Route::get('symbiosis-literary-festival', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Arts and Science | Bachelor of Arts Honours - SSLA Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a BA in Arts and Science or Bachelor of Arts Honours at SSLA Pune. Enjoy a comprehensive curriculum that fosters critical thinking and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/symbiosis-literary-festival";
    return view('/events/symbiosis-literary-festival', ['data_arr' => $data_arr]);
});

Route::get('red-carpet', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Arts and Science | Bachelor of Arts Honours - SSLA Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a BA in Arts and Science or Bachelor of Arts Honours at SSLA Pune. Enjoy a comprehensive curriculum that fosters critical thinking and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/red-carpet";
    return view('/events/red-carpet', ['data_arr' => $data_arr]);
});

Route::get('inter-collegiate-event', function () {
    $data_arr = array();
    $data_arr['title'] = "BA in Arts and Science | Bachelor of Arts Honours - SSLA Pune";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Pursue a BA in Arts and Science or Bachelor of Arts Honours at SSLA Pune. Enjoy a comprehensive curriculum that fosters critical thinking and interdisciplinary learning.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/inter-collegiate-event";
    return view('/events/inter-collegiate-event', ['data_arr' => $data_arr]);
});

///////// Events Routes Ends //////////

///////// Footer Routes Start //////////

Route::get('life-after-ssla', function () {
    $data_arr = array();
    $data_arr['title'] = "Liberal Arts Colleges in India | Life After SSLA Pune";
    $data_arr['keywords'] = "liberal arts colleges in india, BA Liberal Arts, BSc Liberal Arts and Sciences, liberal arts college";
    $data_arr['description'] = "Life after SSLA Pune with BA Liberal Arts and BSc Liberal Arts and Sciences. Career options, higher studies and outcomes from a leading liberal arts college in India.";
    $data_arr['canonical'] = "https://www.ssla.edu.in/life-after-ssla";
    return view('/footer/life-after-ssla', ['data_arr' => $data_arr]);
});

///////// Footer Routes Ends //////////


