<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Private cloud, central and state government">
  <meta name="author" content="Pramod Jana">



    <title>Cloud is Everywhere | Case Study 3</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:55px; font-family: 'PT Serif', serif;" id="body">
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

              <center><h1><u>Private cloud for central and state Governments</u></h1></center>
              
              <p>The central government of INDIA has several thousands of servers for various ministries such as power, defense and telecom. It has become a nightmare to maintain and upgrade each IT and DC infrastructure for each application. While some environments may have too many idle hardware resources.  Due to privacy concerns, some ministries always maintain their independent infrastructure but others can be consolidated.</p>
              
              <p>Likewise, the state governments have infrastructure islands that are under-utilized or in dire need of upgrades. There are many other administrative problems, such as an excessive number of user accounts, unutilized licenses, etc. Users, such as bureaucrats and ministers, need to have secure communication between the state and central governments to exchange data. The government cannot put the data or use applications in a public cloud because of privacy, security, and regulatory requirements, which makes it mandatory to store financial and citizen-related data within the borders of the country.</p>
              
              <p>
                  After deliberation, the central government of India decided to have a private  cloud built. Different ministries will use the resources in the private cloud using a front-end service catalog.They will use a server virtualization technology, such as Kernel-based Virtual machine (KVM), VMware, Citrix XenServer, or Microsoft Hyper-V, with a Storage Area Network(SAN) and Network Attached Storage(NAS). Front-end applications, such as vendor management and procurement, will be hosted on the private cloud. Back-end application, such as accounting, payroll, and productivity application, will also be put on the private cloud as well as citizen and financial data. The state governments will also have a private cloud, as shown in figure below
              </p>
              
              <br>
			  <center>
              <img src="img1/private%20cloud%20implementation%20for%20state%20and%20central%20government.jpg" class="img-fluid" alt="Responsive image" width="500px">
              </center>
			  <br><br>
              
              <p>The local government of each state will use the services of a state private cloud or use the available infrastructure to host its own applications. Each state’s private cloud will have a VPN to the central cloud. Single Sign-On (SSO) will enable some users at the state level to automatically access and use the applications on the central government cloud. This will help to lower Total Cost of Ownership (TCO), save energy, and secure communication between the state and the central government.</p>
              
              
              
              
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