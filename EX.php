<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <table>
    <?php

    print_r($_POST['check']);

    require 'connect.php';
    $sql = $bdd -> query('select * from Météo');
    while ($rows = $sql -> fetch()){
        echo
        //'<tr> <td> <input type="checkbox" name="table" value="'.$rows['ville'].'">' . $rows['Ville'] . $donnees['id'] . '</td>
        '<tr><td><input type="checkbox" name="check[]" value="'.$rows['ville'].'">' . $rows['Ville'] . $donnees['id'] . '</td>
        <td>' . $rows['haut'] . '</td>
        <td>' . $rows['bas'] . '</td> </tr>';
    // function cacher la selection 
    } while(list($indice, $val)=each($_POST)) 
    { if ($val=="on") { //Récupération de l'ID
        $CodeId = preg_replace('#check#','',$indice); 
        mysql_query("DELETE FROM modifications WHERE id = " . $CodeId);
        }
    }
    // Cacher la selection ne fonctionne pas 

    ?>
    </table>

</body>
</html>