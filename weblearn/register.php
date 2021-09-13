
<?php 


  
    require "header.php"; 

    require "dbconnection.php";

    $status = null;

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $frontend = implode(',', $_POST['frontend'] );
      $backend = implode(',', $_POST['backend'] );
      $dbms = implode(',', $_POST['dbms'] );

      $sql = "INSERT INTO data (name, email, password, frontend, backend, dbms) VALUES (:name, :email, :password,:frontend, :backend, :dbms)";

      /*$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));

      $date_time =  $date->format('d D y Y g G h i s');*/

      $stmt = $pdo->prepare($sql);

      $stmt->execute(['name'=>$name, 'email'=>$email, 'password'=>$password, 'frontend'=>$frontend, 'backend'=>$backend, 'dbms'=>$dbms]);

      if($stmt->rowCount() > 0){
        $status = "success";
      }else{
        $status = "fail";
      }
    }



?>

<style>
  section.background{
     padding-top: 70px;
     padding-bottom: 200px;
  }
  form label.form-label{
    font-size: 20px;
    font-weight: 600;
    color: black;
  }
  
</style>
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
                <a class="nav-link " href="about.php">About</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Courses</a>
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
                <button href="#" class="btn btn-md text-dark" style="background-color: #FFc107; border-radius: 30px; font-weight: 900;">Register</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>


<section class="background">

  <div class="container">
    <?php if ($status == "success") {
       echo '<div class="alert alert-success" role="alert">
                Registered Successfully!
              </div>';
      } elseif ($status == "fail") {
        echo '<div class="alert alert-danger" role="alert">
                Registeration Failed!
              </div>';
      }
       ?>
    
    <div class="row mt-5 pt-5" id="popup-1">
      <div class="col-lg-6">
        <img src="images/bg17.jpg">
      </div>
      <div class="col-lg-6">
        <form method="POST" action="">
            <div>
              <label class="form-label">Name</label>
              <input type="text" required class="form-control" name="name" aria-describedby="emailHelp">
            </div><br>
            <div>
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div><br>
            <div>
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control">
            </div><br>
            <div>
              <label class="form-label">Conform_Password</label>
              <input type="password" name="conform" class="form-control">
            </div><br>
            <label class="form-label">Front End Technologies</label><br><br>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox"value="html">HTML
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox" value="css">CSS
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox" value="javascript">JavaScript
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox" value="javascript">JQuery
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox" value="javascript">Bootstrap
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="frontend[]" type="checkbox" value="javascript">Materialize CSS
            </div><br><br>
            <label class="form-label">Back End Technologies</label><br><br>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="backend[]" type="checkbox"value="php">PHP
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="backend[]" type="checkbox" value="python">Python
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="backend[]" type="checkbox" value="java">Java
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="backend[]" type="checkbox" value="net">.Net
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="backend[]" type="checkbox" value="ruby">Ruby
            </div><br><br>
            <label class="form-label">Database Management System</label><br><br>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="dbms[]" type="checkbox"value="mysql">MySQL
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="dbms[]" type="checkbox" value="mariadb">>MariaDB
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="dbms[]" type="checkbox" value="teradata">Teradata
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="dbms[]" type="checkbox" value="dbvisualizer">DbVisualizer
            </div>
            <div class="form-check form-check-inline text-dark">
              <input class="form-check-input" name="dbms[]" type="checkbox" value="mangodb">MongoDB
            </div><br>

            <button type="submit" name="submit" class="btn btn-warning mt-5 font-weight-bold">Submit</button>

        </form>
      </div>
    </div>
  
  </div>
</section>
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

 