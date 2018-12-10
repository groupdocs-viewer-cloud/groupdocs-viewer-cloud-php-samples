<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXX-XXXXX';
    static $AppKey = 'XXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';

    // Getting the Viewer API Instance
    public static function GetViewerApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        CommonUtils::$AppSid = 'd215ce72-1609-4282-8d55-5810942236fb';
        CommonUtils::$AppKey = '715d18b0afef2f303882c769921fe05a';
        CommonUtils::$ApiBaseUrl = 'https://api.groupdocs.cloud';

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new ViewerAPI instance
        return new GroupDocs\Viewer\ViewerApi($configuration);
    }

}
