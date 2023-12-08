// language-switcher.js

// document.addEventListener("DOMContentLoaded", function () {
//   const english_Flag = document.querySelector(".english");
//   const french_Flag = document.querySelector(".french");

//   // Determine the initial language from the URL
//   const urlParams = new URLSearchParams(window.location.search);
//   const initialLanguage = urlParams.get("lang") || "en";

//   english_Flag.style.display = initialLanguage === "en" ? "none" : "block";
//   french_Flag.style.display = initialLanguage === "fr" ? "none" : "block";

//   english_Flag.addEventListener("click", function (event) {
//     event.preventDefault();
//     toggleLanguage("en");
//   });

//   french_Flag.addEventListener("click", function (event) {
//     event.preventDefault();
//     toggleLanguage("fr");
//   });

//   function toggleLanguage(lang) {
//     // Update only the URL without reloading the page
//     const currentUrl = new URL(window.location.href);
//     currentUrl.searchParams.set("lang", lang);

//     // Set the new URL without triggering a page reload
//     window.history.replaceState({}, document.title, currentUrl.toString());

//     // Toggle the display property to hide or show the flags
//     english_Flag.style.display = lang === "en" ? "none" : "block";
//     french_Flag.style.display = lang === "fr" ? "none" : "block";
//   }
// });
