<?php
// Connect to Database
include('db_connect.php'); ?>
<html>
<head>
<title>Energify</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="bootstrap.css" rel="stylesheet" media="screen">
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
table{
    table-layout:fixed;
    width: 100%;
	margin-top:100px;
    margin-left: auto;
    margin-right: auto;
}
#tr,#th{
border: 1px solid #ddd;
    padding: 8px;
	}
.datatable {
    display:block;
    margin-top:0px !important;
    float:center;
}
.dataTable tr td {
    min-width: 150px;
    height:20px;
}
.dataTables_wrapper {
  margin: 0 auto;
  width: 50%;
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
  text-decoration: none;
  color: black;
}

.topnav a.active {
  background-color: #FFA500;
  text-decoration: none;
  color: white;
}
</style>
</head>
<body>
<div class=header>
    <h1><a href="../index.php>"><img src="logo.png" alt=logo width = 400px height = auto /></a></h1>
</div>
<div class=topnav>
    <a href="../index.php">Home</a>
    <a href="../contact.php">Contact</a>
    <a class="active" href="../index.php">Search</a>
    <a href="../about.php">About</a>
</div>
<?php
// Check if we got the field from the user
if (isset($_POST["service_id"])) {
    $service_id = $_POST['service_id'];
$result = mysqli_query($conn, "SELECT id FROM energy WHERE id = $service_id") or die(mysqli_error());
if (mysqli_num_rows($result) > 0) {
    
 // Fire SQL query to get all data from energy
$result_1 = mysqli_query($conn, "SELECT *FROM energy WHERE id = $service_id ORDER BY date DESC, time DESC") or die(mysqli_error()); 
?>
<table class="table">
    <thead>
    <tr>
    <th>Id</th>
    <th>Date</th>
    <th>Time</th>
	<th>Units</th>
	<th>Amount</th>
  </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($result_1)): ?>
	<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['time']; ?></td>
			<td><?php echo $row['units']; ?></td>
			<td><?php echo $row['rupees']; ?></td>
			
		</tr>
	<?php endwhile; ?>
</tbody>
</table>
<link rel="stylesheet" href="bootstrap.css" />
<script src="jquery.js"></script>
<script src="jquery.dataTables.js"></script>
<script src="dataTables.bootstrap.js"></script>
<script>
    $(".table").DataTable({"dom": 'lrtip'});
</script>
<?php
} else { 
   echo "<script>";
   echo "alert('Error: Service ID not Found!');";
   echo "</script>";
   echo "<script>";
   echo "window.location.href='../';";
   echo "</script>";
}
} else { 
   echo "<script>";
   echo "alert('Error: Service ID not Found!');";
   echo "</script>";
   echo "<script>";
   echo "window.location.href='../';";
   echo "</script>";
}
?>
<div class=footer>
  <p>Created with <span style="font-size:150%;color:red;">&hearts;</span> by Energify Team @ SCSVMV</p>
  <p>&copy; 2018 Energify. All Rights Reserved.</p>
</div>
</body>
</html>