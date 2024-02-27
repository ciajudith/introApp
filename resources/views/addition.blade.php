@extends('layouts.app')

@section('content')
<h1>Addition</h1>
<p>This is the content of page 1.</p>
<form action="{{ route('additionSimple') }}" method="post">
    @csrf
    <table>
        <tr><td><label>
                    <input type="number" name ="a" placeholder="Number 1"/>
                </label></td></tr>
        <tr><td><label>
                    <input type="number" name ="b" placeholder="Number 2">
                </label></td></tr>
        <tr><td><input type="submit" value="Sum"></td></tr>
    </table>
</form>
<div>
Résultat : {{$sum}}
</div>
@endsection
