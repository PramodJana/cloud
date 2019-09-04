<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Classification of virtualization,scope of virtualization,virtualization">
  <meta name="author" content="Pramod Jana">


    <title>Cloud Is Everywhere | Classification of Virtualization</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:55px; font-family: 'PT Serif', serif;" id="body">
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
              <center><p><b>Virtualization covers a wide range of emulation techniques that are applied to different areas
of computing.
</b></p></center>

              <p>Classification of virtualization takes place depending upon the computing resources and the
application. The classification discriminates against the service or entity that is being emulated-
</p>

              <br><br>
			<center>
		   <img src="img1/types%20of%20virtualization.png" width="500px" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p><b>Process level:</b> It is type of emulation technique implemented on top of operating system with
                  full control over hardware.</p>

              <p><b>System level:</b> It is implemented directly on hardware and do not require or require minimum
                  support from operating system.</p>

              <p><b>Application virtualization:</b> It is virtualization technique allowing applications to run on runtimeenvironments which does not support all original features required by the applications.</p>
              
              <p>Emulation of partial file system, libraries and operating system component take place in this type of virtualization. Strategies adopted for realization of application level virtualization are-</p>
              <ol type="a">
                  <li>Interpretation</li>
                  <li>Binary translation</li>
              </ol>                  
              <p>Example: Wine</p>

              <p><b>Operating System Virtualization:</b> Different and separate execution environments for
application are created and managed concurrently in operating system virtualization. In this type
of virtualization kernel plays important role. The virtualization aims to provide multiple
execution containers for running applications. It does not expose the same flexibility as hardware
virtualization but the technique is an efficient solution for server consolidation.<br>
                  Example: IBM Logical Partitions (LPAR).</p>

              <p><b>Hardware virtualization:</b> It is a virtualization technique that provides an execution environment
in terms of computer hardware, on top of which a guest operating system can run. Full
virtualization, Para virtualization and Partial virtualization are different types of hardware
virtualization.<br>
Example: Hyper-V
</p>
              
              <center><h4>Other types of virtualization are described as:-</h4></center>
           <center>   
		    <div class="table-responsive-md">
		   <table class="table table-hover table-bordered w-75">
  <thead class="thead-light">
    <tr>
      <th scope="col">S. No.</th>
      <th scope="col">Type of virtualization</th>
      <th scope="col">Functionality</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Storage Virtualization</td>
      <td>Harnesses wide range of storage facilities and representing under single logical file system.<br> Example: Storage area network(SANs)</td>
    </tr>
      
    <tr>
      <td>2</td>
      <td>Network Virtualization</td>
      <td>Aggregates different physical network into a single logical network.<br> Example: Virtual LAN(VLAN)</td>
    </tr>
      
    <tr>
      <td>3</td>
      <td>Desktop Virtualization</td>
      <td>Same as hardware virtualization. It has ability to remotely access desktop environment stored on datacenter or on a remote server</td>
    </tr>
      
    <tr>
      <td>4</td>
      <td>Programming-Level Virtualization.</td>
      <td>Virtual machines execute byte code of a program.<br>
Example: Parrot</td>
    </tr>
  </tbody>
</table>
              </div>
              </center>     
              
              <p><b>The common root for all form of virtualization is the ability to provide the illusion of
specific environment.
</b></p>

              
              <h2><u>Benefits:</u></h2>
              <ul>
                  <li>Virtualization provides several benefits:</li>
                  <li>Greater efficiency and company agility</li>
                  <li>Ability to more-effectively manage resources.</li>
                  <li>Self containment.</li>
                  <li>Server consolidation.</li>
                  <li>Managed execution.</li>
              </ul>

              <h2>Disadvantages:</h2>
              
              <p>There are various drawbacks of virtualization along with benefits .They are-</p>
              <ul>
                  <li>Security threats and risk.</li>
                  <li>Performance degradation.</li>
                  <li>Management of virtualized resources is a complicated task.</li>
                  <li>Does not support all applications.</li>
              </ul>
              
              <center><b><p>“Virtualization has become a phenomena, the primary reason of its wide success is the
elimination of technological barriers that made it”.
</p></b></center>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
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