<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $request = new Requests\HtmlGetPagesRequest($fileName);
    $request->folder = $folderName;

    $response = $viewerApi->htmlGetPages($request);

    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "Page Count: ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}