<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VisitorCounterController extends Controller
{
    public function index(Request $request)
    {
        $ipAddress = $request->ip();
        $visitor = Visitor::firstOrNew(['ipAddress' => $ipAddress]);
        if ($visitor->ipAddress === $ipAddress) {
            $visitor->count++;
        } else {
            $visitor->ipAddress = $ipAddress;
            $visitor->count = 1;
        }

        $visitor->save();

        return response()->json(['count' => $visitor->count]);
    }
}
