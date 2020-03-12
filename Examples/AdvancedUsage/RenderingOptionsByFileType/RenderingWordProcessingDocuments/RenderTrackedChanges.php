<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render a Word document including tracked changes
class RenderTrackedChanges {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_tracked_changes.docx");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $wordProcessingOptions = new Model\WordProcessingOptions();
        $wordProcessingOptions->setRenderTrackedChanges(true);        
        $renderOptions->setWordProcessingOptions($wordProcessingOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderTrackedChanges completed: ", count($response->getPages());
        echo "\n";                            
    }
}
