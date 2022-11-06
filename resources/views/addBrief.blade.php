<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brief adding Page</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    <div id="container">

    <form action="" method="POST">
        @csrf
        <input id="typing" type="text" name="name" placeholder="brief name ">
        <input id="typing" type="date" name="creation_date" >
        <input id="typing" type="date" name="recupration_date">


        <input id="click" type="submit" name="submit">
    </form>
    
</body>
</html>