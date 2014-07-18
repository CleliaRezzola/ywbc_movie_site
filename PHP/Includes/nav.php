<?php


$pages = array( );

// Define pages as a 2s array
// Slug => page name
// Slug must be lower case, no spaces or punctuation.

$pages ['homepage'] = "Home Page";

$pages ['talsofpoe'] = "Tales of Poe";

$pages ['news'] = "News";

$pages ['story'] = "Story";

$pages ['contact'] = "Contact";

$pages ['backgroundinfo'] = "Background Info";


 
$footerPages = array('Legal', 'Privacy');
 
 
 
function createNavFromArray($pages){
 
  // Start creating a string of html for our nav:
  $nav = "\n<nav><ul>";
 
  // Create our LIs:
  foreach ($pages as $slug => $pageName){

  	$class = "inactive";

  	if($_GET[$page] == $slug) {

  		$class = "active";
  	}

    $nav .= "\n\t<li class='".$class."'>
    			<a href='index.php?page=".$slug."'>"
      			.$pageName."</a></li>";
  }
 
  // Finish creating the string of html for our nav:
  $nav .= "\n</ul></nav>";
 
  return $nav;
}

$nav=createNavFromArray($pages);
echo $nav;
 
?>