<?php

use Craft\Aliases\Facades\Aliases;

arch('it will not use debugging functions')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();

it('can set and get an alias', function () {
    Aliases::set('@foo', 'bar');

    expect(Aliases::get('@foo'))->toBe('bar');
});

it('can inject', function () {
    Aliases::set('@foo', 'bar');

    expect(app()->call(function (\Yiisoft\Aliases\Aliases $aliases) {
        return $aliases->get('@foo');
    }))->toBe('bar');
});
