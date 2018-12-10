<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);

    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->folder = $folderName;
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "Expected response type is HtmlPageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}