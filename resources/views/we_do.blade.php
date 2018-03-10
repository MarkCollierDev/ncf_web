@extends('layouts/main')

@section('content')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/meeting.jpeg');">

        <h1>What We Do</h1>

    </div>
    @include('activities.sunday-service')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/knitting.jpeg');"></div>
    @include('activities.knitting')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/bible-study.jpeg');"></div>
    @include('activities.prayer')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/kids.jpeg');"></div>
    @include('activities.flame')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/youth.jpeg');"></div>
    @include('activities.blaze')

    <div class='parallax' style="background-image: url('../images/Page-Images/activities/care-home.jpeg');"></div>
    @include('activities.beachwood')

    @endSection


