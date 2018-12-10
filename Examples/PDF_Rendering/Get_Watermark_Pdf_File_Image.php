<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample-one-page.docx";
    $folderName = "viewerdocs";

    $pdfFileOptions = new \GroupDocs\Viewer\Model\PdfFileOptions();

    $watermark = new \GroupDocs\Viewer\Model\Watermark();
    $watermark->setText("GroupDocs");

    $pdfFileOptions->Watermark = $watermark;

    $request = new Requests\ImageCreatePdfFileRequest(
            $fileName, $pdfFileOptions
    );
    $request->folder = $folderName;

    $response = $viewerApi->imageCreatePdfFile($request);

    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "PDF File Name: ", $response->getPdfFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}