<?php

namespace App\Console\Commands;

use File;
use Illuminate\Console\Command;

class MakeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');

        $path = $this->viewPath($view);
        $content = '{{-- ' . $path . ' --}}';

        $this->createDir($path);

        if (File::exists($path)) {
            $this->error("View {$path} already exists!");

            return;
        }

        File::put($path, $content);

        $this->info("View {$path} created.");
    }

    /**
     * Get the view full path.
     *
     * @return string
     */
    private function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';

        return "resources/views/{$view}";
    }

    /**
     * Create view directory if not exists.
     */
    private function createDir($path)
    {
        $dir = dirname($path);

        if (! file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
