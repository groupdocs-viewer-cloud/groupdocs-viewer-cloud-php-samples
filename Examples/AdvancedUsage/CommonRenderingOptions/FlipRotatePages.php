<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to rotate output pages when viewing a document as PDF
class FlipRotatePages {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PDF);
        $renderOptions = new Model\PdfOptions();
        $pageRotation = new Model\PageRotation();
        $pageRotation->setPageNumber(1);
        $pageRotation->setRotationAngle(Model\PageRotation::ROTATION_ANGLE_ON90_DEGREE);
        $renderOptions->setPageRotations([$pageRotation]);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "FlipRotatePages completed: ", $response->getFile()->getPath();
        echo "\n";                            
    }
}
