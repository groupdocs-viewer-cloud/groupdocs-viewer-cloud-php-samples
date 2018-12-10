<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "with-attachment.msg";
    $attachmentName = "TestAttachment-File.docx";
    $folder = "viewerdocs";
    $password = null;
    $attachmentPassword = null;
    $storage = null;

    $getPagesRequest = new Requests\HtmlGetAttachmentPagesRequest($fileName, $attachmentName);
    $getPagesRequest->attachmentPassword = $attachmentPassword;
    $getPagesRequest->folder = $folder;
    $getPagesRequest->startPageNumber = 1;
    $getPagesRequest->countPages = 1;

    $getPagesResponse = $viewerApi->htmlGetAttachmentPages($getPagesRequest);

    echo "Document Pages Processed <br />";

    $page = $getPagesResponse->getPages()[0];

    foreach ($page->getResources() as $key => $resource) {
        $getResourceRequest = new Requests\HtmlGetAttachmentPageResourceRequest(
                $fileName, $attachmentName, $page->getNumber(), $resource->getName(), $folder, $storage
        );

        $getResourceResponse = $viewerApi->htmlGetAttachmentPageResource($getResourceRequest);
    }
    echo "<br>";
    echo "Document Page Resources Processed";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}