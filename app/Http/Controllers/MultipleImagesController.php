<?php

namespace App\Http\Controllers;

use App\Models\multiple_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                'user_name' => 'required|string',
                'user_email' => 'required|email',
                'multiple_images' => 'required|array|min:1',
                'multiple_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate each file
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
    public function show($id)
    {
        $mpimages = multiple_images::find($id);
        if ($mpimages == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Image Not Found.',
                'data' => []
            ], 404);
        }
        return response()->json([
            'status' => 200,
            'data' => $mpimages
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $mpimages = multiple_images::find($id);

        // Check if the record exists
        if ($mpimages == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Images Not Found.',
                'data' => []
            ], 404);
        }

        // Validate user_name, user_email, and image files
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'multiple_images' => 'nullable|array',
            'multiple_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Optional validation for images
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()
            ], 400);
        }

        // Initialize an empty array for storing image paths
        $imagePaths = [];

        // Check if there are new images uploaded
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $image) {
                // Store each image in the public disk
                $path = $image->store('images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Update the existing record
        $mpimages->user_name = $request->user_name;
        $mpimages->user_email = $request->user_email;

        // If images were uploaded, store them
        if (!empty($imagePaths)) {
            $mpimages->multiple_images = json_encode($imagePaths); // Save the image paths as a JSON array
        }

        $mpimages->save(); // Save the updated record

        return response()->json([
            'status' => 200,
            'message' => 'Images Updated Successfully.',
            'data' => $mpimages
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mulimages = multiple_images::find($id);
        if ($mulimages == null) {
            return response()->json([
                'status' => 404,
                'message' => 'Images Not Found.',
                'data' => []
            ], 404);
        }
        $mulimages->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Images delete Successfully.',
        ], 200);
    }
}
