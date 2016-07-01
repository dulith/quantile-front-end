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
        <div class="col-md-6 col-md-offset-3 sign-in-registration-main-container">
          <div class="sign-in-registration-header-container">
           <h5>Consultant’s Sign in <br><small>Sign in to pitch project proposals or manage projects</small></h5>
          </div>
          <div class="sign-in-registration-middle-container">
                <form role="form">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Email address [required]" data-toggle="floatLabel" data-value="no-js">
                          <label for="first_name">Email address [required]</label>
                          <div class="error-msg"><!--Error message through JS--></div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Password [required]" data-toggle="floatLabel" data-value="no-js">
                            <label for="first_name">Password [required]</label>
                            <a href="" class="pull-right margin-top-10 margin-bottom-20">Forgot password</a>
                            <div class="error-msg"><!--Error message through JS--></div>
                        </div>
                    </div>                 
                  </div>               
                  <input type="submit" value="Sign in" class="btn btn-primary btn-block">
              </form>
                <div class="margin-top-10">Not an active Client?  <a href="">Start a Project</a></div>
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
 -->      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-hover-dropdown.js"></script>
      <script src="js/qantile-script.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!--    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>