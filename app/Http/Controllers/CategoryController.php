<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $language = $request->get('lang', 'en'); // تحديد اللغة الافتراضية
        $categories = Category::all()->map(function ($category) use ($language) {
            return [
                'id' => $category->id,
                'name' => $category->name[$language] ?? $category->name['en'], // عرض الاسم باللغة المطلوبة
            ];
        });

        return response()->json($categories);
    }
}