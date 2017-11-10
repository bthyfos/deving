<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/26/2017
 * Time: 7:11 AM
 */

namespace App\Http\Requests;
use App\Http\Requests\Requests;


class ProductRequest extends  Requests
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name'             =>'required|alpha_dash',
            'type_id'          =>'required|unique:name',
            'specification'    =>'required|string',
            'ordered_date'     =>'required|date_format:"d.m.Y"',
            'received_date'    =>'required|date_format:"d.m.Y"',
            'price'           => 'required|deimal:10.2',
            'unit'             =>'required|integer',

        ];
    }

}