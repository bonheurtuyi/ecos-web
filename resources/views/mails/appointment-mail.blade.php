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

    <p>Appointment request from {{ $validatedData['name'] }}</p>
    <p>Appointment Details:</p>
    <p><strong>Name: </strong>{{ $validatedData['name'] }}</p>
    <p><strong>Email: </strong>{{ $validatedData['email'] }}</p>
    <p><strong>Phone: </strong>{{ $validatedData['phone'] }}</p>
    <p><strong>Message: </strong>{!! $validatedData['message'] !!} </p>
</body>
</html>
