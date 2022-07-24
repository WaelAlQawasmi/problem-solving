 <!DOCTYPE html>
 <html>
 <style>
 table, th, td {
  border:1px solid black;
}
</style>
 <body>

 <p>php problem soving</p>

 <?php
 fiveStudent(85,65,67,78,95);

function fiveStudent($stu1,$stu2,$stu3,$stu4,$stu5){
$marks = array($stu1,$stu2,$stu3,$stu4,$stu5);
echo max($marks)." is max </br>";

echo min($marks)." is min </br>";

echo  array_sum($marks)/count($marks) ." is avg </br>";
echo "<table style=\"width:100%\">
  <tr>
    <th>marks</th> </tr>";
rsort($marks);

$arrlength = count($marks);
for($x = 0; $x < $arrlength; $x++) {
   echo "<tr><td>".$marks[$x];
  echo "</td></tr>";
  
}
echo "</table>";
}
?>

