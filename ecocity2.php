<?
define("DEV_TEMPLATE" , true); // какой шаблон использовать
//define("FILTER" , "ECOCITY"); // из какого инфоблока тянуть слайдер и тп

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ЖК Экосити Ульяновск. Продажа квартир от застройщика. Однокомнатные, двухкомнатные, трехкомнатные квартиры в Новом Городе.");
$APPLICATION->SetPageProperty("keywords", "проекты, Премьера, строящийся дом, новая квартира, новостройка, квартиры, продажа, купить, застройщики, застройщик, Ульяновск, квартиры ульяновска, ипотека, новостройки, однокомнатная квартира, двухкомнатная квартира, трехкомнатная квартира, ипотека, клубный дом");
$APPLICATION->SetPageProperty("description", "Продажа квартир в ЖК Экосити, Ульяновск, Новый Город. Застройщик - компания Премьера. Прямые продажи квартир без посредников");
$APPLICATION->SetTitle("ЖК Экосити Ульяновск | Продажа квартир от застройщика. Компания Премьера");
?> 
<!-- Text Block | START -->
 
<script async>
    !function(e,t){var i=e.getElementsByTagName("script")[0];n=e.createElement("script"),n.src="//pb8605.profitbase.ru/assets/js/sw.js",n.async=!0,n.onload=function(){t.pb_front_widget.init("//pb8605.profitbase.ru/api/v2/json/sitewidget/widget",{ pb_api_key:"5c33e6db624586e4f21f192d33b5ef8d", project_id: 28367})},i.parentNode.insertBefore(n,i)}(document,window);
</script>

<link rel="stylesheet" href="/bitrix/templates/iccp_dev/css/pbar.css">

<!-- Photo Panel | START -->
<div class="section panel hero full fade">
<div class="slider">
    
    <div class="item">
    	<div class="back" data-image="/projects/ecocity/slide1.jpg"></div>
        <div class="panel-button">
        	<div class="button-container">
                <a href="#"><strong>Мечта</strong> имеет адрес</a>
                <span><i class="icon ion-ios-arrow-right"></i></span>
            </div>
        </div>
    </div>

</div> 
<div class="slider-nav">
    <a class="prev"><i class="icon ion-ios-arrow-left"></i></a>
    <a class="next"><i class="icon ion-ios-arrow-right"></i></a>
</div>  
</div>
<!-- Photo Panel | END -->

 <!-- Text Block | START -->
<div class="section text feature fade">
	<div class="center">
        <div class="col-1">
            <!--<img src="/projects/ecocity/logo-es-only.png"><br>-->
            <h1>Жилой комплекс <strong>ЭКОСИТИ</strong></h1>
            <h2>Новый микрорайон Ульяновска на берегу Волги</h2>
        </div>
    </div>
</div>

<div class="section text fade">
	<div class="center">
        <div class="col-2">
            <p>Для тех, кто думает о своём здоровье и хочет быть в гармонии с природой! <br>Мы предлагаем Вам жилье в экологически чистом месте, где сочетаются водные просторы великой реки, всегда свежий воздух, солнце, лужайки, деревья, пение птиц и одновременно - комфортная городская среда. <br>В двух шагах от дома - остановки общественного транспорта, детский сад, школа.
</p>
        </div>
        
    	<div class="col-2">
            <p>Летом - купание в реке, пляж, пробежки, велосипедные и пешие прогулки в лесу по благоустроенным и освещенным дорожкам, отдых с детьми на разнообразных и ярких аттракционах. <br>Зимой: лыжные гонки и катание на санях. В любое время года Вы найдете здесь занятие для всей семьи по душе и на свежем воздухе. <br>Все это для Вас будет в шаговой доступности, благодаря уникальному парку «Прибрежный», располагающемуся по соседству.</p>
        </div>
    </div>
</div>
<!-- Text Block | END -->


<!-- Carousel | START -->
<div class="section carousel horizontal fade">
<div class="slider">
    <img src="/projects/ecocity/c1.jpg" alt="">
    <img src="/projects/ecocity/c2.jpg" alt="">
    <img src="/projects/ecocity/c3.jpg" alt="">
    <img src="/projects/ecocity/c4.jpg" alt="">
    <img src="/projects/ecocity/c5.jpg" alt="">
</div>
<div class="slider-nav">
    <a class="prev"><i class="icon ion-ios-arrow-left"></i></a>
    <a class="next"><i class="icon ion-ios-arrow-right"></i></a>
</div>
</div>
<!-- Carousel | END -->

<!-- Text Block | START -->
<div class="section text fade">
	<div class="center">
        <div class="col-2">
            <p><img src="/projects/ecocity/c1-450.jpg" alt=""></p>
        </div>
    	<div class="col-2">
            <h3>Погрузитесь в дружелюбную атмосферу «ЭКОСИТИ»!</h3>
            <p>Здесь Вас не будут тревожить заботы из-за не обустроенной окружающей обстановки.<br>
            Здесь уже все продумано до мелочей, чтобы Вы наслаждались жизнью в своем новом жилье, не тратя время и нервы на устранение мелких неудобств.</p>
            <p>Это малоэтажная застройка, с хорошим паркингом, уютным двором и светлыми дизайнерскими подъездами.<br>
            Все настроено на то, чтобы вы могли посвятить свободное время себе - тихому отдыху, занятию спортом, общению с семьей и природой.</p>
            <p><img src="/projects/ecocity/ques.png" alt=""></p>
        </div>
    </div>
    
    <div class="center">
        <div class="col-2">
            <h3>Удобные квартиры – для Вашей фантазии</h3>
            <p>Строители «ЭКОСИТИ» позаботились о том, чтобы Вам не пришлось выполнять черновую работу и сделали все заранее. От Вас требуется лишь высказать пожелание, в какой квартире Вы хотели бы жить.<br>
            Все поверхности – стены, потолки и полы – уже идеально выровнены и оштукатурены, Вам надо лишь выбрать расцветку и материал, которыми будут их покрывать. Вся электропроводка тоже готова, осталось лишь выбрать место для установки розеток и выключателей. </p>
            <p>Везде на коммуникациях уже установлены необходимые счетчики - на воду, на электроэнергию, на газ. Даже входная дверь сразу сделана основательно и на совесть – по ГОСТу – нет никакой необходимости ее менять.<br>
По сути, мы предлагаем Вам готовый конструктор квартиры, которая требует лишь чистовую отделку, а это уже больше творчество, чем работа! Насладитесь созданием собственного пространства для жизни, а мы уже постарались сделать так, чтобы это было легко выполнимо.</p>
        </div>
    	<div class="col-2">
            <p><img src="/projects/ecocity/c1-450.jpg" alt=""></p>
        </div>
    </div>
</div>
<!-- Text Block | END -->

<!-- Photo Panel | START -->
<div class="section panel">
    <div class="item fade">
    	<div class="back" data-image="/projects/ecocity/zhk-semya-plan_top.jpg"></div>
        <div class="panel-button">
        	<div class="button-container">
                <a href="#">Выбрать дом и квартиру</a>
                <span> <i class="icon ion-ios-arrow-right"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="section usp fade"> 
  <div class="center"> 
    <div class="col-3"> 
      <div class="item"> <i class="icon ion-ios-cash"></i> 
        <p style="color: rgb(85, 85, 85);"><strong>Квартиры от 1 885 600 руб. (47 900 руб. за м2)</strong></p>
       </div>
     </div>
   
    <div class="col-3"> 
      <div class="item"> <i class="icon ion-ios-thumbs-up"></i> 
        <p style="color: rgb(85, 85, 85);"><strong>Комфорт класс</strong></p>
       </div>
     </div>
   
    <div class="col-3"> 
      <div class="item"> <i class="icon ion-ios-location"></i> 
        <p style="color: rgb(85, 85, 85);"><strong>Локация – 5 минут от Центра Нового города</strong></p>
       </div>
     </div>
   </div>
 </div>
 <?$APPLICATION->IncludeComponent(
  "alb:request_form", 
  "",
  array(
  ), false
);?> 
<div class="section usp fade"> 
  <div class="center"> 
    <div class="col-2"> 
      <div class="item"> <i class="icon ion-leaf"></i> 
        <p style="color: rgb(85, 85, 85);"><strong>Трехслойные наружные стены</strong></p>
       </div>
     </div>
   
    <div class="col-2"> 
      <div class="item"> <i class="icon ion-ios-home"></i> 
        <p style="color: rgb(85, 85, 85);"><strong>Витражное остекление лоджий с панорамными видами</strong></p>
       </div>
     </div>
   </div>
 </div>

<!-- begin status -->
<div class="section text fade"> 
	<div class="center">
        <div class="col-1">
        	<h2 style="text-align: center;">Этапы строительства проекта</h2>
        </div>
        
        <div class="col-3">
        
            <div class="candidatos color1">
                <div class="parcial">
                    <div class="info">
                        <p><strong>Дом 1</strong> (окт 2021)</p>
                        <div class="percentagem-num">5%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 5%;"></div>
                    </div>
                    <div><p>Заливка фундамента</p></div>
                </div>
            </div>
            
            <div class="candidatos color1">
                <div class="parcial">
                    <div class="info">
                        <p><strong>Дом 2</strong> (янв 2022)</p>
                        <div class="percentagem-num">7%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 7%;"></div>
                    </div>
                    <div><p>Роем котлован</p></div>
                </div>
            </div>

            <div class="candidatos color1">
                <div class="parcial">
                    <div class="info">
                        <p><strong>Дом 3</strong> (фев 2022)</p>
                        <div class="percentagem-num">10%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 10%;"></div>
                    </div>
                    <div><p>Получены документы на строительство</p></div>
                </div>
            </div>
            
        </div>
        
        <div class="col-3">
            <img src="/projects/ecocity/c1-450.jpg" alt="">
        </div>
        
        <div class="col-3">
            <div class="candidatos color3">
                <div class="parcial">
                    <div class="info">
                        <p><strong>1-я очередь</strong> (фев 2022)</p>
                        <div class="percentagem-num">5%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 5%;"></div>
                    </div>
                    <div><p>Идет стройка</p></div>
                </div>
            </div>
            
            <div class="candidatos color3">
                <div class="parcial">
                    <div class="info">
                        <p><strong>2-я очередь</strong> (нояб 2022)</p>
                        <div class="percentagem-num">0%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 0%;"></div>
                    </div>
                    <div><p>Получение документов на строительство</p></div>
                </div>
            </div>

            <div class="candidatos color3">
                <div class="parcial">
                    <div class="info">
                        <p><strong>3-я очередь</strong> (сент 2023)</p>
                        <div class="percentagem-num">0%</div>
                    </div>
                    <div class="progressBar">
                        <div class="percentagem" style="width: 0%;"></div>
                    </div>
                    <div><p>Получение документов на строительство</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end status -->

<div class="section text fade"> 
	<div class="center">
        <div class="col-1">
        	<h2 style="text-align: center;">Инфраструктура</h2>
        </div>
    </div>
</div>

<div class="section usp fade"> 
  <div class="center"> 
    <div class="col-4"> 
      <div class="item"> <i class="fas fa-map-marker-alt icons30"></i> 
        <h3 class="nomargin">Адрес</h3>
        <p>Пр-т Маршала Устинова</p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="fas fa-walking icons30"></i> 
        <h3 class="nomargin">5 минут</h3>
        <p>до детского сада</p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="fas fa-walking icons30"></i> 
        <h3 class="nomargin">7 минут </h3>
        <p>до парка</p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="fas fa-walking icons30"></i> 
        <h3 class="nomargin">10 минут </h3>
        <p>до лицея</p>
       </div>
     </div>
   </div>
 </div>
 
<!-- Stats | END -->
 
<div style="width: 100%; height: 500px; margin-bottom: 80px;"> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3f3bafbbaa585da4681be3ed89cec6fb3f36f03b596a3f7eb4f885e7cbf24f41&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe> </div>
 

<div class="section text fade"> 
	<div class="center">
        <div class="col-1">
            <img src="/projects/ecocity/photo-text-slider.jpg" alt="">
            <img src="/projects/ecocity/cut.png" alt="">
        </div>
    </div>
</div>



<!-- Text Block | START -->
 
<div class="section text feature fade"> 
  <div class="center"> 
    <div class="col-1"> 
      <h2>Условия продаж</h2>
     </div>
   </div>
 </div>
 
<!-- Text Block | END -->
 
<!-- USP Strip | START -->
 
<div class="section usp fade"> 
  <div class="center"> 
    <div class="col-4"> 
      <div class="item"> <i class="icon ion-ios-home"></i> 
        <p><strong><a href="/sales-conditions/mortgage" style="color: #555" >Ипотечное кредитование</a></strong></p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="icon ion-ios-cash"></i> 
        <p><strong><a href="/sales-conditions/the-parent-capital" style="color: #555" >Материнский капитал</a></strong></p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="icon ion-ios-key"></i> 
        <p><strong><a href="/sales-conditions/equity-participation" style="color: #555" >Долевое участие</a></strong></p>
       </div>
     </div>
   
    <div class="col-4"> 
      <div class="item"> <i class="icon ion-ios-checkmark"></i> 
        <p><strong><a href="/sales-conditions/installments" style="color: #555" >Беспроцентная рассрочка</a></strong></p>
       </div>
     </div>
   </div>
 </div>
 
<!-- ------------------------ -->
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/maps2/add_maps.css?v=225.03"> 
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/maps2/script.js"></script> 
 
<!-- USP Strip | END -->
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>