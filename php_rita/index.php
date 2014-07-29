<?php
 
/*
 
This is the index for your site!
 
This PHP file will determine which other files are combined to make a page to serve to the browser.
Many PHP frameworks and CMSs direct almost all page requests through an 
index file like this. For example, Wordpress works this way. Even though it looks like you are vieing 
a different file at something like yoursite.com/about, this can be acheived in other ways 
(which we will look at later)
 
We've echoed out the top-level elements in this file, so that the other elements can be
self contained in their own files.
 
PHP lets us bring in other code by requiring or including other php files. This code will all run 
in the order that we include it (procedurally). We use require_once for this here.
 
'require_once' is similar to 'include_once', but has stricter errors if the file is not present.
You can also use them without the _once, but only if you will need them more than once, as
this can cause other issues if there are functions within the files.
 
TO DO:
 
Uncomment the lines below, one at a time. You will get an error, until you create the file
that is being required. So, create a file for each requirement, and fill it with the correct parts 
of your page in HTML. You do not need to use PHP in the files yet, they can contain straight HTML, 
but you must save them as .php.
 
Just do a very bare-bones html structure for your site for now.
 
Remember, you can include html and css in the head of the page.
 
*/
 
echo "<!DOCTYPE html>";
echo "<html>";
 
 require_once('includes/head.php');

 // if (isset($_GET["page"])) {


 //      $title_page = "includes/head_".$_GET["page"].".php";

 //      if (file_exists ($title_page)) {

 //          switch ($title_page) {
 //        case '1':
 //           echo "Tales of Poe";
 //           break;
 //        case '2':
 //            echo "News";
 //            break;
 //        case '3':
 //            echo "Story";
 //            break;
 //        case '4':
 //            echo "Contact";
 //            break;
 //        case '5':
 //            echo "Background Info";
 //            break;   
         
 //         default:
 //           echo "Tales of Poe";
 //           break;
 //       }
       
 //      }

 //      else {
 //        require_once ('includes/content_404.php');
 //      }
 //  }

 
echo "<body>";
 
// require_once('includes/header_home.php');    
 


// First, find out if there is even a value in $_GET['pages'] using the built in function 'is set', 
// or isset(). If it's not set, they must be at the homepage, so require_once the 
// includes/content-home.php . Remember that if you want the opposite of something, eg, not-equals 
// or not-true, you can use an exclamation mark, so in this case if(!isset()){} will mean 'if NOT set'

if (!isset ($_GET["page"])) {

	require_once('includes/home.php');
}


// If it IS set, go into another 'if' statement, which determines if there is a content
// file for this page in the 'includes' directory. If that file exists, require it once. 
// You will need to concatenate  the $_GET['page'] variable with some strings to correctly 
// point to the includes/content-??.php file.



  if (isset($_GET["page"])) {


  		$content_file = "includes/content_".$_GET["page"].".php";

  		if (file_exists ($content_file)) {

  			require_once ($content_file);
  		}

  		else {
  			require_once ('includes/content_404.php');
  		}
  }


// If it is not the home page, and there is no content-??.php file for it, require the 
// content-404.php file instead, and add an appropriate message.

// If you want to make other parts of your website page-specific, create more 'if' statements
// using the $_GET['page'] variable. For example, you may want to alter your head.php file
// so that it says a different title depending on the page. You could use a switch case there.

// If you want to add a unique header or nav for the home page, you can also create logic for 
// this purpose using the GET string, require_once, and if/else statements.
 
require_once('includes/footer.php');
 
echo "</body>";
echo "</html>";







?>