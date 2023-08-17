<!DOCTYPE html>
<html lang="en">
<head>
  <title>To-Do-List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container my-5">

  <h2>PHP To Do List</h2>
  
    <div class="row">
        <div class="col-sm-6">
        <?php
         include("database.php");
         include("delete-to-do.php");
         include("to-do-form.php");
         include("to-do-list.php");
        ?>
        </div>
    </div>
</div>
</body>
</html>