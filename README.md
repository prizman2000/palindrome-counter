# Счетчик палендромов

Счетчик палендромов

## Требования

- PHP 7.4

## Установка

```bash
$ composer require vyacheslavlebedev/palindrome-counter
```

## Использование

```php
<?php
$pc = new PalindromeCounter();
echo $pc->count(['Eva, can I see bees in a cave?', 'hello world', 'madam']); // 2 
```