<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $response = $viewerApi->getSupportedFileFormats();

    echo '<b>Supported file formats<br /></b>';
    foreach ($response->getFormats() as $key => $format) {
        echo $format->getFileFormat() . " - " . $format->getExtension(), "<br />";
    }
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}