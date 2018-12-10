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

    $request = new Requests\HtmlGetAttachmentPagesRequest($fileName, $attachmentName);
    $request->attachmentPassword = $attachmentPassword;
    $request->folder = $folder;

    $response = $viewerApi->htmlGetAttachmentPages($request);

    echo "Attachment Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "Attachment Name: ", $response->getAttachmentName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}