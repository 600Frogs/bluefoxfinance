<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width initial-scale=1.0">

    
	<!-- Google Apps authentication -->
	<meta name="google-site-verification" content="RSIBQT-JJB4MtLEoLusGCUSrrKyjGFiA1nJ7j7msPQU" />
	<!-- Set viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- Critical CSS -->
	<link rel="icon" href="<?php echo $config['URL'] ?>media/favicon.png">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(count($_POST)>0) {
        print "<PRE>";
        print_r($_POST);
        print "</PRE>";
        }
        }
        ?>

		
	
