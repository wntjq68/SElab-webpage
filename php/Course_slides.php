<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/Course_slides_layout.css">
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
    <h1>Web Application Development <span>  -  Slides</span> <a class="slide" href="Course_home.php" >Home</a></h1>
  </header>


  <article>
    <section>
      <table class="lefttable">
        <tr>
          <th></th>
          <th>Lecture Slides</th>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">0. Introduction</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">1. The Internet &amp; World Wide Web</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">2. Basic HTML</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">3. CSS for Styling</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">4. Page Layout</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">5. PHP</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">6. Forms</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td>
            <a target="_blank" href="">7. Relational Database &amp; SQL</a>
            [<a target="_blank" href="">DBs</a>]
          </td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">8. JavaScript</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">9. Document Object Model (DOM)</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">10. Prototype</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">11. Events</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">12. Ajax, XML, JSON</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">13. Web Services</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">14. Scriptaculous</a></td>
        </tr>
      </table>
    </section>

    <section>
      <table class= "righttable">
        <tr>
          <th></th>
          <th>Labs</th>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">0. Introduction - Week 3</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">1. About Me (HTML) - Week 4</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">2. CSS - Week 5</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">3. CSS Design &amp; Layout - Week 6</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">4. Movie Review (HTML, CSS, Layout)- Week 7</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">5. Basic PHP - Week 9</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">6. Forms - Week 10</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">7. SQL - Week 11</a></td>
        </tr>
        <tr>
          <td class="center"><div class="circle"></div></td>
          <td><a target="_blank" href="">8. JavaScript - Week 12</a></td>
        </tr>
      </table>
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
