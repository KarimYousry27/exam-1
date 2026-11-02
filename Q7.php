<?php

$date = "2012-12-21";

$newDate = date("Y-m-d", strtotime("+1 month", strtotime($date)));

echo $newDate;

?>