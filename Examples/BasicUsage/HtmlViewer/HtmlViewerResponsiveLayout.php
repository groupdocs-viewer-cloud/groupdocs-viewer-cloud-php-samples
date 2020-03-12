<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to make responsive layout in output HTML
class HtmlViewerResponsiveLayout {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $renderOptions->setIsResponsive(true);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "HtmlViewerResponsiveLayout completed: ", count($response->getPages());
        echo "\n";                            
    }
}
