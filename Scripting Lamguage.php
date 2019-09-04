<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Knowledge about the scripting languages used in cloud">
    <meta name="keywords" content="Scripting Language">
    <meta name="author" content="Pramod Jana">

    
    <title>Cloud Is Everywhere | Scripting Language</title>
  
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
              
              <center><h1><u>XML and JSON</u></h1></center>

<h2><u>XML</u></h2>
<p><b>XML stands for Extensible Markup Language.</b> (W3C) World Wide Web Consortium
  standard. The XML standard is a flexible way to create information formats and electronically
  share structured data via the public network. It is use to store, transport and describe data.
  XML is used for representation of data structure.</p>

  <p>It defines a set of rules for encoding documents in a format that is both human
    and machine readable.</p>

  <h3>Goal:</h3>
  <p>The design goals of XML across Internet is-</p>
    <ol type='a'>
      <li>Simplicity</li>
<li>Generality</li>
<li>Usability</li>
              </ol>

<h3>Characteristics:-</h3>
<ol>
  <li>It is a textual data format with strong support via Unicode.</li>
  <li>XML documents are known as well formed documents.</li>
  <ul>
    <li>The document contains only properly encoded legal Unicode characters.</li>
    <li>Special syntax characters are not used except when performing their
      markup delineation roles</li>
    <li>The begin; end, and empty-element tags that delimit the elements
      are correctly nested,with none missing and none overlapping.</li>
      <li>A single "root" element contains all the other elements.</li>
    </ul>
    <li>It is complex and verbose language.</li>
    <li>Xml version="1.0".</li>
  </ol>

  <h3>Advantage:-</h3>
  <ul>
    <li>It is possible to create "dialects" for any kind of purpose.</li>
	<li>XML Schema for data type, structure validation makes possible to
    create new data types.</li>
	<li>Built in support for namespaces.</li>
</ul>

<h3>Disadvantage:-</h3>
<ul>
  <li>Relatively wordy.</li>
</ul>

<p><b>XML is future of WEB.<br>
XML data is known as self-describing or self-defining, meaning that the
structure of the data is embedded with the data, thus when the data arrives
there is no need to pre-build the structure to store the data; it is dynamically
understood within the XML.</b></p>

<h2><u>JSON</u></h2>
<p><b>JSON (JavaScript Object Notation)</b> a lightweight data-interchange format,
  easy for humans to read and write and machines to parse and generate.</p>

  <p>It is based on a subset of the Java Script Programming language.</p>

  <p>JSON is a textual representation which is completely language independent.
    It make use of familiar conventions similar to C-family of languages,
    including C, C++, C#, Java, JavaScript, Perl, Python, and many others.
    These properties make JSON an ideal data-interchange language.</p>

<h3>JSON Structures:</h3>
<ul>
  <li>A collection of name/value pairs: It can be an object,
    record, struct, dictionary, hash table, keyed list, or associative array.</li>
    <li>An ordered list of value: An array, vector, list, or sequence forms ordered list.</li>
  </ul>

<p>These are universal data structures supported by all modern
  programming languages in one form or another.</p>

<p>In JSON, they can take on any of these forms:</p>
  <ol type="a">
    <li><b> Object:</b> It is an unordered set of name/value pairs.
      An object begins with { (left brace) and ends with}
      (right brace).Names is followed by: (colon) and the
      name/value pairs are separated by, (comma).</li>
      <li> <b>Array:</b> An array is an ordered collection of values</li>
      <li><b>Value:</b> A value can be a string in double quotes, or a
        number, or true or false or null , or an object or an array</li>
        <li> <b>String:</b> It is a sequence of zero or more Unicode characters,
          wrapped in double quotes, using backslash escapes.</li>
          <li><b>Number:</b> Signed decimal number.</li>
<li><b> Boolean:</b> Any literal, true or false.</li>
</ol>


<h3>Characteristics:-</h3>
<ul>
  <li>The official MIME type for JSON text is " application/json "
    and its extension is .JSON</li>
	<li>JSON is code to generate and parse.</li>
	<li>Native data types are not supported by JSON.</li>
	<li>Used for native encoding and decoding in browser.</li>
	<li>Programmer can define keys and elements therefore it offers flexibility.</li>
	<li>Less overhead, as content is mostly data and it is portable data.</li>
	<li>Common and convenient format for Web services since it is a non proprietary.</li>
</ul>

<h2><u>Comparison of JSON with XML:</u></h2>
<h3>Dissimilarities</h3>
<ol type="a">
  <li>JSON doesn't use end tag</li>
	<li>It is shorter quicker to read and write in comparison of XML.</li>
	<li>JSON can use arrays.</li>
	<li>XML has to be parsed with an XML parser. JSON can be parsed by a
    standard JavaScript function</li>
  </ol>

  <h3>Similarities</h3>
  <ol type="a">
    <li>Both are self describing i.e human readable</li>
	<li>JSON and XML have hierarchical structure.</li>
	<li>Both can be parsed and used by lots of programming languages
    and also can be fetched with an XML Http Request.</li>
  </ol>

  <p>Mostly utilized in Web application development, JSON is used as a
    data format for any application where information is stored as text.
    The core reason for using JSON in Cloud computing or in other environment
    is that it is built around the concept of KEY VALUE PAIRS (KVPs) which are
    ideal since they give very precise control over the specific data user want
    to look for or extract and manipulate. at is stored in a structure
    format which make it more beneficial.</p>

              
              
              
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