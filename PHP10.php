<!DOCTYPE html>
<html lang="cs">

<head><!--  komentář -->
  <meta name="author" content="Mužák">
  <meta charset="utf-8">
  <title>příklad</title>
</head>

<body>
  <form action="" method="POST">
    <p>značka pro tabulku je: <input type="text" name="znacka"></p>

    <p>vyberte vlastnosti formátu gif</p>
    <p><input type="checkbox" name="vlastnosti" value="ztratova_komprese">ztrátová komprese</p>
    <p><input type="checkbox" name="vlastnosti" value="bezeztratova_komprese">bezeztrátová komprese</p>
    <p><input type="checkbox" name="vlastnosti" value="pruhlednost">průhlednost</p>
    <p><input type="checkbox" name="vlastnosti" value="animace">animace</p>
    <p><input type="checkbox" name="vlastnosti" value="hloubka">barevná hloubka 24bitů</p>

    <p>html je jazyk:</p>
    <p><input type="radio" name="jazyk" value="programovací">programovací</p>
    <p><input type="radio" name="jazyk" value="značkovací">značkovací</p>

    <p>zápis #00aa00 je barva:
      <select name="barva">
        <option value="modrá">modrá</option>
        <option value="červená">červená</option>
        <option value="zelená">zelená</option>
      </select>
    </p>

    <p><input type="submit" value="odeslat" name="odeslat">
    </p>

  </form>
</body>

</html>

<?php

if (isset($_POST["odeslat"])) {
  $body = 0;

  if (!empty($_POST["znacka"])) {
    if ($_POST["znacka"] === "table" or $_POST["znacka"] === "<table>") {
      $body++;
    } else {
      echo "<p>Špatně! Správná odpověď je table </p>";
    }
  }

  if (!empty($_POST["jazyk"])) {
    if ($_POST["jazyk"] === "značkovací") {
      $body++;
    } else {
      echo "<p>Špatně! HTML je značkovací jazyk.</p>";
    }
  }

  if (!empty($_POST["barva"])) {
    if ($_POST["barva"] === "zelená") {
      $body++;
    } else {
      echo "<p>Špatně! Správná barva je zelená.</p>";
    }
  }

  if (!empty($_POST["vlastnosti"])) {
    $body++;
  } else {
    echo "<p>Vyberte alespoň jednu vlastnost formátu GIF!</p>";
  }

  echo "<p>Celkový počet bodů:<strong> $body</strong></p>";


  if ($body === 4) {
    echo "<p><strong>Známka: 1</strong></p>";
  } elseif ($body === 2) {
    echo "<p><strong>Známka: 3</strong></p>";
  } else {
    echo "<p><strong>Známka: 5</strong></p>";
  }

}

?>