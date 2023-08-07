/* :: DATE PICKER
 ------------------------------------------------ */

// :: DAY
var $select_day = $(".select_day");
for(var i = 1; i < 32; i++) {
  var day_number = i;
  $('<option>')
    .val(('0' + day_number).slice(-2))   // set the value
    .text(i)    // set the text in in the <option>
    .appendTo($select_day);
}


// :: MONTH
var $select_month = $(".select_month");
var options = ["01","02","03","04","05","06", "07","08","09","10","11","12"];
for(var i = 0; i < options.length; i++) {
  var month_number = i + 1;
  $('<option>')
    .val(options[i])          // set the value
    .text(options[i])    // set the text in in the <option>
    .appendTo($select_month);
}


// :: YEAR
var $select_year = $(".select_year");

// Get the current year
var year = new Date().getFullYear();
var $select_year = $('.select_year').empty();

for(var i = 0; i < 99; i++) {
  $('<option>')
    .val(year - i)     // set the value
    .text(year - i)    // set the text in in the <option>
    .appendTo($select_year);
}
