function myfun() {
    const mnu = document.getElementById("navbarNav");
    var pos = -100;
    var id = setInterval(frame, 1);
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos++;
        mnu.style.right = pos + "px";
        // mnu.style.right = pos + "px";
      }
    }
  
    if (mnu.style.display === "block") {
      mnu.style.display = "none";
    } else {
      mnu.style.display = "block";
    }
  }