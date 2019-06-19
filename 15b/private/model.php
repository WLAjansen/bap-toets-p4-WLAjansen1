<?php

function get_latest_sneakers() {
    $pdo = database();
    $sql     = "SELECT * FROM 'sneakers' LIMIT 4";
    $statement = $pdo->query( $sql );

    return $statement;

 }

 function get_all_sneakers() {
   $pdo = database();
   $sql     = "SELECT * FROM 'sneakers'";
   $statement = $pdo->query( $sql );

    return $statement;

 }
?>
