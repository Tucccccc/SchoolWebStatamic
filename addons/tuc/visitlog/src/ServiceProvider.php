<?php

namespace Tuc\Visitlog;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    public function bootAddon()
    {
        //
        parent::bootAddon();

        app()->booted(function () {
            // Ghi log khi request được xử lý xong
            (new VisitLogger())->log();
        });
    }
}
