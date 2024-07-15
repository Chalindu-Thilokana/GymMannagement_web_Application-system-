
  <link rel="stylesheet" href="{{asset('dashbordmy/calender.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body onload="initCalendar()">
  <div class="container">
    <div class="card" id="calendarCard">
      <div class="front">
        <div class="contentfront">
          <div class="month">
            <div class="calendar-header">
              <span class="prev" onclick="prevMonth()">&#10094;</span>
              <span class="month-name" id="monthName"></span>
              <span class="year" id="year"></span>
              <span class="next" onclick="nextMonth()">&#10095;</span>
            </div>
            <table>
              <thead>
                <tr class="orangeTr">
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat</th>
                </tr>
              </thead>
              <tbody id="calendarBody"></tbody>
            </table>
          </div>
          <div class="date">
            <div class="datecont">
              <div id="currentDate"></div>
              <div id="currentDay"></div>
              <div id="currentTime"></div>
              <i class="fa fa-pencil edit" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="back">
        <div class="contentback">
          <div class="backcontainer">
            <!-- Additional content for the back side of the card -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('dashbordmy/calender.js') }}"></script>


 
  
 



 


