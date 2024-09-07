<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    // Display the form for creating a new category
    public function create()
    {
        return view('admin.categories.create');
    }

    // Store a newly created category in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $category->image =  $this->optimiser($request->file('image'), 'category_', 'images');
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    // Display the form for editing the specified category
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    // Update the specified category in the database
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('image')) {
            $category->image = $this->optimiser($request->file('image'), 'category_', 'images');
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }


    private function optimiser($file, string $name, string $path): string
    {
        $imageName = $name . time() . '.' . $file->extension();
        $file->move(public_path($path), $imageName);
        return $imageName;
    }
    public function destroy(Category $category)
{
    // Delete the associated image if it exists
    if ($category->image) {
        Storage::disk('public')->delete($category->image);
    }

    // Delete the category
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
}
}
