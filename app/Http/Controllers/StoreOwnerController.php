<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use Carbon\Carbon;

use Illuminate\Http\Request;

class StoreOwnerController extends Controller
{
    public function index()
    {
        $customerCount = Sale::distinct('user_id')->count('user_id');

        // Number of total transactions
        $transactionCount = Sale::count();

        // Total quantity ordered
        $totalQuantityOrdered = Sale::sum('quantity_sold');

        // Top customer by total amount ordered
        $topCustomer = Sale::with('user')
            ->selectRaw('user_id, SUM(total_amount) as total_spent')
            ->groupBy('user_id')
            ->orderByDesc('total_spent')
            ->first()
            ->user->name ?? 'N/A';

        // Customers to Target: Customers with the most number of orders
        $customersToTarget = Sale::with('user')
            ->selectRaw('user_id, COUNT(*) as order_count')
            ->groupBy('user_id')
            ->orderByDesc('order_count')
            ->take(5)
            ->get()
            ->pluck('order_count', 'user.name');

        // Customers with last purchase date and days since last purchase
        $customersWithLastPurchase = Sale::with('user')
            ->selectRaw('user_id, MAX(sale_date) as last_purchase_date')
            ->groupBy('user_id')
            ->orderByDesc('last_purchase_date')
            ->get()
            ->map(function ($sale) {
                return [
                    'name' => $sale->user->name ?? 'Unknown',
                    'last_purchase_date' => Carbon::parse($sale->last_purchase_date)->format('d-m-Y'),
                    'days_since_last_purchase' => Carbon::parse($sale->last_purchase_date)->diffInDays(now()),
                ];
            });

        // Trend by Customer Visits & Quantity Ordered (Group by Month)
        $salesByMonth = Sale::selectRaw('MONTH(sale_date) as month, SUM(quantity_sold) as total_quantity')
            ->groupBy('month')
            ->get();
        $months = $salesByMonth->pluck('month')->map(function ($month) {
            return Carbon::createFromDate(null, $month, 1)->format('F');
        });
        $quantities = $salesByMonth->pluck('total_quantity');

        return view('shops.index', compact(
            'customerCount',
            'transactionCount',
            'totalQuantityOrdered',
            'topCustomer',
            'customersToTarget',
            'customersWithLastPurchase',
            'months',
            'quantities'
        ));
    }
}
