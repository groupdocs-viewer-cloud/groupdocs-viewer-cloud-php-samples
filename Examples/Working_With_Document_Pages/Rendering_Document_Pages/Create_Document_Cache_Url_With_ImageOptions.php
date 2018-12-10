<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileUrl = "https://www.dropbox.com/s/umokluz338w4ng7%2fone-page.docx";
    $folderName = null;

    $ImageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $ImageOptions->setFormat("jpg");
    $ImageOptions->wordsOptions = new \GroupDocs\Viewer\Model\WordsOptions();

    $request = new Requests\ImageCreatePagesCacheFromUrlRequest($fileUrl, $ImageOptions);
    $request->folder = $folderName;

    $response = $viewerApi->imageCreatePagesCacheFromUrl($request);

    echo "Expected response type is ImagePageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}