<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $count=0;
        $pages =['Haqqimda','Kariyera','misyonumuz'];
        foreach ($pages as  $page) {
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVOG6lt593l4jb3jIip2W1hYIFHZbVnoK6eg&usqp=CAU',
                'content'=>'lorem kcksadhfksdaf sfhsadkjksadj sfksdhfkhsdafkhsdakf skdjhfksdahfkjadsh sdafhsakjhfksad fsdhfjsdk',
                'slug'=>Str::slug($page),
                'created_at'=>now(),
                'order'=>$count,
                'updated_at'=>now()
                ]);
      
    }}
}
