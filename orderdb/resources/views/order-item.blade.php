@extends ('layouts.app')

@section('title-block'){{ $data->id }}@endsection

@section('content')
    <h6>Заказ № {{ $data->id }}</h6>
        <div class="alert">
            <h5>{{ $data->counterparty }}</h5>
            <p>Адрес: {{ $data->address }} {{ $data->tel }}</p>
            <p>Наименование товара: {{ $data->product }} - {{ $data->quantityProd }}</p>
            <p>Склад: {{ $data->storage }}</p>
            <p>Ответственный менеджер: {{ $data->managers }}</p>
            <small>Дата заказа: {{ $data->created_at }}</small>
            <p>
            <a href="{{ route('home') }}"><button class="btn btn-outline-secondary">Назад</button></a>
            <a href="{{ route('order-update', $data->id) }}"><button class="btn btn-outline-secondary">Редактировать</button></a>
            <a href="{{ route('order-delete', $data->id) }}"><button class="btn btn-outline-danger">Удалить</button></a>
            </p>
        </div>
@endsection
