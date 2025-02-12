<?php

namespace App\Http\Controllers;

use App\Models\multiple_images;
use Illuminate\Http\Request;

class MultipleImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multipleimage = multiple_images::orderBy('created_at', 'DESC')->get();
        return response()->json([
            'status' => 200,
            'data' => $multipleimage
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $request->validate([
                // 'user_name' => 'required|string',
                // 'user_email' => 'required|email',
                // 'multiple_images' => 'required|array|min:1',
                // 'multiple_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate each file
            ]);

            // Upload images to the server
            $imagePaths = [];
            if ($request->hasFile('multiple_images')) {
                foreach ($request->file('multiple_images') as $image) {
                    // Store each image in the public disk
                    $path = $image->store('images', 'public');
                    $imagePaths[] = $path;
                }
            }

            // Store user data and associated image paths in the database
            $user = multiple_images::create([
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'multiple_images' => json_encode($imagePaths), // Store the image paths in JSON format
            ]);

            return response()->json(['message' => 'User created successfully', 'user' => $user]);
        } catch (\Exception $e) {
            // Log the exception message if needed
            // Log::error($e->getMessage());

            // Return a JSON response with the error message
            return response()->json([
                'message' => 'An error occurred while uploading the data.',
                'error' => $e->getMessage()
            ], 500);  // 500 indicates a server error
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(multiple_images $multiple_images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(multiple_images $multiple_images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, multiple_images $multiple_images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(multiple_images $multiple_images)
    {
        //
    }
}
