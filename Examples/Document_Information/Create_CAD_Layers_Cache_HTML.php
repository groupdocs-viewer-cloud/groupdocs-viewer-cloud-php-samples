<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample.DXF";

    $cadOptions = new \GroupDocs\Viewer\Model\CadOptions();
    $cadOptions->layers = array("SLD-0", "DEFAULT_3");

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setEmbedResources(true);
    $htmlOptions->cadOptions = $cadOptions;

    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "CAD -  Pages Count: ", count($response->getPages());
    echo "CAD - FileName: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}