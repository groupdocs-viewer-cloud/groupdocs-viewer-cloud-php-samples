<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folder = "viewerdocs";

    $request = new Requests\ImageGetDocumentInfoRequest($fileName);
    $request->folder = $folder;

    $response = $viewerApi->imageGetDocumentInfo($request);

    echo "Pages Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "File Extension: ", $response->getExtension();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}