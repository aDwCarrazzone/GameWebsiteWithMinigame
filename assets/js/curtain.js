window.onload = function () {
    // Check if sessionStorage is available (IE8+) and make sure that the visited flag is not already set.
    if(typeof window.sessionStorage !== "undefined" && !sessionStorage.getItem('visited')) {
         // Set visited flag in sessionStorage
         sessionStorage.setItem('visited', true);
         // Uses command
        document.getElementById("myNav").style.display = "block";
    }
};
function closeNav() {
    document.getElementById("myNav").style.display = "none";
}
