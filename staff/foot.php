 </div>
 <!-- main content area end -->

 <!-- footer area start-->
 <footer class="noprint">
     <div class="footer-area">
         <p>© Copyright. All rights reserved.</p>
     </div>
 </footer>
 <!-- footer area end-->
 </div>
 <!-- page container area end -->
 <style>
.converter-wrapper {
    margin: 0 auto;
    width: 100%;
    max-width: 600px;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
}

.converter-wrapper input {
    font-family: 'Open Sans', sans-serif;
    font-size: 1em;
    width: 100%;
    text-align: center;
    margin-top: 10px;
    height: 40px;
    box-sizing: border-box;
}

.converter-wrapper span {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: 100%;
}

.converter-wrapper span select {
    background-color: #263648;
    color: #fff;
    font-size: inherit;
    padding: 10px;
    width: 100%;
    border: 0;
    margin: 0;
    border-radius: 0px;
    text-indent: 0.01px;
    text-overflow: '';
    -webkit-appearance: none;
    /* hide default arrow in chrome OSX */
}

.converter-wrapper span::before,
.converter-wrapper span::after {
    content: "";
    position: absolute;
    pointer-events: none;
}

.converter-wrapper span::after {
    /*  Custom dropdown arrow */
    content: "\25BC";
    height: 1em;
    font-size: .625em;
    line-height: 1;
    right: 1.5em;
    top: 50%;
    margin-top: -.5em;
    color: #131B24;
}

.converter-wrapper span::before {
    /*  Custom dropdown arrow cover */
    width: 2.5em;
    right: 0;
    top: 0;
    bottom: 0;
    border-radius: 0;
    background-color: #202E3C;
}

.converter-side-a,
.converter-side-b {


    box-sizing: border-box;
    width: 100%;
}

.converter-equals {

    box-sizing: border-box;

    color: #FFF;
    font-size: 2.4em;
    line-height: 0;
    text-align: center;
}

.converter-side-a {
    padding: 10px;
}

.converter-side-b {
    padding: 10px;
}
 </style>
 <!-- offset area start -->
 <div class="offset-area noprint">
     <div class="offset-close"><i class="ti-close"></i></div>
     <ul class="nav offset-menu-tab">
         <li><a data-toggle="tab" href="#activity">Unit</a></li>
         <li><a class="active" data-toggle="tab" href="#settings">Calculator</a></li>
     </ul>
     <div class="offset-content tab-content">
         <div id="activity" class="tab-pane fade in ">
             <div class="recent-activity">
                 <div class="converter-wrapper">


                     <form name="property_form">
                         <span>
                             <select class="select-property" name="the_menu" size=1
                                 onChange="UpdateUnitMenu(this, document.form_A.unit_menu); UpdateUnitMenu(this, document.form_B.unit_menu)">
                             </select>
                         </span>
                     </form>

                     <div class="converter-side-a">
                         <form name="form_A" onSubmit="return false">
                             <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0"
                                 onKeyUp="CalculateUnit(document.form_A, document.form_B)">
                             <span>
                                 <select name="unit_menu" onChange="CalculateUnit(document.form_B, document.form_A)">
                                 </select>
                             </span>
                         </form>
                     </div> <!-- /converter-side-a -->

                     <div class="converter-equals">
                         <p>=</p>
                     </div> <!-- /converter-side-a -->

                     <div class="converter-side-b">
                         <form name="form_B" onSubmit="return false">
                             <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0"
                                 onkeyup="CalculateUnit(document.form_B, document.form_A)">
                             <span>
                                 <select name="unit_menu" onChange="CalculateUnit(document.form_A, document.form_B)">
                                 </select>
                             </span>
                         </form>
                     </div> <!-- /converter-side-b -->
                 </div><!-- /converter-wrapper -->
             </div>
         </div>
         <div id="settings" class="tab-pane fade in show active">
             <div class="offset-settings">

                 <div class="settings-list">

                     <style>
                     #calc {
                         width: 100%;
                         display: flex;
                         justify-content: center;
                         align-items: center;
                         border: 10px;
                         padding: 2px;
                         background: black;
                     }

                     #contentcf {
                         background: #2c302c;
                         padding: 10px;
                         border-radius: 1px;

                     }

                     #contentcf #cf input {
                         border: 0;
                         outline: 0;
                         width: 50px;
                         height: 50px;
                         border-radius: 8px;
                         font-size: 15px;
                         margin: 10px;
                         cursor: pointer;
                     }

                     #backspace {
                         background-color: rgb(237, 89, 30);
                         color: white;
                     }

                     #res {
                         padding: 10px;
                         background: green;
                         color: white;
                     }

                     #clear {
                         background-color: rgb(237, 89, 30);
                         color: white;
                     }

                     #cf #output {
                         display: flex;
                         justify-content: flex-end;
                         margin: 15px 0;
                     }

                     #cf #output input {
                         text-align: right;
                         flex: 1;
                         font-size: 25px;
                     }
                     </style>


                     <div id="calc">
                         <div id="contentcf">
                             <form id="cf">
                                 <div id="output">
                                     <input type="text" id='res'>
                                 </div>
                                 <div class="btn">
                                     <input type="button" value='C' onclick="Clear()" id="clear">
                                     <input type="button" value='←' onclick="Back()" id="backspace">
                                     <input type="button" value='%' onclick="Solve('%')">
                                     <input type="button" value='/' onclick="Solve('/')">
                                     <br>
                                     <input type="button" value='7' onclick="Solve('7')">
                                     <input type="button" value='8' onclick="Solve('8')">
                                     <input type="button" value='9' onclick="Solve('9')">
                                     <input type="button" value='x' onclick="Solve('*')">
                                     <br>
                                     <input type="button" value='4' onclick="Solve('4')">
                                     <input type="button" value='5' onclick="Solve('5')">
                                     <input type="button" value='6' onclick="Solve('6')">
                                     <input type="button" value='-' onclick="Solve('-')">
                                     <br>
                                     <input type="button" value='1' onclick="Solve('1')">
                                     <input type="button" value='2' onclick="Solve('2')">
                                     <input type="button" value='3' onclick="Solve('3')">
                                     <input type="button" value='+' onclick="Solve('+')">
                                     <br>
                                     <input type="button" value='00' onclick="Solve('00')">
                                     <input type="button" value='0' onclick="Solve('0')">
                                     <input type="button" value='.' onclick="Solve('.')">
                                     <input type="button" value='=' onclick="Result()">
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- offset area end -->
 <!-- jquery latest version -->
 <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
 <!-- bootstrap 4 js -->
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/metisMenu.min.js"></script>
 <script src="assets/js/jquery.slimscroll.min.js"></script>
 <script src="assets/js/jquery.slicknav.min.js"></script>

 <!-- start chart js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <!-- start highcharts js -->
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <!-- start zingchart js -->
 <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
 <script>
zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
 </script>
 <!-- all line chart activation -->
 <script src="assets/js/line-chart.js"></script>
 <!-- all pie chart -->
 <script src="assets/js/pie-chart.js"></script>
 <!-- others plugins -->
 <script src="assets/js/plugins.js"></script>
 <script src="assets/js/scripts.js"></script>

 <script>
// Refresh Rate is how often you want to refresh the page 
// bassed off the user inactivity. 
var refresh_rate = 25; //<-- In seconds, change to your needs
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
    updateVisualTimer(' ');
}

function updateVisualTimer(value) {
    var element = document.getElementById('refreshTimer');



    if (value) {

        element.innerHTML = value
    } else if (has_focus) {
        element.innerHTML = '!'
    } else if (last_user_action >= refresh_rate) {
        element.innerHTML = '?';
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
    if (last_user_action > 5) {
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



 <script>
var property = new Array();
var unit = new Array();
var factor = new Array();

property[1] = "Acceleration";
unit[1] = new Array("Meter/sq.sec (m/sec^2)", "Foot/sq.sec (ft/sec^2)", "G (g)", "Galileo (gal)",
    "Inch/sq.sec (in/sec^2)");
factor[1] = new Array(1, .3048, 9.806650, .01, 2.54E-02);

property[0] = "Area";
unit[0] = new Array("Square meter (m^2)", "Acre (acre)", "Are", "Barn (barn)", "Hectare", "Rood", "Square centimeter",
    "Square kilometer", "Circular mil", "Square foot (ft^2)", "Square inch (in^2)", "Square mile (mi^2)",
    "Square yard (yd^2)");
factor[0] = new Array(1, 4046.856, 100, 1E-28, 10000, 1011.71413184285, .0001, 1000000, 5.067075E-10, 9.290304E-02,
    6.4516E-04, 2589988, .8361274);

property[2] = "Torque";
unit[2] = new Array("Newton-meter (N m)", "Dyne-centimeter(dy cm)", "Kgrf-meter (kgf m)", "lbf-inch (lbf in)",
    "lbf-foot (lbf ft)");
factor[2] = new Array(1, .0000001, 9.806650, .1129848, 1.355818);

property[3] = "Electricity";
unit[3] = new Array("Coulomb (Cb)", "Abcoulomb", "Ampere hour (A hr)", "Faraday (F)", "Statcoulomb",
    "Millifaraday (mF)", "Microfaraday (mu-F)", "Picofaraday (pF)");
factor[3] = new Array(1, 10, 3600, 96521.8999999997, .000000000333564, 96.5219, 9.65219E-02, 9.65219E-05);

property[4] = "Energy";
unit[4] = new Array("Joule (J)", "BTU (mean)", "BTU (thermochemical)", "Calorie (SI) (cal)", "Calorie (mean)(cal)",
    "Calorie (thermo)", "Electron volt (eV)", "Erg (erg)", "Foot-pound force", "Foot-poundal", "Horsepower-hour",
    "Kilocalorie (SI)(kcal)", "Kilocalorie (mean)(kcal)", "Kilowatt-hour (kW hr)", "Ton of TNT",
    "Volt-coulomb (V Cb)", "Watt-hour (W hr)", "Watt-second (W sec)");
factor[4] = new Array(1, 1055.87, 1054.35, 4.1868, 4.19002, 4.184, 1.6021E-19, .0000001, 1.355818, 4.214011E-02,
    2684077.3, 4186.8, 4190.02, 3600000, 4.2E9, 1, 3600, 1);

property[5] = "Force";
unit[5] = new Array("Newton (N)", "Dyne (dy)", "Kilogram force (kgf)", "Kilopond force (kpf)", "Kip (k)",
    "Ounce force (ozf)", "Pound force (lbf)", "Poundal");
factor[5] = new Array(1, .00001, 9.806650, 9.806650, 4448.222, .2780139, .4535924, .138255);

property[6] = "Force / Length";
unit[6] = new Array("Newton/meter (N/m)", "Pound force/inch (lbf/in)", "Pound force/foot (lbf/ft)");
factor[6] = new Array(1, 175.1268, 14.5939);

property[7] = "Length";
unit[7] = new Array("Meter (m)", "Angstrom (A')", "Astronomical unit (AU)", "Caliber (cal)", "Centimeter (cm)",
    "Kilometer (km)", "Ell", "Em", "Fathom", "Furlong", "Fermi (fm)", "Foot (ft)", "Inch (in)", "League (int'l)",
    "League (UK)", "Light year (LY)", "Micrometer (mu-m)", "Mil", "Millimeter (mm)", "Nanometer (nm)",
    "Mile (int'l nautical)", "Mile (UK nautical)", "Mile (US nautical)", "Mile (US statute)", "Parsec",
    "Pica (printer)", "Picometer (pm)", "Point (pt)", "Rod", "Yard (yd)");
factor[7] = new Array(1, 1E-10, 1.49598E11, .000254, .01, 1000, 1.143, 4.2323E-03, 1.8288, 201.168, 1E-15, .3048, .0254,
    5556, 5556, 9.46055E+15, .000001, .0000254, .001, 1E-9, 1852, 1853.184, 1852, 1609.344, 3.08374E+16,
    4.217518E-03, 1E-12, .0003514598, 5.0292, .9144);

property[8] = "Light";
unit[8] = new Array("Lumen/sq.meter (Lu/m^2)", "Lumen/sq.centimeter", "Lumen/sq.foot", "Foot-candle (ft-cdl)",
    "Foot-lambert", "Candela/sq.meter", "Candela/sq.centimeter", "Lux (lux)", "Phot");
factor[8] = new Array(1, 10000, 10.76391, 10.76391, 10.76391, 3.14159250538575, 31415.9250538576, 1, 10000);

property[9] = "Mass";
unit[9] = new Array("Kilogram (kgr)", "Gram (gr)", "Milligram (mgr)", "Microgram (mu-gr)", "Carat (metric)(ct)",
    "Hundredweight (long)", "Hundredweight (short)", "Pound mass (lbm)", "Pound mass (troy)", "Ounce mass (ozm)",
    "Ounce mass (troy)", "Slug", "Ton (assay)", "Ton (long)", "Ton (short)", "Ton (metric)", "Tonne");
factor[9] = new Array(1, .001, 1e-6, .000000001, .0002, 50.80235, 45.35924, .4535924, .3732417, .02834952, .03110348,
    14.5939, .02916667, 1016.047, 907.1847, 1000, 1000);

property[10] = "Mass Flow";
unit[10] = new Array("Kilogram/second (kgr/sec)", "Pound mass/sec (lbm/sec)", "Pound mass/min (lbm/min)");
factor[10] = new Array(1, .4535924, .007559873);

property[11] = "Density & Mass capacity";
unit[11] = new Array("Kilogram/cub.meter", "Grain/galon", "Grams/cm^3 (gr/cc)", "Pound mass/cubic foot",
    "Pound mass/cubic-inch", "Ounces/gallon (UK,liq)", "Ounces/gallon (US,liq)", "Ounces (mass)/inch",
    "Pound mass/gal (UK,liq)", "Pound mass/gal (US,liq)", "Slug/cubic foot", "Tons (long,mass)/cub.yard");
factor[11] = new Array(1, .01711806, 1000, 16.01846, 27679.91, 6.236027, 7.489152, 1729.994, 99.77644, 119.8264,
    515.379, 1328.939);

property[12] = "Power";
unit[12] = new Array("Watt (W)", "Kilowatt (kW)", "Megawatt (MW)", "Milliwatt (mW)", "BTU (SI)/hour",
    "BTU (thermo)/second", "BTU (thermo)/minute", "BTU (thermo)/hour", "Calorie (thermo)/second",
    "Calorie (thermo)/minute", "Erg/second", "Foot-pound force/hour", "Foot-pound force/minute",
    "Foot-pound force/second", "Horsepower(550 ft lbf/s)", "Horsepower (electric)", "Horsepower (boiler)",
    "Horsepower (metric)", "Horsepower (UK)", "Kilocalorie (thermo)/min", "Kilocalorie (thermo)/sec");
factor[12] = new Array(1, 1000, 1000000, .001, .2930667, 1054.35, 17.5725, .2928751, 4.184, 6.973333E-02, .0000001,
    .0003766161, .02259697, 1.355818, 745.7, 746, 9809.5, 735.499, 745.7, 69.7333, 4184);

property[13] = "Pressure & Stress";
unit[13] = new Array("Newton/sq.meter", "Atmosphere (normal)", "Atmosphere (techinical)", "Bar",
    "Centimeter mercury(cmHg)", "Centimeter water (4'C)", "Decibar", "Kgr force/sq.centimeter",
    "Kgr force/sq.meter", "Kip/square inch", "Millibar", "Millimeter mercury(mmHg)", "Pascal (Pa)",
    "Kilopascal (kPa)", "Megapascal (Mpa)", "Poundal/sq.foot", "Pound-force/sq.foot", "Pound-force/sq.inch (psi)",
    "Torr (mmHg,0'C)");
factor[13] = new Array(1, 101325, 98066.5, 100000, 1333.22, 98.0638, 10000, 98066.5, 9.80665, 6894757, 100, 133.3224, 1,
    1000, 1000000, 47.88026, 47.88026, 6894.757, 133.322);


property[14] = "Temperature";
unit[14] = new Array("Degrees Celsius ('C)", "Degrees Fahrenheit ('F)", "Degrees Kelvin ('K)", "Degrees Rankine ('R)");
factor[14] = new Array(1, 0.555555555555, 1, 0.555555555555);
tempIncrement = new Array(0, -32, -273.15, -491.67);

property[15] = "Time";
unit[15] = new Array("Second (sec)", "Day (mean solar)", "Day (sidereal)", "Hour (mean solar)", "Hour (sidereal)",
    "Minute (mean solar)", "Minute (sidereal)", "Month (mean calendar)", "Second (sidereal)", "Year (calendar)",
    "Year (tropical)", "Year (sidereal)");
factor[15] = new Array(1, 8.640E4, 86164.09, 3600, 3590.17, 60, 60, 2628000, .9972696, 31536000, 31556930, 31558150);

property[16] = "Velocity & Speed";
unit[16] = new Array("Meter/second (m/sec)", "Foot/minute (ft/min)", "Foot/second (ft/sec)", "Kilometer/hour (kph)",
    "Knot (int'l)", "Mile (US)/hour (mph)", "Mile (nautical)/hour", "Mile (US)/minute", "Mile (US)/second",
    "Speed of light (c)", "Mach (STP)(a)");
factor[16] = new Array(1, 5.08E-03, .3048, .2777778, .5144444, .44707, .514444, 26.8224, 1609.344, 299792458,
    340.0068750);

property[17] = "Viscosity";
unit[17] = new Array("Newton-second/meter", "Centipoise", "Centistoke", "Sq.foot/second", "Poise",
    "Poundal-second/sq.foot", "Pound mass/foot-second", "Pound force-second/sq.foot", "Rhe", "Slug/foot-second",
    "Stoke");
factor[17] = new Array(1, .001, .000001, 9.290304E-02, .1, 1.488164, 1.488164, 47.88026, 10, 47.88026, .0001);

property[18] = "Volume & Capacity";
unit[18] = new Array("Cubic Meter (m^3)", "Cubic centimeter", "Cubic millimeter", "Acre-foot", "Barrel (oil)",
    "Board foot", "Bushel (US)", "Cup", "Fluid ounce (US)", "Cubic foot", "Gallon (UK)", "Gallon (US,dry)",
    "Gallon (US,liq)", "Gill (UK)", "Gill (US)", "Cubic inch (in^3)", "Liter (new)", "Liter (old)",
    "Ounce (UK,fluid)", "Ounce (US,fluid)", "Peck (US)", "Pint (US,dry)", "Pint (US,liq)", "Quart (US,dry)",
    "Quart (US,liq)", "Stere", "Tablespoon", "Teaspoon", "Ton (register)", "Cubic yard");
factor[18] = new Array(1, .000001, .000000001, 1233.482, .1589873, .002359737, .03523907, .0002365882, .00002957353,
    .02831685, .004546087, .004404884, .003785412, .0001420652, .0001182941, .00001638706, .001, .001000028,
    .00002841305, .00002957353, 8.8097680E-03, .0005506105, 4.7317650E-04, .001101221, 9.46353E-04, 1, .00001478676,
    .000004928922, 2.831685, .7645549);

property[19] = "Volume Flow";
unit[19] = new Array("Cubic meter/second", "Cubic foot/second", "Cubic foot/minute", "Cubic inches/minute",
    "Gallons (US,liq)/minute)");
factor[19] = new Array(1, .02831685, .0004719474, 2.731177E-7, 6.309020E-05);



function UpdateUnitMenu(propMenu, unitMenu) {
    // Updates the units displayed in the unitMenu according to the selection of property in the propMenu.
    var i;
    i = propMenu.selectedIndex;
    FillMenuWithArray(unitMenu, unit[i]);
}

function FillMenuWithArray(myMenu, myArray) {
    // Fills the options of myMenu with the elements of myArray.
    // !CAUTION!: It replaces the elements, so old ones will be deleted.
    var i;
    myMenu.length = myArray.length;
    for (i = 0; i < myArray.length; i++) {
        myMenu.options[i].text = myArray[i];
    }
}

function CalculateUnit(sourceForm, targetForm) {
    // A simple wrapper function to validate input before making the conversion
    var sourceValue = sourceForm.unit_input.value;

    // First check if the user has given numbers or anything that can be made to one...
    sourceValue = parseFloat(sourceValue);
    if (!isNaN(sourceValue) || sourceValue == 0) {
        // If we can make a valid floating-point number, put it in the text box and convert!
        sourceForm.unit_input.value = sourceValue;
        ConvertFromTo(sourceForm, targetForm);
    }
}

function ConvertFromTo(sourceForm, targetForm) {
    // Converts the contents of the sourceForm input box to the units specified in the targetForm unit menu and puts the result in the targetForm input box.In other words, this is the heart of the whole script...
    var propIndex;
    var sourceIndex;
    var sourceFactor;
    var targetIndex;
    var targetFactor;
    var result;

    // Start by checking which property we are working in...
    propIndex = document.property_form.the_menu.selectedIndex;

    // Let's determine what unit are we converting FROM (i.e. source) and the factor needed to convert that unit to the base unit.
    sourceIndex = sourceForm.unit_menu.selectedIndex;
    sourceFactor = factor[propIndex][sourceIndex];

    // Cool! Let's do the same thing for the target unit - the units we are converting TO:
    targetIndex = targetForm.unit_menu.selectedIndex;
    targetFactor = factor[propIndex][targetIndex];

    // Simple, huh? let's do the math: a) convert the source TO the base unit: (The input has been checked by the CalculateUnit function).

    result = sourceForm.unit_input.value;
    // Handle Temperature increments!
    if (property[propIndex] == "Temperature") {
        result = parseFloat(result) + tempIncrement[sourceIndex];
    }
    result = result * sourceFactor;

    // not done yet... now, b) use the targetFactor to convert FROM the base unit
    // to the target unit...
    result = result / targetFactor;
    // Again, handle Temperature increments!
    if (property[propIndex] == "Temperature") {
        result = parseFloat(result) - tempIncrement[targetIndex];
    }

    // Ta-da! All that's left is to update the target input box:
    targetForm.unit_input.value = result;
}

// This fragment initializes the property dropdown menu using the data defined above in the 'Data Definitions' section
window.onload = function(e) {
    FillMenuWithArray(document.property_form.the_menu, property);
    UpdateUnitMenu(document.property_form.the_menu, document.form_A.unit_menu);
    UpdateUnitMenu(document.property_form.the_menu, document.form_B.unit_menu)
}

// Restricting textboxes to accept numbers + navigational keys only
document.getElementByClass('numbersonly').addEventListener('keydown', function(e) {
    var key = e.keyCode ? e.keyCode : e.which;

    if (!([8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
            (key == 65 && (e.ctrlKey || e.metaKey)) || // Select All 
            (key == 67 && (e.ctrlKey || e.metaKey)) || // Copy
            (key == 86 && (e.ctrlKey || e.metaKey)) || // Paste
            (key >= 35 && key <= 40) || // End, Home, Arrows
            (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) || // Numeric Keys
            (key >= 96 && key <= 105) // Numpad
            (key == 190) // Numpad
        )) e.preventDefault();
});
 </script>



 <script>
function Solve(val) {
    var v = document.getElementById('res');
    v.value += val;
}

function Result() {
    var num1 = document.getElementById('res').value;
    try {
        var num2 = eval(num1.replace('x', '*'));
        document.getElementById('res').value = num2;
    } catch {
        document.getElementById('res').value = 'Error';
    }
}

function Clear() {
    var inp = document.getElementById('res');
    inp.value = '';
}

function Back() {
    var ev = document.getElementById('res');
    ev.value = ev.value.slice(0, -1);
}
document.addEventListener('keydown', function(event) {
    const key = event.key;
    const validKeys = '0123456789+-*/.%';
    if (validKeys.includes(key)) {
        Solve(key === '*' ? 'x' : key);
    } else if (key === 'Enter') {
        Result();
    } else if (key === 'Backspace') {
        Back();
    } else if (key.toLowerCase() === 'c') {
        Clear();
    }
});
 </script>
 </body>

 </html>