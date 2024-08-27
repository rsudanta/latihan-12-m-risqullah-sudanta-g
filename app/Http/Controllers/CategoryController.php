<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $categories = [
            [
                "id" => "S001",
                "name" => "Samsung",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => "A001",
                "name" => "Apple",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => "O001",
                "name" => "Oppo",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => "V001",
                "name" => "Vivo",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => "X001",
                "name" => "Xiaomi",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];


        $products = [
            [
                "id" => 1,
                "name" => "Samsung Galaxy S24 Ultra",
                "category_id" => "S001",
                "price" => 11990000,
                "discount_percentage" => 10,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 2,
                "name" => "Samsung Galaxy S24+",
                "category_id" => "S001",
                "price" => 9990000,
                "discount_percentage" => 5,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 3,
                "name" => "Samsung Galaxy S24",
                "category_id" => "S001",
                "price" => 8490000,
                "discount_percentage" => 15,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 4,
                "name" => "iPhone 15 Pro Max",
                "category_id" => "A001",
                "price" => 13990000,
                "discount_percentage" => 8,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 5,
                "name" => "iPhone 15",
                "category_id" => "A001",
                "price" => 9990000,
                "discount_percentage" => 12,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 6,
                "name" => "Oppo Find X6 Pro",
                "category_id" => "O001",
                "price" => 11990000,
                "discount_percentage" => 7,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 7,
                "name" => "Oppo Reno 8 Pro",
                "category_id" => "O001",
                "price" => 7990000,
                "discount_percentage" => 10,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 8,
                "name" => "Vivo X90 Pro",
                "category_id" => "V001",
                "price" => 10990000,
                "discount_percentage" => 6,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 9,
                "name" => "Vivo V27 Pro",
                "category_id" => "V001",
                "price" => 6990000,
                "discount_percentage" => 14,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 10,
                "name" => "Xiaomi 13 Pro",
                "category_id" => "X001",
                "price" => 11990000,
                "discount_percentage" => 9,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 11,
                "name" => "Xiaomi Mi 12",
                "category_id" => "X001",
                "price" => 7490000,
                "discount_percentage" => 11,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        foreach($products as &$product){
            $product['discount_price'] = $product['price'] - ($product['price'] * ($product['discount_percentage'] /100));
        }

        return view("kategori.index", compact("categories", "products"));
    }
}
