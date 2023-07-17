<?php

namespace App\Http\NewsletterController;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;


class NewsletterController extends Controllers 
{
    public function __invoke(Newsletter $newletter){
    
        try {
        (new Newsletter())->subscribe(request('email'));
        
        } catch (\Exception $e) {
        throw ValidationException::withMessages([
                'email'=>'This email could not be added to our newsletter list.'
            ]);
        }
        
        return redirect('/')->with('success','you are now signed up for our newsletter!');
    }
    
}