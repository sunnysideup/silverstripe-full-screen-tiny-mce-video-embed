This module adds `allowFullScreen=true` to your YouTube iframe tag by overriding the standard html.

It also adds lazy loading.

It does so by swapping out the default class doing this work, like this (already added to module):

```yml
SilverStripe\Core\Injector\Injector:
  SilverStripe\View\Shortcodes\EmbedShortcodeProvider:
    class: Sunnysideup\VideoEmbedExtras\View\ShortCodes\VideoExtras
```

The `VideoExtras` class adds `allowfullscreen` attribute and `loading="lazy"`

There is no need to turn on anything.


# credits

A huge thank you to [Lukas](https://github.com/lerni) for providing the idea of the lazy loading.
