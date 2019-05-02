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

    <div  class="row" id="app">

        <br><br><br>

        <b-container class="bv-example-row">
            <b-row>
                <div class="col-lg-12">
                    <beverages :beverages="{{$beverages}}"></beverages>
                </div>
            </b-row>


        </b-container>


    </div>
    <script type="text/javascript" src="js/app.js"></script>

    <script type="text/javascript">
        window.csrf_token = "{{ csrf_token() }}"
    </script>


@endsection
