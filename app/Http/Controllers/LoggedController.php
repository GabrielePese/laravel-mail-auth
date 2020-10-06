<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $pos = Post::findOrFail($id);
        $pos -> delete();

        return redirect(route('home'));
    }
}
