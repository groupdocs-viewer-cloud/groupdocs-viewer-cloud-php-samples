<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to  render the items in an Outlook Data File by setting a maximum limit
class LimitCountOfItemsToRender {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.ost");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $outlookOptions = new Model\OutlookOptions();
        $outlookOptions->setMaxItemsInFolder(1000);
        $renderOptions->setOutlookOptions($outlookOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "LimitCountOfItemsToRender completed: ", count($response->getPages());
        echo "\n";                            
    }
}
