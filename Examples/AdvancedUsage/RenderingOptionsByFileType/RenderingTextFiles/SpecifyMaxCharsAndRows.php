<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render a text files using rows and pages restrictions
class SpecifyMaxCharsAndRows {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.txt");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $textOptions = new Model\TextOptions();
        $textOptions->setMaxCharsPerRow(100);
        $textOptions->setMaxRowsPerPage(100);
        $renderOptions->setTextOptions($textOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "SpecifyMaxCharsAndRows completed: ", count($response->getPages());
        echo "\n";                            
    }
}
