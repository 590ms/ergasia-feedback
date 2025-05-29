document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    const message = document.querySelector("textarea[name='message']").value.trim();
    if (message === "") {
      alert("Please enter your message before submitting.");
      event.preventDefault(); // Αποτρέπει την αποστολή
    }
  });
  