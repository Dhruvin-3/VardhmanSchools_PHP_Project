<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Vardhman Schools</title>
       <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="logincss/style.css">
	  <style type="text/css">
	  h1
		  {
			  text-align: center;
			  font-size: 30px;
			  color: deepskyblue;
		  }
	  </style>
  </head>
  <body>
    <div class="cont">
  <div class="demo">
    <div class="login">
		<h1>ADMIN PANEL</h1>
      <div class="login__check"></div>
      <div class="login__form">
	  <form action="login_check.php" method="post">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="unm" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="pwd" placeholder="Password"/>
        </div>
        <input type="submit" name="login" value="Log In" class="login__submit"/>
	  </form>
      </div>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="loginjs/index.js"></script>
  </body>
</html>