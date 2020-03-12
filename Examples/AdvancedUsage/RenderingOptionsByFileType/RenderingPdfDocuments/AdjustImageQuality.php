<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to adjust image quality when rendering PDF to HTML
class AdjustImageQuality {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.pdf");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $pdfDocumentOptions = new Model\PdfDocumentOptions();
        $pdfDocumentOptions->setImageQuality(Model\PdfDocumentOptions::IMAGE_QUALITY_MEDIUM);
        $renderOptions->setPdfDocumentOptions($pdfDocumentOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "AdjustImageQuality completed: ", count($response->getPages());
        echo "\n";                            
    }
}
