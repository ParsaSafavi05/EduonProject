$(document).ready(function () {
  $("#exampleModal").on("show.bs.modal", function (e) {
    if (localStorage.getItem("hideNewsletterModal") === "true") {
      e.preventDefault();
      console.log("User has opted out. Preventing modal from being shown.");
    }
  });

  $("#exampleModal").on("shown.bs.modal", function () {
    if (localStorage.getItem("hideNewsletterModal") === "true") {
      $(this).modal("hide");
      console.log("User has opted out. Closing the modal immediately.");
    }
  });

  if (localStorage.getItem("hideNewsletterModal") !== "true") {
    $("#exampleModal").modal("show");
  }

  $("#chb1").on("change", function () {
    if ($(this).is(":checked")) {
      localStorage.setItem("hideNewsletterModal", "true");
    }
  });

  $(".close").on("click", function () {
    if ($("#chb1").is(":checked")) {
      localStorage.setItem("hideNewsletterModal", "true");
    }
  });
});

function submitForm() {
  document.getElementById("searchForm").submit();
}
