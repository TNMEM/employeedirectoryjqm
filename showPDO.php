<?php
// what PDO adapters are installed?
foreach(PDO::getAvailableDrivers() as $driver)
    {
    echo $driver.'<br />';
    }
?>
