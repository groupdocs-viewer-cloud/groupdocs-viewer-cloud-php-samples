<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();
    $fileName = "sample2.mpp";

    $projectOptions = new \GroupDocs\Viewer\Model\ProjectOptions();
    $projectOptions->setPageSize("A4");
    $projectOptions->setTimeUnit("Unknown");

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);
    $htmlOptions->projectOptions = $projectOptions;

    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "Project - Pages Count: ", count($response->getPages());
    echo "Project - FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}