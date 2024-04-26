@section('title', 'Поиск')

@extends('layouts.main')

@section('content')

<div class="search">

    <div class="serach-rezult">
        <div class="container">
            Результаты поиска
        </div>
    </div>

    <!-- Форма заполнения заявки -->
    @include('application-form-section')
  
    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>

@endsection