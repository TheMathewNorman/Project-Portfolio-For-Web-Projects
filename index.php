<html>
<head><title>Home - Mat's MMS Projects</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include "php/project-discovery.php";
?>

<?php
	/*
	// LOAD IN PROJECT DATA
	$projectData = array();

	$dirs = array_filter(glob('projects/*'), 'is_dir');
	foreach ($dirs as $dir)	{
		$descFile = fopen($dir . "/desc.txt", "r") or die("There is no description file for " . $dir);

		$project = array();
		array_push($project, $dir);
		array_push($project, fread($descFile, filesize($dir."/desc.txt")));
		array_push($projectData, $project);
	}
	*/
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
		<h1>Mat's MMS<br>Projects</h1>
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
	<div id="footer-content">Each project contains code written by <a href="http://matnorman.com/">Mathew Norman</a> for <a href="https://melbournemontessori.vic.edu.au/">Melbourne Montessori School</a></div>
</div>
</body>
</html>