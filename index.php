<html>
<head>
<title>Energify</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="/api/bootstrap.css" rel="stylesheet" media="screen">
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
    position: fixed;
    left: 0;
    bottom: 0;
    height: 80px;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
}

#search {
  width: 357px;
  margin: 4px auto;
  text-align: center;
  display: inline-block;
  margin-top:100px;
}

#id {
  width: 297px;
  padding: 15px 0 15px 20px;
  font-size: 16px;
  font-family: Montserrat, sans-serif;
  height: 30px;
  margin-right: 0;
  color: black;
  outline: none;
  background: #ffffff;
  float: left;
  box-sizing: border-box;
  border: 2px solid #333;
  transition: all 0.15s;
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
#submit{
    display: block;
    float: left;
    height: 34px;
}

label {
color: #333;
font-family: Verdana, Geneva, sans-serif;
font-weight: bold;
font size: 22px;
display: block;
width: 150px;
float: left;
}
label:after { content: ": " }
</style>
</head>
<body>
<div class=header>
    <h1><a href="/index.php>"><img src="api/logo.png" alt=logo width = 400px height = auto /></a></h1>
</div>
<div class=topnav>
    <a class="active" href="/index.php">Home</a>
    <a href="/contact.php">Contact</a>
    <a href="/index.php">Search</a>
    <a href="/about.php">About</a>
</div>
<li id="search">
  <form action="api/search.php" method="post">
    <label for="id">Service Number</label>
    <input type="text" name="service_id" id="id" required/><br/>
    <input type="submit" id="submit" value="Submit" /><br/>
  </form>
</li>
<div class="footer">
  <p>Created with <span style="font-size:150%;color:red;">&hearts;</span> by Energify Team @ SCSVMV</p>
  <p>&copy; 2018 Energify. All Rights Reserved.</p>
</div>
</body>
</html>