@extends('inc.layout')



@section('content')
<main class="main">

    <section class="two">
        <div class="two__container opening">
            <p class="menu__link" style="margin-bottom: 50px;text-align:center;">как до нас добраться</p>
            <div class="maps" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Казань</a><a href="https://yandex.ru/maps/43/kazan/?feedback=map%2Fedit&feedback-context=map.controls&ll=49.106414%2C55.796129&utm_medium=mapframe&utm_source=maps&z=10" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?feedback=map%2Fedit&feedback-context=map.controls&ll=49.106414%2C55.796129&z=10" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </section>
</main>
@endsection