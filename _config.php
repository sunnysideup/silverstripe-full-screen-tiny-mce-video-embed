<?php

use Sunnysideup\FullScreenTinyMceVideoEmbed\View\ShortCodes\EmbedShortcodeProviderFullScreen;
use SilverStripe\View\Parsers\ShortcodeParser;

ShortcodeParser::get('default')
    ->register('embed', [EmbedShortcodeProviderFullScreen::class, 'handle_shortcode']);
