<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to render MS Project document by time interval
class AdjustTimeUnit {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.mpp");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $projectManagementOptions = new Model\ProjectManagementOptions();
        $projectManagementOptions->setTimeUnit(Model\ProjectManagementOptions::TIME_UNIT_DAYS);
        $renderOptions->setProjectManagementOptions($projectManagementOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "AdjustTimeUnit completed: ", count($response->getPages());
        echo "\n";                            
    }
}
