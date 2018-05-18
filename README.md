# ArrayKeysCaseTransform
Simple library to handle words case transformation from array keys.

## Installation

```
composer require deoliveiralucas/array-keys-case-transform
```

## Usage

```php
use ArrayKeysCaseTransform\ArrayKeys;

$input = [ 'first_key' => 'value' ];

print_r(ArrayKeys::toCamelCase($input));
/*
Output:
Array
(
    [firstKey] => value
)
*/

$input = [ 'firstKey' => 'value' ];

print_r(ArrayKeys::toSnakeCase($input));
/* 
Output:
Array
(
    [first_key] => value
)
*/
```

## Custom format

```php
use ArrayKeysCaseTransform\ArrayKeys;
use ArrayKeysCaseTransform\Transformer\AbstractTransformer;

$input = [ 'firstKey' => 'value' ];

$customTransform = new class extends AbstractTransformer {
    protected function format(string $key) : string {
        return str_replace('Key', 'CustomKey', $key);
    }
};

print_r(ArrayKeys::transform($customTransform, $input));
/* 
Output:
Array
(
    [firstCustomKey] => value
)
*/
```

## Contributing ##

- Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

ArrayKeysCaseTransform is released under the MIT License. Please see [License File](LICENSE) for more information.