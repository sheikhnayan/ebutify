<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<h1>Contact Message</h1>
	<p>Subject : {{$details['subject']}}</p>
	@if(isset($details['name']))
	<p>Name : {{$details['name']}}</p>
	@endif
	@if(isset($details['email']))
	<p>Email : {{$details['email']}}</p>
	@endif
	@if(isset($details['phone']))
	<p>Phone : {{$details['phone']}}</p>
	@endif
	<p>Message : {{$details['message']}}</p>
</body>
</html>