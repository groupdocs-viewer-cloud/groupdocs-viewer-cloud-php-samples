<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to improve content positioning when rendering into PDF
class DisableCharsGrouping {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.pdf");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $pdfDocumentOptions = new Model\PdfDocumentOptions();
        $pdfDocumentOptions->setDisableCharsGrouping(true);
        $renderOptions->setPdfDocumentOptions($pdfDocumentOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "DisableCharsGrouping completed: ", count($response->getPages());
        echo "\n";                            
    }
}
