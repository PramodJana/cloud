<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Knowledge about PaaS">
    <meta name="keywords" content="Paas">
    <meta name="author" content="Pramod Jana">


   
    <title>Cloud Is Everywhere | PaaS</title>
  
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
              <center><u><h1>Platform as a Service (PaaS)</h1></u></center>
              <p>PaaS is a cloud service where the customer gets a set of application and product development tool hosted on the provider’s infrastructure. The customer can deploy acquired applications or those created using programming language and tools supported by the provider. The consumer does not control, own or manage the underlying cloud infrastructure, including servers, OS, storage, security devices, network, but has a control over the deployed applications and possibility also the configurations of the hosting environment.</p>
              
              <p>Developers on the PaaS platform create applications on the cloud platform using APIs, website portals or gateway software installed on the cloud servers.<b> Force.com</b> (a part of Salesforce.com), <b>Microsoft Azure</b> and <b>Google AppEngine</b> are the few leadings PaaS providers.</p>
              <br>
			  <center>
            <img src="img1/PaaS%20overview.png" class="img-fluid" alt="Responsive image">
              </center>
			  <br><br>
              
              <center>
                  <h4>Features of an Internet,  Traditional Development Environment and PaaS</h4>
				   <div class="table-responsive-md">
              <table class="table table-hover table-bordered w-75">
  <thead class="thead-light">
    <tr>
      <th scope="col">Features </th>
      <th scope="col">In-House Application Development</th>
      <th scope="col">PaaS for Application Development</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Multi-Tenancy</td>
      <td>Intended for a small or a small group of users.</td>
      <td>Supports hundreds to thousands of users, each with multiple active projects. 
          Partition of data is must to protect several users.</td>
    </tr>
    
    <tr>
      <td>User End-Points</td>
      <td>Application-based tools, browsers.</td>
      <td>Web browsers-based tools.</td>
    </tr>
      <tr>
      <td>Deployment</td>
      <td>Deployment and scalability are left for installation and go-live phases</td>
      <td>Scalability, failover, and load balancing are the basic building blocks.</td>
    </tr>
      <tr>
      <td>Runtime Monitoring</td>
      <td>Development solutions are usually not associated with runtime monitoring.</td>
      <td>Built-in monitoring available with the development platform</td>
    </tr>
      <tr>
      <td>Virtual Machines, Servers, Storage, Databases</td>
      <td>Multiple options are available and can be customized to meet any user requirement.</td>
      <td>Need to work with the Infrastructure offered by PaaS providers.</td>
    </tr>
      <tr>
      <td>Integerated Development Environment(IDE)</td>
      <td>May have separate environment and infrastructure for development, 
          test, debugging, and production.</td>
      <td>Same environment for all phases.</td>
    </tr>
                  
        </tbody>
</table>
                  </div>
                  
              </center>
              <br><br>
              <center>
                  <h4>PaaS categories and Examples</h4>
				   <div class="table-responsive-md">
              <table class="table table-hover table-bordered w-75">
  <thead class="thead-light">
    <tr>
      <th scope="col">Category </th>
      <th scope="col">Description</th>
      <th scope="col">Examples</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>There are PaaS offerings where software developers can use current 
          tools, which they prefer to logically develop the software. Once they compile 
          and test the application, they can upload it on cloud.</td>
      <td>Force.com, Google, Longlump, Magic Software, Microsoft, NetSuite, TIBCO, and Wavemaker.</td>
    </tr>
    
    <tr>
      <td>2</td>
      <td>The PaaS vendors provide a cloud-based development environment, which includes stages such as design, coding, debugging, testing, staging, and deployment. All phases provide browser-based access; The developers build and test applications at the PaaS provider’s site.</td>
      <td>Force.com, Intuit, Trackvia, and Wolf Frameworks</td>
    </tr>
      <tr>
      <td>3</td>
      <td>These PaaS vendors target business exports, not coders or developers. The vendors provide tools, templates that can be easily customized to build applications. There is no need to write original code, it speeds up application delivery timeline.</td>
      <td>Caspio, Cordys, Mendix, WorkXpress, and Zoho</td>
    </tr>
      <tr>
      <td>4</td>
      <td>These PaaS vendors enable developers to use tools for building the applications, either locally or in the cloud. The developers can use the cloud to stage, deploy, scale, and manage the applications.</td>
      <td>Amazon, CloudBees, Engine Yard, Gigaspaces, IBM, Joyent, Microsoft, Red Hat, Standing Cloud, and Cloud Foundary</td>
    </tr>
        </tbody>
</table>
</div>
              </center>
              <br><br>
              
              <h2>Characteristics:</h2>
              <ul>
<li>Has web based UI design tools that enable the development, modification, testing and deployment of different User Interface scenarios </li>
                  <li>Supports Multi tenancy. </li>
<li>Integration with databases and web services through regular standards.</li> 
<li>Provide abstract environment. </li>
<li>PaaS environment automates the process of development and scaling of applications.</li> 
</ul>
    <br>
              <h2>  Benefits</h2>
              <br>
			  <center>
              <img src="img1/PaaS%20benefits.png" class="img-fluid" alt="Responsive image">
              </center>
			  <br><br>
              <ul>
              <li>Cost reduction</li> 
<li>Streamlined application development and management</li> 
<li>Increased mobility </li>
<li>Reduced technical maintenance</li>
<li>Still cost effective in comparison to IaaS, as you are still essentially leasing the software platform not a resource. An example of PaaS would be IIS.</li>
<li>Unlike SaaS you can bring your own software to run on the platform therefore you have full control of software.</li> 
<li>Full control over the users accessing the software and the processing of data (to a certain extent, due to little knowledge of underlying VM and insider threat).Improved support for integration with other systems due to the above. </li>
<li>Minimal management of the VM, as this is still handled by the provider.</li>
</ul>

              <h2> Disadvantage:</h2>  
              <ul>
<li>Restrictive nature. Developers are restricted to the programming languages and tools provided by the PaaS vendor.</li>
<li>No Control over the VM or processing of data, this is a big security risk as you don’t know what’s happening with your data.</li> 
<li>Possibly no control over platform depending on Cloud provider. </li>
<li>Platform is most likely a shared platform, for example there could be other customers running different websites on the same IIS platform.</li> 
<li>Problem of vendor lock in.</li> 
<li>Less cost effective compare to SaaS.</li>
</ul>
          
    <h2>Guidelines for Selecting a PaaS Provider</h2>
              
<p>There are two categories of PaaS providers. The first are large IT operating system and software vendors, who offers PaaS because it is a natural extension of what they had traditionally sold. The second are small, independent vendors for whom PaaS is the sole or key offering. Here are few guidelines for choosing a suitable PaaS Provider.</p>
              <br>
			  <center>
              <img src="img1/PaaS%20Guidelines.png" class="img-fluid" alt="Responsive image">
			  </center>
              <br><br>
              
              <ul>
                  <li>Compatibility with other clouds- PaaS providers will claim portability to all other clouds. This cannot be true as the cloud environments are unique and standards are still evolving. However, you need to be aware of providers who claim they have everything for everyone.</li>
                  <li>Target Customers-PaaS providers have certain target customers and architect their environment to appeal to particular group of users. For example, <b>Microsoft</b> focuses on .Net and PHP developers.<b> Oracle</b> focuses on java Developers. Make sure that the PaaS provider you select  offers and supports the development environment you need</li>
<li>Avoid Vendor Lock-in – You must select a provider who facilitates cloud interoperability for your application. It must be easily ported to another public or hybrid cloud or even to a non-virtualized internal infrastructure. For this reason, the provider must abstract application runtime, data handling and middleware from the underlying infrastructure.</li>
<li>Platform Management- Make sure that the PaaS provider can manage and maintain the environment. Many PaaS platforms are built using open-source projects and applications for which the provider may not have skills or control.</li>
<li>The Test Of Time- Make sure that the cloud vendor will be in business in the times to come.</li>
              </ul>

          
          
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