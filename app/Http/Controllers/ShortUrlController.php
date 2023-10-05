<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function short(Request $request)
    {
        if($request->original_url){
            $new_url = ShortUrl::create([
                'original_url' => $request->original_url
            ]);
            if($new_url){
                $short_url = base_convert($new_url->id, 10,36);
                $new_url->update([
                    'short_url' => $short_url
                    ]);
                return back();
            };
        };
        return back();
    }
}
