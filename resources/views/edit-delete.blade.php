<!DOCTYPE html>
<html>



   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


            <table border = "1">
            <tr>
               <td>firstame</td>
               <td>lastname</td>
               <td>email</td>
               <td>address</td>
            </tr>
            <tr>
               <td><input type = 'text' name = 'firstname' value = '<?php echo$users[0]->firstname; ?>'/></td>
               <td><input type = 'text' name = 'lastname' value = '<?php echo$users[0]->lastname; ?>'/></td>
               <td><input type = 'text' name = 'email' value = '<?php echo$users[0]->email; ?>'/></td>
               <td><input type = 'text' name = 'address' value = '<?php echo$users[0]->address; ?>'/></td>
            </tr>
            <tr>
               <td>
                  <input type = 'submit' value = "Update contact" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>
