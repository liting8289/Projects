<?php
namespace App\Repository;

use Illuninate\support\Facades\DB;//laravel 不認識原生SQL 所以要這段

use App\Models\tdlist;
    // 查詢所有成員
class tdlistRepository
{
    // 查詢所有成員
    public function getAllList()
    {
        // 這種方法是Laravel的ORM，簡單來說就是可以更安全的做SQL，缺點就是會影響一點效能
        // 有興趣了解的可以上網查一下ORM是什麼，這邊就是查詢所有成員
        return tdlist::all();
  
        // 這種方法可以直接寫原生的SQL語法
        // 不過要在上面加上 use Illuminate\Support\Facades\DB;
        // $ret = DB::select('SELECT * From member');
        // return $ret;
  
    }   
    //2.新增成員
  public function Insertlist($req)
  {
    $bool = tdlist::create(
        ['work'=>$req->work,
        'act'=>"n" ]);
    
    return $bool;
}

    //2.修改成員
    public function Updatelist($req)
    {
       $res = tdlist::where('id','=',$req->id)->update(
           [
                "work"=>$req->work,
                "act"=>$req->act
             ]
    );
    return $res;
    }

    // 2.刪除成員
    public function Deletelist($req)
    {
       $res = tdlist::where('id','=',$req->id)->delete();
       return $res;
    }


        public function Done()
    {
        $res = tdlist::where('act','=',"y")->get();
        return $res;
    }
    public function Undone()
    {
        $res = tdlist::where('act','=',"n")->get();
        return $res;
    }
    public function fin($req)
    {
        $res = tdlist::where('id','=',$req->id)->update(
            ['act'=>"y"]
        );
        return $res;
    }
}
 