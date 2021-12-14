<?php

<html>

<body>
<table border="2px" cellpadding="2px" cellspacing="4px">
    <?php
include 'readProducts.php';
?>

<?php

while(!feof($f)) {
    $line = fgets($f);
    $products = explode(',',$line);
    echo "<tr>";

foreach($products as $data) {

echo "<td>". trim($data)."</td>";

}

}

?>

</table>

</body>

</html>
?>
