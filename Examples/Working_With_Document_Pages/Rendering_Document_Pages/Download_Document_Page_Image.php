<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";
    $pageNumber = 1;

    $request = new Requests\ImageGetPageRequest($fileName, $pageNumber);
    $request->folder = $folderName;

    $response = $viewerApi->imageGetPage($request);

    echo "Expected response type is System.IO.Stream.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}