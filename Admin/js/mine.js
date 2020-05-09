


function cBalance(){
        var feepayable = document.getElementById('feepayable').value;
        var amountPaid = document.getElementById('amountPaid').value;
        var currentArears = " ";
        if (isNaN(amountPaid.value)) return false;
        var amount = parseInt(feepayable) - parseInt(amountPaid);
        currentArears.value(amount);
    // currentArears.value = "";
    // if(NaN(amountPaid.value())) return false;
    // var amount = feepayable - amountPaid.value;
    // currentArears.value(amount);
}



         // $('#amountPaid').on('keypress',function(){
          //      if($('#amountPaid').val()-0) > feepayable) return false;
          //    });



          <script>

          // window.onload = function cBalance() {
          //     var feepayable = document.getElementById('feepayable').value;
          //     var amountPaid = document.getElementById('amountPaid').value;
          //     var currentArears = document.getElementById('currentArears').value
  
  
          //     function cBalance(){
          //         currentArears.value = "";
          //         if(NaN(amountPaid.value())) return false;
          //         var amount = feepayable - amountPaid.value;
          //         currentArears.value(amount);
  }
          }
      </script>
  
  <script>
    function cBalance(){
          var feepayable = document.getElementById('feepayable').value;
          var amountPaid = document.getElementById('amountPaid').value;
          var currentArears = " ";
          if (isNaN(amountPaid.value)) return false;
          var amount = parseInt(feepayable) - parseInt(amountPaid);
          currentArears.value(amount);
      
      
      
          // currentArears.value = "";
      // if(NaN(amountPaid.value())) return false;
      // var amount = feepayable - amountPaid.value;
      // currentArears.value(amount);
  }
  </script>