<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to get document information
class GetDocumentInformation {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
		$viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
		
		echo "InfoResult.Pages.Count: ", count($response->getPages());
        echo "\n";                            
    }
}
