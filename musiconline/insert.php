<?php 
 include 'connection.php';

 $insert = "
 INSERT INTO `products` (`id`, `name`, `price`, `product_detail`, `image`) VALUES
 (23, 'indie folk', '3', 'Indie folk is a music genre that arose in the 1990s among musicians from indie rock scenes influenced by folk music. Indie folk hybridizes the acoustic guitar melodies of traditional folk music with contemporary instrumentation.', 'num1.png'),
 (31, 'Bleachers', '23', 'Bleachers return with their self titled new album, released on 8th March 2024 via Dirty Hit. Available on Standard Double Clear Vinyl with 4 bonus tracks ', 'num4.png'),
 (32, 'the lagoons', '23', 'Beautiful jazzy, electro-pop fusion with a rock twist... calm and groovy, smooth vocals dance over glittery synths and a mellow saxophone', 'num3.jpg'),
 (33, 'marathon', '18', 'Marathon: the title track from Philadelphia-based Shark Tape’s 2014 LP, is three minutes and twenty seconds of amped-up indie-rock riffage guaranteed to get your day of to a good start. Boasting choruses full of doo’s and dah’s it’s a great sing-along tune with blues-edged, overdriven guitar and bass licks and rocking drums will have you dancing like an imbecile in no time at all.', 'num2.jpg');
 
 ";
 $result = mysqli_query($conn, $insert);
 if ($result) {
 	echo 'inserted';
 }
?>