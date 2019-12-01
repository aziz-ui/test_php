<!DOCTYPE html>

<html lang="en">
<head>

    <title>Movie</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

</head>
<body>

<?php

  $movie = $_GET['movieName'];
  $star = $_GET['movieStar'];
  $year = $_Get['movieYear'];

  <h1> Information about $movie </h1>

  <p> Based on the input so far here is the Information
      $star stared in the movie $movie in the year $year
  </p>

  ?>
</body>
