<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Cloud Performance,Impact of Memory on Cloud Performance,Cloud Performance Monitoring and Tuning">
  <meta name="author" content="Pramod Jana">

    <title>Cloud Is Everywhere | Cloud Performance</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header8.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside8.php';
        ?>
          
          
          </div>
          <div class="col-md-10">

       <center><h1><u>Cloud Performance</u></h1></center>       
              <p>Cloud performance refers to the performance of cloud applications and servers, as well as access speeds of network and storage I/O. It is measured primarily by the round-trip response time, which is the time travel between a user issued command and the receipt of the result from the cloud. Performance (besides server uptime) is an important part of the cloud SLA. It can be quantified in terms of the maximum response time experienced by the user. This must be a key matric for the performance of application and an important SLA criterion.</p>
              
              <p style="color:green">NOTE: Cloud providers have bandwidth from multiple providers and it has rarely been a cloud problem. But round-trip latency and response delay is a problem. In the cloud, the ability to control the latency is very minimal because the cloud resources and the users are spread over different locations across the globe.</p>
              
              <p>Another performance impact is from the number of hops. Within a cloud datacenter, resources need to communicate and the number of network hops between the resources and application add significantly to response delays. Cloud performance must be monitored. A robust monitoring system provides benefits such as tracking workload patterns, identifying peak resource utilization, and isolating potential problems and their causes.</p>
              
              <h2>Cloud Performance Monitoring and Tuning</h2>
              
              <p>There are various issues related to monitoring and tuning cloud performance. The performance of virtual machines is difficult to track since the resources are dynamic and based on the work load. All cloud aspects are not in the control of the particular organization. The division of control depends on the cloud service offered. For PaaS, for example, the provider controls the hardware, network, security, servers, operating systems, patches, development environment, database configuration, and compilers.</p>
              
              <p>The consumer controls the applications, use of resources, database instances, application-level security and authorization for users. There are also problems with selecting the right performance management tool. Any selected tool need to be customized and configured, to a large extent, to suit the cloud environment.</p>
              
              <h2>Impact of Memory on Cloud Performance</h2>
              
              <p>In cloud computing, memory performance and utilization is fundamental for overall performance. Large database transactions require massive amounts of memory to meet various expected performance levels. Moreover, multi-tenancy and simultaneous user tasks put a lot of demand on memory. The coordination between different cloud services to meet a particular demand requires in-memory tasks. Jobs need to be split and assembled after processing, which increases overhead cost.</p>
              
              <p>Another problem in cloud relates to memory leaks. It is a situation where a user job, database, or application does not return back the temporarily-allocated memory to the operating system even after it has been cleaned up and is no longer in use. This can be due to a bug, malware, or a deliberate user job that wants to consume all memory.</p>
              
              <p style="color:green">NOTE: Memory leaks with cloud VMs can lead to a gradual loss of available, free memory and eventually make the virtual machine unable to function. As such, the cloud provider must implement robust memory-leak detection mechanisms within the operating system and continuously monitor for such problems.</p>
              
              <p>Another cloud strategy is to use mem-cached, which is a memory-object caching system. It uses an algorithm to detect and store data that will be required in the near future, in the cache. This helps to improves data access speeds as well as boost response time.</p>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                            
              
              
                     </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer8.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>