<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!--Bootstrap ---------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!----------------------------------------------------------------------------------------------------------->
    <!--CSS------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
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
    <script>
      function setbackgroundcolor()//function which sets the background color of the body black 
      {
        document.body.style.backgroundColor = "black";
      }
    </script>
    <!----------------------------------------------------------------------------------------------------------->

  </head>
  <body onload="setbackgroundcolor()">
  <!--Call setbackgroundcolor function-->
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

      <!--In the specific part, I've just included a quote about the education and knowledge.-->
      <div id="quotes">
        <h3>"Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life..."</h3>
      </div><!--End of div quotes-->
      <div id="set_background"></div>

      <!--In the specific part, I created a carousel which has 5 slides and each of them has a button. From these buttons, users are able to be sent to the other pages of the ecv-->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/carousel1.jpg" alt="carousel1">
          <div class="carousel-caption">
            <h5 class="caption_images">If you want to learn more about me...</h5>
            <button class="button"><span><a href="about.php">View more</a></span></button>
          </div><!--End of div carousel-caption-->
        </div><!--End of div item active-->
        <div class="item">
          <img src="images/carousel4.jpeg" alt="carousel4">
          <div class="carousel-caption">
            <h5 class="caption_images">If you want to learn more about my resume...</h5>
            <button class="button"><span><a href="resume.php">View more</a></span></button>
          </div><!--End of div carousel-caption-->
        </div><!--End of div item-->
        <div class="item">
          <img src="images/carousel3.jpg" alt="carousel3">
          <div class="carousel-caption">
            <h5 class="caption_images">If you want to learn more about my works and projects...</h5>
            <button class="button"><span><a href="works.php">View more</a></span></button>
          </div><!--End of div carousel-caption-->
        </div><!--End of div item-->
        <div class="item">
          <img src="images/carousel5.jpg" alt="carousel5">
          <div class="carousel-caption">
            <h5 class="caption_images">If you want to learn more about my clients' opinion...</h5>
            <button class="button"><span><a href="testimonials.php">View more</a></span></button>
          </div><!--End of div carousel-caption-->
        </div><!--End of div item-->
        <div class="item">
          <img src="images/carousel6.jpg" alt="carousel6">
          <div class="carousel-caption">
            <h5 class="caption_images">If you want to contact with me...</h5>
            <button class="button"><span><a href="contact.php">View more</a></span></button>
          </div><!--End of div carousel-caption-->
        </div><!--End of div item-->
      </div><!--End of div carousel-inner-->

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!--End of div carousel slide-->

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