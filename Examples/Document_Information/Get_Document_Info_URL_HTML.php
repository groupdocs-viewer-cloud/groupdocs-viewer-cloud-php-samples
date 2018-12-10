<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $url = "https://www.dropbox.com/s/j260ve4f90h1p41/one-page.docx?dl=1";
    $fileName = "one-page-url.docx";
    $folder = null;

    $request = new Requests\HtmlGetDocumentInfoFromUrlRequest($url);
    $request->fileName = $fileName;
    $request->folder = $folder;

    $response = $viewerApi->htmlGetDocumentInfoFromUrl($request);

    echo "Pages Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "File Extension: ", $response->getExtension();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}