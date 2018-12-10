<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "with-overflowed-text.xlsx";
    $cellsOptions = new \GroupDocs\Viewer\Model\CellsOptions();
    $cellsOptions->setRenderHiddenRows(true);
    $cellsOptions->setRenderHiddenColumns(true);
    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->cellsOptions = $cellsOptions;
    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "Pages Count: ", count($response->getPages());
    echo "FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}