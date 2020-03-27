document.getElementById('country').addEventListener("change", function(){
    document.getElementById('phone').value = (this.options[this.selectedIndex].getAttribute('data-code'));
   });

