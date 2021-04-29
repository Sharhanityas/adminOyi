<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $judul_event = $request->input('judul_event');
        $slug = $request->input('slug');
        $tanggal_event = $request->input('tanggal_event');
        $waktu = $request->input('waktu');
        $tempat = $request->input('tempat');
        $deskripsi = $request->input('deskripsi');

        if ($id) {
            $event = Event::with('galleries')->find($id);

            if ($event)
                return ResponseFormatter::success($event, 'Data Event berhasil diambil');

            else
                return ResponseFormatter::error(null, 'Data Event Tidak Ada', 404);
        }

        if ($slug) {
            $event = Event::with('galleries')
                ->where('slug', $slug)
                ->first();

            if ($event)
                return ResponseFormatter::success($event, 'Data Event berhasil diambil');

            else
                return ResponseFormatter::error(null, 'Data Event Tidak Ada', 404);
        }
        $event = Event::with('galleries');

        if ($judul_event)
            $event->where('judul_event', 'like', '%' . $judul_event . '%');

        if ($tanggal_event)
            $event->where('tanggal_event', 'like', '%' . $tanggal_event . '%');

        if ($waktu)
            $event->where('waktu', 'like', '%' . $waktu . '%');

        if ($tempat)
            $event->where('tempat', 'like', '%' . $tempat . '%');

        if ($deskripsi)
            $event->where('deskripsi', 'like', '%' . $deskripsi . '%');

        return ResponseFormatter::success(
            $event->paginate($limit),
            'Data List Event berhasil diambil'
        );
    }
}
