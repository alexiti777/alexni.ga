
// Обновляйте обратный отсчет каждые 1 секунду
var x = setInterval(function() {

  // Получить сегодняшнюю дату и время
  var now = new Date().getTime();

  // Найти расстояние между сейчас и датой обратного отсчета
  var distance = countDownDate - now;

  // Расчет времени по дням, часам, минутам и секундам
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Отображение результата в элементе с помощью id="demo"
  document.getElementById("demo").innerHTML = days + " дней " + hours + " часов "
  + minutes + " минут " + seconds + " сек";

  // Если обратный отсчет завершен, напишите текст
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
var countDownDate = new Date(" 14, 2021 00:00:00").getTime();