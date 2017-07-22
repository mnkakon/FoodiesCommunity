
@extends('layouts.app')

@section('content')


@include('layouts.alert')

<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 10px;
        position: center;
    }

    .row{
        width: 30%;
        padding-left: 10px;
    }

    .row.item {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

    h4 {
        color: #fff;
    }
</style>
<div class="row">
    <ul>
        <div class="row item">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('filterednotification', array('index'=>1))}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/panshi.jpg" class="img-responsive" alt="">
                </a>
                <div  class="portfolio-caption">
                    <h4>Panshi Restaurant</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('filterednotification', array('index'=>2))}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/pachbai.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Pachbai Restaurant</h4>     
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('filterednotification',array('index'=>3))}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/99-foods.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>99 Restaurant</h4>
                </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('filterednotification',array('index'=>4))}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/hangout.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Hangout Restaurant</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="{{route('filterednotification', array('index'=>5))}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/madgrill.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>The Mad Grill Restaurant</h4>
                </div>
            </div>
        </div>
    </ul>
</div>


@endsection