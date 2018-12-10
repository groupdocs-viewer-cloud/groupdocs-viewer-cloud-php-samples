<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $request = new Requests\GetFontsRequest();
    $response = $viewerApi->getFonts($request);

    $families = $response->getFamilies();

    echo '**** All Available Fonts **** <br />';
    foreach ($families as $key => $family) {
        echo $family->getName();
        echo "<br>";
    }
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}
