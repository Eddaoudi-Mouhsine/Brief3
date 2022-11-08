<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<link rel="stylesheet" href="/app.css">




<div id="container3">

<table class="table table-sm table-dark"id="apprenant">
    <thead>
        <tr>
            <th scope="col"> first name</th>
            <th scope="col"> last name</th>
            <th scope="col">Action</th>               
        </tr>

    </thead>
    <tbody id ="contentStudent">
        @foreach ($data as $entry) 

        <tr>
            <td scope="col">{{$entry->first_name}}</td>
            <td scope="col">{{$entry->last_name}}</td>
            
            <td>
                <a href="{{$briefId}}/Attach/{{$entry->id}}"><button class="btn btn-primary">Attach</button></a>
                <a href="{{$briefId}}/Detach/{{$entry->id}}"><button class="btn btn-danger">Detach</button></a>
            </td>
        </tr>
        


        @endforeach  
         
    </tbody>
    

</table>
</div>
<a href="{{$briefId}}/AttachClass/"><button class="btn btn-info">Attach to class</button></a>
