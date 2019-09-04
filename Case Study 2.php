<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="software development and testing, public cloud">
  <meta name="author" content="Pramod Jana">



    <title>CLoud is Everywhere | case study 2</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header5.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside5.php';
        ?>
          
          
          </div>
          <div class="col-md-10">

              <center><h1><u>Software Development and Testing in a Public Cloud</u></h1></center>
              <p>A public cloud can also be used to do required software development and testing. In this case study, we observe an ISV planning to develop and market a new web-based application to enable art auctions. The existing internal IT hardware does not have free servers or storage to support development and testing of the new application. The ISV has developers and testers at various locations around the world. Many of these locations do not have offices, and the developers must work from home.</p>
              
              <p>For economic reasons, the ISV does not want to buy any hardware or hire additional IT staff. Another requirement for testing is to have several hundreds of servers on different hardware platforms and with different versions of operating systems. The test workload must simulate incoming requests from over a thousand servers. The users should be authenticated for access. After they are authorized, they should have access to the application development, staging, testing, and production code.</p>
              
              <p>The ISV selects two cloud providers to provide the following types of cloud.</p>
              <ul>
                  <li>The first cloud is meant for application development and storage of code versions.</li>
                  <li>The second cloud is meant for application testing. The ISV can create several thousand temporary VMs on various hardware platforms and manage workload from these VMs. These VMs runs on various hardware platforms nd manage workload from these VMs. These VMs runs on different versions of Microsoft Windows, Linux TM, and SolarisTM, operating systems.</li>
              </ul>
              
              
              <p>To authenticate the users, the ISV selects an Identity Management (IdM) provider for user moderation. All corporate and remote users are authorized by the provider, which then allows Single Sign-On (SSO) access to the development and the test clouds and Role-Based Access Control (RBAC) to enable certain rights and privileges to the users. The IdM provider keeps a log of all user logins, sessions, activities, and the rights utilized by the users.</p>
              
              
              
              
          </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer5.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>