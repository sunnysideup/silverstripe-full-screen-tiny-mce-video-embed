<?php

use Sunnysideup\VideoEmbedExtras\View\ShortCodes\VideoExtras;
use SilverStripe\View\Parsers\ShortcodeParser;

ShortcodeParser::get('default')
    ->register('embed', [VideoExtras::class, 'handle_shortcode']);
