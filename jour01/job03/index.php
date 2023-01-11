<!DOCTYPE html>
  <html lang="fr">
    <head>
	      <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	       <title></title>
    </head>

    <body>
      <?php
      $bool = true;
      $var = 3;
      $nom = "Le Bantou";
      $myfloat = 14.04;
       ?>

       <table>
          <tr>
            <thead>Types</thead>
            <thead>Noms</thead>
            <thead>Valeurs</thead>
          </tr>

          <tbody>
            <tr>
              <td>Booléen</td>
              <td>bool</td>
              <td><?php echo $bool; ?></td>
            </tr>
            <tr>
              <td>entier</td>
              <td>var</td>
              <td><?php echo $var; ?></td>
            </tr>
            <tr>
              <td>string</td>
              <td>nom</td>
              <td><?php echo $nom; ?></td>
            </tr>
            <tr>
              <td>float</td>
              <td>myfloat</td>
              <td><?php echo $myfloat; ?></td>
            </tr>
          </tbody>
      </table>
    </body>

  </html>
