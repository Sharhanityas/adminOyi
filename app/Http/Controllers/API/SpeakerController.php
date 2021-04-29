<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $event_id = $request->input('event_id');
        $nama = $request->input('nama');
        $email = $request->input('email');
        $telepon = $request->input('telepon');
        $foto = $request->input('foto');

        if ($id) {
            $speaker = Speaker::with('events')->find($event_id);

            if ($speaker)
                return ResponseFormatter::success($speaker, 'Data Speaker berhasil diambil');

            else
                return ResponseFormatter::error(null, 'Data Speaker Tidak Ada', 404);


            $speaker = Speaker::with('events');

            if ($event_id)
                $speaker->where('event_id', 'like', '%' . $event_id . '%');

            if ($nama)
                $speaker->where('nama', 'like', '%' . $nama . '%');

            if ($email)
                $speaker->where('email', 'like', '%' . $email . '%');

            if ($telepon)
                $speaker->where('telepon', 'like', '%' . $telepon . '%');

            if ($foto)
                $speaker->where('foto', 'like', '%' . $foto . '%');

            return ResponseFormatter::success(
                $speaker->paginate($limit),
                'Data List Speaker berhasil diambil'
            );
        }
    }
}
