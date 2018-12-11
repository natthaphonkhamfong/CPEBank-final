<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_admin_test_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $id = DB::table('account')->insertGetId([
            'accId' => null,
            'email' => str_random(10).'@gmail.com',
            'username' => 'admintest',
            'password' => bcrypt('admintest'),
            'lastLogin' => date_create(),
            'accType' => 'admin',
            'accLocked' => '1',
            'accLevel' => 10
        ]);
        DB::table('account_information')->insert([
            'userId' => $id,
            'accName' =>'adminNaja',
            'accLastName' => str_random(6),
            'accPhone' => random_int(1999,99999),
            'accDOB' => date_create(),
            'accJob' => str_random(20),
            'accGender' => 1,
            'accAddrHome' => str_random(60),
            'accIdCard' => str_random(13)
        ]);
    }
}
