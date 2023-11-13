$(document).ready(function () {
  $("#accessCodeForm").submit(function (event) {
    event.preventDefault();
    var accessCode = $("#accessCode").val();

    $.ajax({
      type: "POST",
      url: "dades.php",
      data: {
        accessCode: 1234,
      },
      dataType: "json",
      success: function (response) {
        if (response.success) {
          location.reload();
        } else {
          alert(response.message);
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
});
