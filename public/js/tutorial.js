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

  // Call fetchTutorialData function with the constructed URL
  fetchTutorialData(baseUrl, function (data) {
    // Store the title and description in variables
    var title = data.title;
    var description = data.description;
    var videoLink = data.videoLink;

    // Update the content with fetched data
    document.getElementById("tutorialData").innerHTML = `
            <h2>${title}</h2>
            <p>${description}</p>
            <iframe width="560" height="315" src="${videoLink}" frameborder="0" allowfullscreen></iframe>
        `;

    // Set the title dynamically
    document.getElementById("titlePlaceholder").innerText = title;
  });
});
