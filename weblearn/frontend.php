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
  .bgimg{
  background-image: url(images/bg14.jpg);
  background-size: cover;
  background-attachment: fixed;
  width: 100%;
  height: 800px;
}
.headerset{
  padding-top: 200px;
  box-sizing: border-box;
  width: 100%;
  height: 860px;
}
.headerset h3{
  font-size: 30px;
  color: white;
  padding-top: 80px;
}
.bgimg h1{
  font-size: 50px;
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

      <!-- Hero section -->
      <div class="bgimg">
        <div class="container headerset">
          <h1>Front End Technologies</h1>
          <h3>As we have seen All that we see, click and interact on a website is because of front end development. A site is loaded in a browser from the server in front-end development.</h3><br><br>
          <a href="register.php"><button class="btn btn-warning text-dark btn-lg mt-5 text-dark font-weight-bold">Get Started</button></a>
        </div>
      </div>
      <!--End hero section-->
      <!-- End navigation -->
<!-- Front end tech -->
<center><div class="container-fluid pt-5 mt-5">
  <div class="row">
    <div class="col-lg-6">
      <img src="images/bg18.jpg">
    </div>
    <div class="col-lg-6">
      <h2 class="pl-5 text-center">Front End Technologies</h2><br>
      <div class="col-lg-6 pl-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-title text-center">Languages</h4><br>
          <ul>
            <li data-spy="scroll" data-target=".html"><a href="#html">HTML</a></li>
            <li data-spy="scroll" data-target=".css"><a href="#css">CSS</a></li>
            <div data-spy="scroll" data-target=".javascript">
              <li><a href="#javascript">JavaScript</a></li>
            </div>
            
            <li data-spy="scroll" data-target=".jquery"><a href="#jquery">JQuery</a></li>
            <li data-spy="scroll" data-target=".bootstrap"><a href="#bootstrap">Bootstrap</a></li>
            <li data-spy="scroll" data-target=".material"><a href="#material">Materialize CSS</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    
  </div>
</div></center>
<!-- End Front end tech -->


<div class="languages bg-light">
  <!-- html -->
<div id="html" class="html container">
  <h1 class="text-center">HTML</h1>
  <h2>Introduction:</h2><br>
  <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>
  <p>Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
  <h2 class="pt-5">History:</h2>
  <h4 class="pt-3">Development</h4>
  <p>In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system.[3] Berners-Lee specified HTML and wrote the browser and server software in late 1990. That year, Berners-Lee and CERN data systems engineer Robert Cailliau collaborated on a joint request for funding, but the project was not formally adopted by CERN. In his personal notes[4] from 1990 he listed[5] "some of the many areas in which hypertext is used" and put an encyclopedia first.</p>
  <p>HTML is a markup language that web browsers use to interpret and compose text, images, and other material into visual or audible web pages. Default characteristics for every item of HTML markup are defined in the browser, and these characteristics can be altered or enhanced by the web page designer's additional use of CSS. Many of the text elements are found in the 1988 ISO technical report TR 9537 Techniques for using SGML, which in turn covers the features of early text formatting languages such as that used by the RUNOFF command developed in the early 1960s for the CTSS (Compatible Time-Sharing System) operating system: these formatting commands were derived from the commands used by typesetters to manually format documents. However, the SGML concept of generalized markup is based on elements (nested annotated ranges with attributes) rather than merely print effects, with also the separation of structure and markup; HTML has been progressively moved in this direction with CSS.</p>
  <h4 class="pt-3">HTML versions timeline</h4><br>
  <h6 class="font-weight-bold">HTML 2</h6>
  <h6 class="font-weight-bold ml-5">November 24, 1995</h6>
  <ul class="ml-5">HTML 2.0 was published as RFC 1866. Supplemental RFCs added capabilities:
    <li>November 25, 1995: RFC 1867 (form-based file upload)</li>
    <li>May 1996: RFC 1942 (tables)</li>
    <li>August 1996: RFC 1980 (client-side image maps)</li>
    <li>January 1997: RFC 2070 (internationalization)</li>
  </ul>
  <h6 class="font-weight-bold">HTML 3</h6>
  <h6 class="font-weight-bold ml-5">January 14, 1997</h6>
  <p>HTML 3.2[15] was published as a W3C Recommendation. It was the first version developed and standardized exclusively by the W3C, as the IETF had closed its HTML Working Group on September 12, 1996.[16]
Initially code-named "Wilbur",[17] HTML 3.2 dropped math formulas entirely, reconciled overlap among various proprietary extensions and adopted most of Netscape's visual markup tags. Netscape's blink element and Microsoft's marquee element were omitted due to a mutual agreement between the two companies.[13] A markup for mathematical formulas similar to that in HTML was not standardized until 14 months later in MathML.</p>
<h6 class="font-weight-bold">HTML 4</h6>
<h6 class="font-weight-bold ml-5">December 18, 1997</h6>
  <ul class="ml-5">HTML 4.0[18] was published as a W3C Recommendation. It offers three variations:
    <li>Strict, in which deprecated elements are forbidden</li>
    <li>Transitional, in which deprecated elements are allowed</li>
    <li>Frameset, in which mostly only frame related elements are allowed.</li>
  </ul>
  <p>Initially code-named "Cougar",[17] HTML 4.0 adopted many browser-specific element types and attributes, but at the same time sought to phase out Netscape's visual markup features by marking them as deprecated in favor of style sheets. HTML 4 is an SGML application conforming to ISO 8879 – SGML.[19]</p>
  <h6 class="font-weight-bold">HTML 5</h6>
<h6 class="font-weight-bold ml-5">October 28, 2014</h6>
<p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and last major HTML version that is a World Wide Web Consortium (W3C) recommendation. The current specification is known as the HTML Living Standard. It is maintained by a consortium of the major browser vendors, the Web Hypertext Application Technology Working Group (WHATWG).</p>
</div>

<!--end html -->

<!-- CSS -->
<div id="css" class="css container">
  <h1 class="text-center">CSS</h1>
  <h2>Introduction:</h2><br>
  <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.[</p>
  <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
  <h2 class="pt-5">History:</h2>
  <p>CSS was first proposed by Håkon Wium Lie on October 10, 1994.[22] At the time, Lie was working with Tim Berners-Lee at CERN.[23] Several other style sheet languages for the web were proposed around the same time, and discussions on public mailing lists and inside World Wide Web Consortium resulted in the first W3C CSS Recommendation (CSS1)[24] being released in 1996. In particular, a proposal by Bert Bos was influential; he became co-author of CSS1, and is regarded as co-creator of CSS.</p>
  <p>Style sheets have existed in one form or another since the beginnings of Standard Generalized Markup Language (SGML) in the 1980s, and CSS was developed to provide style sheets for the web.[26] One requirement for a web style sheet language was for style sheets to come from different sources on the web. Therefore, existing style sheet languages like DSSSL and FOSI were not suitable. CSS, on the other hand, let a document's style be influenced by multiple style sheets by way of "cascading" styles.</p>
  <p>As HTML grew, it came to encompass a wider variety of stylistic capabilities to meet the demands of web developers. This evolution gave the designer more control over site appearance, at the cost of more complex HTML. Variations in web browser implementations, such as ViolaWWW and WorldWideWeb,[27] made consistent site appearance difficult, and users had less control over how web content was displayed. The browser/editor developed by Tim Berners-Lee had style sheets that were hard-coded into the program. The style sheets could therefore not be linked to documents on the web. Robert Cailliau, also of CERN, wanted to separate the structure from the presentation so that different style sheets could describe different presentation for printing, screen-based presentations, and editors.</p>
  <h4 class="pt-3">Variations</h4>
  <p>CSS has various levels and profiles. Each level of CSS builds upon the last, typically adding new features and typically denoted as CSS 1, CSS 2, CSS 3, and CSS 4. Profiles are typically a subset of one or more levels of CSS built for a particular device or user interface. Currently there are profiles for mobile devices, printers, and television sets. Profiles should not be confused with media types, which were added in CSS 2.</p>
  <h6 class="font-weight-bold">CSS 1</h6>
  <ul>The first CSS specification to become an official W3C Recommendation is CSS level 1, published on December 17, 1996. Håkon Wium Lie and Bert Bos are credited as the original developers.[41][42] Among its capabilities are support for
    <li>Font properties such as typeface and emphasis</li>
    <li>Color of text, backgrounds, and other elements</li>
    <li>Text attributes such as spacing between words, letters, and lines of text</li>
    <li>Alignment of text, images, tables and other elements</li>
    <li>Margin, border, padding, and positioning for most elements</li>
    <li>Unique identification and generic classification of groups of attributes</li>
  </ul>
  <h6 class="font-weight-bold">CSS 2</h6>
  <p>CSS level 2 revision 1, often referred to as "CSS 2.1", fixes errors in CSS 2, removes poorly supported or not fully interoperable features and adds already implemented browser extensions to the specification. To comply with the W3C Process for standardizing technical specifications, CSS 2.1 went back and forth between Working Draft status and Candidate Recommendation status for many years. CSS 2.1 first became a Candidate Recommendation on February 25, 2004, but it was reverted to a Working Draft on June 13, 2005 for further review. It returned to Candidate Recommendation on 19 July 2007 and then updated twice in 2009. However, because changes and clarifications were made, it again went back to Last Call Working Draft on 7 December 2010.</p>
  <p>CSS 2.1 went to Proposed Recommendation on 12 April 2011. After being reviewed by the W3C Advisory Committee, it was finally published as a W3C Recommendation on 7 June 2011.</p>
  <p>CSS 2.1 was planned as the first and final revision of level 2—but low priority work on CSS 2.2 began in 2015.</p>
  <h6 class="font-weight-bold">CSS 3</h6>
  <p>CSS3 is collaboration of CSS2 specifications and new specifications, we can called this collaboration is module. Some of the modules are shown below −</p>
  <ul>
    <li>Selectors</li>
    <li>Box Model</li>
    <li>Backgrounds</li>
    <li>Image Values and Replaced Content0</li>
    <li>Text Effects</li>
    <li>2D Transformations</li>
    <li>3D Transformations</li>
    <li>Animations</li>
    <li>Multiple Column Layout</li>
    <li>User Interface</li>
  </ul>
</div><br><br>
<!-- End CSS -->

<!-- Javascript -->
<div id="javascript" class="javascript container">
  <h1 class="text-center">JavaScript</h1>
  <h2>Introduction:</h2><br>
  <p>JavaScript often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.</p>
  <p>Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries.All major web browsers have a dedicated JavaScript engine to execute the code on the user's device.</p>
  <h2 class="pt-5">History:</h2>
  <h5 class="font-weight-bold pt-3">Creation at Netscape</h5>
  <p>The Mosaic web browser was released in 1993. As the first browser with a graphical user interface accessible to non-technical people, it played a prominent role in the rapid growth of the nascent World Wide Web.The lead developers of Mosaic then founded the Netscape corporation, which released a more polished browser, Netscape Navigator, in 1994. Navigator quickly became the most used browser.</p>
  <p>During these formative years of the Web, web pages could only be static, lacking the capability for dynamic behavior after the page was loaded in the browser. There was a desire in the burgeoning web development scene to remove this limitation, so in 1995, Netscape decided to add a scripting language to Navigator. They pursued two routes to achieve this: collaborating with Sun Microsystems to embed the Java programming language, while also hiring Brendan Eich to embed the Scheme language.</p>
  <h5 class="font-weight-bold">Adoption by Microsoft</h5>
  <p>Microsoft debuted Internet Explorer in 1995, leading to a browser war with Netscape. On the JavaScript front, Microsoft reverse-engineered the Navigator interpreter to create its own, called JScript.</p>
  <p>JScript was first released in 1996, alongside initial support for CSS and extensions to HTML. Each of these implementations was noticeably different from their counterparts in Navigator.[17][18] These differences made it difficult for developers to make their websites work well in both browsers, leading to widespread use of "best viewed in Netscape" and "best viewed in Internet Explorer" logos for several years.[17][19]</p>
  <h5 class="font-weight-bold">The rise of JScript</h5>
  <p>In November 1996, Netscape submitted JavaScript to ECMA International, as the starting point for a standard specification that all browser vendors could conform to. This led to the official release of the first ECMAScript language specification in June 1997.</p><p>The standards process continued for a few years, with the release of ECMAScript 2 in June 1998 and ECMAScript 3 in December 1999. Work on ECMAScript 4 began in 2000.</p>
  <h5 class="font-weight-bold">Growth and standardization</h5>
  <p>During the period of Internet Explorer dominance in the early 2000s, client-side scripting was stagnant. This started to change in 2004, when the successor of Netscape, Mozilla, released the Firefox browser. Firefox was well received by many, taking significant market share from Internet Explore</p>
  <p>In 2005, Mozilla joined ECMA International, and work started on the ECMAScript for XML (E4X) standard. This led to Mozilla working jointly with Macromedia (later acquired by Adobe Systems), who were implementing E4X in their ActionScript 3 language, which was based on an ECMAScript 4 draft. The goal became standardizing ActionScript 3 as the new ECMAScript 4. To this end, Adobe Systems released the Tamarin implementation as an open source project. However, Tamarin and ActionScript 3 were too different from established client-side scripting, and without cooperation from Microsoft, ECMAScript 4 never reached fruition.</p>
  <p>Meanwhile, very important developments were occurring in open-source communities not affiliated with ECMA work. In 2005, Jesse James Garrett released a white paper in which he coined the term Ajax and described a set of technologies, of which JavaScript was the backbone, to create web applications where data can be loaded in the background, avoiding the need for full page reloads. This sparked a renaissance period of JavaScript, spearheaded by open-source libraries and the communities that formed around them. Many new libraries were created, including jQuery, Prototype, Dojo Toolkit, and MooTools.</p>
</div><br><br>
<!-- End Javascript -->

<!-- Jquery -->
<div id="jquery" class="jquery container">
  <h1 class="text-center">JQuery</h1>
  <h2>Introduction:</h2><br>
  <p>jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.It is free, open-source software using the permissive MIT License.As of May 2019, jQuery is used by 73% of the 10 million most popular websites.</p>
  <p>jQuery's syntax is designed to make it easier to navigate a document, select DOM elements, create animations, handle events, and develop Ajax applications. jQuery also provides capabilities for developers to create plug-ins on top of the JavaScript library. [</p>
</div><br><br>
<!-- End Jquery -->

<!-- Bootstrap -->
<div id="bootstrap" class="bootstrap container">
  <h1 class="text-center">Bootstrap</h1>
  <h2>Introduction:</h2><br>
  <p>Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
  <p>Bootstrap is a HTML, CSS & JS Library that focuses on simplifying the development of informative web pages (as opposed to web apps). The primary purpose of adding it to a web project is to apply Bootstrap's choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking.</p>
</div><br><br>
<!-- End Bootstrap -->

<!-- Materialize CSS -->
<div id="material" class="material container">
  <h1 class="text-center">Materialize CSS</h1>
  <h2>Introduction:</h2><br>
  <p>Material Design (codenamed Quantum Paper) is a design language that Google developed in 2014. Expanding on the "card" motifs that debuted in Google Now, Material Design uses more grid-based layouts, responsive animations and transitions, padding, and depth effects such as lighting and shadows.</p>
  <p>Material Design will gradually be extended throughout Google's array of web and mobile products, providing a consistent experience across all platforms and applications. Google has also released application programming interfaces (APIs) for third-party developers to incorporate the design language into their applications</p>
</div><br><br>
<!-- End Materialize CSS -->
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


