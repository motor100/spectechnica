@section('title', 'Поиск')

@extends('layouts.main')

@section('content')

<div class="search">

    <!-- Форма заполнения заявки -->
    @include('application-form-section')
  
    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>

@endsection