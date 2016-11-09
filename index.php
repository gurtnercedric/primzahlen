
<?php


echo "<h1>Primzahlen</h1><br>";




$start = 1;             //Mit dieser Zahl wird begonnen


$stop = 1000;           //MIt dieser Zahl wird das Script beendet


$testzahl = $start;     //Zahl, die getestet werden soll, ob sie ein Primzahl ist


$teiler = 2;            //Durch diese Zahl wird geteilt


$ergebnis = false;      


$anzahl_primzahlen = 0; //Dieser Zähler zählt alle gefundenen Primzahlen


if ($start <= $stop){
	while ($testzahl <= $stop){
do{

if ($teiler <= ($testzahl/2)){
if (($testzahl%$teiler) == 0){
	$ergebnis = true;
	} else{
	$teiler++;
	}
} else {
echo $testzahl.",   ";
$ergebnis = true;
$anzahl_primzahlen++;
}
}
while ($ergebnis == false);
$teiler = 2;            //$teiler auf Ursprung zurücksetzen
$testzahl++;            //nächste Zahl testen
$ergebnis = false;
}
} else{
echo "Die Zahl \$start ist grösser als die Zahl \$stop! Bitte Eingaben korrigieren!";
}
echo "<h2>Statisktik</h2>";             //eine kleine Statistik
echo "\$start = ".$start."<br>";
echo "\$stop = ".$stop."<br>";
echo "Es wurden ".$anzahl_primzahlen." Primzahlen im Bereich von ".$start." bis ".$stop." gefunden!<br><br>";
?>
