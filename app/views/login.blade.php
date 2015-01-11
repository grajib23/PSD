
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<html class="hungry">
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">

      <!-- Viewport Metatag -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <!-- Title -->
      <title>PWD.com</title>
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
      {{ HTML::style('assets/css/bootstrap.min.css') }}
      {{ HTML::style('/assets/css/stylesheet.css') }}
      {{ HTML::style('/assets/css/style.css')}}
      {{ HTML::style('/assets/css/login.css')}}
      {{ HTML::style('/assets/css/mws-theme.css')}}
      {{ HTML::style('/assets/css/colorpicker.css')}}
      {{ HTML::style('/assets/css/wizard.css')}}
      {{ HTML::style('/assets/css/mws-style.css')}}
      {{ HTML::style('/assets/css/icol16.css')}}
      {{ HTML::style('/assets/css/icol32.css')}}
      {{ HTML::style('/assets/css/demo.css')}}
      {{ HTML::style('/assets/css/jquery.ui.all.css')}}
      {{ HTML::style('/assets/css/jquery-ui.custom.css')}}
      {{ HTML::style('/assets/css/mws-theme.css')}}
      {{ HTML::style('/assets/css/themer.css')}}
      


      <!-- END CORE CSS FRAMEWORK -->
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class="">
      <!-- Container -->
        <div id="mws-login-wrapper">
         <div id="mws-login">
            <h1>Login</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/dashboard" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li>
                                <input id="remember" type="checkbox"> 
                                <label for="remember">Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <a href=""><input type="submit" value="Login" class="btn btn-success mws-login-button"></a>
                    </div>
                </form>
            </div>
         </div>
        </div>
      <!-- Container -->

      <!-- jQuery-UI Dependent Scripts -->
      {{ HTML::script('/assets/js/jquery-ui-effects.min.js') }}
      <!-- Plugin Scripts -->
      {{ HTML::script('/assets/js/jquery.validate-min.js') }}
      <!-- Login Script -->
      {{ HTML::script('/assets/js/login.js') }}
      <!-- JavaScript Plugins -->
      {{ HTML::script('/assets/js/jquery-1.8.3.min.js') }}
      {{ HTML::script('/assets/js/jquery.mousewheel.min.js') }}
      {{ HTML::script('/assets/js/jquery.placeholder.min.js') }}
      {{ HTML::script('/assets/js/fileinput.js') }}
      <!-- jQuery-UI Dependent Scripts -->
      {{ HTML::script('/assets/js/jquery-ui-1.9.2.min.js') }}
      {{ HTML::script('/assets/js/jquery-ui.custom.min.js') }}
      {{ HTML::script('/assets/js/jquery.ui.touch-punch.js') }}
      <!-- Plugin Scripts -->
      {{ HTML::script('/assets/js/colorpicker-min.js') }}
      {{ HTML::script('/assets/js/jquery.validate-min.js') }}
      {{ HTML::script('/assets/js/jquery.dataTables.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.tooltip.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.pie.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.stack.min.js') }}
      {{ HTML::script('/assets/js/jquery.flot.resize.min.js') }}
      {{ HTML::script('/assets/js/') }}
      <!-- Wizard Plugin -->
      {{ HTML::script('/assets/js/wizard.min.js') }}
      {{ HTML::script('/assets/js/jquery.form.min.js') }}
      <!-- Core Script -->
      {{ HTML::script('/assets/js/bootstrap.min.js') }}
      {{ HTML::script('/assets/js/mws.js') }}
      <!-- Themer Script (Remove if not needed) -->
      {{ HTML::script('/assets/js/themer.js') }}
      {{ HTML::script('/assets/js/demo.wizard.js') }}
      
   </body>
</html>
