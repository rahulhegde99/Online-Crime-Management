<!-- Author: Rahul Hegde, Gunashree 
      
Index Pages, has sign up, user login and officer login features. 

-->
<!DOCTYPE html>
<html>
<head>
    
	<title>Crime Portal</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="clock.css">
    
</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="inactive"><a href="credits.php">Credits</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Officer Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Are you a victim of a crime?</h1>
 				<h3>Register Below&nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
 				<hr>
          <a href="registration.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Sign Up!</a>
 			</div>
 		</div>
 	</div>
 </div>


 <div id="MyClockDisplay"; style="color:#eeebeb;margin-left: 7.6em;margin-top: -5.5em;text-align: right;" class="clock" onload="showTime()"></div>
 <div style="color:#b8b7b7;position:absolute;margin-left: 48.6em;font-size: 20px;margin-top: -20em;text-align: left">
 <b><script> document.write(new Date().toDateString()); </script></b></div>


 <script type="text/javascript">  
   function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}
showTime();
</script>



 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>