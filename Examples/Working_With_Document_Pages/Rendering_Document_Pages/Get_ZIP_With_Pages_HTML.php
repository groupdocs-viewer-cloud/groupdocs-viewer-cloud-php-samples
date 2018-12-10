<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";
    $resourcesPath = "./r/{resource-name}";

    $request = new Requests\HtmlGetZipWithPagesRequest($fileName);
    $request->resourcePath = $resourcesPath;
    $request->folder = $folderName;

    $response = $viewerApi->htmlGetZipWithPages($request);

    echo "Document Processed.", "";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}