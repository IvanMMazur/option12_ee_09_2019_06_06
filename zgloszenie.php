<?php
$conn = mysqli_connect("localhost","root","","ratownictwo");
$query = "INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia)
VALUES ('{$_POST['n_zesp']}', '{$_POST['n_dyspo']}', '{$_POST['adres']}','0','curtime()')";
$result = mysqli_query($conn,$query);
// print_r($query);
mysqli_close($conn);
print_r($query);
?>
<!-- 
 -->