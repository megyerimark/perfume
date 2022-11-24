

@extends( "layouts.perfume" )

@section( "list" )


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfüm Lista</title>
</head>
<body>
    <div class="container" style="margin-top :20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Parfüm Lista</h2>
                <div style="margin-right:10% ">
                    <a href="{{url('add')}}" class="btn btn-outline-primary mt-3" style="float: right">Hozzáad</a>
                    @if(Session::has('success', 'sikerült'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Siker')}}
    </div>
    @endif
                </div>
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Név</th>
                            <th>Típus</th>
                            <th>Ár (FT)</th>
                           
                        </tr>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp

                            @foreach ( $data as $per)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$per->name}}</td>
                                <td>{{$per->type}}</td>
                                <td>{{$per->price}}</td>
                               
                                <td> <a href="{{url('edit/'.$per->id)}}" class="btn btn-outline-primary " >Új parfüm hozzáadása</a>  
                                <a href="{{url('delete/'.$per->id)}}" class="btn btn-outline-danger ">Törlés</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </thead>

                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection