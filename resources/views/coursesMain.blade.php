<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
</head>
<style>
        .C{
                height: 15vw;
                width: 50%;
                margin: auto;
        }
        .C:hover{
                 
                width: 60%;
                transition-duration: 0.5s;
        }
        .CPP{
                height: 13vw;
                width: 50%;
                margin: auto;
        }
        .CPP:hover{
                width: 60%;
                transition-duration: 0.5s;
        }
</style>
<body>
@extends('layouts.app')

@section('content')
        <div class="C mt-10">
        <img src="{{ asset('Images\CourseSelectC.png')}}">
        </div>
        <div class="CPP mt-14 mb-10">
                <img src="{{ asset('Images\CourseSelectCPP.png')}}">
        </div>

@endsection
</body>
</html>