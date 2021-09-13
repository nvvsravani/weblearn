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


