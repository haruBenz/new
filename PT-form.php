

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardiac center</title>
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
    <link rel="stylesheet" href="/css/styles_from.css" />
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
              <a class="nav-link" aria-current="page" href="web_p.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="form.html">Form</a>
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
                  <a class="dropdown-item" href="sign in-P.html">Logout</a>
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

    <div class="container"><h4>แบบประเมินความรู้เกี่ยวกับยาของผู้ป่วย</h4></div>
    <br />

    <table class="table table-bordered table-xl container">
      <thead>
        <tr>
          <th>แบบประเมินความรู้เกี่ยวกับยาของผู้ป่วย</th>
          <th>ทราบ</th>
          <th>ไม่ทราบ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1. ผู้ป่วยทราบว่ายาวาร์ฟารินเป็นยาอะไร</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios1"
              id="gridRadios1"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios1"
              id="gridRadios1"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>2. ผู้ป่วยทราบขนาดยาที่ได้รับวันนี้</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios2"
              id="gridRadios2"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios2"
              id="gridRadios2"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>3. ผู้ป่วยทราบข้อบ่งใช่ของยาขับปัสสาวะ</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios3"
              id="gridRadios3"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios3"
              id="gridRadios3"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>4. ผู้ป่วยทราบว่าควรเก็บยาให้พ้นแสงและความชื้นโดยใส่ในซองสีชา</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios4"
              id="gridRadios4"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios4"
              id="gridRadios4"
              value="No"
            />
          </td>
        </tr>
        <tr>
          <td>5. ผู้ป่วยทราบว่าควรหลีกเลี่ยงการสูบบุหรี่และการดื่มแอลกอฮอล์</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios5"
              id="gridRadios5"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios5"
              id="gridRadios5"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>
            6. ผู้ป่วยทราบว่าอาหารจำพวกผักใบเขียวรวมถึงการบริโภคอาหารบางอย่าง
            เช่ย ขิง,น้ำเต้าหู้,มะม่วงสุก อาจส่งผลต่อระดับยาวาร์ฟารินได้
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios6"
              id="gridRadios6"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios6"
              id="gridRadios6"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>7. ผู้ป่วยทราบวิธีปฏิบัติตัวเมื่อลืมรับประทานยา</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios7"
              id="gridRadios7"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios7"
              id="gridRadios7"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>8. ผู้ป่วยทราบวิธีการสังเกตตนเองของการเกิดภาวะลิ่มเลือดอุดตัน</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios8"
              id="gridRadios8"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios8"
              id="gridRadios8"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>9. ผู้ป่วยสังเกตว่ามีอาการบวมน้ำบริเวณข้อเท้าและเท้าหรือไม่</td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios9"
              id="gridRadios9"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios9"
              id="gridRadios9"
              value="ํNo"
            />
          </td>
        </tr>
        <tr>
          <td>
            10. ผู้ป่วยทราบว่าต้องปรึกษาแพทย์หรือเภสัชทุกครั้งก่อนซื้อยา
            อาหารเสริม หรือสมุนไพรมารับประทานเอง
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios10"
              id="gridRadios10"
              value="ํYes"
            />
          </td>
          <td class="check">
            <input
              type="radio"
              name="gridRadios10"
              id="gridRadios10"
              value="ํNo"
            />
          </td>
        </tr>
      </tbody>
    </table>
    <br />
    <div class="container">
      <h4>ข้อเสนอแนะ</h4>
      <textarea
        class="container"
        name="comment"
        id="comment"
        rows="10"
      ></textarea>
    </div>
    <br />
    <div class="center-align">
      <button type="submit" class="btn btn-primary btn-last">บันทึก</button>
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
