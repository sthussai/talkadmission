<button onclick="openSidebarMenu()"
  class="w3-bar-item w3-button w3-left w3-hide-small w3-padding-large" title="Sidebar"><i
    class="fa fa-bars"></i></button>

<div class="w3-sidebar w3-padding w3-bar-block w3-text-black w3-card w3-animate-left"
  style="width:350px;display:block;left:0;" id="SidebarMenu">
  <a href="#" onclick="closeSidebarMenu()" class=" w3-right w3-medium w3-padding w3-hover-grey" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h3>Change Background Image</h3>
  <img onclick="changeBgImage1();closeSidebarMenu(); " src="https://www.w3schools.com/w3images/nature.jpg"
    style="max-width:100px;min-height:70px" class="w3-button w3-round"><br><br>
  <button id="highLightBtn" class="w3-bar-item w3-round w3-button">Highlight Divs</button>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</div>


<script>
  function openSidebarMenu() {
    document.getElementById("SidebarMenu").style.display = "block";
    $("#SidebarMenu").animate({left: '0px'});
  }

  function closeSidebarMenu() {
    console.log('working');
    $("#SidebarMenu").animate({left: '-350px'}); 
  }

  function changeBgImage1() {
    $("div.bgimg-1").css("background-image", "url(https://www.w3schools.com/w3images/nature.jpg)");
  }

  function changeBgImage2() {
    $("div.bgimg-1").css("background-image", "url(https://www.w3schools.com/w3images/forestbridge.jpg)");
  }

  function changeBgImage3() {
    $("div.bgimg-1").css("background-image", "url(https://www.w3schools.com/w3images/mountains.jpg)");
  }

  $("#highLightBtn").on("click", function() {
                    $("div").toggleClass("highlightDiv");
                  }); 


</script>