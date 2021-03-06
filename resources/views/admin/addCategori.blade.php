@extends('admin.master')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h2>Thêm danh mục sản phẩm</h2></div>
        <div class="card-body">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                @if($errors->all())
                   <div class="alert alert-danger"> Tác vụ bị lỗi</div>
                @endif
                <div class="form-group">
                    <label for="email">Loại sản phẩm:</label>
                    <input type="text" class="form-control
                    @if($errors -> first('name'))
                    border border-danger
                    @endif
                    " name="name" placeholder="Tên sản phẩm" id="email" value="{{ old('name') }}">
                    @if($errors -> first('name'))
                    <p class="text-danger">{{ $errors -> first('name') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
