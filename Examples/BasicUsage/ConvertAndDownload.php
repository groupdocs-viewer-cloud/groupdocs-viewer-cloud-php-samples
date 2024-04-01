<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to convert and download document without using cloud storage
class ConvertAndDownload {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

        $format ="jpg";
        $path = realpath(__DIR__ . '\Resources') . '\SampleFiles\sample.docx';
        
        $request = new Requests\convertAndDownloadRequest($format, $path);
        
        $result = $apiInstance->convertAndDownload($request);

		echo "ConvertAndDownload completed: ", $result->getFile()->getPath();
        echo "\n";                            
    }
}
