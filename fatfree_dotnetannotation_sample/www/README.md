## Examples

### GroupDocs PHP samples

This is the GroupDocs PHP samples application written with FatFree framework.

### How to deploy and run sample app

 1. Copy all files from api-samples folder to web root folder.
 2. Restart apache and open "VIRTUALHOST_NAME" or  "VIRTUALHOST_NAME/view". (Example: http://annotationonfatfree/view)

### Requirements:

* PHP 5.3
* Apache ModRewrite
* PHP Curl extension
* PHP Sockets extension (php_sockets.dll)


### Using:

* Open sample "VIRTUALHOST_NAME/view".
* Enter url to installed and configured GroupDocs Annotation for .NET (example: http://plugins-qa.groupdocs.dynabic.com:7878/)
* Enter username which will be used to sign annotations and responses.
* Enter filename to choose which file to open for annotation.
* Check "Use Http Handler" checkbox if you want to work with Web Forms sample.
* Check "Show header" checkbox if you want to show annotation widget header.
* Press Integrate button.

The sample shows how to integrate GroupDocs Annotation for .NET as a jQuery plugin. The sample uses template to attach required scripts and run jQuery funtion.

The sample works with .NET MVC and WebForms samples. To work with WebForms sample - please check "Use Http Handler" checkbox. It will add Handler word to requests (it's specific for webforms app type) and will make another type of ajax request. 


###Created by [Marketplace Team](http://groupdocs.com/marketplace/).
