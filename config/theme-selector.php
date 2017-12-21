<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typo.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => ["css/base.min.css"]
        ],

        "separator3" => "------------------------------------------------",

        "photo"       => [
            "title"      => "A theme with a photo background.",
            "class"      => "photo",
            "stylesheets" => ["css/photo.min.css"]
        ],
        "texture"       => [
            "title"      => "A theme with a texture background.",
            "class"      => "texture",
            "stylesheets" => ["css/texture.min.css"]
        ],
        "gradient"       => [
            "title"      => "A theme with a gradient background.",
            "class"      => "gradient",
            "stylesheets" => ["css/gradient.min.css"]
        ],
        "contrast"       => [
            "title"      => "A theme using contrast as main desginprinciple.",
            "class"      => "contrast",
            "stylesheets" => ["css/contrast.min.css"]
        ],
        "simple"       => [
            "title"      => "A simple theme using simplicity and fonts.",
            "class"      => "simple",
            "stylesheets" => ["css/simple.min.css"]
        ],
    ]
];
