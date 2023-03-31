<?php
$location = 'Cars';
include('layouts/navbar.php');
include('layouts/sidebar.php');
?>
<div class="fcardcontainer">
  <div class="cars_title">
    <div>
      <h1>Cars</h1>
    </div>
    <div>
      <form action="" method="POST">
        <div class="search_field">
          <input type="text" name="keyword" placeholder="Find">
          <div>
            <button class="find_btn" name="find"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="cards">
    <?php for ($i = 0; $i < 8; $i++) { ?>
      <!-- Card -->
      <div class="card">
        <img src="assets/cars/gtr.jpg" alt="" />
        <div class="card-content">
          <!-- Plat -->
          <div>
            <p>D123AA</p>
          </div>
          <!-- Plat End -->
          <!-- Brand + Year -->
          <div class="merk">
            <div>
              <h3>Nissan GT-R</h3>
            </div>
            <div>
              <p>1998</p>
            </div>
          </div>
          <!-- Brand + Year End -->
          <!-- Type + Capacity -->
          <div class="type">
            <div>
              <h4>Sedan</h4>
            </div>
            <div>
              <p>4 Seats</p>
            </div>
          </div>
          <!-- Type + Capacity End-->
          <!-- Transmission -->
          <div>
            <p>Manual</p>
          </div>
          <!-- Transmission End-->
          <!-- Price + Button -->
          <div class="price">
            <div>
              <h1>
                <div class="dollar">$</div>
                <div>500</div>
                <div class="tag">/day</div>
              </h1>
            </div>
            <div><button class="rent-btn">RENT</button></div>
          </div>
          <!-- Price + Button End-->
        </div>
      </div>
      <!-- Card End -->
    <?php } ?>
  </div>
</div>
<?php include('layouts/footer.html') ?>
</body>

</html>