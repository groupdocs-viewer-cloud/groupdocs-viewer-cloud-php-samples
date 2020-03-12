<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to retrieve and print out text with coordinates
class ImageViewerGetTextCoordinates {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PNG);
        $renderOptions = new Model\ImageOptions();
        $renderOptions->setExtractText(true);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        for ($i = 0; $i < 3; $i++) {
            $line = $response->getPages()[0]->getLines()[$i];
            echo " x: ", $line->getX(), "; y: ", $line->getY(), "\n";
        }
        echo "...\n";  
        
		echo "ImageViewerGetTextCoordinates completed: ", count($response->getPages());
        echo "\n";                            
    }
}
