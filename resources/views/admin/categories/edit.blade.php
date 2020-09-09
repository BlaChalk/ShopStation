@extends('layouts.app')

@section('content')
<section class="page-content">
    <div class="container">

        <form action="/admin/categories/{{ $mainCategory->id }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="">主分類</label>
                <input type="text" name="main_name" class="form-control" id="" placeholder="" value="{{ $mainCategory->main_name }}">
            </div>
            <label for="">子種類</label>
            <ul class="list-group mb-3">
                @foreach ($categories as $item => $category)
                    @if ($category->main_category_id == $mainCategory->id)
                        <li class="list-group-item clearfix">
                            <div class="float-left">
                                <input type="text" name="name" class="form-control categoryId" id="" placeholder="" data-id="{{ $category->id }}" value="{{ $category->name }}">
                            </div>
                            <span class="float-right">
                                <button class="btn btn-danger" onclick="deleteCategory({{ $category->id }})">delete</button>
                            </span>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" onclick="updateCategoryName({{ $mainCategory->id }})">確認</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">取消</button>
            </div>
        </form>

    </div>
</section>
@endsection

