<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
<p>Message from <strong>"{{ $validatedData['name'] }}"</strong> Ecos contact form</p>
<p>Message Details:</p>
<p><strong>Name: </strong>{{ $validatedData['name'] }}</p>
<p><strong>Email: </strong>{{ $validatedData['email'] }}</p>
<p><strong>Subject: </strong>{{ $validatedData['subject'] }}</p>
<p><strong>Phone: </strong>{{ $validatedData['phone'] }}</p>
<p><strong>Message: </strong>{!! $validatedData['message'] !!} </p>
</body>
</html>
