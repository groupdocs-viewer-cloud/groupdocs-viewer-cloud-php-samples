<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetViewerApiInstance();
		
		$viewOptions = new GroupDocs\Viewer\Model\ViewOptions();

		$fileInfo = new GroupDocs\Viewer\Model\FileInfo();
		$fileInfo->setFilePath("viewerdocs\\three-layouts.dwf");
		$fileInfo->setPassword("");
		$fileInfo->setStorageName(CommonUtils::$MyStorage);

		$viewOptions->setFileInfo($fileInfo);

		$renderOptions = new GroupDocs\Viewer\Model\HtmlOptions();
		$renderOptions->setIsResponsive(true);

		$viewOptions->setRenderOptions($renderOptions);

		$request = new GroupDocs\Viewer\Model\Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "Expected response type is ViewResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>