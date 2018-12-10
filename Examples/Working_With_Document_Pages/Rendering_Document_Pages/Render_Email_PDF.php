<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "with-attachment.msg";
    $folderName = "viewerdocs";

    $imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $emailOptions = new \GroupDocs\Viewer\Model\EmailOptions();

    $emailOptions->setPageSize("A0");

    $imageOptions->setEmailOptions($emailOptions);


    $request = new Requests\ImageCreatePdfFileRequest($fileName);
    $request->folder = $folderName;
    $request->imageOptions = $imageOptions;

    $response = $viewerApi->imageCreatePdfFile($request);

    echo "Expected response type is PdfFileInfo where PdfFileName is : ", $response->getPdfFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}