<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class URLShortenerController extends Controller
{

    /**
     *
     * generate short code to make a short link
     *
     * @param Link $link
     * @return View|RedirectResponse
     */
    public function generateShortCode(Link $link): View|RedirectResponse
    {
        $link = $link->byUser()->where([
            'short_code' => null
        ])->first();
        if (!$link) {
            return redirect()->back();
        }
    }
}
