function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }

  var select = document.getElementById('konsultant');
  var text = select.options[select.selectedIndex].text;
  console.log(text);


// Define selector for selecting
        // anchor links with the hash
        let anchorSelector = 'a[href^="biznes.html"]';
     
        $(anchorSelector).on('click', function (e) {
         
            // Prevent scrolling if the
            // hash value is blank
            e.preventDefault();
     
            // Get the destination to scroll to
            // using the hash property
            let destination = $(this.hash);
     
            // Get the position of the destination
            // using the coordinates returned by
            // offset() method
            let scrollPosition
                = destination.offset().top;
     
            // Specify animation duration
            let animationDuration = 500;
     
            // Animate the html/body with
            // the scrollTop() method
            $('html, body').animate({
                scrollTop: scrollPosition
            }, animationDuration);