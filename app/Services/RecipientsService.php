<?php


namespace App\Services;
use App\Recipient;


class RecipientsService
{
   
   public function getRecipients()
   {
   	 return Recipient::all();
   }

   public function store($request)
   {


   	  $recipientObj					= new Recipient();
   	  $recipientObj->staff_id  	=$request['staff_id'];
   	  $recipientObj->name  			=$request['name'];
   	  $recipientObj->surname		=$request['surname'];
   	  $recipientObj->dob 			=$request['dob'];
   	  $recipientObj->gender 		=$request['gender'];
   	  $recipientObj->save();
   	  return $recipientObj;

   }

   public function update($request ,$id)
   {


   }
}
