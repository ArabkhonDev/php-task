<!-- Control buttons -->
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn" onclick="filterSelection('colors')"> Colors</button>
</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars">Ford</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div>