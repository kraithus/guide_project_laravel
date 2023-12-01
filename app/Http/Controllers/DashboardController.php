<?php

namespace App\Http\Controllers;

use App\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {   
        $data = [
            'posts' => $this->postRepository->getAllPosts()
        ];

        return view('dashboard', $data);
    }
}
