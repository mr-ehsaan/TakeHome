<?php

namespace App\Console\Commands;

use App\Services\ArticleService;
use Illuminate\Console\Command;

class FetchArticleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-article-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(ArticleService $articleService)
    {
        $articleService->fetchArticlesFromNewsApi();
        $articleService->fetchArticlesFromNewyorkTimeApi();
        $articleService->fetchArticlesFromGuardianApi();
        $this->info('Articles updated successfully!');
    }
}
