<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileUrl = "https://www.dropbox.com/s/umokluz338w4ng7%2fone-page.docx";
    $folderName = "viewerdocs";
    $format = "jpg";

    $request = new Requests\ImageGetPagesFromUrlRequest($fileUrl);
    $request->folder = $folderName;
    $request->format = $format;

    $response = $viewerApi->imageGetPagesFromUrl($request);

    echo "Expected response type is ImagePageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}