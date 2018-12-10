<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folder = "viewerdocs";
    $pageNumber = 1;

    $request = new Requests\HtmlGetPageRequest($fileName, $pageNumber);
    $request->enableResponsiveRendering = true;
    $request->embedResources = true;

    $page = $viewerApi->htmlGetPage($request);

    echo "Page HTML: ", $page;
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}