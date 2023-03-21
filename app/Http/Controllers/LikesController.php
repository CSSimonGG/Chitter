<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;

class LikesController extends Controller
{
    public function like(LikeRequest $likeRequest)
    {
        $likeRequest->user()->like($likeRequest->likeable());

        if ($likeRequest->ajax()) {
            return response()->json([
                'likes' => $likeRequest->likeable()->likes()->count(),
                'liked' => true,
            ]);
        }
    }

    public function unlike(UnlikeRequest $request)
    {
        $request->user()->unlike($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count(),
                'liked' => false,
            ]);
        }
    }
}
