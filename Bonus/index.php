<?php 
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/../Movie.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    h1{
      text-align: center;
    }
    table{
      border-spacing: 25px;
    }
    tr:nth-child(even) {
    background-color: rgba(150, 212, 212, 0.4);
    }
  </style>
  <title>Movie-php-oop</title>
</head>
<body>

<h1>Movies</h1>
<table>
  <thead>
    <th>Title</th>
    <th>Genre</th>
    <th>Producer</th>
    <th>Duration</th>
    <th>Plot</th>
  </thead>
  <tbody>
    <?php foreach($movies as $movie): 
      $new_movie = new Movie($movie['title'],$movie['genre'],$movie['length']);
      $new_movie->producer = $movie["producer"];
      $new_movie->plot = $movie["plot"];
    ?>
      <tr>
        <td><?php echo $new_movie->title;?></td>
        <td><?php echo $new_movie->genre;?></td>
        <td><?php echo $new_movie->producer;?></td>
        <td><?php echo $new_movie->length;?></td>
        <td><?php echo $new_movie->getExtractPlot();?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</body>
</html>