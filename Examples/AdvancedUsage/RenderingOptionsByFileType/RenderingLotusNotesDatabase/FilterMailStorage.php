<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to to filter Lotus Notes database messages
class FilterMailStorage {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.nsf");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $mailStorageOptions = new Model\MailStorageOptions();
        $mailStorageOptions->setTextFilter("April 2015");
        $mailStorageOptions->setAddressFilter("test@test.com");
        $renderOptions->setMailStorageOptions($mailStorageOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "FilterMailStorage completed: ", count($response->getPages());
        echo "\n";                            
    }
}
