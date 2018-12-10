<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $documentInfoOptions = new \GroupDocs\Viewer\Model\DocumentInfoOptions();
    $documentInfoOptions->setPassword("");
    $fileName = "one-page.docx";
    $folder = "viewerdocs";

    $request = new Requests\ImageGetDocumentInfoWithOptionsRequest($fileName);
    $request->folder = $folder;
    $request->documentInfoOptions = $documentInfoOptions;

    $response = $viewerApi->imageGetDocumentInfoWithOptions($request);

    echo "Pages Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "File Extension: ", $response->getExtension();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}