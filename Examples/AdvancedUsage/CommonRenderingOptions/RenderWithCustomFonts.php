<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to  to set custom font source when rendering documents
class RenderWithCustomFonts {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/with_missing_font.odg");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        
        // NOTE: Upload fonts to the folder using storage API before rendering
        $viewOptions->setFontsPath("Fonts");

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenderWithCustomFonts completed: ", count($response->getPages());
        echo "\n";                            
    }
}
