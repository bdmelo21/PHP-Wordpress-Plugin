function change_title_action_js() {
  jQuery(document).ready(function ($) {
    var data = {
      action: "my_action",
      url: "Func.php",
      whatever: ajax_object.we_value,
    };
    jQuery.post(ajax_object.ajax_url, data, function (response) {
      console.log(response);
      if (response == 0) {
        alert("No changes were made.");
      } else if (response == 10) {
        alert("Changes were made.");
      }
    });
  });
}
