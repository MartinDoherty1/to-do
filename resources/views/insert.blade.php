<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marty Doc - Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div >
  <h2 >Marty Doc - Task App</h2>
  <br>
  <form action = "/insert" method = "post"  style="width:70%; margin-left:15%;" action="/action_page.php">

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Task Title:</label>
    <input type="text"  placeholder="Task Title:" name="Title">

    <label>Task Info:</label>
    <input type="text"  placeholder="Task Info:" name="Body">
    <br>
    <br>

    <label>Date: </label>
    <input type="date" name="Date"/>
    <br>
    <br>
    <button type="submit"  value = "Add student" >Submit</button>
  </form>
</div>

</body>
</html>