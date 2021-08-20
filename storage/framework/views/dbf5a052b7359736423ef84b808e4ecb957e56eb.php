<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<h1>Contact Message</h1>
	<?php if(isset($details['name'])): ?>
		<p><?php echo e($details['name']); ?></p>
	<?php endif; ?>
	<p>Subject : <?php echo e($details['subject']); ?></p>
	<p>Message : <?php echo e($details['message']); ?></p>
</body>
</html><?php /**PATH C:\wamp64\www\ebutify\ebutify_freelancer\resources\views/emails/ContactMail.blade.php ENDPATH**/ ?>