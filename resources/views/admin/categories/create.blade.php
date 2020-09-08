@extends('layouts/app')

@section('content')
<section class="page-content">
    <div class="container">

        <form action="/admin/categories" method="post">
            @csrf
            <div class="form-group">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="new-name-tab" data-toggle="tab" href="#new-name" role="tab" aria-controls="new-name" aria-selected="true">新增主分類</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link" id="origin-name-tab" data-toggle="tab" href="#origin-name" role="tab" aria-controls="origin-name" aria-selected="false">原始主分類</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-name" role="tabpanel" aria-labelledby="new-name-tab">
                        <input type="text" name="main_name" class="form-control" id="" placeholder="" value="">
                    </div>
                    <div class="tab-pane fade" id="origin-name" role="tabpanel" aria-labelledby="origin-name-tab">
                        <select name="main_category_id" class="form-control" id="">
                            <option selected value="0">請選擇原始主分類</option>
                            @foreach ($mainCategories as $mainCategory)
                                <option value="{{ $mainCategory->id }}">{{ $mainCategory->main_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name">新增子種類</label>
                <input type="text" name="name" class="form-control" id="" placeholder="" value="">
            </div>
            <button type="submit" class="btn btn-primary">確認</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">取消</button>
        </form>

    </div>
</section>
@endsection
