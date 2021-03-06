<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Frontal 2011- JavaScript Conference</title>
  
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Cabin+Sketch:bold' />
  <link rel="stylesheet" href="fullfrontal.css" />
  
</head> 
<body> 
  
    <header>
      <h1 class="full-frontal">Full Frontal</h1> 
      <time datetime="2011-11-11T09:00:00Z">11.11.11</time>
      <h2>JavaScript <br /> <span>Conference</span></h2>
      <h3>Duke Of Yorks, Brighton, <br /> 11th November 2011</h3>
    </header>
    
    <form action="" method="">
      <label for="email">Enter your email address below to get updated on Full Frontal 2011</label>
      <p>
        <input type="email" id="email" name="email" placeholder="Enter your email for updates..." />
        <button type="submit"><span>Go</span></button>
      </p>
    </form>
    
    <div class="want-to">
      <section class="speak">
        <h1>Want to<br />speak?</h1>
        <p>
          Want to speak at Full Frontal 2011? We'd love to give you the platform to speak to hundreds of
          developers and designers, so what are you waiting for, <a href="#">get in touch!</a>
        </p>
      </section>
    
      <section class="sponsor">
        <h1>Want to<br />sponsor?</h1>
        <p>
          Find out how your company can sponsor Full Frontal by reviewing our
          <a href="#">sponsorship packages</a> and <a href="#">get in touch</a> with us to discuss
          how we can work together.
        </p>
      </section>
    </div>
    
    <div class="tweets">
      <div><blockquote cite="https://twitter.com/#!/rem/status/72211643467169792">
        <p>Had a great day at #fullfrontalconf. Lots of inspiring stuff. Some awesome 3D demos by @paulrouget and @seb_ly</p>
        <cite><img width="30" height="30" src="avatar.png" alt=""><a href="https://twiiter.com/Andyeo">Andyeo</a></cite>
      </blockquote></div>
      
     <div> <blockquote cite="https://twitter.com/#!/rem/status/72211643467169792">
        <p>THANKS @rem and @Julieanne for a brilliant @fullfrontalconf. I spent the day on the sofa in the gallery. Sofa + JavaScript. Awesome day.</p>
        <cite><img width="30" height="30" src="avatar.png" alt=""><a href="https://twiiter.com/Andyeo">Dharmafly</a></cite>
      </blockquote></div>
      
    <div>  <blockquote cite="https://twitter.com/#!/rem/status/72211643467169792">
        <p>Had a great day at #fullfrontalconf.</p>
        <cite><img width="30" height="30" src="avatar.png" alt=""><a href="https://twiiter.com/Andyeo">Binarytales</a></cite>
      </blockquote></div>
      
     <div> <blockquote cite="https://twitter.com/#!/rem/status/72211643467169792">
        <p>Leaving Brighton after a brilliant #fullfrontalconf. Thank you @rem and @Julieanne for organizing such a great event with passionate people.</p>
        <cite><img width="30" height="30" src="avatar.png" alt=""><a href="https://twiiter.com/Andyeo">Andyeo</a></cite>
      </blockquote></div>
      
     <div> <blockquote cite="https://twitter.com/#!/rem/status/72211643467169792">
        <p>Had a great day at #fullfrontalconf. Lots of inspiring stuff. Some awesome 3D demos by @paulrouget and @seb_ly</p>
        <cite><img width="30" height="30" src="avatar.png" alt=""><a href="https://twiiter.com/Andyeo">Romainhuet</a></cite>
      </blockquote></div>
      
      <div class="clear"></div>
    </div>
    
    <p class="follow">Follow <a href="https://twitter.com/fullfrontalconf">@FullFrontalConf</a> <br/> for tickets &amp; news</p>
    
    <footer>
      <h1><a href="http://leftlogic.com">Left Logic</a></h1>
      <p>Full Frontal is a one day conference organised by Left Logic - <a href="#">Terms &amp; Conditions</a></p>
      <p>Previous Years &ndash; <a href="http://2009.full-frontal.org">2009</a> &amp; <a href="http://2010.full-frontal.org">2010</a></p>
    </footer>
    
<script>
  // // Adapted from http://www.quirksmode.org/dom/getstyles.html
  // var getStyle = function (el, styleProp) {
  //    var x = el;
  //    if (x.currentStyle)
  //      var y = x.currentStyle[styleProp];
  //    else if (window.getComputedStyle)
  //      var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
  //      console.log(y);
  //    return y;
  //   }
  // 
  // // Adapted for use withour jQuery from https://github.com/davatron5000/FitText.js
  // var fitText = function (element, kompressor) {
  //    var origFontSize = parseFloat(getStyle(element, 'font-size'));
  //    console.log(origFontSize);
  //    var compressor = kompressor || 1;
  // 
  //       // Resizer() resizes items based on the object width divided by the compressor * 10
  //    var resizer = function () {
  //      element.style.fontSize = Math.min(element.offsetWidth / (compressor*10), origFontSize) + 'px';
  //      console.log(element.offsetWidth);
  //      console.log(Math.min(element.offsetWidth / (compressor*10), origFontSize) + 'px');
  //    };
  //    resizer();
  //      window.onresize = function (){
  //        resizer()
  //      };
  // };
  // fitText(document.getElementsByTagName('time')[0], 0.8);

  // // Google Fonts
  // WebFontConfig = {
  //   google: { families: [ 'Cabin Sketch:bold' ] }
  // };
  // (function() {
  //   var wf = document.createElement('script');
  //   wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  //       '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  //   wf.type = 'text/javascript';
  //   wf.async = 'true';
  //   var s = document.getElementsByTagName('script')[0];
  //   s.parentNode.insertBefore(wf, s);
  // })();

  // Google Analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1656750-25']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
</script>
</body> 
</html>