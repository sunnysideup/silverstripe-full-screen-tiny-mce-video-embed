<?php

namespace Sunnysideup\FullScreenTinyMceVideoEmbed\View\ShortCodes;

use SilverStripe\View\Shortcodes\EmbedShortcodeProvider;

class EmbedShortcodeProviderFullScreen extends EmbedShortcodeProvider
{
    // public static function embedForTemplate($embed, $arguments) {
    //     return parent::embedForTemplate($embed, $arguments);
    // }

    public static function handle_shortcode($arguments, $content, $parser, $shortcode, $extra = array())
    {
        $return = parent::handle_shortcode($arguments, $content, $parser, $shortcode, $extra);
        $return = str_replace('allowTransparency="true"' , 'allowTransparency="true"  allowFullscreen="true"', $return);
        return str_replace('allowTransparency="true"' , 'loading="lazy" allowTransparency="true"', $return);
    }
}
