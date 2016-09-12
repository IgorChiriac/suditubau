@extends('layouts.app')

@section('content')
    <navbar></navbar>
    <div class="slider-container">
        <slider width="auto"
                height="400px"
                align="center"
                animation="fade"
                :interval="3000"
                :speed="2000">
            <slider-item :style="{ backgroundColor: '#eee' }">
                <img src="images/slider1.jpg"/>
            </slider-item>
            <slider-item :style="{ backgroundColor: '#eee' }">
                <img src="images/slider2.jpg"/>
            </slider-item>
            <slider-item :style="{ backgroundColor: '#eee' }">
                <img src="images/slider3.jpg"/>
            </slider-item>
            <slider-item :style="{ backgroundColor: '#eee' }">
                <img src="images/slider4.jpg"/>
            </slider-item>
        </slider>
    </div>

    <div class="content-wrapper">
        <about></about>

        <div class="ribbon l-box-lrg pure-g">
            <gallery-item></gallery-item>
        </div>

        <contact-form></contact-form>

    </div>
@endsection