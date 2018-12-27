<?php 

namespace App\Service;

class FileService
{
	public function uploadFile($dataFile,$pathStore,$filename)
	{
		$status = false;
		if($dataFile != '')
		{
			if($this->getSize($dataFile)){
				$status = $dataFile->move($pathStore,$filename);
			}
		}
		return $status;
	}

	public function getName($dataFile)
	{
		return $dataFile->getClientOriginalName();
	}

	public function getSize($dataFile,int $size = 3000000)
	{
		$sizeFile = $dataFile->getSize();
		if($sizeFile <= $size){
			return true;
		}else{
			return false;
		}
	}

	public function deleteFile($fileName,$pathStore,$defaultNameImage = '')
	{
		$status = false;
		if(!empty($fileName) && ($fileName != $defaultNameImage)){
			$fileExist = $this->checkExist($fileName,$pathStore);
			if($fileExist){
				$status = $this->delete($fileName,$pathStore); 
			}
		}
		return $status;
	}

	public function delete($fileName,$pathStore)
	{
		return unlink($pathStore.$fileName);
	}

	public function checkExist($fileName,$pathStore)
	{
		return file_exists($pathStore.$fileName)?true:false;
	}
}