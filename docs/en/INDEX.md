This module adds `allowFullScreen=true` to your YouTube iframe tag by overriding the standard html.

It also adds lazy loading.

It does so by swapping out the default class doing this work, like this:

```yml
SilverStripe\Core\Injector\Injector:
  SilverStripe\View\Shortcodes\EmbedShortcodeProvider:
    class: Sunnysideup\VideoEmbedExtras\View\ShortCodes\VideoExtras
```

There is no need to turn on anything.
