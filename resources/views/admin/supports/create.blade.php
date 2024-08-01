@extends('admin.layouts.app')

@section('title', 'Criar novo tópico')

@section('header')
    <h1 class="text-lg text-black-500">Nova Dúvida</h1>
@endsection

@section('content')
    <x-alert/>

    <form action="{{ route('supports.store') }}" method="POST">  
        @include('admin.supports.partials.form')
    </form>

@endsection