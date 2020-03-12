<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to adjust output page size
class AdjustPageSize {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.msg");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PDF);
        $renderOptions = new Model\PdfOptions();
        $emailOptions = new Model\EmailOptions();
        $emailOptions->setPageSize(Model\EmailOptions::PAGE_SIZE_A4);
        $renderOptions->setEmailOptions($emailOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "AdjustPageSize completed: ", $response->getFile()->getPath();
        echo "\n";                            
    }
}
