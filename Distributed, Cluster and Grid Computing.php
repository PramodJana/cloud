<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Distributed, Cluster, Grid computing">
    <meta name="keywords" content="Distributed, Cluster, Grid computing">
    <meta name="author" content="Pramod Jana">

   
    <title>Cloud Is Everywhere | Distributed, Cluster and Grid COmputing</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
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
              
              
              <center><h1><u>Distributed, Cluster, Grid computing</u></h1></center>
<p>“Cloud computing is a model that is constantly evolving”.
  In tracking the evolution of cloud we will review the system which played
  important role for the realization of cloud system.</p>

  <center>
  <img src="img1/evolution%20of%20cloud%20computing.png" class="img-fluid"
  alt="Responsive image" width="400px">
</center>
  
  <p>With the advent of mainframe computing in the 1950s, the fundamental concept
    of cloud computing originated. But it wasn't until the past decade or so that
    cloud computing really started to develop into the behemoth we know today.</p>

<h2><u>Mainframe computer</u></h2>
<p>A mainframe is a general purpose computing platform incorporating in it architectural
  definition the essential functionality required by its applications.The mainframe
  computer was a physically very large, centralized computing platform with all of
  the computing power (CPU), memory, and storage systems used by end-users. Multiple
  users were capable to access a central computer through dumb terminals, whose only
  function was to provide access to the mainframe. These dumb terminals can be thin client
  or thick client devices in today’s computing era.</p>

  <h3>Mainframes are designed to handle:-</h3>
  <ul>
    <li>Very high volume input and output (I/O).</li>
    <li>Throughput computing.</li>
    <li>Massive databases and file processing.</li>
  </ul>

  <h3>Cons:-</h3>
  <p>Since the costs to buy and maintain mainframe computers were too high and
    there was no need of large storage capacity and processing power that a
    mainframe computing provided at a time.</p>

    <h2><u>Cluster Computing</u></h2>
    <p>A cluster is a type of parallel or distributed computing system, which
      consists of a collection of stand-alone computers working together as a
      single integrated computing resource unified through software and networking.
      At the most fundamental level, when two or more computers are used together
      to solve a problem, it is considered a cluster. Clustering is used for parallel
      processing, fault tolerance and load balancing</p>

<h3>Components of a cluster computing:-</h3>
<ul>
  <li>Multiple standalone computers (PCs, Workstations, or SMPs).</li>
    <li>Operating systems.</li>
    <li>High-performance interconnects.</li>
    <li>Middleware.</li>
    <li>Memory.</li>
    <li>Parallel programming environments and applications.</li>
  </ul>

  <h3>Characteristics:-</h3>
  <p>Cluster computing is used for high performance computing and high availability computing.</p>

  <ul>
    <li>Tightly coupled computers.</li>
    <li>Single system image.</li>
    <li>Centralized job management and scheduling system.</li>
  </ul>

  <p>Processing power, cost efficiency, expandability and availability are the benefits
    offered by cluster computing with security, system Image and scalability as its major
    disadvantage.</p>

    <p>Concurrent with this evolution, capable instrumentation, more powerful processors,
      and higherfidelity computer models serve to continually increase the data throughput
      required of the clusters. This trend will apply pressure to the storage systems used
      to support these I/O-hungry applications, and also have prompted a wave of new storage
      solutions based on the same scale- out approach as cluster computing.</p>

<h2><u>Grid Computing</u></h2>
<p>In grid computing, the focus is on moving a workload to the location of the needed
  computing resources, which are mostly remote and are readily available for use.
  Grid computing is a network in which each computing resources are shared with every other
  computer in the system.</p>

<p>It is pool of computing resources from multiple locations to fulfill a common goal.</p>

<p>The grid can be assumed as a distributed system with non-interactive workloads that
  involve a large number of files. The computers in a grid also tend to be more heterogeneous
  and geographically dispersed .Although a single grid can be dedicated to a particular
  application, commonly a grid is used for a variety of purposes.</p>

  <p>Grids are often constructed with general-purpose grid middleware software libraries
    and the sizes can be quite large.</p>

  <p>A grid computing system can be as simple as a collection of similar computers
    running on the same operating system or as complex as inter-networked systems comprised
    of every computer platform.</p>

    <h3>The Basic idea of Grid Computing is to:-</h3>
    <p>Utilize the ideal CPU cycles and storage of millions of computer systems across the
      network function as a flexible, pervasive, and inexpensive accessible pool that could
      be harnessed by anyone requires, in same way as power companies and electrical grid.</p>

<h3>Grid Computing Characteristics:-</h3>
<p>It is the superset of distributive computing. Used for high throughput computing as well
  as high performance computing depending on the underlying installation setup.</p>

<p>Grid computing though provides a pool of computation resources, but it's different than
  cloud computing. It refers to leveraging several computers in parallel to solve a
  particular, individual problem, or to run a specific application.</p>

<p>Clouds are much more granular and handle time-dependent workloads. Cloud resources
  can begeographically distributed, but only to a few locations, as compared to thousands
  or millions feeding a grid project.</p>

<p>Clouds pose a threat to the grid computing approach. The centralization of servers in
  the cloud leaves fewer idle cycles to scavenge; the server-mobile model eliminates
  underutilized PC desktops.</p>

              
              
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