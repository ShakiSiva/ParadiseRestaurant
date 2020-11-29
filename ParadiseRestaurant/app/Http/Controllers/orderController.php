<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainDish;
use App\SideDish;
use App\Order;
use App\Dessert;
use Carbon\Carbon;
use DB;

class orderController extends Controller
{
    public function index() {

    	$mainDishes = MainDish::get();
        $sideDishes = SideDish::get();
        $desserts = Dessert::get();

    	return view('makeOrder',[
    		'mainDishList' => $mainDishes,
            'sideDishList' => $sideDishes,
            'dessertList' => $desserts,
        ]);
       
    }

    public function order(Request $request) {
    	
    	$arrInputData = $request->input();

    	$objMainDish = MainDish::find($arrInputData['main_dishes']);
        $objSideDish = SideDish::find($arrInputData['side_dishes']);
        $objdessert = Dessert::find($arrInputData['desserts']);

    	$objOrder = new Order();
    	$objOrder->main_dishes = $objMainDish->id;
        $objOrder->side_dishes = $objSideDish->id;
        $objOrder->desserts = $objdessert->id;
    	$objOrder->amount = (float)$objMainDish->price + (float)$objSideDish->price + (float)$objdessert->price;
    	$objOrder->save();

    	return back()->with('Success','Order has been created successfully!');

    }

    public function showOrder(Request $request) {

        $objOrder = Order::join('main_dishes','main_dishes.id','=','orders.main_dishes')
                    ->join('side_dishes','side_dishes.id','=','orders.side_dishes')
                    ->join('desserts','desserts.id','=','orders.desserts')
                    ->get();
    	return view('orders', ['orderList' => $objOrder]);

    }


    public function makeReports(Request $request) {

        $orderObject = new Order();

        $arrOrders = $orderObject->get();
        $formattedOrderList = [];

        foreach ($arrOrders as $key => $order) {

            $dateString = $order->created_at->format('m/d/Y');

            if (empty($formattedOrderList[$dateString])) {
                $formattedOrderList[$dateString] = (float)$order->amount;
            } else {
                $formattedOrderList[$dateString] = (float)$formattedOrderList[$dateString] + (float)$order->amount;
            }
        }


        $topMainDishes = DB::table('orders')
                        ->select('orders.main_dishes','main_dishes.main_dish_name',DB::raw('COUNT(main_dishes) as count'))
                        ->join('main_dishes','main_dishes.id','=','orders.main_dishes')
                        ->groupBy('main_dishes','main_dishes.main_dish_name')
                        ->orderBy('count','desc')
                        ->get();

        $topSideDishes = DB::table('orders')
                        ->select('orders.side_dishes','side_dishes.side_dish_name',DB::raw('COUNT(side_dishes) as count'))
                        ->join('side_dishes','side_dishes.id','=','orders.side_dishes')
                        ->groupBy('side_dishes','side_dishes.side_dish_name')
                        ->orderBy('count','desc')
                        ->get();

        $topSideDishWithMainDishes = DB::table('orders')
                                    ->select('side_dishes.side_dish_name','main_dishes.main_dish_name', DB::raw('COUNT(side_dishes) as count'))
                                    ->join('side_dishes','side_dishes.id','=','orders.side_dishes')
                                    ->join('main_dishes','main_dishes.id','=','orders.main_dishes')
                                    ->groupBy('side_dishes','side_dishes.side_dish_name')
                                    ->groupBy('main_dishes','main_dishes.main_dish_name')
                                    ->orderBy('count','desc')
                                    ->get();
        return view('report',[
            'dailyRevenue' => $formattedOrderList,
            'topMainDishes' => $topMainDishes,
            'topSideDishes' => $topSideDishes,
            'topSideDishWithMainDishes'=>$topSideDishWithMainDishes,
        ]);
        }
        
 
                               
    
}
