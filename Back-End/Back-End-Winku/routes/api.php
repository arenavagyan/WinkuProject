<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CorsMiddleware;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Image;
use App\Mail\VerificationCode;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Models\User;

Route::get('/example', function () {})->middleware(CorsMiddleware::class);

Route::middleware([CorsMiddleware::class])->group(function () {
        Route::get('/users', function () {
               return App\Models\User::all();
    });


Route::get('{user_id}/posts', function ($user_id) {
    $user = User::find($user_id);
    $posts = $user->posts;
    foreach ($posts as $post) {
        $result[] = [
            'userName' => $user->name,
            'postId' => $post->id,
            'createdAt' => $post->created_at->diffForHumans(),
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
            'cover'=> $user->cover,
            'position' => $user->position,
        ]
        ;

    return $result;



});

Route::get('/posts', function () {

    $result = [];
    $posts = Post::orderBy('id', 'desc')->get();

    foreach ($posts as $post) {
        $result[] = [
            'userId' => $post->user_id,
            'userName' => User::find($post->user_id)->name,
            'postId' => $post->id,
            'createdAt' => $post->created_at->diffForHumans(),
            'imageUrl' => $post->imageUrl,
            'videoUrl' => $post->videoUrl,
            'viewCount' => $post->viewCount,
            'commentCount' => $post->commentCount,
            'likeCount' => $post->likeCount,
            'dislikeCount' => $post->dislikeCount,
            'description' => $post->description,
            'comments' => []
        ];
    };

    return $result;

}

);

Route::get('test', function () {
 $users = User::all();
 $tokens = [];
 foreach ($users as $user) {
     if($user->tokens()->first()){
         $tokens[] = $user->tokens()->first()->tokenable_id;
     }
     else{
         $tokens[] = null;
     }
 }
 return $tokens;
});
//Route::get('/static/{user_id}/images/{file}', function($user_id,$file) {
//    $file = File::get(public_path() . "/image/{$user_id}/{$file}");
//
//    $response = Response::make($file, 200);
//    $response->header("Content-Type", "image/jpg");
//
//    return $response;
//});

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

//Route::get('users/{user_id}/followers', function($user_id){
//    $user = User::find($user_id);
//    return $user->follows;
//});

Route::get('defaultUser',function (){
    $file = File::get(public_path() . '/image/defaultUserAvatar.jpg');

    $response = Response::make($file,200);
    $response->header("Content-Type", "image/jpg");
    return $response;
});

Route::get('/{emailAddress}', function ($emailAddress) {
        $verificationCode = rand(100000, 999999); // Generate a random verification code

        \Illuminate\Support\Facades\Mail::to($emailAddress)
            ->send(new VerificationCode($verificationCode));
    });

//Post Requests

Route::post('register',[RegisterController::class,'register']);

Route::post('login',[LoginController::class,'login']);

Route::post('/logout',[LoginController::class,'logout']);

Route::post('/posts',[PostController::class,'store']);


