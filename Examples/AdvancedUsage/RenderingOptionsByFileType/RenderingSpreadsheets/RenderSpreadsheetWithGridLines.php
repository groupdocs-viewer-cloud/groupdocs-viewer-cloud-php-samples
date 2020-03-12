<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to enable rendering of grid lines
class RenderSpreadsheetWithGridLines {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.xlsx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $spreadsheetOptions = new Model\SpreadsheetOptions();
        $spreadsheetOptions->setRenderGridLines(true);
        $renderOptions->setSpreadsheetOptions($spreadsheetOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderSpreadsheetWithGridLines completed: ", count($response->getPages());
        echo "\n";                            
    }
}
