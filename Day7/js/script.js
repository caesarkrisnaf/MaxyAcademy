// Global Variables
let alarmTime = null;
let alarmTimeout = null;

// Function to get the current time in 'HH:MM' format
function getCurrentTime() {
    const now = new Date();
    return now.toTimeString().slice(0, 5);  // Extract 'HH:MM'
}

// Function to set alarm
function setAlarm() {
    const selectedTime = document.getElementById('alarmTime').value;
    if (!selectedTime) {
        showMessage('Please select a valid time.', 'red');
        return;
    }

    alarmTime = selectedTime;
    const timeDifference = calculateTimeDifference(alarmTime);

    if (timeDifference <= 0) {
        showMessage('The selected time has already passed.', 'red');
        return;
    }

    // Clear any previously set alarms
    clearTimeout(alarmTimeout);

    // Set new alarm
    alarmTimeout = setTimeout(triggerAlarm, timeDifference);
    showMessage(`Alarm set for ${alarmTime}`, 'green');
}

// Function to calculate time difference in milliseconds
function calculateTimeDifference(alarmTime) {
    const [hours, minutes] = alarmTime.split(':').map(Number);
    const now = new Date();
    const alarmDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), hours, minutes, 0);

    return alarmDate.getTime() - now.getTime();
}

// Function to trigger the alarm
function triggerAlarm() {
    const alarmSound = document.getElementById('alarmSound');
    alarmSound.play();  // Play the alarm sound

    alert('Alarm is ringing!');
    showMessage('Alarm ringing!', 'green');
}

// Function to display messages
function showMessage(text, color) {
    const messageElement = document.getElementById('message');
    messageElement.textContent = text;
    messageElement.style.color = color;
}

// Event listener for setting alarm
document.getElementById('setAlarmBtn').addEventListener('click', setAlarm);

// Optional: Check every minute if the alarm should ring (safety net)
setInterval(() => {
    if (alarmTime && getCurrentTime() === alarmTime) {
        triggerAlarm();
        clearTimeout(alarmTimeout);  // Clear the timeout as a backup
    }
}, 60000);  // 60,000 ms = 1 minute
