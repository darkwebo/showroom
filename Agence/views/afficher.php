

<?php
include "../core/service_vol.php";

$crud= new service_vol();


echo"<table border=1>";
echo" <tr>";
echo" <td> REF </td>";
echo" <td> COMPAGNIE </td>";
echo "<td> DESTINATION </td>";
echo "<td> DATE </td>";
echo "<td> HDEPART </td>";
echo "<td> HARRIVEE </td>";

echo "</tr>";
$res=$crud->afficherVol();
foreach ($res as $row)
{
    echo "<tr>";
    //echo "<td>".$row['identifiant']."</td>";
    echo "<td>".$row['REF']."</td>";
    echo "<td>".$row['COMPAGNIE']."</td>";
    echo "<td>".$row['DESTINATION']."</td>";
    echo "<td>".$row['DATE']."</td>";
    echo "<td>".$row['HDEPART']."</td>";
    echo "<td>".$row['HARRIVEE']."</td>";

    echo '<td><a href="modifier.php?REF='.$row['REF'].'">Modifier</a></td>';
    echo "</tr>";
}
?>
