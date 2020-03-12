<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to hide text in case it overflows cell
class AdjustTextOverflowInCells {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.xlsx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $spreadsheetOptions = new Model\SpreadsheetOptions();
        $spreadsheetOptions->setTextOverflowMode(Model\SpreadsheetOptions::TEXT_OVERFLOW_MODE_HIDE_TEXT);
        $renderOptions->setSpreadsheetOptions($spreadsheetOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "AdjustTextOverflowInCells completed: ", count($response->getPages());
        echo "\n";                            
    }
}
