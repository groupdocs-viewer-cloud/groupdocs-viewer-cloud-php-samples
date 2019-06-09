<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXXX-XXXXX';
    static $AppKey = 'XXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'XXXXXX';

    // Getting the View API Instance
    public static function GetViewApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new ViewAPI instance
        return new GroupDocs\Viewer\ViewApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Viewer\Info($configuration);
    }

	// Getting the Viewer StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Viewer\StorageApi($configuration);
    }

     // Getting the Viewer FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Viewer\FolderApi($configuration);
    }

	// Getting the Viewer FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Viewer\FileApi($configuration);
    }
}
