<?php 

function order_button () {
   echo '<a href="Kontakt" class="order-button"><i class="fa-solid fa-circle-chevron-right"></i>OBJEDNAŤ SA</a>';
}


function contact_bg ($name) {
   if ($name == 'Kontakt') {
      return 'contact';
   }
}






