@extends('layout/intake-aplikasi')

@section('profile-photo')
https://marketplace.canva.com/EAFEits4-uw/1/0/1600w/canva-boy-cartoon-gamer-animated-twitch-profile-photo-oEqs2yqaL8s.jpg
@endsection

@section('profile-name')
{{$data['name']}}
@endsection

@section('workout-calories-burned')
{{$data['bmr']}}
@endsection

@section('intake-calories')
{{$data['bmr']}}
@endsection

@section('intake-protein')
{{$data['protein']}}
@endsection