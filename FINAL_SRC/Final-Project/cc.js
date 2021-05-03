var input = document.getElementById('cardNum');
var card = document.getElementById('card-type');

//Regex constants
const mc = /^(5[1-5])/gm;
const visa = /^4/gm;
const ae = /^(3[4,7])/gm;
const disc = /^6/gm;
const empty = /^$/gm;

//On user key up check regex and display card type.
input.onkeyup = function() {
    if(mc.test(input.value)){
    card.innerHTML = "Master Card";
    }else if(visa.test(input.value)){
      card.innerHTML = "Visa";
    }else if(ae.test(input.value)){
      card.innerHTML = "American Express";
    }else if(disc.test(input.value)){
      card.innerHTML = "Discover";
    }else if(empty.test(input.value)){
      card.innerHTML = "";
    }
}