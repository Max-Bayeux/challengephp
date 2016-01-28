<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->

    <title>Mon premier php</title>
  </head>

  <body>



<?php
$jeuxvideos= array ("Uncharted ","Fallout ","Warthunder ","Arma ","Wow ","ProjectCars");

function games($jeux){
  echo"<tr><td>".$jeux."</td> </tr>";
}

echo'<table id="classement" class="table table-striped"><thead><tr><th>Jeux Vidéos</thead></tr></th>';
for ($i=0; $i < count($jeuxvideos); $i++){
  games($jeuxvideos[$i]);
}


?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script>
$ (document).ready(function() {
  $ ('#classement').DataTable();
});
</script>

  </body>
</html>
