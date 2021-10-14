<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta itemprop="width" content="300">
        <meta itemprop="height" content="600">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/photoswipe.css">
  <link rel="stylesheet" href="css/default-skin/default-skin.css">
  <script src="js/photoswipe.min.js"></script>
  <script src="js/photoswipe-ui-default.min.js"></script>
  <script src="js/script-min.js"></script>
  <script src="js/jquery.min.js"></script>
    <script src="js/photo.js"></script>
    
  <title>Bunitskiy.site</title>
</head>
<body>
  <table style="border-collapse: collapse; width: 100%;" border="0">
    <tbody>
      <tr style="height: 18px;">
        <td style="width: 15%; text-align: centre; border-bottom: 5px solid #ffffff;">  <img src="img/logo.png" alt="" width="100%" height="60%"><span style="color: white; class="user"><h3>Пользователь: 
        <?php if (!($_SESSION['session_username'])==null) { echo $_SESSION['session_username'];} else { printf(" Гость"); }?>
          </td>
        <td style="width: 75%; text-align: right; border-bottom: 5px solid #ffffff;" >
          <div class="clocker">
          <img src="img/header.jpg" alt="" width="100%">
        <span><p id="clock"></p></span>
        </div>
        </td>
      </tr>
      <tr>
        <td style="border-right: 5px solid #ffffff; border-bottom: 5px solid #ffffff; vertical-align: top;">
        <?php if (!($_SESSION['session_username'])==null) { printf("<a href='formes/logout.php' style='float: left; color: white; font-size: 14pt;'>Выйти</a></h3></span>");} else { printf("<a href='formes/index.php' style=' color: white; font-size: 14pt;'>Вход</a>"); printf("<a href='formes/reg.php' style='color: white;font-size: 14pt; float: right;'> Регистрация</a>"); }?>

          
          
      <ul style="margin-top: 50%;">
        <li><a href="#">
            <h3>Главная</h3>
          </a></li>
        <li><a href="#imgcar">Картинки</a></li>
        <li><a href="#car">Авто</a></li>
        <li><a href="#moto">Мотоциклы</a></li>
        <li><a href="#buy">Форма покупки</a></li>
        <li><a href="pages/orazrab.html">О разработчикке</a></li>
        
        <li><a>Социальные кнопки</a></li>
        <center>
          <div class="social vk" style="margin-left: 20%;">
            <a href="https://vk.com/asshabessy" target="_blank">
              <svg role="img" viewBox="0 0 576 512">
                <path fill="currentColor"
                  d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" />
              </svg>
            </a>
          </div>
          <div class="social instagram">
            <a href="https://www.instagram.com/alexbuiniy/" target="_blank">
              <svg role="img" viewBox="0 0 448 512">
                <path fill="currentColor"
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </a>
          </div>
          <div class="social telegram">
            <a href="https://t.me/alexbuiniy" target="_blank">
              <svg role="img" viewBox="0 0 448 512">
                <path fill="currentColor"
                  d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z" />
              </svg>
            </a>
          </div>
        </center>
      </ul>
      
      </td>
        <td>
          <div id="slideout">
            <div id="slideout_inner">
              <div class="viezd"><img class="imagek" src="img/vlevo.png" width="50px" style="display: inline-flex;">
                <div id="radiobells_container" style="display: inline-block;"><a href="https://www.radiobells.com/" rel="nofollow" id="RP_link">Онлайн радио</a>
                  #radiobells_script_hash</div>
                <link href="https://www.radiobells.com/script/style.css" type="text/css" rel="stylesheet" />
                <script
                  type="text/javascript">var rad_backcolor = "#d6d6d6"; var rad_logo = "white"; var rad_autoplay = false; var rad_width = "fixed"; var rad_width_px = 330; var rad_stations = [['https://emgregion.hostingradio.ru:8064/moscow.europaplus.mp3', 'Европа плюс', 'europaplus'], ['http://air3.radiorecord.ru:8000/rr_320', 'Радио Рекорд', 'radiorecord'], ['https://nashe1.hostingradio.ru/nashe-256', 'Наше радио', 'nashe'], ['https://pub0302.101.ru:8443/stream/air/aac/64/100', 'Авторадио', 'avtoradio'], ['http://ic7.101.ru:8000/a99?', 'Радио Energy', 'nrj'], ['https://online.kissfm.ua/KissFM_HD', 'Kiss FM', 'kissfm']];</script>
                <script type="text/javascript" src="js/radio.js" charset="UTF-8"></script>
            </div>
          </div>
        </div>
          <!--НАЧАЛО БЛОКА РАДИО ОНЛАЙН-->
          <Center>
       
          </Center>
          <!--КОНЕЦ БЛОКА РАДИО ОНЛАЙН-->



          <a class="cartinki" name="imgcar">
            <h3>Список</h3>
          </a>
          <table class="spisokgrupp" border="3" align="center">
            <tbody>
              <tr style="height: 18px;">
                <td class="podone">1 - подгруппа</td>
                <td class="podtwo">2 - подгруппа</td>
              </tr>
              <tr style="height: 18px;">
                <td class="ongroup">Буйницкий Александр</td>
                <td id="twgroup">Труханов Владислав</td>
              </tr>
              <tr style="height: 18px;">
                <td class="ongroup">Головин Роман
                </td>
                <td id="twgroup">Владислав Чиженков</td>
              </tr>
              <tr style="height: 18px;">
                <td class="ongroup">Замараев Сергей 
                </td>
                <td id="twgroup">Шульга Дмитрий
                </td>
              </tr>
              <tr style="height: 23px;">
                <td class="ongroup">Романов Даниил
                </td>
                <td id="twgroup">Шурко Сергей</td>
              </tr>
            </tbody>
          </table>



          <a class="cartinki" name="imgcar"><h3>Картинки</h3></a>
        <table style="border-collapse: collapse; width: 60%;" border="0" align="center">
          <tbody>
            <tr>
              <td>
                <figure itemprop="associatedMedia" itemscope >
                  <div class="my-gallery" itemscope >
                  
                    <figure itemprop="associatedMedia" itemscope >
                      <a href="./img/avto1.jpg" itemprop="contentUrl"
                        data-size="1920x1200" >
                        <img src="./img/avto1.jpg" itemprop="thumbnail"
                          alt="Image description" width="100%">
                      </a>
                      <figcaption itemprop="caption description">BMW M9 2019г.</figcaption>
                  
                    </figure>
                  <figure itemprop="associatedMedia" itemscope>
                    <a href="./img/avto2.jpg" itemprop="contentUrl" data-size="1920x1200">
                      <img src="./img/avto2.jpg" itemprop="thumbnail" alt="Image description" width="100%"/>
                    </a>
                    <figcaption itemprop="caption description"> BMW "carro blanco" 2020г</figcaption>
                  </figure>
                    
                  
                    <figure itemprop="associatedMedia" itemscope>
                      <a href="./img/avto3.jpg" itemprop="contentUrl"
                        data-size="1920x1200">
                        <img src="./img/avto3.jpg" itemprop="thumbnail"
                          alt="Image description" width="100%" />
                      </a>
                      <figcaption itemprop="caption description">BMW М5 F10 </figcaption>
                    </figure>
                  
                    <figure itemprop="associatedMedia" itemscope>
                      <a href="./img/avto4.jpg" itemprop="contentUrl"
                        data-size="1920x1200">
                        <img src="./img/avto4.jpg" itemprop="thumbnail"
                          alt="Image description" width="100%" />
                      </a>
                      <figcaption itemprop="caption description">BMW M3 e92 GT2</figcaption>
                    </figure>
                  
                  </div>
                </figure>
              <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://https-alexni-ga-buinitskiy-site-index-html.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>              </td>
              <td></td>
            </tr>
            <tr>
              <td>
              </td>
              <td>
                
          
              </td>
            </tr>
            <td colspan="2">
              <a class="text" name="car">
                <hr>
              <h3>Список легендарных автомобилей BMW</h3>
            </a>
          
            <ol class="sp">
              <li>BMW 328 1936г.</li>
              <li>Isetta 300 1955г.</li>
              <li>BMW 507 1955г.</li>
              <li>BMW M1 1978г.</li>
              <li>BMW Nazca 1992г.</li>
              <li>BMW E34 M5 1988г.</li>
              <li>BMW 850i 1989г.</li>
              <li>BMW Z8 1997г.</li>
              <li>BMW X5 1999г.</li>
              <li>BMW X3 2020 года</li>
            </ol>
            <hr>
          </td>
          <tr>
            <td colspan="2">
              <a class="text" name="moto">
                <h3>Топ 10 самых дорогих мотоциклов BMW</h3>
              </a>
              <ol class="moti">
                <li>BMW HP4, $78000</li>
                <li>BMW K1600GTL, $26000</li>
                <li>BMW R1250GS Adventure, $20000</li>
                <li>BMW S1000XR, $17000</li>
                <li>BMW S1000RR, $16000</li>
                <li>BMW R nineT, $15500</li>
                <li>R nineT Racer, $13500</li>
                <li>BMW C 650GT, $11000</li>
                <li>BMW C 400X, $6800</li>
                <li>BMW G 310R, $4900</li>
              </ol>
              <hr>
              <a class="text" name="buy">
                <h3>Форма заказа</h3>
              </a>
               <form action="check.php" method="post">
              <table class="table">
                <tbody>
                  <tr class="trst">
                    <td class="tdtext">Фамилия</td>
                    <td class="tdvalue"><input name="fam" required="" type="text" /></td>
                  </tr>
                  <tr class="trst">
                    <td class="tdtext">Инициалы</td>
                    <td class="tdvalue"><input name="in" required="" type="text" /></td>
                  </tr>
                  <tr class="trst">
                    <td class="tdtext">Телефон</td>
                    <td class="tdvalue"><input name="tel" required="" type="text" /></td>
                  </tr>
                  <tr class="trst">
                    <td class="tdtext">Количество</td>
                    <td class="tdvalue"><input name="kol" style="width: 30px;" required="" type="text" /></td>
                  </tr>
                  <tr>
                    <td class="tdtext">Тип</td>
                    <td class="tdvalue" >
                      <select name="tip"  class = "sel">
                        <option>Мотоциклы</option>
                        <option>BMW HP4, $78000</option>
                        <option>BMW K1600GTL, $26000</option>
                        <option>BMW R1250GS Adventure, $20000</option>
                        <option>BMW S1000XR, $17000</option>
                        <option>BMW S1000RR, $16000</option>
                        <option>BMW R nineT, $15500</option>
                        <option>R nineT Racer, $13500</option>
                        <option>BMW C 650GT, $11000</option>
                        <option>BMW C 400X, $6800</option>
                        <option>BMW G 310R, $4900</option>
                      </select>&nbsp;<select name="tip" class = "sel">
                        <option>Авто</option>
                        <option>BMW 328 1936г.</option>
                        <option>Isetta 300 1955г.</option>
                        <option>BMW 507 1955г.</option>
                        <option>BMW M1 1978г.</option>
                        <option>BMW Nazca 1992г.</option>
                        <option>BMW E34 M5 1988г.</option>
                        <option>BMW 850i 1989г.</option>
                        <option>BMW Z8 1997г.</option>
                        <option>BMW X5 1999г.</option>
                        <option>BMW X3 2020 года</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td class="tdtext">Доставка</td>
                    <td class="tdvalue"><input name="pot" type="radio" value="Самовывоз" /><a style="color: rgb(255, 255, 255);">Самовывоз</a> <input name="pot" type="radio"
                        value="В отделение" /><a style="color: rgb(255, 255, 255);">В отделение</a>
                  </tr>
                  <tr>
                    <td class="tdtext">Требуется накладная</td>
                    <td class="tdvalue"><input name="yes" type="checkbox" value="yes" /></td>
                  </tr>
                  <tr>
                    <td class="tdtext">Дополнительная информация</td>
                    <td class="tdvalue"><textarea name="comment"></textarea></td>
                  </tr>
                  <tr>
                    <td class="tdtext"><input type="submit" value=" Заказать " /></td>
                    <td class="tdvalue"><input type="button" value=" Отменить " /></td>
                  </tr>
                </tbody>
              </table>
              </form>
            </td>
          </tr>
          
          </tbody>
        </table>
        <a href="#" title="Вернуться к началу страницы" class="topNubex"><img src="img/up.png" alt=""></a>
        </td>
      </tr>
      <tr style="height: 18px;">
        <td style="width: 100%; height: 18px;" colspan="2"><p style="color: white; font-size: 10pt; text-align: center;" >Copirated by AlexBuiniy| 2021 
      </tr>
    </tbody>
  </table>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
  
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
  
      <div class="pswp__ui pswp__ui--hidden">
  
        <div class="pswp__top-bar">
  
          <div class="pswp__counter"></div>
  
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
  
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
  
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>
  
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>
  
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
 <script id="dsq-count-scr" src="//https-alexni-ga-buinitskiy-site-index-html.disqus.com/count.js" async></script>
<script type="text/javascript"
  language="javascript">var orruMyRad = "20,31,3361,4960,5136,5444", orruBlockWidth = 400, orruImgKol = 6;</script>
<script src="https://onlayn-radio.ru/script/rad.js" type="text/javascript" defer="defer"></script>
  <script>
  /*global window*/
    (function (global) {
      "use strict";
      function Clock(el) {
        var document = global.document;
        this.el = document.getElementById(el);
        this.months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        this.days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      }
      Clock.prototype.addZero = function (i) {
        if (i < 10) {
          i = "0" + i;
          return i;
        }
        return i;
      };
      Clock.prototype.updateClock = function () {
        var now, year, month, dayNo, day, hour, minute, second, result, self;
        now = new global.Date();
        year = now.getFullYear();
        month = now.getMonth();
        dayNo = now.getDay();
        day = now.getDate();
        hour = this.addZero(now.getHours());
        minute = this.addZero(now.getMinutes());
        second = this.addZero(now.getSeconds());
        result = this.days[dayNo] + ", " + day + " " + this.months[month] + " " + year + " " + hour + ":" + minute + ":" + second;
        self = this;
        self.el.innerHTML = result;
        global.setTimeout(function () {
          self.updateClock();
        }, 1000);
      };
      global.Clock = Clock;
    }(window));

    function addEvent(elm, evType, fn, useCapture) {
      "use strict";
      if (elm.addEventListener) {
        elm.addEventListener(evType, fn, useCapture);
      } else if (elm.attachEvent) {
        elm.attachEvent('on' + evType, fn);
      } else {
        elm['on' + evType] = fn;
      }
    }

    addEvent(window, "load", function () {
      if (document.getElementById("clock")) {
        var clock = new Clock("clock");
        clock.updateClock();
      }
    });
    </script>


  <script>var initPhotoSwipeFromDOM = function (gallerySelector) {

      // parse slide data (url, title, size ...) from DOM elements 
      // (children of gallerySelector)
      var parseThumbnailElements = function (el) {
        var thumbElements = el.childNodes,
          numNodes = thumbElements.length,
          items = [],
          figureEl,
          linkEl,
          size,
          item;

        for (var i = 0; i < numNodes; i++) {

          figureEl = thumbElements[i]; // <figure> element

          // include only element nodes 
          if (figureEl.nodeType !== 1) {
            continue;
          }

          linkEl = figureEl.children[0]; // <a> element

          size = linkEl.getAttribute('data-size').split('x');

          // create slide object
          item = {
            src: linkEl.getAttribute('href'),
            w: parseInt(size[0], 10),
            h: parseInt(size[1], 10)
          };



          if (figureEl.children.length > 1) {
            // <figcaption> content
            item.title = figureEl.children[1].innerHTML;
          }

          if (linkEl.children.length > 0) {
            // <img> thumbnail element, retrieving thumbnail url
            item.msrc = linkEl.children[0].getAttribute('src');
          }

          item.el = figureEl; // save link to element for getThumbBoundsFn
          items.push(item);
        }

        return items;
      };

      // find nearest parent element
      var closest = function closest(el, fn) {
        return el && (fn(el) ? el : closest(el.parentNode, fn));
      };

      // triggers when user clicks on thumbnail
      var onThumbnailsClick = function (e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function (el) {
          return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if (!clickedListItem) {
          return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
          childNodes = clickedListItem.parentNode.childNodes,
          numChildNodes = childNodes.length,
          nodeIndex = 0,
          index;

        for (var i = 0; i < numChildNodes; i++) {
          if (childNodes[i].nodeType !== 1) {
            continue;
          }

          if (childNodes[i] === clickedListItem) {
            index = nodeIndex;
            break;
          }
          nodeIndex++;
        }



        if (index >= 0) {
          // open PhotoSwipe if valid index found
          openPhotoSwipe(index, clickedGallery);
        }
        return false;
      };

      // parse picture index and gallery index from URL (#&pid=1&gid=2)
      var photoswipeParseHash = function () {
        var hash = window.location.hash.substring(1),
          params = {};

        if (hash.length < 5) {
          return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
          if (!vars[i]) {
            continue;
          }
          var pair = vars[i].split('=');
          if (pair.length < 2) {
            continue;
          }
          params[pair[0]] = pair[1];
        }

        if (params.gid) {
          params.gid = parseInt(params.gid, 10);
        }

        return params;
      };

      var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
          gallery,
          options,
          items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

          // define gallery index (for URL)
          galleryUID: galleryElement.getAttribute('data-pswp-uid'),

          getThumbBoundsFn: function (index) {
            // See Options -> getThumbBoundsFn section of documentation for more info
            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
              pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
              rect = thumbnail.getBoundingClientRect();

            return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
          }

        };

        // PhotoSwipe opened from URL
        if (fromURL) {
          if (options.galleryPIDs) {
            // parse real index when custom PIDs are used 
            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
            for (var j = 0; j < items.length; j++) {
              if (items[j].pid == index) {
                options.index = j;
                break;
              }
            }
          } else {
            // in URL indexes start from 1
            options.index = parseInt(index, 10) - 1;
          }
        } else {
          options.index = parseInt(index, 10);
        }

        // exit if index not found
        if (isNaN(options.index)) {
          return;
        }

        if (disableAnimation) {
          options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
      };

      // loop through all gallery elements and bind events
      var galleryElements = document.querySelectorAll(gallerySelector);

      for (var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
        galleryElements[i].onclick = onThumbnailsClick;
      }

      // Parse URL and open gallery if it contains #&pid=3&gid=1
      var hashData = photoswipeParseHash();
      if (hashData.pid && hashData.gid) {
        openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
      }
    };

    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');</script>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}
