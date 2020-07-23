<?php

// get the q parameter from URL
$q = $_REQUEST["st"];

$hint = "";
// Array with names
//$a[] = "Anna";
//$a[] = "Brittany";
//$a[] = "Cinderella";
//$a[] = "Diana";
//$a[] = "Eva";
//$a[] = "Fiona";
//$a[] = "Gunda";
//$a[] = "Hege";
//$a[] = "Inga";
//$a[] = "Johanna";
//$a[] = "Kitty";
//$a[] = "Linda";
//$a[] = "Nina";
//$a[] = "Ophelia";
//$a[] = "Petunia";
//$a[] = "Amanda";
//$a[] = "Raquel";
//$a[] = "Cindy";
//$a[] = "Doris";
//$a[] = "Eve";
//$a[] = "Evita";
//$a[] = "Sunniva";
//$a[] = "Tove";
//$a[] = "Unni";
//$a[] = "Violet";
//$a[] = "Liza";
//$a[] = "Elizabeth";
//$a[] = "Ellen";
//$a[] = "Wenche";
//$a[] = "Vicky";
//
$a=[];
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="admin";
$dbname="division_politica";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
$query = "select nombre from division_politica.division";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($nombre);
    while ($stmt->fetch()) {
        //printf("%s\n", $nombre);
        array_push($a,$nombre);
    }
    $stmt->close();
}
$con->close();

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;