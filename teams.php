<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>team Details</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<?php
//connect to db
$conn = new PDO('mysql:host=ca-cdbr-azure-east-a.cloudapp.net;dbname=comp1006_2017','b4740fc08a1adb','8631fa50');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if($conn){
echo 'connected';

}
else {
echo 'evad';
}


// set up query
$sql = "SELECT city,nickname,division FROM teams ORDER BY city";
//run query and store results
$cmd = $conn->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchAll();
//start table and heading
echo '<table class="table table-striped table-hover"><tr><th>City</th><th>Nickname</th><th>Division</th></tr>';
// loop through data
foreach($teams as $team){
// print each album as a new row
 echo '<tr><td>' . $team['city'] . '</td>
<td>' . $team['nickname'] . '</td>
<td>' . $team['division'] . '</td></tr>';
}
//end table
echo '</table>';
//disconnect
$conn = null;
?>
<!-- Latest   jQuery -->
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
