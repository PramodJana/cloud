<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Concerns with Public Cloud">
    <meta name="keywords" content="Concerns with Public Cloud,Cloud">
    <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Cloud Is Everywhere | Concerns With Public Cloud</title>
  </head>
  <body id="body">
    <?php
    include 'header5.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-sm-2" id="asidep">
          <?php 
    include 'aside5.php';
        ?>
          
          
          </div>
          <div class="col-sm-10">
              <center><u><h1>Concerns with Public Cloud</h1></u></center>
              <p>Despite of all the advantages, users may not want to put sensitive and highly-confidential data on a public cloud, until they have tested and are sure of the security features implemented by the cloud providers. Another concern users might have is compliance. Government regulations and agreements with the clients may impose a set of requirements that are not meet by the public cloud infrastructure. </p>
              
              <p>There are various risks associated with public cloud. There could be several situations where you cannot use public cloud, such as the following:</p>
              
              <ul>
                  <li><b>Lack of Interoperability-</b> Each cloud provider has a set of proprietary technologies. This is due to lack of standards commonly adopted by providers. If you have two applications or databases that communicate with each other, you cannot put one in the cloud and the other in-house. Technically it is possible, but you will face latency, user access, and security issues.</li>
                  <li><b>Portability Problems-</b> If you need to move from one provider to another, it is better to stay in-house. Switching between providers is onerous, complex, and expensive. As of now, standards are yet to be established and implemented by the providers.</li>
                  <li><b>Issues with Shared Infrastructure-</b> the Key concept of private and public cloud is hypervisor-based hardware virtualization (CPUs, memory, network ports, etc.), which is in turn are shared by several tenants or users. The resources are not physically isolated but are separated by software .This logical separation is prone to programming flaws, vulnerabilities, and cyber threads. For example, there have been cases, where a user on a guest virtual machine was able to break out and attack the underlying host system .Getting an account on a public cloud is quick and easy, and entry fees are low. Most providers offer services for a limited period or forever for low-end users. Spammers, malicious code developers, and online criminals find the shared, multi-tenant environment a convenient platform for denial-of-service attacks, password cracking, botnet command, and control viruses. A graver threat exists from corporate insiders, because they have easier access to confidential data in the cloud. The harm they can cause to cloud data is greater than if the data is resident internally. IT managers need to be cautious about threats stemming from within their enterprise. Another serious thread, over which tenants have almost no control, is from employees who work on the cloud service provider.</li>
                  <li><b>Cost-</b> The cost with internal applications is expensive for the purchase and maintainance of hardware and applications plus the cost of administrative staff. The cost of the cloud is as per you use of the provider’s compute power, storage, applications, and bandwidth, which is less expensive in most of the cases.<br>
                      If you stream video-traffic from the cloud to thousands of users, your bandwidth will spike sharply.
                      <p style="color:green">Note-if you consider your cloud cost over a number of years, you may find it more cost-effective to buy and own the environment rather than use the cloud, especially if your bandwidth, compute, and storage requirements are high.</p></li>
                  <li><b>Issues with Compliance-</b> Organizations must meet regulatory requirements applications to their industry vertical. Compliance and auditing require transparency of the underlying IT infrastructure and processes. This is inherently at odds with a public cloud, which is supposed to be a “black box “of IT resources accessible through APIs offered by the cloud provider.</li>
                  <li><b>Geo-political Concerns –</b> Some industry regulations require that data be resident within the geographical boundaries of the country. In such a case, a cloud user in Canada, for example, cannot put his/her data on a service provider’s datacenter that has no presence in Canada.</li>
                  <li><b>Unsafe APIs and Interfaces-</b> The cloud provider gives a set of APIs for customers to efficiently manage their cloud resources. These are available to all the users, but virtualization in the code can be used to get unauthorized access to resources belonging to other cloud tenants. Customers and third parties can then build applications on the top of unsafe APIs, further exacerbating security. </li>
                  <li><b>Clear-test Messaging- </b>Passwords and content transmitted in clear text by some cloud providers offer a convenient way to attackers to gain access to accounts and sensitive data.</li>
                  <li><b>Possibility of Data Loss-</b> There is several ways to lose cloud data. Corrupted metadata and the ability of others to gain unauthorized access can cause data loss. Key-based encryption is common and necessary. However, if the keys are inadvertently lost, the fallout is similar to losing the cloud data.</li>
                  <li><b>Service of Account Hijacking-</b> This has traditionally been a common risk, and it has a greater probability of occurring in the cloud. The attackers can use phishing and code vulnerabilities to steal user credentials, intercept passwords, and eavesdrop on activities. They can use the stolen accounts to launch attacks, change data, and redirect incoming requests to other sites.</li>
                  <li><b>Latency-</b> Some users may lower the encryption levels, because encryption slows down the response time. Users need to classify data into sets( based on criticality and privacy) and specify compulsory encryption levels for each set. In addition, there would be a latency compared to using applications  hosted within the enterprise, because the access is over the Wide Area Network(WAN) and the Internet.</li>
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