<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecipientsService;
use Redirect;
use App\Recipient;

class RecipientsController extends Controller
{
      public $recipients;

      public function __construct(RecipientsService $RecipientsService)
      {

        $this->recipients = $RecipientsService;

      }

    public function index()
    {
        $recipient = $this->recipients->getRecipients();
        
        return view('Recipients.index',compact('recipient'));
        
    }


    public function create(Request $request)
    {
       
    }

    public function store(Request $request)
    {
       $staff           =   $this->recipients->store($request);
        return Redirect::to('/recipients'); 
    }

      public function searchRecipient()
      {
          $query = \Input::get('q');
          $recipients = \DB::table('recipients')

              ->whereRaw(
                  "CONCAT(`recipients`.`name`, ' ', `recipients`.`surname`) LIKE '%{$query}%'")
              ->select(
                  array
                  (
                      'recipients.id as id',
                      'recipients.name as name',
                      'recipients.surname as surname',
                  )
              )
              ->get();

          $data = array();
          foreach ($recipients as $recipient) {
              $data[] = array
              (
                  "name" => " {$recipient->name} > {$recipient->surname}",
                  "id" => "{$recipient->id}",
//                "hseSurname"        => "{$user->surname}",
//                "hseCellphone"      => "{$user->cellphone}",
//                "hseCompany"        => "{$user->company}",
              );
          }
          return $data;
      }

        public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
      return 'okay';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipient    =Recipient::find($id);
        $recipient->delete($id);
        return Redirect::to('/recipients');
    }
}
