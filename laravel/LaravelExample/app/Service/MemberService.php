<?php
namespace App\Service;//引入

// 引入剛剛寫的MemberRepository
use App\Repository\MemberRepository;

class memberService
{
    
  private $memberRepository;
  public function __construct(MemberRepository $memberRepository)
  {
    $this->memberRepository = $memberRepository;
  }
  // 查詢所有成員
  public function getAllMembers()
  {
    $members = $this->memberRepository->getAllMembers();
    return $members;
  }

  //3.新增成員
  public function InsertMembers($req)
  {
    $res = $this->memberRepository->InsertMembers($req);
    return $res;
  }

  public function UpdateMembers($req)
  {
    $res = $this->memberRepository->UpdateMembers($req);
    return $res;
  }

  public function DeleteMembers($req)
  {
    $res = $this->memberRepository->DeleteMembers($req);
    return $res;
  }
}