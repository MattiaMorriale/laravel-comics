@extends('layouts.app') 

@section('content')
<div class="main">
    <div class="jumbo">
    </div>
    <div class="main-content">
        <div class="link">
            
            @foreach ($comics as $currentcomic)
                <div class="comics">
                    <div class="img-box">
                        <img src="{{$currentcomic['thumb']}}" alt="#">        
                    </div>
                    <div class="text">
                        <h4 class="fs-6">{{$currentcomic['title']}}</h4>
                    </div>
                </div> 
            @endforeach

            <div class="btn-abs">
                <a href="#">
                    <strong>CURRENT SERIES</strong>
                </a>
            </div>
        </div>
        <div class="btn rounded-0">
            <a href="#">
                <strong>LOAD MORE</strong>
            </a>
        </div>
        
    </div>
    <div class="merch">
        <div class="list">
            <ul>
                @foreach ($links as $link)
                <li>
                    <div class="box-img">
                        <img src="{{ Vite::asset( $link['img'] ) }}" alt="">
                    </div>
                    <strong>{{$link['name']}}</strong>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection