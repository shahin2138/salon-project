<?php

$id = $_GET["id"];


$conn = mysqli_connect("localhost", "root", "", "salon");

if (!$conn) {
  echo "Database not connected" . mysqli_connect_error();
}


$sql = "SELECT * FROM `services` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);


mysqli_close($conn);



?>













<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header></header>
    <main>
      <div class="container border border-5 border-dark my-5 p-5">
        <h1 class="text-center">Edit Services</h1>
        <form action="updateservice.php" method="post">
          <div class="mb-3">
            <label class="visually-hidden" for="inputName">id</label>
            <input type="hidden" class="form-control" name="id" id="inputName"
            value='<?php echo "{$rows['id']}"; ?>' placeholder="" />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id=""
            aria-describedby="helpId" placeholder="" value='<?php echo "{$rows['name']}"?>'
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Therapy</label>
            <input type="text" class="form-control" name="therapy" id=""
            aria-describedby="helpId" placeholder="" value='<?php echo "{$rows['therapy']}"?>'
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" rows="3">
<?php echo "{$rows['description']}"?></textarea
            >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">MRP</label>
            <input type="number" class="form-control" name="mrp" id=""
            aria-describedby="helpId" placeholder="" value='<?php echo "{$rows['mrp']}"?>'
            />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
