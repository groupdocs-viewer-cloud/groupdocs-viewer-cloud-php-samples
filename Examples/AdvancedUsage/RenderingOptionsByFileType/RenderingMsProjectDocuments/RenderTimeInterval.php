<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render MS Project document using StartDate and EndDate
class RenderTimeInterval {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.mpp");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $projectManagementOptions = new Model\ProjectManagementOptions();
        $projectManagementOptions->setStartDate("2008/06/01");
        $projectManagementOptions->setEndDate("2008/07/01");
        $renderOptions->setProjectManagementOptions($projectManagementOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderTimeInterval completed: ", count($response->getPages());
        echo "\n";                            
    }
}
