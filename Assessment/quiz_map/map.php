<?php
$country = "";

if (isset($_GET['country'])) {
  $country = strtolower($_GET['country']);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Country Search</title>
  <style>
    body {
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f2f2f2;
    }

    .box {
      width: 320px;
      height: 400px;
      border: 1px solid #ccc;
      padding: 20px;
      text-align: center;
      background: white;
    }

    img {
      width: 150px;
      margin-top: 10px;
    }

    input {
      padding: 8px;
      width: 60%;
    }

    button {
      padding: 8px;
    }
  </style>
</head>

<body>

<div class="box">

<h3>Search Country</h3>

<form method="GET">
  <input type="text" name="country" placeholder="Enter country">
  <button type="submit">Search</button>
</form>

<?php
if ($country == "korea") {
  echo "<h4>South Korea</h4>";
  echo "<p>Capital: Seoul</p>";
  echo "<img src='southKorea.webp'>";
}
else if ($country == "france") {
  echo "<h4>France</h4>";
  echo "<p>Capital: Paris</p>";
  echo "<img src='france.webp'>";
}
else if ($country == "brazil") {
  echo "<h4>Brazil</h4>";
  echo "<p>Capital: Brasilia</p>";
  echo "<img src='brazil.webp'>";
}
else if ($country != "") {
  echo "<p>Not found</p>";
}
?>

</div>

</body>
</html>