<?php

use App\Http\Middleware\CorsMiddleware;
use App\Models\Follow;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Models\User;

Route::get('/example', function () {})->middleware(CorsMiddleware::class);

Route::middleware([CorsMiddleware::class])->group(function () {
        Route::get('/users', function () {
               return App\Models\User::all();
    });

Route::get('/followers', function () {
              return Follow::all();

});

Route::get('{user_id}/posts', function ($user_id) {
    $user = User::find($user_id);
    $posts = $user->posts;
    foreach ($posts as $post) {
        $result[] = [
            'userName' => $user->name,
            'postId' => $post->id,
            'publishDate' => $post->created_at->diffForHumans(),
            'photoUrl' => $post->imageUrl,
            'viewCount' => 1200,
            'commentCount' => 52,
            'likeCount' => 2200,
            'dislikesCount' => 200,
            'description'=> $post->description,
            'comments' => []
]
        ;
    }
    return $result;


});});

Route::get('{user_id}/posts/{post_id}', function ($user_id,$post_id) {
    $user = User::find($user_id);
    $posts = $user->posts;
    $post = $posts[$post_id-1];

    return $post;




});

Route::get('{user_id}/posts/{post_id}/image', function ($user_id,$post_id) {
    $user = User::find($user_id);
    $post = Post::find($post_id);
    $image = $post->imageUrl;
    $file = File::get(public_path() . "/image/{$user_id}/{$image}");
    $response = Response::make($file, 200);
    $response->header("Content-Type", "image/jpg");

    return $response;





});

Route::get('users/{user_id}', function ($user_id) {
    $user = User::find($user_id);

    $result = [
            'userName' => $user->name,
            'avatar' => $user->avatar,

        ]
        ;

    return $result;



});

Route::get('/posts', function () {
    $users = User::all();
    foreach ($users as $user) {
    $posts = $user->posts;
    foreach ($posts as $post) {
        $result[] = [
            'userId' => $post->user_id,
            'userName' => $user->name,
            'postId' => $post->id,
            'publishDate' => $post->created_at->diffForHumans(),
            'photoUrl' => $post->imageUrl,
            'viewCount' => $post->viewCount,
            'commentCount' => $post->commentCount,
            'likeCount' => $post->likeCount,
            'dislikesCount' => $post->dislikeCount,
            'description'=> $post->description,
            'comments' => []
        ]
        ;
    }



}
    return  $result;
});

Route::get('/static/{user_id}/images/{file}', function($user_id,$file) {
    $file = File::get(public_path() . "/image/{$user_id}/{$file}");

    $response = Response::make($file, 200);
    $response->header("Content-Type", "image/jpg");

    return $response;
});

Route::get('/static/{user_id}/avatar', function($user_id) {
    $user = User::find($user_id);
    $file = File::get(public_path() . "/image/{$user_id}/avatar/{$user->avatar}");

    $response = Response::make($file, 200);
    $response->header("Content-Type", "image/jpg");

    return $response;
});

Route::get('/static/{user_id}/cover/{file}', function($user_id,$file) {
    $file = File::get(public_path() . "/image/{$user_id}/cover/{$file}");

    $response = Response::make($file, 200);
    $response->header("Content-Type", "image/jpg");

    return $response;
});

Route::get('users/{user_id}/friends', function ($user_id) {
    $user = User::find($user_id);
    return $user->friends;
});

Route::get('/posts/{post_id}/comments',function ($post_id){
    $comments = Comment::where('postId',$post_id)->get();
    return($comments);

});

// Default User Data --GET

Route::get('defaultUser/avatar',function (){
    $file = File::get(public_path() . '/image/defaultUser/avatar/defaultUserAvatar.jpg');

    $response = Response::make($file,200);
    $response->header("Content-Type", "image/jpg");
    return $response;
});
