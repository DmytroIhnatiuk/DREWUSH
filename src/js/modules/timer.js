export default function timer (){
    const MS_IN_SECOND = 1000;
    const MS_IN_MINUTE = MS_IN_SECOND * 60;
    const MS_IN_HOUR = MS_IN_MINUTE * 60;
    const MS_IN_DAY = MS_IN_HOUR * 24;

    const timerElements = {
        hours: document.getElementById('hours'),
        minutes: document.getElementById('minutes'),
        seconds: document.getElementById('seconds'),
        hoursLabel: document.getElementById('hours-label'),
        minutesLabel: document.getElementById('minutes-label'),
        secondsLabel: document.getElementById('seconds-label')
    };

    function getRemainingTime(endTime) {
        const now = new Date().getTime();
        const difference = endTime - now;

        const hours = Math.floor((difference % MS_IN_DAY) / MS_IN_HOUR);
        const minutes = Math.floor((difference % MS_IN_HOUR) / MS_IN_MINUTE);
        const seconds = Math.floor((difference % MS_IN_MINUTE) / MS_IN_SECOND);

        return { hours, minutes, seconds, difference };
    }

    function updateLabels(hours, minutes, seconds) {
        timerElements.hours.textContent = hours;
        timerElements.minutes.textContent = minutes;
        timerElements.seconds.textContent = seconds;

        timerElements.hoursLabel.textContent = hours === 1 ? 'година' : 'години';
        timerElements.minutesLabel.textContent = minutes === 1 ? 'хвилина' : 'хвилини';
        timerElements.secondsLabel.textContent = seconds === 1 ? 'секунда' : 'секунди';
    }

    function startTimer() {
        const initialEndTime = new Date().getTime() + MS_IN_DAY;
        const savedEndTime = localStorage.getItem('timerEndTime') || initialEndTime;
        localStorage.setItem('timerEndTime', savedEndTime);

        function countdown() {
            const { hours, minutes, seconds, difference } = getRemainingTime(savedEndTime);

            if (difference < 0) {
                localStorage.setItem('timerEndTime', initialEndTime);
            } else {
                updateLabels(hours, minutes, seconds);
                setTimeout(countdown, MS_IN_SECOND);
            }
        }

        countdown();
    }

    startTimer();
}