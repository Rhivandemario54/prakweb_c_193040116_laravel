<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Rhivan Gabrille Demarrio',
        //     'email' => 'rhivandemario54@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Mario',
        //     'email' => 'Mario@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-Design'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul-Pertama',
        //     'slug' => 'judul-Pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => '
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorum illo suscipit, odio, veritatis officiis ducimus id molestiae autem, voluptatibus aliquam ipsa libero aperiam dolores adipisci voluptatum quam? Officia, quae. Porro cupiditate neque quam exercitationem beatae iusto, omnis assumenda non quas optio delectus temporibus sequi nobis nulla accusantium minima mollitia. Eveniet, dolore incidunt? Sint dolor placeat rerum dolore qui! Repellat explicabo eos, repudiandae iste tenetur quod, voluptate, doloribus commodi consequatur similique libero blanditiis mollitia temporibus officia! Illum perspiciatis laudantium saepe reiciendis, natus ipsa ex inventore dolor ut ducimus distinctio corporis dicta tempore itaque nam velit, totam excepturi accusantium veritatis sint.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-Ke Dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => '
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorum illo suscipit, odio, veritatis officiis ducimus id molestiae autem, voluptatibus aliquam ipsa libero aperiam dolores adipisci voluptatum quam? Officia, quae. Porro cupiditate neque quam exercitationem beatae iusto, omnis assumenda non quas optio delectus temporibus sequi nobis nulla accusantium minima mollitia. Eveniet, dolore incidunt? Sint dolor placeat rerum dolore qui! Repellat explicabo eos, repudiandae iste tenetur quod, voluptate, doloribus commodi consequatur similique libero blanditiis mollitia temporibus officia! Illum perspiciatis laudantium saepe reiciendis, natus ipsa ex inventore dolor ut ducimus distinctio corporis dicta tempore itaque nam velit, totam excepturi accusantium veritatis sint.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul-Ke tiga',
        //     'slug' => 'judul-Ke tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => '
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorum illo suscipit, odio, veritatis officiis ducimus id molestiae autem, voluptatibus aliquam ipsa libero aperiam dolores adipisci voluptatum quam? Officia, quae. Porro cupiditate neque quam exercitationem beatae iusto, omnis assumenda non quas optio delectus temporibus sequi nobis nulla accusantium minima mollitia. Eveniet, dolore incidunt? Sint dolor placeat rerum dolore qui! Repellat explicabo eos, repudiandae iste tenetur quod, voluptate, doloribus commodi consequatur similique libero blanditiis mollitia temporibus officia! Illum perspiciatis laudantium saepe reiciendis, natus ipsa ex inventore dolor ut ducimus distinctio corporis dicta tempore itaque nam velit, totam excepturi accusantium veritatis sint.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul-Ke empat',
        //     'slug' => 'judul-Ke empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'body' => '
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dolorum illo suscipit, odio, veritatis officiis ducimus id molestiae autem, voluptatibus aliquam ipsa libero aperiam dolores adipisci voluptatum quam? Officia, quae. Porro cupiditate neque quam exercitationem beatae iusto, omnis assumenda non quas optio delectus temporibus sequi nobis nulla accusantium minima mollitia. Eveniet, dolore incidunt? Sint dolor placeat rerum dolore qui! Repellat explicabo eos, repudiandae iste tenetur quod, voluptate, doloribus commodi consequatur similique libero blanditiis mollitia temporibus officia! Illum perspiciatis laudantium saepe reiciendis, natus ipsa ex inventore dolor ut ducimus distinctio corporis dicta tempore itaque nam velit, totam excepturi accusantium veritatis sint.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    

    }
}
