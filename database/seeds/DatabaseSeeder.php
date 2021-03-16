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
        
        $this->call(CommentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        $this->call(MovieCategoriesTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(MusicsTableSeeder::class);
    }
}
