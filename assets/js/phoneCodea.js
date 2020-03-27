document.getElementById('countrya').addEventListener("change", function(){
    document.getElementById('phonea').value = (this.options[this.selectedIndex].getAttribute('data-code'));
    });