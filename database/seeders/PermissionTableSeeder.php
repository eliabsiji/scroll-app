<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Default',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'role-updateuserrole',
           
        ];
        
        foreach ($permissions as $permission) {
            $str = $permission;
            $delimiter = '-';
            $words = explode($delimiter, $str);
            
            foreach ($words as $word) {
                if($word == "user")
                Permission::create(['name' => $permission,'title'=>"User Management"]);
                if($word == "role")
                Permission::create(['name' => $permission,'title'=>"Role Management"]);
            }
            //  Permission::create(['name' => $permission]);
        }
    }
}