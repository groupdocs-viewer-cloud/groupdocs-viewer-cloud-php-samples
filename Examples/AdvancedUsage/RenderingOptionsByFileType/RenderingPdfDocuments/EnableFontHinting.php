<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to adjust the display of an outline font
class EnableFontHinting {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.pdf");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PNG);
        $renderOptions = new Model\ImageOptions();
        $pdfDocumentOptions = new Model\PdfDocumentOptions();
        $pdfDocumentOptions->setEnableFontHinting(true);
        $renderOptions->setPdfDocumentOptions($pdfDocumentOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "EnableFontHinting completed: ", count($response->getPages());
        echo "\n";                            
    }
}
