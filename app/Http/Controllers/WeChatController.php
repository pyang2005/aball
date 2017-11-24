<?php

namespace App\Http\Controllers;

use Log;
use App\Models\ABUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use EasyWeChat\Message\News;

class WeChatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve(Request $request)
    {
        //Log::info('request arrived.'.json_encode($request->all())); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');

        $wechat->server->setMessageHandler(function($message){

            $welcome = new News([
                    'title'       => '欢迎关注深圳篮球圈',
                    'description' => '来吧朋友，一起战斗！',
                    'url'         => 'http://www.tomes.cn/news',
                    'image'       => 'http://www.tomes.cn/assets/images/logo2.jpg',
                ]);

            switch ($message->MsgType) {
                case 'event': 
                    if($message->Event == 'subscribe')
                        Log::info(json_encode($message));
                        $newUser = ABUser::updateOrCreate(
                                                ['wechat_id' => $message->FromUserName],
                                                ['last_login' => Carbon::now()]
                                            );
                        return $welcome;
                    break;
                case 'text':
                    return '傻球！ 你终于来啦？ 给我发语音就告诉你入口！';
                    break;
                case 'image':
                    return '二球，我暂时还不认识图片，你等着哈！';
                    break;
                case 'voice':
                    //return '收到语音消息';
                    return $welcome;
                    break;
                case 'video':
                    return '二球，我暂时还不认识视频，你等着哈！';
                    break;
                case 'location':
                    return '收到你发的坐标消息，我有空的死后处理';
                    break;
                case 'link':
                    return '傻球，不要乱发链接！我不会访问的！';
                    break;
                // ... 其它消息
                default:
                    return '你乱发什么呢？';
                    break;
            }
        });

        //Log::info('return response.');

        return $wechat->server->serve();
    }

}
