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

@section('js')
    <script src="../js/map.js"></script>
    <script async defer
            src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAOfC0dvVosGZH1KMjYHlrIt19WHnv_T4E&callback=initMap'></script>

    @endSection
