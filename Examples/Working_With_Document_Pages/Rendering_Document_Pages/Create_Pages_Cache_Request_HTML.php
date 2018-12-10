<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();
    $filePath = "D://one-page.docx";
    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);

    $json_data = file_get_contents($filePath);
    $file_Json_Data = json_encode($json_data, true);
    $options_Json_Data = json_encode($htmlOptions->__toString(), true);

    $request = new Requests\HtmlCreatePagesCacheFromContentRequest($file_Json_Data, $options_Json_Data);
    $request->folder = $folderName;
    //$request->fileName = $fileName;

    $response = $viewerApi->htmlCreatePagesCacheFromContent($request);

    echo "Number of Pages: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}