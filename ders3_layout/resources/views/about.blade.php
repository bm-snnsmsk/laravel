@extends('layouts.app')
@section('css')
<style>
    body{
        background:lightblue;
    }
</style>
@endsection

@section('title') hakkımızda @endsection


@section('content') 
<div class="border border-1 border-danger">
hakkımızda içeriği
</div> 
@endsection



@section('js') 
<script>alert('hakkımızda')</script>
@endsection