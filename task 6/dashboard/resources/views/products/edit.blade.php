@extends('layouts.parent')
@section('title', 'edit product')
@section('content')

    <div class="row">
        <div class="col-12 ">
            <div class="card ">
                <div class="card-header  bg-warning">
                    <h5>product informations</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.products.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name_en">name(EN)</label>
                                <input type="text" name="name_en" id="name_en" value="{{ old('name_en') }}"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                                @error('name_en')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="name_ar">name(AR)</label>
                                <input type="text" name="name_ar" id="name_ar" value="{{ old('name_ar') }}"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                                @error('name_ar')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="code">code</label>
                                <input type="number" name="code" value="{{ old('code') }}" id="code"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                                @error('code')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="price">price</label>
                                <input type="number" name="price" value="{{ old('price') }}" id="price"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                                @error('price')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="quantity">quantity</label>
                                <input type="number" name="quantity" value="{{ old('quantity') }}" id="quantity"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                                @error('quantity')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="status">Status </label>
                                <select name="status" id="status" class="form-control">
                                    <option @selected(old('status') == 1) value="1">Active</option>
                                    <option @selected(old('status') == 0) value="0">Not Active</option>
                                </select>
                                @error('status')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="brand_id">brand </label>
                                <select name="brand_id" id="brand_id" class="form-control">

                                </select>
                                @error('brand_id')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="subcategory_id">subcategory </label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control">
                                   
                                </select>
                                @error('subcategory_id')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="desc_en">desc(EN)</label>
                                <textarea name="desc_en" id="desc_en" cols="30" rows="10" class="form-control">{{ old('desc_en') }}</textarea>
                                @error('desc_en')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="desc_ar">desc(AR)</label>
                                <textarea name="desc_ar" id="desc_ar" cols="30" rows="10" class="form-control">{{ old('desc_ar') }}</textarea>
                                @error('desc_ar')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <input type="file" name="image" class="form-control" id="">
                                @error('image')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mt-5">
                                <button class="btn btn-outline-warning btn-sm"> create </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
