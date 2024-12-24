try {
    document.querySelector('.skewed-button').addEventListener('click', function () {
        this.classList.toggle('active');
    });

    // Optioneel: klik ergens anders om de knop te resetten
    document.addEventListener('click', function (e) {
        const button = document.querySelector('.skewed-button');
        if (!button.contains(e.target)) {
            button.classList.remove('active');
        }
    });
} catch (error) { }

try {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const hiddenElements = document.querySelectorAll(".element-fade-in");
    hiddenElements.forEach((el) => observer.observe(el));
} catch (error) { }


try {
    var swiper = new Swiper(".mycases", {
        slidesPerView: "auto",
        spaceBetween: 20,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1352: {
                slidesPerView: 3,
                spaceBetween: 45,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".myafbeeldingen", {
        slidesPerView: "auto",
        spaceBetween: 15,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1352: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }


try {
    var swiper = new Swiper(".myklantbeleving", {
        slidesPerView: "auto",
        spaceBetween: 22,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1352: {
                slidesPerView: 3,
                spaceBetween: 35,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".mytestimonials", {
        slidesPerView: "auto",
        spaceBetween: 22,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: "auto",
                spaceBetween: 30,
            },
            1352: {
                slidesPerView: "auto",
                spaceBetween: 35,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }


try {
    var swiper = new Swiper(".myinspiratie", {
        slidesPerView: "auto",
        spaceBetween: 22,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: "auto",
                spaceBetween: 30,
            },
            1352: {
                slidesPerView: "auto",
                spaceBetween: 35,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".myklanten", {
        slidesPerView: "auto",
        spaceBetween: 15,
        speed: 20000,
        freeMode: true,
        allowTouchMove: false, // Swipe uitschakelen
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            1200: {
                slidesPerView: "auto",
                spaceBetween: 15,
            },
            1352: {
                slidesPerView: "auto",
                spaceBetween: 15,
            },
        },
    });
} catch (error) { }



try {
    const menuHref = document.querySelectorAll(".submenu-hover");
    const menuBackground = document.querySelectorAll(".submenu-content");

    // Zet de eerste menuHref en bijbehorende achtergrond standaard actief
    if (menuHref.length > 0 && menuBackground.length > 0) {
        menuHref[0].classList.add("active");
        menuBackground[0].classList.remove("hide");
    }

    for (let i = 0; i < menuHref.length; i++) {
        menuHref[i].addEventListener("mouseover", () => {
            // Verberg alle submenu-achtergronden
            for (let j = 0; j < menuBackground.length; j++) {
                menuBackground[j].classList.add("hide");
            }

            // Toon de geselecteerde submenu-achtergrond
            const img = document.querySelector(`#submenucontent-${i}`);
            img.classList.remove("hide");

            // Verwijder de 'active'-class van alle menuHref-elementen
            menuHref.forEach(href => href.classList.remove("active"));

            // Voeg de 'active'-class toe aan het huidige menuHref
            menuHref[i].classList.add("active");
        });
    }
} catch (error) {
    console.error(error);
}

try {
    document.addEventListener("DOMContentLoaded", () => {
        const body = document.body;
        const dropdownButton = document.querySelector("#dropdown-button");
        const elementsToDeactivate = document.querySelectorAll(".hide-dropdown, .overlay-dropdown");

        if (!dropdownButton || elementsToDeactivate.length === 0) {
            console.error("Dropdown-button of te deactiveren elementen niet gevonden in de DOM.");
            return;
        }

        // Hover over de button
        dropdownButton.addEventListener("mouseenter", () => {
            if (body.classList.contains("dropdown-nonactive")) {
                body.classList.replace("dropdown-nonactive", "dropdown-active");
            } else {
                body.classList.replace("dropdown-active", "dropdown-nonactive");
            }
        });

        // Hover over de elementen die de dropdown moeten deactiveren
        elementsToDeactivate.forEach((element) => {
            element.addEventListener("mouseenter", () => {
                if (body.classList.contains("dropdown-active")) {
                    body.classList.replace("dropdown-active", "dropdown-nonactive");
                }
                // Als de class al "dropdown-nonactive" is, doe niets
            });
        });
    });
} catch (error) {
    console.error(error);
}


try {
    document.addEventListener("DOMContentLoaded", () => {
        const body = document.body;
        const mobileMenuButton = document.getElementById("mobiel-menu");
        const mobileSubMenuButton = document.getElementById("mobiel-submenu");
        const mobileMenuBackButton = document.getElementById("mobilemenu-back");

        // Controleer of buttons bestaan
        if (!mobileMenuButton) {
            console.error("Element met ID 'mobiel-menu' niet gevonden in de DOM.");
            return;
        }

        if (!mobileSubMenuButton) {
            console.error("Element met ID 'mobiel-submenu' niet gevonden in de DOM.");
            return;
        }

        if (!mobileMenuBackButton) {
            console.error("Element met ID 'mobilemenu-back' niet gevonden in de DOM.");
            return;
        }

        // Klik-event voor hoofdmenu
        mobileMenuButton.addEventListener("click", () => {
            if (body.classList.contains("mobilemenu-nonactive")) {
                body.classList.replace("mobilemenu-nonactive", "mobilemenu-active");
            } else if (body.classList.contains("mobilemenu-active")) {
                body.classList.replace("mobilemenu-active", "mobilemenu-nonactive");
            } else {
                body.classList.add("mobilemenu-active");
            }

            // Extra: Zorg dat het submenu wordt gesloten als het actief is
            if (body.classList.contains("mobilesubmenu-active")) {
                body.classList.replace("mobilesubmenu-active", "mobilesubmenu-nonactive");
            }
        });

        // Klik-event voor submenu
        mobileSubMenuButton.addEventListener("click", () => {
            if (body.classList.contains("mobilesubmenu-nonactive")) {
                body.classList.replace("mobilesubmenu-nonactive", "mobilesubmenu-active");
            } else if (body.classList.contains("mobilesubmenu-active")) {
                body.classList.replace("mobilesubmenu-active", "mobilesubmenu-nonactive");
            } else {
                body.classList.add("mobilesubmenu-active");
            }
        });

        // Klik-event voor back button
        mobileMenuBackButton.addEventListener("click", () => {
            if (body.classList.contains("mobilesubmenu-active")) {
                body.classList.replace("mobilesubmenu-active", "mobilesubmenu-nonactive");
            }
        });
    });
} catch (error) {
    console.error(error);
}


try {

    function copyToClipboard() {
        // Selecteer het inputveld
        var input = document.getElementById("urlInput");
        // Selecteer de tekst in het inputveld
        input.select();
        // Kopieer de geselecteerde tekst naar het klembord
        document.execCommand("copy");
        // Geef feedback dat de URL is gekopieerd
        alert("De URL is gekopieerd naar het klembord: " + input.value);
    }

    document.getElementById("share-button").addEventListener("click", function () {
        // Toggle de klassen in het hoofdelement
        document.querySelector("main").classList.toggle("share-open");
        document.querySelector("main").classList.toggle("share-close");
    });

    document.getElementById("share-close-button").addEventListener("click", function () {
        // Toggle de klassen in het hoofdelement
        document.querySelector("main").classList.toggle("share-open");
        document.querySelector("main").classList.toggle("share-close");
    });
    document.getElementById("share-button-mobile").addEventListener("click", function () {
        // Toggle de klassen in het hoofdelement
        document.querySelector("main").classList.toggle("share-open");
        document.querySelector("main").classList.toggle("share-close");
    });
} catch (error) {
    console.error(error);
}




document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const filterButton = document.getElementById('filter-button');

    // Event listener voor "Enter" in het zoekveld
    searchInput.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Voorkom standaard actie
            triggerSearch(); // Start de zoekactie
        }
    });

    // Event listener voor klik op de zoekknop
    filterButton.addEventListener('click', function () {
        triggerSearch(); // Start de zoekactie
    });

    // Zoekfunctie
    function triggerSearch() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm) {
            console.log('Zoeken naar:', searchTerm);

            // Hier kun je je AJAX-aanroep of zoekactie starten
            performSearch(searchTerm);
        } else {
            console.log('Voer een zoekterm in.');
        }
    }

    // Simpele zoekfunctie (pas deze aan voor je AJAX-logica)
    function performSearch(term) {
        // alert('Zoekactie gestart voor: ' + term);
        // Voeg hier je AJAX-logica of formulieractie toe
    }
});
