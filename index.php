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
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE); 
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12018723-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head> 
<body>
	<div id = "content">

		<div id = "form">

			<form name=lookup method="get" action="query.php">

				<div class="age">	
					<input type="number" name="age" min = "0" max = "100" required placeholder = "How Old Are You?" > <br />
				</div> <!-- end age div --> 

				<div class="submitform">
					<input type="submit" value="Submit">
				</div><!--end submitform div -->

			</form>

		</div> <!--end form div -->

	</div> <!--end content div -->
</body>
</html>