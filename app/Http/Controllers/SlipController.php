<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SlipRepository;

class SlipController extends Controller
{   
    protected $slip;

    public function __construct()
    {
        $this->slip = new SlipRepository;
    }

    public function allCampers() 
    {
        return $this->slip->allCampers();
    }

    public function getDocWithCamper($docId)
    {
        return $this->slip->getDocWithCamper($docId);
    }

    public function putDocument(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('is_approve');
        $comment = $request->input('approve_reason');
        return $this->slip->putDocument($id,$status,$comment);
    }
    
}
