<?php

use GroupDocs\Viewer\Model;
use GroupDocs\Viewer\Model\Requests;

// This example demonstrates how to use custom field labels
class RenameEmailFields {
    public static function Run() {
        $apiInstance = Utils::GetViewApiInstance();

		$viewOptions = new Model\ViewOptions();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("SampleFiles/sample.msg");				
        $viewOptions->setFileInfo($fileInfo);
        $viewOptions->setViewFormat(Model\ViewOptions::VIEW_FORMAT_HTML);
        $renderOptions = new Model\HtmlOptions();
        $emailOptions = new Model\EmailOptions();
        $emailOptions->setFieldLabels([
            self::GetFieldLabel("From", "Sender"),
            self::GetFieldLabel("To", "Receiver"),
            self::GetFieldLabel("Sent", "Date"),
            self::GetFieldLabel("Subject", "Topic")
            ]);
        $renderOptions->setEmailOptions($emailOptions);
        $viewOptions->setRenderOptions($renderOptions);

		$request = new Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "RenameEmailFields completed: ", count($response->getPages());
        echo "\n";                            
    }

    public static function GetFieldLabel($field, $label) {
        $fieldLabel = new Model\FieldLabel();
        $fieldLabel->setField($field);
        $fieldLabel->setLabel($label);
        return $fieldLabel;
    }
}
