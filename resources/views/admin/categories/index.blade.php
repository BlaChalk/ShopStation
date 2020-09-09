@extends('layouts.app')

@section('content')
<section class="page-content">
    <div class="container">

        <ul class="list-group">
            @foreach ($mainCategories as $item => $mainCategory)
             <li  class="list-group-item clearfix shadow-sm mt-1">
                <div class="float-left col-lg-3 mt-2 font-weight-bold">
                    <div><a href="/admin/categories/{{ $mainCategory->id }}/edit">{{ $mainCategory->main_name }}</a></div>
                </div>
                <span class="col-lg-6">
                    @foreach ($categories as $item => $category)
                        @if ($category->main_category_id == $mainCategory->id)
                            <div class="badge badge-primary text-wrap p-1" style="">
                                {{ $category->name }}
                            </div>
                        @endif
                    @endforeach
                    <div class="float-right">
                        <a href="/admin/categories/{{ $mainCategory->id }}/edit" class="btn btn-primary" >edit</a>
                        <button class="btn btn-danger" onclick="deleteMainCategory({{ $mainCategory->id }})">delete</button>
                    </div>
                </span>
             </li>
            @endforeach
        </ul>

    </div>
</section>
@endsection
