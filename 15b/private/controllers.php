<?php

 function all_sneakers() {
   $statement = get_all_sneakers();
   include __DTR__ . '/views/all-sneakers.php';

 }

 function latest_sneakers() {
   $statement = get_latest_sneakers();
   include __DTR__ . '/views/latest-sneakers.php';
 }
 ?>
