<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetViewerApiInstance();
		
		$viewOptions = new GroupDocs\Viewer\Model\ViewOptions();

		$fileInfo = new GroupDocs\Viewer\Model\FileInfo();
		$fileInfo->setFilePath("viewerdocs\\with-hidden-rows-and-columns.xlsx");
		$fileInfo->setPassword("");
		$fileInfo->setStorageName(CommonUtils::$MyStorage);

		$viewOptions->setFileInfo($fileInfo);
		$viewOptions->setViewFormat(GroupDocs\Viewer\Model\ViewOptions::VIEW_FORMAT_JPG);

		$renderOptions = new GroupDocs\Viewer\Model\RenderOptions();

		$spreadsheetOptions = new GroupDocs\Viewer\Model\SpreadsheetOptions();
		$spreadsheetOptions->setPaginateSheets(true);
		$spreadsheetOptions->setCountRowsPerPage(5);
		$spreadsheetOptions->setRenderHiddenRows(true);

		$renderOptions->setSpreadsheetOptions($spreadsheetOptions);

		$viewOptions->setRenderOptions($renderOptions);

		$request = new GroupDocs\Viewer\Model\Requests\CreateViewRequest($viewOptions);
		$response = $apiInstance->createView($request);
		
		echo "Expected response type is ViewResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>