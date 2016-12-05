<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Overlock:400,700,900' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Make It Count!</title> 

<?php 
include_once 'connection.php';
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE); 
?>

</head>
<body>


<?php
/*
$dataselect = $_GET['age'];
$dataselect1 = mysql_real_escape_string($dataselect);
if ($dataselect < 1) {
	$dataselect1 = 1;
	
} 
else $dataselect1;

$dataselect2 = "SELECT `exp` FROM `age` WHERE `age` = '$dataselect1'";
$result = mysql_query($dataselect2) or die(mysql_error());



$results = mysql_fetch_array($result) or die(mysql_error());
$daysNumber = date('z') + 1; 
$years = $results['exp'];
$days = number_format(round((($years*365)-$daysNumber),-1));
$daysmillions = number_format(($years*365-$daysNumber) * 100);
$daysalive = number_format(round((($dataselect*365)+$daysNumber),-2));
*/

$results2 = "SELECT * FROM `age`";
$results2 = mysql_query($results2) or die(mysql_error());
$json = array();
while($row=mysql_fetch_array($results2)) 
{ 
$year=$row[0]; 
$age=$row[1]; 
$exp = $row[2];

$json[] = array('year'=> $year, 'age'=> $age, 'exp' => $exp);

} 

$results2 = json_encode($json);
print_r($results2);

?>

<!--

<div id='result'>
<p class = 'number' ><?php echo $days;?> Days! </p> <br />
<br />
<p>Stop for a second.  Think about it.</p> <br />
<p> For the average human your age, that's all you have left.</p> <br />
<p>You've been alive about <?php echo $daysalive; ?> days, but you only have <?php echo $days;?> days left to go.</p>  <br />
<p>When you really think about it, <?php echo $days;?> days isn't very much time. Don't waste it.</p>

</div> <!--end result div -->

<!--
<div id='footer'>
<p>The calculation is based on life expectancy data from the <a href="http://www.census.gov/compendia/statab/cats/births_deaths_marriages_divorces/life_expectancy.html">US Census Bureau.</a></p>
<p><br />
 This website is inspired by Trent Walton's blog post <a href ="http://trentwalton.com/2011/01/26/you-are-what-you-eat/">You Are What You Eat</a>.
</p><br />
<p>
Created by <a href ='http://kmarsden.com'>Kevin Marsden</a><br /></p>
</div><!-- end footer div -->

</body>
</html>
