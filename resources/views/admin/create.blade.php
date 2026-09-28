@extends('layouts.app')

@section('title', 'მანქანის დამატება')

@section('content')
<a href="{{ route('admin.car.index') }}">← უკან</a>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('admin.car.store') }}">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="სახელი">

    <select name="status">
        <option value="available">available</option>
        <option value="sold">sold</option>
    </select>

    <button type="submit">შენახვა</button>
</form>
@endsection