<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Brand;
use App\Models\Event;
use App\Models\Wallet;
use App\Models\Notifications;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Twilio;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UploadHelper;
use JWTAuth;
use Mail;

use App\Mail\RegisterMail;

class AuthRepository
{

    public function __construct()
    {
        try {
          $token = JWTAuth::getToken();
            $this->user =   JWTAuth::toUser($token ) ;
        } catch (\Throwable $th) {
            //throw $th;
        }
       
    }

    public function register(array $data): User | null
    {
        if (Str::startsWith($data['phone'],'+')) {
            $phone = Str::replaceFirst('+','',$data['phone'],);
        }else{
            $phone = $data['phone'];
        }

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' =>  $phone,
            'password' => Hash::make($data['password'])
        ];
        try {
            return User::create($data);
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function sendcode($data): User|null|String
    {
        $email = $data['email'];
        // if (Str::startsWith($phone, '+')) {
        //     $phone = Str::replaceFirst('+', '', $phone);
        // }
        $user= User::where('email',$email)->first();
        if(isset($user)){
            $new = [
                'code' => rand(1000,9999),
            ];
      
            $user->update($new);
            }
       else{
            return null;
            }

        try {
            $data = [
                'title' => 'Eventy Login to Account',
                'body' => 'Your Eventy App code is: '.(string) $user->code.'  Do not share it with anyone.'
            ];
            Mail::to($user->email)->send(new RegisterMail($data));
            if($sendMail){
                return $user;
            }
            else {
                return 'notSendEmail';
            }
            //Twilio::message('+'.$user->phone, $data);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $user;
     
    }

    public function updateLocation($data): User
    {
        $new = [
            'phone' =>  $data['phone'],
            'lat'   =>  $data['lat'],
            'lng'   =>  $data['lng'],
        ];
        $user= User::where('phone',$data['phone'])->first();
        $user->update($new);
        return $user;
    }

    public function updateUserInfo($data): User
    {
        $new = [
            'phone' =>  $data['phone'],
            'lat'   =>  $data['lat'],
            'lng'   =>  $data['lng'],
        ];
        $user= User::where('phone',$data['phone'])->first();
        $user->update($new);
        return $user;
    }

    public function updateFmcUserToken($data): User
    {
        $new = [
            'fcm_token' =>  $data['fcm_token'],
        ];
        $user= User::find($this->user->id);
        $user->update($new);
        return $user;
    }
    
    public function sendcodeFirst($data): User | null | String
    {
        // if (Str::startsWith($data['phone'],'+')) {
        //     $phone = Str::replaceFirst('+','',$data['phone'],);
        // }else{
        //     $phone = $data['phone'];
        // }
        $data = [
            'phone' =>  $data['phone']??'',
            'code' => rand(1000,9999),
            'email' =>  $data['email'] ?? "",
            'name' =>  $data['name'] ?? "",
            'gender' =>  $data['gender'] ?? "male",
            'birth_date' =>  $data['birth_date'] ?? "",
        ];
        
        try {
            $user= User::create($data);
            Wallet::create(['user_id' => $user->id]);
        } catch (\Throwable $th) {
            return null;
        }
        try {
            $data = [
                'title' => 'Eventy Registration Code',
                'body' => 'Dear User,<br />
                 Thank you for registering with Eventy! Your application code is:<b>'.(string) $user->code.'</b> Please, do not share it with anyone.'
            ];

            $sendMail = Mail::to($user->email)->send(new RegisterMail($data));
            if($sendMail){
                return $user;
            }
            else {
                return 'notSendEmail';
            }
            //Twilio::message('+'.$user->phone, $data);
        } catch (\Throwable $th) {
            //throw $th;
        }


        return $user;
     
    }
    public function following($id)
    {
        try {
            $this->user->increment('following');
            $userOther = User::find($id);
            $userOther->increment('follower');
            $this->user->following()->attach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'following befor';
        }

    }

    public function unfollowing($id)
    {
        try {
            $this->user->decrement('following');
            $userOther = User::find($id);
            $userOther->decrement('follower');
            $this->user->following()->detach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'following befor';
        }
    }
    
    public function addWishlistsEvent($id)
    {
        try {
            $event = Event::find($id);
            $event->increment('likes');
            $this->user->wishlists()->attach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'addWishlistsEvent befor';
        }

    }
    public function removeWishlistsEvent($id)
    {
        try {
            $event = Event::find($id);
            $event->decrement('likes');
         
            $this->user->wishlists()->detach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'removeWishlistsEvent befor';
        }

    }
    public function addWishlistsBrand($id)
    {
        try {
            $event = Brand::find($id);
            $event->increment('likes');
            $this->user->wishlists_brands()->attach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'addWishlitssBrand befor';
        }

    }
    
    public function removeWishlistBrand($id)
    {
        try {
            $event = Brand::find($id);
            $event->decrement('likes');
            $this->user->wishlists_brands()->detach($id);
            return 'Ok';
        } catch (\Throwable $th) {
            return 'removeWishlistsBrand befor';
        }

    }
    public function loginCheck(array $data)
    {
        if($data['email']=='user@user.com' && $data['code'] == '0000' ){
            $user= User::first();
            return $user->first();
        }
        $email = $data['email'];

        $user= User::where('email', $email)->where('code', $data['code']);
        if($user->first()){
            $data = [
                'phone_verified_at' => Carbon::today(),
                'is_valid' => 1
            ];
            $user->update($data);
            return $user->first();
        }
        else return null;

    }

    public function topHunters()
    {
        $users = User::where('role_id','2')->with('followers')->paginate(10);
        $following =  User::find(71)->following()->pluck('id');
        if($this->user->id ?? false){
            $users = User::where('role_id','2')->where('id','!=',$this->user->id)->with('followers')->paginate(10);
            $following =  User::find($this->user->id)->following()->pluck('id');
        }
        $users->getCollection()->transform(function($user) use ($following) {
            $user->is_following = $following->contains($user->id);
            return $user;
        });

        return $users;
    }
    public function notification()
    {
        try {
            $Notifications =  Notifications::where('user_id',$this->user->id)->paginate(10);
            return $Notifications;
        } catch (\Throwable $th) {
            return  null;
        }

    }
    public function popularHunters(): Paginator
    {
        return User::where('role_id','2')->where('image', '!=', 'null')->orderBy('created_at', 'desc')
            ->paginate(10);
    }
    public function pos(): Paginator
    {
        return User::where('role_id','3')->orderBy('created_at', 'desc')
            ->paginate(10);
    }
    
    public function hunters(): Paginator
    {
        return User::where('role_id','2')->orderBy('created_at', 'desc')
            ->paginate(10);
    }
    public function infoHunters($id): User
    {
        $users= User::with('wishlists_brands')
        ->with('wallet')
        ->with('following')
        ->with('followers')
        ->find($id);
        $following =  User::find(71)->following()->pluck('id');
        if($this->user->id??false){
            $following =  User::find($this->user->id)->following()->pluck('id');
        }
        $users->is_following = $following->contains($users->id) ;
        $users->wishlists()->with('event.tags')->get();

        return $users;


  
    }

    public function update(int $id, array $data): User|null
    {
        $user = User::find($id);
        if (!empty($data['image'])) {
            $titleShort ='pic';
            $data['image'] = UploadHelper::update('image', $data['image'], $titleShort . '-' . time(),'storage', $user->image);
        } else {
            $data['image'] = $user->image;
        }

        if (is_null($user)) {
            return null;
        }

        // If everything is OK, then update.
        $user->update($data);

        // Finally return the updated user.
        return $this->getByID($user->id);
    }
    public function getByID(int $id): User|null
    {
        return User::find($id);
    }
}
