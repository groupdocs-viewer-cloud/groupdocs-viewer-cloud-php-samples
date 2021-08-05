<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render Visio documents figures
class RenderVisioDocumentFigures {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.vssx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PNG);
        $renderOptions = new Model\ImageOptions();
        $visioRenderingOptions = new Model\VisioRenderingOptions();
        $visioRenderingOptions->setRenderFiguresOnly(true);
        $visioRenderingOptions->setFigureWidth(250);
        $renderOptions->setVisioRenderingOptions($visioRenderingOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderVisioDocumentFigures completed: ", count($response->getPages());
        echo "\n";                            
    }
}
