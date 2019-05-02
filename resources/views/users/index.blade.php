<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/24/19
 * Time: 3:40 PM
 */
?>
@extends('main')

@section('content')

    <div id="app">
        <user :types="{{$types}}"></user>
    </div>
    <script type="text/javascript" src="js/app.js"></script>

    <script type="text/javascript">
        window.csrf_token = "{{ csrf_token() }}"
    </script>


@endsection
