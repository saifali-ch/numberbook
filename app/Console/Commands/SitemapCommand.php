<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapCommand extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap.xml';

    public function handle(): void {
        $sitemap = Sitemap::create();

        // Add Homepage URL
        $sitemap->add(Url::create('/')->setLastModificationDate(Carbon::now()));

        // Add FAQ URLs with appropriate information
        $sitemap->add(Url::create('/what-is-the-saudi-number-book')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8));

        $sitemap->add(Url::create('/find-out-the-caller-name-in-saudi-arabia')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8));

        $sitemap->add(Url::create('/an-alternative-to-ksa-numbers-online-for-all-arab-countries-and-the-arab-gulf-countries')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8));

        $sitemap->add(Url::create('/ksa-numbers-website-saudi-numbers-directory')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8));

        // Write Sitemap to file (adjust path as needed)
        $sitemap->writeToFile(base_path('sitemap.xml'));
    }
}
