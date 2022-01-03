<?php
// Приговор Smash
// Напишите функцию, которая берет массив слов, объединяет их в предложение и возвращает предложение. Вы можете игнорировать любую необходимость очистки слов или добавления знаков препинания, но вам следует добавлять пробелы между каждым словом. Будьте осторожны, в начале и в конце предложения не должно быть пробелов!
//
// Пример
// ['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'

$words = ['hello', 'world', 'this', 'is', 'great'];

function smash(array $words): string {
    $string = [];
    foreach ($words as $item) {
        $string[] = $item;
    }
    return implode(' ', $string);
}
echo smash($words);
