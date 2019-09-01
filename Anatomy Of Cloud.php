
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A platform where you can excell in the field of cloud computing">
    <meta name="keywords" content="Anatomy of cloud,Cloud Documenation">
    <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">


    <title>Cloud is Everywhere | Anatomy Of Cloud</title>
      
  </head>
  <body id="body">
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
              
              <center><h1><u>Anatomy Of Cloud</u></h1></center>
              <ol>
                  <li>Provisioning and Configuration Module</li>
                  <li>Monitoring and Optimization</li>
                  <li>Metering and Chargeback </li>
                  <li>IT Service Management</li>
                  <li>Orchestration</li>
                  <li>CMDB (Configuration Management Database)</li>
                  <li>Cloud Lifecycle Management Layer</li>
                  <li>Service Catalog</li>
              </ol>
              
              
              <h2>Provisioning and Configuration Module</h2>
              <p>It is the lowest level of cloud and typically resides on bare hardware (as a firmware) or on the top of hypervisor layer. Its function is to abstract the underlying hardware and provide a standard mechanism to spawn instance of virtual machine on demand. It also handles the post-configurations of the operating systems and applications residing on the VM</p>
              
              <h2>Monitoring and Optimization</h2>
              <p>This layer handles the monitoring of all services, storage, networking and applications components in cloud. Based on the statistics, it could perform routine functions that optimize the behaviour of the infrastructure components and provide relevant data to the cloud administrator to further optimize the configuration for maximum utilization and performance,</p>
              
              <h2>Metering and Chargeback </h2>
              <p>This layer provides functions to measure the usage of resources in cloud. The metering module collects all the utilization data per domain per use. This module gives the cloud administrator enough data to measure ongoing utilizations of resources and to create invoices based on the usage on a periodic basis.</p>
              
              <h2>Orchestration</h2>
              <p>Orchestration is a central to cloud operations. Orchestration converts requests from the service management layer and the monitoring, chargeback modules to appropriate action item which are then submitted to provisioning and configuration module for final closure. Orchestration updates the CMDB in the process.</p>
              
              <h2>CMDB(Configuration Management Database)</h2>
              <p>It is a central configuration repository wherein all the meta data and configuration of different modules, resources is kept and updated in the real time basis. The repository can then be accessed using standards protocols like SOAP by third party software and integration components. All updates in CMDB happen in real time as requests get processed in cloud.</p>
              
              <h2>Cloud lifecycle Management Layer(CLM)</h2>
              <p>This layer handles the co-ordination of all other layers in cloud.All requests internal and external are addressed to the CLM layer first. CLM may internally route requests and actions to other layers for further processing.</p>
              
              <h2>Service Catalog</h2>
              <p>It is central to the definition of cloud, SC defines what kind of services the cloud is capable of providing and at what cost to the end user. SC is the first thing that is drafted before a cloud is architected. The service management layer consults SC before it processes any request for a new resource</p>
              
              
              
              
              
              
              
              
              
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
