<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['required', 'active_url'],
        ]);

        $randomString = Str::random(6);

        $shortUrl = new Url([
            'alias' => $randomString,
            'url' => $data['url'],
        ]);
        $shortUrl->save();

        $result = url($randomString);

        return to_route('url.index')->with('result', $result);
    }

    public function redirect(string $alias)
    {
        $shortUrl = Url::where('alias', $alias)->first();

        if(!$shortUrl) abort(404);

        return redirect()->away($shortUrl->url);
    }
}
