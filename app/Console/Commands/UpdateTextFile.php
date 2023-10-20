<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\TextFile;
class UpdateTextFile extends Command
{
    protected $signature = 'update:textfile {filePath}';
    protected $description = 'Upload a text file and update it in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $filePath = $this->argument('filePath');
        
        if (file_exists($filePath)) {
          
            $fileContent = file_get_contents($filePath);
            
            
            TextFile::updateOrCreate(
                ['filepath' => $filePath],
                ['content' => $fileContent]
            );
            
            $this->info("Text file content updated successfully in the database.");
        } else {
            $this->error("The specified file does not exist.");
        }
    }
}
