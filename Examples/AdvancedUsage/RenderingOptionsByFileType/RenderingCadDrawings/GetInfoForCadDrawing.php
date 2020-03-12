<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to retrieve view information for CAD drawing
class GetInfoForCadDrawing {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_layers_and_layouts.dwg");				
        $viewOptions->setFileInfo($fileInfo);

		$request = new Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
        
        echo " Layers count: ", count($response->getCadViewInfo()->getLayers()), "\n";
        echo " Layouts count: ", count($response->getCadViewInfo()->getLayouts()), "\n";
        
		echo "GetInfoForCadDrawing completed: ", count($response->getPages());
        echo "\n";                            
    }
}
