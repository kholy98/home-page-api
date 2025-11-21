<?php
// app/Http/Controllers/Api/TestimonialController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;

class TestimonialController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $testimonials = Testimonial::where('is_active', true)->get();

            return response()->json([
                'success' => true,
                'message' => 'Testimonials retrieved successfully',
                'data' => TestimonialResource::collection($testimonials)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve testimonials',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
