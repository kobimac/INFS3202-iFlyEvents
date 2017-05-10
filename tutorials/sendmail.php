	<?php
		$email = $_REQUEST['mailer'];
		$sender = $_REQUEST['sender'];
		$message = $_REQUEST['message'];	
		mail ("geoff.popple@gmail.com","Feeedback Form Results",$message, "from $sender at $email" );
		header ("Location: https://infs3202-o2g6b.uqcloud.net");
	?>