@extends('main')
@section('content')
<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="block text-center">
                    <i class="tf-ion-android-checkmark-circle"></i>
                    <h2 class="text-center">Thank you! For your payment</h2>
                    <a href="{{route('shop')}}" class="btn btn-main mt-20">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.page-warpper -->

@stop
