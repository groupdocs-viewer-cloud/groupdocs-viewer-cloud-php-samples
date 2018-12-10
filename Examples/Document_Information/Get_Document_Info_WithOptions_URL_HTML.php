<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $documentInfoOptions = new \GroupDocs\Viewer\Model\DocumentInfoOptions();
    $documentInfoOptions->slidesOptions = new \GroupDocs\Viewer\Model\SlidesOptions();
    $documentInfoOptions->slidesOptions->setRenderNotes(true);

    $url = "https://www.dropbox.com/s/r2eioe2atushqcf/with-notes.pptx?dl=1";
    $fileName = "with-notes-url.pptx";
    $folder = "slides/pptx";


    $request = new Requests\HtmlGetDocumentInfoFromUrlWithOptionsRequest($url);
    $request->fileName = $fileName;
    $request->folder = $folder;
    $request->documentInfoOptions = $documentInfoOptions;

    $response = $viewerApi->htmlGetDocumentInfoFromUrlWithOptions($request);

    echo "Pages Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "File Extension: ", $response->getExtension();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}