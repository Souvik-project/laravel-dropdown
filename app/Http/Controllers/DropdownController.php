<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class DropdownController extends Controller
{
    public function create()
    {
        $categories = ['PHP', 'CodeIgniter', 'Laravel', 'HTML', 'JavaScript', 'CSS', 'Ajax'];
        return view('create', compact('categories'));
    }
	
	  public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'cat' => 'required|array',
        ]);

        $input = $request->all();
        $input['cat'] = json_encode($input['cat']);

        Todo::create($input);

        return redirect()->route('create')->with('success', 'Post created successfully.');
    }
	public function index()
	{
		$todos=Todo::all();
		return view('index', compact('todos'));
		
		
	}
	
	
	
	
}
