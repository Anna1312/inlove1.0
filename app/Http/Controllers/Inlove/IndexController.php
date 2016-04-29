<?php
namespace App\Http\Controllers\Inlove;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by VeryStar.
 * User: Anna
 * Date: 2016/4/20
 * Time: 10:24
 */

class IndexController extends Controller{

    public function index() {
        //博客 用户中心 皮肤切换（切换皮肤背景） 文章 评论 好友空间 好友点赞 关注提醒 绑定微信 微信推送
        $a = 'this is aa';
        $a = DB::table('users')->get();
        $b = DB::table('pages')->lists('title');
        $query = DB::table('pages')->select('title');
        $users = $query->addSelect('body')->get();
//        dd($query);
        return view('inlove/index');
    }

}