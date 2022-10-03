<!DOCTYPE html>
<html>
   
   <head>
      <title>Marty Doc Tasks</title>
      <meta lang="en">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
   
   <body>
      <form action = "/edit/<?php echo $task[0]->ID; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Title</td>
               <td>
                  <input type = 'text' name = 'Title' 
                     value = '<?php echo$task[0]->Title; ?>'/>
               </td>
            </tr>

            <tr>
                <td>Task Info</td>
                <td>
                   <input type = 'text' name = 'Body' 
                      value = '<?php echo$task[0]->Body; ?>'/>
                </td>
            </tr>

            <tr>
               <td>Date</td>
               <td>
                  <input type="date" name='Date'
                     value = '<?php echo$task[0]->Date; ?>' />
               </td>
            </tr>

            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Task" />
               </td>
            </tr>

         </table>
      </form>
   </body>
</html>