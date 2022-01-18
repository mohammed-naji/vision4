<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Insurance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);

        // dd($user->insurance);

        $insurance = Insurance::find(1);

        dd($insurance->user);

        return 'one_to_one';
    }

    public function one_to_many()
    {
        // $comment = Comment::find(2);

        // dd($comment->post);
        // dd($post->comments);

        // $user = User::find(1);

        // dd($user->comments);

        $comment = Comment::find(4);
        dd($comment->user->name);
        return 'one_to_many';
    }

    public function many_to_many()
    {
        // $course = Course::find(1);

        // dd($course->users);

        $user = User::find(2);

        dd($user->courses);
        return 'many_to_many';
    }
}
