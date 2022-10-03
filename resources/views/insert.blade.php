<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/css/createNewTask.css') }}">
</head>
<body>

<div>
  <div id="topText">
    <h2>Create New Task</h2>
  </div>
  
  <br>

  <form action = "/insert" method = "post"  style="width:70%; margin-left:15%;" action="/action_page.php" id="form">

    <div id="formContent">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

      <label class="formText">Task Title:</label>
      <input type="text"  placeholder="Task Title:" name="Title" required>
      <br>
      <br>
  
      <label class="formText">Task Info:</label>
      <input type="text"  placeholder="Task Info:" name="Body" required>
      <br>
      <br>
  
      <label class="formText">Date: </label>
      <input type="date" name="Date"/>
      <br>
      <br>
      <button type="submit" id="submitBtn">Add Task</button>
    </div>


  </form>
</div>

</body>
</html>