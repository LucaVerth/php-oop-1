<?php 
require_once __DIR__ . "/Movie.php";

$movie1 = new Movie("The Silence of the Lambs", "Psychological Horror", 118);
$movie1->producer = "Strong Heart Productions";
$movie1->plot = "In 1990, Clarice Starling is pulled from her FBI training at the Quantico, Virginia FBI Academy by Jack Crawford of the Bureau's Behavioral Science Unit. He assigns her to interview Hannibal Lecter, a former psychiatrist and incarcerated cannibalistic serial killer. Crawford believes Lecter's insight could prove useful in the pursuit of a psychopath serial killer nicknamed 'Buffalo Bill', who kills young women and removes their skin from their bodies.
At the Baltimore State Hospital for the Criminally Insane, Dr. Frederick Chilton makes a crude pass at Starling before he escorts her to Lecter's cell. Although initially pleasant and courteous, Lecter grows impatient with Starling's interviewing and rebuffs her. As she is leaving, a prisoner named Miggs flicks semen at her. Lecter, who considers this an 'unspeakably ugly' act, calls Starling back and tells her to seek out his old patient. This leads her to a storage facility, where she discovers a jar containing a man's severed head. She returns to Lecter, who says the man is linked to Buffalo Bill. He offers to profile Buffalo Bill on condition he be transferred away from Chilton, whom he detests. Another Buffalo Bill victim is found with a death's head moth lodged in her throat.";

$movie2 = new Movie("Avatar", "Science Fiction", 162);
$movie2->producer = "20th Century Fox";
$movie2->plot = "In 2154, humans have depleted Earth's natural resources, leading to a severe energy crisis. The Resources Development Administration (RDA) mines a valuable mineral called unobtanium on Pandora, a densely forested habitable moon orbiting Polyphemus, a fictional gas giant in the Alpha Centauri star system.[10] Pandora, whose atmosphere is poisonous to humans, is inhabited by the Na'vi, a species of 10-foot tall (3.0 m), blue-skinned, sapient humanoids that live in harmony with nature and worship a mother goddess named Eywa.
To explore Pandora's biosphere, scientists use Na'vi-human hybrids called 'avatars', operated by genetically matched humans. Jake Sully, a paraplegic former Marine, replaces his deceased identical twin brother as an operator of one. Dr. Grace Augustine, head of the Avatar Program, considers Sully an inadequate replacement but accepts his assignment as a bodyguard. While escorting the avatars of Grace and fellow scientist Dr. Norm Spellman, Jake's avatar is attacked by a thanator and flees into the forest, where he is rescued by Neytiri, a female Na'vi. Witnessing an auspicious sign, she takes him to her clan. Neytiri's mother Mo'at, the clan's spiritual leader, orders her daughter to initiate Jake into their society.";


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
    <tr>
      <td><?php echo $movie1->title; ?></td>
      <td><?php echo $movie1->genre; ?></td>
      <td><?php echo $movie1->producer; ?></td>
      <td><?php echo $movie1->length; ?></td>
      <td><?php echo $movie1->getExtractPlot(); ?></td>
    </tr>
    <tr>
      <td><?php echo $movie2->title; ?></td>
      <td><?php echo $movie2->genre; ?></td>
      <td><?php echo $movie2->producer; ?></td>
      <td><?php echo $movie2->length; ?></td>
      <td><?php echo $movie2->getExtractPlot(); ?></td>
    </tr>
  </tbody>
</table>


</body>
</html>