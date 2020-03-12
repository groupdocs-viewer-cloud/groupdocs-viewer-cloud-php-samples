<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to protect output PDF document
class PdfViewerProtectPdf {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_PDF);
        $renderOptions = new Model\PdfOptions();
        $renderOptions->setPermissions(Model\PdfOptions::PERMISSIONS_DENY_MODIFICATION);
        $renderOptions->setPermissionsPassword("p123");
        $renderOptions->setDocumentOpenPassword("o123");
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "PdfViewerProtectPdf completed: ", $response->getFile()->getPath();
        echo "\n";                            
    }
}
