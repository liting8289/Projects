<?php
namespace App\Repository;

use Illuninate\support\Facades\DB;//laravel 不認識原生SQL 所以要這段

use App\Models\Member;
    // 查詢所有成員
class MemberRepository
{
     public function getAllMembers()
  {
      // 這種方法是Laravel的ORM，簡單來說就是可以更安全的做SQL，缺點就是會影響一點效能
      // 有興趣了解的可以上網查一下ORM是什麼，這邊就是查詢所有成員
      return Member::all();

      // 這種方法可以直接寫原生的SQL語法
      // 不過要在上面加上 use Illuminate\Support\Facades\DB;
      // $ret = DB::select('SELECT * From member');//=funtion 
      // return $ret;

  }
  //2.新增成員
  public function InsertMembers($req)
  {
    $bool = Member::create(['name'=>$req->name,'student_id'=>$req->student_id,'identity'=>$req->identity]);
    return $bool;
}

//2.修改成員
public function UpdateMembers($req)
{
    $res = Member::where('id','=',$req->id)->update(
        [
            "name"=>$req->name,
          "student_id"=>$req->student_id,
          "identity"=> $req->identity
         ]
    );
    return $res;
}

// 2.新增成員
public function DeleteMembers($req)
{
    $res = Member::where('id','=',$req->id)->delete();
    return $res;
}
}
 