<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folder = "viewerdocs";

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);
    $htmlOptions->setEnableMinification(true);

    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "Minified HTML Pages Count: ", count($response->getPages());
    echo "Minified - FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}