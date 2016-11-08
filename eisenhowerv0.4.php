<!doctype html>
<html lang="en">
<head>
	<!-- Include fonts, icons and master css -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-red.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Eisenhower Matrix</title>
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
<!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/jquery-ui.css">

<style>
.mdl-card {
  /*width: 320px !important;*/
  height: 120px !important;
}
.mdl-textfield__input {
    padding-left: 31px;
  }
</style>  

   <style>
   /*List Styling*/
  #sortable1, #sortable2, #sortable3, #sortable4 {
    border: 1px solid #eee;
    width: 240px;
    min-height: 200px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
    background-color: #f2f2f2;
  }
  /*List Item Styling*/
  #sortable1 li, #sortable2 li, #sortable3 li, #sortable4 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    /*font-size: 1.2em;*/
    width: 240px;
  }
  /* My attempts to float the lists */
/*   #sortable1, #sortable2{
    float:left;
    margin-right:200px;
   }
  #sortable1, #sortable2{
    padding-right:200px;
   }*/
h1{
  display: none;
}
  </style>

<!-- Script to make list draggable -->
   <script>
  $( function() {
    $( "#sortable1, #sortable2,#sortable3, #sortable4" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>
</head>
<body>
<h1>First List</h1>
<ul id="sortable1" class="connectedSortable">
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">
    <form action="#">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="stored mdl-textfield__input" name="item1" type="text" id="item1" value="" />
      <label class="mdl-textfield__label" for="Item1">Text...Item1</label>
    </div>
    </form>
  </li>
</ul>
 
<h1>Second List</h1>
<ul id="sortable2" class="connectedSortable">
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item A</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item B</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item C</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item D</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item E</li>
</ul>

<h1>Third List</h1>
<ul id="sortable3" class="connectedSortable">
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 1</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 2</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 3</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 4</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 5</li>
</ul>
 
<h1>Fourth List</h1>
<ul id="sortable4" class="connectedSortable">
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item A</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item B</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item C</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item D</li>
  <li class="mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item E</li>
</ul>

<!-- Script to save field entries to localstorage - Must be after the form -->
<script type="text/javascript">
  $(document).ready(function () {
      function init() {
          if (localStorage["item1"]) {
              $('#item1').val(localStorage["item1"]);
          }
          if (localStorage["email"]) {
              $('#email').val(localStorage["email"]);
          }
          if (localStorage["message"]) {
              $('#message').val(localStorage["message"]);
          }
      }
      init();
  });

  $('.stored').change(function () {
    localStorage[$(this).attr('name')] = $(this).val();
});

  $('#localStorageTest').submit(function() {
      //localStorage.clear();
  });
</script>
<!-- <table>
<tr>
<td>
<ul id="listView1" class="connectedSortable">
  <li class="ui-state-default mdl-chip mdl-chip__text mdl-chip mdl-chip__text">Chip Item 1</li>
  <li class="ui-state-default mdl-chip mdl-chip__text">Item 2</li>
  <li class="ui-state-default mdl-chip mdl-chip__text">Item 3</li>
  <li class="ui-state-default mdl-chip mdl-chip__text">Item 4</li>
  <li class="ui-state-default mdl-chip mdl-chip__text">Item 5</li>
  <input type="button" onclick="addListItem(1)" value="dynamicItem(LI)"/>
</ul>
</td>
<td> 
<ul id="listView2" class="connectedSortable">
  <li class="ui-state-highlight mdl-chip mdl-chip__text mdl-chip mdl-chip__text">Item 1</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 2</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 3</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 4</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 5</li>
</ul>
</td>
<tr>
<td>
<ul id="listView2" class="connectedSortable">
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 1</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 2</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 3</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 4</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 5</li>
</ul>
</td>
<td>
<ul id="listView2" class="connectedSortable">
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 1</li>
  <li class="ui-state-highlight mdl-chip mdl-chip__text">Item 2</li>
  <li class="ui-state-highlight mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">Item 3</li>
  <li class="ui-state-highlight mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">
  <!-- Textfield with Floating Label -->
  <!--
	<form action="#">
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    <input class="mdl-textfield__input" type="text" id="item4">
	    <label class="mdl-textfield__label" for="sample3">Text...Item4</label>
	  </div>
	</li>
  <li class="ui-state-highlight mdl-card mdl-shadow--2dp mdl-card__title mdl-card--expand mdl-card__title-text">
  <!-- Textfield with Floating Label -->
  <!--
	<form action="#">
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	    <input class="mdl-textfield__input" type="text" id="item5">
	    <label class="mdl-textfield__label" for="sample3">Text...Item5</label>
      </form>
	  </div>
	</li>
</ul>
</td> 
</table> -->

  <div>
    Name:
    <span id="display">Jsbin1</span>
    <input type="text" id="edit" style="display:none" />
  </div>
  <div>
    Name:
    <span id="display2">Jsbin2</span>
    <input type="text" id="edit" style="display:none" />
  </div>
  
<script id="jsbin-javascript">
$("#display").click(function(){
  $(this).hide();
  $(this).siblings("#edit").show().val($(this).text()).focus();
});

$("#edit").focusout(function(){
$(this).hide();  $(this).siblings("#display").show().text($(this).val());
});
</script>

</body>
</html>