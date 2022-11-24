@extends( "layouts.master" )

@section( "edit" )




<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hozzáad</title>
</head>
<body>
<div class="container" style="margin-top :20px">
        <div class="row">
            <div class="col-md-12">
    <h2>Hozzáad</h2>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Siker')}}
    </div>
    @endif
    <form action="{{url('add')}}" method="post">
        @csrf
        <div class="md-3">
            <label for="form-label">Név</label>
            <input type="text" class="form-control "name="name" placeholder="Név"
            value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror

        </div>
        <div class="md-3">
            <label for="form-label">Típus</label>
            <input type="text" class="form-control "name="type" placeholder="típus"
            value="{{ old('type') }}">
            @error('type')
            <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror

        </div>
        <div class="md-3">
            <label for="form-label">Ár</label>
            <input type="text" class="form-control "name="price"
            value="{{ old('price') }}" placeholder="Ár">
            @error('price')
            <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror


            <!-- <button type="submit" class="btn btn-outline-warning mt-3">Mentés</button> -->
            <a href="{{url('/')}}"
            type="submit" class="btn btn-outline-danger mt-3">Mentés</a>
        </div>
    </form>
</div>
</div>

</body>
</html>

@endsection