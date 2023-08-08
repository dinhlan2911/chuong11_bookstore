function changeStatus(url) {
  $.get(url, function (data) {
    console.log(data);
  });
}
