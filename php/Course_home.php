<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/Course_home_layout.css">
  <meta charset="utf-8">
  <title>Software Engineering Lab - Courses</title>
</head>

<body>
  <nav>
    <a href="Home.php"><img src="../images/selab.png" align="center" width="72" height="26"></a>
    <ul>
      <li><a href="Contact.php">Contact</a></li>
      <li>
        <?php if (isset($_SESSION['id'])){ ?> 
          <a href="../qa/board/index.php">Q & A</a>
        <?php }
         else{ ?> 
          <a onClick = "alert('로그인 해주세요.')" >Q & A</a> 
          <?php }?>
      </li>
      <li><a href="Courses.php">Courses</a>
      </li>
      <li><a href="Publications.php">Publications</a>
        <ul>
          <li><a href="Pub_incon.php">International Conference</a></li>
          <li><a href="Pub_injour.php">International Journal</a></li>
          <li><a href="Pub_domcon.php">Domestic Conference</a></li>
          <li><a href="Pub_domjour.php">Domestic Journal</a></li>
        </ul>
      </li>
      <li><a href="Research.php">Research</a></li>
      <li><a href="Members.php">Members</a></li>
      <li><a href="Notice.php">Notice</a></li> 
    </ul>
  </nav>

  <header>
    <h1>Web Application Development <span>  -  Home</span> <a class="slide" href="Course_slides.php" >Slides</a></h1>
  </header>

  <section class="section">
    <ul>
      <li ><a class = "a" href ="#CourseObjectives">Course Objectives</a></li>
      <li><a class = "a" href="#Lecturer">Lecturer</a></li>
      <li><a class = "a" href="#TeachingAssistants">Teaching Assistants</a></li>
      <li><a class = "a" href="#PlacesDates">Places &amp; Dates</a></li>
      <li><a class = "a" href="#CourseSchedule">Course Schedule</a></li>
      <li><a class = "a" href="#TeamProject">Team Project</a></li>
      <li><a class = "a" href="#Assessments">Assessments</a></li>
    </ul>
  </section>

  <article>
    <div id="CourseObjectives">
      <img src="../images/coding.jpg" width="400" height="250 " class="right">
      <h3>Course Objectives</h3>
      <p>
        In this course, the followings will be covered to adequately enable web programming and application development:
      </p>
      <ol>
        <li>Understand the protocols, language and systems used on the Web (HTML, CSS, HTTP, URLs, XML)</li>
        <li>Understand the functions of clients and servers on the Web &amp; learn how to implement <br>client-side scripts (JavaScript) and server-side scripts (PHP)</li>
        <li>Obtain ability to design and implement an interactive web site where usability, <br>accessibility and internationalization issues are considered</li>
        <li>Learn how to use/manage database associated with web applications (mainly storage and retrieval)</li>

      </ol>
    </div>

    <div id="Lecturer">
      <h3>Lecturer: Scott Lee</h3>
      <ul>
        <li>Office: 학연산클러스터 617호</li>
        <li>Tel: 031-400-5238</li>
        <li>Email: scottlee@hanyang.ac.kr</li>
      </ul>
    </div>

    <div id="TeachingAssistants">
      <h3>Teaching Assistants</h3>
      <ul>
        <li> Gichan Lee
          <ul>
            <li>Office: 학연산클러스터 621호</li>
            <li>Tel: 031-400-4754</li>
            <li>Email: <a href="mailto:fantasyopy@gmail.com">fantasyopy@gmail.com</a></li>
          </ul>
        </li>
        <li> HakJin Lee
          <ul>
            <li>Office: 학연산클러스터 621호</li>
            <li>Tel: 031-400-4754</li>
            <li>Email: <a href="mailto:gsdjini91@gmail.com">gsdjini91@gmail.com</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="PlacesDates">
      <h3>Places &amp; Dates</h3>
      <p>Class 1 (23497)</p>
      <ul>
        <li>Lecture : Thu (09:00 - 10:30) &amp; Fri (13:00 - 14:30) @ Engineering Building #1 Room 402</li>
        <li>Lab : Fri (09:00 - 11:00) @ Engineering Building #4 PC Room 1 & 2</li>
      </ul>
      <p>Class 2 (24465)</p>
      <ul>
        <li>Lecture : Thu (10:30 - 12:00) &amp; Fri (14:30 - 16:00) @ Engineering Building #1 Room 407</li>
        <li>lab : Fri (16:00 - 18:00) @ Engineering Building #4 PC Room 1 & 2 </li>
      </ul>
    </div>

    <div id="CourseSchedule">
      <h3>Course Schedule</h3>
      <ul>
        <li>Week 01 : 05/09/2019 - Introduction &amp; The Internet and World Wide Web</li>
        <li>Week 01 : 06/09/2019 - Basic HTML</li>
        <li>Week 02 : 12/09/2019 - No Lecture (추석 Thanksgiving)</li>
        <li>Week 02 : 13/09/2019 - No Lecture (추석 Thanksgiving)</li>
        <li>Week 03 : 19/09/2019 - Basic HTML</li>
        <li>Week 03 : 20/09/2019 - CSS for Styling </li>
        <li>Week 04 : 26/09/2019 - CSS for Styling</li>
        <li>Week 04 : 27/09/2019 - Page Layout </li>
        <li>Week 05 : 02/10/2019 - [특강] 게임 서버 개발 - 17:00 ~ 19:00 @제1학술관 101호 (supplementary lecture for 03/10/2019) </li>
        <li>Week 05 : 03/10/2019 - No Lecture (National Foundation Day) - supplementary lecture 02/10/2019</li>
        <li>Week 05 : 04/10/2019 - Page Layout </li>
        <li>Week 06 : 10/10/2019 - Basic PHP</li>
        <li>Week 06 : 11/10/2019 - Basic PHP</li>
        <li>Week 07 : 17/10/2019 - Basic PHP </li>
        <li>Week 07 : 18/10/2019 - Forms</li>
        <li>Week 08 : 24/10/2019 - Mid-Term Exam Preparation</li>
        <li>Week 08 : 25/10/2019 - Mid-Term Exam 13:00 ~ 16:00 @제1학술관 101호 (Educational Building I Room 101) & 4공학관 PC1실 (Engineering Building IV PC Room 1)</li>
        <li>Week 09 : 31/10/2019 - Forms</li>
        <li>Week 09 : 01/11/2019 - Forms</li>
        <li>Week 10 : 07/11/2019 - Relational Database &amp; SQL</li>
        <li>Week 10 : 08/11/2019 - Relational Database &amp; SQL</li>
        <li>Week 11 : 14/11/2019 - Relational Database &amp; SQL</li>
        <li>Week 11 : 15/11/2019 - JavaScript</li>
        <li>Week 12 : 21/11/2019 - JavaScript</li>
        <li>Week 12 : 22/11/2019 - DOM</li>
        <li>Week 13 : 28/11/2019 - DOM</li>
        <li>Week 13 : 29/11/2019 - Prototype &amp; Event</li>
        <li>Week 14 : 05/12/2019 - Ajax &amp; XML &amp; JSON</li>
        <li>Week 14 : 06/12/2019 - Ajax &amp; XML &amp; JSON </li>
        <li>Week 15 : 12/12/2019 - Web Services</li>
        <li>Week 15 : 13/12/2019 - Scriptaculous</li>
        <li>Week 16 : 19/12/2019 - Final Exam</li>
        <li>Week 16 : 20/12/2019 - Team Project Presentation</li>
      </ul>
    </div>

    <div id="TeamProject">
      <h3>Team Project</h3>
      <ul>
        <li><a target="_blank" href="팀플 안내 슬라이드">Team Project</a></li>
      </ul>
    </div>

    <div id="Assessments">
      <h3>Assessments</h3>
      <ul>
        <li>Attendance (10%)</li>
        <li>Midterm Exam (30%)</li>
        <li>Final Exam (30%)</li>
        <li>Team Project (30%)</li>
      </ul>
    </div>
  </article>
  <div>
      <a href="#" class="scrollup">
        <img src="../images/uparrow.png" width="32px" height="32px">
      </a>
  </div>

  <footer>
    <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
  </footer>

</body>

</html>
