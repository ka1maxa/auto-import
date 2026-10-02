@extends('layouts.app')

@section('title', 'მანქანის დამატება')

@section('content')
    <h1>EDIT car</h1>

    <form method="POST" action="{{ route('admin.cars.update', $car) }}">
        @method('PUT')
        @csrf

        <label>brand</label><br>
        <input type="text" name="brand" value="{{ old('brand',$car->brand) }}"><br>
        @error('brand') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>model</label><br>
        <input type="text" name="model" value="{{ old('model',$car->model) }}"><br>
        @error('model') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>year</label><br>
        <input type="number" name="year" value="{{ old('year',$car->year) }}"><br>
        @error('year') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>price</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price',$car ->price ) }}"><br>
        @error('price') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>currency</label><br>
        <input type="text" name="currency" value="{{ old('currency', $car->currency) }}"><br>
        @error('currency') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>mileage (km)</label><br>
        <input type="number" name="mileage" value="{{ old('mileage', $car->mileage) }}"><br>
        @error('mileage') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <label>description</label><br>
        <textarea name="description">{{ old('description', $car->description) }}</textarea><br>
        @error('description') <span style="color:red">{{ $message }}</span> @enderror
        <br>

        <button type="submit">EDIT</button>
    </form>
@endsection