
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="todo_submit">
    @csrf
    <table id="customers">
    <tr>
        <td>First Name</td>
        <td><input type="textname" name="first_name"  placeholder="First Name"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="textname" name="last_name" placeholder="Last Name"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" id="email" name="email"  placeholder="hiral@example.com"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password"  name="password"  placeholder="Password" ></td>
    </tr>
    <tr>
        <td>Confirm Password</td>
        <td> <input type="password" name="password_confirmation" placeholder="Confirm Password"></td>
    </tr>
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
        <td><input type="textname" name="employment"  placeholder="Employment Type"/></td>
    </tr>
    <tr>
        <td>Is_Active</td>
        <td><input type="checkbox" name="is_active" value="Is_Active" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit"/></td>
    </tr>
    </table>
    </form>
    
 