<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to print out archive contents
class GetInfoForArchiveFile {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_folders.zip");				
        $viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        foreach ($response->getArchiveViewInfo()->getFolders() as $folder) {
            echo $folder, "\n";
        }
        
		echo "GetInfoForArchiveFile completed: ", count($response->getPages());
        echo "\n";                            
    }
}
