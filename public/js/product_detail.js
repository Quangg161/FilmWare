

function numberWithCommas() {
    var price = document.getElementsByClassName("price").innerHTML;
    console.log(price)
    document.getElementsByClassName("price").innerHTML = price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


function getSize() {
    var radios = document.getElementsByName('exampleRadios');
    var size = 1;
    for (var i = 0, length = radios.length; i < length; i++) {
      if (radios[i].checked) {
        if(radios[i].value == "option1") {
            size = 1;
        } else if(radios[i].value == "option2") {
            size = 2;
        } else {
            size = 3
        }
        break;
      }
    }
    return size;
}

