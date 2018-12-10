<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $getPagesRequest = new Requests\HtmlGetPagesRequest($fileName);
    $getPagesRequest->embedResources = false;
    $getPagesRequest->folder = $folderName;
    $getPagesRequest->startPageNumber = 1;
    $getPagesRequest->countPages = 1;

    $pagesCollection = $viewerApi->htmlGetPages($getPagesRequest);
    $page = $pagesCollection->getPages()[0];


    foreach ($page->getResources() as $key => $resource) {
        $getResourceRequest = new Requests\HtmlGetPageResourceRequest(
                $fileName, $page->getNumber(), $resource->getName(), $folderName, $storage
        );

        $getResourceResponse = $viewerApi->htmlGetPageResource($getResourceRequest);
    }
    echo "<br>";
    echo "Document Page Resources Processed";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}