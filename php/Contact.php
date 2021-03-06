<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/Contact_layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">

  <meta charset="utf-8">
  <title>Software Engineering Lab - Contact</title>
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
    <h1>CONTACT</h1>
  </header>

  <article>
    <section>
      <h2>Address</h2>

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.9128996914096!2d126.8330728654259!3d37.29719807984926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b6eed8ccc52cd%3A0xc955f3433f16dc79!2z7ZWc7JaR64yA7ZWZ6rWQIOygnDPqs7XtlZnqtIA!5e0!3m2!1sko!2skr!4v1570264060597!5m2!1sko!2skr"
        allowfullscreen=""></iframe>
      <div class="info">
        <p>경기도 안산시 상록구 한양대학로 55 제3공학관 421</p>

        <p>Engineering Building #3, Room 421
          <br>HANYANG UNIVERSITY ERICA CAMPUS
          <br>55, Hanyangdaehak-ro, Sangnok-gu, Ansan-si, Gyeonggi-do
        </p>
        <p>selab.hanyang.ac.kr</p>
        <p>+82-31-400-4754</p>
      </div>
    </section>
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
