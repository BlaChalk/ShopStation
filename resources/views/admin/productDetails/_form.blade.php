@php
    $isCreate = !$productDetail->exists;
    $actionURL = ($isCreate)? '/product-details' : '/product-details/'.$productDetail->id;
@endphp

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item => $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/admin{{ $actionURL }}" enctype="multipart/form-data">
    @csrf
    @if (!$isCreate)
        <input type="hidden" name="_method" value="put">
    @endif
    <div class="form-group">
        <label for="name">產品名稱</label>
        <input type="text" name="name" class="form-control" id="" placeholder="" value="{{ $productDetail->name }}">
    </div>
    <div class="form-group">
        <label for="serialName">系列</label>
        <input type="text" name="serialName" class="form-control" id="" placeholder="時尚設計型..." value="{{ $productDetail->serialName }}">
    </div>
    <div class="form-group">
        <label for="category">產品種類</label>
        <select name="category_id" class="form-control" id="">
            @foreach ($mainCategories as $item => $mainCategory)
                <optgroup label="{{ $mainCategory->main_name }}">
                    @foreach ($categories as $item => $category)
                        @if ($category->main_category_id == $mainCategory->id)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="price">產品價格</label>
        <input type="text" name="price" class="form-control" id="" placeholder="輸入數字" value="{{ $productDetail->price }}">
    </div>
    <div class="form-group">
        <label class="form-inline" for="">產品照片</label>
        @if ($productDetail->bigPicture)
            <img width="320" src="{{ $productDetail->bigPicture }}" alt="bigPicture">
        @endif
        <div class="custom-file">
            <input type="file" name="bigPicture" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        {{-- <input id="input-1" type="file" name="bigPicture" class="file" data-preview-file-type="text"  data-show-upload="false"  multiple="multiple"> --}}
    </div>
    <div class="form-group">
        <label for="content">產品介紹</label>
        <textarea name="content" class="form-control" id="" rows="3">{{ $productDetail->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="content">詳細介紹</label>
        <textarea name="productDetail" class="form-control" id="" rows="6">{{ $productDetail->productDetail }}</textarea>
    </div>
    <div class="form-group">
        <label for="specification" >產品規格表</label>
        <textarea name="specification" class="form-control" id="" rows="6">{{ $productDetail->specification }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">確認</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back()">取消</button>
</form>
