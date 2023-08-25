<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $today = Carbon::today();
        $today = Carbon::today();

        // Get total orders count for today
        $totalOrdersToday = Order::whereDate('created_at', $today)->count();
        $totalCustomers = User::where('role', 0)->count();
        $totalCategories = Category::count();
        $totalProducts = Product::count();

        $orders = Order::whereDate('created_at', $today)
        ->where('orderstatus', 0) // Assuming 0 represents pending status
        ->orWhere('orderstatus', 1) // Assuming 1 represents another status
        ->paginate(7);




        $revenueData = Order::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total) as revenue')
        )
        ->groupBy('year', 'month')
        ->orderBy('year')
        ->orderBy('month')
        ->get();

        return view('admin.dashboard.index',compact(
                    'orders',
                    'totalProducts' ,
                    'totalCustomers',
                    'totalCategories' ,
                    'totalOrdersToday',
                    'revenueData' ));



    }
}
