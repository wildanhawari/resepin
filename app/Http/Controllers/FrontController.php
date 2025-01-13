<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Bookmark;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function home() {
        $categories = Category::all();
        $foods = Food::all();

        return view('front.index', compact('categories', 'foods'));
    }

    public function search(Request $request) {
        // Ambil query pencarian dari input pengguna
        $search = $request->input('search');

        // Jika ada input pencarian, gunakan scope 'search' untuk mencari resep berdasarkan nama
        if ($search) {
            $foods = Food::search($search)->get();
        } else {
            // Jika tidak ada input pencarian, tampilkan semua resep
            $foods = Food::all();
        }

        return view('front.search', compact('foods'));
    }

    // public function bookmark() {
    //     return view('front.bookmark');
    // }

    public function profile() {
        return view('front.profile');
    }

    public function category(Category $category) {
        $foods = $category->foods;
        return view('front.category', compact('category', 'foods'));
    }

    public function food(Food $food) {
        $food->load('foodIngredients.ingredient');

        return view('front.detail', compact('food'));
    }

    public function bookmark()
{
    $bookmarks = Bookmark::where('user_id', Auth::id())->with('food')->get();
    // dd($bookmarks);
    return view('front.bookmark', compact('bookmarks'));
}


public function toggleBookmark(Food $food)
{
    $user = Auth::user();

    // Pastikan user sudah terautentikasi
    if (!$user) {
        return redirect()->back()->with('error', 'You must be logged in to bookmark.');
    }

    // Periksa apakah sudah di-bookmark
    $isBookmarked = $user->bookmarks()->where('food_id', $food->id)->exists();

    if ($isBookmarked) {
        // Hapus bookmark
        $user->bookmarks()->detach($food->id);
        return redirect()->back()->with('success', 'Bookmark removed.');
    }

    // Tambahkan bookmark
    $user->bookmarks()->attach($food->id);
    return redirect()->back()->with('success', 'Bookmark added.');
}


    public function bookmarkDelete(Bookmark $bookmark) {
        $bookmark->delete();
        Alert::toast('Bookmark berhasil dihapus!', 'success');
        return redirect()->back()->with('success', 'Bookmark berhasil dihapus.');
    }

    public function tutorial(Food $food) {
        $food->load('tutorials');
        return view('front.tutorial', compact('food'));
    }





}
