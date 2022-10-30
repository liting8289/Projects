<?php
namespace App\Service;

// 引入剛剛寫的MemberRepository
use App\Repository\tdlistRepository;

class tdlistService
{
  private $tdlistRepository;
  public function __construct(tdlistRepository $tdlistRepository)
  {
    $this->tdlistRepository = $tdlistRepository;
  }
  // 查詢所有成員
  public function getAllList()
  {
    $lists = $this->tdlistRepository->getAllList();
    return $lists;
  }
  
  //3.新增成員
  public function Insertlist($req)
  {
    $res = $this->tdlistRepository->Insertlist($req);
    return $res;
  }

  public function Updatelist($req)
  {
    $res = $this->tdlistRepository->Updatelist($req);
    return $res;
  }

  public function Deletelist($req)
  {
    $res = $this->tdlistRepository->Deletelist($req);
    return $res;
  }
  
  
  public function Done()
  {
    $res = $this->tdlistRepository->Done();
    return $res;
  }
  public function Undone()
  {
    $res = $this->tdlistRepository->Undone();
    return $res;
  }
  public function fin($req)
  {
    $res = $this->tdlistRepository->fin($req);
    return $res;
  }
}