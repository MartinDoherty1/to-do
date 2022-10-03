
<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('/css/viewAllTasks.css') }}">

</head>
<body>
<div>
  <div id="topHeader">
    <h2 id="mainHeader">Tasks</h2>
  </div>
  
  <div id="createNewTaskText">
    <h3><i class="bi bi-list-task"></i><a href="/insert">Create New Task</a></h3>
  </div>
  
           
  <div id="tableContainer">
    <table id="tableTag">
      <thead>
        <tr>
          <th colspan="2">Title</th>
          <th colspan="2">Info</th>
          <th colspan="2">Date</th>
          <th colspan="2">Completed</th>
          <th colspan="2"></th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody id="tableBody">
      @foreach ($tasks as $task)
        <tr class="tableRow">
        <td colspan="2">{{ $task->Title }}</td>
        <td colspan="2">{{ $task->Body }}</td>
        <td colspan="2">{{$task->Date}}</td>
        <td colspan="2">
          <?php if($task->Finished == 1){echo '<input type="checkbox" onclick="return false;" Checked>';} else {echo '<input type="checkbox" onclick="return false;">';} ?>
        </td>
        <td colspan="2"> <a href='edit/{{ $task->ID }}'> Edit </a> </td>
        <td colspan="2"> <a href='delete/{{ $task->ID }}'> Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

  <div id="footer">
    <div>
      <h4 id="footerText">Created By Marty Using Laravel</h4>
    </div>
    <div id="footerIcons">
      <a href="https://github.com/MartinDoherty1"><i class="bi bi-github icons"></i></a>
      
      <a href="https://www.linkedin.com/in/martin-doherty01/"><i class="bi bi-linkedin icons"></i></a>
      
    </div>
    
</div>

</div>


</body>
</html>