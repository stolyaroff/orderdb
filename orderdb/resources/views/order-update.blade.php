@extends ('layouts.app')

@section('title-block')Редактировать заказ@endsection

@section('content')
    <h2>Редактировать заказ</h2>

    <form action="{{ route('order-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="counterparty">Имя контрагента</label>
            <input type="text" name="counterparty" value="{{ $data->counterparty }}" placeholder="Введите имя контрагента" id="counterparty" class="form-control">
        </div>
        <div class="form-group">
            <label for="tel">Телефон</label>
            <input type="tel" name="tel" value="{{ $data->tel }}" placeholder="Введите номер телефона" id="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Адрес</label>
            <input type="text" name="address" value="{{ $data->address }}" placeholder="Введите email" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="product">Наименование товара</label>
            <input type="text" name="product" value="{{ $data->product }}" placeholder="Введите тему сообщения" id="product" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantityProd">Количество товара</label>
            <input type="number" name="quantityProd" value="{{ $data->quantityProd }}" placeholder="Введите количество товара" id="quantityProd" class="form-control">
        </div>
        <div class="form-group">
            <label for="storage">Склад</label>
            <select name="storage" value="{{ $data->storage }}" class="form-control">
                    <option value="Irkutsk">Иркутск</option>
                    <option value="Angarsk">Ангарск</option>
            </select>
        </div>
        <div class="form-group">
            <label for="managers">Отвественный менеджер</label>
            <select name="managers" value="{{ $data->managers }}" class="form-control">
                <option value="Anton">Антон</option>
                <option value="Alex">Алексей</option>
            </select>
        </div>
        <button type="submitOrder" class="btn btn-outline-dark">Изменить заказ</button>
    </form>
@endsection
