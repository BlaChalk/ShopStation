@extends('layouts/app')

@section('content')
<section class="page-content">
    <div class="container">

        <form action="/admin/categories" method="post">
            @csrf
            <div class="form-group">
                <label for="name">新增主總類名稱</label>
                <input type="text" name="main_name" class="form-control" id="" placeholder="" value="">
            </div>
            {{-- <div class="form-group">
                <label for="category">原總類名稱選擇</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($collection as $item)

                    @endforeach
                    <option>1</option>
                </select>
            </div> --}}
            <div class="form-group">
                <label for="name">新增子種類名稱</label>
                <input type="text" name="name" class="form-control" id="" placeholder="" value="">
            </div>
            <button type="submit" class="btn btn-primary">確認</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">取消</button>
        </form>

    </div>
</section>
@endsection
