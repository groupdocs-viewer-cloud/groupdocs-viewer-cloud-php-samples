<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "sample.DXF";

    $request = new Requests\HtmlGetDocumentInfoRequest($fileName);

    $response = $viewerApi->htmlGetDocumentInfo($request);

    echo "CAD Layers Count: ", count($response->getLayers());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}