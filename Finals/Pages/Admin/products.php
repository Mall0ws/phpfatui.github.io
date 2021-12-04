<?php
  require "admin_header.php";
?>
<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >ADMIN</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-bag"></i></span>
                <span>Products</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                <li>
                    <a href="admin.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="accounts.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-people"></i
                      ></span>
                      <span>Accounts</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-bag"></i
                      ></span>
                      <span>Products</span>
                    </a>
                  </li>
                  <li>
                    <a href="orders.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-cart2"></i
                      ></span>
                      <span>Orders</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Products</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Product Table
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- database -->
                      <?php

                          require_once "../../database/db_con.php";

                          $sql = "SELECT * FROM product ORDER BY product_id";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            foreach($result as $row) {

                            ?>
                              <tr>
                                <td> <?=$row["product_id"];?> </td>
                                <td> <?=$row["product_name"];?></td>
                                <td> <?=$row["quantity"];?></td>
                                <td> <?=$row["price"];?></td>
                              </tr>
                              <?php
                            }
                          }
                          else{
                            $conn->close();
                          }	  
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- add product -->
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Add Product
              </div>
                <div style = "margin: 20px;">
                  <form>
                    <div>
                      <label>Product Name</label>
                      <input type="text" name = "product">
                    </div>
                    <br>
                    <div>
                      <label>Quantity</label>
                      <input type="number" name = "qty">
                    </div>
                    <br>
                    <div>
                      <label>Price</label>
                      <input type="text" name = "price">
                    </div>
                    <br>
                    <div>
                      <input type="submit" name = "submit1">
                    </div>
                  </form>
                </div>
            </div>
          </div>

          <!-- start remove product -->
          <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Remove Product
              </div>
                <div style = "margin: 20px;">
                  <form>
                  <div>
                    <label>Product ID</label>
                    <input type="number" name = "prodID">
                  </div>
                  <br>
                    <div>
                      <input type="submit" name = "submit2">
                    </div>
                  </form>
                </div>
            </div>
          </div>
          <!-- end of remove product                   -->
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>

<?php
  if(isset($_GET['submit1'])){
    $product = $_GET['product'];
    $qty = $_GET['qty'];
    $price = $_GET['price'];

    include_once "../db_con.php";
    $sql = "INSERT INTO product(`product_name`,`quantity`,`price`)
        VALUES('$product','$qty','$price')";
                                        
    $result = mysqli_query($conn, $sql);
    if($result){
      header("location: products.php");
    }else{

    }
  }elseif(isset($_GET['submit2'])){
    $pID = $_GET['prodID'];

    include_once "../db_con.php";
    $sql = "DELETE FROM `product` where `product_id` = $pID";
                                        
    $result = mysqli_query($conn, $sql);
    if($result){
      // header("location: products.php");
    }else{

    }
  }
?>