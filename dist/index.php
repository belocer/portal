<?php include 'header.php'; ?>

    <main>
        <section class="first_screen">
            <div class="wrapper height100">
                <h1 class="main_h1">Крупный портал оборудования <br> для индустрии красоты</h1>

                <div class="search_block">
                    <span class="small_blue_head">быстрый поиск</span>

                    <div class="wrap_search_ul">
                        <a href="#" class="link_search_by_direction link_search">
                            <span>Поиск по направлению</span>
                            <span class="empty_angle_down"></span>
                        </a>
                        <ul class="search_by_direction display_none">
                            <li class="search_by_direction__li"><a href="#">Аппараты для лазерной эпиляции</a></li>
                            <li class="search_by_direction__li"><a href="#">Диодные лазеры</a></li>
                            <li class="search_by_direction__li"><a href="#">Александритовые лазеры</a></li>
                            <li class="search_by_direction__li"><a href="#">LPG-аппараты</a></li>
                            <li class="search_by_direction__li"><a href="#">Аппараты SMAS-лифтинга</a></li>
                            <li class="search_by_direction__li"><a href="#">Аппараты для криолиполиза</a></li>
                        </ul>
                    </div>

                    <div class="wrap_search_ul">
                        <a href="#" class="link_search_by_manufacturer link_search">
                            <span>Поиск по производителю</span>
                            <span class="empty_angle_down"></span>
                        </a>
                        <ul class="search_by_manufacturer display_none">
                            <li class="search_by_manufacturer__li"><a href="#">Аппараты для лазерной эпиляции</a></li>
                            <li class="search_by_manufacturer__li"><a href="#">Диодные лазеры</a></li>
                            <li class="search_by_manufacturer__li"><a href="#">Александритовые лазеры</a></li>
                            <li class="search_by_manufacturer__li"><a href="#">LPG-аппараты</a></li>
                            <li class="search_by_manufacturer__li"><a href="#">Аппараты SMAS-лифтинга</a></li>
                            <li class="search_by_manufacturer__li"><a href="#">Аппараты для криолиполиза</a></li>
                        </ul>
                    </div>

                    <div class="wrap_search_ul">
                        <a href="#" class="link_search_by_procedure link_search">
                            <span>Поиск по процедурам</span>
                            <span class="empty_angle_down"></span>
                        </a>
                        <ul class="search_by_procedure display_none">
                            <li class="search_by_procedure__li"><a href="#">Аппараты для лазерной эпиляции</a></li>
                            <li class="search_by_procedure__li"><a href="#">Диодные лазеры</a></li>
                            <li class="search_by_procedure__li"><a href="#">Александритовые лазеры</a></li>
                            <li class="search_by_procedure__li"><a href="#">LPG-аппараты</a></li>
                            <li class="search_by_procedure__li"><a href="#">Аппараты SMAS-лифтинга</a></li>
                            <li class="search_by_procedure__li"><a href="#">Аппараты для криолиполиза</a></li>
                        </ul>
                    </div>

                    <form action="fast_search" method="post" class="fast_search">
                        <input type="hidden" name="direction" value="null">
                        <input type="hidden" name="manufacturer" value="null">
                        <input type="hidden" name="procedure" value="null">
                        <button type="submit" class="fast_search__btn">найти</button>
                    </form>
                </div>
            </div>
        </section>
    </main>


<?php include 'footer.php'; ?>