<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $request = new Requests\ImageCreatePagesCacheRequest($fileName);
    $request->folder = $folderName;
    $request->imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $request->imageOptions->setFormat("jpg");

    $response = $viewerApi->imageCreatePagesCache($request);

    echo "Expected response type is ImagePageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}