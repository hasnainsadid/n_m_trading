<?php

use App\Models\Apartment;
use Illuminate\Support\Facades\DB;

function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}


function get_src($iframeHtml)
{
    $dom = new \DOMDocument();
        @$dom->loadHTML($iframeHtml);
        
        // Get the iframe elements
        $iframes = $dom->getElementsByTagName('iframe');
        
        // Return the src attribute if an iframe exists
        return $iframes->length > 0 ? $iframes->item(0)->getAttribute('src') : null;
}


function setting()
{
    return DB::table('settings')->first();
}