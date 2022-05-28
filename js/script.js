const cursor = document.querySelector('.cursor')
const getit = document.querySelector('.getit')
const badguy = document.querySelector('.badguy')
const body = document.querySelector('body')
const button = document.querySelector('button')
const shot = document.querySelector(".shot");


var score = 0;
var screenWidth = body.offsetWidth;
var screenHeight = body.offsetHeight;

button.addEventListener('click', function () {

    window.addEventListener('mousemove', function (e) {
        cursor.style.left = e.pageX + "px";
        cursor.style.top = e.pageY + "px";
    })

    window.addEventListener('click', function (e) {
        getit.style.opacity = "1";
        cursor.style.opacity = "1";
        shot.play();
        if (e.target.classList.contains("badguy")) {
            getit.style.display = 'block';
            getit.style.left = e.pageX + "px";
            getit.style.top = e.pageY + "px";
            this.setTimeout(function () {
                getit.style.display = 'none'
            }, 500);
            score++;
            button.innerHTML = "Счет: " + score;
            shot.play();
        }
    })

    setInterval(function () {
        randTop = Math.random() * (screenHeight - 180);
        randleft = Math.random() * (screenWidth - 180);
        badguy.style.left = randleft + "px";
        badguy.style.top = (randTop) + "px";
    }, 2000)
})






