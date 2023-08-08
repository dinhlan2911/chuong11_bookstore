function changeStatus(url) {
  $.get(
    url,
    function (data) {
      var element = "a#status-" + data["id"];
      var classRemove = "publish";
      var classAdd = "unpublish";
      if (data["status"] == 1) {
        classRemove = "unpublish";
        classAdd = "publish";
      }
      $(element).attr(
        "href",
        "javascript:changeStatus('" + data["link"] + "')"
      );
      $(element + " span")
        .removeClass(classRemove)
        .addClass(classAdd);
    },
    "json"
  );
}

function changeGroupACP(url) {
  $.get(
    url,
    function (data) {
      var element = "a#group-acp-" + data["id"];
      var classRemove = "publish";
      var classAdd = "unpublish";
      if (data["group_acp"] == 1) {
        classRemove = "unpublish";
        classAdd = "publish";
      }
      $(element).attr(
        "href",
        "javascript:changeGroupACP('" + data["link"] + "')"
      );
      $(element + " span")
        .removeClass(classRemove)
        .addClass(classAdd);
    },
    "json"
  );
}

$(document).ready(function () {
  console.log("sdd");
});
