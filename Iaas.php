<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Knowledge about IaaS">
    <meta name="keywords" content="Iaas">
    <meta name="author" content="Pramod Jana">


  
    <title>Cloud Is Everywhere | Iaas</title>
  
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header3.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside3.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
              <center><h1><u>Infrastructure as a Service (IaaS)</u></h1></center>
              <p>IaaS is a model in which you, as a customer, pay for the resources (such as compute power, memory, storage, bandwidth, security devices, load balancers, etc) kept at the provider’s facility or wherever the provider keeps its hardware. The provider owns the equipment and maintains it at a level specified in the previously-agreed upon<b> Service Level Agreement(SLA)</b>. As a customer, all you need to do is to pay for the part of the resources dedicated permanently to your account or resources dedicated permanently to your account or resources that you provision temporarily to meet the short-term needs.</p>
              <br><br>
			<center>
		   <img src="img1/IaaS%20overview.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <h3>Network Architect</h3>
              <p>The IaaS domain is usually defined to include resources of the following types: server; whether
virtual or physical, storage, network connections and IP address; public or private, exposed by
the network interfaces. In addition, the resource model for the IaaS layer may include resources
that represent additional features of the infrastructure, such as network features (for example,
load balancing), templates (for deployment), and snapshots. Data storage elements (for example,
volume) have quality-of service elements of their own (for example, deduplication, encryption,
backup), but these are usually captured in a separate resource model (for data and storage)
outside of the scope of this work.
</p>
              
              <p>The fundamental layer of cloud computing is Infrastructure as a Service (IaaS), also referred to
as Hardware as a Service. Computing infrastructure, networking and storage are delivered over
the network as a virtual instance. Instead of heavily investing in the purchase and maintenance of
computing resources; an enterprise can simply purchase these services on demand
</p>

              <p>Since IaaS is the most fundamental building block, it covers the areas where PaaS and SaaS do
not; making it the ideal cloud computing solution.
</p>
              <h3>Characteristics:</h3>
              <ul>
                  <li>Computing resources are distributed as a service.</li>
                  <li>Enables dynamic scaling.</li>
                  <li>Multi-tenancy: Multiple users can utilize a single piece of hardware.</li>
              </ul>
              
              <h3>Advantages</h3>
<ul>
              <li>Full control over VM and its life cycle.</li>
<li>Processing of any operation and application by the customer on the respective Virtual</li>
<li>machine.</li>
<li>Integration with enterprise infrastructure became easy.</li>
<li>Enhanced security.</li>
<li>Low overheads of cost and maintenance of hardware.</li>
</ul>

<h3>Disadvantages</h3>
<ul>
<li>Most expensive, since the customer is leasing a tangible resource, the provider can charge for every Cycle, bit of RAM or disk space used.</li>
<li>Customer is responsible for backups and for all aspects of VM Management.</li>
<li>No control over which server or the physical (geographical) location of the VM.</li>
</ul>

<h3>IaaS Examples</h3>
 
              <p>
              <b>Example 1</b><br>
                  An example of IaaS is Amazon-Elastic Compute Cloud (EC2). The Amazon EC2 <a href="http://aws.amazon.com">
                  (http://aws.amazon.com)</a> self-service portal allows a subscriber to create a cloud server instance online. The
                  subscriber can specify the amount of CPU and Memory (compute capacity), network bandwidth and storage required for the 
                  server instance.The subscriber can also specify the operating system for the instance. With all these speciication in
                  place, a cloud service instance is created within a matter of minutes with no manual intervention. The entire workflow
                  is automated to enable faster provisioning and turnaround for subscriber.
                  <br>
                  The server instance usage is tracked and the usage bill is sent at the end of the month.
              </p>
              
              <p>
              <b>Example 2</b><br>
                  Rackspace is another example of IaaS. The site <a href="http://manage.rackspacecloud.com">http://manage.rackspacecloud.com</a>
                  provides a self-service portal to subscribe for cloud services.
              </p>

              
              
           <center> 
               <div class="card border-secondary mb-3 w-75" >
  <div class="card-header">Case Study</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Content Distribution by a TV Channel Provider Using Public Cloud</h5>
    <p class="card-text">A cable TV operator plans to expand its services to offer on-demand movies to users over an IP network. The users should be able to stream movies to their laptops, desktops or IP-enabled TVs over a DSL or broadband. The problem is that the datacenter location is far from customer base. The operator does not have high-speed IP access to all its users. The movies are very large and must be available on-demand. The operator decides  to host the movies on a public cloud. It will allow the operator to manage massive data files and bandwidth demands without increasing physical resources or link speeds. The operator will pay olny for storage space and bandwidth consumed to stream videos to the paying users. The cloud providers has user authentication and Role-Based Access Control (RBAC) to control administrators from the TV operator company who are authorized to change the movie database.</p>
  </div>
               </div>
              </center>
              
              <br>
              <p style="color:green">Note: IaaS provider offers template OS images for the virtual servers. They Also have API’s to add, start, stop, access, configure, and delete the virtual host (or virtual machines) and storage. The customer can neither control the hardware or network nor manage the underlying cloud infrastructure.</p>
          
          
          
          </div>   
    </div>
      </div>
      <?php
      include 'footer3.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>