<?php
    echo "<style>
            *{
                margin: 0;
                padding: 0;
            }
            body {background: black;}
            canvas {display:block;}
        </style>
        <canvas id='canvas'></canvas>
        <script>
 var def = 'ムタ二コク1234567890シモラキリエスハヌトユABCDEF';
var as = 'ЯЙЪЁёЬ畄甼مع کैट्रिक्सκατάλογος행기목ㅏ러ㅏㅇ너리;머나ㅓ라ㅣ너러누차어ㅏㅓ재더나ㅓ아ㅓㄹ54321';
var as_s = 'Я Й Ъ Ё ё Ь 畄 甼 م ع   کैट्रिक्सκατάλογος행기목IVXLCDM0987654321';
var en = 'fkaslf;ddjlsaㅇㄹㄴ머라ㅣㅇ너ㅣㄹ;ㅣ넝ㄹ;ㅣㅁㄴ니ㅓㅇ러니;ㅓㄹ니;이faskd;jf;ㅁㄴㅇㄹ;ㄴ어랑리ㅑfdsjfkdsjkahkhzjkcjhdjshfhiwoiqㅓㄴ엄ㄹユ0987654321';
var en_s = 'ㄴ뢰어ㅏ모라너초노옹ㄴ마ㅣ오나ㅓㅗ러ㅏㅇ놜쟈ㅕ도너초ㅓㄴ모ㅓ오ㅓ차콰ㅗ조ㅗ나ㅓㅗ런올ㅊ넘춰몬오초ㅕㅈㅇㄹユ0987654321';
var ru = 'ОчнисьНео,МатрицаОвладеваетТобойムタ二コㅇ나러;ㅣㅁㅇㄴ렁ㄴ;ㅣ;렁ㄴㄹㄴㅁ;ㅓㄹㅇ너노호ㅠㅊ도ㅕㅛ벽옻ユ0987654321';
var ru_s = 'О ч н и с ь Н е о ,М а т р и ц а О в л а д е в а е т Т о б о й ムタ二コ1234567890クシモラムタ二コクシモラキリエスハヌトユキリエスハヌトユ0987654321';
var ar_s = '1234567890أ ب ج د ع ص م ن ك ة ى ء ذ د  ق ث ر و ';
var ch = '田由甲fdsafjdsfkdsljcasjsfjdiowjksdckasjfklsjkdfjcmaksjjx';
var ch_s = '가ㅏㅁ러랑널;ㅣ널나멀;ㅣㅏㄴ어랑너라ㅣㅓㅇ니러ㅏㅣㅇ너리;넝렁니러ㅓㅇㄴ러니어린얼님';

function TheMatrixRain(charset) {

    var c = document.getElementById('canvas');
    var ctx = c.getContext('2d');
    c.height = window.innerHeight;
    c.width = window.innerWidth;

    var font_size = 10;
    var columns = c.width/font_size;
    var drops = [];

    for (var x = 0; x < columns; x++) {
        drops[x] = 1;
    }

    characters = charset.split('');
    
    var rnd = drops.slice();

    setInterval(draw, 30);

    function draw() {
        
        if (Math.random() > 0.25) {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            var x_rect = Math.floor(Math.random()*c.width);
            var y_rect = Math.floor(Math.random()*c.height);
            ctx.fillRect(x_rect, y_rect, (c.width/4), ((c.height/c.height)*(font_size*10)));
        }
        
        ctx.fillStyle = 'rgba(0, 0, 0, 0.03)';
        ctx.fillRect(0, 0, c.width, c.height);
        ctx.fillStyle = '#0F0';

    
    
        for (var i = 0; i < drops.length; i++) {
        
         if (drops[i]*font_size < c.height) {
            
            var text = characters[Math.floor(Math.random()*characters.length)];
            var col_size = font_size;

            if (!(i%2)) {
                if(drops[i] == 1) {
                   rnd[i] = Math.random() * (1.5 - 0.7) + 0.7;     
                }
                col_size /= rnd[i];
            }

            if (!(i%3)) {
                if(drops[i] == 0) {
                   rnd[i] = Math.random() * (1.5 - 0.7) + 0.7;     
                }
               col_size /= rnd[i]; 
            }

            
            ctx.font = col_size + 'px arial';

            ctx.fillText(text, i*font_size, drops[i]*font_size);
            
            }

           if (drops[i]*font_size > c.height && Math.random() > 0.965) {
                ctx.fillStyle = 'rgba(0, 0, 0, 1)';
                ctx.fillRect(i*font_size, 0, font_size, c.height);
                ctx.fillStyle = 'rgba(0, 188, 0, 0.5)';
                drops[i] = 0;
                
            }
            
            drops[i]++ 
          
       }
        
    }
}
TheMatrixRain (en_s);

</script>
";
?>
