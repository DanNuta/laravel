@extends("layouts")
<head>
    <link rel="stylesheet" href="css/home.css">
</head>
@section("content")
<h1>Home</h1>

@php
$value = 0;
$elevi = [
    ["nume" => "Dan", "age" => 15],
    ["nume" => "Vasile", "age" => 20],
    ["nume" => "Ion", "age" => 45],
]
@endphp


@foreach ($elevi as $item)

 @if ($item["nume"] === "Vasile")
 <div class="div">
    <h5>{{ $item["nume"] }}</h2>
    <h5>{{ $item["age"] }}</h2>
  </div> 
 @endif 
@endforeach



@for ($i = 0; $i <= 100; $i++)
    @if ($i % 2 === 0)
        @php
            $value = $value + $i;
        @endphp
    @endif
@endfor

{{ $value }}

@endsection

