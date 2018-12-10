<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folderName = "viewerdocs";

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);
    $htmlOptions->setExcludeFonts(true);

    $request = new Requests\HtmlGetPagesRequest($fileName);
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlGetPages($request);

    echo "Pages Count: ", count($response->getPages());
    echo "<br />FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}