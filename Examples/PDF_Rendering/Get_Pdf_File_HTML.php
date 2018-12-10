<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $request = new Requests\HtmlGetPdfFileRequest($fileName);
    $request->folder = $folderName;

    $response = $viewerApi->htmlGetPdfFile($request);

    echo "Document Processed.<br />";
    echo $response;
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}