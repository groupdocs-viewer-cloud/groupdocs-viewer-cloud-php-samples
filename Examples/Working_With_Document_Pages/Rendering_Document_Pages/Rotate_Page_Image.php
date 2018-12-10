<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample.docx";
    $folderName = "viewerdocs";

    $transformOptions = new \GroupDocs\Viewer\Model\RotateOptions();
    $transformOptions->setPageNumber(1);
    $transformOptions->setAngle(90);

    $request = new Requests\ImageTransformPagesRequest(
            $fileName, $transformOptions, $folderName
    );

    $response = $viewerApi->imageTransformPages($request);

    echo "First Page Angle: ", $response->getPages()[0]->getAngle();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}