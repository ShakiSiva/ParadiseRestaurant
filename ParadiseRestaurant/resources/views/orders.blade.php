<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ViewOrders</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel='stylesheet' href='/css/app.css' type='text/css'>

    </head>
    <body>
        <div class="panel">
            <div>
                <h2>Dashboard</h2>
            </div>
            
            <hr/>
            
            <div class="body">

                <div class="tab-window">
                    <div class="tabs">
                        <a href="/makeOrder">Orders</a>
                        <a style="background-color:green" href="/orders">Order Details</a>
                        <a href="/reports">Reports</a>
                    </div>
                    <div class="content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Main Dish</th>
                                    <th>Side Dish</th>
                                    <th>Dessert</th>
                                    <th>Amount</th>
                                    <th>Placed On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderList as $key => $order)
                                    <tr>
                                        <td>{{ $order->main_dish_name }}</td>
                                        <td>{{ $order->side_dish_name }}</td>
                                        <td>{{ $order->dessert_name }}</td>
                                        <td>{{ number_format($order->amount,2) }}</td>
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
            
            <hr/>

            <div>
                <form action="/logout" method="post">
                    @csrf
                    <input type="submit" id="LogOut" style="font-weight: bold" value='logout'>
                </form>
            </div>

        </div>
    </body>
</html>