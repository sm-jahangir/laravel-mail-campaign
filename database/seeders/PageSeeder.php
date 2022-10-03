<?php

namespace Database\Seeders;

use App\Models\Analytic;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::updateOrCreate([
            'title' =>  'About',
            'slug'  =>  'about',
            'excerpt'   =>  'This is About Page',
            'image' => 'about.png',
            'body'  =>  '
            <div class="about-section">
                <h1>About Us Page</h1>
                <p>Some text about who we are and what we do.</p>
                <p>Resize the browser window to see that this page is responsive by the way.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
            </div>
            ',
            'status'    =>  true,
        ]);
        Page::updateOrCreate([
            'title' =>  'Privacy Policy',
            'slug'  =>  'privacy-policy',
            'excerpt'   =>  'This is Privacy Policy Page',
            'image' => 'policy.jpg',
            'body'  =>  '
            <div class="about-section">
                <h1>Privacy Policy Page</h1>
                <p>Some text Privacy Policy who we are and what we do.</p>
                <p>Resize the browser window to see that this page is responsive by the way.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
            </div>
            ',
            'status'    =>  true,
        ]);
        Page::updateOrCreate([
            'title' =>  'Contact us',
            'slug'  =>  'contact-us',
            'excerpt'   =>  'This is Contact us Page',
            'image' => 'contact.jpg',
            'body'  =>  '
            <div class="about-section">
                <h1>Contact Us Page Page</h1>
                <p>Some text about who we are and what we do.</p>
                <p>Resize the browser window to see that this page is responsive by the way.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laudantium pariatur voluptate iste totam ut! Accusamus, ut. Ratione sed non, aut, impedit reprehenderit velit, libero cupiditate vitae ex ad sit?</p>
            </div>
            ',
            'status'    =>  true,
        ]);
        Analytic::updateOrCreate([
            "code" =>  "<!-- Google Analytics --><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-XXXXX-Y', 'auto');ga('send', 'pageview');</script><!-- End Google Analytics -->",
        ]);
    }
}
