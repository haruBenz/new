<?php
require('Dbconnects.php');

    session_start();

    if (!isset($_SESSION['member_HN'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: PTsignIN.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['member_HN']);
        header('location: PTsignIN.php');
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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
    <link rel="stylesheet" href="/css/styles_web_p.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="web_p.html"
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="web_p.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form.html">Form</a>
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
                      <?php if (isset($_SESSION['member_HN'])) : ?>
                      <a href="PT-web_p.php?logout='1'">Logout</a>
                      <?php endif ?>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-first btn-warning" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="card information">
      <p class="card-title-head"><b>ตารางการรับประทานยาของผู้ป่วย</b></p>
      <table class="table">
        <thead>
          <tr>
            <td class="align-middle" colspan="2" rowspan="2">ช่วงเวลา</td>
            <td class="align-middle" colspan="2">
              <script language="javascript">
                now = new Date();
                var thday = new Array(
                  "อาทิตย์",
                  "จันทร์",
                  "อังคาร",
                  "พุธ",
                  "พฤหัส",
                  "ศุกร์",
                  "เสาร์"
                );
                var thmonth = new Array(
                  "มกราคม",
                  "กุมภาพันธ์",
                  "มีนาคม",
                  "เมษายน",
                  "พฤษภาคม",
                  "มิถุนายน",
                  "กรกฎาคม",
                  "สิงหาคม",
                  "กันยายน",
                  "ตุลาคม",
                  "พฤศจิกายน",
                  "ธันวาคม"
                );
                document.write(
                  "วัน" +
                    thday[now.getDay()] +
                    "ที่ " +
                    now.getDate() +
                    " " +
                    thmonth[now.getMonth()] +
                    " " +
                    (1900 + now.getYear() + 543)
                );
              </script>
            </td>
            <td class="align-middle" rowspan="2">ยืนยันการรับประทานยา</td>
          </tr>
          <tr>
            <td class="align-middle">รายการยา</td>
            <td class="align-middle">ครั้งละกี่เม็ด</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="align-middle" rowspan="2">เช้า</td>
            <td class="align-middle">ก่อนอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id01').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id01" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id01').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto input-from">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto input-from">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id01').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle">หลังอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id02').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id02" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id02').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id02').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle" rowspan="2">กลางวัน</td>
            <td class="align-middle">ก่อนอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id03').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id03" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id03').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id03').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle">หลังอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id04').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id04" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id04').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id04').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle" rowspan="2">เย็น</td>
            <td class="align-middle">ก่อนอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id05').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id05" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id05').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id05').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle">หลังอาหาร</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id06').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id06" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id06').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id06').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="align-middle" colspan="2">ก่อนนอน</td>
            <td></td>
            <td></td>
            <td>
              <div class="w3-container">
                <button
                  onclick="document.getElementById('id07').style.display='block'"
                  class="w3-button w3-green w3-large"
                >
                  ยืนยัน
                </button>
                <div id="id07" class="w3-modal">
                  <div
                    class="w3-modal-content w3-card-4 w3-animate-zoom"
                    style="max-width: 600px"
                  >
                    <div class="w3-center">
                      <br />
                      <span
                        onclick="document.getElementById('id07').style.display='none'"
                        class="
                          w3-button w3-xlarge w3-hover-red w3-display-topright
                        "
                        title="Close Modal"
                        >&times;</span
                      >
                      <img
                        src="logo_popup.png"
                        alt="logo"
                        style="width: 40%"
                        class="w3-circle w3-margin-top"
                      />
                    </div>
                    <form class="w3-container">
                      <div class="w3-section">
                        <label class="w3-margin-bottom"
                          ><b>ยืนยันการรับประทานยา</b></label
                        >
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <div class="row row-cols-lg-auto">
                          <input
                            class="w3-input w3-border w3-margin-bottom sizetext"
                            type="text"
                            placeholder="รายการยา"
                            name="name"
                            required
                          />
                          <label class="text">จำนวน</label>
                          <input
                            class="w3-input w3-border w3-margin-bottom"
                            type="number"
                            id="quantity"
                            name="quantity"
                            min="0"
                            max="5"
                            required
                          />
                          <label class="text">เม็ด/ครั้ง</label>
                        </div>
                        <button
                          class="
                            w3-button w3-block w3-green w3-section w3-padding
                          "
                          type="submit"
                        >
                          บันทึก
                        </button>
                      </div>
                    </form>
                    <div
                      class="
                        w3-container w3-border-top w3-padding-16 w3-light-grey
                      "
                    >
                      <button
                        onclick="document.getElementById('id07').style.display='none'"
                        type="button"
                        class="w3-button w3-red"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <br />
    </div>
    <p class="card-title"><b>ถ่ายรูปยา (ให้เห็นจำนวนยาที่อยู่ภายในซอง)</b></p>
    <div class="from-group">
      <input
        type="file"
        class="from-control-file"
        id="exampleFromControlFile1"
      />
    </div>
    <p class="card-title"><b>บันทึกประจำวัน</b></p>
    <textarea
      class="container"
      name="comment"
      id="comment"
      rows="10"
    ></textarea>

    <br />
    <div class="center-align">
      <button type="submit" class="btn btn-primary btn-last">บันทึก</button>
    </div>

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
  </body>
</html>