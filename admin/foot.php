</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        <script>
  
// Refresh Rate is how often you want to refresh the page 
// bassed off the user inactivity. 
var refresh_rate = 100; //<-- In seconds, change to your needs
var last_user_action = 0;
var has_focus = false;
var lost_focus_count = 0;
// If the user loses focus on the browser to many times 
// we want to refresh anyway even if they are typing. 
// This is so we don't get the browser locked into 
// a state where the refresh never happens.    
var focus_margin = 10;

// Reset the Timer on users last action
function reset() {
    last_user_action = 0;
    updateVisualTimer('');
}

function updateVisualTimer(value) {
    var element = document.getElementById('refreshTimer');



    if (value) {

        element.innerHTML = value;
    } else if (has_focus) {
        element.innerHTML = ' !';
    } else if (last_user_action >= refresh_rate) {
        element.innerHTML = ' ?';
    } else {

        element.innerHTML = (refresh_rate - last_user_action);
    }






}

function windowHasFocus() {
    has_focus = true;
}

function windowLostFocus() {
    has_focus = false;
    lost_focus_count++;
    console.log(lost_focus_count + " <~ Lost Focus");
}

// Count Down that executes ever second
setInterval(function() {
    last_user_action++;
    refreshCheck();
    if (last_user_action > 2) {
        updateVisualTimer();
    }
}, 1000);

// The code that checks if the window needs to reload
function refreshCheck() {
    var focus = window.onfocus;
    if ((last_user_action >= refresh_rate && !has_focus && document.readyState == "complete") || lost_focus_count >
        focus_margin) {
        window.location.href = 'logout.php'; // If this is called no reset is needed
        reset(); // We want to reset just to make sure the location reload is not called.
    }

}
window.addEventListener("focus", windowHasFocus, false);
window.addEventListener("blur", windowLostFocus, false);
window.addEventListener("click", reset, false);
window.addEventListener("mousemove", reset, false);
window.addEventListener("keypress", reset, false);
window.addEventListener("scroll", reset, false);
document.addEventListener("touchMove", reset, false);
document.addEventListener("touchEnd", reset, false);
 </script>
    </body>
</html>
