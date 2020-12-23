<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME reservation</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>

     <div class="reservation-form-box">
<div class="radio-btn">
<input type="radio" class="btn" name="check" checked="checked"><span>DLTB Bus
</span>
<input type="radio" class="btn" name="check"><span>Supreme</span>
<input type="radio" class="btn" name="check"><span>JAM Corp.</span>
</div>
<div class="booking-form">
<label>From</label>
<input type="text" class="form-control" placeholder="City">
<label>To</label>
<input type="text" class="form-control" placeholder="City">

<div class="input-grp">
<label>Schedule Trip</label>
<input type="date" class="form-control select-date">
</div>

<div class="input-grp">
<label>Date of Trip</label>
<input type="date" class="form-control select-date">
</div>

<div class="input-grp">
	<label>Adults</label>
	<input type="number" class="form-control" value="1">
</div>

<div class="input-grp">
	<label>Children</label>
	<input type="number" class="form-control" value="0">
</div>

<div class="input-grp">
<label>Travel Time</label>
	<select class="custom-select">
	<option value="1"> 5:00am-7:00am</option>
	<option value="2"> 8:00am-10:00am</option>
	<option value="3"> 10:00am-12:00am</option>
	<option value="4"> 2:00pm-4:00pm</option>
	<option value="5"> 5:00pm-7:00pm</option>
	<option value="6"> 8:00pm Last trip</option>
</select>
</div> 

<div class="input-grp">
	<button id="myBtn" type="button" class="btn btn-primary travel">Show My Travel</button>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Reservation Details</h2>
    </div>
    <div class="modal-body">
      <p>Bus Comany : DLTB Bus</p>
      <p>From: Lemery</p>
      <p>To: Batangas</p>
      <p>Sceldule Trip: November 04, 2020 </p>
      <p>Date of Trip: November 04, 2020</p>
      <p>Adults: 3</p>
      <p>Children: 2</p><br>
      <p>Have a safe trip! Thank you!</p>
      
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>