<?php 

namespace App\Service;

class FileService
{
	public function uploadFile($dataFile,$pathStore)
	{
		if($dataFile != '')
		{
			if($this->getSize($dataFile)){
				$nameFile = $this->getName($dataFile);
				$nameFile = time(0).$nameFile;
				$dataFile->move($pathStore,$nameFile);
			}
		}
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

	public function deleteFile($fileName,$pathStore,$defaultUserImage = '')
	{
		if(($fileName != '') && ($fileName != $defaultUserImage)){
			$fileExist = $this->checkExist($fileName,$pathStore);
			if($fileExist){
				$this->delete($fileName,$pathStore);
			}
		}
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