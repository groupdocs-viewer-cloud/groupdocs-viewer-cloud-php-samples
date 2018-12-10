<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "with-attachment.msg";
    $attachmentName = "TestAttachment-File.docx";
    $folder = "viewerdocs";
    $password = null;
    $storage = null;

    $request = new Requests\HtmlGetAttachmentsRequest($fileName, $password, $folder, $storage);

    $response = $viewerApi->htmlGetAttachments($request);

    echo "Attachment Count: ", count($response->getAttachments());
    echo "<br>";
    echo "Attachment Name: ", $response->getAttachments()[0]->getName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}