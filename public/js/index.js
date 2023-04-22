//document.getElementsByClassName("main-title")[0].style.color = "red";
document.getElementById("main-action").onclick = function () {
    document.getElementById('cars').scrollIntoView({behavior: "smooth"});
}

var buttons = document.getElementsByClassName("car-button");

for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function () {
        document.getElementById("price").scrollIntoView({behavior: "smooth"});
    }
}

document.getElementById('price-action').onclick = function () {
    if (document.getElementById('name').value === "") {
        alert("The Name field is empty!")
    } else if (document.getElementById('phone').value === "") {
        alert("The Phone field is empty!")
    } else if (document.getElementById('car').value === "") {
        alert("The Car field is empty!")
    } else {
        alert("We will contact with you later!")
    }
}

document.addEventListener("DOMContentLoaded", function () {
    let layer = document.querySelector('.price-image');

    document.addEventListener('mousemove', (event) => {
        layer.style.transform = 'translate3d(' + ((event.clientX * 0.8) / 10) + 'px,' + ((event.clientY * 0.6) / 6) + 'px,0px';
    });

    const elem = document.querySelector(".main");
    document.addEventListener('scroll', () => {
        elem.style.backgroundPositionX = '0' + (0.1 * window.pageYOffset) + 'px';
    })
});
