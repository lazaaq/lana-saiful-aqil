<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'HTML',
            'icon' => 'html.png'
        ]);
        Skill::create([
            'name' => 'CSS',
            'icon' => 'css.png'
        ]);
        Skill::create([
            'name' => 'Bootstrap',
            'icon' => 'bootstrap.png'
        ]);
        Skill::create([
            'name' => 'Javascript',
            'icon' => 'javascript.png'
        ]);
        Skill::create([
            'name' => 'PHP',
            'icon' => 'php.png'
        ]);
        Skill::create([
            'name' => 'Laravel',
            'icon' => 'laravel.png'
        ]);
        Skill::create([
            'name' => 'MySQL',
            'icon' => 'mysql.png'
        ]);
        Skill::create([
            'name' => 'NodeJS',
            'icon' => 'nodejs.png'
        ]);
        Skill::create([
            'name' => 'VSCode',
            'icon' => 'vscode.png'
        ]);
        Skill::create([
            'name' => 'Heroku',
            'icon' => 'heroku.png'
        ]);
        Skill::create([
            'name' => 'Flutter',
            'icon' => 'flutter.png'
        ]);
        Skill::create([
            'name' => 'Android Studio',
            'icon' => 'android-studio.jpg'
        ]);
        Skill::create([
            'name' => 'Figma',
            'icon' => 'figma.jpg'
        ]);
        Skill::create([
            'name' => 'GIT',
            'icon' => 'git.png'
        ]);
        Skill::create([
            'name' => 'Github',
            'icon' => 'github.png'
        ]);
    }
}
