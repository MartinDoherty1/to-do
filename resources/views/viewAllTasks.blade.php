
<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div >
  <h2 >Tasks</h2>
           
  <table >
    <thead>
      <tr>
        <th>Title</th>
        <th>Info</th>
        <th><a href="/insert">Create New Task</a></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tasks as $task)
      <tr>
      <td>{{ $task->Title }}</td>
      <td>{{ $task->Body }}</td>
      <td> <a href='edit/{{ $task->ID }}'> Edit </a> </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
</html>