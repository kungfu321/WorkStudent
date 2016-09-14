<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Admin'; // optional
        $admin->description = 'Admin có thể quản lý tất cả các khía cạnh của trang.'; // optional
        $admin->save();

        $editor = new Role();
        $editor->name = 'editor';
        $editor->display_name = 'Editor'; // optional
        $editor->description = 'Editor có thể chỉnh sửa trang, duyệt tin.'; // optional
        $editor->save();

        $moderator = new Role();
        $moderator->name = 'moderator';
        $moderator->display_name = 'Moderator'; // optional
        $moderator->description = 'Moderator có thể chỉnh sửa trang, duyệt tin.'; // optional
        $moderator->save();
    }
}
