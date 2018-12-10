<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folder = "viewerdocs";

    $imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $emailOptions = new \GroupDocs\Viewer\Model\EmailOptions();

    $emailOptions->setPageSize("A0");

    $imageOptions->setEmailOptions($emailOptions);


    $request = new Requests\ImageCreatePagesCacheRequest($fileName);
    $request->folder = $folder;
    $request->imageOptions = $imageOptions;

    $response = $viewerApi->imageCreatePagesCache($request);

    echo "Expected response type is ImagePageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}