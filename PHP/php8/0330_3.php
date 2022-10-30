<?php
$day=$_GET['day'];
$iday=(int)$var2;
$var3 = match($iday){
    1, 2    => 'Weekly',
    3       => 'Monthly',
    4, 5    => 'Quarterly',
    default => 'Annually',
};
echo $var3;
?>
