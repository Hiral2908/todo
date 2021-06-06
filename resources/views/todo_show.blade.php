

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:#3cb371;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style> 
<a href = "todo_create"> Add record </a> <br/> <br/>
{{session('msg')}}
<br/>
    <form>
    <table id="customers">
    <tr>
    <td>Id</td>
    <td>first_name</td>
    <td>last_name</td>
    <td>email</td>
    <td>password</td>
    <td>gender</td>
    <td>employment</td>
    <td>is_active</td>
    <td>Created At</td>
    <td>Action</td>
    </tr>

    @foreach($todoArr as $todo)
    <tr>
    <td>{{$todo->id}}</td>
    <td>{{$todo->first_name}}</td>
    <td>{{$todo->last_name}}</td>
    <td>{{$todo->email}}</td>
    <td>{{$todo->password}}</td>
    <td>{{$todo->gender}}</td>
    <td>{{$todo->employment}}</td>
    <td>{{$todo->is_active}}</td>
    <td>{{$todo->created_at}}</td>
    <td>
          <a href="todo_delete/{{$todo->id}}">Delete</a>
          <a href="todo_edit/{{$todo->id}}">Edit</a>
    </td>
    </tr>
    @endforeach
  