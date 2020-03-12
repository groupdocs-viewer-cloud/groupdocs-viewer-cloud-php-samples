<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to retrieve view information for MS Project document
class GetInfoForProjectFile {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.mpp");				
        $viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        echo " Start date: ", $response->getProjectManagementViewInfo()->getStartDate()->format('Y-m-d'), "\n";
        echo " End date: ", $response->getProjectManagementViewInfo()->getEndDate()->format('Y-m-d'), "\n";
        
		echo "GetInfoForProjectFile completed: ", count($response->getPages());
        echo "\n";                            
    }
}
