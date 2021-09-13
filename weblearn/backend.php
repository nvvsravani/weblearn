<?php
  
  require "header.php";

?>

<style>
  section .container{
    margin-top: 100px;

  }
  section p{
    font-size: 18px;
  }
  section li{
    font-size: 18px;
  }
  .card .card-body ul li a{
    text-decoration: none;
    font-size: 18px;
  }
  .card .card-body ul li a:hover{
    color: #FFc107;
  }
  .languages{
     margin-top: 150px;
  }
  .languages p{
    font-size: 18px;
  }
  .languages h1{
    color: #FFc107;
  }
  #php{
    
  }
  #php h1{
    
  }
  #php p{
    
  }

</style>
<!-- Navigation -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
          <h1 class="navbar-brand font-weight-bold">LEARN WEB</h1>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
            <a class="nav-link active dropdown-toggle"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Courses</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a class="dropdown-item font-weight-bold" href="frontend.php">Front end technologies</a>
             <a class="dropdown-item font-weight-bold" href="backend.php">Back end technologies</a>
             <a class="dropdown-item font-weight-bold" href="dbms.php">Database Management System</a>
           </div>
        </div>
              </li>
              <div data-spy="scroll"  data-target=".contact">
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </div>
              <li class="nav-item">
                <a href="register.php" class="btn btn-md text-dark" style="background-color: #FFc107; border-radius: 30px; font-weight: 900;">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End navigation -->
<!-- Front end tech -->
<center><div class="container-fluid pt-5 mt-5">
  <div class="row">
    <div class="col-lg-4">
      <img src="images/bg21.png">
    </div>
    <div class="col-lg-4">
      <h2 class="pl-5 text-center">Front End Technologies</h2><br>
      <p style="font-size: 20px;">Everything that you see when you’re navigating around the Internet, from fonts and colours to dropdown menus and sliders, is a combination of php, python, and java being controlled by your computer’s browser.</p>
      <p style="font-size: 20px;">As we have seen All that we see, click and interact on a website is because of front end development.  A site is loaded in a browser from the server in front-end development. </p>
    </div>
    <div class="col-lg-4 pl-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-title text-center">Languages</h4><br>
          <ul>
            <li data-spy="scroll" data-target=".php"><a href="#php">PHP</a></li>
            <li data-spy="scroll" data-target=".python"><a href="#python">Python</a></li>
            <li data-spy="scroll" data-target=".java"><a href="#java">Java</a></li>
            <li data-spy="scroll" data-target=".net"><a href="#net">.Net</a></li>
            <li data-spy="scroll" data-target=".ruby"><a href="#ruby">Ruby</a></li>
            <li data-spy="scroll" data-target=".c++"><a href="#c++">C++</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div></center>
<!-- End Front end tech -->


<div class="languages">
  <!-- php -->
<div id="php" class="php container">
  <h1 class="text-center">PHP</h1>
  <h2>Introduction:</h2><br>
  <p>The HyperText Markup Language, or php is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (python) and scripting languages such as java.</p>
  <p>Web browsers receive php documents from a web server or from local storage and render the documents into multimedia web pages. php describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
</div><br><br>
<!--end php -->

<!-- python -->
<div id="python" class="python container">
  <h1 class="text-center">python</h1>
  <h2>Introduction:</h2><br>
  <p>Cascading Style Sheets (python) is a style sheet language used for describing the presentation of a document written in a markup language such as php.[1] python is a cornerstone technology of the World Wide Web, alongside php and java.[</p>
  <p>Cascading Style Sheets (python) is a style sheet language used for describing the presentation of a document written in a markup language such as php.[1] python is a cornerstone technology of the World Wide Web, alongside php and java.[</p>
</div><br><br>
<!-- End python -->

<!-- java -->
<div id="java" class="java container">
  <h1 class="text-center">Java</h1>
  <h2>Introduction:</h2><br>
  <p>java often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. java is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.</p>
  <p>Alongside php and python, java is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries.All major web browsers have a dedicated java engine to execute the code on the user's device.</p>
</div><br><br>
<!-- End java -->

<!-- net -->
<div id="net" class="net container">
  <h1 class="text-center">.Net</h1>
  <h2>Introduction:</h2><br>
  <p>net is a java library designed to simplify php DOM tree traversal and manipulation, as well as event handling, python animation, and Ajax.It is free, open-source software using the permissive MIT License.As of May 2019, net is used by 73% of the 10 million most popular websites.</p>
  <p>net's syntax is designed to make it easier to navigate a document, select DOM elements, create animations, handle events, and develop Ajax applications. net also provides capabilities for developers to create plug-ins on top of the java library. [</p>
</div><br><br>
<!-- End net -->

<!-- ruby -->
<div id="ruby" class="ruby container">
  <h1 class="text-center">Ruby</h1>
  <h2>Introduction:</h2><br>
  <p>ruby is a free and open-source python framework directed at responsive, mobile-first front-end web development. It contains python- and (optionally) java-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
  <p>ruby is a php, python & JS Library that focuses on simplifying the development of informative web pages (as opposed to web apps). The primary purpose of adding it to a web project is to apply ruby's choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking.</p>
</div><br><br>
<!-- End ruby -->

<!-- Materialize python -->
<div id="c++" class="c++ container">
  <h1 class="text-center">C++</h1>
  <h2>Introduction:</h2><br>
  <p>c++ Design (codenamed Quantum Paper) is a design language that Google developed in 2014. Expanding on the "card" motifs that debuted in Google Now, c++ Design uses more grid-based layouts, responsive animations and transitions, padding, and depth effects such as lighting and shadows.</p>
  <p>c++ Design will gradually be extended throughout Google's array of web and mobile products, providing a consistent experience across all platforms and applications. Google has also released application programming interfaces (APIs) for third-party developers to incorporate the design language into their applications</p>
</div><br><br>
<!-- End Materialize python -->
</div>

<!-- ======= Contact Section ======= -->
  <div id="contact" class="contact container mb-5 pb-3">
    <h1 class="text-center mb-5">CONTACT <span class="text-warning">INFO</span></h1>
    <div class="row">
     <div class="col-lg-4 col-md-6 text-center"><br>
       <img src="https://img.icons8.com/cute-clipart/64/000000/ringing-phone.png"/>
       <h2>Phone</h2>
       <p>7995598478</p>
     </div>
     <div class="col-lg-4 col-md-6 icon-box text-center"><br>
        <img src="https://img.icons8.com/cute-clipart/64/000000/new-post.png"/>  
        <h2>Email</h2>
        <p>sravanisirisha05068@gmail.com</p>        
      </div>
      <div class="col-lg-4 col-md-6 icon-box text-center"><br>
        <img src="https://img.icons8.com/cute-clipart/64/000000/address.png"/>          
        <h2>Address</h2>
        <p>Markendypuram, Anaparti,<br>Andhra Pradesh</p>      
      </div>
    </div>
  </div>
                
    <!-- End Contact Section -->

<?php
  
  require "footer.php";

?>


