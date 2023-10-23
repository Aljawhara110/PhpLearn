<h1>Array</h1>

<form action="array.php" method="get">
 
<input type="text" name="name">
      <input type="submit">   
</form>
<?php
$name =$_GET['name'];
$score = [
'Nour' => ['Score' =>'90','Grade' =>'A'],
'Majed' => ['Score' =>'40','Grade' =>'C'],
'Anas' => ['Score' =>'20','Grade' =>'F'],
];

echo 'Score: '.$score[$name]['Score'];
echo '<br>';
echo 'Grade: '.$score[$name]['Grade'];
?>