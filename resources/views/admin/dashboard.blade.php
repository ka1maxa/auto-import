@extends('layouts.app')

@section('title', 'dashboard')

@section('content')
<p>სულ მანქანა: {{ $carsCount }}</p>
<p>ხელმისაწვდომი: {{ $availableCount }}</p>

<a href="{{ route('admin.car.index') }}">cars</a><br><br>
<a href="{{ route('admin.car.create') }}">add cars</a>
@endsection