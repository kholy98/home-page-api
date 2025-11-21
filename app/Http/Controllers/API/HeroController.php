<?php
// app/Http/Controllers/Api/HeroController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HeroResource;
use App\Models\Hero;
use Illuminate\Http\JsonResponse;

class HeroController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $hero = Hero::where('is_active', true)->first();

            if (!$hero) {
                return response()->json([
                    'success' => false,
                    'message' => 'Hero content not found',
                    'data' => null
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Hero content retrieved successfully',
                'data' => new HeroResource($hero)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve hero content',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
