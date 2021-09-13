<?php 
  require "header.php";
?>
<!-- Navigation -->
  <div class="bgimg">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
          <h1 class="navbar-brand font-weight-bold">LEARN WEB</h1>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
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
                <a href="register.php" class="btn btn-md text-dark nav-link" onclick="togglePopup()" style="background-color: #FFc107; border-radius: 30px; font-weight: 900;">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End navigation -->
 
      <!-- Hero section -->
      <div class="container text-center headerset">
        <h1>Welcome to Learn Web!</h1>
        <h2>Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great.</h2><br><br>
        <a href="register.php"><button class="btn btn-warning text-dark btn-lg mt-5 text-dark font-weight-bold">Get Started</button></a>

      </div>
      <!--End hero section-->
  </div>
    
<header>
  <center><div class="container">
    <h2 class="text-center pt-5 pb-5 font-weight-bold">Technologies</h2>
     <div class="card mb-3" style="max-width: 1040px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/bg13.jpeg" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body pt-5">
              <center><h4 class="card-title text-white"><a href="frontend.php">Front End Technologies</a></h4><br>
              <p class="card-text text-white">HTML,&nbsp; CSS,&nbsp; JavaScript,&nbsp; JQuery,&nbsp; Bootstrap,&nbsp; Materialize CSS</p></center>
            </div>
          </div>
        </div>
    </div><br>
    <div class="card mb-3" style="max-width: 1040px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/bg11.png" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body pt-5">
              <center><h4 class="card-title text-white"><a href="backend.php">Back End Technologies</a></h4><br>
              <p class="card-text text-white">PHP, &nbsp; Python, &nbsp;Java, &nbsp;.Net, &nbsp;C++, &nbsp;Ruby</p></center>
            </div>
          </div>
        </div>
    </div><br>
     <div class="card mb-3" style="max-width: 1040px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/bg9.jpg" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body pt-5">
              <center><h4 class="card-title text-white"><a href="dbms.php">Database Management System</a></h4><br>
              <p class="card-text text-white">MySQL, &nbsp;MariaDB, &nbsp;Teradata &nbsp;MongoDB, &nbsp;DbVisualizer,</p></center>
            </div>
          </div>
        </div>
    </div>   
  </div></center>
</header>
   

  <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>What will you be able to do?</h3>
          <p>Here are just a few things you'll be able to do with this Career Path</p>
          
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box"><br>
               <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ffcd0b"></path><g fill="#000000"><path d="M86.92192,12.2464c-15.85149,0 -23.07188,7.99146 -24.66496,11.28272c-7.87135,3.51252 -13.13376,11.8962 -13.13376,20.98448c0,5.96628 1.17346,10.44748 2.6037,13.72436c-1.69437,1.0288 -2.6037,2.29084 -2.6037,3.79212c0,2.38962 1.03442,6.74145 1.91947,9.74138l0.25569,0.88591c0.90532,3.13822 1.91633,6.635 5.2002,7.56983v3.53283c-9.02387,-1.88474 -19.64468,-3.29154 -31.34528,-3.29154c-0.51443,0 -1.00919,0.21438 -1.35767,0.59421c-0.34664,0.37799 -0.52138,0.88645 -0.47897,1.40089l2.13914,25.66251h-1.22442c-2.54266,0 -4.6096,2.06694 -4.6096,4.6096v14.75072c0,2.54266 2.06694,4.6096 4.6096,4.6096h3.21952l1.39728,16.74581c0.07929,0.95695 0.876,1.69259 1.83664,1.69259c27.02332,0 54.45707,9.03162 54.7318,9.12197c0.18807,0.06269 0.38795,0.09723 0.5834,0.09723c0.19545,0 0.39533,-0.03454 0.5834,-0.09723c0.27473,-0.09035 27.70848,-9.12197 54.7318,-9.12197c0.96064,0 1.75735,-0.73564 1.83664,-1.69259l1.39728,-16.74581h3.21952c2.54266,0 4.6096,-2.06694 4.6096,-4.6096v-14.75072c0,-2.54266 -2.06694,-4.6096 -4.6096,-4.6096h-1.22082l2.13554,-25.66251c0.04241,-0.51259 -0.13048,-1.0229 -0.47897,-1.40089c-0.34849,-0.37983 -0.84324,-0.59421 -1.35767,-0.59421c-11.7006,0 -22.32141,1.4068 -31.34528,3.29154v-3.53283c3.28388,-0.93667 4.29488,-4.43161 5.2002,-7.56983l0.25569,-0.88591c0.88504,-3.00177 1.91947,-7.35176 1.91947,-9.74138c0,-1.71474 -1.16982,-3.12498 -3.38157,-4.22427c0.86769,-2.56313 1.53773,-5.7295 1.53773,-9.60453c0,-7.00106 -1.64911,-9.34058 -3.7345,-12.30547c-0.48493,-0.68775 -0.98193,-1.39443 -1.49452,-2.20757c2.47996,-2.05957 3.38518,-5.21421 3.38518,-7.61304c0,-0.5089 -0.41302,-0.92192 -0.92192,-0.92192c-3.02021,0 -5.56586,-1.9341 -8.78705,-4.38272c-4.99681,-3.79831 -11.21308,-8.52416 -22.55823,-8.52416zM86.92192,14.09024c10.72377,0 16.66814,4.51911 21.44184,8.14963c3.05709,2.32324 5.73379,4.36019 8.9347,4.70683c-0.20467,1.99319 -1.12834,4.33547 -3.23032,5.73679c-0.40749,0.27289 -0.52982,0.81659 -0.2809,1.23883c0.70066,1.18559 1.39198,2.16741 2.0023,3.03585c1.97291,2.80264 3.39958,4.82838 3.39958,11.2431c0,7.13382 -2.40333,11.90478 -3.96138,14.25015c-0.68591,-5.20885 -2.77345,-18.00749 -7.28533,-24.02394c-0.27658,-0.37061 -0.79173,-0.47905 -1.19922,-0.24489c-3.89972,2.25686 -8.09077,3.56524 -17.97744,3.56524c-9.15282,0 -18.12895,-3.69621 -21.34461,-8.78705c-0.21942,-0.35033 -0.63705,-0.50124 -1.03716,-0.39614c-0.39458,0.11432 -0.66623,0.47473 -0.66623,0.88591c0,1.81065 -1.19435,4.24749 -2.70814,7.32854c-2.55741,5.21807 -5.99784,12.23166 -6.46064,21.83438c-2.04851,-2.42834 -5.58194,-8.07308 -5.58194,-18.09988c0,-8.48904 4.96235,-16.29597 12.34508,-19.43234c0.22679,-0.09404 0.40478,-0.27914 0.49697,-0.50778c0.04241,-0.1051 5.00631,-10.48324 23.11282,-10.48324zM67.20508,35.70494c4.26296,4.72207 12.72131,7.88674 21.56068,7.88674c8.6347,0 13.52929,-0.89933 18.1647,-3.39958c4.95809,7.4823 6.7159,24.52036 6.73434,24.69737c0.03688,0.35402 0.26943,0.65626 0.60501,0.77427c0.33189,0.11801 0.71077,0.03469 0.96153,-0.21607c0.11446,-0.11536 1.48443,-1.54133 2.86299,-4.24227c0.89833,0.48289 1.09015,0.82469 1.09478,0.82469c0,1.56911 -0.74304,5.22507 -1.76821,8.69702l-0.26289,0.90391c-1.15056,3.98823 -1.75061,5.14979 -3.50042,5.14979c-1.0178,0 -1.84384,0.8242 -1.84384,1.84384v5.95287c-13.65933,3.19635 -23.03816,7.29603 -25.81376,8.59618c-2.7756,-1.30015 -12.15443,-5.39983 -25.81376,-8.59618v-5.95287c0,-1.01964 -0.82604,-1.84384 -1.84384,-1.84384c-1.7498,0 -2.34986,-1.16156 -3.50042,-5.14979l-0.26289,-0.90391c-1.02518,-3.47195 -1.76997,-7.12667 -1.77181,-8.67181c0,-0.00399 0.10561,-0.23637 0.64462,-0.59061c1.69185,2.66566 3.27169,3.96269 3.41399,4.06941c0.16226,0.12169 0.35914,0.18366 0.55459,0.18366c0.14013,0 0.28323,-0.0327 0.41414,-0.09723c0.31161,-0.15673 0.50778,-0.4762 0.50778,-0.82469c0,-10.30707 3.65391,-17.75984 6.3238,-23.20285c1.10446,-2.24948 2.05026,-4.17881 2.53888,-5.88804zM73.09312,50.96704c-2.50762,-0.00553 -5.02078,0.26442 -7.37536,0.81388l1.26404,2.41644c1.94525,-0.4794 4.03147,-0.70057 6.11132,-0.69504c2.64591,0.00553 5.28586,0.38352 7.62385,1.1524l1.59535,-2.35522c-2.84689,-0.87767 -6.02936,-1.32509 -9.2192,-1.33246zM98.90688,50.96704c-3.18984,0.00553 -6.37231,0.45479 -9.2192,1.33246l1.59535,2.35522c2.33799,-0.76888 4.97794,-1.14687 7.62385,-1.1524c2.07985,-0.00553 4.16607,0.21564 6.11132,0.69504l1.26404,-2.41644c-2.35458,-0.54946 -4.86774,-0.81757 -7.37536,-0.81388zM73.09312,58.3424c-1.47323,0 -2.73208,1.08703 -3.32395,2.64692c0.33374,-0.47387 0.8569,-0.80308 1.48011,-0.80308c1.0178,0 1.84384,0.82604 1.84384,1.84384c0,1.0178 -0.82604,1.84384 -1.84384,1.84384c-0.92561,0 -1.65706,-0.69406 -1.78982,-1.58095c-0.02581,0.21573 -0.05402,0.43224 -0.05402,0.65903c0,2.54634 1.65024,4.6096 3.68768,4.6096c2.03744,0 3.68768,-2.06326 3.68768,-4.6096c0,-2.54634 -1.65024,-4.6096 -3.68768,-4.6096zM98.90688,58.3424c-1.47323,0 -2.73208,1.08703 -3.32395,2.64692c0.33374,-0.47387 0.8569,-0.80308 1.48011,-0.80308c1.0178,0 1.84384,0.82604 1.84384,1.84384c0,1.0178 -0.82604,1.84384 -1.84384,1.84384c-0.92561,0 -1.65706,-0.69406 -1.78982,-1.58095c-0.02581,0.21573 -0.05402,0.43224 -0.05402,0.65903c0,2.54634 1.65024,4.6096 3.68768,4.6096c2.03744,0 3.68768,-2.06326 3.68768,-4.6096c0,-2.54634 -1.65024,-4.6096 -3.68768,-4.6096zM81.51644,82.32312c-0.23232,-0.0325 -0.47781,0.02167 -0.68064,0.17286c-0.40749,0.30608 -0.48974,0.88536 -0.18366,1.29285c0.06822,0.09035 1.70259,2.21117 5.34786,2.21117c3.64527,0 5.27963,-2.12258 5.34786,-2.21477c0.30423,-0.40196 0.22005,-0.97052 -0.18006,-1.27844c-0.40011,-0.30792 -0.97764,-0.23077 -1.28925,0.16566c-0.04794,0.06269 -1.1976,1.48372 -3.87855,1.48372c-2.66435,0 -3.8177,-1.40636 -3.87855,-1.48011c-0.15304,-0.20006 -0.37269,-0.32043 -0.60501,-0.35292zM27.15918,84.17056c29.63689,0.42534 52.31845,10.08015 56.99698,12.22264v59.01728c-7.03555,-2.11723 -29.24362,-8.25226 -51.77157,-8.55297l-1.26764,-15.20808c5.05917,-1.40394 8.78705,-6.03836 8.78705,-11.5384c0,-6.189 -4.71555,-11.29673 -10.74253,-11.92014zM144.84082,84.17056l-1.99869,24.02034c-6.02869,0.62176 -10.74613,5.72991 -10.74613,11.92014c0,5.50004 3.72788,10.13446 8.78705,11.5384l-1.26764,15.20808c-22.52795,0.30238 -44.73602,6.43601 -51.77157,8.55297v-59.01728c4.67178,-2.14149 27.32217,-11.7973 56.99698,-12.22264zM94.29728,106.28224c-0.5089,0 -0.92192,0.41302 -0.92192,0.92192v1.84384c0,0.5089 0.41302,0.92192 0.92192,0.92192c0.5089,0 0.92192,-0.41302 0.92192,-0.92192v-1.84384c0,-0.5089 -0.41302,-0.92192 -0.92192,-0.92192zM24.23136,109.96992h3.68768c5.59052,0 10.14112,4.5506 10.14112,10.14112c0,5.59052 -4.5506,10.14112 -10.14112,10.14112h-3.68768c-1.52486,0 -2.76576,-1.2409 -2.76576,-2.76576v-14.75072c0,-1.52486 1.2409,-2.76576 2.76576,-2.76576zM144.08096,109.96992h3.68768c1.52486,0 2.76576,1.2409 2.76576,2.76576v14.75072c0,1.52486 -1.2409,2.76576 -2.76576,2.76576h-3.68768c-5.59052,0 -10.14112,-4.5506 -10.14112,-10.14112c0,-5.59052 4.5506,-10.14112 10.14112,-10.14112zM94.29728,111.81376c-0.5089,0 -0.92192,0.41302 -0.92192,0.92192v3.68768c0,0.5089 0.41302,0.92192 0.92192,0.92192c0.5089,0 0.92192,-0.41302 0.92192,-0.92192v-3.68768c0,-0.5089 -0.41302,-0.92192 -0.92192,-0.92192zM94.29728,119.18912c-0.5089,0 -0.92192,0.41302 -0.92192,0.92192v27.6576c0,0.5089 0.41302,0.92192 0.92192,0.92192c0.5089,0 0.92192,-0.41302 0.92192,-0.92192v-27.6576c0,-0.5089 -0.41302,-0.92192 -0.92192,-0.92192z"></path></g></g></svg>
                <br><br><h4 class="text-white">UNDERSTAND THE FULL STACK</h4><br>
                <p>Master the tools that front-end developers use every day, from HTML to React, plus server-side back-end JavaScript libraries with Express.js.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box"><br>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ffcd0b"></path><g fill="#000000"><path d="M130.55947,16.0132c-12.54929,0 -22.75847,10.20918 -22.75847,22.75847c0,2.61856 0.44459,5.18215 1.3335,7.64542l-19.9032,19.9032c-3.79665,3.79665 -3.79665,9.97499 0,13.77431c1.89832,1.89832 4.39444,2.85004 6.88716,2.85004c2.4954,0 4.99406,-0.94904 6.89239,-2.85004l19.89797,-19.89797c2.46327,0.88892 5.02941,1.3335 7.65065,1.3335c12.54929,0 22.75847,-10.20918 22.75847,-22.75847c0,-2.40972 -0.3874,-4.80379 -1.15048,-7.12248l-0.48111,-1.45378l-15.65167,15.26993l-9.49141,-2.67747l-2.67747,-9.49664l15.26993,-15.65168l-1.45378,-0.47588c-2.32404,-0.76308 -4.72079,-1.15047 -7.12248,-1.15047zM40.86433,37.43293c-5.90649,0 -10.70987,4.80338 -10.70987,10.70987v58.90427c0,1.9605 0.5673,3.77282 1.49039,5.35493h-6.84532c-1.47796,0 -2.67747,1.19951 -2.67747,2.67747c0,7.38178 6.00556,13.38733 13.38733,13.38733h101.74373c7.38178,0 13.38733,-6.00556 13.38733,-13.38733c0,-1.47796 -1.19951,-2.67747 -2.67747,-2.67747h-6.84532c0.92309,-1.58212 1.49039,-3.39444 1.49039,-5.35493v-42.90222c-1.70019,0.80859 -3.48874,1.44567 -5.35493,1.90351v40.99871c0,2.95325 -2.40169,5.35493 -5.35493,5.35493h-91.03387c-2.95325,0 -5.35493,-2.40169 -5.35493,-5.35493v-58.90427c0,-2.95325 2.40169,-5.35493 5.35493,-5.35493h61.90073c-0.18742,-1.31464 -0.319,-2.64801 -0.319,-4.0162c0,-0.45249 0.04656,-0.8916 0.06798,-1.33873z"></path></g></g></svg>
                <br><br><h4 class="text-white">BUILD A WEB APP</h4><br>
                <p class="description">Go beyond a landing page. Build the back-end of a web application and even create your own API.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box"><br>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ffcd0b"></path><g fill="#000000"><path d="M130.55947,16.0132c-12.54929,0 -22.75847,10.20918 -22.75847,22.75847c0,2.61856 0.44459,5.18215 1.3335,7.64542l-19.9032,19.9032c-3.79665,3.79665 -3.79665,9.97499 0,13.77431c1.89832,1.89832 4.39444,2.85004 6.88716,2.85004c2.4954,0 4.99406,-0.94904 6.89239,-2.85004l19.89797,-19.89797c2.46327,0.88892 5.02941,1.3335 7.65065,1.3335c12.54929,0 22.75847,-10.20918 22.75847,-22.75847c0,-2.40972 -0.3874,-4.80379 -1.15048,-7.12248l-0.48111,-1.45378l-15.65167,15.26993l-9.49141,-2.67747l-2.67747,-9.49664l15.26993,-15.65168l-1.45378,-0.47588c-2.32404,-0.76308 -4.72079,-1.15047 -7.12248,-1.15047zM40.86433,37.43293c-5.90649,0 -10.70987,4.80338 -10.70987,10.70987v58.90427c0,1.9605 0.5673,3.77282 1.49039,5.35493h-6.84532c-1.47796,0 -2.67747,1.19951 -2.67747,2.67747c0,7.38178 6.00556,13.38733 13.38733,13.38733h101.74373c7.38178,0 13.38733,-6.00556 13.38733,-13.38733c0,-1.47796 -1.19951,-2.67747 -2.67747,-2.67747h-6.84532c0.92309,-1.58212 1.49039,-3.39444 1.49039,-5.35493v-42.90222c-1.70019,0.80859 -3.48874,1.44567 -5.35493,1.90351v40.99871c0,2.95325 -2.40169,5.35493 -5.35493,5.35493h-91.03387c-2.95325,0 -5.35493,-2.40169 -5.35493,-5.35493v-58.90427c0,-2.95325 2.40169,-5.35493 5.35493,-5.35493h61.90073c-0.18742,-1.31464 -0.319,-2.64801 -0.319,-4.0162c0,-0.45249 0.04656,-0.8916 0.06798,-1.33873z"></path></g></g></svg><br><br>
                <h4 class="text-white">SHOW OFF YOUR SKILLS</h4><br>
                <p class="description">Build portfolio-worthy projects while you learn, so you can show recruiters your skills and kick-start your career as a web developer.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Frequently asked question -->
  <section class="bg-light">
     <div class="container">
      <h2 class="text-center">FREQUENTLY ASKED QUESTIONS</h2><br><br>
       <div class="card">
          <div class="card-header" id="headingOne">
            <h4 class="mb-0 ">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="font-size: 21px; color: black; text-decoration: none;"><img src="https://img.icons8.com/officexs/30/000000/star.png"/>&nbsp;&nbsp;&nbsp;
                How to Become a Web Developer?
              </button>
            </h4>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <ul>
                <li>Learn the Basics of HTML, CSS, and Javascript. These are the nuts and bolts of all website development that you'll work with daily if you decide to build websites for a living. </li>
                <li>Learn the Basics of WordPress.</li>
                <li>Get to Know UI and UX. </li>
                <li>Learn SQL and PHP (Optional).</li>
                <li>Learn the Basics of SEO.</li>
                <li>Make Sure Your Site is Responsive.</li>
              </ul>
            </div>
          </div>
        </div><br>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="font-size: 21px; color: black; text-decoration: none;"><img src="https://img.icons8.com/officexs/30/000000/star.png"/>&nbsp;&nbsp;&nbsp;
                What are the steps to learn Web development?
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <ul>
                <li>Front End Web Development Skills. </li>
                <li>Back End Web-Development Skills.</li>
                <li>Start with the Basic 3: HTML, CSS, and JavaScript.</li>
                <li>Find a Web Development Community for Feedback and Advice. </li>
                <li>Take on Test Projects to Build Up a Portfolio—Even If You Don't Have a Web Developer Job.</li>
                <li>Practice with Free Tools to Increase Your Knowledge.</li>
              </ul>
            </div>
          </div>
        </div><br>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 21px; color: black; text-decoration: none;"><img src="https://img.icons8.com/officexs/30/000000/star.png"/>&nbsp;&nbsp;&nbsp;
                What is web designer do?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              A web designer is an IT professional who is responsible for designing the layout, visual appearance and the usability of a website. ... They need to be able to visualise how a site will look (the graphical design of the site) and how it will function (conversion of a design into a working website).
            </div>
          </div>
        </div><br>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 21px; color: black; text-decoration: none;"><img src="https://img.icons8.com/officexs/30/000000/star.png"/>&nbsp;&nbsp;&nbsp;
                Can I learn web designing online?
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Learn how to build a website, discover interesting web design tools, and start your path to becoming a web designer. This free online web design diploma course will teach you how to design beautiful, responsive, and intuitive websites with HTML, CSS and JavaScript. ... Start now and learn at your own pace.
            </div>
          </div>
        </div><br>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 21px; color: black; text-decoration: none;"><img src="https://img.icons8.com/officexs/30/000000/star.png"/>&nbsp;&nbsp;&nbsp;
                Why a website is important?
              </button>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              A website is also important because it helps to establish credibility as a business. ... When you provide good service or product, positive word-of-mouth can be spread your business. A website not only gives credibility but it also helps to give a positive impression that your company is bigger and more successful.
            </div>
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

    


<?php require "footer.php"; ?>