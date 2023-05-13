# to-string PHP Library

`to-string` is a PHP library that provides various utility classes for string manipulation and conversion. It offers functionality to convert text case, strip tags, generate slugs, format arrays, and handle date/time values.

## Installation

You can install the `to-string` library via Composer. Run the following command in your project directory:

```
composer require effectra/to-string
```

## Usage

### TextToString

#### `toUppercase(string $text): string`

Converts a string to uppercase.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->toUppercase('Hello, World!');
echo $result; // Output: HELLO, WORLD!
```

#### `toLowercase(string $text): string`

Converts a string to lowercase.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->toLowercase('Hello, World!');
echo $result; // Output: hello, world!
```

#### `strip(string $text): string`

Strips HTML and PHP tags from a string.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->strip('<p>Hello, <b>World!</b></p>');
echo $result; // Output: Hello, World!
```

#### `nameVar($variable): string`

Extracts the variable name from the caller's context.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$myVariable = 'Hello, World!';
$result = $textToString->nameVar($myVariable);
echo $result; // Output: myVariable
```

#### `textToSlug($text): string`

Converts a string to a URL-friendly slug.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->textToSlug('Hello, World!');
echo $result; // Output: hello-world
```

#### `slugToText($slug): string`

Converts a URL-friendly slug back to readable text.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->slugToText('hello-world');
echo $result; // Output: Hello World
```

#### `generateRandomText($length): string`

Generates a random text of specified length.

```php
use Effectra\ToString\TextToString;

$textToString = new TextToString();
$result = $textToString->generateRandomText(8);
echo $result; // Output: C4rN1QX7
```

### ArrayToString

#### `array(array $array): string`

Converts an array to a string representation.

```php
use Effectra\ToString\ArrayToString;

$result = ArrayToString::array(['apple', 'banana', 'cherry']);
echo $result; // Output: ['apple', 'banana', 'cherry']
```

#### `arrayToText(array $data, string $separator = ','): string`

Converts an array to a string by joining its elements with a separator.

```php
use Effectra\ToString\ArrayToString;

$result = ArrayToString::arrayToText(['apple', 'banana', 'cherry']);
echo $result; // Output: apple,banana,cherry
```

#### `arrayToSlug(array $data): string`

Converts an array to a URL-friendly slug by joining its elements with a separator.
```php
use Effectra\ToString\ArrayToString;

$arrayToString = new ArrayToString();
$result = $arrayToString->arrayToSlug(['apple', 'banana', 'cherry']);
echo $result; // Output: apple-banana-cherry
```

#### `arrayToTextKeyValue($data): string`

Converts an array or JSON string to a key-value pair string representation.

```php
use Effectra\ToString\ArrayToString;

$arrayToString = new ArrayToString();
$result = $arrayToString->arrayToTextKeyValue(['name' => 'John', 'age' => 25, 'city' => 'New York']);
echo $result;
/*
Output:
name: John,
age: 25,
city: New York,
*/
```

### DateToString

#### `formatTime(int $time): string`

Formats a time value in seconds into HH:MM:SS format.

```php
use Effectra\ToString\DateToString;

$dateToString = new DateToString();
$result = $dateToString->formatTime(3600); // Assuming 3600 seconds is 1 hour
echo $result; // Output: 01:00:00
```

#### `formatDate(int $timestamp): string`

Formats a timestamp into YYYY-MM-DD format.

```php
use Effectra\ToString\DateToString;

$dateToString = new DateToString();
$result = $dateToString->formatDate(time()); // Current timestamp
echo $result; // Output: 2023-05-13
```

## License

This library is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contributing

Contributions are welcome! If you have any improvements or bug fixes, please submit a pull request.

## Credits

The `to-string` library is developed and maintained by [Effectra](https://effectra.co/).

## Support

For any questions or issues, please [open an issue](https://github.com/effectra/to-string/issues) on GitHub.

```

Feel free to modify the README file according to your specific library details, such as author information, additional sections, or formatting preferences.
