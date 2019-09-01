<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cloud Is Everywhere</title>
  </head>
  <body>
    <?php
    include 'header8.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside8.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
       <center><h1><u>Cloud deployment Techniques</u></h1></center>       
              <p>In this module, we discuss the building elements of a cloud environment and deployment technologies. It is interesting to note that these have existed and are in use since the dawn of computing in the 1950s. They include hosted environments, virtualization technologies, self-service portals, etc. Although some organizations have been circumspect about whether or not to move to public clouds, the rising adoption rates is proof that is going to be main-stream computing.</p>
              
              <p>The adoption rates may vary. Large organizations have spent decades building their fault-tolerance IT infrastructure, resilient datacenters, and several layers of logical and physical security to meet the business needs and industry regulations. Going forward, they are prudently adopting and taking advantage of cloud computing benefits, such as on-demand unlimited resources, pay-per-use billing, and cost savings, available to them.</p>
              
              <p>The following steps should assess whether moving to a cloud is worthwhile initiative for you:</p>
              
              <ul>
              <li>Identify the end goals you want to achieve by moving a service to the cloud. Be specific about the advantages(e.g., convenience, lower upfront expenses, unlimited scalability) and the related trade-offs (high operating expenses, less control, lower security, risks of non-compliance).</li>
                  <li>Calculate the upfront and operational expenses in the cloud verses handling them internally. The operational difference between internal and cloud resources cloud be negligible or significant and would strongly influence your decision.</li>
                  <li>Assess the risks in the cloud that stem from the fact that control now rests with a third party.</li>
                  <li>Pay close attention to the contracts and SLA that govern the cloud provider. Besides performance and service availability, it must be transparent on issues such as certifications for the cloud provider and customer, service delivery capabilities, and contractual obligations.</li>
                  <li>Whatever course is selected, include an emergency plan. What if the provider goes out of business? How much advance notice will it give you to save your data and mitigate your service to your internal datacenter or to a another provider?</li>
              </ul>
              
              
                <br><br>
			<center>
		   <img src="img1/factors%20for%20a%20successful%20cloud%20implementation.png" class="img-fluid" alt="Responsive image" width=50%>
		   </center>
              <br><br>
              
              <p>Figure 1 shows the factors to consider while selecting a provider and the implementation process</p>
              
              <h2><u>Potential Network Problems and their Mitigation</u></h2>
              <p>Several problems can surface during the deployment of a cloud. The cloud service provider must work with the user organization to understand the root cause of these problems and implement ways to mitigate their impact.</p>
              
              <ul>
                  <li><b>Network-Node Latency- </b>Reducing the latency between network nodes is critical to improving cloud performance. Using an optimized network fabric for the cloud will serve to minimize transport latency and delays.</li>
                  <li><b>Transport-Protocol Latency- </b>To mitigate the impact of Transmission Control Protocol(TCP) latency, reduce congestion and data loss and improve performance. It is best to design and deploy an optimized Ethernet fabric for the cloud.</li>
                  <li><b>Number-of-nodes Traversed-</b> In traditional three-tier architecture ( web front-end, application, and database) multiple hops are needed for data to traverse between servers and end-users. Cloud providers must reduce the latency between nodes within a multi-tier topology so that data packets traverse shorter distances.</li>
                  <li><b>TCP Congestion-</b> TCP is normally used for transmission of data packets on the internet. During network congestion or packet transmission errors, TCP uses smaller windows, which negatively impacts throughput rates and reliability. The work-around is to design and implement a congestion-free network fabric. This, in turn, enables TCP to use larger windows, thus enabling a higher throughput.</li>
              </ul>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                     </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer8.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>