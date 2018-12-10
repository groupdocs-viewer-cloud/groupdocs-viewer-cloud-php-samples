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

    $imageOptions = new \GroupDocs\Viewer\Model\ImageOptions();
    $imageOptions->setFormat("jpg");

    $request = new Requests\ImageCreateAttachmentPagesCacheRequest($fileName, $attachmentName, $imageOptions);
    $request->attachmentPassword = $attachmentPassword;
    $request->folder = $folder;

    $response = $viewerApi->imageCreateAttachmentPagesCache($request);

    echo "Attachment Count: ", count($response->getPages());
    echo "<br>";
    echo "File Name: ", $response->getFileName();
    echo "<br>";
    echo "Attachment Name: ", $response->getAttachmentName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}