<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample.docx";
    $folderName = "viewerdocs";

    $transformOptions = new \GroupDocs\Viewer\Model\ReorderOptions();
    $transformOptions->setPageNumber(1);
    $transformOptions->setNewPosition(2);

    $request = new Requests\HtmlTransformPagesRequest(
            $fileName, $transformOptions, $folderName
    );

    $response = $viewerApi->htmlTransformPages($request);

    echo "First Page Order: ", $response->getPages()[0]->getNumber();
    echo "<br>";
    echo "Second Page Order: ", $response->getPages()[1]->getNumber();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}