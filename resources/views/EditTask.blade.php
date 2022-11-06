<link rel="stylesheet" href="/app.css">

@foreach ($data as $row)
    
<form action="{{url('EditBrief/update')}}/{{$row->id}}" method="post">
    @csrf
    <label>task name:</label>
    <input id="studentEditInput" type="text" value="{{$row->name}}" name="name">
    <label>starting date:</label>
    <input id="studentEditInput" type="date" value="{{$row->starting_date}}" name="starting_date">
    <label>finishing date:</label>
    <input id="studentEditInput" type="date" value="{{$row->finishing_date}}" name="finishing_date">
    <label>description:</label>
    <input id="studentEditInput" type="text" value="{{$row->description}}" name="description">



    <button id="studendeditbutton">Update Task</button>
</form>
@endforeach