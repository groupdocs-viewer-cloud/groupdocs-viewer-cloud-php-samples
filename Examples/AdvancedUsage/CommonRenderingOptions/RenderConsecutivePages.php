<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render consecutive pages
class RenderConsecutivePages {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $renderOptions->setStartPageNumber(1);
        $renderOptions->setCountPagesToRender(2);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderConsecutivePages completed: ", count($response->getPages());
        echo "\n";                            
    }
}
