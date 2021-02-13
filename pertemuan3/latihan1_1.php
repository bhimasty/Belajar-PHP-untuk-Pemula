<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .warna-baris {
      background-color: silver;
    }
  </style>
  <title>Latihan 1</title>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php
    // for ($i = 1; $i <= 3; $i++) {
    //   echo "<tr>";
    //   for ($j = 1; $j <= 5; $j++) {
    //     echo "<td>$i,$j</td>";
    //   }
    //   echo "</tr>";
    // }
    ?>

    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i % 2 == 1) : ?>
        <tr>
        <?php else : ?>
        <tr class="warna-baris">
        <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
  </table>
</body>

</html>