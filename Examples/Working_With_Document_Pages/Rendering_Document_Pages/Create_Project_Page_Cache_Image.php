<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample2.mpp";

    $projectOptions = new \GroupDocs\Viewer\Model\ProjectOptions();
    $projectOptions->setPageSize("A4");
    $projectOptions->setTimeUnit("Unknown");

    $imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $imageOptions->setFormat("jpg");
    $imageOptions->setQuality(100);
    $imageOptions->projectOptions = $projectOptions;

    $request = new Requests\ImageCreatePagesCacheRequest($fileName);
    $request->imageOptions = $imageOptions;

    $response = $viewerApi->imageCreatePagesCache($request);

    echo "Project - Pages Count: ", count($response->getPages());
    echo "Project - FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}