<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Overlock:400,700,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<title>Make It Count!</title> 

<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE); 
?>

</head>
<body><?php
$age = $_GET['age'];
if ( $age < 1 ) {
	$age = 1;
} else {
$age;
}
settype($age, "integer");

$json = json_decode( stripslashes( file_get_contents( 'data.json' ) ), true );

foreach ( $json['data'] as $data ) {
	if ($data['age'] == $age) {
	$exp = $data['exp'];
	}
	
}

echo $exp;

$days_number = date('z') + 1; 

$days = number_format( round( ( ( $exp * 365 ) - $days_number ), -1 ) );
$days_alive = number_format( round( ( ( $age * 365 ) + $daysNumber ), -2 ) );


?>
<div id='result'>
<p class = 'number' ><?php echo $days;?> Days! </p> <br />
<br />
<p>Stop for a second.  Think about it.</p> <br />
<p> For the average human your age, that's all you have left.</p> <br />
<p>You've been alive about <?php echo $days_alive; ?> days, but you only have <?php echo $days;?> days left to go.</p>  <br />
<p>When you really think about it, <?php echo $days;?> days isn't very much time. Don't waste it.</p>

</div> <!--end result div -->

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
