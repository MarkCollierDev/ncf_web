@extends('layouts/main')

@section('content')
    <div class='parallax' style="background-image: url('../images/parallax/church_street.png');"></div>
    <div class="row-modual col-md-12">
        <h1>Find us</h1>

        <div class="row">

            <div id="locationDetails" class="col-md-5">

                <h3>Newcastle Christian Fellowship</h3>

                <p>Boundary Street</p>

                <p>Hartshill</p>

                <p>Newcastle</p>

                <p>UK</p>
                </br>
                <p>Or Call us on: </p>

                <p>01782 244404</p>

                <p>Email on</p>

                <p>ncfchurch@gmail.com</p>

                <p>Childrens and Youth Team</p>

                <p>Youth@ncfchurch.co.uk</p>
            </div>

            <div id="map" class="smallMap col-md-6"><p>Boundary Street, Newcastle</p></div>

        </div>
    </div>
    @endSection
@section('js')
    <script src="../js/map.js"></script>
    <script async defer
            src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAOfC0dvVosGZH1KMjYHlrIt19WHnv_T4E&callback=initMap'></script>

    @endSection
