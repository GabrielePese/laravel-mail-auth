<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserAction;

class LoggedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id)
    {
        $user = Auth::user();
        
        $action = "Ha Cancellato";

        $post = Post::findOrFail($id);
        $post -> delete();


        Mail::to("admin@gmail.com")
        ->send(new UserAction($user, $post, $action));

        return redirect(route('home'));
         
    }
}
