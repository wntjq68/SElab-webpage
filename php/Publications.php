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
        <th>International Conference
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Zhiqiang1.pdf ">Zhiqiang Wu, Xin Chen and Scott Uk-Jin Lee, "Identifying Latent Android Malware from Application's Description using LSTM," In Proc. International Conference on
            Information, System and Convergence Applications, 2019, pp.40-42.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Mohsin0.pdf"> Mohsin Javaid Siddiqui, Xintao Li, Isma Farah Siddiqui, Asad Abbas and Scott Uk-Jin Lee, "Comparative Analysis of GUI Development for Android Application by utilizing MDA
            Approach," In Proc. International workshop on convergence information technology 2017, 2017, pp.151-154.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Zhiqiang0.pdf">Zhiqiang Wu, Asad Abbas and Scott Uk-Jin Lee, "Multiple Concurrency Anomalies Classification for Mobile Applications using Support Vector Machine," In Proc.
            International Conference on Computing Convergence and Applications (ICCCA), 2018, pp.103-106.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad4.pdf">Asad Abbas, Zhiqiang Wu, Mohsin Javid Siddiqui, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Contextual Variability Management of Multi-Software Product Line," In Proc.
            International Conference on Computing Convergence and Applications 2017, 2017, pp.71-74.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_I.F.0.pdf">Isma Farah Siddiqui, Nawab Muhammad Faseeh Qureshi, Muhammad Akram Shaikh, Bhawani Shankar Chowdhry, Asad Abbas and Scott Uk-Jin Lee, "Knowledge-based stuck-at fault
            analysis for wireless IoT smart meters in smart grid," In Proc. 2nd Global Conference on Wireless and optical Communications, 2017</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad3.pdf">Asad Abbas, Hyung-Lak Kim, Isma Farah Siddiqui, Ali Kashif Bashir and Scott Uk-Jin Lee, "Contextual Variability Management of IoT Applications Using Agent-Base Modeling with
            Software Product Line," In Proc. International Conference on Computing Convergence and Applications 2017, 2017, pp.13-16.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Asad2.pdf">Asad Abbas, Isma Farah Siddiqui and Scott Uk-Jin Lee, "XML-based Feature Modeling of IoT Applications," In Proc. International Conference on Computing Convergence and
            Applications (ICCCA), 2016, pp.163-166.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad1.pdf">Asad Abbas, Zhiqiang Wu, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Challenges of Multi-Objective Optimization in Feature Model of Software Product Line," In Proc. 3rd
            International Conference on Information, System and Convergence Applications 2016, 2016, pp.15-17.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Abdul1.pdf">Abdul Rahim Mohamed Ariffin and Scott Uk-Jin Lee, "Generic Modeling for Pthreads with Cilk," In Proc. 3rd International Conference on Information, System and
            Convergence Applications 2016, 2016, pp.30-32.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Isma3.pdf">Isma Farah Siddiqui, Asad Abbas and Scott Uk-Jin Lee, "HBAC: An access control over Semantics-enabled Smart Grids to enable energy-efficiency and lifetime optimization," In Proc.
            2nd International Conference on Information and Convergence Technology for Smart Society 2016, 2016, pp.9-11.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Asad0.pdf">Asad Abbas, Zhiqiang Wu, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Optimized feature selection with crosscutting concerns in software product line feature model," In
            Proc. 2nd International Conference on Information and Convergence Technology for Smart Society 2016, 2016, pp.1-3.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Isma2.pdf">Isma Farah Siddiqui and Scott Uk-Jin Lee, "Privacy-Aware Smart Learning: Providing XACML as a Service in Semantic Web based Smart Environment," In Proc. 7th International
            Conference on Internet Symp., 2015, pp.97-101.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Abdul0.pdf">Abdul Rahim Mohamed Ariffin, Isma Farah Siddiqui, Gayeon Kim and Scott Uk-Jin Lee, "A Survey on Correctness Properties for Multithreaded Applications," In Proc. 2nd
            International Conference on Information and Convergence Technology for Smart Society 2015, 2015, pp.1-3.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Gayeon0.pdf">Gayeon Kim, Abdul Rahim Mohomed Ariffin and Scott Uk-Jin Lee, "An Effective Approach for Parallel Processing with Multiple Microcontrollers," In Proc. 2nd International
            Conference on Information, System and Convergence Applications 2015, 2015, pp.142-145.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Isma1.pdf">Isma Farah Siddiqui and Scott Uk-Jin Lee, "A Novel Approach for Integrating Semantic Web Techniques into Smart Education Enviroment," In Proc. 1st International
            Conference on Information and Convergence Technology for Smart Society 2015, 2015, pp.127-131.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Jaeho0.pdf">Jaeho Choi and Scott Uk-Jin Lee, "Vulnerability of Web-Storage in HTML5 for Web and Mobile Application," In Proc. 3rd Advances in Computing and Information Technology 2014, 2014,
            pp.112-115.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Isma0.pdf">Isma Farah Siddiqui, Nawab Muhammad Faseeh, Scott Uk-Jin Lee and Mukhtiar Ali Unar, "An Advanced Hyper-Efficient Design to Detect Random Peer-to-Peer Botnets," In
            Proc. 3rd International Multi-Topic Conference 2013, 2013, pp.251-258.</a></td>
      </tr>
      <tr>
      <tr>
        <th>
          International Journal </th>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_Isma4.pdf">Isma Farah Siddiqui, Nawab Muhammad Faseeh Qureshi, Muhammad Akram Shaikh, Bhawani Shankar Chowdhry, Asad Abbas, Ali Kashif Bashir and Scott Uk-Jin Lee, "Stuck-at Fault
            Analytics of IoT Devices Using Knowledge-based Data
            Processing
            Strategy in Smart Grid," J. Wireless Personal Communications, vol. 2018, pp. 1-15, Apr. 2018.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_Asad5.pdf">Asad Abbas, Isma Farah Siddqui, Scott Uk-Jin Lee, Ali Kashif Bashir, Waleed Ejaz and Nawab Muhammad Faseeh Qureshi, "Multi-Objective Optimum Solutions for IoT-Based Feature Models of
            Software Product Line," J. IEEE Access, vol. 6, pp.
            12228-12239, Mar. 2018.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_Zhiqiang0.pdf">Zhiqiang Wu, Asad Abbas, Xin Chen and Scott Uk-Jin Lee, "Classification of concurrent anomalies for iot software based support vector machine," J. Journal of
            Theoretical and Applied Information Technology, vol. 95, no. 3,
            pp. 832-842,
            Feb. 2018.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_Isma3.pdf">Isma Farah Siddiqui, Scott Uk-Jin Lee, Asad Abbas and Ali Kashif Bashir, "Optimizing Lifespan and Energy Consumption by Smart Meters in Green-Cloud-Based Smart Grids," J. IEEE
            Access, vol. 5, pp. 20934-220945, . 2017.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_Isma2.pdf">Isma Farah SIddiqui, Nawab Muhammad Faseeh Qureshi, Scott Uk-Jin Lee, Mukhtiar Ali Unar. "An advanced hyper-efficient design to detect random peer-to-peer botnets."
            Communications in Computer and Information Science, vol
            414, pp.
            251-258, 2014.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_Asad4.pdf">Asad Abbas, Isma Farah Siddqui, Scott Uk-Jin Lee, and Ali Kashif Bashir. "Binary Pattern for Nested Cardinality Constraints for Software Product Line of IoT-based Feature Models."
            IEEE Access, vol. 5, pp. 3971-3980, Mar.2017.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_ASAD3.pdf">ASAD ABBAS, ISMA FARAH SIDDIQUI and SCOTT UK-JIN LEE, "CONTEXTUAL VARIABILITY MANAGEMENT OF IOT APPLICATION WITH XML-BASED FEATURE MODELLING," J. Journal of Theoretical
            and Applied Information Technology, vol. 95, no. 6,
            pp. 1300-1308,
            Mar. 2017.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_Isma1.pdf">Isma Farah Siddiqui, Asad Abbas, Abdul Rahim Mohamed Ariffin and Scott Uk-Jin Lee, "A Comparative Study of Multithreading APIs for Software of ICT Equipment," J. Indian Journal of
            Science and Technology, vol. 9, no. 48, pp. 1-5, Dec.
            2016.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_ISMA0.pdf">ISMA FARAH SIDDIQUI, ASAD ABBAS and SCOTT UK-JIN LEE, "A HIDDEN MARKOV MODEL TO PREDICT HOT SOCKET ISSUE IN SMART GRID," J. Journal of Theoretical and Applied
            Information Technology, vol. 94, no. 2, pp. 408-415, Dec. 2016.</a>
        </td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_ASAD2.pdf">ASAD ABBAS, ISMA FARAH SIDDIQUI and SCOTT UK-JIN LEE, "GOAL-BASED MODELING FOR REQUIREMENT TRACEABILITY OF SOFTWARE PRODUCT LINE," J. Journal of Theoretical and Applied Information
            Technology, vol. 94, no. 2, pp. 327-334, Dec. 2016.
          </a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_Asad1.pdf">Asad Abbas, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Multi-Objective Optimization of Feature Model in Software Product Line: Perspectives and Challenges," J. J. Indian
            Journal of Science and Technology, vol. 9, no. 45,
            pp. 1-7, Dec.
            2016.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_journal/[IJ]_Abdul0.pdf">Abdul Rahim Mohamed Ariffin, Isma Farah Siddiqui and Scott Uk-Jin Lee, "An Empirical Study over Correctness Properties for Multithreaded Programs," J. Indian Journal of Science and
            Technology, vol. 9, pp. 1-8, May 2016.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_journal/[IJ]_Asad0.pdf">Asad Abbas, Zhiqiang Wu, Isma Farah Siddiqui and Scott Uk-Jin Lee, "An Approach for Optimized Feature Selecton in Software Product Lines using Union-Find and Genetic
            Algorithms," J. Indian Journal of Science and Technology,
            vol. 9, pp.
            1-9, May 2016.</a></td>
      </tr>
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
      <tr>
        <th>
          Domestic Journal </th>
      </tr>
      <tr data-href="papers/../papers/Domestic_Journal/[DJ]_Youn-geun0.pdf">
        <td class="even">Youn-geun Ahn, Gichan Lee and Scott Uk-Jin Lee, "Effective Methodology for Collecting Contextual Factors and Information that Affects The XACML Policy Evaluation," J. KIISE Transactions on Computing Practices, vol. 24, no.
          2, pp. 82-87,
          Feb. 2018.</td>
      </tr>
      <tr data-href="papers/../papers/Domestic_Journal/[DJ]_Isma0.pdf">
        <td>Isma Farah Siddiqui and Scott Uk-Jin Lee, "Access Control as a Service for Information Protection in Semantic Web based Smart Environment," J. Journal of Korean Society for Internet Information, vol. 17, no. 5, pp. 9-16, Oct. 2016.</td>
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
