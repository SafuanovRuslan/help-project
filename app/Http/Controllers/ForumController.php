<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Subject;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class ForumController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createSubject(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        Subject::create([
            'title' => $request->title,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('forum');
    }

    public function comments(int $id)
    {
        return view('comments', ['id' => $id]);
    }

    public function createComment(Request $request): RedirectResponse
    {
        $request->validate([
            'subject_id' => ['required', 'int'],
            'name' => ['required', 'string', 'max:255'],
            'text' => ['required', 'string', 'max:1000'],
        ]);

        Comment::create([
            'subject_id' => $request->subject_id,
            'name' => $request->name,
            'text' => $request->text,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect("/forum/$request->subject_id");
    }
}
