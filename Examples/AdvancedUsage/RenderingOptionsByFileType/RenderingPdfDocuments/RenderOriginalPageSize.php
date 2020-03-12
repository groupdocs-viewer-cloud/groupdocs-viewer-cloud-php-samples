<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to convert pages to the same size as the size of pages in a source document
class RenderOriginalPageSize {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.pdf");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PNG);
        $renderOptions = new Model\ImageOptions();
        $pdfDocumentOptions = new Model\PdfDocumentOptions();
        $pdfDocumentOptions->setRenderOriginalPageSize(true);
        $renderOptions->setPdfDocumentOptions($pdfDocumentOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderOriginalPageSize completed: ", count($response->getPages());
        echo "\n";                            
    }
}
