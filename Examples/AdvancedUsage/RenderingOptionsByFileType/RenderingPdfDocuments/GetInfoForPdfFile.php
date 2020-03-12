<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to retrieve view information for pdf file
class GetInfoForPdfFile {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.pdf");				
        $viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        echo " PrintingAllowed: ", $response->getPdfViewInfo()->getPrintingAllowed(), "\n";
        
		echo "GetInfoForPdfFile completed: ", count($response->getPages());
        echo "\n";                            
    }
}
