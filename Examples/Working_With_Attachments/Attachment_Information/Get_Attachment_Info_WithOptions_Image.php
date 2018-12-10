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

    $options = new \GroupDocs\Viewer\Model\DocumentInfoOptions();
    $options->setAttachmentPassword($attachmentPassword);

    $request = new Requests\ImageGetAttachmentInfoWithOptionsRequest($fileName, $attachmentName, $options, $folder);

    $response = $viewerApi->imageGetAttachmentInfoWithOptions($request);

    echo "Attachment Pages Count: ", count($response->getPages());
    echo "<br>";
    echo "File Extension: ", $response->getExtension();
    echo "<br>";
    echo "Attachment Name: ", $response->getFileName();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}