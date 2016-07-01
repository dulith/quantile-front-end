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
  <link href="css/float-label.css" rel="stylesheet">
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
    <section id="middle-content">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 sign-in-registration-main-container">
          <div class="sign-in-registration-header-container">
           <h5>Profile Information <br><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry</small></h5>
          </div>
          <div class="sign-in-registration-middle-container">
                <form role="form">
                  <div class="row">
                    <div class="col-md-12">
                      <h6>Personal Information</h6>  
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First name [required]" data-toggle="floatLabel" data-value="no-js">
                          <label for="first_name">First name [required]</label>
                          <div class="error-msg"><!--Error message through JS--></div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Last name [optional]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">Last name [optional]</label>
                        </div>
                    </div> 
                  </div> 
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Email address [required]" data-toggle="floatLabel" data-value="no-js">
                          <label for="first_name">Email address [required]</label>
                          <div class="error-msg"><!--Error message through JS--></div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Phone [optional]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">Phone [optional]</label>
                        </div>
                    </div>                 
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <div class="form-group">
                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Country [required]" data-toggle="floatLabel" data-value="no-js">
                          <label for="first_name">Country [required]</label>
                          <div class="error-msg"><!--Error message through JS--></div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="City [required]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">City [required]</label>
                            <div class="error-msg"><!--Error message through JS--></div>
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="State [required]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">State [required]</label>
                            <div class="error-msg"><!--Error message through JS--></div>
                        </div>
                    </div>                                   
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <div class="form-group">
                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Zip / Postal code [optional]" data-toggle="floatLabel" data-value="no-js">
                          <label for="first_name">Zip / Postal code [optional]</label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Address [optional]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">Address [optional]</label>
                        </div>
                    </div> 
                    <div class="col-md-12">
                      <hr> 
                    </div>
                  </div>   
                  <div class="row">
                    <div class="col-md-12">
                      <h6>Professional Information</h6>  
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="tab" class="btn-group margin-bottom-25" data-toggle="buttons">
                            <a href="#company" class="btn btn-default btn-small active" data-toggle="tab">
                                <input type="radio" />Company</a>
                            <a href="#individual" class="btn btn-default btn-small" data-toggle="tab">
                                <input type="radio" />Individual</a>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="tab-content">
                            <div class="tab-pane active" id="company">
                              <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Company name [required]" data-toggle="floatLabel" data-value="no-js">
                                        <label for="first_name">Company name [required]</label>
                                        <div class="error-msg"><!--Error message through JS--></div>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="# of employees [required]" data-toggle="floatLabel" data-value="no-js">
                                          <label for="first_name"># of employees [required]</label>
                                          <div class="error-msg"><!--Error message through JS--></div>
                                      </div>
                                  </div>                 
                                </div>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Website [optional]" data-toggle="floatLabel" data-value="no-js">
                                        <label for="first_name">Website [optional]</label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Twitter [optional]" data-toggle="floatLabel" data-value="no-js">
                                          <label for="first_name">Twitter [optional]</label>
                                      </div>
                                  </div>  
                                  <div class="col-xs-12 col-sm-12 col-md-4">
                                      <div class="form-group">
                                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Linkedin [optional]" data-toggle="floatLabel" data-value="no-js">
                                          <label for="first_name">Linkedin [optional]</label>
                                      </div>
                                  </div>                                   
                                </div> 
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="About the company [optional]" data-toggle="floatLabel" data-value="no-js"></textarea>
                                        <label for="first_name">About the company [optional]</label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="Most Interesting Projects Worked [optional]" data-toggle="floatLabel" data-value="no-js"></textarea>
                                        <label for="first_name">Most Interesting Projects Worked [optional]</label>
                                    </div>
                                  </div>                 
                                </div>                                                                
                            </div>
                            <div class="tab-pane" id="individual">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="About Me [optional]" data-toggle="floatLabel" data-value="no-js"></textarea>
                                        <label for="first_name">About Me [optional]</label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="Most Interesting Projects Worked [optional]" data-toggle="floatLabel" data-value="no-js"></textarea>
                                        <label for="first_name">Most Interesting Projects I Worked [optional]</label>
                                    </div>
                                  </div>                 
                                </div> 
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Linkedin [optional]" data-toggle="floatLabel" data-value="no-js">
                                        <label for="first_name">Linkedin [optional]</label>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Twitter [optional]" data-toggle="floatLabel" data-value="no-js">
                                          <label for="first_name">Twitter [optional]</label>
                                      </div>
                                  </div>                                    
                                </div>
                                <div class="row">   
                                  <div class="col-xs-12 col-md-12  col-sm-12 ">  
                                    <!-- image-preview-filename input [CUT FROM HERE]-->
                                    <div class="input-group image-preview form-group">
                                        <input type="text" class="form-control image-preview-filename browse-field" disabled="disabled" placeholder="Attach file(pdf)"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default btn-browse image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default btn-browse image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div><!-- /input-group image-preview [TO HERE]--> 
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="How did you hear about us? [optional]" data-toggle="floatLabel" data-value="no-js"></textarea>
                                        <label for="first_name">How did you hear about us? [optional]</label>
                                    </div>
                                  </div>                 
                                </div>                                 
                            </div>                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <hr> 
                  </div> 
                  <div class="row">
                    <div class="col-md-12">
                      <h6>Area of Expertise </h6>  
                    </div>
                    <div class="col-md-12 margin-bottom-25">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Corporate Branding
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Advertising Campaign Generation
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Social Media Campaigning
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Banners
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Storyboard
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Packaging
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Billboard Advertising
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Point-of-Sale Material
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Posters
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Press Ads
                            </label>
                          </div>                               
                        </div>
                      </div>
                  </div>   
                </div> 
                <div>
                  <hr> 
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <h6>Sectors Worked with</h6>  
                    </div>
                    <div class="col-md-12 margin-bottom-25">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Automotive
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Charity
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Consumer Goods
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Education
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Entertainment / Leisure
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Fashion
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Finance
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Food/Drink
                            </label>
                          </div>                               
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Healthcare / Pharmaceuticals
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Manufacturing
                            </label>
                          </div>                               
                        </div>
                      </div>
                  </div>   
                </div> 
                <div>
                  <hr> 
                </div> 
                <div class="row">
                    <div class="checkbox col-md-8">
                      <label>
                        <input type="checkbox"> I have read and agreed to the Terms and Conditions
                      </label>
                    </div>
                    <div class="checkbox col-md-4">
                      <input type="submit" value="Complete Sign up" class="btn btn-primary btn-block">
                    </div>
                </div>                                                                                    
              </form>
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
<!--  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
 -->  <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-hover-dropdown.js"></script>
      <script src="js/qantile-script.js"></script>
      <script src="js/file-upload.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!--    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>