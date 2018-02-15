<?php
    $projectLocation = "./projects/";

    $scanDirResults = scandir($projectLocation);

    $projects = array();
    foreach ($scanDirResults as $scanDirResult) {
        if (!strpos($scanDirResult, '.')) {
            $projects[$scanDirResult] = fread(fopen($projectLocation.'/'.$scanDirResult . "/desc.txt", "r"), filesize($projectLocation.'/'.$scanDirResult . "/desc.txt"));
        }
    }

    unset($projects['.']);
    unset($projects['..']);
?>