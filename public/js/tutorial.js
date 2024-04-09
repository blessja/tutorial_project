document.addEventListener("DOMContentLoaded", function () {
  // Function to make AJAX request
  function fetchTutorialData(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          callback(JSON.parse(xhr.responseText));
        } else {
          console.error(
            "Error fetching tutorial data. Status code: " + xhr.status
          );
        }
      }
    };
    xhr.open("GET", url, true);
    xhr.send();
  }

  // Function to update the tutorial data
  function updateTutorialData(data) {
    // Update the relevant parts of your HTML with fetched data
    document.getElementById("tutorialTitle").innerText = data.title;
    document.getElementById("tutorialTitle2").innerText = data.title_2;
    document.getElementById("tutorialDescription").innerText = data.description;
  }

  // Load tutorial data when the page loads
  fetchTutorialData(baseUrl, updateTutorialData);
});
