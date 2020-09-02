<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="index.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="js/jquery.fancybox.min.css" />
</head>
<div class="sign_form_container">
<div class="close_form" onclick="gsapMsg.reverse()"><img src="img/overlaycross.png" alt=""></div>
<div class="sign_body">
<div class="sign_body_container">
<p class="sign_title">Запись к мастеру</p>
<div class="form_body_container">
  <div class="msg" onclick="gsapMsg.reverse()">Сообщение</div>
<form enctype="multipart/form-data" method="post" id="form" class="form_body" onsubmit="send(event, 'send.php')">
 <p class="form_inline"><b class="form_body_item"><span>Имя:</span></b><br>
   <input class="form_body_item box-color" type="text" size="40" name="name" required>
  </p>
  <p class="form_inline"><b class="form_body_item"><span>Телефон:</span></b><Br>
   <input class="form_body_item box-color" type="text" size="40" name="phone" required>
  </p>
  <p class="form_inline form_body_item"><b class="form_body_item"><span>Комментарий:</span></b><Br>
   <textarea class="form_body_item box-color" name="text" cols="4" rows="7" cols="15" resize="none"></textarea></p>
   <div class="picture_load_container">
  <label class="picture_load_wrapper">
    <input class="picture_load load_file" multiple class="inputFile" type="file" name="myfile[]" multiple id="myfile" onchange="inputFile(event)" style="max-width: 405px">
    <p>Если файлов больше чем 1, необходимо загружать их одновременно</p>
    </label>
    <div class="submit_button">
  <input class="picture_load submit_all" type="submit" value="Отправить">
  </div>
  </div>
  <p class="Policy-box">Нажимая на кнопку "Отправить", вы даете согласие на обработку своих персональных данных <br><a href="Policy.html" target="blank"> Политика конфиденциальности</a></p>
</form>
</div>
</div>
</div>
  </div>
<div class="body-wrapper">
<body>
<header>
<div class="header_wrapper">
<div class="header_line_wrapper">
<div class="header_line">
<div class="header_line_left-container">
<img src="img/mark.svg" alt="" width="46px" height="46px">
<div class="left-container_text">
<p>Москва,Китай Город,Покровка</p>
<button><div class="button_text">Записаться к мастеру</div></button>
</div>
</div>
<div class="header_line_right-container">
<a href="https://vk.com" target="_blank"><img src="img/inst.svg" alt=""></a>
<a href="https://instagram.com" target="_blank"><img src="img/VK.svg" alt="" class="VK_icon"></a>
</div>
</div>
</div>
<div class="header_logo">
<img id="main_logo" src="img/main-logo.png" alt="">
</div>
</div>
</header>
<main>
<div class="nav">
<div class="menu-container" id="menu">
<ul>
<li><a href="#team">Команда</a></li>
<li><a href="#comments">Отзывы</a></li>
<li><a href="#price">Цены</a></li>
<li><a href="#contacts">Контакты</a></li>
</ul>
</div>
<div class="blank-container"></div>
</div>
<div class="magoon-container" id="team">
<div class="magoon_left-side">
<div class="pics">
<a data-fancybox="gallery" href="img/gallery1/big_1.jpg"><img src="img/gallery1/small_1.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_2.jpg"><img src="img/gallery1/small_2.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_3.jpg"><img src="img/gallery1/small_3.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_4.jpg"><img src="img/gallery1/small_4.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_5.jpg"><img src="img/gallery1/small_5.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_6.jpg"><img src="img/gallery1/small_6.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_7.jpg"><img src="img/gallery1/small_7.jpg"></a>
<a data-fancybox="gallery" href="img/gallery1/big_8.jpg"><img src="img/gallery1/small_8.jpg"></a>
  </div>
<div class="magoon_text">
<p>Познакомимся с нашим брутальным красавчиком Dmitriy Magoon?</p>
<p>Дима делает татуировки уже более 7 лет. За это время он отработал кучу стилей, придумал множество своих фишек и стал универсальным мастером.⁠</p>
<p>Он может делать как минимализм, так и около-реалистичные, как черно-белые, так и цветные татули.⁠⠀</p>
<p>Дмитрий - голова нашей студии и... видимо руки тоже.⁠</p>
</div>
  </div>
<div class="magoon-right-side">
<div class="magoon-right-side_logo">
<img src="img/magoon-nickname.png" alt="">
</div>
<div class="magoon_photo"><img src="img/magoon.jpg" alt=""></div>
</div>
  <div class="phone_adapt">
<p>Познакомимся с нашим брутальным красавчиком Dmitriy Magoon?</p>
<p>Дима делает татуировки уже более 7 лет. За это время он отработал кучу стилей, придумал множество своих фишек и стал универсальным мастером.⁠</p>
<p>Он может делать как минимализм, так и около-реалистичные, как черно-белые, так и цветные татули.⁠⠀</p>
<p>Дмитрий - голова нашей студии и... видимо руки тоже.⁠</p>
</div>
  </div>
<div class="Koltovoy-container">
<div class="koltovoy-left-side">
<div class="koltovoy-left-side_logo">
<img src="img/Koltovoy-nickname.png" alt="">
</div>
<img src="img/koltovoy.jpg" alt="" class="koltovoy_photo">
</div>
<div class="koltovoy-right-side">
<div class="pics kolt_pics">
<a data-fancybox="gallery-2" href="img/gallery2/big_1.jpg"><img src="img/gallery2/small_1.jpg"></a>
<a data-fancybox="gallery-2" href="img/gallery2/big_2.jpg"><img src="img/gallery2/small_2.jpg"></a>
<a data-fancybox="gallery-2" href="img/gallery2/big_3.jpg"><img src="img/gallery2/small_3.jpg"></a>
</div>
<div class="koltovoy_text">
<p>Хэндпоук мастер – Max Koltovoy</p>
<p>Татуиров очка - не просто картинка.
В первую очередь это человек, что ее носит.
Татуля - это его внутренний мир, что отражается в картинках на теле, который мы стараемся передать индивидуальным подходом к каждому.
Весь смысл в процессе нанесения, а не только в «красивой штучке на пальце».
</p>
<p>
Это долгое, кропотливое и очень интимное действо, во время которого вы доверяете свою кожу другому человеку, обеспечивающему вам безопасность, новые эмоции и (естественно) татуиров очку.</p>
</div>
</div>
<div class="phone_adapt_kolt">
<p>Хэндпоук мастер – Max Koltovoy</p>
<p>Татуиров очка - не просто картинка.
В первую очередь это человек, что ее носит.
Татуля - это его внутренний мир, что отражается в картинках на теле, который мы стараемся передать индивидуальным подходом к каждому.
Весь смысл в процессе нанесения, а не только в «красивой штучке на пальце».
</p>
<p>
Это долгое, кропотливое и очень интимное действо, во время которого вы доверяете свою кожу другому человеку, обеспечивающему вам безопасность, новые эмоции и (естественно) татуиров очку.</p>
</div>
  </div>
<div class="comments-container" id="comments">
<div class="slider">
  <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
<img src="img/slide-pic1.png" alt="">
</div>
<div class="slide__text__wrapper">
<div class="slide__text">
<span class="slide__text1">Спасибо мастеру Максу за новую тату на руке (прикреплю фото ниже)!!! Эскиз сделан быстро, бил татуировку быстро и не больно! Цены не кусаются , очень дружелюбная и комфортная обстановка. Мастер опытный, помог мне сделать эскиз. Через 4 месяца пришел еще раз и сделали бесплатно доработку с прорисовкой, студия находится очень удобно рядом с метро Площадь Ильича. Все стерильно и профессионально. Спасибо Максу (https://vk.com/id372337776) и студии "RIDE TATTOO" за качественное тату и хорошее настроение.
Приду еще в будущем)</span>
<div class="slide__text__sign">
Анатолий Акимов
</div>
</div>
</div>

  </div>
  </div>
  <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic2.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text2">Восхитительный салон,прекрасные мастера, Dmitriy Magoon просто Ювелир ❤, адекватный прайс, рядом с метро, пришёл сюда за первой тату и не уйду пока есть свободные места😌, бесплатные консультации, подборка эскиза на месте,если забиваться, то только здесь❤❤</span>
<div class="slide__text__sign">
Ванька Нейзер
</div>
</div>

  </div>
  </div>
    <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic3.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text3">Если хотите сделать классную татуировку, то Вам именно сюда "RIDE TATTOO"!
Прекрасная, уютная студия, классные ребята, знающие своё дело на все 100%. Я перекрыла и до работала все свои старые татуировки, и сделала новые. Чем осталась очень довольна.
Огромное спасибо мастеру https://vk.com/dmitriy_magoon!
Однозначно это лучшая студия, записывайтесь и Вы не пожалеете ❗❗❗</span>
<div class="slide__text__sign">
Светлана Ковалева
</div>
</div>

  </div>
  </div>
    <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic4.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text4">Ride Tattoo топ студи💯🥇
В ней работают лучшие мастера ❗🔥❗🔥❗🔥
Общительные, весёлые ребята👍 Они найдут подход к любому человеку👴👨‍⚕👨‍🚀 ♀
Атмосфера студию 10 из 10👌
Туда хочется возвращаться вновь и вновь,как к в родной дом🏘
В свои работы вкладывают душу🥰 и частичку сердечка❤
Время в студии летит незаметно🕛🕜🕕
У обоих мастеров лёгкая рука🙌 Даже в самом болезненном или неудобном месте сделают все по высшему разряду 😌Ты даже не почувствуешь😉
Ребята уделяют внимание каждой мелкой детали твоей татуировки🔍
Хочется заметить,что прайс💵 не бьет по карману😇
Если ты все еще сомневаешься, стоит ли записываться на сеанс в Ride Tattoo, то делаешь это зря)
Записавшись в эту студию однажды, ты не захочешь пойти в другую уже никогда 😏</span>
<div class="slide__text__sign">
Арина Герцена
</div>
</div>
  </div>
  </div>
    <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic5.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text5">Все классно, большое спасибо мастеру - @koltov_oy.
Работа выполнена очень детально.
Делала татуировку первый раз, мастер был внимателен к своей работе, вложил всю душу в свою работу.
Однозначно рекомендую этого специалиста и стиль нанесения handpoke.</span>
<div class="slide__text__sign">
Ксения Вельтман
</div>
</div>
  </div>
  </div>
    <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic6.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text6">Хочу выразить благодарность мастеру Дмитрию! Забиваюсь у него уже не первый год и друзьям советую! 😊👍Прекрасный человек знающий своё дело, подберёт-нарисует вам эскиз, который 100% понравится! 💯
Я очень долго решалась на перекрытие старой тату и вот наконец Дмитрий подобрал подходящий рисунок, который мне ооочень понравился!🤩
Ride Tattoo - Небольшой, но стильный уголок в центре Москвы с удобным расположением. 🗺
Если хотите качественную работу и хорошо провести время то вам сюда.
Делаю особую отметку, что в работе используются стерильные, одноразовые материалы и качественная краска для забива! 🔥
В процессе уже 5 татуировка и это точно не конец, потому что в это место хочется возвращаться снова и снова❣</span>
<div class="slide__text__sign">
Анастасия Елисеевна
</div>
</div>
  </div>
  </div>
    <div class="slider__item">
    <div class="slide__wrapper">
<div class="slide__pic">
  <img src="img/slide-pic7.png" alt="">
</div>
<div class="slide__text">
<span class="slide__text7">Салон огонь, расположение очень удобное, тёплый приём и общение, скучно не будет точно. Салон чистый, никакой антисанитарии, всё стерильно и красиво, одноразовые иглы и т.п. Если вдруг вам будет больно, мастер предложит обезболивание, морально поддержит. Делают ребята свою работу чётко и без ошибок. Цены в данном салоне более чем адекватные. Мастера открыты вашим предложениям в плане тату и выполнят ваши желания в точности, как вы просите, будьте внимательны в желаниях🤣
По факту уже 2 рукава, тату на шее, груди плече и ноге сделаны туть(по факту уже 6 отличных работ которые радуют глаз и не только мой😅). В общем советую всем на все 100%.</span>
<div class="slide__text__sign">
Светлана Ковалева
</div>
</div>
</div>
</div>
  </div>
  </div>
<div class="works-container" id="price"> 
<p class="works-title">СТОИМОСТЬ РАБОТЫ?</p>
<p class="works-text">На конечную стоимость татуировки влияют размер и сложность: количество цветов и мелких деталей, место нанесения, время, которое на это требуется. Даже личные отношения с мастером имеют значение.</p>
<p class="works-text">Цену рассчитывают двумя способами: по времени работы мастера или по площади татуировки. Это как в такси: кто-то берет плату за километры или за время в пути, а где-то фиксированная стоимость поездки.</p>
<p class="works-text">
Сеанс — это общее время работы: выбор и доработка эскиза, работа мастера, перекуры, перерывы на чай, кофе и прочее. В среднем сеанс длится 3—4 часа и стоит 6—12 тысяч рублей. </p>
</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/gsap.min.js"></script>
<script>
// Отправка данных на сервер
var msg = document.querySelector(".msg");
var gsapMsg = gsap.to(".msg", 0.25, {autoAlpha: 1,y: -40,ease: Expo.inOut, paused: true});
function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
showMsg("Подождите. Идёт отправка сообщения", "#b1b1b1");
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
  if (req.status >= 200 && req.status < 400) {
  json = JSON.parse(this.response);
      console.log(json);
        
      // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
      if (json.result == "success") {
        // Если сообщение отправлено
   showMsg("Сообщение успешно отправлено", "#36AE46");
            console.log("Сообщение отправлено");
            event.target.reset();
      } else {
        // Если произошла ошибка
            showMsg("Ошибка. Сообщение не отправлено", "#DC352F");
            console.log("Ошибка. Сообщение не отправлено");
      }
    // Если не удалось связаться с php файлом
    } else {showMsg("Ошибка сервера. Номер: "+req.status, "#DC352F");}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {showMsg("Ошибка отправки запроса", "#DC352F");};
req.send(new FormData(event.target));
}
function showMsg(message, color) {
msg.innerText = message;
msg.style.background = color;
gsapMsg.restart();
}

</script>
</body>
<footer id="contacts">
<div class="footer_container">
  <div class="footer_contacts">
    <p class="footer_contacts_contacts">Контакты:</p>
    <p>Тел: <span><a href="tel:+79779378017">+7 (977) 937-80-17</a><span></p>
    <p>Москва,Китай Город,Покровка</p>
  </div>
  <div class="map-container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95bf620dfead89a70d3ac44aec2de02deb8952ce36e94e558b933b601722c386&amp;width=100%25&amp;height=288&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>
  </div>
</footer>
<!-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 156835945, {expandTimeout: "10000",tooltipButtonText: "Есть вопрос?"});
</script> -->
</div>
</html>