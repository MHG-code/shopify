<html>
<head>
    <title>Autocomplete Search Box using Typeahead in Codeigniter</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


 

 <style>
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
 }
 body{

  padding: 0 20px;
 }
.wrapper{
  max-width: 450px;
  margin: 150px auto;
}
.wrapper .search-input{
  background: #fff; 
  width: 100%;
  border-radius: 5px;
  box-shadow:0px 1px 5px 3px rgba(0,0,0,0.12) ;
}
.search-input input{
  height: 55px;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 5px;
  padding: 0 60px 0 20px;
  font-size: 18px;
  box-shadow: 0px 1px 5px 
}
.search-input .autocom-box{
  /*padding: 10px 8px;*/
  max-height: 280px;
  overflow-y: auto;
  opacity: 0;
  pointer-events: none;
}
.autocom-box li{
  list-style: none;
  padding: 8px;
  width: 100%;
  cursor: default;
  border-radius: 3px;
  display: none;
}
.autocom-box li:hover{
background: #efefef ;
}
.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.search-input.active .autocom-box li{
  display: block;
}


 </style>


</head>

<body>
 
  <div class="wrapper">
    <div class="search-input">
      <input type="text" name="search_box" id="search_box" placeholder="Searching..." />  
      <div class="autocom-box">
      
      <!-- <div class="icon"><i class="fas fa-search"></i></div> -->

      </div>    
    </div>
  </div>
 <div class="icon"><i class="fas fa-search"></i></div>

</body>
<script src="<?= base_url('java/test.js') ?>  "></script>

</html>
<script type="text/javascript">
  $(document).ready(function() {

    const inputBox = document.querySelector("input");
    const searchWrapper = document.querySelector(".search-input");
    const suggBox = searchWrapper.querySelector(".autocom-box");
   
  $('input').keyup(function(event){
    var input = this.value
    // if (input.length == 0 || input==' ') {
    //   $('.fas').html("");
    // }
     $.ajax({
              url: '<?= base_url("abc")  ?>',
              type: 'POST',
              dataType: 'json',
              data: {str:input},
              success: function(data) {
                console.log("data is: ",data);
                 let emptyArray = []

                 if (data.length != 0 && data != 'not match') {

                    for (var i = data.length - 1; i >= 0; i--)
                    {
                    emptyArray.push('<li>'+data[i]['title']+'</li>');
                    console.log("empty array is: ", emptyArray)
                    }
                    showSugestions(emptyArray);
                 }
                 
                 if (data === 'not match'){
                    emptyArray.push('<li>'+inputBox.value+'</li>');
                    showSugestions(emptyArray);
                 }

                 if (data.length === 0){
                    searchWrapper.classList.remove('active');
                 }
                    let allLsit = suggBox.querySelectorAll("li");

                    for (var i = allLsit.length - 1; i >= 0; i--) {
                      allLsit[i].setAttribute("onclick", "select(this)");
                    }  
              }   
        });
  });

  function showSugestions(list)
  {
    let listData;
    listData = list.join('');
    suggBox.innerHTML = listData;
                    searchWrapper.classList.add('active');

  }


});
</script>