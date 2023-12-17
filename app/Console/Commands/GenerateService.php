<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function PHPUnit\Framework\directoryExists;

class GenerateService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Service';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $fileName = $name . 'Service';
        $path = app_path('Services/' . $fileName . '.php');
        if (!is_dir(app_path('Services'))) {
            mkdir(app_path('Services'));
        }
        assert(!file_exists($path), 'Service already exists!');
        $file = fopen($path, 'w');
        $content = "<?php

namespace App\Services;

use App\Models\\$name;
use App\Services\BaseService;

class $fileName extends BaseService
{
    public function __construct($name \$model)
    {
        parent::__construct(\$model);
        \$this->model = \$model;

    }
}
";
        fwrite($file, $content);
        fclose($file);
        $this->info('Service created successfully.');

    }
}
