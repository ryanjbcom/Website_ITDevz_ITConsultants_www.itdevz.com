<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'helpme@itdevz.com';
$subject = 'I.T. Devz contact message '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly. Don't forget, you can reach us on Facebook/Twitter!');
		window.location = 'http://www.itdevz.com';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Sorry, your message failed. Please, send an email to helpme@itdevz.com, Don't forget, you can reach us on Facebook/Twitter!');
		window.location = '/contact.htm';
	</script>
<?php
}
?>
