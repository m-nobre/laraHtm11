<?php

namespace App\Helpers\Core;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;



class Tools {
    public static function Log($message, $var = NULL) {
        Log::info($message);
        if ($var) {
            Log::info($var);
        }
    }

    public static function Key($lenght) {
        if ($lenght) {
            return Str::random($lenght);
        }
        
        return Str::random(rand(16, 64));
    }

    public static function RandomColour() {
        
        $colours = [ 
            'IndianRed',
            'LightCoral',
            'Salmon',
            'DarkSalmon',
            'LightSalmon',
            'Crimson',
            'Red',
            'FireBrick',
            'DarkRed',
            'Pink',
            'LightPink',
            'HotPink',
            'DeepPink',
            'MediumVioletRed',
            'PaleVioletRed',
            'Coral',
            'Tomato',
            'OrangeRed',
            'DarkOrange',
            'Orange',
            'Gold',
            'Yellow',
            'LightYellow',
            'LemonChiffon',
            'LightGoldenrodYellow',
            'PapayaWhip',
            'Moccasin',
            'PeachPuff',
            'PaleGoldenrod',
            'Khaki',
            'DarkKhaki',
            'Lavender',
            'Thistle',
            'Plum',
            'Violet',
            'Orchid',
            'Fuchsia',
            'Magenta',
            'MediumOrchid',
            'MediumPurple',
            'BlueViolet',
            'DarkViolet',
            'DarkOrchid',
            'DarkMagenta',
            'Purple',
            'RebeccaPurple',
            'Indigo',
            'MediumSlateBlue',
            'SlateBlue',
            'DarkSlateBlue',
            'Color',
            'RGB',
            'GreenYellow',
            'Chartreuse',
            'LawnGreen',
            'Lime',
            'LimeGreen',
            'PaleGreen',
            'LightGreen',
            'MediumSpringGreen',
            'SpringGreen',
            'MediumSeaGreen',
            'SeaGreen',
            'ForestGreen',
            'Green',
            'DarkGreen',
            'YellowGreen',
            'OliveDrab',
            'Olive',
            'DarkOliveGreen',
            'MediumAquamarine',
            'DarkSeaGreen',
            'LightSeaGreen',
            'DarkCyan',
            'Teal',
            'Aqua',
            'Cyan',
            'LightCyan',
            'PaleTurquoise',
            'Aquamarine',
            'Turquoise',
            'MediumTurquoise',
            'DarkTurquoise',
            'CadetBlue',
            'SteelBlue',
            'LightSteelBlue',
            'PowderBlue',
            'LightBlue',
            'SkyBlue',
            'LightSkyBlue',
            'DeepSkyBlue',
            'DodgerBlue',
            'CornflowerBlue',
            'RoyalBlue',
            'Blue',
            'MediumBlue',
            'DarkBlue',
            'Navy',
            'MidnightBlue',
            'Color',
            'RGB',
            'Cornsilk',
            'BlanchedAlmond',
            'Bisque',
            'NavajoWhite',
            'Wheat',
            'BurlyWood',
            'Tan',
            'RosyBrown',
            'SandyBrown',
            'Goldenrod',
            'DarkGoldenrod',
            'Peru',
            'Chocolate',
            'SaddleBrown',
            'Sienna',
            'Brown',
            'Maroon',
            'White',
            'Snow',
            'Honeydew',
            'MintCream',
            'Azure',
            'AliceBlue',
            'GhostWhite',
            'WhiteSmoke',
            'Seashell',
            'Beige',
            'OldLace',
            'FloralWhite',
            'Ivory',
            'AntiqueWhite',
            'Linen',
            'LavenderBlush',
            'MistyRose',
            'Gainsboro',
            'LightGray',
            'LightGrey',
            'Silver',
            'DarkGray',
            'DarkGrey',
            'Gray',
            'Grey',
            'DimGray',
            'DimGrey',
            'LightSlateGray',
            'LightSlateGrey',
            'SlateGray',
            'SlateGrey',
            'DarkSlateGray',
            'DarkSlateGrey',
            'Black',

        ];
        
        return $colours[array_rand($colours, 1)];
    }
}