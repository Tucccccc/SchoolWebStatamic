<?php

namespace Tuc\Visitlog\Tests;

use Tuc\Visitlog\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
