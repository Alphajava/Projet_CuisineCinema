function initTimer() {
        let nowString = new Date();
        var now = new Date(nowString);
        const frFormat = new Intl.DateTimeFormat('fr-FR', {timeZone: 'Europe/Paris'});
        now.setHours(0, 0, 0, 0);
        console.log(frFormat.format(now));
        let nextBusinessDay = new Date('November 14, 2018 GMT+01:00');

        let timeRemaining = getTimeRemaining(nextBusinessDay);
        setTimerText(timeRemaining);

        window.setInterval(() => {
            setTimerText(getTimeRemaining(nextBusinessDay));
        }, 1000);


        function setTimerText(date) {

            const times = {
                timer: document.querySelector('#timer'),
                days: timer.querySelector('.days'),
                hours: timer.querySelector('.hours'),
                minutes: timer.querySelector('.minutes'),
                seconds: timer.querySelector('.seconds'),
            }
            times.days.innerText = (('0' + date.days).slice(-2));
            times.hours.innerText = (('0' + date.hours).slice(-2));
            times.minutes.innerText = (('0' + date.minutes).slice(-2));
            times.seconds.innerText = (('0' + date.seconds).slice(-2));
        }

        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }
    }
    document.addEventListener('DOMContentLoaded', initTimer, false);