document.addEventListener("DOMContentLoaded", function() {
    const body = document.getElementById("body");
    const darkmodeButton = document.getElementById("darkmode");
    const lightmodeButton = document.getElementById("lightmode");

    // Sayfa yüklendiğinde localStorage'dan arka plan bilgisini al ve uygula
    const currentBackground = localStorage.getItem("background");
    if (currentBackground === "background2.jpeg") {
        body.classList.add("bg-[url('background2.jpeg')]");
        body.classList.remove("bg-[url('background.jpg')]");
        darkmodeButton.classList.add("hidden");
        lightmodeButton.classList.remove("hidden");
    } else {
        body.classList.add("bg-[url('background.jpg')]");
        body.classList.remove("bg-[url('background2.jpeg')]");
        lightmodeButton.classList.add("hidden");
        darkmodeButton.classList.remove("hidden");
    }
});

function darkmode() {
    const body = document.getElementById("body");
    body.classList.remove("bg-[url('background.jpg')]");
    body.classList.add("bg-[url('background2.jpeg')]");
    document.getElementById("darkmode").classList.add("hidden");
    document.getElementById("lightmode").classList.remove("hidden");
    localStorage.setItem("background", "background2.jpeg"); // Değişikliği localStorage'a kaydet
}

function lightmode() {
    const body = document.getElementById("body");
    body.classList.remove("bg-[url('background2.jpeg')]");
    body.classList.add("bg-[url('background.jpg')]");
    document.getElementById("lightmode").classList.add("hidden");
    document.getElementById("darkmode").classList.remove("hidden");
    localStorage.setItem("background", "background.jpg"); // Değişikliği localStorage'a kaydet
}
