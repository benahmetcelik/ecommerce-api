<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CheckRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{

    final function me(AuthService $authService,CheckRequest $request): JsonResponse
    {
        return $authService->me($request);
    }

    /**
     * @param AuthService $authService
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    final function register(AuthService $authService,RegisterRequest $request): JsonResponse
    {
        return $authService->register($request->validated());
    }

    final function login(AuthService $authService,LoginRequest $request): JsonResponse
    {
        return $authService->login($request->validated());
    }

    final function logout(AuthService $authService,RegisterRequest $request): JsonResponse
    {
        return $authService->logout($request->validated());
    }


}
