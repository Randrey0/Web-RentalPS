 <?php
 if ($console->stok<1){
    echo"<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;nbsp 0</i>";
 } else {
    echo "<a class='btn-outline-primary fas fw fa-shopping-cart' href='" . base_url('booking/tambahBooking/' .$console->id) . "'> Booking</a>";
 }
 ?>

 <a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailConsole/' . $console->id); ?>"> Detail</a></p>
 
