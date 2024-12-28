<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Brand;
use App\Models\Ticket;
use App\Models\Notifications;
use Notification;
use Kutia\Larafirebase\Facades\Larafirebase;
use Illuminate\Support\Facades\Auth;

use App\Notifications\SendPushNotification;
  
class NotificationController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $options = User::paginate(1000);
        $event = Event::paginate(1000);
        return view('admin/notification',compact('options','event'));
    } 

    
  
     /**
     * Write code on Method
     *
     * @return response()
     */

     public function sendNotification(Request $request)
     {
        $event = $request->optionsEvent;
        $user = $request->options;


        
        
        switch (true) {
            case isset($user) && count($user) > 0:
                foreach ($user as $string) {
                    $arrayUser = explode(',', $string);
                }
                $fcmTokens = User::whereNotNull('fcm_token')->whereIn('id', $arrayUser)->pluck('fcm_token')->toArray();
                break;
                
            case isset($event) && count($event) > 0:
                foreach ($event as $string) {
                    $arrayEvent = explode(',', $string);
                }
                $user_ids = Ticket::whereIn('event_id', $arrayEvent)->pluck('user_id');
                $fcmTokens = User::whereNotNull('fcm_token')->whereIn('id', $user_ids)->pluck('fcm_token')->toArray();
                break;
             
            case isset($request->brand_id):
                    $brand = Brand::find($request->brand_id);
                    $userBrand = User::find($brand->user_id);
                    $fcmTokens = [$userBrand->fcm_token];
                    if($fcmTokens){
                        break;
                    }
                    else{
                        return response()->json('User Dont have token fcm');
                    }
            case isset($request->event_id):
                    //$event = Event::find($request->event_id);
                    //$brand = Brand::find($event->brand_id );
                    //$userBrand = User::find($brand->user_id);
                    
                    $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();;
                    if($fcmTokens){
                        break;
                    }
                    else{
                            return response()->json('User Dont have token fcm');
                    }
            default:
                $firebaseToken = User::whereNotNull('fcm_token')->pluck('fcm_token')->all();
                break;
        }
        
        if (isset($fcmTokens)) {
            $firebaseToken = $fcmTokens;
        }




            $notifiableUsers = [];
            foreach ($firebaseToken as $token) {
                $user = User::where('fcm_token', $token)->first();
                if ($user) {
                    $notifiableUsers[] = $user;
                }
            }
            $notifications = [];
            foreach ($notifiableUsers as $user) {
                Notifications::insert([
                    'user_id' => $user->id,
                    'text' =>  $request->title,
                    'body' => $request->body,
                    'admin_id' =>  Auth::user()->id
                ]);
            }

            $SERVER_API_KEY = env('FCM_SERVER_KEY');
     
            $data = [
                "registration_ids" => $firebaseToken,
                "notification" => [
                    "title" => $request->title,
                    "body" => $request->body,  
                ]
            ];
         $dataString = json_encode($data);
       
         $headers = [
             'Authorization: key=' . $SERVER_API_KEY,
             'Content-Type: application/json',
         ];
       
         $ch = curl_init();
         
         curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
                  
         $response = curl_exec($ch);
     
         return back()->with('success', $response  );
     } 



    public function send (){
        
        Notification::send(null,new SendPushNotification($title,$message,$fcmTokens));

    }

    public function storeToken(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update(['fcm_token'=>$request->token]);
        return response()->json(['Token successfully stored.']);
    }
}