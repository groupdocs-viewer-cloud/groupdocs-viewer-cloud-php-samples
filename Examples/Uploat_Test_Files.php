<?php

include(__DIR__ . '\CommonUtils.php');

try {
    $storageApi = CommonUtils::GetStorageApiInstance();

    $folder = realpath(__DIR__ . '\Resources');
    $filePathInStorage = "";
    
    $dir_iterator = new \RecursiveDirectoryIterator($folder);
    $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
    
    echo 'Uploading file process executing....<br />';
    
    foreach ($iterator as $file) {
        if (!$file->isDir()) {
            $filePath = $file->getPathName();

            $filePathInStorage = str_replace($folder . '\\', "", $filePath);
            $filePathInStorage = str_replace("\\", "/", $filePathInStorage);

            echo $filePath;
            echo "<br>";

            $isExistRequest = new GroupDocs\Storage\Model\Requests\GetIsExistRequest($filePathInStorage);
            $isExistResponse = $storageApi->GetIsExist($isExistRequest);

            if (!$isExistResponse->getFileExist()->getIsExist()) {
                $putCreateRequest = new GroupDocs\Storage\Model\Requests\PutCreateRequest($filePathInStorage, $filePath);
                $putCreateResponse = $storageApi->PutCreate($putCreateRequest);
            }
        }
    }
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}