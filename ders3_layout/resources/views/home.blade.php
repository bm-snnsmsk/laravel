@extends('layouts.app')
@section('css')
<style>
    body{
        background:lightgreen;
    }
</style>
@endsection

@section('title') ANASAYFA @endsection


@section('content') 
<div class="border border-1 border-danger">
ANASAYFA içeriği
</div> 
@endsection







@section('js') 
<script>alert('anasayfa')</script>
@endsection