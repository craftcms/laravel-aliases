<?php

use CraftCms\Aliases\Aliases;

arch('it will not use debugging functions')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();

it('is a singleton', function () {
    expect(app(\Yiisoft\Aliases\Aliases::class))->toBe(app(\Yiisoft\Aliases\Aliases::class));
    expect(app(\Yiisoft\Aliases\Aliases::class))->toBe(app('aliases'));
});

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

it('throws when an alias doesn\'t exist', function () {
    $this->expectException(\InvalidArgumentException::class);

    expect(Aliases::get('@foo'))->toBeFalse();
});

it('returns false when an alias doesn\'t exist and throwException is false', function () {
    expect(Aliases::get('@foo', false))->toBeFalse();
});
