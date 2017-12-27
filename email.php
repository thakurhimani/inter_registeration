<?php

	include("Mail.php");

	$from = "himanithakur815@gmail.com";
	$to = "anilthakur.thakur874@gmail.com";
	$subject = "Testing SMTP2GO";
	$body = "Hello testing";

	$host = "mail.smtp2go.com";
	$port = "2525";
	$username = "himanithakur815@gmail.com";
	$password = "P1gRmRwUcgd3";

	$headers = array ('From' => $from,
		'To' => $to,
		'Subject' => $subject);
	$smtp = Mail::factory('smtp',
		array('host' => $host,
			'port' => $port,
			'auth' => true,
			'username' => $username,
			'password' => $password));

		$mail = $smtp->send($to, $headers, $body);

		if(PEAR::isError($mail)) {
			echo "Mail not send";
		}
		else {
			echo 'sent----------';
		}

?>