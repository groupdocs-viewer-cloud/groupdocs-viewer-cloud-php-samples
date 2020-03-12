<?php

// Utility class to hold the constants and static functions
class Utils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXX-XXXX-XXXX-XXXX';
    static $AppKey = 'XXXXXXXXXXXXXXXX';

    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'First Storage';

    // Getting the View API Instance
    public static function GetViewApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new ViewerAPI instance
        return new GroupDocs\Viewer\ViewApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Viewer\InfoApi($configuration);
    }

	// Getting the Viewer StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new StorageApi instance
        return new GroupDocs\Viewer\StorageApi($configuration);
    }

     // Getting the Viewer FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FolderApi instance
        return new GroupDocs\Viewer\FolderApi($configuration);
    }

	// Getting the Viewer FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Viewer\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FileApi instance
        return new GroupDocs\Viewer\FileApi($configuration);
    }

    // Uploading sample files into storage
    public static function UploadResources() {
        $storageApi = self::GetStorageApiInstance();
        $fileApi = self::GetFileApiInstance();
        $folder = realpath(__DIR__ . '\Resources');
        $filePathInStorage = "";
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
        echo 'Uploading file process executing...';
        echo "\n";
        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();
                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                echo $filePathInStorage;
                echo "\n";
                $isExistRequest = new \GroupDocs\Viewer\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = $storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $putCreateRequest = new \GroupDocs\Viewer\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
                }
            }
        }        
    }
}
