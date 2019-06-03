<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Resume</title>
    <!--Bootstrap ---------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!----------------------------------------------------------------------------------------------------------->
    <!--CSS------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/resume_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----------------------------------------------------------------------------------------------------------->
    <!--Javascript-jQuery---------------------------------------------------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
         var scroll_start = 0;//Set scroll_start equals to 0
         var startchange = $('.banner');//Declare as the position of the change, the position of .banner class
         var offset = startchange.offset();//Use of the offset() method returns the offset coordinates of the first matched element. It returns an object with 2 properties; the top and left positions in pixels.
          if (startchange.length)//Αs long as the length of the startchange begins
          {
           $(document).scroll(function() 
           {//During the scroll... 
              scroll_start = $(this).scrollTop();//Use of the scrollTop() method returns the vertical scrollbar position for the startchange which is .banner in our script.
              if(scroll_start > offset.top) 
              {// If scroll_start > offset.top, set the background-color black in navigation bar
                $(".navbar-default").css('background-color', 'black');
              }//End of if
              else 
              {//Otherwise, set background-color transparent again in navigation bar
                $('.navbar-default').css('background-color', 'transparent');
              }//End of else
           });//End of scroll
          }//End of if
    });//End of ready
    </script>
    <!----------------------------------------------------------------------------------------------------------->

  </head>
  <body>

  <header id="home">
    <nav class="navbar navbar-default navbar-fixed-top" id="nav-wrap">
      <div class="container-fluid text-center">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div><!--End of navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul id="nav" class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="resume.php">RESUME</a></li>
            <li><a href="works.php">WORKS</a></li>
            <li><a href="testimonials.php">TESTIMONIALS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--Display of personal information and social media buttons on the first image of the pages-->
    <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Andreas Priftis</h1>
            <h3>I'm a web developer creating awesome and
            effective web applications and systems of all sizes for my projects in university. Let's learn more about me.</h3>
            <hr />
            <ul class="social">
               <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
         </div><!--End of banner-text-->
      </div><!--End of row banner-->
  </header><!--End of header-->



 <!----------------------------------------------Resume Section--------------------------------------------->
   <section id="resume">
      <!-----------------------------------------Education-------------------------------------------------->
      <div class="row education">
         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div><!--End of div header-col -->
         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>University of Piraeus</h3>
                  <p class="info">Bachelor Degree in Digital Systems <span>&bull;</span> <em class="date">2015 - 2019</em></p>
               </div><!--End of div columns -->
            </div><!-- End of div item -->
         </div><!--End of div main-col -->
      </div><!--End of div Education -->
      <!----------------------------------------Volunteer--------------------------------------------------->
      <div class="row volunteer">
         <div class="three columns header-col">
            <h1><span>Volunteer</span></h1>
         </div><!--End of div header-col -->
         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>AIESEC Greece</h3>
                  <p class="info">B2C Member<span>&bull;</span> <em class="date">Sept 2017 - Feb 2018</em></p>
               </div><!--End of div columns -->
            </div><!-- End of div item -->
         </div><!--End of div main-col -->
      </div><!--End of div Volunteer -->
      <!-------------------------------------Certifications------------------------------------------------->
      <div class="row certifications">
         <div class="three columns header-col">
            <h1><span>Certifications</span></h1>
         </div><!--End of div header-col -->
         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <p class="info">Digital Workshop - Google<span>&bull;</span> <em class="date">July 2018 - Sept. 2018 </em></p>
                  <p class="info">Market Yourself-Samsung Labs - INNOVATHENS<span>&bull;</span> <em class="date">Feb 2017</em></p>
                  <p class="info">Presentation and Communication Skills - INNOVATHENS<span>&bull;</span> <em class="date">Jun 2017</em></p>
                  <p class="info">Business Development for tech start-ups - Orange Grove<span>&bull;</span> <em class="date">Mar 2018</em></p>
                  <p class="info">Tourism Marketing - KEAK<span>&bull;</span> <em class="date">Dec 2017</em></p>
                  <p class="info">Google Remarketing: Retarget Your Customers - Udemy<span>&bull;</span> <em class="date">Aug 2017</em></p>
                  <p class="info">INFOCOM - Mobile Connected World- INFOCOM<span>&bull;</span> <em class="date">May 2017</em></p>
                  <p class="info">Hotel Tech - HOTELTechSystems<span>&bull;</span> <em class="date">Feb 2017</em></p>
                  <p class="info">Grow Greek Tourism Online - Google<span>&bull;</span> <em class="date">Dec 2016</em></p>
               </div><!--End of div columns -->
            </div><!-- End of div item -->
         </div><!--End of div main-col -->
      </div><!--End of div certifications -->
      <!-----------------------------------------------Work--------------------------------------------------->
      <div class="row work">
         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div><!--End of div header-col -->
         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>Altair Travel Agency - petas.gr - tripair.com</h3>
                  <p class="info">Web Developer<span>&bull;</span> <em class="date">Jan 2019 - March 2019</em></p>
                  <p>
                  - Contribute to upgrade PHP modules and jQuery scripts.<br>- Obtain knowledge about terminologies used in airlines and the all-encompassing background.<br>- Improve PHP knowledge on template engine called SMARTY.<br>- Control transactions and the performance of the website. 
                  </p>
               </div><!--End of div columns -->
            </div><!-- End of div item -->
            <div class="row item">
               <div class="twelve columns">
                  <h3>Student houses</h3>
                  <p class="info">Private Tutor<span>&bull;</span> <em class="date">Sept 2017 - June 2018</em></p>
                  <p>
                   - Identify, develop, or implement intervention strategies, tutoring plans, or individualized education plans for students. 
                  </p>
               </div><!--End of div columns -->
            </div><!-- End of div item -->
         </div><!--End of div main-col -->
      </div><!--End of div work -->
      <!-------------------------------------------Skills---------------------------------------------------->
      <div class="row skill">
         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div><!--End of div header-col -->
        <div class="nine columns main-col">
            <p>The hard skills are all teachable abilities which can be measured and defined like HTML, Javascript, software reading, CSS, etc. Here is a list of the important skills from my experience:</p>
          <div class="bars">
             <ul class="skills">
                <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                <li><span class="bar-expand css"></span><em>CSS</em></li>
                <li><span class="bar-expand bootstrap"></span><em>Bootstrap</em></li>
                <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                <li><span class="bar-expand php"></span><em>PHP</em></li>
                <li><span class="bar-expand csharp"></span><em>C#</em></li>
                <li><span class="bar-expand java"></span><em>JAVA</em></li>
                <li><span class="bar-expand mysql"></span><em>MySql</em></li>
                <li><span class="bar-expand xml"></span><em>XML</em></li>
                <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
                <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
                <li><span class="bar-expand wix"></span><em>Wix</em></li>
                <li><span class="bar-expand joomla"></span><em>Joomla</em></li>
                <li><span class="bar-expand weebly"></span><em>Weebly</em></li>
            </ul>
          </div><!--End of div skill-bars -->
        </div> <!--End of div main-col -->
        </div> <!--End of div skills -->
     </section><!--End of resume section -->



    <!--------------------------------------------Footer------------------------------------------------>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 myCols">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="works.php">Works</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!--End of div of col-->
            </div><!--End of row-->
        </div><!--End of container-->
        <div class="social-networks">
            <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="https://twitter.com/?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
        </div><!--End of social media hyperlinks-->
        <div class="footer-copyright">
            <p>© 2019 Copyright</p>
        </div><!--End of div copyright-->
    </footer><!--End of footer-->
    <!-----------------------------------------End of Footer------------------------------------------------>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>  