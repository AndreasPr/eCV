<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Testimonials</title>
    <!--Bootstrap ---------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!----------------------------------------------------------------------------------------------------------->
    <!--CSS------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/testimonials_style.css">
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


<!--In the specific section, I created three testimonials from some clients using carousel of the bootstrap framework. Furthermore, we can see the star rating and their positions to their enterprises-->
  <div id="title_of_testimonials_div"><h3 id="title_of_testimonials">Find out what people are saying about me...</h3></div><!--End of div title_of_testimonials_div-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">    
      <div class="item carousel-item active">
        <div class="img-box"><img src="images/testimonials3.jpg" alt="testimonials3"></div>
        <p class="testimonial">I recommend Andreas Priftis to everyone looking for web development. He was prompt in developing the applications and systems that not only fit my specifications but also exceeded my expectations. The projects are not just attractive in the looks but also offer enhanced engagement to the users. I am really impressed by his talent and professionalism..</p>
        <p class="overview"><b>Dimitra Kostakou</b>Business Analyst at <span>Plaisio.</span></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div><!--End of div star-rating-->
      </div><!--End of div carousel-item-->
      <div class="item carousel-item">
        <div class="img-box"><img src="images/testimonials1.jpg" alt="testimonials1"></div>
        <p class="testimonial">I assigned Andreas to a redesigning job of my existing site. He left no loophole exposed in his redesigning work and created a fresh, eye-tempting design for my site. Really, the new design is very user-friendly and responsive as well! Looking forward to hire him again to design my next upcoming site.</p>
        <p class="overview"><b>Konstantinos Matzos</b>Media Analyst at <span>Signal Ocean.</span></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
          </ul>
        </div><!--End of div star-rating-->
      </div><!--End of div carousel-item-->
      <div class="item carousel-item">
        <div class="img-box"><img src="images/testimonials2.jpg" alt="testimonials2"></div>
        <p class="testimonial">Fantastic work! I am just impressed by his service quality and working strategy. I hired him for the development of my online store and he has satisfied me to the full by delivering the exceptional solution. He has a great expertise, is dedicated, attentive, talented and care much about the client needs. Highly recommended.</p>
        <p class="overview"><b>Stefanos Antoniou</b>Web Developer at <span>Singular Logic.</span></p>
        <div class="star-rating">
          <ul class="list-inline">
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
          </ul>
        </div><!--End of div star-rating-->
      </div><!--End of div carousel-item-->    
    </div><!--End of div carousel-inner-->
    <!-- Carousel controls -->
    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
      <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
      <i class="fa fa-angle-right"></i>
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