<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render password-protected documents
class ViewProtectedDocument {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("SampleFiles/password_protected.docx");
        $fileInfo->setPassword("12345");
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "ViewProtectedDocument completed: ", count($response->getPages());
        echo "\n";                            
    }
}
