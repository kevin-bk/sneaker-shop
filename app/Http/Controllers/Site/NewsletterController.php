<?php

namespace App\Http\Controllers\Site;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends SiteController
{
    public function check(){
    
        request()->validate(['email' => 'required|email']);

        $mailchimp = new \MailchimpMarketing\ApiClient();
    
        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5'
        ]);
    
        try {
            $response = $mailchimp->lists->addListMember('cfc5577d14', [
                "email_address" => request('email'),
                "status" => "subscribed"
            ]);
        } catch (\Exception $e) {
            return redirect('/')->with('error','Email đã được đăng ký!');
        }
    
        return redirect('/')->with('success','Cảm ơn bạn đã đăng ký nhận Email');
    }
    
}