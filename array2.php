<h1>Array</h1>
<?php
$family =array('father','mother','brother') ;
echo $family[1];
$family[1]='love';
$family[3]='sister';

echo $family[1];
echo $family[3];
echo count($family);

$family =['father','mother','brother'];

//Assositive Array
$family =[
    'Designer'=>'Nour',
    'programmer'=>'Mjad',
    'Gamer'=>'Mjad',  
];

echo $family['Designer'];
?>