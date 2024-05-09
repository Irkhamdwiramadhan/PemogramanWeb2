<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>
<h1>PRAKTIKUM 1</h1>
<?php 

$fruits = ["banana","Avokado","Melon"];
echo $fruits[1];

echo "<ol>";
foreach ($fruits as $fruit){
       echo "<li>" .$fruit . "</li>";
}
echo "</ol>";
?>

<?php require_once 'footer.html'; ?>