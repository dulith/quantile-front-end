    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Qantile Base Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/qantile-theme.css" rel="stylesheet">
        <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
      <!--nav Section start-->
      <section id="q-navbar">
        <? include 'header.php';?>
      </section>
      <!--nav Section end-->
      <!--Hero section start-->
      <section id="q-hero">
        <div class="container-fluid blue-default q-hero">
          <div class="container text-center">
            <h2>Top Consulting Talent On Demand</h2>
            <h4>Get instant access to top strategy, marketing and finance consultants.</h4>
            <a href="" class="btn btn-primary">Submit a Project</a>        
          </div> 

        </div>
      </sectioon>
      <!--Hero section end-->
      <!--services section start-->
        <section id="q-services">
          <div class="container">
            <div class="q-services text-center row">
            <h3 class="margin-bottom-50 margin-top-clear">Find out what we can do for you</h3>
            <div class="col-md-12">
              <div class="col-md-4">
                 <img src="img/service-icon-1.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Digital Services</h5>
                 <p class="margin-bottom-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 <hr class="featurette-divider margin-left-70 margin-right-70"> 
              </div>
              <div class="col-md-4">
                 <img src="img/service-icon-2.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Application Services</h5>
                 <p class="margin-bottom-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 <hr class="featurette-divider margin-left-70 margin-right-70"> 
              </div>
              <div class="col-md-4">
                 <img src="img/service-icon-3.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Graphic Design</h5>
                 <p class="margin-bottom-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 <hr class="featurette-divider margin-left-70 margin-right-70"> 
              </div>
              <div class="col-md-4 margin-top-30">
                 <img src="img/service-icon-4.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Business Analysis & BPM</h5>
                 <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
              </div>
              <div class="col-md-4 margin-top-30">
                 <img src="img/service-icon-5.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Business Consultancy</h5>
                 <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="col-md-4 margin-top-30">
                 <img src="img/service-icon-6.png" alt="">
                 <h5 class="margin-top-clear margin-top-20">Policy</h5>
                 <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            </div>
          </div>            
        </section>
      <!--services section end-->
      <!--projects section start-->
        <section id="q-projects">
          <div class="container-fluid red-default q-projects">
            <div class="col-md-12">
                <img src="img/projects.jpg" alt="" class="center-block img-responsive">            
            </div>
          </div>          
        </section> 
      <!--projects section end-->   
      <!--why quantil section start-->
        <section id="q-why-quantile">
          <div class="container">
            <div class="col-md-12 q-why-quantile text-center">
             <h3 class="margin-bottom-50 margin-top-clear">Why Qantile?</h3>
             <div class="col-md-6 text-left block-1 margin-bottom-50">
               <h5>Lorem Ipsum is simply dummy text</h5>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
             </div>
             <div class="col-md-6 text-left block-2 margin-bottom-50">
               <h5>Lorem Ipsum is simply dummy text</h5>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
             </div>
             <div class="col-md-6 text-left block-3 margin-bottom-50">
               <h5>Lorem Ipsum is simply dummy text</h5>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
             </div>
             <div class="col-md-6 text-left block-4">
               <h5>Lorem Ipsum is simply dummy text</h5>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
             </div>
            </div>
          </div>            
        </section>
      <!--why quantile section end--> 
      <!--clients section start-->
        <section id="q-clients">
          <div class="container-fluid red-default q-clients text-center">
            <div class="container">
              <h3 class="margin-bottom-50">Look who has worked with our Consultants</h3>
              <ul class="list-inline logo-list">
                  <li><img src="img/client-1.png"></li>
                  <li><img src="img/client-2.png"></li>
                  <li><img src="img/client-3.png"></li>
                  <li><img src="img/client-4.png"></li>
              </ul>
            </div> 
          </div>          
        </section>
      <!--clients section end-->  
      <!--client's testimonials section start-->
        <section id="q-client-testimonials">
          <div class="container-fluid red-default q-client-testimonials"> 
            <div class="container">
              <div class="row">
                <div class="col-md-offset-1 col-md-10 q-client-testimonials-main-container">
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1" ></li>
                      <li data-target="#quote-carousel" data-slide-to="2" ></li>
                   <!--    <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li> -->
                    </ol>
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner" data-pause="false"> 
                      <!-- Quote 1 -->
                      <div class="item active">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-2 text-center carousel-quote-symbol padding-right-clear">
                              <img src="img/quote.png">
                            </div>
                            <div class="col-sm-9 padding-left-clear">
                              <p class="col-md-12 q-quote-des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                              <div class="client-image">
                                <div class="col-md-6 text-right client-info">
                                  <div class="client-name">Name of the client</div>
                                  <div class="company-name">Company</div>
                                </div>
                                <div class="col-md-6 padding-left-clear">
                                  <img src="img/client-01.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-2 text-center carousel-quote-symbol padding-right-clear">
                              <img src="img/quote.png">
                            </div>
                            <div class="col-sm-9 padding-left-clear">
                              <p class="col-md-12 q-quote-des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                              <div class="client-image">
                                <div class="col-md-6 text-right client-info">
                                  <div class="client-name">Name of the client</div>
                                  <div class="company-name">Company</div>
                                </div>
                                <div class="col-md-6 padding-left-clear">
                                  <img src="img/client-02.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-2 text-center carousel-quote-symbol padding-right-clear">
                              <img src="img/quote.png">
                            </div>
                            <div class="col-sm-9 padding-left-clear">
                              <p class="col-md-12 q-quote-des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                              <div class="client-image">
                                <div class="col-md-6 text-right client-info">
                                  <div class="client-name">Name of the client</div>
                                  <div class="company-name">Company</div>
                                </div>
                                <div class="col-md-6 padding-left-clear">
                                  <img src="img/client-03.png" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </blockquote>
                      </div>                        
                    </div>
                    <!-- Carousel Buttons Next/Prev -->
          <!--           <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> -->
                  </div>                          
                </div>
              </div>
            </div>
          </div>          
        </section>
        <!--client's testimonials section end-->   
        <!--how to hire a consultant section start-->
          <section id="q-how-to-hire">
            <div class="container red-default q-how-to-hire text-center"> 
              <h3 class="margin-bottom-50">How we work?</h3>
              <div class="col-md-12">
                <div class="col-md-3 text-left">
                  <div class="stepwizard-row">
                    <span class="stepwizard-step">1.</span>
                    <h5>Write Project Proposal</h5>
                    <p class="margin-bottom-20">Client completes the online project brief  & the project  is listed on the Qantle platform for free!</p>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="stepwizard-row">
                    <span class="stepwizard-step">2.</span>
                    <h5>Post Project</h5>
                    <p class="margin-bottom-20">Registered consultants post proposals  & Qantle sends a short listed pitches  to the client  dashboard</p>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="stepwizard-row">
                    <span class="stepwizard-step">3.</span>
                    <h5>Select Consultant</h5>
                    <p class="margin-bottom-20">Client selects the consultant & now the project is in progress, monitored by Qantle</p>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="stepwizard-row">
                    <span class="stepwizard-step">4.</span>
                    <h5>Receive Final Project</h5>
                    <p class="margin-bottom-20">Success! Your project is delivered on time</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <a href="" class="btn btn-primary margin-top-40">Post your Project</a>
                </div>
            </div>          
          </section>
          <section id="q-stats">
            <div class="container-fluid red-default q-stats"> 
              <div class="container text-center">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h1>600+</h1><small>Clients</small>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h1>1000+</h1><small>Consultants</small>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h1>1200+</h1><small>Projects</small>
                </div>
              </div>
            </div>          
          </section>      
        <!--how to hire a consultant section end--> 
        <!--consultant section start-->
          <section id="q-consultant">
            <div class="container-fluid red-default q-consultant-top"> 
              <div class="container text-center">
                <h3 class="margin-bottom-50 margin-top-clear">Some of our talented Consultants</h3>
                <div class="col-md-12">
                <div class="col-md-4 col-sm-4 center-block col-xs-4">
                  <img src="img/consultant-01.png" alt="">
                </div>
                <div class="col-md-4 col-sm-4 center-block col-xs-4">
                  <img src="img/consultant-02.png" alt="">
                </div>
                <div class="col-md-4 col-sm-4 center-block col-xs-4">
                  <img src="img/consultant-03.png" alt="">
                </div>
                </div>
              </div>
            </div>    
            <div class="container-fluid red-default q-consultant-bottom">     
              <div class="container text-center">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5>Consultant’s Name</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5>Consultant’s Name</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5>Consultant’s Name</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-12">
                  <a href="" class="btn btn-secondary  margin-top-40">Join as a Consultant</a>
                </div>
              </div>
            </div>      
          </section>      
        <!--footer section end--> 
          <section id="q-footer">
            <? include 'footer.php' ?>          
          </section>      
        <!--footer section end-->                
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-hover-dropdown.js"></script>
            <script src="../../assets/js/docs.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <!-- SmartMenus jQuery plugin -->
            <script type="text/javascript" src="js/jquery-smartmenus.js"></script>
            <!-- SmartMenus jQuery Bootstrap Addon -->
            <script type="text/javascript" src="js/jquery-smartmenus-bootstrap.js"></script>
          </body>
        </html>