// const base_api = "https://zam-web-testing.herokuapp.com/public";
const base_api = "http://localhost/testing/public";
var items = 0   
cart_items();
function cart_items(){
	items = 0   
	for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);

          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            items = items+1
          }
        }
}
const cart_show = '<i class="fa fa-shopping-cart" aria-hidden="true"><small>'+items+'</small></i>'