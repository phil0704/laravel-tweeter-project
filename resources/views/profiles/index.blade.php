@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img src="Twitter-logo.jpeg" class="rounded-circle">
      </div>
      <div class="col-9 pt-4">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="{{ route( 'profile.create')}}">Add New Post</a>
      </div>
      <div class="d-flex">
          <div class="pr-5"><strong>158</strong> posts</div>
          <div class="pr-5"><strong>28k</strong> followers</div>
          <div class="pr-5"><strong>528</strong> following</div>
      </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="#">{{ $user->profile->url }}</a></div>

         </div>
        </div>
       <div class="row pt-4">

           <div class="col-4">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdnFwM4skUjgoo-93WraO1suNqXtt1N2PGvAGEU7yX2wNv5mMS" class="w-100" alt="">
            </div>



          <div class="col-4">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTehmPf8meHfhFmv6ObEtiUeBVhcwL4Jw0V4PW88biOMjqMT25d" class="w-100" alt="">
          </div>
          <div class="col-4">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjyZKK0SCVOnPOcZ3wk4kT8fAO7UCApTZ5d9IKpmBILiz6LcCA" class="w-100" alt="">
     </div>
    </div>
</div>
@endsection
