This module adds `allowFullScreen` attribute to your YouTube and Vimeo iframe tag created in your tinyMCE editor by overriding the standard html.

It also adds lazy loading attribute: `loading="lazy"`, see [web.dev/iframe-lazy-loading](https://web.dev/iframe-lazy-loading/). 

It does so by swapping out the default class doing this work, like this (already added to module):

```yml
SilverStripe\Core\Injector\Injector:
  SilverStripe\View\Shortcodes\EmbedShortcodeProvider:
    class: Sunnysideup\VideoEmbedExtras\View\ShortCodes\VideoExtras
```

There is no need to turn on anything.


# credits

A huge thank you to [Lukas](https://github.com/lerni) for providing the idea of the lazy loading.
