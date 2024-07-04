    <?php
      include "config.php";

      $id = $_GET ["id"];
      $query = "DELETE FROM students WHERE id = $id";
      $deleteData = mysqli_query($connection, $query);

      if(isset($_GET["id"])){
        if ($deleteData){
          header('location:index.php');
        }
        else {
          echo 'Fail to Delete Data';
        }
      }

    ?>