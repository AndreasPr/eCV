<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>
    <!--Bootstrap ---------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!----------------------------------------------------------------------------------------------------------->
    <!--CSS------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" type="text/css" href="css/contact_style.css">
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



<!--In the specific section, I created three parts in contact form with grid system. The first one are the labels of the contact form, in the second one the required inputs of the contact form and in the last one some contact details and latest tweets. Furthermore, the contact form is connected with a server using PHP-->
  <section id="contact_form">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h5 class="labels_of_input_fields">Name *</h5>
          <h5 class="labels_of_input_fields">Email *</h5>
          <h5 class="labels_of_input_fields">Subject *</h5> 
          <h5 class="labels_of_input_fields">Message *</h5>
        </div><!--End of div col-->
        <div class="col-lg-4 col-md-4 col-sm-12">
          <form action="contact.php" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" id="fullname" name="fullname" required="required" size="36">
            </div>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" id="email" name="email" required="required" size="36">
            </div>
            <div class="input-group">
              <input type="text" class="form-control" aria-describedby="basic-addon1" id="subject" name="subject" required="required" size="36">
            </div>
            <div class="input-group">
              <textarea class="form-control" rows="5" cols="36" id="message" name="message" required="required"></textarea>
            </div>
            <div id="submit_btn_div">
              <button type="button" class="btn btn-default" name="submit" id="submit_btn">Submit</button>
            </div>
          </form>
        </div><!--End of div col-->
        <div class="col-lg-4 col-md-4 col-sm-12" id="tweets_address_phone">
          <h5>Address & Phone</h5>
          <p>Ermou 25, Athens</p>
          <p>(+30) 210 55 47126</p><br>
          <h5>Latest Tweets</h5>
          <p>Android Q Beta 3 hands-on: Dark theme, new gestures, and more! Read more and watch the full video here:<a href="http://andauth.co/Android10Q" target="_blank">http://andauth.co/Android10Q</a></p>
          <br>
          <p>Customer Success: Toni Scott, owner of Accurate Accounting Solutions, shares how having the right #technology has helped her grow her #bookkeeping business. See Toni's story:<a href="http://1sa.ge/wkUL50tVyrV" target="_blank">http://1sa.ge/wkUL50tVyrV</a></p>
          <br>
          <p>The Npontu National Service Scheme Program/ Internship is open for; 1. Application Developers. If you are interested, send your CV to hr@npontu.com and let’s take it from there. Apply now!! #AI #NSS#MachineLearning #Technology #2019 #coding</p>
        </div><!--End of div col-->
      </div><!--End of row-->
    </div><!--End of container-->
  </section><!--End of section-->
  <script>
    $(document).ready(function(){
        $("#submit_btn").click(function(){//When submit button is clicked...
            var fullname=$("#fullname").val();//Get the value of name field from the contact form
            var email=$("#email").val();//Get the value of email field from the contact form
            var subject=$("#subject").val();//Get the value of subject field from the contact form
            var message=$("#message").val();//Get the value of message field from the contact form
            $.ajax({//Calling ajax method, I get the values of fields from the contact form and, via POST method, I get the result of the insert_contact_data php file.   
                url:'insert_contact_data.php',
                method:'POST',
                data:{
                    fullname:fullname,
                    email:email,
                    subject:subject,
                    message:message
                },
               success:function(data){
                   alert(data);
               }
            });//End of ajax
        });//End of click
    });//End of ready
  </script>


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