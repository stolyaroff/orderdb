@extends ('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Номер заказа</th>
            <th scope="col">Контрагент</th>
            <th scope="col">Номер телефона</th>
            <th scope="col">Наименование товара</th>
            <th scope="col">Количество</th>
            <th scope="col">Дата заказа</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach($data as $el)
        <tbody>
        <tr>
            <th scope="row">{{ $el->id }}</th>
            <td>{{ $el->counterparty }}</td>
            <td>{{ $el->tel }}</td>
            <td>{{ $el->product }}</td>
            <td>{{ $el->quantityProd }}</td>
            <td>{{ $el->created_at }}</td>
            <td><a href="{{ route('order-item', $el->id) }}"><button class="btn btn-outline-secondary">Подробнее</button></a></td>
        </tr>
        </tbody>
        @endforeach
    </table>
@endsection
