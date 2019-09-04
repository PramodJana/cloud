<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Components of a Public Cloud">
    <meta name="keywords" content="Components of a Public Cloud,Cloud">
    <meta name="author" content="Pramod Jana">

    <title>Cloud Is Everywhere | Components of a public cloud</title>
      
 
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

              <center><u><h1>Components of a Public Cloud</h1></u></center>
              <p>As a first step, it is important to understand the key components within a cloud. A successful architecture and deployment forms a basis for growth for years to come. The key expectations of a cloud are on-demand resources from a virtualized pool, self-service for clients, high performance and pay-per-use billing.</p>
              
              <p>To provide these features, the building blocks required for a private cloud are the following:</p>
             
              <ul>
                  <li><b>Support for Heterogeneous Systems-</b> The cloud should support a wide range of products and vendors such as open systems, commodity hardware, the latest hardware, software, and virtualizations solutions, existing infrastructure in a datacenter, and proprietary IT resources that an organization may have.<br>

                  The cloud management project you select must support all leading Original Equipment Manufacturers (OEM) and their products. This is required to meet future growth and gives you the flexibility needed to install new products and applications as cloud resources</li>
                  <li><b>Virtualization-</b> This is the foundation of any cloud. A hypervisor is used to group the resources(CPU, storage, network ports, memory) of all the servers, storage, and other devices into a common pool. The hardware resources, including the identity and number of individual physical servers, are virtualized to form  a pool of Virtual Machines(VM). These VMs can take more or fewer resources on-demand from the pool with rapid elasticity.  Note that organizations have been using virtualization since the days of mainframes in the 1970s and 1980s. However VMs in a cloud offer more convenience, options, features, and control the end-users to match workloads and their application needs than what was possible duing the mainframe era</li>
                  <li><b>Service Catalog- </b>A cloud service catalog is a menu of applications or resources that customers can use from. It help to standardize the offerings, so that meeting each user requirement does not become an expensive, time-consuming, one-off project for the cloud administrator or the user.</li>
                  <li><b>Self-Service Portal –</b> Associated with the service catalog is a self-service portal that offers an intuitive, easy-to-use interface for customers to select and start using services from within the offered set. Other information available in the portal are related to metering rules, uptime guarantees,  and billing procedures. The offered services and resources should be easy for the end-users to configure and manage</li>.
</ul>
              
              <p>In addition, developers and third-party vendors in a private cloud must have the availability to use Application Programming Interfaces(APIs) to customize the portal offerings, as listed in the following points</p>
              
              <ul>
                  <li><b>Resource and Workload Manager- </b>The cloud must have a resource manager that allows it to easily meet varying workloads, maintain service availability by moving applications to healthy hardware in the event of failure of servers, and network links or other resources. This enables the cloud to be truly on-demand,elastic, efficient, and always available. It also helps the cloud to meet application priorities and SLAs, even as the users and workload systems hit demands.</li>
                  <li><b>Metering Software and Pay-per-use billing-</b> The cloud must have a metering software to track utilization of licenses, applications, bandwidth, and hardware resources. This is used periodically, for example, at the end of each month, to create a bill for each customer. The user must be able to view his utilization and projected bill in real time. The metering software must offer transparent visibility and strong reporting capabilities to ensure compliance, security, and accurate billing.
</li>
              </ul>
              
              
              
              
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