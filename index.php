<article id="parallax">
 
  <h1 >Parallax with CSS </h1>
  <p>By Christian Landgren, Iteam</p>
  <p><code>.above1{transform: translateZ(100px)}
.above2{transform: translateZ(200px)}
.under1{transform: translateZ(-100px)}
.under2{transform: translateZ(-200px)} 
    
window.onscroll = function(){
    document.body.style.webkitPerspectiveOrigin =
    window.scrollX + "px " + 
    window.scrollY + "px";
}</code></p>
  
  <img src="http://www.iutopi.com/img/capa1b.png" class="under1">
  
  
  <h3>Parallax scroll with CSS semantics</h3>
  <p class="intro">Achieve a realistic 3D feeling on your web page with just one line of Javascript. Instead of manually moving elements with javascript we use CSS3 perspective origin to move all layers at the same time. This requires approach only requires one* row of javascript.</p>
  <img src="http://www.iutopi.com/img/capa1b.png" class="under2 right">
  <p>
    Supports both vertical and horizontal scrolling. Not working yet on iOS but traditional methods isn't working either, Android unkown. Gracefully downgrades for non supported devices.</p>
    <img src="http://www.iutopi.com/img/capa1b.png" class="over3 ">
  
  <h2>Getting started</h2>
  <p>
    Add this row of Javascript to your site code
    <code>&lt;script&gt;
  window.onscroll = function(){
    document.body.style.webkitPerspectiveOrigin =
    window.scrollX + "px " + 
    window.scrollY + "px";
  }
&lt;/script&gt;</code>
    
     Add these to your CSS
    <code>&lt;style&gt;
  body{
    -webkit-perspective: 500;
    -webkit-perspective-origin: 0 0;
  }
  .over1 {
    position:absolute;
    -webkit-transform: translateZ(100px);  
  }

  .over2 {
    position:absolute;
    -webkit-transform: translateZ(200px);  
  }

  .over3 {
    position:absolute;
    -webkit-transform: translateZ(300px);  
  }

  .over4 {
    position:absolute;
    -webkit-transform: translateZ(400px);  
  }

  .under1 {
    position:absolute;
    -webkit-transform: translateZ(-100px);  
  }

  .under2 {
    position:absolute;
    -webkit-transform: translateZ(-300px);  
  }

  .under3 {
    position:absolute;
    -webkit-transform: translateZ(-400px);  
  }

  .under4 {
    position:absolute;
    -webkit-transform: translateZ(-600px);  
  }
&lt;/style&gt;</code>
    
    <h2>Be creative:</h2>
    <code>&lt;img src="..." class="over3 "&gt;
&lt;img src="..." class="under3"&gt;
&lt;img src="..." class="under1"&gt;
    </code>
    
    <h2>Add real 3D objects:</h2>
    <code>&lt;img src="..." style="-webkit-transform:rotateX(25deg); "&gt;
    </code>
  
  <img src="http://maps.googleapis.com/maps/api/staticmap?markers=tegnérgatan%2028,stockholm&zoom=15&size=600x600&sensor=false" style="-webkit-transform:rotateX(60deg); border-radius: 600px; margin-bottom: -200px; box-shadow: 20px 10px rgba(0,0,0,0.5); width: 300px; height: 300px;"/>
  
  </p>
  
  
  <p>By combining animation and other 3D CSS transform you can easily get a 3D interface without having any more javascript code at all. The perspective depth that is added with this trick really enhances the 3D experience for the user.</p>

  
<p>Follow me on <a href="http://twitter.com/landgren">Twitter</a> and <a href="http://github.com/irony">Github</a></p>
  <img src="http://www.iutopi.com/img/capa5b.png" class="under1 shark" >

  <img class="background under4" src="http://www.iutopi.com/img/bloque1.jpg">
</article>