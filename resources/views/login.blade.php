

@include('popup.userAccess')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
    
  <title>Login</title>

{!!Html::style('public/css/bootstrap.min.css')!!}
{!!Html::style('public/css/bootstrap-theme.css')!!}
{!!Html::style('public/css/elegant-icons-style.css')!!}
{!!Html::style('public/css/font-awesome.css')!!}
{!!Html::style('public/css/style.css')!!}
{!!Html::style('public/css/style-responsive.css')!!}
 
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="{{ route('login') }}" method="Post">
      {!! csrf_field() !!}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
		<label class="checkbox">
           
            <span class="pull-right">Only For Internal User</span>
        </label>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
       </div>
	  <div class="panel-heading text-center">
	    <h3 class="panel-title  btn btn-default">For UserName And Password : <span class="btn btn-default" id="show-uaccess">Click Here
	  </span></h3>
	
	  </div>
    </form>
    
  </div>
{!!Html::script('public/js/jquery.min.js')!!}
{!!Html::script('public/js/bootstrap.min.js')!!}
<script type="text/javascript">
  	//======================
  	 $('#show-uaccess').on('click',function(e)
    {
      $('#userAccess-show').modal('show');
    })
  </script>
</body>

</html>
