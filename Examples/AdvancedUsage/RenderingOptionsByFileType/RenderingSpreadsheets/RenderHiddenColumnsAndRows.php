<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to enable rendering of hidden rows and columns
class RenderHiddenColumnsAndRows {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_hidden_row_and_column.xlsx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $spreadsheetOptions = new Model\SpreadsheetOptions();
        $spreadsheetOptions->setRenderHiddenColumns(true);
        $spreadsheetOptions->setRenderHiddenRows(true);
        $renderOptions->setSpreadsheetOptions($spreadsheetOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderHiddenColumnsAndRows completed: ", count($response->getPages());
        echo "\n";                            
    }
}
