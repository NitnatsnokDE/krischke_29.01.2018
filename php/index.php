      <!DOCTYPE html>
      <html>
       <head>
        <title>pk1.index</title>
        <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <!-- Bootstrap CSS; JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        
        <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
       
       </head>
       
       <body>
        
     <!--   <div class="parallax"> 
          <img class="picture" src="../images/imagemaptestgroß_01.jpg">
          <picture>
            <source srcset="../images/leinwand_01.jpg" media="(max-width: 400px)">
            <source srcset="../images/imagemaptestgroß_01.jpg">
            <img src="../images/imagemaptestgroß_01.jpg">
          </picture>
        </div> -->

      <img class="picture" id="change" src="../images/imagemaptestmittel_01.jpg" width="533" height="300" usemap="#maptest">
      <map name="maptest">
        <area alt="" title="" href="#" shape="poly" coords="30,60,31,190,160,190,162,60" href="linkfun" title="titelfun" alt="namefun" />
        <area alt="" title="" href="#" shape="poly" coords="374,61,373,188,503,190,503,62" />
          [...]
       </map> 
    
<!--
      <div class="picture"></div>
      
      <div style="height:1000px;background-color:red;font-size:36px">
      Scroll Up and Down this page to see the parallax scrolling effect.
      This div is just here to enable scrolling.
      Tip: Try to remove the background-attachment property to remove the scrolling effect.
      </div>
      <div class="container">
        <div class="position">
          <picture>
            <source srcset="../images/leinwand_01.jpg" media="(max-width: 800px)">
            <source srcset="../images/mittelbild.jpg">
            <img src="../images/imagemaptestgroß_01.jpg">
          </picture>
        </div>
      </div>
      -->

        <!-- js library -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!-- different image for landing page & scaling -->
          
        <!--
        <script type="text/javascript">
          
          $(window).bind("load resize", function() {
          var w = window.innerWidth;
          if(w <= 300){
            $(".picture").html("<img src='../images/300x300.jpg'/>")
          }
          else if(w>300 && w<=600){
            $(".picture").html("<img src='../images/600x600.jpg'/>")
          }
          else{
            $(".picture").html("<img class='picture' src='../images/imagemaptestgroß_01.jpg' width='533' height='300' usemap='#maptest'/>, <map name='maptest'> <area alt='' title='' href='#' shape='poly' coords='30,60,31,190,160,190,162,60' href='linkfun' title='titelfun' alt='namefun' /> <area alt='' title='' href='#' shape='poly' coords='374,61,373,188,503,190,503,62'/> [...]; </map> />")
          }
      });
        

        </script>
        -->

       <!-- image map scale -->
        <script src="../js/jquery.rwdImageMaps.min.js"></script>
        
        <script>
          $(document).ready(function(e) {
            $('img[usemap]').rwdImageMaps();
        
            $('area').on('click', function() {
               alert($(this).attr('alt') + ' clicked');
        });
      });
        </script>

        <!-- noscrpt message -->
        <noscript>Your browser does not support JavaScript!</noscript>
       </body>
      </html>

      <!--  

      <script type="text/javascript">
        $(window).on('resize',function() {
          var w = window.innerWidth;
          if(w <= 300){
            $(".picture").html("<img src='../images/300x300.jpg'/>")
          }
          else if(w>300 && w<=600){
            $(".picture").html("<img src='../images/600x600.jpg'/>")
          }
          else{
            $(".picture").html("<img class='picture' src='../images/imagemaptestgroß_01.jpg' width='533' height='300' usemap='#maptest'/>, <map name='maptest'> <area alt='' title='' href='#' shape='poly' coords='30,60,31,190,160,190,162,60' href='linkfun' title='titelfun' alt='namefun' /> <area alt='' title='' href='#' shape='poly' coords='374,61,373,188,503,190,503,62'/> [...]; </map> />")
          }
      });
          $(document).ready(function() {
          $(window).trigger('resize');
      }); 


       <script type="text/javascript">
          $(document).ready(function(){
          var w = window.innerWidth;
          if(w <= 300){
            $(".picture").html("<img src='../images/300x300.jpg'/>")
          }
          else if(w>300 && w<=600){
            $(".picture").html("<img src='../images/600x600.jpg'/>")
          }
          else{
            $(".picture").html("<img class='picture' src='../images/imagemaptestgroß_01.jpg' width='533' height='300' usemap='#maptest'/>, <map name='maptest'> <area alt='' title='' href='#' shape='poly' coords='30,60,31,190,160,190,162,60' href='linkfun' title='titelfun' alt='namefun' /> <area alt='' title='' href='#' shape='poly' coords='374,61,373,188,503,190,503,62'/> [...]; </map> />")
          }
      });

      -->


      <!-- function after resize ready 

        var resizeId;
      $(window).resize(function() {
          clearTimeout(resizeId);
          resizeId = setTimeout(doneResizing, 500);
      });


      function doneResizing(){
          //whatever we want to do
      }

      -->