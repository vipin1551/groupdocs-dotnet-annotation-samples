<?php
//Set variables and get POST data
F3::set('url', '');
F3::set('handler', '');
$url = F3::get('POST["url"]');
$handler = F3::get('POST["handler"]');
//Check is URL entered
if (empty($url)) {
    $error = 'Please enter URL of installed GroupDocs .NET Annotation';
    F3::set('error', $error);
} else {
    //Remove HTML tags and spices from URL
    $url = trim(strip_tags($url));
    //Add backslash to end of the URL
    if (substr($url, -1) != "/") {
        $url = $url . "/";
    }
    //Set use or not Handler for URL
    if ($handler == true) {
        $handler = "Handler";
    } else {
        $handler = "";
    }
    $checkUrl = $url . "document-viewer/GetScript" . $handler . "?name=libs/jquery-ui-1.10.3.min.js";
    $headers = get_headers($checkUrl, 1);
    if ($headers[0] != 'HTTP/1.1 200 OK') {
        f3::set('error', 'Please change "Use HTTP handler checkbox"');
    }
    //Set variables for template
    F3::set("url", $url);
    F3::set("handler", $handler);
}
//Process template
echo Template::serve('view.htm');
