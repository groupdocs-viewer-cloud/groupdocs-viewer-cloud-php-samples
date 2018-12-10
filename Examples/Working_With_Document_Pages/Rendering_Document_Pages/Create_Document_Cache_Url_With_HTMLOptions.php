<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileUrl = "https://www.dropbox.com/s/umokluz338w4ng7%2fone-page.docx";
    $folderName = null;

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);
    $htmlOptions->wordsOptions = new \GroupDocs\Viewer\Model\WordsOptions();

    $request = new Requests\HtmlCreatePagesCacheFromUrlRequest($fileUrl, $htmlOptions);
    $request->folder = $folderName;

    $response = $viewerApi->htmlCreatePagesCacheFromUrl($request);

    echo "Expected response type is HtmlPageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}