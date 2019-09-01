<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="A platform where you can excell in the field of cloud computing">
  <meta name="keywords" content="virtual machine,hypervisor">
  <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cloud Is Everywhere | Virtual machine and hypervisor</title>
  </head>
  <body>
    <?php
    include 'header7.php';
    ?>

      <div class="container-fluid bodyp">
      <div class="row">
    <div class="col-md-2" id="asidep">
          <?php 
    include 'aside7.php';
        ?>
          
          
          </div>
          <div class="col-md-10">
              <center><h1><u>Virtual Machine and Hypervisor</u></h1></center>
              <h2><u>Virtual Machines:</u></h2>
              <p><b>“A virtual machine is self-contained computing environment that behaves as a separate computer”.</b>It is a software computer that, like a physical computer, runs an operating system and applications.</p>
              
              <p><b>The virtual machine is comprised of:</b><br>
                  A set of specification and configuration files backed by the physical resources of a host makes a
                  virtual Machine (VM).</p>
              
              <p>Every virtual machine has virtual devices that provide the same functionality as physical hardware and have portability, manageability along with security as major benefits.</p>

              <p>It consists of different types of files that are stored on a supported storage device. The key files
                  are the configuration file, virtual disk file, NVRAM setting file, and the log file.</p>

              <p>Virtual machines have virtual hardware, including a virtual CPU, memory, hard drive, network interface, and other devices. These virtual hardware devices provided by the virtual machine are mapped to real hardware on physical machines also the virtual machines does not require specialized, hypervisor-specific hardware.</p>
              
              <h2><u>Requirement</u></h2>
              <p>For proper functioning a virtual machine requires:-</p>
              <ol type="i">
                  <li>Bandwidth.</li>
                  <li>Storage.</li>
                  <li>Processing Capacity.</li>
              </ol>
              
              <p>System Independence and Security is the advantage of virtual Machine along with the cost and management. VMware, Qemu, KVM, Xen, and Virtual Box are the examples of Virtual Machine.</p>
              <p>For realization of Virtualization virtual machine acts as the most important component.</p>
              
              <h2><u>Hypervisor</u></h2>
              <p>Hypervisor, also known as a virtual machine manager, is a program that allows abstraction of underlying hardware .It recreates the underlying environment, where guest system is installed. Hypervisor is the fundamental element of virtualization.</p>
              
              <p><b>Properties: By Popek and Goldberg: The criteria that need to be met by a VMM to efficiently support virtualization is-</b></p>
              
              <br><br>
			<center>
		   <img src="img1/properties.png" width="600px" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p><b>Type:</b><br>
                  Hypervisor’s type totally depends upon the place they are hosted and operated. Based on these
                  there are two major categories of hypervisors.</p>
              
              <br><br>
			<center>
		   <img src="img1/Types%20of%20Hyperviser.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p><b>Type I Hypervisors:</b><br>It is also known as “bare metal hypervisors” or “embedded hypervisor”</p>
              
              <p>They take the place of operating system and interact directly with the interface exposed by
underlying hardware. In modern computing system, the model of hardware is expressed in terms
of Instruction set architecture (ISA).ISA is a interface which defines instruction set for processor,
registers and memory. Bare metal hypervisor emulates the exposed ISA interface in order to
allow management of guest operating systems.
</p>
              
              <br><br>
			<center>
		   <img src="img1/Native%20virtual%20Machines.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p><b>Type II Hypervisors:</b><br>
The type of hypervisor is also called as “hosted virtual machine” since it is hosted within the
operating system. Hypervisors run on a conventional operating system just as other computer
programs do. They are programs managed by operating system, interact with the Application
Binary Interface (ABI) and emulate ISA of virtual hardware for guest operating systems.
</p>
              
              <br><br>
			<center>
		   <img src="img1/hosted%20hypervisor.png" class="img-fluid" alt="Responsive image">
		   </center>
              <br><br>
              
              <p>Conceptually a hypervisor is internally organized with respect to three modules which coordinate
their activity in order to emulate the underlying hardware. They are:
</p>
              <p><b>Dispatcher:</b> It acts as an entry point and reroutes the instruction to one of the other two modules.<br>

                  <b>Allocator: </b>Decides system resources to be provided to VM.<br>

                  <b>Interpreter:</b> It consists of interpreter routines and is executed whenever VM executes privileged instructions.</p>
              
              <center><p><b>“The architecture of VMM, along with the hardware design of the host machine, leads to the
realization of virtualization.”
</b></p></center>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              </div>   
    </div>
      </div>
      
      
      
      
      <?php
      include 'footer7.php'
          ?>
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>