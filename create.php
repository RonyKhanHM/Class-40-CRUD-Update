    <?php
    include "config.php";
    ?>

      <?php
      if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $roll = $_POST["roll"];
        $class = $_POST["class"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];

      $query = "INSERT INTO students (name, roll, class, phone, email, address) VALUES('$name', '$roll', '$class', '$phone', '$email', '$address')";
      $insertData = mysqli_query ($connection, $query);

      if ($insertData){
        header('location:index.php');
      }
      else {
        echo 'This is Fail';
      }

    }
      ?>

    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>PHP CRUD</title>
    </head>

    <body>

      <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create.php">Form</a>
                </li>
                <li class="nav-item dropdown">
            </div>
          </div>
        </nav>
      </section>

      <section class="mt-5 container">
        <form action="" method="post">

          <div class="mb-3">
            <label for="name" class="form-label">Student name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="roll" class="form-label">Student Roll</label>
            <input type="number" class="form-control" id="roll" name="roll" required>
          </div>
          <div class="mb-3">
            <label for="class" class="form-label">Student Class</label>
            <input type="text" class="form-control" id="class" name="class" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Student Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Student Mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Student Address</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>        
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      ossorigin="anonymous"></script>
    </body>

    </html>