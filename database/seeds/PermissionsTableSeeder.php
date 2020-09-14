<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'profile_password_edit',
            ],
            array('id' => '18','title' => 'client_create'),
            array('id' => '19','title' => 'client_delete'),
            array('id' => '20','title' => 'client_show'),
            array('id' => '21','title' => 'client_edit'),
            array('id' => '22','title' => 'client_access'),
            array('id' => '23','title' => 'service_create'),
            array('id' => '24','title' => 'service_access'),
            array('id' => '25','title' => 'service_edit'),
            array('id' => '26','title' => 'service_show'),
            array('id' => '27','title' => 'service_delete'),
            array('id' => '28','title' => 'doctor-create'),
            array('id' => '29','title' => 'doctor_create'),
            array('id' => '30','title' => 'doctor_show'),
            array('id' => '31','title' => 'doctor_delete'),
            array('id' => '32','title' => 'doctor_store'),
            array('id' => '33','title' => 'doctor_edit'),
            array('id' => '34','title' => 'appointment_edit'),
            array('id' => '35','title' => 'appointment_create'),
            array('id' => '36','title' => 'appointment_show'),
            array('id' => '37','title' => 'appointment_delete'),
            array('id' => '38','title' => 'appointment_store')
        ];

        Permission::insert($permissions);
    }
}
