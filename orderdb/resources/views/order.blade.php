@extends ('layouts.app')

@section('title-block')Создать заказ@endsection

@section('content')
    <h2>Заказ</h2>

    <form action="{{

    route('order-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="counterparty">Имя контрагента</label>
            <input type="text" name="counterparty" placeholder="Введите имя контрагента" id="counterparty" class="form-control">
        </div>
        <div class="form-group">
            <label for="tel">Телефон</label>
            <input type="tel" name="tel" placeholder="Введите номер телефона" id="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Адрес</label>
            <input type="text" name="address" placeholder="Введите email" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="product">Наименование товара</label>
            <input type="text" name="product" placeholder="Введите тему сообщения" id="product" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantityProd">Количество товара</label>
            <input type="number" name="quantityProd" placeholder="Введите количество товара" id="quantityProd" class="form-control">
        </div>
        <div class="form-group">
            <label for="storage">Склад</label>
            <select name="storage" class="form-control">
                    <option value="Irkutsk">Иркутск</option>
                    <option value="Angarsk">Ангарск</option>
            </select>
        </div>
        <div class="form-group">
            <label for="managers">Отвественный менеджер</label>
            <select name="managers" class="form-control">
                <option value="Anton">Антон</option>
                <option value="Alex">Алексей</option>
            </select>
        </div>
        <button type="submitOrder" class="btn btn-outline-success">Сохранить заказ</button>
    </form>
@endsection
