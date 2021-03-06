<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/layout.css">
    <meta charset="utf-8">
    <title>SE Lab - Admin page</title>
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
    <h1>ADMIN PAGE</h1>
  </header>

    <h2>COURSE</h2>

    <div id = "course_list"><br>
    <img src="../images/web.png" width="35" height="32" class="left">
       <a href="webapp_admin.php">Web Application Development</a><br><br>
       <img src="../images/d.png" width="32" height="32" class="right">
       <a href="adva.php">Advanced Software Engineering</a><br>
    </div>
</body>
</html>