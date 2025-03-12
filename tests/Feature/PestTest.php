<?php

namespace Tests\Feature;

// final class Tools
// {
//     public static function isOneEqualOne(): bool
//     {
//         return 1 === 1;
//     }
// }

// test('true is true', function () {
//     expect(Tools::isOneEqualOne())->toBeTrue();
// });

// test('true is false', function () {
//     $value = true;
//     expect($value)->toBeFalse();
// });

test('sum', function () {
    $value = 1 + 2;

    expect($value)
        ->toBeInt()
        ->toBe(3);
});
