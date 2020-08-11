# simple-tokenizer
simple-tokenizer is a PHP JS helper for token control, using simple sha1 hashing for allowing only tokenized requests.

## Installation
#### PHP

```php
    require_once('simple-tokenizer.php');
```
#### JS
```html
    <script src="simple-tokenizer.js"></script>
```


## Usage
#### PHP

```php
<?php
   $tokenizer = new simpleTokenizer($salt, $timezone);
   $tokenizer->provideSaltHash(); //return user salt hash for token on the client side

   $tokenizer->validateToken($value); //check for JS generated token validity
?>
```
#### JS
```javascript
   simpleTokenizer.defineSalt(providedSaltHash);
   var token =  simpleTokenizer.getHash();
```


## Dependencies
#### JS
    [emn178/js-sha1](https://github.com/emn178/js-sha1)

#### PHP
    PHP 5.4+



