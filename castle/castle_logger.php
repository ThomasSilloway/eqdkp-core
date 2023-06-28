<?php

# Define a static function
function castle_log($message) {
    $message = $message . "\n";
    file_put_contents('php://stderr', print_r($message, TRUE));
}
