<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Comparision between Cloud Computing and Server Visualization">
    <meta name="keywords" content="Cloud Computing vs Server Visualization">
    <meta name="author" content="Pramod Jana">

  
    <title>Cloud Is Everywhere | Server Virtualization VS Cloud Computing</title>
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:55px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header1.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside1.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
              
              
              
              <center><h1><u>server virtualization vs cloud computing</u></h1></center>
         <p>Virtualization is a process of creating<b> VIRTUAL MACHINES</b> or replicas of
           computing resources.The server administrator uses a software applications (called hypervisor)
           to divide a physical server into several, isolated virtual environments called VMs,
           instances, or emulators with different operating systems, such as linux, windows, etc.
           Virtualization was first developed in the early 1960s  .
           It was used to partition large, mainframe hardware to improve utilization.
           Large mainframes could be used to host upto 10000 virtual machines.
           Mainframes provide many advantages, such as dynamic capacity management, high
           energy efficiency, transparent multitenancy for users and applications,
           flawless reliability, better performance, and tight security.</p>

           <p>Virtualization supports running of multiple virtual machine on a single physical machine.
             It is one of the fundamental elements or buliding blocks of cloud computing.
             It enables efficient use of resourses and applications and protects services
             from hardware failure. This means services can still function independent of the hardware.
             If an underlying physical hardware fails, the virtual machines are transferred to
             another physical healthy server. If a virtual machines needs more resources to meet
             user loads , it dynamically schedules more rresources for the VM. However, it does not
             provide load balancing across VMs nor does it improvrs communication between VMs.
             The hypervisor improves the security of the VM s but does nothing to impose security within
             the OS internal or components.</p>

             <p>Cloud computing takes the virtualization to the next level by providing load-balancing
               provisioning and de-provisioning of computing resources, self-service portals,
               and pay-per-use billing. Cloud computing tightens the security by regulating user
               authentication and use of cloud resources and monitoring user traffic and activities.</p>

               <p style="color:green">Note: While cloud computing commonly uses virtualization,
                 it is possible to make a multi-tenant cloud service without server virtualization.</p>

              
              
              
              
              
              
          </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer1.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>