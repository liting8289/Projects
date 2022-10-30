<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\tdlistService;

class tdlistController extends Controller
{
    private $tdlistService;

    // 建構子
    public function __construct(tdlistService $tdlistService)
    {
        $this->tdlistService = $tdlistService;
    }

    // 查詢所有成員
    public function getAllList(){
        return $this->tdlistService->getAllList();
    }
    //1.新增成員
    public function Insertlist(Request $req){
        return $this->tdlistService->Insertlist(Json_decode($req->getContent()));
    }

    //1.修改成員
    public function Updatelist(Request $req){
        return $this->tdlistService->Updatelist(Json_decode($req->getContent()));
    }

    public function Deletelist(Request $req){
        return $this->tdlistService->Deletelist(Json_decode($req->getContent()));
    }

    
    public function Done(){
        return $this->tdlistService->Done();
    }
    public function Undone(){
        return $this->tdlistService->Undone();
    }
    public function fin(Request $req){
        return $this->tdlistService->fin(Json_decode($req->getContent()));
    }
}