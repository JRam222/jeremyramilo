<!doctype html>
<html class="no-js" lang="">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110886434-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-110886434-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jeremy Ramilo - Web Developer</title>
        <meta name="description" content="Web developer in Dallas creating beautiful and quality websites at a cheap price.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/media_query.css">
    </head>
    <body>
        <?php include_once 'connect.php';
              include_once 'getProjects.php';        
        ?>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       <div class="container-fluid">
           <nav class="navbar fixed-top ">
              <a class="navbar-brand" href="#">Jeremy Ramilo</a>
               <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item ml-auto">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
           <div class="row">
                <div class="col-lg-12">
                    <div id="main">
                        <h1>Web Developer at your service</h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="projects">
                        <h6 class="text-center">Projects</h6>
                        <div class="row">
                            <?php
                            
                            while($project = mysqli_fetch_assoc($result)){
                                echo'
                                <div class=" section project-sec col-lg-6 col-sm-12">
                                    <a href="'.$project['link'].'">
                                        <img src="'.$project['img'].'"/>
                                        <h5>'.$project['title'].'</h5>
                                    </a>
                                </div>
                                ';
                            };
                            
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="about">
                        <h6 class="text-center">About</h6>
                        <div class="row">
                            <div class="section col-lg-6 col-sm-12">
                                <p>
                                    I am a UT Dallas student studying in Computer Science. I am always learning and always adapting 
                                    to the best practices, allowing me to create the best content for all my clients.
                                </p>
                            </div>
                            <div class=" section col-lg-6 col-sm-12">
                                <p>
                                    Clear communication and a warm personality are my specialty. I work to serve and produce
                                    the best product for my client. I intend not only to get the work done, but to also get to know my client 
                                    on a personal level.
                                </p>
                            </div>
                            <div class=" section col-lg-6 col-sm-12">
                                <p>
                                    I have a huge knack for creativity. Whatever design you desire, I can create. I always strive to create the most beautiful designs that suit each client's needs. I will give each website a beautiful aesthetic as well as a functional design.
                                </p>
                            </div>
                            <div class=" section col-lg-6 col-sm-12">
                                <p>
                                   My work is fast and reasonably priced. Each website that I create will be done at a reasonable price. My goal is to benefit your business. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="contact">  
                        <h6 class="text-center">Contact</h6>
                        <div align="center">
                            <form action="contact.php" method="post" id="form">
                                <label>Name:</label><input type="text" name="name" /><br />
                                <label>Email:</label><input type="text" name="email" /><br />
                                <label>Message:</label><textarea name="message" form="form"></textarea><br />
                                <input class="btn" type="submit" value="Submit"><br />
                                <?php
                                $status = $_GET['status'];
                                     if($status == 2){
                                        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                                     }else if($status ==1){
                                        echo "<script type='text/javascript'>alert('Invalid Email')</script>";
                                     }else if($status == 3){
                                        echo "<script type='text/javascript'>alert('Input Error. Please try again.')</script>";
                                     };
                                
                                ?>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
       </div>

<script>
    // Select all links with hashes
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });
</script>
        
        
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
