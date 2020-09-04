@extends('layouts.app')

@section('page-title')

@endsection

@section('content')
<section class="page-content">
    <div class="container">
        <form method="POST" action="/admin/product-details">
            @csrf
            <div class="form-group">
                <label for="name">產品名稱</label>
                <input type="text" class="form-control" name="name" id="" placeholder="">
            </div>
            <div class="form-group">
                <label for="serialName">系列</label>
                <input type="text" class="form-control" name="serialName" id="" placeholder="時尚設計型...">
            </div>
            <div class="form-group">
                <label for="category">產品種類</label>
                <select class="form-control" name="category_id" id="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">產品價格</label>
                <input type="text" class="form-control" name="price" id="" placeholder="輸入數字">
            </div>
            <div class="form-group">
                <label for="bigPicture">產品照片</label>
                <input type="file" name="bigPicture" class="form-control-file" id="">
              </div>
            <div class="form-group">
                <label for="content">產品介紹</label>
                <textarea class="form-control" name="content" id="" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="content">詳細介紹</label>
                <textarea class="form-control" name="productDetail" id="" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="specification">產品規格表</label>
                <textarea class="form-control" name="specification" id="" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">確認</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">取消</button>
        </form>
    </div>
</section>
@endsection
