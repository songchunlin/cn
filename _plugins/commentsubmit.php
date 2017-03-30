<?php

$DATE_FORMAT = "Y-m-d H:i";
$EMAIL_ADDRESS = "blogger@example.com";

$SUBJECT = "Blog comment received";

$COMMENT_RECEIVED = "comment_received.html";

$post_id = $_POST["post_id"];
unset($_POST["post_id"]);
$msg = "post_id: $post_id\n";
$msg .= "date: " . date($DATE_FORMAT) . "\n";

foreach ($_POST as $key => $value) {
	if (strstr($value, "\n") != "") {
		$value = str_replace("\n", "\n  ", $value);
	}
	$value = "'" . str_replace("'", "''", $value) . "'";
	$msg .= "$key: $value\n";
}

if (mail($EMAIL_ADDRESS, $SUBJECT, $msg, "From: $EMAIL_ADDRESS"))
{
	include $COMMENT_RECEIVED;
}
else
{
	echo "There was a problem sending the comment. Please contact the site's owner.";
}
