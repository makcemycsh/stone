<?get_header();?>
<? the_post(); ?>
<? the_content(); ?>
<!--    Почему стоит выбрать-->

<!--    Почему стоит выбрать-->

<!--    А вам знакомо?-->

<!--    А вам знакомо?-->
<!--    Причины-->

<!--    Причины-->
<!--    Галерея с примерами работ-->
<section class="container gallery">
    <h2>Наши <span>работы</span></h2>
    <div class="swiper-container main-slider loading">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-1.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-1.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Shaun Matthews</p>
                    <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-2.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-2.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Alexis Berry</p>
                    <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-3.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-3.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Billie Pierce</p>
                    <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-4.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-4.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Trevor Copeland</p>
                    <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-5.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-5.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Bernadette Newman</p>
                    <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>

    <!-- Thumbnail navigation -->
    <div class="swiper-container nav-slider loading">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-1.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-1.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Shaun Matthews</p>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-2.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-2.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Alexis Berry</p>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-3.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-3.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Billie Pierce</p>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-4.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-4.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Trevor Copeland</p>
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image:url(<? bloginfo("template_directory"); ?>/img/slide-5.jpg)">
                    <img src="<? bloginfo("template_directory"); ?>/img/slide-5.jpg" class="entity-img" />
                </figure>
                <div class="content">
                    <p class="title">Bernadette Newman</p>
                </div>
            </div>
        </div>
    </div>

</section>
<!--    Галерея с примерами работ-->
<!--    Комментарии со слайдером-->
<section class="comments">
    <div class="container">
        <div class="wrap-text">
            <h2>Комментарии заказчиков</h2>
            <div class="ico"></div>
            <p>Познакомим с нашими клиентами и покажим выполненные объекты. Вы увидите качество нашей работы, проверенное временем</p>
        </div>
        <div class="bg-slider">
            <div class="wrap-slider">
                <div class="slide">
                    <p class="name">Сергей</p>
                    <div class="chat">
                        <p class="executor">Добрый день! Сергей, буду благодарен за обратную связь по работе бригады.
                        </p>
                        <p class="client">Здравствуйте. Работой доволен. Благодаря тому, что кладку сделали очень качественно, шлифовка и пропитка обошлись мне в 4 раза дешевле. Тем более, что на нашу площадь работ это очень значительная сумма.</p>
                        <p class="executor"> Рад это слышать.</p>
                    </div>
                </div>
                <div class="slide">
                    <p class="name">Георгий</p>
                    <div class="chat">
                        <p class="executor">Приветствую. Сергей, собираю краткие отзывы о нашей работе, напишите пожалуйста пару слов, если довольны работой мастеров.
                        </p>
                        <p class="client">Добрый день. Я наверное самый придирчивый клиент и, как вы знаете, я поменял две бригады до вашей. Работа хорошая. Плоскости были выложены практически идеально без перепадов на стыках. За счет этого шлифовку и пропитку сделали быстрее и дешевле, чем обычно. Планирую работать с вами и по другим объектам.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <p class="name">Александр</p>
                    <div class="chat">
                        <p class="executor">Здравствуйте. Из нашего общения понял, что сотрудничеством вы довольны, напишите пожалуйста, что понравилось в работе с нами больше всего.
                        </p>
                        <p class="client">Привет Магомед. Мне понравилось, что на всех этапах работы прораб интересовался моим видением и предлагал варианты как лучше комбинировать разные оттенки камня или убирать их. Работу сделали так, что ничего не пришлось доделывать или переделывать, это в стройке обычно редкость.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <p class="name">Михаил</p>
                    <div class="chat">
                        <p class="executor">Здравствуйте.
                        </p>
                        <p class="client">Добрый день. Я работой доволен. Я внимательно следил за ходом дела, всегда внезапно приезжал на объект. Бригада работала добросовестно с раннего утра до темна. С другими бригадами никогда такого не было.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <p class="name">Расул</p>
                    <div class="chat">
                        <p class="executor">Салам, брат. Напишешь обратную связь по работе наших ребят?.
                        </p>
                        <p class="client">Алейкум ассалам! Конечно Сделали на совесть. При том, что мне некогда было контролировать, работу сдали в срок. На объекте был порядок, никакого хаоса, как обычно на стройке.
                        </p>
                        <p class="executor">Спасибо.
                        </p>
                    </div>
                </div>

            </div>

            <div class="slider-arrow">
            </div>
        </div>
    </div>
</section>
<!--    Комментарии со слайдером-->
<!--    Цены-->
    <!--
    <section class="container prices">
        <h2>Цены</h2>
    </section>
-->
<!--    Цены-->
<!--    Принципы работы-->
<section class="container principle">
    <h2>Принципы нашей <span>работы</span></h2>
    <div class="wrap-items">
        <div class="item">
            <h3>Стандарты</h3>
            <p>Мы создали собственные стандарты качества и хотим, чтобы каждый проект, выполненный нами, вне зависимости от бюджета, соответствовал нашим эталонам.
            </p>
            <p>
            Опыт работы с разными объектами позволил нам выработать собственные технологии установки камня и узоров, обеспечивающие надежность крепления камня даже на многоэтажных зданиях.</p>
            <div class="wrap-contact">
                <div class="foto"></div>
                <div class="wrap-name">
                    <h4>Пайзутдин Дагиров</h4>
                    <p>прораб</p>
                    <div class="btn-c">Записаться на встречу</div>
                </div>
            </div>
        </div>
        <div class="item">
            <h3>Качество</h3>
            <p>Выполняя облицовку, мы стремимся сделать работу максимально надежно, чтобы гарантия, которую мы предоставляем на 10 лет никогда не понадобилась.
            </p>
            <p>
            Уже на первых этапах работы заказчик получает уверенность в нашей команде и спокойствие за результат.</p>
            <div class="wrap-contact">
                <div class="foto"></div>
                <div class="wrap-name">
                    <h4>Халид Фамилия</h4>
                    <p>прораб</p>
                    <div class="btn-c">Записаться на встречу</div>
                </div>
            </div>
        </div>
        <div class="item">
            <h3>Эстетика</h3>
            <p>Нам нравится создавать эстетичные объекты, делать каждое здание предметом гордости хозяина.
            </p>
            <p>
                Мы предлагаем нашим клиентам проверенные решения для преображения своего дома в элитную недвижимость
            </p>
            <div class="wrap-contact">
                <div class="foto"></div>
                <div class="wrap-name">
                    <h4>Мусаев Серажудин</h4>
                    <p>прораб</p>
                    <div class="btn-c">Записаться на встречу</div>
                </div>
            </div>
        </div>
        <div class="item">
            <h3>Энтузиазм</h3>
            <p>Мы получаем удовольствие от результата своего труда , поэтому над каждым проектом работаем с такой же увлеченностью и старанием, как работали бы над своим собственным домом.</p>
            <div class="wrap-contact">
                <div class="foto"></div>
                <div class="wrap-name">
                    <h4>Насрулла Османов</h4>
                    <p>прораб</p>
                    <div class="btn-c">Записаться на встречу</div>
                </div>
            </div>
        </div>
        <div class="item">
            <h3>Ответственность</h3>
            <p>Мы профессионалы. Поэтому соблюдение сроков и договоренностей - один из наших главных принципов.
            </p>
            <p>
                Нам важно, чтобы, выбрав нас, клиент чувствовал уверенность в том, что все рабочие процессы проходят своевременно и нет необходимости в дополнительном контроле.
            </p>
            <div class="wrap-contact">
                <div class="foto"></div>
                <div class="wrap-name">
                    <h4>Магомед Джанаев</h4>
                    <p>директор</p>
                    <div class="btn-c">Записаться на встречу с директором</div>
                </div>
            </div>
        </div>


    </div>
</section>
<!--    Принципы работы-->
<!--    Алгоритм работы-->
<section class="algo">
    <h2>Рабочий <span>алгоритм</span></h2>
    <div class="wrap-items">
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 1</h3>
            <p>Вы оставляете заявку, назначаем дату замера</p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 2</h3>
            <p>Встреча со специалистом</p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 3</h3>
            <p>Разработка 3D визуализации в трех вариантах (по запросу)</p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 4</h3>
            <p>Подписание договора</p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 5</h3>
            <p>Поставка камня
            </p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 6</h3>
            <p>Облицовочные работы</p>
        </div>
        <div class="item">
            <div class="ico"></div>
            <h3>ШАГ 7</h3>
            <p>Довольный клиент
            </p>
        </div>
    </div>

</section>
<!--    Алгоритм работы-->


<!--    Контактные формы-->
<div class="popup-wrap call">
    <div class="popup-content">
        <h3>Есть вопросы,<br>которые нужно обсудить лично?<br>Мы перезвоним<br>в удобное для Вас время!</h3>
        <label for="request-call" class="close"></label>
        <div class="closeBtn"></div>
        <form action="" method="post" id="send-form" class="ajax_form1">
            <input type="text" placeholder="Имя" name="name" required maxlength="15">
            <input type="tel" name="phonenumber" placeholder="Телефон" required maxlength="15">
            <div class="time">
                <label for="timeS" name="time-start">C</label>
                <select name="timeB" required="">
                    <option value="8:00" selected>8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                </select>
                <label for="timeF" name="time-finish">По</label>
                <select name="timeF" required="">
                    <option value="8:00" >8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00" selected>21:00</option>
                </select>
            </div>
            <input type="submit" value="Заказать звонок" class="f-btn">
        </form>
        <label for="request-call" class="ok"> Спасибо, мы вам перезвоним</label>
    </div>
</div>


<div class="popup-wrap free-application">
    <div class="popup-content">
        <h3>Вызов замерщика</h3>
        <label for="free-application" class="close"></label>
        <div class="closeBtn"></div>
        <form action="" method="post" id="send-form" class="ajax_form1">
            <input type="text" placeholder="Имя" name="name" required maxlength="15">
            <input type="tel" name="phonenumber" placeholder="Телефон" required maxlength="15">
            <div class="time">
                <label for="timeS" name="time-start">C</label>
                <select name="timeB" required="">
                    <option value="8:00" selected>8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                </select>
                <label for="timeF" name="time-finish">По</label>
                <select name="timeF" required="">
                    <option value="8:00" >8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00" selected>21:00</option>
                </select>
            </div>
            <input type="submit" value="Заказать звонок" class="f-btn">
        </form>
        <label for="free-application" class="ok"> Спасибо, мы вам перезвоним</label>
    </div>
</div>

<div class="popup-wrap consultation">
    <div class="popup-content">
        <h3>Получить консультацию</h3>
        <label for="consultation" class="close"></label>
        <div class="closeBtn"></div>
        <form action="" method="post" id="send-form" class="ajax_form1">
            <input type="text" placeholder="Имя" name="name" required maxlength="15">
            <input type="tel" name="phonenumber" placeholder="Телефон" required maxlength="15">
            <input type="email" name="email" placeholder="Email" required maxlength="35">
            <input type="submit" value="Отпарвить" class="f-btn">
        </form>
        <label for="consultation" class="ok"> Спасибо, мы вам перезвоним</label>
    </div>
</div>
<!--    Контактные формы-->

<?get_footer();?>
