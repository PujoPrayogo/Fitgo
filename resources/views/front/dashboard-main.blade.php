@extends('layout/main-aplikasi')


                                        //HEADER
@section('profile-photo')
https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png
@endsection

@section('profile-name')
{{$data['name']}}
@endsection

                                        //DAILY GOAL (yang 2)
@section('target-kcal')
{{$data['bmr']}}
@endsection

@section('target-workout')
{{$data['workout']}}
@endsection



@section('daily-intake-water')

@endsection



                                        //DAILY INTAKE (4)
@section('daily-cal')
2200
@endsection

@section('daily-protein')
{{$data['protein']}}
@endsection



                                        //YOUR GOALS
@section('your-goals-weight-type')
Lose
@endsection

@section('your-goals-weight-amount')
{{$data['weight_change']}}
@endsection

@section('your-goals-weight-percentage')
50
@endsection

@section('your-goals-sessions-percentage')
75
@endsection

                                        //QUOTE
@section('quote')
I've failed over and over and over again in my life and that is why I succeed.
@endsection

@section('quote-speaker')
Mike Tyson
@endsection


                                //      RECENT ACTIVITIES (sampai 5)
                                //  1
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

                                //  2
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

                                //  3
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

                                //  4
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

                                //  5
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