<html>
<head><title>Home - Mathew's Projects</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include "php/project-discovery.php";
?>

<div id="project-quicklinks">
	<?php
		echo '| ';
		foreach ($projects as $projectName=>$projectDescription)	{
			echo '<a href="'.$projectLocation.$projectName.'">'.str_replace('-',' ',$projectName).'</a> | ';
		}
	?>
</div>

<div id="heading">
	<div id="heading-content">
		<h1>Mathew's Projects</h1>
	</div>
</div>

<br />

<div class="projects-wrapper">

<?php
	foreach ($projects as $projectName=>$projectDescription)	{		
?>
	<div class="project" id="<?php echo $projectName; ?>">
		<div class="project-title"><?php echo '<a href="/'.$projectLocation.$projectName.'">'.str_replace('-',' ',$projectName).'</a>'; ?></div>
		<div class="project-desc">
			<?php echo $projectDescription; ?>
		</div>
	</div> 
<?php
	}
?>

</div>
<div id="footer">
	<div id="footer-content">This project display page was written by <a href="http://matnorman.com/">Mathew Norman</a>.</div>
</div>
</body>
</html>