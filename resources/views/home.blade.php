@extends('layouts.main-layout')

@section('content')
<main>


<div class="">
  <h2>LE LUNGHE</h2>
  @foreach ($data as $d)

    @if ( $d['tipo'] == "lunga")

      <img src="{{$d['src']}}" alt="{{ $d['titolo']}}">

    @endif
  @endforeach
</div>
<div class="">
  <h2>LE CORTE</h2>
  @foreach ($data as $d)

    @if ( $d['tipo'] == "corta")

      <img src="{{$d['src']}}" alt="{{ $d['titolo']}}">

    @endif
  @endforeach
</div>
<div class="">
  <h2>LE CORTISSIME</h2>
  @foreach ($data as $d)

    @if ( $d['tipo'] == "cortissima")

      <img src="{{$d['src']}}" alt="{{ $d['titolo']}}">

    @endif
  @endforeach
</div>

</main>


@endsection
