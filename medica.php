<?php
require('Dbconnects.php');

$member_HN=$_GET["HN"];
$sql="SELECT * FROM patient WHERE member_HN =$member_HN";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardiac center</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/styles_web.css" />
    <link rel="stylesheet" href="/css/styles_med.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="insertForm.php"
          ><img
            src="/img/heart.png"
            width="60"
            height="50"
            class="d-inline-block align-text-center"
          />Cardiac Center</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto my-2 my-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="insertForm.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="update.php">Update</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link active dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Patient List
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li>
                  <a class="dropdown-item" href="patients-lits.php">Patient List</a>
                </li>
                <li><a class="dropdown-item" href="order.html">Order</a></li>
                <li>
                  <a class="dropdown-item" href="medication.html"
                    >Medication History</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarScrollingDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profile
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarScrollingDropdown"
              >
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <div class="dropdown-item ">
                    <div class="homecontent">
                      <!-- logged in user information -->
                      <?php if (isset($_SESSION['username'])) : ?>
                      <a href="medica.php?logout='1'">Logout</a>
                      <?php endif ?>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="center-align">Medication History</h1>
    <p class="card-Name">ข้อมูลผู้ป่วย</p>
    <div class="row">
      <div class="col-sm-8">
        <div class="card Layout-information">
          <div class="card-body">
            <form class="row gap-3">
              <div class="col-auto">
                <label for="label_HN">รหัสผู้ป่วย :</label>
                <input readonly 
                  placeholder="รหัส"
                  id="lebel_HN"
                  type="text"
                  v-model="HN"
                  name="member_HN" 
                  value="<?php echo $row['member_HN'] ;?>"
                />
              </div>
              <div class="row gap-3">
                <div class="col-auto">
                  <label for="label_patientname">ชื่อผู้ป่วย :</label>
                  <input readonly 
                    placeholder="ชื่อ-สกุล"
                    id="lebel_patientname"
                    type="text"
                    v-model="patientname"
                    name="member_fname" 
                    value="<?php echo $row["member_fname"] ;?>"
                  />
                </div>
                <div class="col-sm-6">
                  <label for="label_patientname">นามสกุลผู้ป่วย :</label>
                  <input readonly 
                    placeholder="ชื่อ-สกุล"
                    id="lebel_patientname"
                    type="text"
                    v-model="patientname"
                    name="member_lname" 
                    value="<?php echo $row["member_lname"] ;?>"
                  />
                </div>
              </div>
              <div class="row gap-3">
                <div class="col-auto">
                  <label for="label_patientname">เพศ :</label>
                  <input readonly 
                    placeholder="เพศ"
                    id="lebel_gender"
                    type="text"
                    v-model="gender"
                    name="member_genger" 
                    value="<?php echo $row["member_gender"] ;?>" 
                  />
                </div>
                <div class="col-auto">
                  <label for="label_date">วันเกิด :</label>
                  <input readonly 
                    placeholder="วัน/เดือน/ปี"
                    id="lebel_date"
                    type="date"
                    v-model="date"
                    name="member_birth" 
                    value="<?php echo $row["member_birth"] ;?>" 
                  />
                </div>
                <div class="col-auto">
                  <label for="label_age">อายุ :</label>
                  <input readonly 
                    placeholder="อายุ"
                    id="lebel_age"
                    type="number"
                    v-model="age"
                    name="member_age" 
                    value="<?php echo $row["member_age"] ;?>" 
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="card Layout-Addinformation">
          <div class="card-body item-center">
            <a href="#"><img src="/img/logo-Meet.png" style="width: 100px" /></a>
            <p class="card-text">การนัดหมาย</p>
          </div>
        </div>
      </div>
      <!-- <div class="col-sm-2">
        <div class="card Layout-Meetinformation">
          <div class="card-body item-center">
            <a href="#"><img src="logo-Meet.png" style="width: 100px" /></a>
            <p class="card-text">การนัดหมาย</p>
          </div>
        </div>
      </div> -->
    </div>

    <p class="card-Name">ตารางสรุปผลการรับประทานยาของผู้ป่วย</p>
    <div class="row">
      <div class="col-sm-8">
        <div class="card Layout-table">
          <div class="card-body">
            <h5 class="card-title">
              ตารางยอดคงเหลือจากการรับประทานยาของผู้ป่วย
            </h5>
            <table class="table table-bordered border-dark">
              <thead>
                <tr>
                  <td class="align-middle border-dark">Drug</td>
                  <td class="align-middle border-dark">
                    รายการยาเดิมที่รับประทาน
                  </td>
                  <td class="align-middle border-dark">รายการยาวันนี้</td>
                  <td class="align-middle border-dark">จำนวนยาก่อนกลับบ้าน</td>
                  <td class="align-middle border-dark">จำนวนคงเหลือ</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-dark">Diuretic</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">ACEI/ARB/ARNI</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Bata-Blocker</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">SGLT2 i</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Spironolactone</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Digoxin</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Nitrate</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Hydralazine</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Ivabradine</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
                <tr>
                  <td class="border-dark">Lipid lowering agent</td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                  <td class="border-dark"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card Layout-feedback">
          <div class="card-body">
            <h5 class="card-title">Recent Feedback</h5>
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="/img/logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">ยืนยันการรับประทานยา</h6>
                    <p class="mb-0 opacity-75">Dec 18,2021 at 11:59pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">now</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="/img/logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">ยืนยันการรับประทานยา</h6>
                    <p class="mb-0 opacity-75">Dec 17,2021 at 01:50pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">1d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="/img/logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">ยืนยันการรับประทานยา</h6>
                    <p class="mb-0 opacity-75">Dec 16,2021 at 01:50pm</p>
                  </div>
                  <small class="opacity-50 text-nowrap">2d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="/img/logo-Add.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">ยืนยันการรับประทานยา</h6>
                    <p class="mb-0 opacity-75">Dec 15,2021 at 09:45am</p>
                  </div>
                  <small class="opacity-50 text-nowrap">3d</small>
                </div>
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action d-flex gap-3 py-3"
                aria-current="true"
              >
                <img
                  src="/img/logo-Check.png"
                  alt="twbs"
                  style="width: 35px; height: 35px"
                />
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">แบบประเมินความรู้</h6>
                    <p class="mb-0 opacity-75">Dec 11,2021 at 10:30am</p>
                    <p class="mb-0 opacity-50">10 out of 10</p>
                  </div>
                  <small class="opacity-50 text-nowrap">1w</small>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>
