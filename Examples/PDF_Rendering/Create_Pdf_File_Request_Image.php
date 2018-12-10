<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $filePath = "D://one-page.docx";
    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $pdfFileOptions = new \GroupDocs\Viewer\Model\PdfFileOptions();

    $json_data = file_get_contents($filePath);
    $file_Json_Data = json_encode($json_data, true);
    $options_Json_Data = json_encode($pdfFileOptions->__toString(), true);

    $request = new Requests\ImageCreatePdfFileFromContentRequest($file_Json_Data, $options_Json_Data);
    $request->folder = $folderName;
    $request->fileName = $fileName;

    $response = $viewerApi->imageCreatePdfFileFromContent($request);

    echo "File Name: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}