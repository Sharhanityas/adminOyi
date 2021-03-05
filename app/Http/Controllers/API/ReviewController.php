<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $kata = $request->input('kata');
        $detail = $request->input('detail');

        if ($id) {
            $review = Review::with('galleries')->find($id);

            if ($review)
                return ResponseFormatter::success($review, 'Data Review berhasil diambil');

            else
                return ResponseFormatter::error(null, 'Data Review Tidak Ada', 404);
        }


        $review = Review::with('galleries');

        if ($kata)
            $review->where('kata', 'like', '%' . $kata . '%');

        if ($detail)
            $review->where('detail', 'like', '%' . $detail . '%');

        return ResponseFormatter::success(
            $review->paginate($limit),
            'Data List Review berhasil diambil'
        );
    }
}
