<script src="assets/js/curtain.js" type="text/javascript"></script>
<script type="text/javascript">
function portugues() {
    document.getElementById("opt1").innerHTML = "Home";
    document.getElementById("opt2").innerHTML = "Novidades";
    document.getElementById("opt3").innerHTML = "Contato";
    document.getElementById("opt4").innerHTML = "Sobre";
}

function english() {
    document.getElementById("opt1").innerHTML = "Home";
    document.getElementById("opt2").innerHTML = "News";
    document.getElementById("opt3").innerHTML = "Contact";
    document.getElementById("opt4").innerHTML = "About";
}

</script>
<style>
body {
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 100%;
    width: 100%;
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
.idiom:hover {
  cursor: pointer;
}

</style>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a class="idiom" onclick="portugues()">Português</a>
    <a class="idiom" onclick="english()">English</a>
  </div>
</div>
