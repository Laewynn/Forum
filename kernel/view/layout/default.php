<?php
require_once(DIR_VIEW."layout/header.php");
require_once(DIR_VIEW."layout/footer.php");
?>

<html>
<head>
 <meta charset="UTF-8">
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title> Forum </title>
<link href= <?php echo DIR_CSS."style.css";?> rel="stylesheet" media="all" type="text/css"/>
	<!-- <style type="text/css" media="all">@import 'DIR_CSS/new1.css';</style> -->
</head>
	<body>
	<div id="header">
		<?php echo $header;
		?>
	</div>

	<div id="content">
		<?php
			echo $content;
		?>
	</div>
	<div id="footer">
		<?php
			echo $footer;
		?>
	</div>
	</body>
</html>
