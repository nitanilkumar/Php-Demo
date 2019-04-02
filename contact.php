<?php include('include/header.php'); ?>
<?php include('include/page-header.php'); ?>

<style>
      #map {
        width: 100%;
        height: 500px;
      }
    </style>
<?php
    $q = "select * from tblprofile order by id desc";
    $row = $con->query($q)->fetch_object();
?>
<title>iHOTEL: Contact Us</title>

<section>
	<div class="container">
        <div class="row">
            <div id="map"></div>
            <br />
        </div>        
        <input type="hidden" id="latitude" value="<?php echo $row->latitude;?>" />
        <input type="hidden" id="longitude" value="<?php echo $row->longitude;?>" />
	</div>
</section>

<?php include('include/footer.php'); ?>
<script src="assets/js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var latitude = $('#latitude').val();
    var longitude = $('#longitude').val();
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(latitude, longitude),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    $('.list ol').addClass('list-group');
    $('.list ol li').addClass('list-group-item');
</script>
</body>
</html>

