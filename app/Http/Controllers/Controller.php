<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Webklex\IMAP\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // private $oClient;

	// function __construct(Client $oClient) {
	// 	//https://github.com/Webklex/laravel-imap
 //        $this->oClient = $oClient;
	// }

	// public function getFolder($fName = '007') {
 //        //Connect to the IMAP Server
 //        $this->oClient->connect();

 //        //Get all Mailboxes
 //        /** @var \Webklex\IMAP\Support\FolderCollection $aFolder */
 //        $aFolder = $this->oClient->getFolders();
 //        foreach($aFolder as $oFolder){
 //            if ($oFolder->name == $fName) {
 //                return $oFolder;
 //            }
 //        }
 //        return null;
 //    }

 //    public function getMessageContent($folder) {
 //        $aMessage = $folder->messages()->all()->get();
 //        $arrMessage = [];
 //        foreach($aMessage as $oMessage){
 //            $content = trim($oMessage->getTextBody());
 //            $content = preg_split("/\\r\\n|\\r|\\n/", $content);
 //            $arrMessage[] = $content;
 //            // if($oMessage->moveToFolder('INBOX.read') == true){
 //            //     echo 'Message has ben moved';
 //            // }else{
 //            //     echo 'Message could not be moved';
 //            // }
 //        }
 //        return $arrMessage;
 //    }

 //    public function getAllEmailContentFromFolder($folder) {
 //    	$objFolder = $this->getFolder($folder);
 //    	if (!$objFolder) {
 //    		return [];
 //    	}
 //    	return $this->getMessageContent($objFolder);
 //    }
}
