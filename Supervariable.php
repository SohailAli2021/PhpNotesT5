<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <form action="" method="get">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Your Name">
    
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" name="email"  placeholder="Enter Your Email">
    
        </div>
        <div class="form-group">
          <label for="">Age</label>
          <input type="number" class="form-control" name="Age"  placeholder="Enter Your Age">
    
        </div>
      <input type="submit" value="Submit">
     </form> 


   <?php
   echo "<pre>";
   print_r ($_SERVER);
   echo "</pre>";
   ?>



     <!-- <?php
     echo $_REQUEST['name'];?>
     <br>
     <?php
     echo $_REQUEST['email'];
     ?>
     <br>
     <?php
     echo $_REQUEST['Age'];
     ?> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>