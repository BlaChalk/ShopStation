@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Category Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Category Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        <div class="toolbox clearfix">
            <a href="/admin/categories/create" class="btn btn-primary pull-right mr-1 mt-2">Create Category</a>
        </div>

        <ul class="list-group">
            @foreach ($mainCategories as $item => $mainCategory)
             <li  class="list-group-item clearfix shadow-sm mt-1">
                <div class="float-left col-lg-2 mt-2 font-weight-bold">
                    <div><a href="/admin/categories/{{ $mainCategory->id }}/edit">{{ $mainCategory->main_name }}</a></div>
                </div>
                <div class="float-left col-lg-2">
                    @if (!$mainCategory->thumbnail)
                        <div class="text-danger mt-2">no Picture</div>
                    @else
                <img width="50" src="{{ $mainCategory->thumbnail }}" alt="thumbnail">
                    @endif
                </div>
                <span class="col-lg-6">
                    @foreach ($categories as $item => $category)
                        @if ($category->main_category_id == $mainCategory->id)
                            <div class="badge badge-primary text-wrap mt-2 p-1" style="">
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

<form id='delete-form' action="/admin/categories/id" method="post">
    <input type="hidden" name="_method" value="delete">
    @csrf
</form>

@endsection
