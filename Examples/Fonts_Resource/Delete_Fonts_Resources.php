<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $request = new Requests\DeleteFontsCacheRequest();

    $response = $viewerApi->deleteFontsCache($request);

    echo "Fonts Removed";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}
