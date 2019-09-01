<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cloud Is Everywhere </title>
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
              <center><h1><u>Introduction of Virtualization</u></h1></center>
              <p>Virtualization is a large umbrella of technologies and concept that are meant to provide an abstract environment. A core technology of cloud computing it allows creation of secure, customizable and isolated execution environment for running applications on demand.</p>

              <p>Virtualization not only provides a virtual environment for executing application, but also for
                  storage, memory and networking by simulating exposed interface of guest.</p>

              <p>In short, it creates different computing environment which are virtual in nature and allows these
              instances to run concurrently on single platform.</p>
              
              <h2>NEED</h2>
              <p><b>Virtualization has been sporadically explored and adopted, but it has gained a renewed interest due to the following phenomena-</b></p>
              
              <br><br>
			<center>
		   <img src="img1/need%20of%20virtualization.png" width="500px" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p>Beside the above phenomena increase in administrative cost also resulted into the adoption of virtualization technologies</p>
              
              <h2><u>Concept</u></h2>
              <p><b>Virtualization is defined as ability to emulate.</b>
              <br>
              A virtualized environment is compromised of guest, host and virtualization layer.<br>
                  <b>Guest:</b> A system component that interacts with the virtualization layer rather than the host.
                  Example: Virtual image and applications.<br>
                  <b>Virtualization layer:</b> It recreates the same or different environment where guest will operate.</p>
              <br><br>
			<center>
		   <img src="img1/Virtualization%20reference%20model.png" width="500px" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p><b>Host:</b> It is the original environment where the guest is supposed to be managed.
                  Example: Physical hardware, storage and networking.Guest is represented by a system image comprising an operating system and installed applications.</p>

              <p>These are installed on top of virtual hardware that is controlled and managed by the virtualization
                  layer, also called virtual machine manager. The host is instead represented by the physical
                  hardware that defines the environment where the virtual machine manager is running.</p>

              <p><b>Characteristics:</b><br>
                  The ability to emulate by hypervisor creates lot of opportunities. Such advantages have always
                  been the characteristics of virtualized solutions. Managed execution, increased security and
                  portability are the key features possessed by virtualization.</p>

              <p><b>Managed Execution:</b><br>
                  Sharing, aggregation, emulation and isolation are the most relevant feature in the management of
                  virtualization.</p>

              <p><b>Increased Security:</b><br>
                  The ability to control the execution of guest in a completely transparent manner opens the
                  possibilities of delivering a secure and controlled execution environment.</p>

              <p><b>Portability:</b><br>
                  The concept of portability applies in different ways depending upon the type of virtualization.
                  It also provides a great opportunity to build elastic scalable system which is capable of
                  provisioning additional capability with minimum cost.</p>
              
              <h2><center><u>“Virtualization is a building block for Cloud Computing”</u></center></h2>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
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