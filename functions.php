<?php
function status_header($code) {
    $messages = [
        200 => "OK",
        201 => "Created",
        204 => "No Content",
        300 => "Multiple Choices",
        301 => "Moved Permanently",
        400 => "Bad Request",
        401 => "Unauthorized",
        404 => "Not Found",
        501 => "Internal Server Error",
        502 => "Bad Gateway",
        505 => "HTTP Version Not Supported"
    ];
    header("HTTP/1.0 " .$code." ".$messages[$code]);
}

$headers = [
    "Connection" => "keep-alive",
    "X-Date" => "sunday",
    "X-Content-Length" => "12",
    "Content-Type" => "application/json; charset=UTF-8"
];

function headers(array $headers) {
    foreach ($headers as $header => $value){
        header($header .": ". $value);
    }
}


function redirect($url, $code) {
    status_header($code);
    header("Location:" . $url);
}

status_header(200);
headers($headers);
redirect("internal-server-error.php", 301);