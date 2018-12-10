<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileUrl = "https://www.dropbox.com/s/umokluz338w4ng7%2fone-page.docx";
    $folderName = "viewerdocs";

    $request = new Requests\ImageGetPdfFileFromUrlRequest($fileUrl);
    $request->folder = $folderName;

    $response = $viewerApi->imageGetPdfFileFromUrl($request);

    echo "Document Processed.<br />";
    echo $response;
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}