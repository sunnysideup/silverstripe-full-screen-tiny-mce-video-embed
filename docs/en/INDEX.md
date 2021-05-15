This module adds `allowFullScreen` to your YouTube iframe tag by overriding the standard html.

It does so by swapping out the default class doing this work, like this:

```yml
SilverStripe\Core\Injector\Injector:
  SilverStripe\View\Shortcodes\EmbedShortcodeProvider:
    class: Sunnysideup\FullScreenTinyMceVideoEmbed\View\ShortCodes\EmbedShortcodeProviderFullScreen
```
