<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to retrieve view information for outlook data file
class GetInfoForOutlookDataFile {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.ost");				
        $viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        echo " Folders count: ", count($response->getOutlookViewInfo()->getFolders()), "\n";
        
		echo "GetInfoForOutlookDataFile completed: ", count($response->getPages());
        echo "\n";                            
    }
}
