@extends('layout/profile-aplikasi')

@section('username')
{{$data['name']}}
@endsection

@section('email')
{{$data['email']}}
@endsection

@section('age')
{{$data['age']}}
@endsection

@section('height')
{{$data['height']}}
@endsection

@section('weight')
{{$data['bodyweight']}}
@endsection

@section('bmi')
<?php $bmi = ($data['bodyweight']/(($data['height']*0.01)*($data['height']*0.01))); ?>
{{number_format($bmi, 1)}}
@endsection
