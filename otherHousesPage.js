//Link to dynamic hide and show reference page: https://stackoverflow.com/questions/51210764/dynamically-show-and-hide-fields-based-on-select-box-selection-for-loop/51211116
$('#select').on('change', e => {
    $('input[type="image"]').hide();
    
    let value = e.target.value;
    let showInputs = $(`input[id^="${value}"]`);
    
    showInputs.show();
  });

$(document).ready(function() { 
    $('input[type="image"]').hide();
  });
//End to link to dynamic hide and show reference page: https://stackoverflow.com/questions/51210764/dynamically-show-and-hide-fields-based-on-select-box-selection-for-loop/51211116