@extends('layouts.app')

@section('title', 'მანქანები')

@section('content')
    <h1>მანქანები</h1>

    <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>ბრენდი</th>
                <th>მოდელი</th>
                <th>წელი</th>
                <th>ფასი</th>
                <th>სტატუსი</th>
                <th>photo</th>
                <th>დილერი</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->price }} {{ $car->currency }}</td>
                    <td>{{ $car->status }}</td>
                    <td>{{ $car->path}}</td>
                    <td>{{ $car->dealer?->name ?? '—' }}</td>
                    <td><a href="{{ route('admin.cars.edit', $car) }}">EDIT</a></td>
                    <td>
                        <form method="POST" action="{{ route('admin.cars.destroy', $car )}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">მანქანები ჯერ არ არის დამატებული.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection