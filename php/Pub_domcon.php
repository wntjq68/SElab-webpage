<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/pub_layout.css">


  <meta charset="utf-8">
  <title>Software Engineering Lab - Publications</title>
</head>

<body>

  <nav>
    <a href="Home.php"><img src="../images/selab.png" align="center" width="72" height="26"></a>
    <ul class="menu">
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
    <h1>PUBLICATION</h1>
  </header>


  <article>
    <table>
      <tr>
        <th>
          Domestic Conference </th>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Zhiqiang2.pdf">
        <td class="even">Zhiqiang Wu, Xin Chen and Scott Uk-Jin Lee, "Permissions based Automatic Android Malware Repair using Long Short Term Memory," In Proc. 한국컴퓨터정보학회 동계학술대회, 2019, pp.387-388.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_YongTaek0.pdf">
        <td>YongTaek Oh and Scott Uk-Jin Lee, "XACML 정책 작성시 요청에 따른 효과적인 정책 평가 요인 수집 방법," In Proc. Korea Software Congress 2017, 2017, pp.443-445.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Hakjin0.pdf">
        <td class="even">Hakjin Lee and Scott Uk-Jin Lee, "라즈베리파이 기반 기능성 게임 개발을 위한 모바일 플랫폼," In Proc. Korea Software Congress 2017, 2017, pp.586-588.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_HyungLak1.pdf">
        <td>HyungLak Kim and Scott Uk-Jin Lee, "Automated Verification Method for Java-based Multithreaded Software," In Proc. 16th Korea Computer Congress, 2016, pp.416-418.</td>
      </tr>
      <tr data-href="papers/../papers/International_Conference/[IP]_Isma4.pdf">
        <td class="even">Isma Farah Siddiqui, Asad Abbas and Scott Uk-Jin Lee, "Comparative Analysis of Centralized Vs. Distributed Locality-based Repository over IoT-Enabled Big Data in Smart Grid Environment," In Proc. 한국컴퓨터정보학회 동계학술대회, 2017,
          pp.75-78.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Asad2.pdf">
        <td>Asad Abbas, Isma Fara Siddiqui and Scott Uk-Jin Lee, "Feature Modeling with Multi-Software Product Line of IoT Protocols," In Proc. 한국컴퓨터정보학회 동계학술대회, 2017, pp.79-82.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Hyunglak0.pdf">
        <td class="even">Hyunglak Kim and Scott Uk-Jin Lee, "Improvement of Crowdsourcing based Software Development Process," In Proc. 18th Korea Computer Congress, 2016, pp.654-656.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Gayeon0.pdf">
        <td>Gayeon Kim and Scott Uk-Jin Lee, "The Necessity of Multithread Feature in Node.js," In Proc. 18th Korea Computer Congress, 2016, pp.672-674.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Zhiqiang1.pdf">
        <td class="even">Zhiqiang Wu and Scott Uk-Jin Lee, "The Application of Banker's Algorithm in Order Scheduling Management for Deadlock Avoidance," In Proc. 18th Korea Computer Congress, 2016, pp.660-662.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Zhiqiang0.pdf">
        <td>Zhiqiang Wu, Seon-Woong Kim, Abdul Rahim Mohamed Ariffin and Scott Uk-Jin Lee, "An Efficient Attendance Management System Based on Browser/Server Technique," In Proc. 18th Korea Computer Congress, 2015, pp.505-507.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Asad1.pdf">
        <td class="even">Asad Abbas, Isma Farah Siddiqui, Gayeon Kim and Scott Uk-Jin Lee, "Aspect-Oriented Programing based Process Synchronization in Concurrent Systems," In Proc. 18th Korea Computer Congress, 2015, pp.502-504.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Abdul0.pdf">
        <td>Abdul Rahim Mohomed Ariffin, Gayeon Kim and Scott Uk-Jin Lee, "Comparative Analysis on Tools for Verifying Multithreaded Applications," In Proc. 18th Korea Computer Congress, 2015, pp.470-472.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Seon-Woong0.pdf">
        <td class="even">Seon-Woong Kim, Byeong-Jin Park and Scott Uk-Jin Lee, "Recent Trends of Fintech and Comparative Analysis Samsung-Pay and Apple-Pay," In Proc. 17th Korea Computer Congress, 2015, pp.2054-2056.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Asad0.pdf">
        <td>Asad Abbas, Isma Farah Siddiqui and Scott Uk-Jin Lee, "XML-based Feature Modeling for Variability Management in Complex Software Product Line," In Proc. 17th Korea Computer Congress, 2015, pp.582-584.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Da-Hae0.pdf">
        <td class="even">Da-Hae Sung and Scott Uk-Jin Lee, "Editor Feature to Effectively Mange Source Code Modification," In Proc. Korean Institute of Information Scientists and Engineers Conf. 2014, 2014, pp.1696-1698.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Geunhwan0.pdf">
        <td>Geunhwan Park and Scott Uk-Jin Lee, "Management System and Mobile Application to Improve Efficiency and Reliability of Vehicle Service Center," In Proc. Korean Institute of Information Scientists and Engineers Conf. 2014, 2014,
          pp.1554-1556.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Isma0.pdf">
        <td class="even">Isma Farah Siddiqui and Scott Uk-Jin Lee, "A Framework for Verifyin Consistency of SQL-DB Ontology using Alloy," In Proc. 16th Korea Computer Congress, 2014, pp.497-499.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jiang1.pdf">
        <td>Jiang Hua and Scott Uk-Jin Lee, "Extend the Mind Map propose a requirements specification and analysis tools," In Proc. 16th Korea Conference on Software Engineering, 2014, pp.353-356.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jaeho1.pdf">
        <td class="even">Jaeho Choi and Scott Uk-Jin Lee, "XACML policy view to create policies for efficient access control," In Proc. 16th Korea Conference on Software Engineering, 2014, pp.457-460.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jiang0.pdf">
        <td>Jiang Hua and Scott Uk-Jin Lee, "Extended Mind Map for Software Requirement Specification," In Proc. 15th Korea Computer Congress, 2013, pp.517-519.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jaeho0.pdf">
        <td class="even">Jaeho Choi and Scott-Uk-Jin Lee, "Vulnerability of Web-Storage in HTML5," In Proc. In Proceedings of the 15th Korea Computer Congress, 2013, pp.715-717.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jaejin1.pdf">
        <td>Jaejin Kim and Scott Uk-Jin Lee, "Conflict Detection for XACML Policies," In Proc. 15th Korea Computer Congress, 2013, pp.550-552.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Conference/[DP]_Jaejin0.pdf">
        <td class="even">Jaejin Kim, Scott Uk-Jin Lee and Amna Al Dhaheri, "Integrated Access Control Model Propose In Cloud Computing Environment," In Proc. 15th Korea Conference on Software Engineering, 2013, pp.266-269.</td>
      </tr>
    
    </table>
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
