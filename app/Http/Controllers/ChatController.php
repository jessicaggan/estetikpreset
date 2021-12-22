<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


use App\Models\User;
use App\Models\Cart;
use App\Models\Chat;


class ChatController extends Controller
{
    public function chat()
    {   
        if(session('LoggedUser')["role"] === 2){
            $topUser = Chat::orderBy('id','desc')->first();
            if($topUser["userid1"] === session('LoggedUser')["id"]){
                $topUserId = $topUser["userid2"];
            }else{
                $topUserId = $topUser["userid1"];
            }
            // take only top user chat
            $chats = DB::table('chats')
                ->where('userid1','=', $topUserId)
                ->orWhere('userid2','=', $topUserId)
                ->join('users','users.id','=','chats.userid1')
                ->select('chats.*','users.username as sender_username')
                ->get();
            //  list of name chatting with admin descending
            $index=1;
            $names = array();
            $ids = $topUserId;
            // $name = DB::table('users')->select('username')->where('id','=',$topUserId)->get();
            $name=User::where('id','=',$topUserId)->first();
            $names[0]= $name->username;
            foreach( Chat::orderBy('id','desc')->get() as $c){
                if($topUser["userid1"] === session('LoggedUser')["id"]){
                    $name=User::where('id','=',$c->userid2)->first();
                }else{
                    $name=User::where('id','=',$c->userid1)->first();
                    
                }
                // if new name
                $name=$name->username;
                if(!in_array($name,$names)){
                    if($name != "admin"){
                        $names[$index]=$name;
                        $index = $index + 1;
                    }
                }
            }
        }else{
            $chats = DB::table('chats')
                ->where('userid1','=', session("LoggedUser")["id"])
                ->orWhere('userid2','=', session("LoggedUser")["id"])
                ->join('users','users.id','=','chats.userid1')
                ->select('chats.*','users.username as sender_username')
                ->get();
            $names = User::select('username')->get();
            $ids = 5;
        }
        
        return view('chat',['chats'=>$chats, 'names'=>$names, 'chat_id'=>$ids]);
    }

    public function sendMsg(Request $request)
    { 
        $newChat = new Chat;
        
        $newChat->userid1 = session('LoggedUser')["id"];
        $newChat->userid2 = (int)$request->id;
        $newChat->message=$request->message;
        
        $newChat->save();

        return redirect('chat');
    }


   
}
