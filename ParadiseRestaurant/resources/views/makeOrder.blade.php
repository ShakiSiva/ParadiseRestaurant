<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>makeOrder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel='stylesheet' href='/css/app.css' type='text/css'>

    </head>
    <body>
        <div class="panel" style="text-align:center">
            <div>
                <img style="width:100%;height:350px" src="{{ url('/images/slide1.jpg') }}" alt="food">
        
            </div>
            
            <hr/>
            
            <div class="body">

                @if ($message = Session::get('Success'))
                    <div class="message">
                        {{ $message }}
                    </div>
                    <br>
                @endif

                <form action='/order' method='post'>

                    @csrf
                    
                    <div class="input-box">
                        <div class='label'>Main Dish</div>
                        <div>
                            <select name='main_dishes'>
                                @foreach($mainDishList as $key => $obj)
                                    <option value="{{$obj->id}}">{{$obj->main_dish_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class='label'>Side Dish</div>
                        <div>
                            <select name='side_dishes'>
                                @foreach($sideDishList as $key => $obj)
                                    <option value="{{$obj->id}}">{{$obj->side_dish_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-box">
                        <div class='label'>Dessert</div>
                        <div>
                            <select name='desserts'>
                                @foreach($dessertList as $key => $obj)
                                    <option value="{{$obj->id}}">{{$obj->dessert_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit">Order</button>

                </form>
            </div>
            
            <hr/>

            <div>
                <a href='/orders' onmouseover="color:Yellow">View Order Details</a>
            </div>

        </div>
    </body>
</html>
