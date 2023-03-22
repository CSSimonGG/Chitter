<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;

class LikesController extends Controller
{
    public function like(LikeRequest $likeRequest)
    {
        $likeRequest->user()->like($likeRequest->likeable());

        // Return Like
        if ($likeRequest->ajax()) {
            return response()->json([
                'likes' => $likeRequest->likeable()->likes()->count(),
                'liked' => true,
            ]);
        }
    }

    public function unlike(UnlikeRequest $unlikerequest)
    {
        $unlikerequest->user()->unlike($unlikerequest->likeable());

        // Return Unlike
        if ($unlikerequest->ajax()) {
            return response()->json([
                'likes' => $unlikerequest->likeable()->likes()->count(),
                'liked' => false,
            ]);
        }
    }
}
