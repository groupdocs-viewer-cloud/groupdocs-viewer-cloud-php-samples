<?php

use GroupDocs\Viewer\Model\Requests;

include(dirname(dirname(__DIR__)) . '\CommonUtils.php');

try {
    $viewerApi = CommonUtils::GetViewerApiInstance();

    $fileName = "one-page.docx";
    $folder = "viewerdocs";

    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
    $emailOptions = new \GroupDocs\Viewer\Model\EmailOptions();

    $htmlOptions->setEmbedResources(true);

    $arrayFieldLabel = array(new \GroupDocs\Viewer\Model\FieldLabel());
    $fieldLabel = new \GroupDocs\Viewer\Model\FieldLabel();

    $fieldLabel->setField("From");
    $fieldLabel->setLabel("Sender");
    array_push($arrayFieldLabel, $fieldLabel);

    $fieldLabel->setField("To");
    $fieldLabel->setLabel("Receiver");
    array_push($arrayFieldLabel, $fieldLabel);

    $emailOptions->setFieldLabels($arrayFieldLabel);

    $htmlOptions->setEmailOptions($emailOptions);


    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->folder = $folder;
    $request->htmlOptions = $htmlOptions;

    $response = $viewerApi->htmlCreatePagesCache($request);

    echo "Expected response type is HtmlPageCollection where PageCount is : ", count($response->getPages());
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
    PHP_EOL;
}