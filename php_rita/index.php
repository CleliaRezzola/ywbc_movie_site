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
 
echo "<body>";
 
require_once('includes/header.php');    
 
require_once('includes/content.php');
 
require_once('includes/footer.php');
 
echo "</body>";
echo "</html>";







?>