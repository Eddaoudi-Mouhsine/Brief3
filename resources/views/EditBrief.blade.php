<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<link rel="stylesheet" href="/app.css">





<nav id="nav">
</nav>
  
    @foreach ($brief as $row)
    <a  href="/addTask/{{$row->id}}"><button class="btn btn-primary">Add Task</button></a>

    <form action="{{url('updateBrief')}}/{{$row->id}}" method="post">

    @csrf
    <input id="modify" type="text" value="{{$row->name}}" name="name">
    <input  type="date" value="{{$row->creation_date}}" name="creation_date">
    <input   type="date" value="{{$row->recuperation_date}}" name="recuperation_date">
    <button >Update</button>
    </form>
    @endforeach
    <table class="table table-sm table-dark"id="apprenant">
        <thead>
            <tr>
                <th scope="col">  name</th>
                <th scope="col"> starting date</th>
                <th scope="col">finishing date</th>
                <th scope="col">description</th>
             
            </tr>

        </thead>
        <tbody id ="contentStudent">
            @foreach ($briefDATA as $entry)         
            <tr>
                <td scope="col">{{$entry->name}}</td>
                <td scope="col">{{$entry->starting_date}}</td>
                <td scope="col">{{$entry->finishing_date}}</td>
                <td scope="col">{{$entry->description}}</td>

                
                <td>
                    <a href="TaskEdit/{{$entry->id}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="TaskDelete/{{$entry->id}}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>

            <input id ="apprentice_Id" type="hidden" value="{{$entry->promotion_id}}"  name="promo_id">

            @endforeach   
        </tbody>
    </table>