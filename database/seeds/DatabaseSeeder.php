<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->command->info('Таблица пользователей загружена данными!');

        $this->call(RoleTableSeeder::class);
        $this->command->info('Таблица ролей загружена данными!');

        $this->call(PermissionTableSeeder::class);
        $this->command->info('Таблица прав загружена данными!');

        $this->call(RolePermissionTableSeeder::class);
        $this->command->info('Таблица роль-право загружена данными!');

        $this->call(UserPermissionTableSeeder::class);
        $this->command->info('Таблица пользователь-право загружена данными!');

        $this->call(SectionsTableSeeder::class);
        $this->command->info('Таблица пользователь-роль загружена данными!');

        $this->call(CategoryTableSeeder::class);
        $this->command->info('Таблица пользователь-роль загружена данными!');
    }
}
