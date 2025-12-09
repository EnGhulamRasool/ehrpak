<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_candidates' => User::where('role', 'candidate')->count(),
            'active_candidates' => User::where('role', 'candidate')->where('status', 'active')->count(),
            'inactive_candidates' => User::where('role', 'candidate')->where('status', 'inactive')->count(),
        ];

        return Inertia::render('Admin/Dashboard', [
            'stats' => $stats,
        ]);
    }
}
