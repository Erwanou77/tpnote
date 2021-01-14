<?php 
  require"config.php";
  $pdostat = $bdd->query('SELECT * FROM pokemon');
  $pdostat->setFetchMode(PDO::FETCH_ASSOC);
  $nombre = $pdostat->rowcount();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
 <p>There are <?php echo $nombre;?> pokemons from the database.</p>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pdostat as $ligne){
          $images = "sprites/" . $ligne['identifier'] . ".png";
          if ($ligne['base_experience']>200) {?>
            <tr class="super">
              <td><img src="<?php echo $images; ?>" alt="<?php echo $ligne['identifier']; ?>"></td>
              <td><?php echo $ligne['id']; ?></td>
              <td><?php echo $ligne['identifier']; ?></td>
              <td><?php echo $ligne['height']; ?></td>
              <td><?php echo $ligne['weight']; ?></td>
              <td><?php echo $ligne['base_experience']; ?></td>
            </tr>
         <?php }else{?>
          <tr>
              <td><img src="<?php echo $images; ?>" alt="<?php echo $ligne['identifier']; ?>"></td>
              <td><?php echo $ligne['id']; ?></td>
              <td><?php echo $ligne['identifier']; ?></td>
              <td><?php echo $ligne['height']; ?></td>
              <td><?php echo $ligne['weight']; ?></td>
              <td><?php echo $ligne['base_experience']; ?></td>
            </tr>
         <?php }?>
        
      <?php } ?>
      </tbody>
    </table>
  </body>
</html>
