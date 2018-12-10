<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileUrl = "https://www.dropbox.com/s/umokluz338w4ng7%2fone-page.docx";
    $folderName = "viewerdocs";

    $pdfFileOptions = new \GroupDocs\Viewer\Model\PdfFileOptions();
    $pdfFileOptions->wordsOptions = new \GroupDocs\Viewer\Model\WordsOptions();

    $request = new Requests\HtmlCreatePdfFileFromUrlRequest(
            $file->url = $fileUrl, $pdfFileOptions
    );
    $request->folder = $folderName;

    $response = $viewerApi->htmlCreatePdfFileFromUrl($request);

    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "PDF File Name: ", $response->getPdfFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}