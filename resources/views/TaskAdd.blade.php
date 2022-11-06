<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    <div id="container2">

        <form method="POST" action="{{url("Taskstore")}}">
            @csrf
            


    
            
            <label>task name:</label><input type="text"name="name">

            <label>starting date:</label><input  type="date"name="starting_date">

            <label>finishing date:</label><input  type="date" name="finishing_date">

            <label>description:</label><input type="text"name="description">


            

{{--so how would i basically insert the prom_id which happens to be a foreign key into the form ?--}}
{{--remember once u click the edit on promotion grab that id and assign  it to the value of the hidden input--}}
<button id="buttonstudentadd" type="submit">Add task</button>

<input type="hidden" value="{{$id}}"  name="id">

</form>



    </div>

</body>
</html>