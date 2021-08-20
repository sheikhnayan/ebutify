<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('product_details')->insert(
        [
            'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'alexa_rank' => '79277',
            'age' => 'Under 18',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
            'user_id' => 1,
            'created_at' => date("Y/m/d"),
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7997',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
       	[
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7977',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7977',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7977',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '71277',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7977',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7997',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ],
        [
        	'product_name' => 'Laser Therapy Watch',
            'price' => '99.99',
            'cost' => '29.39',
            'profit' => '70.60',
            'total_order' => '22',
            'total_revenue' => '646.58',
            'age' => 'Under 18',
            'alexa_rank' => '7991',
            'product_type_id' => '1',
            'category_id' => '1',
            'gender_id' => '1',
            'country_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ipsum quam, euismod non commodo id, placerat vel nulla. Proin vitae ante bibendum, efficitur diam ac, blandit neque. Phasellus sagittis eros turpis, eu lobortis erat molestie vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec gravida sapien. Nullam pulvinar odio at erat sollicitudin fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris leo lectus, suscipit pretium lorem eu, sagittis semper libero. Sed sed euismod nunc. Donec iaculis dui in congue dapibus. Sed nec consectetur lacus. Aenean placerat, orci eget tristique aliquam, felis eros ornare nibh, vitae consequat diam felis nec augue. Cras eu interdum orci.',
            'status' => 'Available',
            'uploader_name' => 'Test Freelancer',
        ]
    );
    }
}