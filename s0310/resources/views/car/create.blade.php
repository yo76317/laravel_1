<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>單筆新增</title>
</head>
<body>
    <div class="container">
        <h2>單筆新增</h2>
        <hr>
        <p></p>
        {{-- <form action="{{route('cars.myform123')}}" method="post"> --}}
        <form action="{{route('cars.store')}}" method="post">
            @csrf 
            {{-- 等同下列 --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            {{-- <input type="hidden" name="_token" value="123" /> --}}

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>名字</th>
                        <th>國文</th>
                        <th>英文</th>
                        <th>數學</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="name" id="name"></td>
                        <td><input type="text" name="chines" id="chines"></td>
                        <td><input type="text" name="english" id="english"></td>
                        <td><input type="text" name="math" id="math"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>