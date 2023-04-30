<?php

namespace Tests\Feature;

use App\Models\Admin\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_category_index()
    {
        $response = $this->get('admin/category');
        $response->assertStatus(302);
    }

    public function test_category_create()
    {
        $response = $this->get('admin/category/create');
        $response->assertStatus(302);
    }

    public function test_category_store()
    {
        $response = Category::create([
           'name'=>['en'=>'karim','ar'=>'كريم'],
           'image'=>'logo.png',
        ]);
        $this->assertDatabaseHas('categories',['slug'=>'karim']);
    }

    public function test_category_edit()
    {
       $category = Category::first();
       $response = $this->get('admin/category/edit/'.$category->slug);
        $response->assertStatus(302);
    }
    public function test_category_update(){
        $category = Category::first();
        $category->update([
            'name'=>['en'=>'gouda','ar'=>'كريم'],
            'image'=>'logo.png',
        ]);
        $this->assertDatabaseHas('categories',['slug'=>'gouda']);
        $response = $this->put('admin/category/update/'.$category->slug);
        $response->assertStatus(302);
    }

//    public function test_category_delete()
//    {
//        $category = Category::first();
//        $category->delete();
//        $this->assertDatabaseHas('categories',['slug'=>'karim']);
//        $response = $this->delete('admin/category/delete/'.$category->slug);
//        $response->assertStatus('200');
//    }
}
