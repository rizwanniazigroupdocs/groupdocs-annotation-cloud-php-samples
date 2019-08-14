<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetStorageApiInstance();

		$request = new GroupDocs\Annotation\Model\Requests\ObjectExistsRequest("annotationdocs\one-page.docx", CommonUtils::$MyStorage);
		$response = $apiInstance->objectExists($request);
		
		echo "Expected response type is ObjectExist: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>