// Initialize current date variables
let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

// Function to initialize the calendar
function initCalendar() {
  displayCalendar(currentMonth, currentYear);
  updateDateTime();
}

// Function to display the calendar for the given month and year
function displayCalendar(month, year) {
  // Clear previous calendar
  let calendarBody = document.getElementById("calendarBody");
  calendarBody.innerHTML = "";

  // Set month and year in the header
  document.getElementById("monthName").textContent = getMonthName(month);
  document.getElementById("year").textContent = year;

  // Get the first day of the month and the number of days in the month
  let firstDay = new Date(year, month, 1).getDay();
  let daysInMonth = new Date(year, month + 1, 0).getDate();

  // Create cells for each day
  let date = 1;
  for (let i = 0; i < 6; i++) {
    let row = document.createElement("tr");

    for (let j = 0; j < 7; j++) {
      if (i === 0 && j < firstDay) {
        let cell = document.createElement("td");
        row.appendChild(cell);
      } else if (date > daysInMonth) {
        break;
      } else {
        let cell = document.createElement("td");
        cell.textContent = date;
        cell.addEventListener("click", () => {
          alert(`Clicked on ${getMonthName(month)} ${date}, ${year}`);
        });
        row.appendChild(cell);
        date++;
      }
    }
    calendarBody.appendChild(row);
  }

  // Highlight today's date
  let today = new Date();
  if (month === today.getMonth() && year === today.getFullYear()) {
    let cells = calendarBody.getElementsByTagName("td");
    cells[today.getDate() + firstDay - 1].classList.add("today");
  }
}

// Function to get month name from month index
function getMonthName(monthIndex) {
  let monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];
  return monthNames[monthIndex];
}

// Function to navigate to the previous month
function prevMonth() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  displayCalendar(currentMonth, currentYear);
}

// Function to navigate to the next month
function nextMonth() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  displayCalendar(currentMonth, currentYear);
}

// Function to update current date and time
function updateDateTime() {
  let today = new Date();
  let dayOfWeek = today.toLocaleDateString("en-US", { weekday: "long" });
  let date = today.getDate();
  let month = today.toLocaleDateString("en-US", { month: "long" });
  let year = today.getFullYear();
  let hours = today.getHours();
  let minutes = today.getMinutes();
  let ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12;
  hours = hours ? hours : 12; // Handle midnight
  minutes = minutes < 10 ? "0" + minutes : minutes;

  document.getElementById("currentDate").textContent = `${date}`;
  document.getElementById("currentDay").textContent = `${dayOfWeek}`;
  document.getElementById("currentTime").textContent = `${hours}:${minutes} ${ampm}`;

  setTimeout(updateDateTime, 1000); // Update every second
}
