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

    $request = new Requests\HtmlDeleteAttachmentPagesCacheRequest($fileName, $attachmentName, $folder);

    $response = $viewerApi->htmlDeleteAttachmentPagesCache($request);

    echo "Document Processed";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}