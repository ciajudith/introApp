@extends('layouts.app')

@section('content')
<h1>Multiplication</h1>
<p>This is the content of page 2.</p>
<form action="{{ route('simpleMultiplication') }}" method="post">
    @csrf
    <table>
        <tr><td><input type="number" name ="a" placeholder="Number 1"></td></tr>
        <tr><td><input type="number" name ="b" placeholder="Number 2"></td></tr>
        <tr><td><input type="submit" value="Multi"></td></tr>
    </table>
</form>
<div>
    Résultat : {{ $multi }}
</div>
@endsection
