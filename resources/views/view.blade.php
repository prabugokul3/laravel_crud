<!DOCTYPE html>
<html>

<body>
<div class="container">


    <table border = "1">
      <tr>
        <th>ID</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>address</th>
        <th>options</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->firstname }}</td>
      <td>{{ $user->lastname }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->address }}</td>
      <td>
        <a href="{{'edit'}}/{{$user->id}}" class="btn btn-primary">Edit</a>
        <a href="{{'delete'}}/{{$user->id}}" class="btn btn-danger">Delete</a>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
