<!DOCTYPE html>
<html>
   
   <head>
      <title>Update Task</title>
      <meta lang="en">
      <link rel="stylesheet" href="{{ asset('css/updateTask.css') }}">
   </head>
   
   <body>
      <div>

         <div id="topText">
            <h2>Update Task Info</h2>
         </div>
            <form action = "/edit/<?php echo $task[0]->ID; ?>" method = "post" style="width:70%; margin-left:15%;display:flex;justify-content:center;">
               <div id="formContent">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <br>
                  <br>
                  <label>Title: </label>
                  <input type = 'text' name = 'Title' 
                     value = '<?php echo$task[0]->Title; ?>'/>
                  <br>
                  <br>
         
                  <label>Task Info: </label>
                     <input type = 'text' name = 'Body' 
                        value = '<?php echo$task[0]->Body; ?>'/>
                  <br>
                  <br>
   
                  <label>Date: </label>
                     <input type="date" name='Date'
                        value = '<?php echo$task[0]->Date; ?>' />
                  
                  <br>
                  <br>
                  <input type = 'submit' id="submitBtn"/>
               </div>
            </form>

      </div>
   </body>
</html>