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
      <link href="css/custom.css" rel="stylesheet">
      <link href="css/smart_wizard.css" rel="stylesheet">
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
               <h5>Post Your Project <br><small>We guarantee that the information provided by the Clients is solely for the use of Qantle support staff and will not be made available for third parties.</small></h5>
              </div>
              <div class="sign-in-registration-middle-container">
                <form >
                  <section>
                    <div class="wizard">
                      <div class="wizard-inner">
                        <ul class="nav nav-tabs border-bottom-none" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                        <span class="step-number">1</span> <span class="step-title">Your Project Details</span>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <span class="step-number">2</span> 
                                        <span class="step-title">Your Account Profile</span>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <span class="step-number">3</span> 
                                        <span class="step-title"> Complete</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                          <h6><br>Personal Information</h6>  
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name [required]" data-toggle="floatLabel" data-value="">
                            <label for="first_name">First Name [required]</label>
                            <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                              <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Last Name [required]" data-toggle="floatLabel" data-value="">
                                <label for="first_name">Last Name [required]</label>
                                <div class="error-msg"><!--Error message through JS--></div>
                              </div>
                            </div>                                    
                          </div>  
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Email [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Email [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Phone number [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Phone number [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>                                    
                        </div> 
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Company [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Company [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Company Profile [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Company Profile [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>                                    
                        </div>
                        <h6>Poject Information</h6> 
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Project Name [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Project Name [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group styled-select">
                              <select class="form-control input-sm styled-select" name="" id="" data-toggle="floatLabel" data-value="3">
                              <option value="">Project Type [required]</option>
                              <option value="1">Type 1</option>
                              <option value="2">Type 2</option>
                              <option value="3">Type 3</option>
                              </select>
                              <label for="Country">Country [required]</label>
                            </div>
                          </div>                                   
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="Project Objectives [required]" data-toggle="floatLabel" data-value=""></textarea>
                                <label for="first_name">Project Objectives [required]</label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <textarea rows="4" cols="50" name="first_name" id="first_name" class="form-control input-sm sign-up-text-area" placeholder="Project Deliverables [required]" data-toggle="floatLabel" data-value=""></textarea>
                                <label for="first_name">Project Deliverables [required]</label>
                            </div>
                          </div>                 
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group styled-select">
                              <select class="form-control input-sm styled-select" name="" id="" data-toggle="floatLabel" data-value="3">
                              <option value="">Currency Type [required]</option>
                              <option value="1">Type 1</option>
                              <option value="2">Type 2</option>
                              <option value="3">Type 3</option>
                              </select>
                              <label for="Country">Currency Type [required]</label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Budget [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Budget [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>                                   
                        </div>
                        <h6>Company Information</h6> 
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Company [required]" data-toggle="floatLabel" data-value="">
                            <label for="first_name">Company [required]</label>
                            <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group styled-select">
                              <select class="form-control input-sm styled-select" name="" id="" data-toggle="floatLabel" data-value="3">
                              <option value="">Country [required]</option>
                              <option value="1">1-5</option>
                              <option value="2">5-10</option>
                              <option value="3">10-15</option>
                              <option value="4">15-20</option>
                              <option value="5">20<</option>
                              </select>
                              <label for="Country">Country [required]</label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Website [Optional]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Website [Optional]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>                                    
                        </div>  
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Company Profile [Optional]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Company Profile [Optional]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div> 
                        </div> 
                        <ul class="list-inline pull-right">
                          <li>
                            <button type="button" class="btn btn-primary next-step">Next
                            </button>
                          </li>
                        </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                          <h6><br>Timeline</h6>
                          <table id="dataTable" width="350px" border="1" class="table table-bordered tabel-v-lign">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Task/Work description</th>
                              <th>Number of days</th>
                            </tr>
                          </thead>
                            <tr>
                              <td>1</td>
                              <td>
                              <div class="form-group margin-bottom-clear">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm margin-bottom-clear" placeholder="Task [required]" data-toggle="floatLabel" data-value="">
                                <label for="first_name">Task</label>
                                <div class="error-msg"><!--Error message through JS--></div>
                              </div>
                              </td>
                              <td>
                              <div class="col-md-12">
                                <div class="form-group margin-bottom-clear">
                                  <input type="text" name="first_name" id="first_name" class="form-control input-sm margin-bottom-clear" placeholder="# of Days [required]" data-toggle="floatLabel" data-value="">
                                  <label for="first_name"># of Days [required]</label>
                                  <div class="error-msg"><!--Error message through JS--></div>
                                </div>
                              </div>
                              </td>
                            </tr>
                          </table>
                          <div class="margin-bottom-20">
                            <input type="button" value="Add Row" onclick="addRow('dataTable')" class="btn btn-secondary btn-small" />   
                          </div>
                          <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-secondary prev-step">Back</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                          </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                          <h6><br>Summary</h6>
                          <table id="" width="350px" border="1" class="table table-bordered tabel-v-lign">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Task/Work description</th>
                              <th>Pricing (with currency)</th>
                            </tr>
                          </thead>
                            <tr>
                              <td>1</td>
                              <td>
                              <div class="form-group margin-bottom-clear">
                                <div>Task 1</div>
                              </div>
                              </td>
                              <td>
                              <div class="col-md-12">
                                <div class=" margin-bottom-clear">
                                  <div class="col-md-1 margin-top-15">AUD</div>
                                  <div class="col-md-11">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm margin-bottom-clear" placeholder="Amount [required]" data-toggle="floatLabel" data-value="">
                                  <div class="error-msg"><!--Error message through JS--></div>
                                  </div>                                  
                                </div>
                              </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>
                              <div class="form-group margin-bottom-clear">
                                <div>Task 2</div>
                              </div>
                              </td>
                              <td>
                              <div class="col-md-12">
                                <div class=" margin-bottom-clear">
                                  <div class="col-md-1 margin-top-15">AUD</div>
                                  <div class="col-md-11">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm margin-bottom-clear" placeholder="Amount [required]" data-toggle="floatLabel" data-value="">
                                  <div class="error-msg"><!--Error message through JS--></div>
                                  </div>                                  
                                </div>
                              </div>
                              </td>
                            </tr> 
                            <tr>
                              <td>2</td>
                              <td>
                              <div class="form-group margin-bottom-clear">
                                <div>Total</div>
                              </div>
                              </td>
                              <td>
                              <div class="col-md-12">
                                <div class="margin-bottom-clear">
                                  <div class="col-md-1 margin-top-15">AUD</div>
                                  <div class="col-md-11">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm margin-bottom-clear" placeholder="Amount [required]" data-toggle="floatLabel" data-value="">
                                  <div class="error-msg"><!--Error message through JS--></div>
                                  </div>                                  
                                </div>
                              </div>
                              </td>
                            </tr>                           
                          </table>
                          <div class="margin-bottom-10">File Upload (use pdf file)</div>
                          <div>  
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
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"> <!-- rename it -->
                                    </div>
                                </span>
                            </div><!-- /input-group image-preview [TO HERE]--> 
                          </div>
                          <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-secondary prev-step">Back</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Finish</button></li>
                          </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                          <h3>Complete</h3>
                          <p>You have successfully completed all steps.</p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </section>
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
    <!--       <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     -->  <script src="js/bootstrap.min.js"></script>
          <script src="js/bootstrap-hover-dropdown.js"></script>
          <script src="js/qantile-script.js"></script>
          <script src="js/jquery.bootstrap.wizard.js"></script>
          <script src="js/jquery.smartWizard.js"></script>
          <script type="text/javascript">
              $(document).ready(function(){
                // Smart Wizard   
                $('#wizard').smartWizard();
                
                function onFinishCallback(){
                  $('#wizard').smartWizard('showMessage','Finish Clicked');
                  //alert('Finish Clicked');
                }     
              });
          </script>
          <script>
                  $(document).ready(function () {
                      //Initialize tooltips
                      $('.nav-tabs > li a[title]').tooltip();
                      
                      //Wizard
                      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                          var $target = $(e.target);
                      
                          if ($target.parent().hasClass('disabled')) {
                              return false;
                          }
                      });

                      $(".next-step").click(function (e) {

                          var $active = $('.wizard .nav-tabs li.active');
                          $active.next().removeClass('disabled');
                          nextTab($active);

                      });
                      $(".prev-step").click(function (e) {

                          var $active = $('.wizard .nav-tabs li.active');
                          prevTab($active);

                      });
                  });

                  function nextTab(elem) {
                      $(elem).next().find('a[data-toggle="tab"]').click();
                  }
                  function prevTab(elem) {
                      $(elem).prev().find('a[data-toggle="tab"]').click();
                  }
          </script>
               

          
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <!--    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
      </body>
    </html>