@extends('layouts.master')

@section('css_fonts')
    @parent
    
    <style>
        #textarea {
            -moz-appearance: textfield-multiline;
            -webkit-appearance: textarea;
            border: 1px solid gray;
            /*font: medium -moz-fixed;*/
            /*font: -webkit-small-control;*/
            /*height: 28px;*/
            /*overflow: auto;*/
            padding: 2px;
            resize: both;
            /*width: 400px;*/
            word-wrap: break-word;
        }
    </style>
@endsection

@section('content')
<div id="textarea" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" contenteditable>
    <p>Начало статьи...</p>
</dvi>
@endsection

@section('js')
    @parent
    <script>

    </script>
@endsection