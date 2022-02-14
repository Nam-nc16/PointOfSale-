@extends('main')
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">About Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">about us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-members ">
        <div class="container">
            <div class="row">
                <div class="title"><h2>Team Members</h2></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle" src="template/web/images/team/hungdoan.jpg">
                        <h4>Xuân Hưng</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle" src="template/web/images/team/trungduc.png">
                        <h4>Trung Đức </h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle" src="template/web/images/team/duylong.png">
                        <h4>Duy Long</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle" src="template/web/images/team/hanguyen.png">
                        <h4>Hà Nguyễn</h4>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle"src="template/web/images/team/vietnguyen.png">
                        <h4>Việt Nguyễn</h4>
                        <p>Shop Manager</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member text-center">
                        <img class="img-circle" src="template/web/images/team/canhnam.png">
                        <h4>Cảnh Nam</h4>
                        <p>Shop Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
