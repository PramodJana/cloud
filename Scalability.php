<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Scalability Of Cloud Platform">
    <meta name="keywords" content="Scalability,Cloud Platform Features,Cloud">
    <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cloud Is Everywhere | Scalability</title>
     
  </head>
  <body>
    <?php
    include 'header4.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside4.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
              <center><u><h1>Scalability</h1></u></center>
              <p>Scalability is an attribute that defines the ability of a process, network, software or organizations to grow and manage increased demand.</p>
              
              <p>A system, business, or software that is described as scalable has an advantage because it is more adaptable to the changing needs or demands of its users or clients</p>
              
              <h2>Types of Scalability</h2>
<p>The scalability of changing resources allocated to a cloud service can be implemented in various ways. The main technologies are:</p>
              <ul>
<li><b>Vertical Scalability or Scaling Up- </b>In this case, you add resources, such as CPU, memory, and storage space, to a server. This helps improve performance and capacity. On the other hand, you can also add non-IT components, such as power supplies, NICs, and HBAs, to a server, which helps improve fault tolerance.</li>
<li><b>Horizontal Scalability or Scaling Out-</b> In this case, instead of adding resources within a server or device, you add more servers or nodes to improve performance, capacity, and redundancy.</li>
<li>	<b>Diagonal Scalability-</b> This gives you flexibility to use both vertical and horizontal scalability.</li>
</ul>
              
              
              <h2>Use of Load Balancers to Enhance Scalability</h2>
              <p>Load balancers can be used to efficiently manage and spread incoming user traffic among multiple servers. A load balancer monitors the traffic and available servers, and uses a round-robin algorithm where the idlest server is allocated the load. It improves performance for the user. It also protects against server failure. If a server fails, the other servers continue to provide the services, although the performance may be slower. On a larger scale, a load balancer can distribute traffic to servers in different regions of the world.</p>
              
              <p style="color:green">Note: Load Balancers improve performance and availability. If a certain site is down, the load-balancer avoids the failed site and continues to service the regional users, using healthy servers in other regions.</p>

              <p>Load Balancers are commonly used for services such as Domain Name System (DNS), Hypertext Transfer Protocol (HTTP), File Transfer Protocol (FTP), etc. They are suitable for use in the applications where the incoming load can vary greatly. They are also suitable where the connections are intelligent and must be tuned for performance, security, or others parameters. Load balancers help by enabling an intelligent management interface to application services.</p>
              
              
                <center> 
               <div class="card border-secondary mb-3 w-75" >
  <div class="card-header">Case Study</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Cloud makes for a Green Earth</h5>
    <p class="card-text">Cloud computing is a part of the Green IT initiative. By sharing resources at a service provider’s location, you reduce the number of IT equipment and energy consumption. Technically, you can virtualize and consolidate your IT hardware and deploy Power Manager to automatically soft-power off idle servers. However, cloud providers contribute more due to their unique positioning. They host several customers (multi-tenancy) and enable elasticity (give more resources to those who need it and only when they need it). Although there is very little hard data form cloud service providers on their energy efficiently, they have forced enterprises of all sizes to consolidate improve utilization, and contribute towards Green IT.</p>
  </div>
               </div>
              </center>
         
              
              
              
              
              
              
              </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer4.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>