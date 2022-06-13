// Read more or less more

function readMoreLess() {
  const dots = document.getElementById("dots");
  const more = document.getElementById("more");
  const read = document.getElementById("read");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    read.innerHTML = "Read more";
    more.style.display = "none";
  } else {
    dots.style.display = "none";
    read.innerHTML = "Read less";
    more.style.display = "inline";
  }
}
