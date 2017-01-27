<?php

namespace Comyoo\LaravelElasticEmail;

use Illuminate\Mail\MailServiceProvider as OriginalServiceProvider;

class MailServiceProvider extends OriginalServiceProvider
{
	/**
     * Register the Swift Transport instance.
     *
     * @return void
     */
    protected function registerSwiftTransport()
    {
        $this->app['swift.transport'] = $this->app->share(function ($app) {
            return new TransportManager($app);
        });
    }
}