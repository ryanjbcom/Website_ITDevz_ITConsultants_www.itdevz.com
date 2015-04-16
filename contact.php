<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'helpme@ryanjb.com';
$subject = 'I.T. Consultants contact message '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly. Dont forget, you can reach us on Facebook/Twitter!');
		window.location = 'http://it.ryanjb.com';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Sorry, your message failed. Please, send an email to helpme@ryanjb.com, Dont forget, you can reach us on Facebook/Twitter!');
		window.location = '/contact.htm';
	</script>
<?php
}
?>
