<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>單棲情緒</title>
<meta name="Keywords" content="单栖情绪" />
<meta name="Description" content="FM音乐电台" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="SMH/img/favicon.ico" type="image/x-icon">
<link href="SMH/css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="SMH/js/jquery-3.0.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="SMH/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="SMH/src/css/smusic.css"/>

<script type="text/javascript">

function hehe(){

    var aa="<div style=' position:relative; top:-120px; width:500px; height:200px; margin-left:32%;border-radius:15px; overflow:hidden;  border: 1px solid #CECFD4;-webkit-box-shadow:#666 0px 0px 10px;'><iframe name='iframe_canvas' src='http:\\\\douban.fm/partner/baidu/doubanradio' scrolling='no' frameborder='0' width='500' height='200'  ></iframe></div>";

    document.getElementById("douban").re

    document.getElementById("douban").innerHTML=aa;
    }
</script>
</head>
<body>


<div class="header" id="demo">
    <div class="top_logo"></div>  
     
    <div class="topcn" style="font:20px/18px 'microsoft yahei'; color:#0FF;text-align:center;">
      <p>&nbsp;</p>
      <img class="img" src="SMH/img/title.png" alt="">
    </div>
    
    <div class="nav">
        <a class="gv tip1" href="http://localhost/" target="_blank">我知道</a>
        <a class="gv tip2" href="http://localhost/wordpress" target="_blank">那些夏天</a>
        <a class="gv tip3" href="#" target="_blank">回不来</a>
    </div>

    <div class="canvaszz"> </div>
      <canvas id="canvas"></canvas> 
    </div>

<!--用来解决视频右键菜单，用于视频上面的遮罩层 START-->
<div class="videozz"></div>
<!--用来解决视频右键菜单，用于视频上面的遮罩层 END-->
 <div id="jp_container" role="application" aria-label="media player">

                <div class="jp-type-playlist">

                    <div id="jplayer" class="jp-jplayer"></div>

                    <div class="jp-time">

                        <span class="jp-current-time" role="timer" aria-label="time"></span><span class="jp-duration" role="timer" aria-label="duration"></span>

                    </div>



                </div>

             

            </div>

        </div>

<div id="douban" style="margin:auto">

<div class="grid-music-container f-usn">

    <div class="m-music-play-wrap">

        <div class="u-cover"></div>

        <div class="m-now-info">

            <h1 class="u-music-title"><strong>标题</strong><small>歌手</small></h1>

            <div class="m-now-controls">

                <div class="u-control u-process">

                    <span class="buffer-process"></span>

                    <span class="current-process"></span>

                </div>

                <div class="u-control u-time">00:00/00:00</div>

                <div class="u-control u-volume">

                    <div class="volume-process" data-volume="0.50">

                        <span class="volume-current"></span>

                        <span class="volume-bar"></span>

                        <span class="volume-event"></span>

                    </div>

                    <a class="volume-control"></a>

                </div>

            </div>

            <div class="m-play-controls">

                <a class="u-play-btn prev" title="上一曲"></a>

                <a class="u-play-btn ctrl-play play" title="暂停"></a>

                <a class="u-play-btn next" title="下一曲"></a>

                <a class="u-play-btn mode mode-list current" title="列表循环"></a>

                <a class="u-play-btn mode mode-random" title="随机播放"></a>

                <a class="u-play-btn mode mode-single" title="单曲循环"></a>

            </div>

        </div>

    </div>

    <div class="f-cb">&nbsp;</div>

    <div class="m-music-list-wrap" style="display: none;"></div>

</div>

<script src="SMH/src/js/smusic.min.js"></script>

<script>

var musicList = [
    {

        title : '安和桥',

        singer : '宋冬野',

        cover  : 'http://p4.music.126.net/cTHwjLlXfQjh3zRy1eskkA==/2018703348628889.jpg',

        src    : 'http://link.hhtjim.com/163/27646205.mp3'

    },
    { 

        title : '快乐崇拜',

        singer : '潘玮珀 张韶涵',

        cover  : 'http://p4.music.126.net/VUbbfuLrne9U64VIyhiakw==/105553116278641.jpg',

        src    : 'http://link.hhtjim.com/163/139808.mp3'

    },

    { 

        title : '不得不爱',

        singer : '潘玮珀 弦子',

        cover  : 'http://p3.music.126.net/__JZlNt4YHmBy7Nep8qTJA==/114349209294813.jpg',

        src    : 'http://link.hhtjim.com/163/139764.mp3'

    },

    {
 
        title : 'Jar Of Love',

        singer : '曲婉婷',

        cover  : 'http://p3.music.126.net/8jt2KnGDF0qMP9JbidOtVA==/573945069746475.jpg',

        src    : 'http://link.hhtjim.com/163/25713016.mp3'

    },

    { 

        title : '董小姐',

        singer : '宋冬野',

        cover  : 'http://p3.music.126.net/_f5W3wK95fmZiERRaYawsg==/1803199069572662.jpg',

        src    : 'http://link.hhtjim.com/163/25702068.mp3'

    }, 


    {

        title : 'Without You',

        singer : 'Dillon Francis',

        cover  : 'http://p1.music.126.net/aOGmHYbRz12NuTbsMHJI7w==/2529976256404504.jpg',

        src    : 'http://m1.music.126.net/E-dfjVTBkVlnSOqEGefwyw==/5913173534253612.mp3'

    },

    
    {

        title : 'Wasting Moo...',

        singer : 'Sick',

        cover  : 'http://p1.music.126.net/OAaeeIE9wtMxDH4ZcAJFlw==/6005532511620779.jpg',

        src    : 'http://m1.music.126.net/iloUK5nb5wkuZGoZO06Kvw==/6002233976484623.mp3'

    },



    {

        title : 'Bright Lights',

        singer : 'Syn Cole',

        cover  : 'http://p1.music.126.net/8gPH7B_TeXbzJrqtEPMa_g==/5877989162346518.jpg',

        src    : 'http://m1.music.126.net/pghiNnSFdOboXGZNwVTMhQ==/6064906139382188.mp3'

    },



    {

        title : 'Where Them...',

        singer : 'Flo Rida',

        cover  : 'http://p1.music.126.net/rpjeK9mapOfJAVIzdu40eQ==/6625657069198669.jpg',

        src    : 'http://m1.music.126.net/jFxN0b8VoBxVUFoDXnbjGQ==/2083574534647492.mp3'

    },

        {

        title : 'IGNITE',

        singer : 'Michael Mind Project',

        cover  : 'http://p1.music.126.net/71rYccwEjIKAHrHMhxFGfQ==/5774635069308312.jpg',

        src    : 'http://m1.music.126.net/ERokqQoFYNJi3C1qjKoaUw==/6069304186009827.mp3'

    },



    {

        title : 'Keep Our Lov...',

        singer : 'Afrojack',

        cover  : 'http://p1.music.126.net/kiI_d6f2YPmSqmNwu_jhEA==/5960452534408399.jpg',

        src    : 'http://m1.music.126.net/RErp9NjCtgNWSeGDvMnVbw==/6052811511291328.mp3'

    },


    {

        title : 'Stay the Ni...',

        singer : 'Zedd',

        cover  : 'http://p1.music.126.net/WvfXm9xCcSbfhYavGnBW9w==/5926367673766403.jpg',

        src    : 'http://m1.music.126.net/-ERHV5DNXxoIkQ1VXv8u6w==/1311717371984265.mp3'

    },



    {

        title : 'I Want You...',

        singer : 'Zedd',

        cover  : 'http://p1.music.126.net/jIDlEZSojmk1cIgiMmxRmQ==/2536573327934541.jpg',

        src    : 'http://m1.music.126.net/8fUMjyt8wf97Ox87-ZZa0g==/7826323766786355.mp3'

    },



    {

        title : 'Eyes Half...',

        singer : 'Crywolf',

        cover  : 'http://p1.music.126.net/sHq8On0tlMDA56ZLL8gbrw==/5998935441671741.jpg',

        src    : 'http://m1.music.126.net/VDHttTvO_kBiYEzl6HG39A==/5981343255627912.mp3'

    },



    {

        title : 'My Sunset ',

        singer : 'Feint',

        cover  : 'http://p1.music.126.net/UxMUeh1sLst3Vkma2oFsWQ==/614626999935437.jpg',

        src    : 'http://m1.music.126.net/7SSa5fN5FkbZHxC560N6Hw==/1295224697536354.mp3'

    },



    {

        title : 'Ringtone',

        singer : 'MetroGnome',

        cover  : 'http://p1.music.126.net/rRKTWZtkuFdm5pzij_1NfQ==/5947258394929291.jpg',

        src    : 'http://m1.music.126.net/1YWQu62sfwS_oVg4TiICUw==/5861496487920476.mp3'

    },

        {

        title : 'Blu',

        singer : 'Mitis',

        cover  : 'http://p1.music.126.net/0QhW9YGAreMO16iJ6l5F-w==/2246302255592303.jpg',

        src    : 'http://m1.music.126.net/aJqijgPEIwRvhdCeR9aQew==/3119314488012516.mp3'

    },

    {

        title : 'Innocent Dis...',

        singer : 'Mitis',

        cover  : 'http://p1.music.126.net/0QhW9YGAreMO16iJ6l5F-w==/2246302255592303.jpg',

        src    : 'http://m1.music.126.net/s8uyM6-NZZCMtvXo0Ugg8A==/2799356604344870.mp3'

    },


{

        title : 'Scream',

        singer : 'Usher',

        cover  : 'http://p1.music.126.net/3DEn3apyx3dDd6TGSh506w==/2540971372812653.jpg',

        src    : 'http://m1.music.126.net/DYAl8n3lLXoMDy_xcQJsKg==/1090715534766649.mp3'

    },


    {

        title : 'Firework',

        singer : 'Katy Perry',

        cover  : 'http://p1.music.126.net/cq8PZj_GC6Vi9LP8pGrUVw==/1692148395152781.jpg',

        src    : 'http://m1.music.126.net/3pB-tRZoga0l19Gc9LU8Ig==/2029698464885829.mp3'

    },


{

        title : 'Sunburst ',

        singer : 'MaKo',

        cover  : 'http://p1.music.126.net/FGA_RM2Sr14Uhy0z4wUC4w==/3225967116767698.jpg',

        src    : 'http://m1.music.126.net/hx1lV5_DMGAcsXfNuDx6aA==/2529976257286415.mp3'

    },

{

        title : 'Friends ',

        singer : 'ThimLife',

        cover  : 'http://p1.music.126.net/I1Wu3PY_SQ-E0A-6YkD0nQ==/3225967119013435.jpg',

        src    : 'http://m1.music.126.net/5i6Ko9PWkKYJGrbRhIXJDg==/6624557558863533.mp3'

    },


{

        title : 'Brighter',

        singer : 'The Two Friends',

        cover  : 'http://p1.music.126.net/IpIHhMrNZwWha_hiaNyY9A==/2537672839164775.jpg',

        src    : 'http://m1.music.126.net/n4VCr_aTLpB7SI3dwW9UzA==/3233663700423023.mp3'

    },



{

        title : 'Verge',

        singer : 'Owl City',

        cover  : 'http://p1.music.126.net/91VrqTL8imc03lUrSyeyJQ==/7703178465823309.jpg',

        src    : 'http://m1.music.126.net/2SvPeTljWmqhhKGFZmPl9A==/2891715582491780.mp3'

    },



{

        title : 'Beautiful Times ',

        singer : 'Owl City',

        cover  : 'http://p1.music.126.net/fx4v-Rop1maKjnXFI_3uFA==/6044015418094279.jpg',

        src    : 'http://m1.music.126.net/6hU0ZqMbimfPBAtbTxA4sw==/5964850580820718.mp3'

    },


{

        title : 'Umbrella Beach',

        singer : 'Owl City',

        cover  : 'http://p1.music.126.net/ULHpWQwg4KH7ICulgowPFA==/2534374303375900.jpg',

        src    : 'http://m1.music.126.net/Ma397661CMiI-hHT8jVdiw==/1265537883572542.mp3'

    },

    {

        title : 'Alone',

        singer : 'Armin van Buuren',

        cover  : 'http://p1.music.126.net/3sDtSglgsHmPDhtMARUUyg==/2536573325940856.jpg',

        src    : 'http://m1.music.126.net/X59oxYXdyPH4gkgtzRjFLw==/5992338371418224.mp3'

    },


    {

        title : 'Born (Original Mix) ',

        singer : 'Mitis',

        cover  : 'http://p1.music.126.net/0QhW9YGAreMO16iJ6l5F-w==/2246302255592303.jpg',

        src    : 'http://m1.music.126.net/vL4E8nTFHYcJJYnDXK-36Q==/3178688115913230.mp3'

    }

,

    {

        title : '寄生兽 Remix',

        singer : 'Dubstep',

        cover  : 'http://p1.music.126.net/mGyMOMEDh2CueZCyqQwCOw==/3244658815977801.jpg',

        src    : 'http://m1.music.126.net/W3QE-8-7cypgblLmfVME_w==/3223768095131431.mp3'

    }

,

    {

        title : 'Life',

        singer : '7obu',

        cover  : 'http://p1.music.126.net/qTzLUIvrGh88V7Weycn1yA==/6027522744179563.jpg',

        src    : 'http://m1.music.126.net/hwwAJKEl8RkZMPhAuRzdvg==/5942860348544233.mp3'

    }

    ,


    {

        title : 'Titanium',

        singer : 'David Guetta,Sia',

        cover  : 'http://p1.music.126.net/JXBip73Gnu5Wfx42OAbWKg==/1700944488175683.jpg',

        src    : 'http://m1.music.126.net/KnatP3kp_-qNnYRuRVE-aQ==/1985717999775330.mp3'

    }

];

new SMusic({

    musicList:musicList

});

</script>

<script>
//宇宙特效
"use strict";
var canvas = document.getElementById('canvas'),
  ctx = canvas.getContext('2d'),
  w = canvas.width = window.innerWidth,
  h = canvas.height = window.innerHeight,
  
  hue = 217,
  stars = [],
  count = 0,
  maxStars = 1300;//星星数量
  
var canvas2 = document.createElement('canvas'),
  ctx2 = canvas2.getContext('2d');
canvas2.width = 100;
canvas2.height = 100;
var half = canvas2.width / 2,
  gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
gradient2.addColorStop(0.025, '#CCC');
gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
gradient2.addColorStop(1, 'transparent');

ctx2.fillStyle = gradient2;
ctx2.beginPath();
ctx2.arc(half, half, half, 0, Math.PI * 2);
ctx2.fill();

// End cache

function random(min, max) {
  if (arguments.length < 2) {
    max = min;
    min = 0;
  }

  if (min > max) {
    var hold = max;
    max = min;
    min = hold;
  }

  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function maxOrbit(x, y) {
  var max = Math.max(x, y),
    diameter = Math.round(Math.sqrt(max * max + max * max));
  return diameter / 2;
  //星星移动范围，值越大范围越小，
}

var Star = function() {

  this.orbitRadius = random(maxOrbit(w, h));
  this.radius = random(60, this.orbitRadius) / 8; 
  //星星大小
  this.orbitX = w / 2;
  this.orbitY = h / 2;
  this.timePassed = random(0, maxStars);
  this.speed = random(this.orbitRadius) / 50000; 
  //星星移动速度
  this.alpha = random(2, 10) / 10;

  count++;
  stars[count] = this;
}

Star.prototype.draw = function() {
  var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
    y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
    twinkle = random(10);

  if (twinkle === 1 && this.alpha > 0) {
    this.alpha -= 0.05;
  } else if (twinkle === 2 && this.alpha < 1) {
    this.alpha += 0.05;
  }

  ctx.globalAlpha = this.alpha;
  ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
  this.timePassed += this.speed;
}

for (var i = 0; i < maxStars; i++) {
  new Star();
}

function animation() {
  ctx.globalCompositeOperation = 'source-over';
  ctx.globalAlpha = 0.5; //尾巴
  ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 2)';
  ctx.fillRect(0, 0, w, h)

  ctx.globalCompositeOperation = 'lighter';
  for (var i = 1, l = stars.length; i < l; i++) {
    stars[i].draw();
  };

  window.requestAnimationFrame(animation);
}

animation();

window.onresize = function(){
     "use strict";
var canvas = document.getElementById('canvas'),
  ctx = canvas.getContext('2d'),
  w = canvas.width = window.innerWidth,
  h = canvas.height = window.innerHeight,
  
  hue = 217,
  stars = [],
  count = 0,
  maxStars = 1300;//星星数量
  
var canvas2 = document.createElement('canvas'),
  ctx2 = canvas2.getContext('2d');
canvas2.width = 100;
canvas2.height = 100;
var half = canvas2.width / 2,
  gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
gradient2.addColorStop(0.025, '#CCC');
gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
gradient2.addColorStop(1, 'transparent');

ctx2.fillStyle = gradient2;
ctx2.beginPath();
ctx2.arc(half, half, half, 0, Math.PI * 2);
ctx2.fill();

// End cache

function random(min, max) {
  if (arguments.length < 2) {
    max = min;
    min = 0;
  }

  if (min > max) {
    var hold = max;
    max = min;
    min = hold;
  }

  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function maxOrbit(x, y) {
  var max = Math.max(x, y),
    diameter = Math.round(Math.sqrt(max * max + max * max));
  return diameter / 2;
  //星星移动范围，值越大范围越小，
}

var Star = function() {

  this.orbitRadius = random(maxOrbit(w, h));
  this.radius = random(60, this.orbitRadius) / 8; 
  //星星大小
  this.orbitX = w / 2;
  this.orbitY = h / 2;
  this.timePassed = random(0, maxStars);
  this.speed = random(this.orbitRadius) / 50000; 
  //星星移动速度
  this.alpha = random(2, 10) / 10;

  count++;
  stars[count] = this;
}

Star.prototype.draw = function() {
  var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
    y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
    twinkle = random(10);

  if (twinkle === 1 && this.alpha > 0) {
    this.alpha -= 0.05;
  } else if (twinkle === 2 && this.alpha < 1) {
    this.alpha += 0.05;
  }

  ctx.globalAlpha = this.alpha;
  ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
  this.timePassed += this.speed;
}

for (var i = 0; i < maxStars; i++) {
  new Star();
}

function animation() {
  ctx.globalCompositeOperation = 'source-over';
  ctx.globalAlpha = 0.5; //尾巴
  ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 2)';
  ctx.fillRect(0, 0, w, h)

  ctx.globalCompositeOperation = 'lighter';
  for (var i = 1, l = stars.length; i < l; i++) {
    stars[i].draw();
  };

  window.requestAnimationFrame(animation);
}

animation();
  };
</script>

</body>
</html>