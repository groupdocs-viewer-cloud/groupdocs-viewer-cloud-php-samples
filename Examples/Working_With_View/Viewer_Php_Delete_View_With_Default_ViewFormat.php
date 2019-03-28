<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetViewerApiInstance();
		
		$deleteViewOptions = new GroupDocs\Viewer\Model\DeleteViewOptions();

		$fileInfo = new GroupDocs\Viewer\Model\FileInfo();
		$fileInfo->setFilePath("viewerdocs\\one-page.docx");
		$fileInfo->setPassword("");
		$fileInfo->setStorageName(CommonUtils::$MyStorage);

		$deleteViewOptions->setFileInfo($fileInfo);

		$request = new GroupDocs\Viewer\Model\Requests\DeleteViewRequest($deleteViewOptions);
		$apiInstance->deleteView($request);
		
		echo "Expected response type is Void: View deleted with default View Format.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>