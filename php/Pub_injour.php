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
