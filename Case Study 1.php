<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="Public cloud, weather forecasting">
  <meta name="author" content="Pramod Jana">
      



    <title>CLoud is Everywhere | Case Study 1</title>
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:55px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header5.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside5.php';
        ?>
          
          
          </div>
          <div class="col-md-10">

              <center><u><h1>Weather Forecasting Using Public cloud</h1></u></center>
              
              <p>Weather forecasting requires massive computations. It is similar to CAE and FEA-mechanical computations for stress or thermal analysis but is more compute-intensive. Numerical Weather Prediction (NWP) models are real-time weather conditions sourced from satellites and weather stations as input for mathematical models to predict the weather. The underlying idea of NWP is to take a sample of the atmospheric thermal and fluid state at a given instant and use thermodynamics and fluid dynamics to estimate their state at some time in the future. NWP algorithms produce an enormous number of datasets, which require hours or days of highly-intensive mathematical analysis to arrive at near and long-term predictions of weather.</p>
              
              <p>Weather forecasting institutions can use public clouds. The elasticity and the pay-for-what-you-use model provide more benefits to them than to commercial organizations such as banks, Independent Software Vendors (ISV), etc. The two key requirements for them are the following:</p>
              
              <ul>
                  <li><b>Need for Large Compute Resources-</b> They require the availability of hundreds to thousands of high-memory, high-CPU VMs.</li>
                  <li><b>Need for High Bandwidth-</b> Theoretically, they need InfiniBand-enabled public clouds. Several high-performance solutions and connectivity providers have products that enable up to 40 Gbps of fabric speed. For example, Mellanox Technologies (based in Sunnyvale, California) provides switches and gateways to enable 40 Gbps throughput, one micro-second application latency, and an efficient Remote Direct Memory Access (RDMA) between servers and storage systems. The RDMA is used to enhance the performance of servers by off-loading computations from the server CPU or the OS to the hardware switch or gateway. Products by Mellanox Technologies can integrate with the public cloud with fast GbE bandwidth and throughput of more than 10 Gbps. They can use cloud-based storage and extra-large VMs with high CPU and memory.
                  </li>
              </ul>
              
              <p>The customer had an option to use the cloud service provider’s database-as-a-service, but it opted to use its own relational database, running on VMs with attached persistent storage.</p>
              
              
              
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