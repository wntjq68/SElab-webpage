<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/Research_layout.css">
  <meta charset="utf-8">
  <title>Software Engineering Lab - Research</title>
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
    <h1>RESEARCH</h1>
  </header>



  <article>
    <section>
      <img src="../images/security.png" width="100px" height="110px" alt="Internet_Security" />
      <p> Web &amp; Web security</p>
      <ul>
        <li>Semantic web</li>
        <li>Effective Access Control for Web Data</li>
        <li>Vulnerability Analysis and Detection for HTML5</li>
        <li>JavaScript and Hybrid Application</li>
      </ul>
    </section>


    <section>
      <img src="../images/intelligent.png" width="100px" height="110px" alt="Abstract_interpretation" />
      <p> Formal Engineering Methods</p>
      <ul>
        <li>Formal Specification, Validation, and Verification</li>
        <li>Model checking, Theorem Proving</li>
        <li>Ontology Reasoning, Constraint Solving</li>
      </ul>
    </section>


    <section>
      <img src="../images/requirement.png" width="100px" height="110px" alt="GeneralRElogo" id="RE" />
      <p class="cen">  Requirement Engineering</p>
      <ul>
        <li>Requirement Analysis, Validation and Conflict Detection</li>
        <li>Non-Functional Requirements Analysis and Prediction</li>
        <li>Product Line and Software Product Line</li>
        <li>Requirement Modeling with Extended Mind Map</li>
      </ul>
    </section>

    <section>
      <img src="../images/information.png" width="100px" height="110px" alt="realtime_construction_software" id="RT" />
      <p> Real-Time Software Engineering</p>
      <ul>
        <li>Real-Time Software and Process Modeling</li>
        <li>Real-Time Software Specification and Verification</li>
        <li>Real-Time Software Integration and Migration Control</li>
      </ul>
    </section>

    <section>
      <img src="../images/database.png" width="100px" height="110px" alt="xml_icom" />
      <p> Semi-structured Data</p>
      <ul>
        <li>XML and XML DB, Visualization of XML-Schema</li>
        <li>Ontology and RDF Store</li>
        <li>Semistructured Data Integration and Migration</li>
        <li>Optimization of X-Query</li>
        <li>Consistency Verification for Semistructured Data Manipulation</li>
        <li>Domain Specific Extension to XML &amp; Data Translation from RDBMS to XML DBMS</li>
      </ul>
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
