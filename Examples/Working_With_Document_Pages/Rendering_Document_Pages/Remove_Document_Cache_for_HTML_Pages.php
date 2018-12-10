<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $request = new Requests\HtmlDeletePagesCacheRequest(
            $fileName, $folderName
    );

    $viewerApi->htmlDeletePagesCache($request);

    echo "Document Cache Removed.";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}