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

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $htmlOptions->setAttachmentPassword("password");

    $request = new Requests\HtmlCreateAttachmentPagesCacheRequest($fileName, $attachmentName, $htmlOptions);
    $request->attachmentPassword = $attachmentPassword;
    $request->folder = $folder;

    $response = $viewerApi->htmlCreateAttachmentPagesCache($request);

    echo "Attachment Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "Attachment Name: ", $response->getAttachmentName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}