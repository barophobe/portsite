<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="portfolio.css">
<link rel="stylesheet" href="media.css">
<script   src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://use.fontawesome.com/e5a060d640.js"></script>
</head>

<body id="pageDim">

<section id="intro" class="section mrgBtm">

<?php include_once("analyticstracking.php") ?>
    
    <div class="container-fluid bkGrnd" id="high">

        <header>

          <div class="banner arrowDwn" id="hdrBg"><a href="#portfolio"><span class="intHd fa fa-angle-double-down fa-3x"></span></a> 
          </div>

        </header> 

    </div>

    <div class="transCon">

      <div class="specHd subTrans" id="hed"><img src="images/ed-connolly-LOGO-03.png" class="logoDim titleMenu" alt="">
      </div>


          <div id="myNav" class="layover">

                <ul class="navLst layover-content">

                    <li><a href="#intro" class="overHeadMenu"><h5><strong>Top</strong></h5><span class="glyphicon glyphicon-menu-right pull-right overHeadSpan" aria-hidden="true"></span></a>  </li>

                    <li><a href="#portfolio" class="overHeadMenu"><h5><strong>Portfolio</strong></h5><span class="glyphicon glyphicon-menu-right pull-right overHeadSpan" aria-hidden="true"></span></a>  </li>

                    <li><a href="#about" class="overHeadMenu"><h5><strong>About</strong></h5><span class="glyphicon glyphicon-menu-right pull-right overHeadSpan" aria-hidden="true"></span></a>  </li>
                  
                    <li><a href="#contact" class="overHeadMenu"><h5><strong>Contact</strong></h5><span class="glyphicon glyphicon-menu-right pull-right overHeadSpan" aria-hidden="true"></span></a>  </li>

                </ul>

          </div>

          <button class="c-hamburger c-hamburger--rot">

            <span>toggle menu</span>

          </button>
        
    </div>
  
</section>

<div class="topAro"><a href="#intro"><span class="aroUp fa fa-arrow-up fa-3x"></span></a></div>




<section id="portfolio" class="section">

  <div class="container-fluid senter">

    <div class="row headLines">

        <h1 class="portHd">Portfolio</h1>

    </div>

  </div>

    <div class="container">

      <div class="row-fluid">

        <div class="bioIntro col-sm-8 col-sm-offset-1">

          <p class="weighty">Welcome to my portfolio website. I am a recently qualified graduate and i am hoping to secure a position where i can add my recently acquired skills as a web developer. I have linked to a number of projects i have developed. The first two pertain to work done for an educational portal where i did an internship. I worked with this company for over six months primarily responsible for front end development and analytics. Following these are a number of pieces displaying different technologies which i have gained experience with.</p><br>

        </div>

         <div class="col-sm-3 edu2">

          <h5>Methodologies Used</h5>

            <ul class="eduLst">

                <li>Responsive Design</li>

                <li>Mobile First</li>

                <li>Agile Methodology</li>

                <li>UX</li>
                
            </ul>

        </div>

      </div>

    </div>

</section>

<div class="tabbable">
 <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs tabsCenter">

    <li class="active "><a href="#tab1" data-toggle="tab">Projects: 1 - 4</a></li>

    <li class=""><a href="#tab2" data-toggle="tab">Projects: 5 - 8</a></li>
    
  </ul>

      <div class="tab-content">

        <div class="tab-pane active" id="tab1">

          <div id="effect-1" class="effects clearfix">

            <div class="img col-sm-6 col-xs-6 col-md-6">

              <h3 class="portH">Info Pages<span class="portDots">&nbsp;:</span> Unipupil</h3>

                <p class="projSum">This project involved the development of several information pages for an already existing educatiional portal. A cross functional team including myself a Project Manager and a Designer collaborated with the client and produced 5 pages.  The framework used was Twitter bootstrap. It is a mobile first responsive website.</p>

                <div class="overlay">

                    <h5 class="overHead">bootstrap/Html<br>css/javascript</h5>

                    <h3 class="overHead3">Unipupil<br>Info Pages</h3>

                    <a href="https://github.com/barophobe/Dsa-Major-Project" class="expand" target="_blank">Git Repo</a><a href="portfolio/major_proj/About_us.html" class="expand1" target="_blank">Visit Site</a>
                    <a class="close-overlay hidden">x</a>
                    
                </div>

            </div>


    <div class="img col-sm-6 col-xs-6 col-md-6 sec ">
         <h3 class="portH">Landing Pages<span class="portDots">&nbsp;:</span> Unipupil</h3><p class="projSum">Two landing pages were developed for Unipupil targeted at distinct user types of the portal, namely Educational Institutions and prospective students. As before a cross functional team liased with the client and developed a design which i then developed. This totalled two landing pages and two thank you pages.Form data was captured via mailchimp.</p>
        <div class="overlay">
          <h5 class="overHead">bootstrap/Html<br>css/javascript</h5>
          <h3 class="overHead3">Unipupil<br>Landing Pages</h3>
            <a href="https://github.com/barophobe/Landing-pages-Unipupil" class="expand" target="_blank">Git Repo</a><a href="portfolio/Unipupil%20landing%20page/Institutions_landing_page.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
       
    
     </div></div><div class="img col-sm-6 col-xs-6 col-md-6">
         <h3 class="portH">Jquery Mobile SPA</h3><p class="projSum">A simple single page application creating dynamic pages from json data. A jquery Ajax method is used to bring the data into the app and a function sorts a list alphabetically.</p>
        <div class="overlay">
           <h5 class="overHead">Jquery Mobile<br>Json/Ajax</h5>
          <h3 class="overHead3">Single Page<br>Application</h3>
            <a href="https://github.com/barophobe/Jquery-mobile-json-dynamic-pages-sort-alphabetically" class="expand" target="_blank">Git Repo</a><a href="portfolio/jquery_mobile/index.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
     
   
        </div></div><div class="img col-sm-6 col-xs-6 col-md-6 sec">
         <h3 class="portH">Angular To Do List</h3><p class="projSum">Simple to do list, with function to delete a to do, strike it off as being done and also high light its importance. </p>
        <div class="overlay">
           <h5 class="overHead">AngularJs<br>css</h5>
          <h3 class="overHead3">To Do List</h3>
            <a href="https://github.com/barophobe/Angular-to-Do-list" class="expand" target="_blank">Git Repo</a><a href="ToDo.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
     
       
</div></div></div>



    </div>
    <div class="tab-pane" id="tab2">
     <div id="effect-1" class="effects clearfix">
    <div class="img col-sm-6 col-xs-6 col-md-6">
        <h3
        class="portH">HTML5 and Css animations and more</h3><p class="projSum">Some advanced features of html5 and css3. Including drag and drop, animations, transforms and canvas examples. Sass preprocessor mixins, inheritance, variables and nesting.</p>
        <div class="overlay">
          <h5 class="overHead">Html/css<br>Sass/javascript</h5>
          <h3 class="overHead3">Animations<br>+ Canvas Tag</h3>
            <a href="https://github.com/barophobe/Html5advancedFeatures" class="expand" target="_blank">Git Repo</a><a href="portfolio/Html5css3/animation1.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
        
    
    </div></div><div class="img col-sm-6 col-xs-6 col-md-6 sec">
         <h3
         class="portH">Html5 -Various Features.</h3><p class="projSum">A few pages to display html5 semantic layout elements. Audio and video features are also displayed along with a Html5 form. There is also a look at the flexbox method of responsive development. This also uses media queries to show how the flexbox items can be reordered for different screen sizes.</p>
        <div class="overlay">
          <h5 class="overHead">Html5/css<br>css/javascript</h5>
          <h3 class="overHead3">Semantic Layout/forms<br>Flexbox/Media</h3>
            <a href="https://github.com/barophobe/html5Css3-Forms-media-semanticLayoutand-more" class="expand" target="_blank">Git Repo</a><a href="portfolio/Flexboxws9/director.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
       
    
     </div></div><div class="img col-sm-6 col-xs-6 col-md-6">
         <h3
         class="portH">Jquery Ajax API(Json)</h3><p class="projSum">Two pages which use Jquery Ajax functions to retrieve Json data from a remote site. The exchange rate api page features significant javascript to display data and to append data on to elements.</p>
        <div class="overlay">
           <h5 class="overHead">Jquery<br>Json/Ajax</h5>
          <h3 class="overHead3">Flikr<br>XRates API</h3>
            <a href="https://github.com/barophobe/Jquery-get_json-Ajax-flikr-and-exchange-rateApi-" class="expand" target="_blank">Git Repo</a><a href="portfolio/AjaxFlikrApi/Index.html" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
     
   
        </div></div><div class="img col-sm-6 col-xs-6 col-md-6 sec">
         <h3
         class="portH">Angular To Do List</h3><p class="projSum">Simple to do list, with function to delete a to do, strike it off as being done and also high light its importance. </p>
        <div class="overlay">
           <h5 class="overHead">AngularJs<br>css</h5>
          <h3 class="overHead3">To Do List</h3>
            <a href="https://github.com/barophobe/Angular-to-Do-list" class="expand" target="_blank">Git Repo</a><a href="#" class="expand1" target="_blank">Visit Site</a>
            <a class="close-overlay hidden">x</a>
     
       
</div>
</div>
</div>

 

    </div>
  </div>
</div>

<section id="about" class="section">

  <div class="container-fluid senter">

    <div class="row headLines">

      <h1 class="portHd ">About Me</h1>

    </div>

  </div>

<div class="container">

  <div class="row-fluid">

      <div class="col-sm-3 edu">

        <h5>tech/skills</h5>

          <ul class="eduLst">

              <li>HTML5</li>

              <li>Css3</li>

              <li>Javascript</li>

              <li>Php</li>

              <li>MySql</li>

              <li>Sql</li>

              <li>Jquery</li>

              <li>Jquery Mobile</li>

              <li>Angularjs</li>

              <li>Bootstrap</li>

              <li>Git</li>

              <li>Sass</li>

              <li>GulpJs</li>

          </ul>

      </div>

      <div class="bio col-sm-6">

        <p class="weighty">I am a recent graduate of Digital Skills Academy where i received a BSc 1st class honours in Digital Technology Design and Innovation. I specialised in the developement stream and have gained skills in a number of technologies currently used within the industry. I have experience working in a cross functional team environment using the agile methodology. I have developed a fully responsive website from wireframes and hi fidelity designs and participated at all stages of the project. I strive to produce clean code and comply with all relevant standards in providing professional quality web solutions.</p><br>

      </div>

      <div class="col-sm-3 edu1">

          <div class="picBor">

              <img src="images/Ed_Connolly_profile_02.png" id="edPic" alt="dev image"/>
            
          </div>

         <h5>Education</h5>

            <ul class="eduLst">

              <li>BA(Hons)Management Information Systems</li>

              <li>BSC(Hons) Digital Technology, Design and Innovation</li>

            </ul>

      </div>

    </div>

  </div>

</section>

<section id="contact" class="section">

  <div class="container-fluid senter">

    <div class="row headLines">

        <h1 class="portHd ">Contact</h1>

    </div>

  </div>

<div class="container">

  <div class="row-fluid">

      <div class="col-sm-3 edu">

          <h5>Contact&nbsp;:</h5>
              
               <ul class="cont">
                    
                    <li>0878577059</li>

                    <li>edoconnolly@gmail.com</li>

                    <li>Bothar Maol</li>

                    <li>Blackrock</li>

                    <li>Co Louth</li>

                </ul>
      </div>

      <div class="bio1 col-sm-6">

            <p class="weighty">Please don't hesitate to contact me should you have any queries. I can be reached through the form below or by any of the contact details provided on site.</p><br>

      </div>

  </div>



<div class="col-sm-3">

 <!--  <div class="socL"> -->

      <ul class="sideSoc list-inline" >

           <li><a href="https://www.facebook.com/ed.connolly.560"><span class="hovF"></span></a></li>
            <li><a href="https://twitter.com/edddddd"><span class="hovT"></span></a></li>
            <li><a href="https://www.linkedin.com/in/edmond-connolly-6b2a84116?trk=nav_responsive_tab_profile"><span class="hovL"></span></a></li>
                      
      </ul>

  <!-- </div> -->
  
</div>

</div>

</section>

<div class="container-fluid">

  <footer class="ed">

      <span id="invis">|</span>

  </footer>

</div>

<?php include ('contact_me.php'); ?>

</div>

<div class="container-fluid">

  <footer class="ed1">

     &copy;&nbsp;All rights Reserved Ed Connolly

  </footer>

</div>

<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="portfolio.js"></script>
<script type="text/javascript" src="jquery.scrollTo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

</body>
</html>