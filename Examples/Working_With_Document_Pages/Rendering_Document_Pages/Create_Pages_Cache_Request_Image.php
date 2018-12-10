<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $filePath = "D://one-page.docx";
    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $imageOptions->setFormat("jpg");

    $json_data = file_get_contents($filePath);
    $file_Json_Data = json_encode($json_data, true);
    $options_Json_Data = json_encode($imageOptions->__toString(), true);

    $request = new Requests\ImageCreatePagesCacheFromContentRequest($file_Json_Data, $options_Json_Data);
    $request->folder = $folderName;
    $request->fileName = $fileName;

    $response = $viewerApi->imageCreatePagesCacheFromContent($request);

    echo "Number of Pages: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}