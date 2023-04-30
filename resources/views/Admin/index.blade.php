@extends('Admin/includes/master')
@section('title')
    {{__('dashboard.home')}}
@endsection

@section('content')
    <style>
        .test{
            width: 100%;
            background: black;
            display: flex;
            justify-content:center ;
            align-items: center;
        }
        h1{
            background-image: linear-gradient(102deg ,red,white);
            -webkit-background-clip: text   ;
            -webkit-text-fill-color: transparent;
        }

    </style>
    <div  class=" test">
        <h1> Unlimited SoftWare </h1>
    </div>

@endsection
