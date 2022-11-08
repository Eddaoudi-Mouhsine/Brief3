<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<link rel="stylesheet" href="/app.css">





<nav id="nav">
    <a id="addStudent" href="{{url("Studentadd")}}/{{$data[0]->id}}">Add Student</a>
    <input type="text" id="searchstudent"  placeholder="Search">
</nav>
  
<div id="container">
    @foreach ($data as $row)
    
    <form action="{{url('update')}}/{{$row->id}}" method="post">
    @csrf
    <input id="modify" type="text" value="{{$row->name}}" name="name">
    <button id="modifyButton">Update</button>
    </form>
    @endforeach
</div>

<div id="container3">
    <table class="table table-sm table-dark"id="apprenant">
        <thead>
            <tr>
                <th scope="col"> first name</th>
                <th scope="col"> last name</th>
                <th scope="col">email</th>
                <th scope="col">Action</th>               
            </tr>

        </thead>
        <tbody id ="contentStudent">
            @foreach ($student as $entry)         
            <tr>
                <td scope="col">{{$entry->first_name}}</td>
                <td scope="col">{{$entry->last_name}}</td>
                <td scope="col">{{$entry->email}}</td>
                
                <td>
                    <a href="Edit/{{$entry->id}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="Delete/{{$entry->id}}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>

            <input id ="apprentice_Id" type="hidden" value="{{$entry->promotion_id}}"  name="promo_id">

            @endforeach   
        </tbody>
    </table>
    <div class="bg-primary">
    @foreach ($d as $item)
        @for($i = 0; $i <count($item); $i++)
        
        
                <span>
                 {{$item[$i]->name}}
                </span>
                <span>{{$item[$i]->pivot->apprentice_id }}</span>


        
    
        
        
        @endfor
    @endforeach
    </div>

    




    <script src="/search.js"></script>

</div>