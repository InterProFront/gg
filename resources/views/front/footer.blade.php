@section('footer')
    <section class="callback callback--inline">
        <h3 class="callback__title">Заполните форму и мы вышлем коммерческое предложение</h3>
        <form class="callback__form form-id" id="ask">
            <input type="hidden" name="form" class="form-input" value="ask">
            <div class="callback__field">
                <label class="callback__field-title callback__field-title--popup" for="email">Эл. почта</label>
                <input name="email" type="text" id="email" class="input form-input">
            </div>
            <div class="callback__field">
                <label class="callback__field-title callback__field-title--popup" for="phone">Телефон</label>
                <input name="phone" type="tel" id="phone" class="input form-input" placeholder="+7 (705) 000-00-00">
            </div>
            <div class="callback__field">
                <label class="callback__field-title callback__field-title--popup" for="comment">Комментарий</label>
                <textarea name="comment" id="comment" class="input input--textare form-input"></textarea>
            </div>
            <div class="callback__field">
                <button type="submit" class="button send-form">Получить предложение</button>
                <p class="callback__error ">Не все поля заполнены верно</p>
            </div>
        </form>
    </section>

    <footer class="footer"></footer>
@endsection