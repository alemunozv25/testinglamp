La Hora actual es:
<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
 
$date = Carbon::now();

echo $date->toDayDateTimeString();
?>

<br>
Esto viene despues del Break
