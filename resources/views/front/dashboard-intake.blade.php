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

@section('breakfast-name')
Bubur
@endsection

@section('breakfast-picture')
https://img.freepik.com/free-photo/healthy-breakfast-table_144627-43540.jpg?w=2000
@endsection

@section('breakfast-calories')
200
@endsection

@section('breakfast-recipe')
https://cookpad.com/id/resep/16932437-bubur-ayam-nasi-sisa?ref=search&search_term=bubur%20ayam
@endsection

@section('lunch-name')
Sop ayam sayur
@endsection

@section('lunch-pictures')
https://www.realsimple.com/thmb/rwSxx97nZcOoBb-dZ1ouGqSn-Q4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/gut-healthy-lunch-GettyImages-1042075090-b21164b3fffe49af8868078e224a3e79.jpg
@endsection

@section('lunch-calories')
500
@endsection


@section('lunch-recipe')
https://cookpad.com/id/resep/16916453-sayur-sup-ayam-jagung?ref=search&search_term=sop%20ayam%20sayur
@endsection

@section('dinner-name')
Spageti ayam
@endsection

@section('dinner-pictures')
https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Chinese-Chicken-Spaghetti_EXPS_FT22_22737_F_0315_1.jpg
@endsection

@section('dinner-calories')
500
@endsection

@section('dinner-recipe')
https://cookpad.com/id/resep/16473081-black-pepper-chicken-spaghetti?ref=search&search_term=pasta%20ayam
@endsection