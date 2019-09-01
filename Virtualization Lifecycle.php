<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Virtualization Lifecycle,Virtualization">
  <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cloud Is Everywhere | Virtualization Lifecycle</title>
  </head>
  <body>
    <?php
    include 'header7.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside7.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              <center><u><h1>Virtualization Lifecycle</h1></u></center>
              <p>The deployment of virtual machines in a cloud system bring efficiencies in the resource
utilization .VM deployment requires a lifecycle management process with particular focus on
retirement of hardware and software. Life cycle for the process of virtualization is also
abbreviated as VM lifecycle.
</p>

              <h2><u>Need</u></h2>
              <p>Unplanned deployments lead to:</p>
              <ol type="a">
                  <li>Increase in license cost.</li>
                  <li>Retirement issues.</li>
                  <li>Underutilization of resources.</li>
              </ol>
              
              <center><p><b>Virtual machine lifecycle constitute set of processes designed for the implementation, delivery,
operation, and maintenance of virtual machines over the course of their existence.
</b></p></center>
              
              <h2><u>Phase of Life cycle:</u></h2>
              <p>Typical VM lifecycle exist as-</p>
              <br><br>
			<center>
		   <img src="img1/life%20cycle%20of%20virtual%20machine.png" width="500px" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p>As with other typical software lifecycles, virtual machine lifecycle also ranges from development
to maintenance and retirement.
</p>

              <h3>Development and deployment:</h3>
              <p>Creation and hosting of VMs based upon the required specification is the first phase of VM lifecycle.</p>
              
              <h3>Run:</h3>
              <p>Running of hosted VMs take place for the application to execute.</p>
              
              <h3>Manage:</h3>
              <p>Unmanaged VM creates various holes in the working of virtual machines. Capability to control and quarantine the virtual machines along with the tracking of machine is an important for the management of VMs.</p>
              
              <h3>Migrate:</h3>
              <p>For uninterrupted working of virtual machines and for load balancing migration of VMs occurs.</p>
              
              <h3>Retire:</h3>
              <p>The phase deals with the termination of virtual machines.VM retirement require knowledge of containers in memory and interaction and dependencies of the VM with other VMs in the cloud. In order to facilitate their orderly and efficient retirement the important function that has to be considered is-</p>
              
              <ol>
                  <li>Identifying and cataloging of deployed VMs.</li>
                  <li>Tracking all containers.</li>
                  <li>Identifying installed VMs that do not conform to formal policies.</li>
                  <li>Ensuring that VMs were created from correct trusted templates.</li>
                  <li>Capability to control and quarantine a VM.</li>
                  <li>With the above information an enterprise can formalize the VM retirement process.</li>
              </ol>
              
              <p><center><b>
                  “The lifecycle of cloud software and VMs, as with other typical life cycle is important for growth and development of a system in structured manner”.</b>
</center></p>
              
              
              
              
              
              
              
              
              
              
              
              
              </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer7.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>