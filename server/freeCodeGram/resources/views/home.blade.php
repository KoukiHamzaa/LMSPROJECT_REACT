@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ftun1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.ftun1-1.fna.fbcdn.net&_nc_ohc=wLIsWO6fABwAX_maaA_&oh=a9c9a9523723b894c9d44a420ffad435&oe=5ED9CD46" 
            class="rounded-circle" alt="" >
        </div>
        <div class="col-9 pt-5">
                <div>
                    <!-- <h1>freecodecamp<h1> -->
                    <h1>{{$user->username}}</h1>
                </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Posts</div>
                <div class="pr-5"><strong>23k</strong> Followers</div>
                <div class="pr-5"><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                <!-- freeCodeCamp.org -->
                {{$user->profile->title}}
            </div>
            <div>
                <!-- We're a global community of millions of people learning to code together.We're an<br> 
                open source, donor-supported, 501(c)(3) nonprofit. -->
                {{$user->profile->description}}
            </div>
            <div>
                <!-- <a href="#">www.freecodecamp.org</a> -->
                <a href="#">{{$user->profile->url ?? 'N/A'}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
          <img src="https://instagram.ftun1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.110.927.927a/s640x640/94008464_699663694126442_3358825138011401542_n.jpg?_nc_ht=instagram.ftun1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=O3oftTzHNk0AX_k_MGn&oh=9c15b3f100b52b41a2bd2743dbee4988&oe=5ED930B5" alt="" class="w-100" >
        </div>
        <div class="col-4">
          <img src="https://instagram.ftun1-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/94171296_697817847426178_8140418426111811606_n.jpg?_nc_ht=instagram.ftun1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=ApuFO1TNXaoAX_TXnP9&oh=d41c85f8423dc456069972639752e389&oe=5EDA92AE" alt="" class="w-100">
        </div>
        <div class="col-4">
          <img src="https://instagram.ftun1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/93204126_648778102627386_8663605803160344359_n.jpg?_nc_ht=instagram.ftun1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=rZCZS4QmmYQAX86EQ78&oh=725a2c8536318251432f8c1c96a24007&oe=5ED9291C" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
