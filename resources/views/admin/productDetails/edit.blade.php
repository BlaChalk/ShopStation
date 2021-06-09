@extends('layouts.app')

@section('page-title')

@endsection

@section('content')
<section class="page-content">
    <div class="container">

        @include('/admin/productDetails/_form')

    </div>
</section>
@endsection
