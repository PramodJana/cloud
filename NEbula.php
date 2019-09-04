<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Open Nebula,NEbula">
  <meta name="author" content="Pramod Jana">

  
    <title>Cloud Is Everywhere | NEbula</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
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
              
              <h1><center><u>Open Nebula (Virtual Sandbox)</u></center></h1>
              <p>Enterprise cloud computing is the next step in the evolution of data center virtualization. OpenNebula combines existing virtualization technologies with advanced features for multi-tenancy, automatic provision and elasticity, following a bottom-up approach driven by the real needs of sysadmins and devops.</p>
              
              <p>OpenNebula makes cloud an evolution by leveraging existing IT infrastructure, protecting your investments, and avoiding vendor lock-in.</p>
              
              <p>OpenNebula makes cloud an evolution by leveraging existing IT infrastructure, protecting your investments, and avoiding vendor lock-in.</p>
              
              <p>In contrast to other open-source management tools that only provide a special-purpose implementation of popular cloud interfaces on pre-defined environments, OpenNebula aims to provide an open, flexible, extensible, and comprehensive management layer to automate and orchestrate the operation of enterprise clouds by leveraging and integrating existing deployed solutions for networking, storage, virtualization, monitoring or user management.</p>
              
              <p>OpenNebula provides the <b>simplest but feature-rich and flexible solution</b> for the comprehensive management of virtualized data centers to enable private, public and hybrid IaaS clouds. OpenNebula interoperability makes cloud an evolution by leveraging existing IT assets, protecting your investments, and avoiding vendor lock-in.</p>
              
              <h2><u>Virtual Sandbox of Open Nebula:</u></h2>
              
              <p>The sandbox is a CentOS 7 virtual machine image with a pre-configured Open Nebula 5.0.0 front-end, a virtualization host using QEMU ready to execute virtual machines, and prepared images to offer a complete and rich cloud experience.</p>
              
              <p>Optionally other physical worker nodes using any of the hypervisors supported by Open Nebula can be enrolled to build small-scale cloud infrastructures.</p>
              
              <p>Users are able to log into an Open Nebula cloud, peer the managed resources, and launch instances of virtual machines without the hassle of configuring a physical infrastructure.</p>
              
              <center><h2><u>Working with Open Nebula (Virtual Sandbox)</u></h2></center>
             <p><b>Requirements:</b></p>
              <ul>
                  <li>1GB free RAM for the Virtual Machine</li>
                  <li>10 GB of free disk space</li>
                  <li>A 64-bit kernel</li>
                  <li>Virtualization Extensions</li>
              </ul>
            
              <h2>Creation of Virtual Machine:</h2>
              
              <ol>
              <li>Open the Virtual Box.
                    <br><br>
			<center>
		   <img src="img1/nebula1.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
            </li>
            <li>
                  Click on the New for creation of new instance(Machine)
                    <br><br>
			<center>
		   <img src="img1/nebula2.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>  
              
              <li> Enter the Name, Type of operating system and version. 
                  <ol type="a">
                 <li><br><br>
			<center>
		   <img src="img1/nebula3.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                      
                      <li> From the list of N operating system ,one can choose any depending upoun ones requirement. <br><br>
			<center>
		   <img src="img1/nebula4.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                      
                      <li> Enter the name ,type and version for virtual machine. <br><br>
			<center>
		   <img src="img1/nebula5.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                      
                      <li>Once entered ,click on the create button for further processing. <br><br>
			<center>
		   <img src="img1/nebula6.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                  </ol></li>
              
              <li>A new windows opens.Enter the other configuration requirements.
                  <ol type="a">
                  <li><center>
		   <img src="img1/nebula7.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br></li>
                      
                      <li>One can opt for hard disk ,if needed.
                      <center>
		   <img src="img1/nebula8.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                      
                       <li>
                      <center>
		   <img src="img1/nebula9.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      </li>
                  </ol>
                  </li>
              
                  <li>
                  Virtual Machine Created.A view of created VM.
                        <br><br>
			<center>
		   <img src="img1/nebula10.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                      
                  </li>
              
              </ol>
              
              <h2>Running of a Virtual Machine</h2>
              <ol>
              <li>When a Virtual Machine is created, the machine is in off state.
                    <br><br>
			<center>
		   <img src="img1/nebula11.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br></li>
              
              
              <li>Change the state of machine to start, by clicking on start button on task bar.
                <br><br>
			<center>
		   <img src="img1/nebula12.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              </li>
              
                  <li>When one clicks on the start button, it displays various state of operations like the normal, headless and detachable state
                     <br><br>
			<center>
		   <img src="img1/nebula13.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>
              
                  <li>Proceed with the Normal start, once you select the option, the machine starts operating.
                  <br><br>
			<center>
		   <img src="img1/nebula14.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>
              </ol>
              
              <h2>Stopping of Virtual Machine</h2>
              <ol>
              <li>
                  Select the Machine option from the task bar of running machine.
                  <br><br>
			<center>
		   <img src="img1/nebula15.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>
                  
                  <li>
                  Click on the pause button ,It will ask for various option select the option to which you want to proceed.
                      <center>
		   <img src="img1/nebula16.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>
                  
                  <li>
                  Click on the option of >Power off and then ok ,the machine gets closed .
                       <center>
		   <img src="img1/nebula17.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
                  </li>
              </ol>
              
              
              
              
              
              
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