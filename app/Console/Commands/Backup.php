<?php

namespace App\Console\Commands;

use App\Models\Home;
use App\Models\User;
use App\Models\Agenda;
use App\Models\Galeri;
use App\Models\Category;
use Illuminate\Console\Command;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:backup {type=all} {--current=1}  {--users=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database using iseed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      $tableNames = config('permission.table_names');
      $is_windows = strtolower(PHP_SHLIB_SUFFIX) === 'dll';

      $win_parse = function ($str) use ($is_windows) {
          return str_replace(['\\', '/'], ($is_windows ? '\\' : '/'), $str);
      };

      $root = dirname(__FILE__);
      $root = "$root/../../..";
      $arg_type = $this->argument('type');
      $opt_users = $this->option('users');
      // backup migrasi database sebelumnya
      if ($this->option('current') == 1) {
          // pindahkan folder dulu
          $folder_parent = $win_parse("$root/backup");
          $folder_backup = $win_parse("$folder_parent/" . date('Y-m-d'));

          if (!file_exists("$folder_parent")) echo shell_exec("mkdir $folder_parent");
          if (!file_exists($folder_backup)) echo shell_exec("mkdir $folder_backup");
          $copy = $is_windows ? 'copy' : 'cp -R';
          shell_exec($win_parse("$copy $root/database/seeders/* $folder_backup"));

          echo 'Berhasil backup data sebelumnya, jangan lupa nanti sebelum di seeder ulang Class=SeederUser di modif dulu bagian :username, email_verified_at, created_at, updated_at, agar tidak error, chuaaakss' . PHP_EOL;
      }

      $tables = [
        'agendas' => [
            'agendas',
        ],
        'categories' => [
            'categories',
        ],
        'category_books' => [
            'category_books',
        ],
        'comments' => [
            'comments',
        ],
        'contacts' => [
            'contacts',
        ],
        'galeri' => [
            'galeri',
        ],
        'home' => [
            'home',
        ],
        'h_b_n_s' => [
            'h_b_n_s',
        ],
        'kader' => [
            'kader',
        ],
        'penguruses' => [
            'penguruses',
        ],
        'perpus' => [
            'perpus',
        ],
        'posts' => [
            'posts',
        ],
        'post_tag' => [
            'post_tag',
        ],
        'profile' => [
            'profile',
        ],
        'quotes' => [
            'quotes',
        ],
        'rayon' => [
            'rayon',
        ],
        'role' => [
            'role',
        ],
        'tags' => [
            'tags',
        ],
        'users' => [
            'users',
        ],
        
    ];    
    if ($opt_users == 1 || $arg_type == 'users') echo shell_exec('php artisan iseed users --force');
    foreach ($tables as $k => $t) {
        $type = $arg_type == 'all' ? $tables[$k] : ($k == $arg_type ? $t : []);
        foreach ($type as $table) {
            echo shell_exec('php artisan iseed ' . $table . ' --force');
        }

        if (in_array($arg_type, $t)) {
            echo shell_exec('php artisan iseed ' . $arg_type . ' --force');
        }
    }
    return 1;
    }
}
