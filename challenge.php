<!DOCTYPE html>
<html>
<head>
 <title>exophp</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
</head>
   <body>
       <?php
       $games = ['Uncharted','Warthunder','Arma 3', 'Project cars', 'Battlefield','Wow'];
       function gaming($game){
           echo '<tr><td>'.$game.'</td></tr>';
       }
       ?>
       <table id="example" class="display" cellspacing="0" width="100%">
       <thead>
           <tr>
               <td>Jeux Vidéos</td>
           </tr>
       </thead>
       <tbody>
       <?php
           for($i = 0; $i < count($games); $i++){
               gaming($games[$i]);
           }
       ?>
       </tbody>
       </table>

           <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

           <!-- Latest compiled and minified JavaScript -->
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
           <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
           <script>
               $(document).ready(function() {
                   $('#example').DataTable();
               });
           </script>
       </body>
   </html>
