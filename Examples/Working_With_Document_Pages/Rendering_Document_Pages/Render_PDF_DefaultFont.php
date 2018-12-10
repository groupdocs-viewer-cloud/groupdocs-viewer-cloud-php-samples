<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample2.pdf";
    $folderName = "viewerdocs";

    $pdfFileOptions = new \GroupDocs\Viewer\Model\PdfFileOptions();
    $pdfFileOptions->setDefaultFontName("Arial");

    $request = new Requests\HtmlCreatePdfFileRequest($fileName);
    $request->pdfFileOptions = $pdfFileOptions;

    $response = $viewerApi->htmlCreatePdfFile($request);

    echo "Expected response type is PdfFileInfo where PdfFileName is : ", $response->getPdfFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}