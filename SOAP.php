<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Use of Simple Object Access Protocol (SOAP) for implementing Web services">
    <meta name="keywords" content="SOAP">
    <meta name="author" content="Pramod Jana">

   
    <title>Cloud Is Everywhere | SOAP</title>
 
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
              
              <center><h2><u>SOAP</u></h2></center>
<p><b>Simple Object Access Protocol (SOAP) for implementing Web services.</b></p>

<p>SOAP protocol allows communication between programs via the Internet on different platforms,
using different technologies and written in different programming languages.</p>

<h3>It is primarily based on-</h3>
<p><b>XML information set:</b> For message format.<br>
<b>Application layer protocols:</b> For message negotiation and transmission.</p>

<h3>Components:</h3>
<p>As a protocol, SOAP has four basic parts:</p>
  <ul>
    <li>Rules for the contents of a message and how it is processed.</li>
    <li>Encoding guidelines for application and its defined data types.</li>
    <li>Remote procedure calls (RPCs) and responses guidelines are explicitly mentioned.</li>
    <li>Format for exchanging messages through certain protocols.</li>
  </ul>
<h3>Structure:</h3>
<p>SOAP is written using Extensible Markup Language (XML) The structure supported by SOAP
has following parts:</p>
<ul>
  <li>Envelope</li>
  <li>Header</li>
    <li>Body</li>
    <li>Fault</li>
  </ul>


<p>An XML document is identified as a SOAP message in envelope. The message is an XML
document structured with the envelope element encapsulating both the header element and the
body element, in that order. The fault element is located within the body.</p>

<p> The SOAP envelope contains two parts:</p>
  <ol>
    <li>An optional header providing information on authentication, encoding of data,
       or how a recipient of a SOAP message should process the message.</li>
	<li>The body contains the actual message. The messages are generally defined using the
WSDL (Web service definition language) specification.</li>
</ol>


<p>SOAP is part of the set of standards specified by the W3C and alternative to Representational
State Transfer Protocol</p>

<h3>Advantages</h3>
    <ul>
      <li>It posses neutral character which explicitly makes it suitable
        to use with any transport protocol.</li>
    <li>Tunnels easily through existing firewalls and proxies.</li>
  </ul>
          

<h3>Disadvantages</h3>
<ul>
  <li>Serializing: When using standard implementations and the default SOAP/HTTP binding,
    the XML info set is serialized as XML.<li>
  <li>The roles of the interacting parties are fixed. Only one party can use
    the services of the other.</li>
  <li>The verbosity of the protocol led to the domination in the field by services
    using the HTTP protocol more directly.</li>
  </ul>

<p><b>SOAP API (Application Programming Interface) is used to control virtualized
environments like Cloud.</b></p>

              
              
              
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