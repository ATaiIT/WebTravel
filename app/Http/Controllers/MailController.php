<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MailController extends Controller
{
    public function send_mail() {
    //send mail
        $to_name = "Anh Tai";
        $to_email = "tainguyen.1002200@gmail.com";//send to this email

        $data = array("name"=>"noi dung ten","noi dung body"); //body of mail.blade.php

        Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('test mail nhé');//send this mail with subject
        $message->from($to_email,$to_name);//send from this mail
        });
    //--send mail
    }
}
