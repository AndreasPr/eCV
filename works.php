<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Work</title>
    <!--Bootstrap ---------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!----------------------------------------------------------------------------------------------------------->
    <!--CSS------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/works_style.css">
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


<!--In the specific section, I created a group of cards which contain my projects from Github. I've used grid system of bootstrap framework -->
   <section id="t-cards">
    <div class="container">
      <h3 id="title_of_projects"><span>Projects</span></h3>
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/heart.jpg" />
                  </div><!--End of div panel-heading-->
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div><!--End of div panel-figure-->
                  <div class="panel-body text-center">
                      <h4 class="panel-header">Heart D. Prediction System</h4>
                      <small>A short description & code are here.</small>
                  </div><!--End of div panel-body-->
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->   
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/ecv.png" />
                  </div><!--End of div panel-heading-->
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div><!--End of div panel-figure-->
                  <div class="panel-body text-center">
                      <h4 class="panel-header">eCV</h4>
                      <small>A short description & code are here.</small>
                  </div><!--End of div panel-body-->
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->   
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/project.jpg" />
                  </div><!--End of div panel-heading-->
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div><!--End of div panel-figure-->
                  <div class="panel-body text-center">
                      <h4 class="panel-header">Airline Reservation System</h4>
                      <small>A short description & code are here.</small>
                  </div><!--End of div panel-body-->
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div> <!--End of div panel-default-->  
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/airline.jpg" />
                  </div><!--End of div panel-heading-->
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div><!--End of div panel-figure-->
                  <div class="panel-body text-center">
                      <h4 class="panel-header">Airline Reservation System</h4>
                      <small>A short description & code are here.</small>
                  </div><!--End of div panel-body-->
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->   
            </div><!--End of div col-->
          </div><!--End of div row-->
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                <div class="panel-heading">
                    <img src="images/eportfolio.png" />
                </div><!--End of div panel-heading-->
                <div class="panel-figure">
                    <img class="img-responsive img-circle" src="images/github.svg" />
                </div><!--End of div panel-figure-->
                <div class="panel-body text-center">
                    <h4 class="panel-header">ePortfolio</h4>
                    <small>A short description & code are here.</small>
                </div><!--End of div panel-body-->
                <div class="panel-thumbnails">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                          <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                        </div><!--End of div col-->
                    </div><!--End of div row-->
                </div><!--End of div panel-thumbnails-->
              </div> <!--End of div panel-default-->  
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                <div class="panel-heading">
                    <img src="images/blog.jpg" />
                </div><!--End of div panel-heading-->
                <div class="panel-figure">
                    <img class="img-responsive img-circle" src="images/github.svg" />
                </div><!--End of div panel-figure-->
                <div class="panel-body text-center">
                    <h4 class="panel-header">Blog - CodeIgniter</h4>
                    <small>A short description & code are here.</small>
                </div><!--End of div panel-body-->
                <div class="panel-thumbnails">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                          <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                        </div><!--End of div col-->
                    </div><!--End of div row-->
                </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/xml.jpg" />
                  </div><!--End of div panel-heading-->
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div><!--End of div panel-figure-->
                  <div class="panel-body text-center">
                      <h4 class="panel-header">XML Project</h4>
                      <small>A short description & code are here.</small>
                  </div><!--End of div panel-body-->
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->   
            </div><!--End of div col-->
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-default panel-card">
                  <div class="panel-heading">
                      <img src="images/work1.jpg" />
                  </div>
                  <div class="panel-figure">
                      <img class="img-responsive img-circle" src="images/github.svg" />
                  </div>
                  <div class="panel-body text-center">
                      <h4 class="panel-header">Once-Only Principle</h4>
                      <small>A short description & code are here.</small>
                  </div>
                  <div class="panel-thumbnails">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="https://github.com/AndreasPr">https://github.com/AndreasPr</a>
                          </div><!--End of div col-->
                      </div><!--End of div row-->
                  </div><!--End of div panel-thumbnails-->
              </div><!--End of div panel-default-->   
            </div><!--End of div col-->
      </div><!--End of div row-->
    </div><!--End of div container-->
</section><!--End of section of cards-->


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