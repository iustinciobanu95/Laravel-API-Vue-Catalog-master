<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ReviewResource;
use App\Model\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReviewController extends Controller
{
    public function getAll()
    {
        return ReviewResource::collection(Review::all());
    }
}
