@extends('layout/main-aplikasi')

                                        <!--HEADER -->
@section('profile-photo')
https://marketplace.canva.com/EAFEits4-uw/1/0/1600w/canva-boy-cartoon-gamer-animated-twitch-profile-photo-oEqs2yqaL8s.jpg
@endsection

@section('profile-name')
{{$data['name']}}
@endsection

@section('target-kcal')
{{$data['bmr_static']}}
@endsection

@section('target-workout')
{{$data['workout']}}
@endsection

@section('daily-intake-water')
{{$data['water']}}
@endsection

                                        <!--DAILY INTAKE (4)-->
@section('daily-cal')
{{$data['bmr']}}
@endsection

@section('daily-protein')
{{$data['protein']}}
@endsection

                                        <!--YOUR GOALS-->
@section('your-goals-weight-amount')
<?php 
    $weight_change = '';
    if($data['weight_change'] == 0){
        $weight_change = "Maintain Your Weight!";
    }elseif ($data['weight_change'] <  0) {
        $weight_change = "Lose ".abs((int)$data['weight_change'])." kg";
    }elseif($data['weight_change'] >  0){
        $weight_change = "Gain ".$data['weight_change']." kg";
    }
?>
{{$weight_change}}
@endsection

@section('BMI')
    {{number_format($data['bmi'], 1)}}
@endsection

                                        <!--QUOTE-->
@section('quote')
{{$quotes}}
@endsection
