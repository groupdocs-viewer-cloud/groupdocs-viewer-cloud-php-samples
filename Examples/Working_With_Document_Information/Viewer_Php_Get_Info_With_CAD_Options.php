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

		$renderOptions = new GroupDocs\Viewer\Model\RenderOptions();

		$cadOptions = new GroupDocs\Viewer\Model\CadOptions();
		$cadOptions->setScaleFactor(5.0);

		$renderOptions->setCadOptions($cadOptions);

		$viewOptions->setRenderOptions($renderOptions);

		$request = new GroupDocs\Viewer\Model\Requests\GetInfoRequest($viewOptions);
		$response = $apiInstance->getInfo($request);
		
		echo "Expected response type is InfoResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>