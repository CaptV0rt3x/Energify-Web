<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="/api/bootstrap.css" rel="stylesheet" media="screen">
</head>
<style>
body {
  text-align: center;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px
}
.header {
    overflow: hidden;
    background-color: #4CAF50;
    width=100%;
    height=100px;
}
.footer {
    left: 0;
    bottom: 0;
    height: 80px;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
}
.rotate {
  -webkit-transform: rotate(320deg);
  -moz-transform: rotate(320deg);
  -o-transform: rotate(320deg);
  -ms-transform: rotate(320deg);
  transform: rotate(320deg);
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}
.topnav a.active {
  background-color: #FFA500;
  color: white;
  text-decoration: none;
}
p.one {
    display: inline;
}
.ourTeam-box{
	width: 100%;
    background-color: #FFFFFF;
}
.section1{
    padding: 30px 0px 0px 0px;
}
.section1 img{
    border:5px solid #333;
    padding:5px;
    border-radius:50%;
    height:170px;
    width: 170px;
}
.section2 h1{
    font-size:20px;
    color:#333;
    margin:0px;
    display: inline-block;
    padding: 10px 0px;
}
.section2 p{
    background-color: #333;
    display: inline-block;
    font-weight: bold;
    color:#fff;
    padding: 5px 15px;
    border-radius: 3px;
    margin-top: -20px;    
}
.section2 span{
    color:#979597;
}
.section2 label{
    background-color: #333;
    padding: 8px 10px 8px 10px;
    color:#fff;
    font-weight: normal;
    margin: 30px 0px 35px 0px;
    border-radius: 2px;
}
.section3 p{
    padding: 10px 15px 0px 15px;
    font-size:12px;
    color:#c3c9c9;
}
.section4{
    padding:10px 0px 50px 0px;
}
.section4 i{
    color:#fff;
    padding:3px;
    border-radius: 2px; 
    font-size: 12px;
    background-color: #333;
    cursor: pointer;
}
</style>
<body>
<div class=header>
    <h1><a href="/index.php"><img src="api/logo.png" alt=logo width = 400px height = auto /></a></h1>
</div>
<div class=topnav>
    <a href="/index.php">Home</a>
    <a href="/contact.php">Contact</a>
    <a href="/index.php">Search</a>
    <a class="active" href="/about.php">About</a>
</div>
<div>
    <h2><b>About Us</b></h2>
    <p align= center> We are the team behind this project.</p>
    <span> We have designed a hardware prototype and its web interface as part of our final year project submission. We are a group of UG students from </br> Sri Chandrasekharendra Saraswati Viswa Mahavidyalaya (<b>SCSVMV</b>), and are currently pursuing the same degree, Electronics & Communication Engineering (<b>ECE</b>).</span>
<h2><b>The Team</b></h2>
</div>
<div class="container section-ourTeam">
		<div class="col-md-3 col-sm-3 col-xs-10">
			<div class="row section-success ourTeam-box text-center">
				<div class="col-md-12 section1">
					<img src="/api/img1.png">
				</div>
				<div class="col-md-12 section2">
					<p>Vamsi Krishna</p><br>
					<h1>Hardware & Software</h1><br>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-10">
			<div class="row section-info ourTeam-box text-center">
				<div class="col-md-12 section1">
					<img src="/api/shannu.jpg" class="rotate">
					</div>
				<div class="col-md-12 section2">
					<p>Shanmukhanatha Reddy</p><br>
					<h1>Website Developer</h1><br>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-10">
			<div class="row section-test ourTeam-box text-center">
				<div class="col-md-12 section1">
					<img src="/api/img3.png">
				</div>
				<div class="col-md-12 section2">
					<p>Nikhil Bhargav</p><br>
					<h1>Hardware Support</h1><br>
				</div>	
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-10">
			<div class="row section-danger ourTeam-box text-center">
				<div class="col-md-12 section1">
					<img src="/api/img4.png">
				</div>
				<div class="col-md-12 section2">
					<p>Dr. S. Vijayaraghavan</p><br>
					<h1>Asst. Professor & Guide</h1>
				</div>
			</div>
		</div>
</div>
<div class="footer">
  <p>Created with <span style="font-size:150%;color:red;">&hearts;</span> by Energify Team @ SCSVMV</p>
  <p>&copy; 2018 Energify. All Rights Reserved.</p>
</div>
</body>
</html>
