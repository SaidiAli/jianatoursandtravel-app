<?php

namespace App\Providers;

use Aws\S3\S3Client;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

class GoogleCloudStorageServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('gcs', function ($app, $config) {
            $client = new S3Client([
                'key' => $config['gcs_key'],
                'secret' => $config['gcs_secret'],
                'base_url' => $config['gcs_base_url'],
            ]
            );

            return new Filesystem(new AwsS3Adapter($client, $config['bucket']));
        });
    }
}
