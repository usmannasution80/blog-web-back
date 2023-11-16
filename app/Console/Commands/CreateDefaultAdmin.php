<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateDefaultAdmin extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'app:create-default-admin';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create default admin account';

  /**
   * Execute the console command.
   */
  public function handle() {
    $name = 'admin';
    $email = 'admin@gmail.com';
    $password = 'admin';
    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->password = Hash::make($password);
    $user->save();
    echo "Default admin created with email : $email and password : $password";
  }
}
