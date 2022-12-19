<!DOCTYPE html>
<html lang="en">
<head>
<title>Kursus mengemudi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#schedules" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Schedules</a>
    <a href="#services" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Services</a>
    <a href="#trainers" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Trainers</a>
	<a href="#vehicles" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Vehicles</a>
	<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contacts</a>
  </div>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="w3-display-container w3-center">
    <img src="{{ asset('banner.jpg') }}" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>LEARN TO DRIVE WITH CONFIDENCE</h3> 
    </div>
  </div>
 
  <div class="w3-white" id="schedules">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Our Schedules</h2>
      <div class="w3-row-padding w3-padding-5" style="margin:0 -16px">
        <p>Sen:	08.00–21.00</p>
		<p>Sel:	08.00–21.00</p>
		<p>Rab:	08.00–21.00</p>
		<p>Kam:	08.00–21.00</p>
		<p>Jum:	08.00–21.00</p>
		<p>Sab:	08.00–17.00</p>
		<p>Min:	08.00–17.00</p>
      </div>
    </div>
  </div> 
  
  <div class="w3-black" id="services">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Our Services</h2>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Paket 1</b></p>
            <p>6x Pertemuan, tiap pertemuan 1jam(60menit)</p>
            <p>Rp. 610.000</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Paket 2</b></p>
            <p>8x Pertemuan, tiap pertemuan 1jam(60menit)</p>
            <p>Rp. 780.000</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Paket 3</b></p>
            <p>10x Pertemuan, tiap pertemuan 1jam(60menit)</p>
            <p>Rp. 920.000</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="trainers">
    <h2 class="w3-wide">OUR TRAINERS</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Vivian</p>
        <img src="{{ asset('team-1.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Budi</p>
        <img src="{{ asset('team-2.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Anggono</p>
        <img src="{{ asset('team-3.jpg') }}" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <div class="w3-black" id="vehicles">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Our Vechicles</h2>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="{{ asset('ayla.jpg') }}" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Ayla</b></p>
            <p class="w3-opacity">4 Doors, 7 Seats</p>
            <p>Transmission: Manual</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="{{ asset('wuling.jpg') }}" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Wuling</b></p>
            <p class="w3-opacity">4 Doors, 5 Seats</p>
            <p>Transmission: Automatic</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="{{ asset('avanza.jpg') }}" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Avanza</b></p>
            <p class="w3-opacity">4 Doors, 7 Seats</p>
            <p>Transmission: Manual</p>
            <button class="w3-button w3-black w3-margin-bottom">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Jakarta Barat<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +62812317323183<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: drivers@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="#" target="#">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>
