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
    $pageNumber = 1;

    $request = new Requests\HtmlGetAttachmentPageRequest($fileName, $attachmentName, $pageNumber);
    $request->attachmentPassword = $attachmentPassword;
    $request->folder = $folder;

    $response = $viewerApi->htmlGetAttachmentPage($request);

    echo "File Processed successfully";
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}