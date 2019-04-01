<?PHP
$week = array();
$week[0]="lundi";
$week[1]="mardi";
$week[2]="mercredi";
$arrlength = count($week);
echo "<table border='1'>";

for($x = 0; $x < $arrlength; $x++)
{
	echo "<tr>";
	echo "<td>";
    echo $week[$x];
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<?PHP
$week = array();
$week[0]="lundi";
$week[1]="mardi";
$week[2]="mercredi";

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h2>liste jour</h2>


</body>

</html>
