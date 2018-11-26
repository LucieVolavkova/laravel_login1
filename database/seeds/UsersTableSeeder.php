<?php
/**
 * Created by PhpStorm.
 * User: Lusy
 * Date: 24.11.18
 * Time: 12:14
 */
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Shahid Jabbar',
            'password' => Hash::make('hejalbert'),
        ));
        User::create(array(
            'name'     => 'lusy',
            'password' => Hash::make('lusy'),
        ));
    }
}