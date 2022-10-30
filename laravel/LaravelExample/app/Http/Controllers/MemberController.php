<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\memberService;

class MemberController extends Controller
{
   
    private $memberService;

    // 建構子
    public function __construct(MemberService $memberService)
    {
        $this->memberService = $memberService;
    }

    // 查詢所有成員
    public function getAllMembers(){
        return $this->memberService->getAllMembers();
    }
    //1.新增成員
    public function InsertMembers(Request $req){
        return $this->memberService->InsertMembers(Json_decode($req->getContent()));
    }

    //1.修改成員
    public function UpdateMembers(Request $req){
        return $this->memberService->UpdateMembers(Json_decode($req->getContent()));
    }

    public function DeleteMembers(Request $req){
        return $this->memberService->DeleteMembers(Json_decode($req->getContent()));
    }

}


