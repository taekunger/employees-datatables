<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Print Table</title>
        <meta charset="UTF-8">
        <meta name=description content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="{{ public_path('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{public_path('/css/font-awesome.min.css')}}">
        <style>
            body {margin: 20px; color: blue;}
        </style>
    </head>
    <body>
        <table class="table table-bordered table-condensed table-striped">
            @foreach($data as $row)
                @if ($row == reset($data))
                    <tr>
                        @foreach($row as $key => $value)
                            <th>{!! $key !!}</th>
                        @endforeach
                    </tr>
                @endif
                <tr>
                    @foreach($row as $key => $value)
                        @if(is_string($value) || is_numeric($value))
                            <td>{!! $value !!}</td>
                        @else
                            <td></td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </body>
</html>
