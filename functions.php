<?php
// "HTTP/1.0 404 Not Found"
function status_header($code = 200) {}

// [header => värde]
function headers(array $headers = []) {}

function redirect($url, $code = 302) {}