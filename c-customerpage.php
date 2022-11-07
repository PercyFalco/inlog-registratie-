<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=bmi" method="POST">
                <div class="form-group">
                    <label for="InputMass">Vul hier uw gewicht in:</label>
                    <input name="mass" type="text" class="form-control" id="InputMass">
                    <small id="massHelp" class="form-text text-muted">Uw gewicht zijn privacy is gegarandeerd...</small>
                </div>
                <div class="form-group">
                    <label for="InputHeight">Vul hier uw lengte in:</label>
                    <input name="height" type="text" class="form-control" id="InputHeight">
                    <small id="massHelp" class="form-text text-muted">We kunnen niet uw lengte's privacy garanderen.</small>
                </div>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
        <div class="col-12 col-sm-6">
        </div>
    </div>
</div>

<?php
include ("./connect_db.php");
include ("./functions.php");
$id = $_SESSION["id"];
$sql1 = "SELECT * FROM `bmi` WHERE `id` = '$id'";
$result1 = mysqli_query($conn, $sql1);

$records = "";
while ($record = mysqli_fetch_assoc($result1))
{
    $records .= "<tr>
         <th scope='row'>" . $record["id"] . "</th>
         <td>" . $record["height"] . "</td>
         <td>" . $record["weight"] . "</td>
         <td>" . $record["bmi"] . "</td>
         </tr>";
}
?>

<body>
  <main class="container";>
    <div class="row">
      <div class="col-12">
            <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">height</th>
            <th scope="col">weight</th>
            <th scope="col">bmi</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
			<?php echo $records; ?>
        </tbody>
        </table>
  </main>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  <script src="./js/app.js"> </script>
</body>
