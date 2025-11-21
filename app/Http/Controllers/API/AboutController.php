<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\JsonResponse;

class AboutController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $about = About::where('is_active', true)->first();

            if (!$about) {
                return response()->json([
                    'success' => false,
                    'message' => 'About content not found',
                    'data' => null
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'About content retrieved successfully',
                'data' => new AboutResource($about)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve about content',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
