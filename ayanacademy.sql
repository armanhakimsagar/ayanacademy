-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2026 at 10:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayanacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `banner_image`, `created_at`) VALUES
(2, 'this is test', 'uploads/banners/1774249537_4076.png', '2026-03-23 07:05:37'),
(3, 'test 2', 'uploads/banners/1774249558_2586.png', '2026-03-23 07:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_date`, `title`, `description`, `created_at`) VALUES
(1, '2026-03-24', 'Boost Your PTE Score with PTE Personalized Coaching', '<h2><strong>Boost Your PTE Score with Personalized Coaching</strong></h2><p>Getting a high score on the Pearson Test of English (PTE) needs good preparation and PTE <strong>personalized coaching</strong>. With the right help, you can get better at taking the test and feel more confident.</p><p><img src=\"https://i0.wp.com/storage.googleapis.com/48877118-7272-4a4d-b302-0465d8aa4548/1098feb7-e860-49bd-bd4b-235c3c2ec5b1/ebd869ac-bf3b-4cb9-9bd3-c150cd57256e.jpg?w=1170&amp;ssl=1\" alt=\"PTE coaching support\"></p><p>At <strong>PEC-Education</strong>, we know how key <i>effective PTE coaching</i> is. Our skilled trainers give you one-on-one attention. They focus on what you’re good at and what you need to work on. This way, they create a study plan just for you.</p><h3><strong>Key Takeaways</strong></h3><ul><li>Personalized coaching enhances your <strong>PTE preparation</strong>.</li><li>Expert trainers at <strong>PEC-Education</strong> provide tailored guidance.</li><li>Improve your test-taking skills with our <i>best PTE coaching</i>.</li><li>Boost your confidence with our personalized approach.</li><li>Achieve your desired PTE score with our expert help.</li></ul><h2><strong>Understanding the PTE Academic Exam</strong></h2><p>Knowing the PTE Academic Exam’s structure and needs can really help your score. It’s key to get to know the exam’s format and how it’s scored.</p><h3><strong>Structure and Format of PTE Academic</strong></h3><p>The <a href=\"https://www.pearsonpte.com/\"><strong>PTE Academic Exam</strong></a> is a computer test. It checks your English skills in four areas: Speaking, Writing, Reading, and Listening.</p><h4><strong>Speaking, Writing, Reading and Listening Sections</strong></h4><p>The <strong>Speaking and Writing sections</strong> test how well you can talk and write in school and work settings. You’ll show how clearly you can share your thoughts. The <strong>Reading section</strong> looks at how well you understand school texts. The <strong>Listening section</strong> checks if you can catch what’s said in different situations.</p><h4><strong>Computer-Based Testing Process</strong></h4><p>The <strong>PTE Academic Exam</strong> is all done on a computer. This makes the test run smoothly and accurately. The computer scores your Speaking and Writing parts automatically.</p><h3><strong>Scoring System and Requirements</strong></h3><p>The <strong>PTE Academic Exam</strong> scores range from 10 to 90. Knowing how the scoring works is important for getting the score you want.</p><h3><strong>Score Requirements for UK and USA Universities</strong></h3><p>Universities in the UK and USA have certain PTE score needs for getting in. For example, top UK universities often want a PTE score of 65 or more. Some USA universities might need a score of 56 or better. Always check the exact score needs of the universities you’re applying to.</p><h4><strong>Comparing PTE Scores with IELTS Equivalents</strong></h4><p>Many people compare their PTE scores to IELTS scores to see their English level. Even though both tests check language skills, their scoring is different. <strong>PEC-Education</strong> can explain how your PTE score matches up with IELTS, helping you get ready for your studies.</p><h2><strong>Why PTE Is Gaining Popularity in Bangladesh</strong></h2><p>In Bangladesh, the need for English language tests is growing. PTE is becoming more popular because it’s reliable, quick, and known worldwide. It has features that make it stand out among other tests.</p><h3><strong>Advantages Over Other English Proficiency Tests</strong></h3><p>PTE has some key benefits. It offers fast results and flexible test dates. This makes it perfect for students with tight schedules.</p><h4><strong>Faster Results and Flexible Test Dates</strong></h4><p>PTE scores are available quickly, unlike some other tests. This is great for students facing tight deadlines. You can also choose when to take the test, fitting it into your schedule.</p><h4><strong>Objective Computer-Based Scoring</strong></h4><p>PTE’s scoring is done by computers. This means your English skills are judged fairly and accurately. It avoids the bias that can come with human judges.</p><h3><strong>Recognition by Universities and Immigration Authorities</strong></h3><p>PTE is accepted by universities and immigration offices worldwide. This includes the UK and USA. It’s important for students aiming to study or move to these countries.</p><h4><strong>PTE for Study in UK Opportunities</strong></h4><p>The UK is a favorite for Bangladeshi students. Many UK universities accept PTE. It shows your English skills and can help you get into a top UK university.</p><h4><strong>PTE for Study in USA Pathways</strong></h4><p>PTE is also recognized in the USA. It opens doors for students wanting to study in the States. With PTE, you can pursue higher education in the USA.</p><p>At PEC-Education, we’ve seen how <strong>PTE preparation</strong> can help students achieve their dreams abroad. Our expert coaching will prepare you to take the PTE test confidently.</p><figure class=\"table\"><table><thead><tr><th>Country</th><th>PTE Acceptance</th><th>Popular Institutions</th></tr></thead><tbody><tr><td>UK</td><td>Widely accepted</td><td>University of London, University of Manchester</td></tr><tr><td>USA</td><td>Accepted by many institutions</td><td>Harvard University, Stanford University</td></tr></tbody></table></figure><h2><strong>The Importance of Professional PTE Coaching Support</strong></h2><p>Scoring well in the PTE Academic exam is not just about studying alone. It needs <strong>professional PTE coaching support</strong>. Many find it hard to grasp the exam’s complex questions and manage their time well.</p><h3><strong>Common Challenges Faced by Self-Studying Candidates</strong></h3><p>Those studying alone often face big hurdles. They struggle to understand the exam’s complex questions and manage their time well.</p><h4><strong>Understanding Complex Question Types</strong></h4><p>The PTE Academic exam has many question types, some very complex. Without the right help, candidates may find these questions hard to get. This can lead to poor scores.</p><h4><strong>Time Management Issues</strong></h4><p>Managing time well is key in the PTE Academic exam. Those not used to the exam’s format and timing may struggle. This can cause them to miss out on marks.</p><h3><strong>Benefits of Structured Learning and Expert Guidance</strong></h3><p><i>Structured learning and expert guidance</i> can really boost a candidate’s chances of getting a high score. Professional coaching offers <strong>targeted practice</strong>, <strong>proven strategies</strong>, and expert feedback.</p><h4><strong>Targeted Practice and Feedback</strong></h4><p><strong>Professional PTE coaching</strong> gives candidates <strong>targeted practice</strong> and feedback tailored to them. This helps spot areas to improve and learn how to tackle tough questions.</p><h4><strong>Proven Strategies and Techniques</strong></h4><p>Coaches at PEC-Education share <i>proven strategies and techniques</i> that have helped many candidates score high. Learning from experts can give candidates an edge.</p><h2><strong>Introducing PEC-Education: Your Premier PTE Coaching Partner in Dhaka</strong></h2><p>PEC-Education is a top choice for PTE students in Dhaka. It’s dedicated to helping students get the scores they want. They offer detailed PTE personalized Coaching that fits each student’s needs.</p><h3><strong>Background and Expertise in PTE Preparation</strong></h3><p>PEC-Education has a team of <strong>qualified instructors</strong> with lots of PTE prep experience. They know the PTE Academic exam inside out.</p><h4><strong>Qualified Instructors and Their Credentials</strong></h4><p>The teachers at PEC-Education are not just qualified but also have a great track record. They’re experts in English and know all about PTE test needs.</p><h4><strong>Track Record of Success in Bangladesh</strong></h4><p>PEC-Education’s <strong>success stories</strong> show their coaching works. Many students have seen big score boosts. This helps them get into top universities and meet immigration needs.</p><h3><strong>Teaching Philosophy and Approach</strong></h3><p>PEC-Education focuses on <i>student-centred learning</i>. This means teaching that fits each student’s learning style and pace.</p><h4><strong>Student-Centred Learning Methodology</strong></h4><p>PEC-Education’s approach is all about personal attention and tailored study plans. This helps students work on their weaknesses and use their strengths.</p><h4><strong>Emphasis on Practical Application</strong></h4><p>Practical skills are key at PEC-Education. Students get ready for the PTE Academic exam with regular practice tests and real-life exercises.</p><h2><strong>Comprehensive PTE Coaching Programmes at PEC-Education</strong></h2><p>Our <strong>PTE coaching programmes</strong> at PEC-Education are designed to help you reach your score goals quickly. We know everyone is different, so we offer many coaching options to meet your needs.</p><h3><strong>PTE Coaching in One Month: Intensive Course</strong></h3><p>The one-month intensive PTE coaching is for those who need to prepare fast but still want quality. It’s perfect for people who know the PTE format well and just need a boost to hit their score target.</p><h4><strong>Curriculum and Coverage</strong></h4><p>This course covers all parts of the PTE Academic exam, including:</p><ul><li>Speaking and Writing</li><li>Reading</li><li>Listening</li></ul><p>The focus is on <strong>maximizing your score</strong> in a short time, focusing on key areas.</p><h4><strong>Ideal Candidates and Prerequisites</strong></h4><p>This course is for:</p><ul><li>Those with a basic English understanding</li><li>Individuals who have taken the PTE exam before</li><li>Students who can study a lot in a month</li></ul><p>To do well, it’s best if you already know English basics well.</p><h3><strong>PTE Coaching in Two Months: Extended Programme</strong></h3><p>Our two-month <strong>extended programme</strong> is great for those who want to learn at a slower pace or are starting from scratch. It offers deep skill development and lots of practice.</p><h4><strong>In-Depth Skill Development Approach</strong></h4><p>The <strong>extended programme</strong> builds a strong base in all PTE Academic exam areas. You’ll get:</p><ol><li>Detailed lessons on each section</li><li>Regular practice tests</li><li>Personalized feedback</li></ol><p>This ensures you’re well-prepared and confident for the exam.</p><h4><strong>Additional Practice and Support Features</strong></h4><p>In the <strong>extended programme</strong>, you get:</p><ul><li>More study materials</li><li>Mock tests</li><li><strong>One-on-one mentoring</strong> sessions</li></ul><figure class=\"table\"><table><thead><tr><th>Programme Features</th><th>Intensive Course (1 Month)</th><th>Extended Programme (2 Months)</th></tr></thead><tbody><tr><td>Duration</td><td>1 Month</td><td>2 Months</td></tr><tr><td>Curriculum Coverage</td><td>All PTE sections</td><td>All PTE sections with additional practice</td></tr><tr><td>Ideal for</td><td>Those familiar with PTE format</td><td>Those needing a comprehensive preparation</td></tr></tbody></table></figure><h2><strong>Inside PEC-Education’s Personalized PTE Coaching Support</strong></h2><p>At PEC-Education, you get <strong>personalised PTE coaching</strong> that fits your needs. This custom approach helps you get ready for the PTE Academic exam.</p><h3><strong>Initial Assessment and Customized Study Plans</strong></h3><p>Your PTE score journey starts with a detailed initial assessment. This test checks your English skills and spots areas for betterment.</p><h4><strong>Diagnostic Testing Process</strong></h4><p>Our skilled teachers test your listening, reading, writing, and speaking skills. This deep check helps us see your good points and areas to work on.</p><h4><strong>Tailored Learning Pathways</strong></h4><p>After your test, we make a <i>customised study plan</i> for you. This plan focuses on your weak spots, making your study time more effective.</p><p><img src=\"https://i0.wp.com/storage.googleapis.com/48877118-7272-4a4d-b302-0465d8aa4548/1098feb7-e860-49bd-bd4b-235c3c2ec5b1/d217a1e6-9cd1-4aea-b214-1fa3bb09e4a8.jpg?w=1170&amp;ssl=1\" alt=\"personalised PTE coaching support\"></p><h3><strong>One-on-One Mentoring and Progress Tracking</strong></h3><p>At PEC-Education, you get <strong>one-on-one mentoring</strong> for the support you need. Our teachers keep an eye on your progress, giving you feedback and adjusting your plan when needed.</p><h4><strong>Regular Performance Reviews</strong></h4><p>Regular checks on your progress are key in our coaching. These reviews help us see how you’re doing, find areas to improve, and tweak your plan.</p><h4><strong>Targeted Intervention Strategies</strong></h4><p>Our teachers use <i>targeted intervention strategies</i> to help you tackle challenges. By focusing on specific issues, we help you stay on track and make steady progress.</p><p>With PEC-Education’s <strong>personalized PTE coaching</strong>, you’re sure to get the help you need to do well in the PTE Academic exam.</p><h2><strong>Teaching Methodology and Learning Resources</strong></h2><p>PEC-Education focuses on new teaching methods and personal support. Our coaching is made to fit your needs and goals. We make learning fun, effective, and flexible to help you get the best PTE score.</p><h3><strong>Innovative Teaching Techniques for PTE Success</strong></h3><p>At PEC-Education, we’re always learning new ways to prepare for the PTE. Our teachers use <strong>innovative teaching techniques</strong> to help you understand complex ideas. They also teach you the skills needed to do well in the exam.</p><h3><strong>Section-Specific Strategies</strong></h3><p>We teach <i>section-specific strategies</i> for each part of the PTE exam. This helps you feel confident and manage your time well. You’ll know how to tackle each section and get the most out of your score.</p><h3><strong>Error Analysis and Correction</strong></h3><p>Our teaching focuses on <strong>error analysis and correction</strong>. Our teachers work with you to find and fix mistakes. They help you develop strategies to avoid common errors.</p><h3><strong>Practice Materials and Mock Tests</strong></h3><p>We offer lots of <strong>practice materials and mock tests</strong> to help you prepare. These resources mimic the real PTE exam. They help you get used to the exam format and build your confidence.</p><h3><strong>Authentic Practice Questions</strong></h3><p>Our <strong>practice materials</strong> include <i>authentic practice questions</i> that are just like the real PTE exam. By doing these questions, you can check your knowledge and see where you need to improve.</p><h3><strong>Simulated Test Environment</strong></h3><p>We also have <strong>simulated test environments</strong> that are just like the real PTE exam. This makes you comfortable with the exam format. It also helps you avoid surprises on test day.</p><h3><strong>Online Learning Platform and Tools</strong></h3><p>We also have online tools and resources to support your learning. You can find interactive lessons, video tutorials, and online practice tests. These are all designed to help you reach your PTE goals.</p><h3><strong>Free PTE Coaching Online Resources</strong></h3><p>We offer <i>free PTE coaching online resources</i> to help you succeed. You can find video lessons, study guides, and practice quizzes. These resources are all designed to help you prepare for the PTE exam.</p><h3><strong>Mobile Learning Options</strong></h3><p>We know studying for the PTE exam can be tough. That’s why we offer <strong>mobile learning options</strong>. You can access our materials and resources anywhere, anytime.</p><blockquote><p><strong>“The flexibility and personalised support offered by PEC-Education’s coaching programmes were instrumental in my achieving a high score in the PTE exam.”</strong></p></blockquote><p>— A satisfied student</p><h2><strong>Success Stories and Student Achievements</strong></h2><p>PEC-Education has helped many students reach their PTE score goals. We’re proud to share their stories. Our coaching is designed to help you do well in PTE, and the results are clear.</p><h3><strong>Testimonials from High Scorers in Bangladesh</strong></h3><p>Our students have seen great success in PTE, with scores of 79 or higher. Here’s what some of our <strong>high scorers</strong> have to say:</p><h4><strong>Students Who Achieved 79+ Scores</strong></h4><ul><li><i>“I was struggling with PTE until I joined PEC-Education. Their expert guidance helped me achieve a score of 85.”</i> – Rahima, PTE Achiever</li><li><i>“PEC-Education’s coaching was instrumental in my success. I scored 82 in PTE on my first attempt.”</i> – Javed, PTE Achiever</li></ul><h4><strong>PTE Preparation in 15 Days Success Cases</strong></h4><p>Some students have seen big improvements in just 15 days. Here are a few examples:</p><ul><li><strong>65 to 79:</strong> <i>“I improved my score by 14 points in just 15 days with PEC-Education’s intensive coaching.”</i> – Sumaiya, PTE Achiever</li><li><strong>58 to 75:</strong> <i>“PEC-Education’s focused approach helped me boost my score by 17 points in a short span.”</i> – Minhaj, PTE Achiever</li></ul><h3><strong>Statistical Success Rates and Improvement Metrics</strong></h3><p>Our students’ success is backed by data. Here are some insights into our PTE coaching effectiveness:</p><h4><strong>Average Score Improvements</strong></h4><figure class=\"table\"><table><thead><tr><th>Initial Score Range</th><th>Average Improvement</th><th>Final Score Range</th></tr></thead><tbody><tr><td>40-50</td><td>15-20 points</td><td>60-70</td></tr><tr><td>50-60</td><td>10-15 points</td><td>65-75</td></tr><tr><td>60-70</td><td>5-10 points</td><td>70-80</td></tr></tbody></table></figure><h4><strong>First-Attempt Pass Rates</strong></h4><p>Our coaching has greatly improved first-attempt pass rates. <strong>Over 85% of our students pass PTE on their first attempt</strong>. This shows the quality of our coaching.</p><h2><strong>Comparing PEC-Education with Other PTE Coaching Options in Dhaka</strong></h2><p>In Dhaka’s competitive PTE coaching scene, PEC-Education leads the way. The right coaching centre can greatly affect your PTE Academic exam score.</p><h3><strong>Faculty Qualifications and Experience</strong></h3><p>PEC-Education’s faculty is a major plus. They are not just qualified but also have lots of PTE prep experience.</p><h4><strong>Instructor Certification and Training</strong></h4><p>All PEC-Education instructors get <strong>certification and training</strong> to keep up with PTE exam changes.</p><h4><strong>Teaching Experience and Specialisations</strong></h4><p>PEC-Education’s teachers have a lot of experience. They often focus on certain PTE exam parts, giving students focused help.</p><h3><strong>Class Size and Individual Attention</strong></h3><p>PEC-Education knows the value of <i>individual attention</i> for PTE success. They offer flexible class sizes to meet different learning needs.</p><h4><strong>Small Group vs. One-on-One Options</strong></h4><p>You can pick between small group classes or one-on-one sessions, based on your learning style.</p><h4><strong>Personalisation of Learning Experience</strong></h4><p>PEC-Education gives you a PTE personalized Coaching and<strong> PTE learning experience</strong> that fits your strengths and weaknesses. This ensures you use your study time wisely.</p><h3><strong>Value for Money and Results</strong></h3><p>When looking at PTE coaching, <i>value for money</i> is key. PEC-Education offers great prices without sacrificing coaching quality.</p><h4><strong>Cost-Benefit Analysis</strong></h4><p>A cost-benefit analysis shows PEC-Education is a smart investment. Its students see big PTE score improvements.</p><h4><strong>Why PEC-Education Offers the Best PTE Personalized Coaching in Bangladesh</strong></h4><p>PEC-Education is the <strong>best PTE coaching in Bangladesh</strong> thanks to its expert teachers, personal approach, and focus on results. Choosing PEC-Education means choosing a proven path to PTE success.</p><h2><strong>Pricing and Package Options</strong></h2><p>At PEC-Education, we know choosing PTE prep is big. That’s why we have many pricing and <strong>package options</strong>. We aim to give you top-notch PTE coaching that’s both affordable and accessible. This way, you can get the score you want without breaking the bank.</p><h3><strong>Standard Coaching Packages</strong></h3><p>Our standard packages fit different learning styles and budgets. Whether you like learning in a group or need one-on-one help, we’ve got you covered.</p><h4><strong>Group Class Pricing</strong></h4><p>Our group classes are great for teamwork and motivation. They’re priced well, making them perfect for those watching their budget. You’ll get:</p><ul><li>Lessons made just for the PTE Academic exam</li><li>Practice tests to check your progress</li><li>Chances to talk with instructors and others</li></ul><p>Prices start at <strong>৳8,000</strong> for our basic group package, which includes 12 sessions. We also offer discounts for early sign-ups and longer packages.</p><h4><strong>Individual Coaching Rates</strong></h4><p>Our individual coaching is for those who want personal attention and PTE personalized Coaching. It’s great for focusing on weak spots or making a study plan just for you. Rates start at <strong>৳25,000</strong> for 25 sessions, with flexible times to fit your schedule.</p><h3><strong>Specialized Services and Add-ons</strong></h3><p>We also have special services and add-ons to boost your PTE Score. These include coaching for specific sections and <strong>mock test packages</strong>. They offer targeted support and real test practice.</p><h4><strong>Section-Specific Coaching</strong></h4><p>Struggling with a PTE section? Our section-specific coaching can help. It’s available à la carte, focusing on your weak spots. Prices start at <strong>৳2,000</strong> per session.</p><h4><strong>Mock Test Packages</strong></h4><p>Our <strong>mock test packages</strong> mimic the real PTE exam. They include feedback on your performance to help you improve. Prices start at <strong>৳1,000</strong> for one test, with discounts for buying more.</p><p>At PEC-Education, we’re all about helping you pass the PTE Academic exam. Our flexible pricing and packages, along with our expert teachers and resources, make us your best PTE preparation partner.</p><h2><strong>How to Register for PTE personalized Coaching at PEC-Education</strong></h2><p>Signing up for PTE coaching at PEC-Education is easy. It’s designed to help you start your journey to a high PTE score. Just follow these simple steps to enroll smoothly.</p><h3><strong>Admission Process and Requirements</strong></h3><p>First, you’ll need to go through our <strong>admission process</strong>. It checks your current level and tailors our coaching to fit your needs.</p><h3><strong>Documentation Needed</strong></h3><p>During the <strong>admission process</strong>, you’ll need to provide some documents. These are usually:</p><ul><li>A valid government-issued NID/Passport Copy</li><li>Proof of English proficiency (if applicable)</li><li>Any previous PTE test scores (if you’ve taken the test before)</li></ul><h3><strong>Payment Options</strong></h3><p>After submitting your documents, you’ll need to pay to secure your spot. We make it easy with several payment options, including:</p><ul><li>Bank transfer</li><li>Credit/debit card payments</li><li>Online payment gateways(Bkash)</li></ul><p>Our team will help you with the payment and answer any questions you might have.</p><h3><strong>Class Schedules and PTE Centers Location in Bangladesh</strong></h3><p>PEC-Education has flexible class times to fit your schedule. You can choose from morning, afternoon, or evening sessions.</p><h3><strong>Dhaka Centre Details</strong></h3><p>Our Dhaka center is in the city’s heart. It’s easy to reach by public or private transport. Here are the details:</p><figure class=\"table\"><table><thead><tr><th>Centre</th><th>Address</th><th>Contact Number</th></tr></thead><tbody><tr><td>Dhaka Centre</td><td>House 128, Senpara Parbata, Begum Rokeya Sarani, Mirpur-10</td><td>+880 1713167969</td></tr></tbody></table></figure><h3><strong>Online Classes Options</strong></h3><p>If you prefer online learning, we offer virtual classes. They’re just as effective as our in-person sessions. Our <strong>online classes</strong> use a user-friendly platform. It lets you interact with our experienced instructors and connect with your peers.</p><p>By following these steps, you’ll be on your way to registering for PTE coaching at PEC-Education. You’ll be working towards your desired PTE score. If you have any questions or need help, just contact us.</p><h2><strong>Conclusion: Investing in Your Future with Quality PTE personalized Coaching</strong></h2><p>Preparing for the PTE Academic exam? <strong>Quality PTE personalized Coaching</strong>&nbsp;can really help. The right support can boost your score and open doors to education and career growth.</p><p>PEC-Education offers top <strong>PTE coaching in Dhaka</strong>. We will help you to understand the exam and reach your best. Investing in quality coaching is a key step towards your goals.</p><p>At PEC-Education, you get personal coaching and expert advice. They provide all the resources you need to pass. With their help, many students have scored high, making PEC-Education the best choice in Dhaka.</p><p>Ready to improve your PTE score? Check out PEC-Education’s <a href=\"https://pecpte.com/pte-academic-coaching/\"><strong>coaching programmes</strong></a>. See how quality coaching can change your future.</p><h2><strong>FAQ</strong></h2><h3><strong>What is the duration of the PTE coaching programme at PEC-Education?</strong></h3><p>PEC-Education has both a one-month and a two-month PTE coaching programme. They cater to different needs and preferences.</p><h3><strong>How do I enrol in the PTE coaching classes at PEC-Education in Dhaka?</strong></h3><p>To enrol, visit the PEC-Education website. Fill out the registration form and follow the payment and documentation instructions.</p><h3><strong>What makes PEC-Education’s PTE coaching different from other coaching centres in Bangladesh?</strong></h3><p>PEC-Education stands out with its personalised approach and PTE Personalized Coaching, expert instructors, and detailed study materials. This ensures a tailored learning experience.</p><h3><strong>Can I opt for online PTE coaching classes instead of attending physical classes in Dhaka?</strong></h3><p>Yes, PEC-Education offers online PTE coaching classes. This provides flexibility and convenience for those who prefer remote learning or can’t attend in-person classes.</p><h3><strong>What kind of support can I expect during my PTE preparation with PEC-Education?</strong></h3><p>You’ll get <strong>one-on-one mentoring</strong>, regular performance reviews, and targeted feedback. All are designed to help you reach your desired PTE score.</p><h3><strong>Are the instructors at PEC-Education qualified to teach PTE preparation?</strong></h3><p>Absolutely, PEC-Education’s instructors are highly qualified, experienced, and Pearson certified in teaching <strong>PTE preparation</strong>. They ensure you get the best guidance.</p><h3><strong>How does PEC-Education assess my initial PTE level, and what happens next?</strong></h3><p>After registering, you’ll do a diagnostic assessment to check your current level. Then, a customised study plan will be made to meet your specific needs.</p><h3><strong>What is the cost of PTE coaching at PEC-Education, and are there different packages available?</strong></h3>', '2026-03-23 08:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_type`, `image`, `created_at`) VALUES
(1, 'seminar pics', 'uploads/gallery/1774257937_9101.png', '2026-03-23 09:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision`
--

CREATE TABLE `mission_vision` (
  `id` int(11) NOT NULL,
  `type` enum('mission','vision') NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_achivements`
--

CREATE TABLE `our_achivements` (
  `id` int(11) NOT NULL,
  `oversease` varchar(100) NOT NULL,
  `classes_complete` varchar(100) NOT NULL,
  `students_enrolled` varchar(100) NOT NULL,
  `certified_teachers` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overseas_universities`
--

CREATE TABLE `overseas_universities` (
  `id` int(11) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pte_courses_campus`
--

CREATE TABLE `pte_courses_campus` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_short_description` text NOT NULL,
  `lecture_hour_details` varchar(255) NOT NULL,
  `course_amount` decimal(10,2) NOT NULL,
  `course_level` varchar(100) NOT NULL,
  `total_lecture` int(11) NOT NULL,
  `how_many_hour_lecture` varchar(100) NOT NULL,
  `course_long_description` longtext NOT NULL,
  `course_curriculum` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pte_courses_online`
--

CREATE TABLE `pte_courses_online` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_short_description` text NOT NULL,
  `lecture_hour_details` varchar(255) NOT NULL,
  `course_amount` decimal(10,2) NOT NULL,
  `course_level` varchar(100) NOT NULL,
  `total_lecture` int(11) NOT NULL,
  `how_many_hour_lecture` varchar(100) NOT NULL,
  `course_long_description` longtext NOT NULL,
  `course_curriculum` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_type`, `description`, `created_at`) VALUES
(2, 'pte exam registration', '<div data-rocket-location-hash=\"ca394f39099c56219591556165e325fe\" class=\"entry-header clearfix\" style=\"padding: 50px 0px; background-color: rgb(69, 121, 146); clear: both; color: rgb(39, 48, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\"><div class=\"container\" style=\"padding-right: 15px; padding-left: 15px; width: auto; max-width: 1200px;\"><div class=\"entry-title-left\"><div class=\"entry-title\" style=\"text-align: center;\"><h1 style=\"font-size: 50px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Arial, Helvetica, sans-serif; font-weight: 700; line-height: 55px; color: rgb(255, 255, 255); text-align: left; letter-spacing: -0.4px; text-transform: uppercase;\">Lean Sigma Project Management</h1></div></div><div class=\"entry-title-right\"></div></div></div><div data-rocket-location-hash=\"e5ca082deb775a2a539d08c6e34122ec\" class=\"stm_lms_breadcrumbs stm_lms_breadcrumbs__header_default\" style=\"color: rgb(39, 48, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\"><div class=\"stm_breadcrumbs_unit\" style=\"background-color: rgb(246, 246, 246); padding: 9px 0px 7px; margin-bottom: 60px; border-bottom: 1px solid rgb(240, 242, 245);\"><div class=\"container\" style=\"padding-right: 15px; padding-left: 15px; width: auto; max-width: 1200px;\"><div class=\"navxtBreads\" style=\"font-size: 11px; color: rgb(170, 170, 170); text-transform: uppercase;\"><span property=\"itemListElement\" typeof=\"ListItem\"><a property=\"item\" typeof=\"WebPage\" title=\"Go to PEC-Education.\" href=\"https://pecpte.com/\" class=\"home\" style=\"color: rgb(170, 170, 170); transition: 0.25s; text-decoration: none !important; outline: 0px !important;\">PEC-Education</a></span>&nbsp;&gt;&nbsp;<span property=\"itemListElement\" typeof=\"ListItem\">Lean Sigma Project Management</span></div></div></div></div><div class=\"container\" style=\"padding-right: 15px; padding-left: 15px; width: auto; max-width: 1200px; color: rgb(39, 48, 68); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;\"><div class=\"post_type_exist clearfix\" style=\"clear: both;\"><div class=\"vc_row wpb_row vc_row-fluid\" style=\"margin-bottom: 35px; margin-left: -15px; margin-right: -15px;\"><div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"width: 600px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 600px;\"><div class=\"wpb_wrapper\"><div class=\"vc_custom_heading text_align_left\"><h3 class=\"masterstudy-custom-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-weight: 700; line-height: 34px; color: rgb(39, 48, 68); margin-bottom: 30px; font-size: 24px; text-align: left;\">Lean Six Sigma &amp; Operational Excellence with Data Science (AI &amp; Machine Learning)</h3></div></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"width: 600px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 600px;\"><div class=\"wpb_wrapper\"></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid\" style=\"margin-bottom: 35px; margin-left: -15px; margin-right: -15px;\"><div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"width: 600px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 600px;\"><div class=\"wpb_wrapper\"><div class=\"wpb_text_column wpb_content_element \" style=\"margin-bottom: 35px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">Why Lean-Six Sigma?</strong></p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><strong style=\"font-weight: bold;\">Lean- Six Sigma &amp; Operational Excellence</strong>&nbsp;are the most widely used &amp; most impactful business improvement methodologies in 21<span style=\"font-size: 10.5px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-bottom: 0px;\">st</span>&nbsp;century around the world. These are becoming basic skill sets today, general expectations for any Job at all professional levels, and in any type of organization. These are becoming common business languages to solve real-life problems and make improvements.</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><strong style=\"font-weight: bold;\">PEC- Education</strong>&nbsp;is excited to collaborate with CIBEx-USA &amp; bring Mr. Gani to facilitate CIBEx LIVE Virtual ExeEdu® for participants in Bangladesh.&nbsp;<strong style=\"font-weight: bold;\">Lean-Six Sigma</strong>&nbsp;&amp; Operational Excellence with Data Science (<strong style=\"font-weight: bold;\">AI &amp; Machine Learning</strong>) is a program illustrating Lean principles &amp;&nbsp;<strong style=\"font-weight: bold;\">Six-Sigma</strong>&nbsp;DMAIC Methodology to drive Business Process Improvements using Data Science (<strong style=\"font-weight: bold;\">AI &amp; Machine Learning</strong>) both for Manufacturing &amp; Service Industries. Training programs will be offered at various levels- introductory/ White Belt, Yellow Belt-Light, &amp; Yellow Belt-Pro for 2020, &amp; eventually there will be higher level Belt Certifications. There will be also&nbsp;<strong style=\"font-weight: bold;\">Lean- Six Sigma</strong>&nbsp;Tools Training for Continuous Improvement Project &amp; Lean Kaizen Executions on-demand basis, like, 1)&nbsp;<em>Value Stream Process Mapping</em>&nbsp;2)&nbsp;<em>Standardized Work</em>&nbsp;3)&nbsp;<em>5S Workplace Organization</em>&nbsp;4)<em>&nbsp;Leader Standard Work (LSW)</em>&nbsp;5)&nbsp;<em>Quick Changeover/ SMED</em>&nbsp;6)&nbsp;<em>Error Proofing</em>&nbsp;7)&nbsp;<em>Kanban &amp; Pull System</em>&nbsp;8)&nbsp;<em>TPM</em>&nbsp;9)&nbsp;<em style=\"margin-bottom: 0px;\">Structured Problem Solving BootCamp</em>&nbsp;etc. Content of these training programs have been developed based on the world’s latest trend in this discipline (using AI &amp; ML), and will be taught through hands-on class exercises and studying case studies from US Industries. All these programs will include introductions &amp; illustrations of some basic Lean &amp; Six-Sigma tools and their business applications in solving problems to drive Continuous Improvement (CI), which includes- Process Mapping, SIPOC, Histograms &amp; Pareto Chart, Trend Chart analysis, Performance Metrics &amp; Score-Card, Value Stream Mapping (VSM), Standardized Work, &amp; 5S Workplace organization.</p><ul style=\"margin-bottom: 10px; padding-left: 20px;\"><li style=\"margin-bottom: 8px;\">This is an unique opportunity for Bangladeshi Professionals &amp; fresh Graduates to receive these&nbsp;US&nbsp;based world-class Executive Training and Certifications&nbsp;which are essential for any Industry&nbsp;&amp; Business&nbsp;in the 21st Century both here in Bangladesh &amp; overseas.&nbsp;All&nbsp;participants’&nbsp;Certificate&nbsp;&amp; credentials will be issued directly from CIBEx USA.</li><li style=\"margin-bottom: 8px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">To learn more about this program, please&nbsp;<a href=\"https://pecpte.com/contact-us/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"color: rgb(85, 85, 85); transition: 0.25s; font-size: 12px; margin-bottom: 0px; text-decoration: none !important; outline: 0px !important;\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">contact us</strong></a>.</p></li><li style=\"margin-bottom: 0px;\">To Register &amp; enroll, Please&nbsp;<a href=\"https://pecpte.com/shop/\" style=\"color: rgb(85, 85, 85); transition: 0.25s; font-size: 12px; margin-bottom: 0px; text-decoration: none !important; outline: 0px !important;\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">visit….</strong></a></li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">&nbsp;</p></div></div></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"width: 600px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 600px;\"><div class=\"wpb_wrapper\"><div class=\"wpb_single_image wpb_content_element vc_align_center\" style=\"margin-bottom: 35px; text-align: center;\"><figure class=\"wpb_wrapper vc_figure\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><img fetchpriority=\"high\" decoding=\"async\" width=\"940\" height=\"788\" src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?fit=940%2C788&amp;ssl=1\" class=\"vc_single_image-img attachment-full entered lazyloaded\" alt=\"Lean Six Sigma Executive Training\" title=\"Lean Six Sigma Executive Training\" data-lazy-srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?w=940&amp;ssl=1 940w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=300%2C251&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=768%2C644&amp;ssl=1 768w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=20%2C17&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=600%2C503&amp;ssl=1 600w\" data-lazy-sizes=\"(max-width: 940px) 100vw, 940px\" data-lazy-src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?fit=940%2C788&amp;ssl=1\" data-ll-status=\"loaded\" sizes=\"(max-width: 940px) 100vw, 940px\" srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?w=940&amp;ssl=1 940w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=300%2C251&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=768%2C644&amp;ssl=1 768w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=20%2C17&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Untitled-design-2.png?resize=600%2C503&amp;ssl=1 600w\" style=\"border: 0px; vertical-align: top; max-width: 100%; height: auto;\"></div></figure></div></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid\" style=\"margin-bottom: 35px; margin-left: -15px; margin-right: -15px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"width: 1200px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 1200px;\"><div class=\"wpb_wrapper\"><div class=\"vc_custom_heading text_align_center\"><h3 class=\"masterstudy-custom-title\" style=\"font-family: Arial, Helvetica, sans-serif; font-weight: 700; line-height: 34px; color: rgb(39, 48, 68); margin-bottom: 30px; font-size: 24px; text-align: center;\">Profile of the Executive Trainer from USA</h3></div></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid\" style=\"margin-bottom: 35px; margin-left: -15px; margin-right: -15px;\"><div class=\"wpb_column vc_column_container vc_col-sm-3\" style=\"width: 300px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 300px;\"><div class=\"wpb_wrapper\"><div class=\"wpb_single_image wpb_content_element vc_align_right\" style=\"margin-bottom: 35px; text-align: right;\"><figure class=\"wpb_wrapper vc_figure\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><img decoding=\"async\" width=\"218\" height=\"217\" src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?fit=218%2C217&amp;ssl=1\" class=\"vc_single_image-img attachment-large entered lazyloaded\" alt=\"Obaidul Gani\" title=\"Obaidul Gani\" data-lazy-srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?w=218&amp;ssl=1 218w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=100%2C100&amp;ssl=1 100w\" data-lazy-sizes=\"(max-width: 218px) 100vw, 218px\" data-lazy-src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?fit=218%2C217&amp;ssl=1\" data-ll-status=\"loaded\" sizes=\"(max-width: 218px) 100vw, 218px\" srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?w=218&amp;ssl=1 218w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=150%2C150&amp;ssl=1 150w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=75%2C75&amp;ssl=1 75w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=129%2C129&amp;ssl=1 129w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=122%2C120&amp;ssl=1 122w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=69%2C69&amp;ssl=1 69w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=20%2C20&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2.png?resize=100%2C100&amp;ssl=1 100w\" style=\"border: 0px; vertical-align: top; max-width: 100%; height: auto;\"></div></figure></div><div class=\"wpb_single_image wpb_content_element vc_align_right\" style=\"margin-bottom: 35px; text-align: right;\"><figure class=\"wpb_wrapper vc_figure\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><img decoding=\"async\" width=\"377\" height=\"966\" src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?fit=377%2C966&amp;ssl=1\" class=\"vc_single_image-img attachment-large entered lazyloaded\" alt=\"\" title=\"Picture1 160920\" data-lazy-srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?w=378&amp;ssl=1 378w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=117%2C300&amp;ssl=1 117w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=8%2C20&amp;ssl=1 8w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=377%2C966&amp;ssl=1 377w\" data-lazy-sizes=\"(max-width: 377px) 100vw, 377px\" data-lazy-src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?fit=377%2C966&amp;ssl=1\" data-ll-status=\"loaded\" sizes=\"(max-width: 377px) 100vw, 377px\" srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?w=378&amp;ssl=1 378w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=117%2C300&amp;ssl=1 117w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=8%2C20&amp;ssl=1 8w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture1-160920.png?resize=377%2C966&amp;ssl=1 377w\" style=\"border: 0px; vertical-align: top; max-width: 100%; height: auto;\"></div></figure></div><div class=\"wpb_single_image wpb_content_element vc_align_left\" style=\"margin-bottom: 35px; text-align: left;\"><figure class=\"wpb_wrapper vc_figure\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><img decoding=\"async\" width=\"280\" height=\"594\" src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?fit=280%2C594&amp;ssl=1\" class=\"vc_single_image-img attachment-large entered lazyloaded\" alt=\"\" title=\"Picture2 160920\" data-lazy-srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?w=280&amp;ssl=1 280w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?resize=141%2C300&amp;ssl=1 141w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?resize=9%2C20&amp;ssl=1 9w\" data-lazy-sizes=\"(max-width: 280px) 100vw, 280px\" data-lazy-src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?fit=280%2C594&amp;ssl=1\" data-ll-status=\"loaded\" sizes=\"(max-width: 280px) 100vw, 280px\" srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?w=280&amp;ssl=1 280w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?resize=141%2C300&amp;ssl=1 141w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/09/Picture2-160920.png?resize=9%2C20&amp;ssl=1 9w\" style=\"border: 0px; vertical-align: top; max-width: 100%; height: auto;\"></div></figure></div></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-9\" style=\"width: 900px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 900px;\"><div class=\"wpb_wrapper\"><div class=\"wpb_text_column wpb_content_element \" style=\"margin-bottom: 35px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Mr. Obaidul Gani is a Bangladeshi American living in the US since 1999. He specializes in&nbsp;Lean-Six Sigma &amp; Operational Excellence in the field of&nbsp;Engineering, PMO, Operations &amp; Supply Chain Management&nbsp;along with other functional areas like Quality, R&amp;D, Finance, Sales &amp; Marketing, HR &amp; General&nbsp;administration.&nbsp;He possesses 20 Years&nbsp;of industry&nbsp;experience from various multi Billion$$ US companies. Besides leading large Business&nbsp;Transformations &amp;&nbsp;generating multi&nbsp;Million$$ improvement savings,&nbsp;Mr. Gani Trained, Coached &amp; Mentored more than 1,000 Employees in past 16 years in numerous companies in the USA&nbsp;&amp; Canada. He&nbsp;has been engaged in professional development &amp; Seminars in Dhaka, Bangladesh since 2010.</p></div></div><div class=\"wpb_text_column wpb_content_element \" style=\"margin-bottom: 35px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><u style=\"margin-bottom: 0px;\"><b style=\"font-weight: bold; margin-bottom: 0px;\">EDUCATION:</b></u></p><ul style=\"margin-bottom: 10px; padding-left: 20px;\"><li style=\"margin-bottom: 8px;\">OMC- Exe-Education &amp; Operations Management Certificate (Lean Business System), University of Wisconsin at Madison,&nbsp;USA (2010)</li><li style=\"margin-bottom: 8px;\">EMPP- Engineering Management Masters Program, Industrial &amp; Systems Engineering, Wayne State University, Detroit, Michigan, USA (2004)</li><li style=\"margin-bottom: 8px;\">M. Sc. in Industrial Engineering, &nbsp;Industrial &amp; Systems Engineering, Wayne State University, Detroit, Michigan, USA (2001)</li><li style=\"margin-bottom: 0px;\">B.Sc. in Mechanical Engineering, Bangladesh University of Engineering &amp; Technology (BUET), Dhaka, Bangladesh (1998)</li></ul><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><u style=\"margin-bottom: 0px;\"><b style=\"font-weight: bold; margin-bottom: 0px;\">LICENSING &amp; CERTIFICATIONS:</b></u></p><ul style=\"margin-bottom: 10px; padding-left: 20px;\"><li style=\"margin-bottom: 8px;\">P. Eng.- Professional Engineering License (P.E.), Professional Engineers of Ontario, Canada (Licensed since Oct 2006)</li><li style=\"margin-bottom: 8px;\">CSSBB- ASQ Certified Six-Sigma Black Belt,&nbsp;American Society for Quality (ASQ), Wisconsin, USA (Certified&nbsp;since March 2011)</li><li style=\"margin-bottom: 8px;\">CLE- PHILIPS University Certified Lean-Expert (CLE), PHILIPS University &amp; Royal Philips CI,&nbsp;USA &amp; Netherlands (Certified since 2016)</li><li style=\"margin-bottom: 0px;\">P. Eng.- Bangladesh BPERB Registered &amp; Licensed Professional Engineer, BPERB. Ramna, Dhaka, Bangladesh (since 2013-2014)</li></ul><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><u><b style=\"font-weight: bold; margin-bottom: 0px;\">PROFESSIONAL AFFILIATIONS</b></u><b style=\"font-weight: bold; margin-bottom: 0px;\">:</b></p><ul style=\"margin-bottom: 10px; padding-left: 20px;\"><li style=\"margin-bottom: 8px;\">Industrial Fellow: INDUSTRY-X Center for Operational Excellence-Innovation, Digitization, &amp; Data Science, Wayne State University,&nbsp;Michigan,&nbsp;USA</li><li style=\"margin-bottom: 8px;\">Senior Professional Member- Institute of Industrial &amp; Systems Engineers (IISE),&nbsp;Georgia, USA</li><li style=\"margin-bottom: 8px;\">Professional Member-&nbsp;American Society for Quality (ASQ), Wisconsin, USA</li><li style=\"margin-bottom: 8px;\">Member- Professional Engineers of&nbsp; Ontario (PEO), Ontario, Canada</li><li style=\"margin-bottom: 8px;\">Lifetime Fellow- Institute of Engineers Bangladesh (IEB), Ramna, Dhaka, Bangladesh</li><li style=\"margin-bottom: 0px;\">Member of the Board of Directors- BUET Alumni Association of North America (BUETANA), Georgia, USA</li></ul><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\"><u style=\"margin-bottom: 0px;\"><b style=\"font-weight: bold; margin-bottom: 0px;\">WORK EXPERIENCES (Past 20+ Years of experiences since 2000) :</b></u></p><ul style=\"margin-bottom: 10px; padding-left: 20px;\"><li style=\"margin-bottom: 8px;\">President &amp; CEO<b style=\"font-weight: bold; margin-bottom: 0px;\">–&nbsp;</b>Continuous Improvement for Business Excellence (CIBEx), Gainesville, Florida, USA</li><li style=\"margin-bottom: 8px;\">Director of Operations &amp; Manufacturing<b style=\"font-weight: bold; margin-bottom: 0px;\">:&nbsp;</b>Lacerta Therapeutics (a Bio-Pharma &amp;&nbsp;BioTech&nbsp;Company), Gainesville, Florida, USA</li><li style=\"margin-bottom: 8px;\">Global Operational Excellence Leader (Director)<b style=\"font-weight: bold; margin-bottom: 0px;\">:&nbsp;</b>Operations &amp; Supply&nbsp;Chain@RTI&nbsp;Surgical and Biologics,&nbsp;Gainesville, Florida,&nbsp;USA</li><li style=\"margin-bottom: 8px;\">Head of Continuous Improvement Business System<b style=\"font-weight: bold; margin-bottom: 0px;\">:&nbsp;</b>ThermoFisher&nbsp;Scientific,&nbsp;Asheville, North Carolina, USA</li><li style=\"margin-bottom: 8px;\">Business Excellence &amp; Lean-Operational Excellence Leader (Director)<b style=\"font-weight: bold; margin-bottom: 0px;\">:&nbsp;</b>PHILIPS HealthCare, Diagnostic Imaging,&nbsp;Gainesville, Florida, USA</li><li style=\"margin-bottom: 8px;\">Sr. Principal Engineer (Sr. Manager), Continuous Improvement<b style=\"font-weight: bold; margin-bottom: 0px;\">:</b>&nbsp;Abbott&nbsp;HealthCare (St. Jude Medical),&nbsp;Minneapolis, Minnesota, USA</li><li style=\"margin-bottom: 8px;\">Manager, Lean Manufacturing/ Continuous Improvement: Autocom&nbsp;Manufacturing@Linamar&nbsp;Corporation,&nbsp;Guelph, Ontario, Canada</li><li style=\"margin-bottom: 8px;\">Process Engineering Consultant:&nbsp;DAIMLER-CHRYSLER Corporation,&nbsp;Detroit Axle Plant, Detroit, Michigan, USA</li><li style=\"margin-bottom: 8px;\">Quality/ Reliability Engineer: Visteon Corporation at&nbsp;FORD Motor Company, Dearborn, Michigan,&nbsp;USA</li><li style=\"margin-bottom: 0px;\">Continuous Improvement Coordinator,&nbsp;Industrial &amp; Manufacturing Systems Engineering,&nbsp;Wayne State University,&nbsp;Detroit, Michigan, USA</li></ul><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px;\">To learn more about Mr. Gani,&nbsp;<a href=\"https://www.linkedin.com/in/mogani/\" style=\"color: rgb(44, 117, 228); transition: 0.25s; margin-bottom: 0px; text-decoration: none !important; outline: 0px !important;\">please Visit</a></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">&nbsp;</p></div></div></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid\" style=\"margin-bottom: 35px; margin-left: -15px; margin-right: -15px;\"><div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"width: 1200px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 1200px;\"><div class=\"wpb_wrapper\"><div class=\"wpb_single_image wpb_content_element vc_align_center\" style=\"margin-bottom: 35px; text-align: center;\"><figure class=\"wpb_wrapper vc_figure\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"display: inline-block; vertical-align: top; max-width: 100%;\"><img decoding=\"async\" width=\"1174\" height=\"638\" src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?fit=1174%2C638&amp;ssl=1\" class=\"vc_single_image-img attachment-full entered lazyloaded\" alt=\"Lean Six Sigma course outline\" title=\"Lean Six Sigma course outline\" data-lazy-srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?w=1174&amp;ssl=1 1174w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=300%2C163&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=1024%2C556&amp;ssl=1 1024w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=768%2C417&amp;ssl=1 768w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=20%2C11&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=600%2C326&amp;ssl=1 600w\" data-lazy-sizes=\"(max-width: 1170px) 100vw, 1170px\" data-lazy-src=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?fit=1174%2C638&amp;ssl=1\" data-ll-status=\"loaded\" sizes=\"(max-width: 1170px) 100vw, 1170px\" srcset=\"https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?w=1174&amp;ssl=1 1174w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=300%2C163&amp;ssl=1 300w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=1024%2C556&amp;ssl=1 1024w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=768%2C417&amp;ssl=1 768w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=20%2C11&amp;ssl=1 20w, https://i0.wp.com/pecpte.com/wp-content/uploads/2020/10/CIBEx-PEC-Course-Catalog-Oct.-02-2020.png?resize=600%2C326&amp;ssl=1 600w\" style=\"border: 0px; vertical-align: top; max-width: 100%; height: auto;\"></div></figure></div></div></div></div></div></div></div>', '2026-03-23 09:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_details` varchar(255) NOT NULL,
  `testimonial_details` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'Admin User', 'admin@example.com', '123456789ASc@d', 1, '2026-03-23 06:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_achivements`
--
ALTER TABLE `our_achivements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_universities`
--
ALTER TABLE `overseas_universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pte_courses_campus`
--
ALTER TABLE `pte_courses_campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pte_courses_online`
--
ALTER TABLE `pte_courses_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_achivements`
--
ALTER TABLE `our_achivements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `overseas_universities`
--
ALTER TABLE `overseas_universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pte_courses_campus`
--
ALTER TABLE `pte_courses_campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pte_courses_online`
--
ALTER TABLE `pte_courses_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
