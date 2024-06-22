
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>


</head>
<body>
    <nav class="navbar navbar-ligth justify-content-center fs-3 mb-5" style="background-color: #00ff5573;" >
        PHP Complete CRUD Application
    </nav>

    <div class="container">
        <?php

        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>
        <table class="table table-hover text-center">
   <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db_conn.php";
    $sql = "SELECT * FROM `CRUD`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <td><?php  echo $row['id']?></td>
      <td><?php  echo $row['first_name']?></td>
      <td><?php  echo $row['last_name']?></td>
      <td><?php  echo $row['email']?></td>
      <td><?php  echo $row['gender']?></td>
      <td>
         <a href="edit.php?id=<?php echo $row['id']?>"
          class="link-dark"><i class="fa-solid fa-pen-to-square 
         fs-5 me-3"></i></a>
         <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash f-5"></i></a>
      </td>
    </tr>
     <?php
        
}

    ?>
  </tbody>
</table>


    </div>

  <!-- Bootstrap CSS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>