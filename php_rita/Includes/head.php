<?php
	$titles_text = "Tales of Poe";

	if (isset($_GET["page"])) {

      $title_page = $_GET["page"];

          switch ($title_page) {
        case 'tales':
           $titles_text = "Tales of Poe";
           break;
        case 'news':
            $titles_text ="News";
            break;
        case 'shop':
            $titles_text ="Shop";
            break;
        case 'story':
            $titles_text = "Plot";
            break;
        case 'trailer':
            $titles_text ="Trailer";
            break;
        case 'team':
            $titles_text ="Team";
            break;
        case 'contact':
            $titles_text = "Contact";
            break;
        case 'backgroundinfo':
            $titles_text = "Awards";
            break;
        case 'reviews':
            $titles_text = "Reviews";
            break;
        case 'interviews':
            $titles_text = "Interviews";
            break;
       }
  }
?>

<head>
	<title> <?php echo $titles_text; ?> </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>