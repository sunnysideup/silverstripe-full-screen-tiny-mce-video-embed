<?php

namespace Sunnysideup\VideoEmbedExtras\View\ShortCodes;

use SilverStripe\View\Shortcodes\EmbedShortcodeProvider;

class VideoExtras extends EmbedShortcodeProvider
{
    // public static function embedForTemplate($embed, $arguments) {
    //     return parent::embedForTemplate($embed, $arguments);
    // }

    public static function handle_shortcode($arguments, $content, $parser, $shortcode, $extra = array())
    {
        $string = parent::handle_shortcode($arguments, $content, $parser, $shortcode, $extra);
        $string = str_replace('></iframe' , ' loading="lazy"></iframe', $string);
        $string = str_replace('></iframe' , ' allowfullscreen></iframe', $string);

        return $string;
    }
}
