@extends('layouts/app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Product Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Product Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">

            <div class="toolbox clearfix">
                <a href="/admin/product-details/create" class="btn btn-primary pull-right mr-1 mt-2">Create Product</a>
            </div>

            @foreach ($productDetails as $productDetail)
                <div class="navbar bg-light shadow-sm border border-gray">
                    <div class="col-lg-2">
                        <h2 class="mb-0">{{ $productDetail->name }}</h2>
                        <small class="d-block text-muted"> 系列 / {{ $productDetail->serialName }}</small>
                        @foreach ($categories as $category)
                            @if ($productDetail->category_id == $category->id)
                                <small class="d-block text-muted"> 總類 / {{ $category->name }}</small>
                            @endif
                        @endforeach
                        <small class="d-block text-muted"> 價錢 / {{ $productDetail->price }}</small>
                    </div>
                    <div class="col-lg-2">
                        @if (!$productDetail->bigPicture)
                            <div class="text-danger">no Picture</div>
                        @else
                            <img width="100" src="{{ $productDetail->bigPicture}}" alt="bigPicture">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        {{ $productDetail->content }}
                    </div>
                    {{-- @if (isset($productDetail->category))
                        <small class="d-block text-muted">Category / {{ $productDetail->category->name }}</small>
                    @endif
                    @if ($productDetail->tags->count()>0)
                        <small class="d-block text-muted">Tags / {{ $productDetail->tagsString() }}</small>
                    @endif --}}
                    <div class="toolbox clearfix mt-3">
                        <div class="float-left">
                        <a href="/admin/product-details/{{ $productDetail->id }}/edit" class="btn btn-primary">edit</a>
                        <button class="btn btn-danger" onclick="deleteproductDetail({{ $productDetail->id }})">delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<form id='delete-form' action="/admin/product-details/id" method="post">
    <input type="hidden" name="_method" value="delete">
    @csrf
</form>

@endsection
