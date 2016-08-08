This provider helps us to create an alias of our class, best use for Facade classes as well.

Let's assume we have this kind of too long class:

```php
use Popeye\Util\Converter\Numeric;
```

But that's too long, that's why we added this to call the `class_alias()` function of php, 

This provider determines your config `project-name/config/app.php` under `aliases` key.
