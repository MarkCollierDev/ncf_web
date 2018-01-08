@extends('layouts/main')

@section('content')
<div class='parallax' style="background-image: url('../images/parallax/sunset-cross.jpeg');"></div>
@include('includes/short/what-we-believe')

<div class='parallax' style="background-image: url('../images/parallax/people.jpeg');"></div>
@include('includes/short/what-we-do')

<div class='parallax' style="background-image: url('../images/parallax/hand-heart.jpeg');"></div>
@include('includes/short/whos-who')

<div class='parallax' style="background-image: url('../images/parallax/bbq.jpeg');"></div>
@include('includes/short/up-coming')

<div class='parallax' style="background-image: url('../images/parallax/direction.jpeg');"></div>
@include('includes/short/find-us')


@endSection