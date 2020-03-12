<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to omit to render empty rows
class SkipRenderingOfEmptyRows {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_empty_row.xlsx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $spreadsheetOptions = new Model\SpreadsheetOptions();
        $spreadsheetOptions->setRenderEmptyRows(false);
        $renderOptions->setSpreadsheetOptions($spreadsheetOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "SkipRenderingOfEmptyRows completed: ", count($response->getPages());
        echo "\n";                            
    }
}
