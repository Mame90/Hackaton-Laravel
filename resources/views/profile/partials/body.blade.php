<main id="main" class="main">

  <div class="pagetitle">
    <h1>Popular Courses</h1>
  </div><!-- End Page Title -->
  <div class="pagetitle">
    <h1>Popular Courses</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="card">
            <div class="card-body" style="margin:0 ;">
              <h5 class="card-title"></h5>

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="row">
                  <div class="col" style="margin-left:0 ;">
                    <img src="assets\img\courss.jpeg" alt="image-ici" width="110px">
                  </div>
                  <div class="col-sm " style="margin-left:0 ;">
                    <a href="{{ route('mescours') }}" class="card-title">Voir cours</a>
                  </div>
                </div>
              </div>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="row">
                  <div class="col" style="margin-left:0;">
                    <img src="assets\img\professeur.jpeg" alt="image-ici" width="110px">
                  </div>
                  <div class="col-sm " style="margin-left:0;">
                    <a href="{{ route('listeProf') }}" class="card-title">Mes Prof</a>
                  </div>
                </div>
              </div>

              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="row">
                  <div class="col" style="margin-left:0 ;">
                    <img src="assets\img\calendrier.jpeg" alt="image-ici" width="100px">
                  </div>
                  <div class="col-sm " style="margin-left:0 ;">
                    <a href="#" class="card-title">Date Cours</a>
                  </div>
                </div>
              </div>


              <!-- La vue principale où se trouve le bouton "Liste des professeurs" -->


              <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <div class="row">
                  <div class="col" style="margin-left:0 ;">
                    <img src="assets\img\alert.jpg" alt="image-ici" width="90px">
                  </div>
                  <div class="col-sm " style="margin-left:0 ;">
                    En cas de besoin crucial, veillez cliquer sur la cloche!
                  </div>
                </div>


              </div>

            </div>
            <h2 class="text-center fw-bold">Top teachers</h2>
            <!-- Teachers -->
            <div class="row row-cols-1 row-cols-md-5 g-2 text-center">

            <div class="col text-center">
                <div class="card h-100  mb-0">
                  <img src="assets\img\profile-img.jpg" class="card-img-top" alt="...">
                  <br>
                  <h6 class="fw-bold">Mr DIOP</h6>
                  <p>Prof PHP</p>
                </div>
              </div>
              <div class="col">
                <div class="card h-100  mb-0">
                  <img src="assets\img\p5.jpg" class="card-img-top" alt="...">
                  <br>
                  <h6 class="fw-bold">Mme SARR</h6>
                  <p>Prof Javascript</p>
                </div>
              </div>
              
              <div class="col text-center">
                <div class="card h-100 fw-100  mb-0">
                  <img src="assets\img\messages-3.jpg" class="card-img-top" alt="...">
                  <br>
                  <h6 class="fw-bold">Mr Sene</h6>
                  <p>Prof HTML & CSS</p>
                </div>
              </div>
              <div class="col text-center">
                <div class="card h-100  mb-0">
                  <img src="assets\img\messages-2.jpg" class="card-img-top" alt="...">
                  <br>
                  <h6 class="fw-bold">Mme DIATTA</h6>
                  <p>Prof Laravel</p>
                </div>
              </div>
              <div class="col text-center">
                <div class="card h-100 mb-0">
                  <img src="assets\img\messages-1.jpg" class="card-img-top" alt="...">
                  <br>
                  <h6 class="fw-bold">Mme Seck</h6>
                  <p>Prof C++</p>
                </div>
              </div>

            </div>

          </div>
          <!-- End Sales Card -->
        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4 w-40">
        <!-- Timetable -->
        <div class="card ">
          <div class="card-body ">
            <h5 class="card-title">Timetable</h5>
            <!-- Calendrier -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Google Font Link for Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
            <!-- Calendrier -->
            <div id="calendar" style="margin-bottom: 1;">
              <div class="wrapper">
                <header>
                  <p class="current-date"></p>
                  <div class="icons">
                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                  </div>
                </header>
                <div class="calendar">
                  <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                  </ul>
                  <ul class="days"></ul>
                </div>
              </div>
            </div>
            <!-- Style css -->
            <style>
              /* Import Google font - Poppins */
              @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

              * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
              }

              #calendar {
                display: flex;
                align-items: center;
                padding: 0;
                justify-content: center;
                min-height: 1vh;
                max-width: 50vh;

              }

              .wrapper {
                width: 250px;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
              }

              .wrapper header {
                display: flex;
                align-items: center;
                padding: 25px 30px 10px;
                justify-content: space-between;
              }

              header .icons {
                display: flex;
              }

              header .icons span {
                height: 18px;
                width: 18px;
                margin: 0 1px;
                cursor: pointer;
                color: #878787;
                text-align: center;
                line-height: 38px;
                font-size: 1.9rem;
                user-select: none;
                border-radius: 50%;
              }

              .icons span:last-child {
                margin-right: -10px;
              }

              header .icons span:hover {
                background: #f2f2f2;
              }

              header .current-date {
                font-size: 1rem;
                font-weight: 400;
              }

              .calendar {
                padding: 20px;
              }

              .calendar ul {
                display: flex;
                flex-wrap: wrap;
                list-style: none;
                text-align: center;
              }

              .calendar .days {
                margin-bottom: 20px;
              }

              .calendar li {
                color: #333;
                width: calc(100% / 7);
                font-size: 0.7rem;
              }

              .calendar .weeks li {
                font-weight: 250;
                cursor: default;
              }

              .calendar .days li {
                z-index: 1;
                cursor: pointer;
                position: relative;
                margin-top: 30px;
              }

              .days li.inactive {
                color: #aaa;
              }

              .days li.active {
                color: #fff;
              }

              .days li::before {
                position: absolute;
                content: "";
                left: 50%;
                top: 50%;
                height: 10px;
                width: 10px;
                z-index: -1;
                border-radius: 50%;
                transform: translate(-50%, -50%);
              }

              .days li.active::before {
                background: #9B59B6;
              }

              .days li:not(.active):hover::before {
                background: #f2f2f2;
              }
            </style>

            <!-- photo teacher -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 mb-O">
                  <img src="assets\img\p5.jpg" class="img-fluid rounded-start " alt="...">
                </div>
                <div class="col-md-8 ">
                  <div class="card-body">
                    <h6 class="card-title mt-0 mb-0">Dr MENDY </h6>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
            <style>
              i {
                color: goldenrod;
                font-size: small;
              }
            </style>
            <!-- About teacher-->
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card">
                  <div class="card-body bg-info">
                    <h6 class="card-title">Students</h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body bg-success">
                    <h6 class="card-title">Webinar </h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body bg-primary">
                    <h6 class="card-title">Teacher </h6>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card bg-warning">
                  <div class="card-body card-body-warning">
                    <h6 class="card-title w-1">Course </h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End about teacher -->

          </div>

        </div>

      </div>





    </div><!-- End Timetable -->

    <!-- Budget Report -->

    <!-- Website Traffic -->

    <!-- News & Updates Traffic -->

    </div><!-- End Right side columns -->

    </div>
  </section>

  <script>
    const daysTag = document.querySelector(".days"),
      currentDate = document.querySelector(".current-date"),
      prevNextIcon = document.querySelectorAll(".icons span");

    // getting new date, current year and month
    let date = new Date(),
      currYear = date.getFullYear(),
      currMonth = date.getMonth();

    // storing full name of all months in array
    const months = ["January", "February", "March", "April", "May", "June", "July",
      "August", "September", "October", "November", "December"
    ];

    const renderCalendar = () => {
      let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
      let liTag = "";

      for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
      }

      for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() &&
          currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
      }

      for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
      }
      currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
      daysTag.innerHTML = liTag;
    }
    renderCalendar();

    prevNextIcon.forEach(icon => { // getting prev and next icons
      icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
          // creating a new date of current year & month and pass it as date value
          date = new Date(currYear, currMonth, new Date().getDate());
          currYear = date.getFullYear(); // updating current year with new date year
          currMonth = date.getMonth(); // updating current month with new date month
        } else {
          date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
      });
    });
  </script>

</main><!-- End #main -->