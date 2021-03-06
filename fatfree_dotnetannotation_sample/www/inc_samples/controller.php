<?php
//Set variables and get POST data
F3::set('url', '');
F3::set('handler', '');
$url = F3::get('POST["url"]');
$header = F3::get('POST["header"]');
$userName = F3::get('POST["userName"]');
$documentName = F3::get('POST["documentName"]');
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
    //Get user name from form
    $userName = trim(strip_tags($userName));
    if ($userName == "") {
        $userName = "Anonymous";
    }
    //Check is Show header checkbox is checked if not set property to false
    if ($header == null) {
        $header = "false";
    }
    //Set use or not Handler for URL
    if ($handler == true) {
        $handler = "Handler";
        $useHandler = 'true';
        $ajaxPath = $url . "ajax.ashx/" . $userName;
        $data = "";
    } else {
        $handler = "";
        $useHandler = 'false';
        $ajaxPath = $url . "home/getId/";
        $data = "un=" . $userName;
    }
    //Remove spaces and tags from document name for view and annotate
    $documentName = trim(strip_tags($documentName));
    //Check if document name is empty set document name for default file
    if ($documentName == "") {
        $documentName = "Quick_Start_Guide_To_Using_GroupDocs.pdf";
    }       
    //Set variables for template
    F3::set("url", $url);
    F3::set("userName", $userName);
    F3::set("header", $header);
    F3::set("documentName", $documentName);
    F3::set("handler", $handler);
    F3::set("useHandler", $useHandler);
    F3::set("ajaxPath", $ajaxPath);
    F3::set("data", $data);
}
//Process template
echo Template::serve('view.htm');
