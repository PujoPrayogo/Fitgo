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
@section('your-goals-weight-type')

@endsection

@section('your-goals-weight-amount')
<?php 
    $weight_change = '';
    if($data['weight_change'] == 0){
        $weight_change = "Maintain Your Weight!";
    }elseif ($data['weight_change'] <  0) {
        $weight_change = "Lose ".abs($data['weight_change']." kg");
    }elseif($data['weight_change'] >  0){
        $weight_change = "Gain ".$data['weight_change']." kg";
    }
?>
{{$weight_change}}
@endsection

@section('your-goals-weight-percentage')
50
@endsection

@section('your-goals-sessions-percentage')
75
@endsection

@section('workouts-perweek')
4
@endsection

@section('BMI')
    {{number_format($data['bmi'], 1)}}
@endsection

                                        <!--QUOTE-->
@section('quote')
I've failed over and over and over again in my life and that is why I succeed.
@endsection

@section('quote-speaker')
Mike Tyson
@endsection


                                <!--      RECENT ACTIVITIES (sampai 5)-->
                                <!--  1-->
@section('recent-activity-1')
Drink Water
@endsection

@section('recent-activity-amount-1')
300
@endsection

@section('recent-time-1')
9.14pm
@endsection

@section('recent-calories-1')
0
@endsection

                                <!--  2-->
@section('recent-activity-2')
Eat Snack
@endsection

@section('recent-activity-amount-2')
300
@endsection

@section('recent-time-2')
8.20pm
@endsection

@section('recent-calories-2')
280
@endsection

                                <!--  3-->
@section('recent-activity-3')
Eat Snack
@endsection

@section('recent-activity-amount-3')
300
@endsection

@section('recent-time-3')
8.20pm
@endsection

@section('recent-calories-3')
280
@endsection

                                <!--  4-->
@section('recent-activity-4')
Eat Snack
@endsection

@section('recent-activity-amount-4')
300
@endsection

@section('recent-time-4')
8.20pm
@endsection

@section('recent-calories-4')
280
@endsection

                                <!-- 5 -->
@section('recent-activity-5')
Eat Snack
@endsection

@section('recent-activity-amount-5')
300
@endsection

@section('recent-time-5')
8.20pm
@endsection

@section('recent-calories-5')
280
@endsection