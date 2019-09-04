<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="security threats and vulnerabilities Regarding Cloud,Public Cloud,Private Cloud,Hybrid Cloud,Cloud Risks,cloud security">
  <meta name="author" content="Pramod Jana">

    
    <title>Cloud Is Everywhere | Security</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header6.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside6.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              <center><h1><u>Security</u></h1></center>
              <h2>Threats and Vulnerabilities:</h2>
              <p>Security of cloud based applications and data is the principal concerns of the cloud customers. The information security of the cloud system depends upon the classical principle of confidentiality, availability and integrity, but applied to distributed, virtualized and dynamic architectures. It is important when entrusting an organization’s critical information to geographically dispersed cloud platforms, not under direct control of that organization.</p>
              
              <p><b>“Threats and vulnerabilities are major concern which leads to hindrance in the security”. </b><br>
              The major difference between the two is:-</p>
              
              <p><b>Vulnerability:</b> It is a weakness that can be exploited by the attacker. A weakness can be present in software, environments, systems, network, etc.<br>
                  <b>Threat:</b> Is an actor who wants to attack assets in the cloud at a particular time with a particular goal in mind.
</p>
              <p>When migrating in cloud environment following vulnerabilities and threats are needed to be considered:-</p>
              
              <br><br>
			<center>
		   <img src="img1/Thread%20and%20Vulnerabilities.png" class="img-fluid" alt="Responsive image" >
		   </center>
              <br><br>
              <p>When an enterprise company wants to move their current operation to the cloud, they should be aware of the cloud threats and vulnerabilities in order to migrate successfully. Enterprise shouldn’t rely on the cloud service provider to take care of security.</p>
              
              <h2>Security Architecture:</h2>
              <p>Security controls in cloud computing are, for the most part, no different than traditional computing environment. However, because of the cloud service models employed, the operational models and the technologies used to enable cloud services, cloud computing may present different security problems to an enterprise than traditional IT solutions.</p>
              
              <p>An enterprise security posture is characterized by the maturity, effectiveness, and completeness. These controls are implemented in one or more layers ranging from the facilities (physical security), to the network infrastructure (network security), to the IT systems (system security) and all the way to the information and applications (application security).</p>
              
               <br><br>
			<center>
		   <img src="img1/cloud%20security%20model(NIST).png" class="img-fluid" alt="Responsive image" width="500px">
		   </center>
              <br><br>
              
            <p>Understanding the layer dependency of cloud service models is very critical to analyze the security risks of cloud computing. Because of its architecture there is an inherited relation between the service capabilities of different layers in cloud computing. Analogue to cloud service capability, the security risks of cloud computing is also inherited between different service layers.</p>
              
               <br><br>
			<center>
		   <img src="img1/cloud%20layer%20security%20funtionality.png" class="img-fluid" alt="Responsive image" width="500px">
		   </center>
              <br><br>
              
              <p>One critical feature of cloud security architecture is that the lower service layer that a cloud service provider lies in, the more management duties and security capabilities that a customer is in charge of.</p>
              
              <h2><u>Security objective:</u></h2>
              <p>According to DACS (Data and analysis center for Software) the properties to be executed for security is:-</p>
              <ul>
                  <li><b>Dependability:</b> Software that executes predictability and operates correctly under variety of conditions, including when attack or running on a malicious host.</li>
                  <li><b>Trustworthiness:</b> Minimal or less vulnerabilities.</li>
                  <li>Survivability: Resistant to attacks and ability to recover as soon as possible.</li>
              </ul>
              
              <h2><u>Cloud-Based Security Group and Standard:<br>
                  Jericho Forum’s Cloud Cube Model:</u></h2>
              <p>Cloud cube model provides a basis for standardization, it has defined a three dimensional cube that specifies four criteria for categorizing cloud formation and provision. Criteria are summarized as:</p>
              
              <p><b>Internal/External:</b> a model parameter to define the physical location of data storage. If the physical location of data storage is inside of the data owner’s boundary, then the model parameter value is internal. Otherwise, the parameter value is external. The combination of internal and external data storage maybe present more secure usage model.</p>
              
              <p><b>Proprietary/Open:</b> a model parameter to define the ownership of cloud’s technology, service and interface etc. This model parameter indicates the degree of interoperability. Proprietary means that a cloud service provider holds the ownership of facilities providing cloud services, hence the operation of cloud is proprietary and customers can not transfer their applications from one to another cloud service provider without great effort or investment. The technologies used in public cloud are generally open and uniform, meaning more available service providers and less constraint on data share and incorporation with business partners.</p>
              
              <br><br>
			<center>
		   <img src="img1/The%20cloud%20cube%20model.png" class="img-fluid" alt="Responsive image" width="500px">
		   </center>
              <br><br>
              
              <p><b>Perimeterised/De-perimeterised:</b> A model parameter to describe the “architectural mindset” of security protection, i.e. a customer application is inside or outside of traditional security boundary?<br>

                  Perimeterised means that a customer’s application operates within traditional IT security boundary signaled by firewall that blocks the incorporation of different security zones.<br>

                De-perimeterised means that the fade way of traditional IT security boundary and the exposure of a customer application operation.</p>
              
              <p><b>Insourced/Outsourced:</b> a model parameter to define the 4th dimension that has two states in each of the eight cloud forms: Per(IP,IO,EP,EO) and D-p(IP,IO,EP,EO).<br>

                  Insourced means that cloud service is presented by an organization own employees, and Outsourced means that cloud service is presented by a third party.<br> 


                  These two states answer the question “who do you want to build or manage your cloud service?<br>


                  Along with Cloud Cube model there are other standards like DMTF (Distributed Management Task Force), ISO (International organization for standardization) etc used for standardization of cloud security and environment.</p>
              
              <center><h4>Challenges and counter measure:</h4></center>
           <center>   
		    <div class="table-responsive-md">
		   <table class="table table-hover table-bordered w-75">
  <thead class="thead-light">
    <tr>
      <th scope="col">Challenges</th>
      <th scope="col">Effect</th>
      <th scope="col">Countermeasure</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Shared clipboard</td>
      <td>Data gets transferred between VMs and the host. Data moves between malicious programs</td>
      <td>Enabling parameter defense on VM</td>
    </tr>
      
    <tr>
      <td>VM monitoring from
the host</td>
      <td>Monitors the
application running
inside the VM. Host
gets control on VM</td>
      <td>Hardening of Host
operating system</td>
    </tr>
      
    <tr>
      <td>VM monitoring from
another VM</td>
      <td>Accessing of another
VM resources</td>
      <td>Hardening of VMs
and enabling
backups</td>
    </tr>
      
    <tr>
      <td>VM Backdoors</td>
      <td>Covert
communication
channel between guest
and host.</td>
      <td>Encrypted communication</td>
    </tr>
      
    <tr>
      <td>Hypervisor Risks</td>
      <td>Vulnerabilities, risk</td>
      <td>Hardening of
hypervisors,
Disabling
background task</td>
    </tr>
      
    <tr>
      <td>VM Escape</td>
      <td>Access to privileged
and kernel level
instruction.</td>
      <td>Hardening of VMs
and enabling
Parameter defense
on VM.</td>
    </tr>
      
    <tr>
      <td>Data loss</td>
      <td>Loss of information
and availability of
data</td>
      <td>Encryption</td>
    </tr>
      
    <tr>
      <td>Unauthorized Access</td>
      <td>Privacy</td>
      <td>Access control and
Identity
Management</td>
    </tr>
  </tbody>
</table>
              </div>
              </center>     
              
              <p><b>Besides the above Measure there is numerous security measures like establishing of trusted
computing base, security awareness and training, secure execution environment and
Autonomic security are adopted in cloud environment.</b></p>
              
              </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer6.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>