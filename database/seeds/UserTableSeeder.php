<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Organisation;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [ [

                    'name'=>'VCI ADMIN',
                    'email' => 'vci-admin@verifycustomerinfo.com',
                    'password' =>'vci-admin1321$$',
                    'role' => 'Admin' 
                  ],

                   [ 

                    'name'=>'Custodian',
                    'email' => 'olugbemiro.olumide@gmail.com',
                    'password' =>'password',
                    'role' => 'Organisation' 
                  ],

                  [ 

                    'name'=>'Inspecto K',
                    'email' => 'inspector@vci.com',
                    'password' =>'password',
                    'role' => 'Inspector' 
                  ],

                    

                     ];


        foreach ($users as $user) {

            $user['password'] = Hash::make($user['password']);
            $role = $user['role'];
            unset($user['role']);
            $user = User::create($user);
            $user->assignRole($role);
        }


        Organisation::create(['user_id'=>2,'name'=>$users[1]['name']]);
         
        


    }
}
