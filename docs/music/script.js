// PRESS THE MENU BUTTON TO TRIGGER ANIMATION
// PRESS PLAY BUTTON TO LISTEN THE DEMO SONG

// As seen on: "https://dribbble.com/shots/2144866-Day-5-Music-Player-Rebound/"

// THANK YOU!
var a1 = document.getElementById('a1');
var a2 = document.getElementById('a2');
var audio = document.getElementById('audio');
var playpause = document.getElementById("play");
let sounds = ["https://mp3uk.net/mp3/files/morgenshtern-nominalo-mp3.mp3", "https://mp3uk.net/mp3/files/morgenshtern-dinero-mp3.mp3"
];
let g = 0;
let a = 0;
let text = ["Номинало","Динеро"];
function toggleNext(){
//a1.innerHTML="Пабло2";
a2.innerHTML="MoRgEnShTeRn";
//audio.src = "https://mp3uk.net/mp3/files/morgenshtern-pablo-mp3.mp3";
if(g === sounds.length || a === text.length) {
    audio.src = `${sounds[g]}`;
    g=0;
    a=0;
  }
  a1.innerHTML=`${text[a]}`;
  audio.src = `${sounds[g]}`;
  g++;
  a++;
};
 
function togglePlayPause() {
  /* if (audio.paused || audio.ended) {
      playpause.title = "Pause";
      audio.play();
   } else {
      playpause.title = "Play";
      audio.pause();
   }*/
   return audio.paused ? audio.play() : audio.pause();
}