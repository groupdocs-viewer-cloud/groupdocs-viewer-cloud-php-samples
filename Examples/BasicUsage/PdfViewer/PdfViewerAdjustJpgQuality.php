<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to adjust JPG image quality in the output PDF document
class PdfViewerAdjustJpgQuality {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_jpg_image.pptx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PDF);
        $renderOptions = new Model\PdfOptions();
        $pdfOptimizationOptions = new Model\PdfOptimizationOptions();
        $pdfOptimizationOptions->setCompressImages(true);
        $pdfOptimizationOptions->setImageQuality(80);
        $renderOptions->setPdfOptimizationOptions($pdfOptimizationOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "PdfViewerAdjustJpgQuality completed: ", $response->getFile()->getPath();
        echo "\n";                            
    }
}
