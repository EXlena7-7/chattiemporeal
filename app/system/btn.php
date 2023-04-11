<?php

namespace App\system;

class btn {

    public function a($url, $text = null)
    {
    return view('btn.a', [

        'url' => url($url),
        'text'=> is_null($text) ? $url : $text
    ]);
    }

    public function button($text, $class = null)
    {
        return view('btn.button', compact('text', 'class'));
    }
}
