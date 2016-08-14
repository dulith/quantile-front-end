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
               <h5>Consultant Pitch <br><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id est est.</small></h5>
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
                                        <span class="step-number">1</span> <span class="step-title">Consultant Details</span>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <span class="step-number">2</span> 
                                        <span class="step-title">Timeline & Estimate</span>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <span class="step-number">3</span> 
                                        <span class="step-title"> Summary</span>
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
                        <h6>Poject Information</h6> 
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Project Type [required]" data-toggle="floatLabel" data-value="">
                              <label for="first_name">Project Type [required]</label>
                              <div class="error-msg"><!--Error message through JS--></div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group styled-select">
                              <select class="form-control input-sm styled-select" name="" id="" data-toggle="floatLabel" data-value="3">
                              <option value="">Country [required]</option>
                              <option value="1">Afghanistan</option>
                              <option value="2">Albania</option>
                              <option value="3">Algeria</option>
                              <option value="4">American Samoa</option>
                              <option value="5">Andorra</option>
                              <option value="6">Angola</option>
                              <option value="7">Anguilla</option>
                              <option value="8">Antarctica</option>
                              <option value="9">Antigua And Barbuda</option>
                              <option value="10">Argentina</option>
                              <option value="11">Armenia</option>
                              <option value="12">Aruba</option>
                              <option value="13">Australia</option>
                              <option value="14">Austria</option>
                              <option value="15">Azerbaijan</option>
                              <option value="16">Bahamas The</option>
                              <option value="17">Bahrain</option>
                              <option value="18">Bangladesh</option>
                              <option value="19">Barbados</option>
                              <option value="20">Belarus</option>
                              <option value="21">Belgium</option>
                              <option value="22">Belize</option>
                              <option value="23">Benin</option>
                              <option value="24">Bermuda</option>
                              <option value="25">Bhutan</option>
                              <option value="26">Bolivia</option>
                              <option value="27">Bosnia and Herzegovina</option>
                              <option value="28">Botswana</option>
                              <option value="29">Bouvet Island</option>
                              <option value="30">Brazil</option>
                              <option value="31">British Indian Ocean Territory</option>
                              <option value="32">Brunei</option>
                              <option value="33">Bulgaria</option>
                              <option value="34">Burkina Faso</option>
                              <option value="35">Burundi</option>
                              <option value="36">Cambodia</option>
                              <option value="37">Cameroon</option>
                              <option value="38">Canada</option>
                              <option value="39">Cape Verde</option>
                              <option value="40">Cayman Islands</option>
                              <option value="41">Central African Republic</option>
                              <option value="42">Chad</option>
                              <option value="43">Chile</option>
                              <option value="44">China</option>
                              <option value="45">Christmas Island</option>
                              <option value="46">Cocos (Keeling) Islands</option>
                              <option value="47">Colombia</option>
                              <option value="48">Comoros</option>
                              <option value="49">Congo</option>
                              <option value="50">Congo The Democratic Republic </option>
                              <option value="51">Cook Islands</option>
                              <option value="52">Costa Rica</option>
                              <option value="53">Croatia (Hrvatska)</option>
                              <option value="54">Cuba</option>
                              <option value="55">Cyprus</option>
                              <option value="56">Czech Republic</option>
                              <option value="57">Denmark</option>
                              <option value="58">Djibouti</option>
                              <option value="59">Dominica</option>
                              <option value="60">Dominican Republic</option>
                              <option value="61">East Timor</option>
                              <option value="62">Ecuador</option>
                              <option value="63">Egypt</option>
                              <option value="64">El Salvador</option>
                              <option value="65">Equatorial Guinea</option>
                              <option value="66">Eritrea</option>
                              <option value="67">Estonia</option>
                              <option value="68">Ethiopia</option>
                              <option value="69">External Territories of Austra</option>
                              <option value="70">Falkland Islands</option>
                              <option value="71">Faroe Islands</option>
                              <option value="72">Fiji Islands</option>
                              <option value="73">Finland</option>
                              <option value="74">France</option>
                              <option value="75">French Guiana</option>
                              <option value="76">French Polynesia</option>
                              <option value="77">French Southern Territories</option>
                              <option value="78">Gabon</option>
                              <option value="79">Gambia The</option>
                              <option value="80">Georgia</option>
                              <option value="81">Germany</option>
                              <option value="82">Ghana</option>
                              <option value="83">Gibraltar</option>
                              <option value="84">Greece</option>
                              <option value="85">Greenland</option>
                              <option value="86">Grenada</option>
                              <option value="87">Guadeloupe</option>
                              <option value="88">Guam</option>
                              <option value="89">Guatemala</option>
                              <option value="90">Guernsey and Alderney</option>
                              <option value="91">Guinea</option>
                              <option value="92">Guinea-Bissau</option>
                              <option value="93">Guyana</option>
                              <option value="94">Haiti</option>
                              <option value="95">Heard and McDonald Islands</option>
                              <option value="96">Honduras</option>
                              <option value="97">Hong Kong S.A.R.</option>
                              <option value="98">Hungary</option>
                              <option value="99">Iceland</option>
                              <option value="100">India</option>
                              <option value="101">Indonesia</option>
                              <option value="102">Iran</option>
                              <option value="103">Iraq</option>
                              <option value="104">Ireland</option>
                              <option value="105">Israel</option>
                              <option value="106">Italy</option>
                              <option value="107">Jamaica</option>
                              <option value="108">Japan</option>
                              <option value="109">Jersey</option>
                              <option value="110">Jordan</option>
                              <option value="111">Kazakhstan</option>
                              <option value="112">Kenya</option>
                              <option value="113">Kiribati</option>
                              <option value="114">Korea North</option>
                              <option value="115">Korea South</option>
                              <option value="116">Kuwait</option>
                              <option value="117">Kyrgyzstan</option>
                              <option value="118">Laos</option>
                              <option value="119">Latvia</option>
                              <option value="120">Lebanon</option>
                              <option value="121">Lesotho</option>
                              <option value="122">Liberia</option>
                              <option value="123">Libya</option>
                              <option value="124">Liechtenstein</option>
                              <option value="125">Lithuania</option>
                              <option value="126">Luxembourg</option>
                              <option value="127">Macau S.A.R.</option>
                              <option value="128">Macedonia</option>
                              <option value="129">Madagascar</option>
                              <option value="130">Malawi</option>
                              <option value="131">Malaysia</option>
                              <option value="132">Maldives</option>
                              <option value="133">Mali</option>
                              <option value="134">Malta</option>
                              <option value="135">Man (Isle of)</option>
                              <option value="136">Marshall Islands</option>
                              <option value="137">Martinique</option>
                              <option value="138">Mauritania</option>
                              <option value="139">Mauritius</option>
                              <option value="140">Mayotte</option>
                              <option value="141">Mexico</option>
                              <option value="142">Micronesia</option>
                              <option value="143">Moldova</option>
                              <option value="144">Monaco</option>
                              <option value="145">Mongolia</option>
                              <option value="146">Montserrat</option>
                              <option value="147">Morocco</option>
                              <option value="148">Mozambique</option>
                              <option value="149">Myanmar</option>
                              <option value="150">Namibia</option>
                              <option value="151">Nauru</option>
                              <option value="152">Nepal</option>
                              <option value="153">Netherlands Antilles</option>
                              <option value="154">Netherlands The</option>
                              <option value="155">New Caledonia</option>
                              <option value="156">New Zealand</option>
                              <option value="157">Nicaragua</option>
                              <option value="158">Niger</option>
                              <option value="159">Nigeria</option>
                              <option value="160">Niue</option>
                              <option value="161">Norfolk Island</option>
                              <option value="162">Northern Mariana Islands</option>
                              <option value="163">Norway</option>
                              <option value="164">Oman</option>
                              <option value="165">Pakistan</option>
                              <option value="166">Palau</option>
                              <option value="167">Palestinian Territory Occupied</option>
                              <option value="168">Panama</option>
                              <option value="169">Papua new Guinea</option>
                              <option value="170">Paraguay</option>
                              <option value="171">Peru</option>
                              <option value="172">Philippines</option>
                              <option value="173">Pitcairn Island</option>
                              <option value="174">Poland</option>
                              <option value="175">Portugal</option>
                              <option value="176">Puerto Rico</option>
                              <option value="177">Qatar</option>
                              <option value="178">Reunion</option>
                              <option value="179">Romania</option>
                              <option value="180">Russia</option>
                              <option value="181">Rwanda</option>
                              <option value="182">Saint Helena</option>
                              <option value="183">Saint Kitts And Nevis</option>
                              <option value="184">Saint Lucia</option>
                              <option value="185">Saint Pierre and Miquelon</option>
                              <option value="186">Saint Vincent And The Grenadin</option>
                              <option value="187">Samoa</option>
                              <option value="188">San Marino</option>
                              <option value="189">Sao Tome and Principe</option>
                              <option value="190">Saudi Arabia</option>
                              <option value="191">Senegal</option>
                              <option value="192">Seychelles</option>
                              <option value="193">Sierra Leone</option>
                              <option value="194">Singapore</option>
                              <option value="195">Slovakia</option>
                              <option value="196">Slovenia</option>
                              <option value="197">Smaller Territories of the UK</option>
                              <option value="198">Solomon Islands</option>
                              <option value="199">Somalia</option>
                              <option value="200">South Africa</option>
                              <option value="201">South Georgia</option>
                              <option value="202">Spain</option>
                              <option value="203">Sri Lanka</option>
                              <option value="204">Sudan</option>
                              <option value="205">Suriname</option>
                              <option value="206">Svalbard And Jan Mayen Islands</option>
                              <option value="207">Swaziland</option>
                              <option value="208">Sweden</option>
                              <option value="209">Switzerland</option>
                              <option value="210">Syria</option>
                              <option value="211">Taiwan</option>
                              <option value="212">Tajikistan</option>
                              <option value="213">Tanzania</option>
                              <option value="214">Thailand</option>
                              <option value="215">Togo</option>
                              <option value="216">Tokelau</option>
                              <option value="217">Tonga</option>
                              <option value="218">Trinidad And Tobago</option>
                              <option value="219">Tunisia</option>
                              <option value="220">Turkey</option>
                              <option value="221">Turkmenistan</option>
                              <option value="222">Turks And Caicos Islands</option>
                              <option value="223">Tuvalu</option>
                              <option value="224">Uganda</option>
                              <option value="225">Ukraine</option>
                              <option value="226">United Arab Emirates</option>
                              <option value="227">United Kingdom</option>
                              <option value="228">United States</option>
                              <option value="229">United States Minor Outlying I</option>
                              <option value="230">Uruguay</option>
                              <option value="231">Uzbekistan</option>
                              <option value="232">Vanuatu</option>
                              <option value="233">Vatican City State (Holy See)</option>
                              <option value="234">Venezuela</option>
                              <option value="235">Vietnam</option>
                              <option value="236">Virgin Islands (British)</option>
                              <option value="237">Virgin Islands (US)</option>
                              <option value="238">Wallis And Futuna Islands</option>
                              <option value="239">Western Sahara</option>
                              <option value="240">Yemen</option>
                              <option value="241">Yugoslavia</option>
                              <option value="242">Zambia</option>
                              <option value="243">Zimbabwe</option>
                              </select>
                              <label for="Country">Country [required]</label>
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