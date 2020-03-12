<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to  render specified folder of Outlook Data File
class RenderFolder {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.ost");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $outlookOptions = new Model\OutlookOptions();
        $outlookOptions->setFolder("Inbox");
        $renderOptions->setOutlookOptions($outlookOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderFolder completed: ", count($response->getPages());
        echo "\n";                            
    }
}
