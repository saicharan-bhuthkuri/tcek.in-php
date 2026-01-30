// Tab Functionality
function openCourseTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tab-content" and hide them
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }

    // Get all elements with class="tab-btn" and remove the class "active"
    tablinks = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    // Add small delay to allow display:block to apply before adding opacity class for transition
    setTimeout(() => {
        document.getElementById(tabName).classList.add("active");
    }, 10);
    
    evt.currentTarget.className += " active";
}

// Open default tab on load
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.tab-btn').click();
});
