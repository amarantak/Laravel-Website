<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

/**
 * PagesController handles requests to static pages in the application.
 * 
 * This controller manages the 'index', 'about', and 'services' pages.
 * It passes data (like the page title or list of services) to the views for
 * dynamic content rendering.
 */

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to my app';
        $id = 5;
        // Fetch the last three posts
        $posts = Post::latest()->take(3)->get();

        // Assign each post to separate variables
        $post1 = $posts->get(0); // First post
        $post2 = $posts->get(1); // Second post
        $post3 = $posts->get(2); // Third post

        return view('pages.index')->with([
            'id' => $id,
            'title' => $title,
            'post1' => $post1,
            'post2' => $post2,
            'post3' => $post3,
        ]);
    }

    public function about()
    {
        $title = 'About Page';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'programming', 'SEO']

        );

        return view('pages.services')->with($data);
    }
}
