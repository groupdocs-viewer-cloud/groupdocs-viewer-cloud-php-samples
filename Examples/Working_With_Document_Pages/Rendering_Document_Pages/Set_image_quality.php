<?php


  //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

  $configuration = new GroupDocs\Viewer\Configuration();
  $configuration->setAppSid("xxx-xx");
  $configuration->setAppKey("xxxx");
  $viewerApi = new GroupDocs\Viewer\ViewerApi($configuration); 

  try 
  {
    $fileName = "sample2.pdf";
	$PdfOptions = new \GroupDocs\Viewer\Model\PdfOptions();
	$PdfOptions->setImageQuality("High");
	
    $htmlOptions = new \GroupDocs\Viewer\Model\HtmlOptions();
	$htmlOptions->PdfOptions = $PdfOptions;
    $request = new Requests\HtmlCreatePagesCacheRequest($fileName);
    $request->htmlOptions = $htmlOptions;            
    
    $response = $viewerApi->htmlCreatePagesCache($request);
	
    echo "Pages Count: ",  count($response->getPages());
    echo "FileName: ",  $response->getFileName();
  } 
  catch (Exception $e) 
  {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
  }
?>