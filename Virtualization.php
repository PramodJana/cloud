<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Knowledge about Virtualization">
    <meta name="keywords" content="Virtualization">
    <meta name="author" content="Pramod Jana">

    
    <title>Cloud Is Everywhere | Virtualization</title>
    
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:55px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header2.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside2.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
              
              <center><h1><u>Virtualization</u></h1></center>
<p><b>Virtualization is a large umbrella of technologies that are
  meant to provide an abstract environment and also allows creation of secure,
  customizable and isolated execution environment for running applications.
  Virtualization not only provides virtual environment for executing application,
  but also for storage, memory and networking.</b></p>

  <p>It is a core technology of cloud computing. Virtualization allows creation of different computing
environment which are virtual in nature. During the process of virtualization simulation of exposed
interface of guest generally occurs. Virtualization allows multiple operating system instances to run
concurrently on a single computer.</p>

<h2><u>Significant terms:</u></h2>

<h3>Virtual Machines</h3>
<p>It is the abstraction of a real machine using software that provides an operating environment which
can run or host a guest operating system. Virtual machines are created and managed by virtual
machine monitors.</p>

<h3>Guest Operating System</h3>
<p>Operating system which is running inside the created virtual machine is defined as guest operating
system.</p>

<h3>Hypervisor</h3>
<p>Hypervisor, also known as a virtual machine manager, is a program that allows abstraction of
underlying hardware .It controls and , allocate resources each operating system in turn and making
sure that the guest operating systems cannot disrupt each other.</p>

<h3>NEED:</h3>
<ul>
    <li>With full virtualization, the virtual machine monitor exports a virtual machine abstraction
      identical to a physical machine, so that standard operating systems can run just as they
      would on physical hardware.</li>
    <li>Virtualization enables enterprises to consolidate multiple servers without sacrificing
      application isolation, scale their infrastructure as their needs grow, increase
      availability through dynamic provisioning and relocation of critical systems.</li>
    <li>Flexibility: more than one instance can be created.</li>
    <li>Availability: temporary migration is possible, if physical node is down.</li>
    <li>Scalability: increase and decrease in demand of resources.</li>
    <li>Hardware utilization: virtual machines utilize hardware resources that are left
      idle in an efficient manner.</li>
    <li>Security: Using multiple virtual machines, it is possible to separate services by
      running one service on each virtual machine. This approach is also called jailing of
      services.</li>
    </ul>

    <h2><u>Taxonomy of Virtualization:</u></h2>
    <p>Classification of virtualization takes place depending upon the
      computing resources and application-</p>
	  <center>
      <img src="img1/types%20of%20virtualization.png" class="img-fluid"
      alt="Responsive image" width="400px">
	  </center><br>

<p>    <b>Process level:</b> It is type of emulation technique implemented on top of operating
  system with full control over hardware.<br>
      <b>System level:</b> It is implemented directly on hardware and do not require or
      require minimum support from operating system.<br>
      <b>Application virtualization:</b> It is virtualization technique allowing applications
      to be run on runtime environments which does not support all original features required
      by applications.<br>
      Example: Wine<br>

      <b>Operating System Virtualization:</b> Different and separated execution environments for
      application are created and managed concurrently in operating system virtualization. The kernel
      plays important role in this type of virtualization.<br>
      Example: IBM Logical Partitions(LPAR).<br>

      <b>Hardware virtualization:</b> It is a virtualization technique that provides an
      execution environment in terms of computer hardware, on top of which a guest operating
      system can run.<br>
      Example: Hyper-V<br>
    </p>

    <h3>Benefits:</h3>
              <br><br>
			  <center>
               <img src="img1/benefits%20of%20virtualization.png" class="img-fluid"
      alt="Responsive image">
	  </center><br>
              <br>
    <p>Virtualization provides several benefits:</p>
      <ul>
        <li>Greater efficiency and company agility.</li>
        <li>Ability to more-effectively manage resources.</li>
    <li>Self containment.</li>
    <li>Server consolidation.</li>
    <li>Managed execution.</li>
</ul>


<h3>Disadvantages:</h3>
<p>There are various drawbacks of virtualization along with benefits .They are-</p>
  <ul>
    <li> Security threats and risk.</li>
    <li>Performance degradation.</li>
    <li>Management of virtualized resources is a complicated task.</li>
    <li>Does not support all applications.</li>
  </ul>



              
              
               </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer2.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>