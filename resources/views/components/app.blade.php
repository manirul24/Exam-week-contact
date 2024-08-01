<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam week 4</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
<hr>

    <a href="{{ route('index') }}"  class="flash attention">Home</a> 
    <a href="{{ route('contacts.create') }}"  class="flash attention">Create New Contact</a> 
    <hr>

   {{ $slot }} 
</body>
</html>