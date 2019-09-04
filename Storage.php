<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Types of storages on Cloud Platform">
    <meta name="keywords" content="Storage on Cloud Platform">
    <meta name="author" content="Pramod Jana">

    <title>Cloud Is Everywhere |Storage</title>
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cloud Is Everywhere</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="body">
    <?php
    include 'header2.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside2.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              
              
              <center><h1><u>Storage</u></h1></center>
<p><b>Data is unquestionably the most important entity in digital world. Storage solutions remain a
top priority in industry because the integrity, availability and protection of data are vital to
business productivity and succes</b></p>

<p>Today there are variety of options, the most prevalent being network-attached storage (NAS),
storage area networks (SAN) and content address storage (CAS). Choosing the right storage
system can be an individual decision.</p>

<h3>Key criteria include:</h3>
<p>
<b>Capacity -</b> the amount and type of data at file level or block level that
needs to be stored and shared.<br>
<b>Performance -</b> I/O and throughput requirements.<br>
<b>Scalability –</b> Growth of data on demand.<br>
<b>Data protection -</b> Backup and recovery requirements.<br>
<b>Availability and Reliability<br>
Staff and available resources<br>
Budget
</b></p>

<p>While one type of storage media is usually sufficient but large enterprises will often have a
mixed storage environment, implementing different systems for specific departments,
workgroups and remote offices.</p>

<h2><u>Network Address Storage (NAS)</u></h2>
<p>It was developed to address the challenges inherent in a server- based infrastructure. NAS is a
special purpose device, comprised hard disks and management software, which is dedicated to
serve files over a network. For a simple and cost-effective way to achieve fast data access for
multiple clients at the file level NAS is the ideal choice. The NAS systems can integrate into any
environment and can serve files across all operating platforms.</p>

<h3>Characteristics:</h3>
<ul>
  <li> NAS is a dedicated storage device and that operates in a client/server mode
    connected to the file server via LAN.</li>
	<li>NAS is used to provide centralized fault-tolerant data storage for a network.</li>
	<li>It uses standard network and file sharing protocols.</li>
	<li>Communication with a NAS device is at the file level</li>
</ul>

<p>
<b>Advantage:</b> no distance limitation<br>
<b>Disadvantage:</b> Speed, latency and security.
</p>

<h2><u>Storage Area Network</u></h2>
<p>It is networked architecture that provides I/O connectivity
  between hosts and storage devices a storage area network, is a
  dedicated, high performance storage network that transfers data
  between servers and storage devices, separate from the local area
  network.</p>

  <p>With the property of high degree of sophistication, management
    complexity and cost, SANs are generally implemented for mission-critical
    applications in the enterprise.</p>

    <p>In the infrastructure of SAN, storage devices such as NAS, DAS, RAID arrays or tape libraries
are connected to servers using Fiber Channel.</p>

<p>Strength of SAN lies in the ability to move large blocks of data, important for bandwidth-
intensive applications such as database, imaging and transaction processing.</p>

              <br><br>
			  <center>
              <img src="img1/SAN.png" class="img-fluid" alt="Responsive image">
			  </center>
              <br><br>
              
<h3>Characteristics:</h3>
<ol type="i">
  <li>i. A Storage Area Network is a specialized, dedicated
    high speed network joining servers and storage, including disks, disk arrays, tapes, etc.</li>
	<li>Data store is separated from the processors.<li>
	<li>It has high capacity, high availability, high scalability, ease of configuration,
    ease of reconfiguration.</li>
	<li>Fiber Channel is the de facto SAN
  networking architecture, although other network standards can also be used.</li>
	<li>SAN has distributed architecture.</li>
	<li>Communication over a SAN is at the block I/O level.</li>
</ol>

<h3>Types:</h3>
<p>The storage network can be Fiber channel or an IP network.</P><br>
<center>
  <img src="img1/Types%20of%20storage%20network.png" class="img-fluid"
  alt="Responsive image" width="400px"><br>
</center>
  
  <h3>Advantage:</h3>
  <ul>
    <li>Storage consolidation</li>
    <li>Data sharing</li>
    <li>Non-disruptive scalability for growth</li>
    <li>Improved backup and recovery</li>
    <li>Tape pooling</li>
    <li>LAN-free and server-free data movement</li>
    <li>High performance</li>
    <li>High availability server clustering</li>
  </ul>

<h3>Difference:</h3>
<p>NAS is used for low-volume access to a large amount of storage by many users whereas SAN is
the solution for terabytes of storage and multiple, simultaneous access to files, such as streaming
audio/video.</p>

<p><b>Both the technologies complement each another.</b></p>

<h2><u>Content Address Storage:</u></h2>
<p>Content-addressable storage (CAS), is also referred as associative storage, it is a mechanism
for storing information that can be retrieved based on its content and not on its storage location.
CAS is used for high-speed storage and retrieval of fixed contents. Content-addressable storage
system is permanent-storage analogue to content-addressable memory.</p>

<h3>Characteristics:</h3>
<center>
<img src="img1/characteristics%20of%20CAS.png" class="img-fluid"
alt="Responsive image" width="400px">
</center><br>

<p>CAS provides fast access to fixed content by assigning permanent place on the disk. No copying
or modification of data once it has been stored.</p>

<p>When an object is stored, the object is given a name which uniquely identifies it, and specifies
the storage location. The type of address is called a "content address" .CAS eliminates the need
for a centralized index, so it is not necessary to track the location of stored data. In CAS, data is
stored on disk and not on tape.</p>

<h3>CAS system is needed for the following below reason:</h3>
<ol>
  <li>Storing the static data.</li>
	<li>Managing the fixed data or content.</li>
	<li>To provide security.</li>
	<li>To check availability of content.</li>
	<li>To provide optimized and centralized managed solution.</li>
</ol>

<p>CAS architecture is a Redundant Array of Independent Nodes (RAIN). It contains storage nodes
and access nodes networked as a cluster by using a private LAN that is internal to it.</p>

<p>A significant benefit of CAS is that it minimizes the storage space consumed by data backups
and archives. Another advantage is authentication.</p>

<p>Since CAS is used to stores fixed content and make uses of hash (MD5 or similar) of the
  content to provide access key. It requires specific server to mediate between user and
  storage and to provides long term and tamper evident storage.</p>

              
              
               </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer2.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>