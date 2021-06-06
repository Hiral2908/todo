
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
<a href="todo_show"> Back </a> <br/> <br/>
    <form method="post" action="{{route('todo.update',[$todoArr->id])}}">
    @csrf
    <table id="customers">
    <tr>
        <td>First Name</td>
        <td><input type="textname" name="first_name"  placeholder="First Name" value="{{$todoArr->first_name}}"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="textname" name="last_name"  placeholder="Last Name" value="{{$todoArr->last_name}}"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" id="email" name="email"  placeholder="hiral@example.com" value="{{$todoArr->email}}"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" id="password" name="password"  placeholder="Password"  value="{{$todoArr->password}}"></td>
    </tr>
    <!-- <tr>
        <td>Confirm Password</td>
        <td><input type="password" id="confirm_password" name="confirm_password"  placeholder="Password"  value="{{$todoArr->confirm_password}}"></td>
    </tr> -->
    <tr>
        <td>Gender</td>
        <td>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        </td>
    </tr>
    <tr>
        <td>Employment</td>
        <td><input type="textname" name="employment"  placeholder="Employment Type" value="{{$todoArr->employment}}"/></td>
    </tr>
    <tr>
        <td>Is_Active</td>
        <td><input type="checkbox" name="is_active" value="Is_Active"  value="{{$todoArr->is_active}}"/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit"/></td>
    </tr>
    </table>
    </form>
    
 