<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Cykly</title>
</head>
<body>
    <h1>Cykly</h1>
    <form method="post">
        <fieldset>
            <fieldset> <button type="submit" name="cyklus_while">Spustit WHILE cyklus</button> </fieldset>
            <fieldset><button type="submit" name="cyklus_do_while">Spustit DO-WHILE cyklus</button></fieldset>
        </fieldset>
    </form>
    <hr>

</body>
</html>

    <?php
    
    if (isset($_POST['cyklus_while'])) {
        echo "<h2>Výsledek WHILE cyklu:</h2>";
        
        while (true) {
            $cislo = rand(-5, 10); 
            echo $cislo . ", ";
            if ($cislo < 0) { 
                break;
            }
        }
    }

    if (isset($_POST['cyklus_do_while'])) {
        echo "<h2>Výsledek DO-WHILE cyklu:</h2>";
        
        $kladny = 0; 
        $zaporny = 0; 

        do {
            $cislo = rand(-5, 5); 
            echo $cislo .", "; 

            if ($cislo > 0) {
                $kladny++; 
            } elseif ($cislo < 0) {
                $zaporny++; 
            }
        } while ($cislo != 0); 

        echo "<br>Počet kladných čísel: " . $kladny . "<br>";
        echo "Počet záporných čísel: " . $zaporny . "<br>";
    }
        
    ?>

