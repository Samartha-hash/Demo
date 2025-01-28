document.addEventListener("DOMContentLoaded", function () {
    // Attach an event listener to the search button
    document.getElementById("searchButton").addEventListener("click", function () {
      const monthInput = document.getElementById("month").value.trim();
      const locationInput = document.getElementById("location").value.trim();
      const resultDiv = document.getElementById("result");
  
      // Helper function to format input (capitalize first letter, lowercase the rest)
      const formatInput = (input) => {
        return input.charAt(0).toUpperCase() + input.slice(1).toLowerCase();
      };
  
      // Format the inputs
      const month = formatInput(monthInput);
      const location = formatInput(locationInput);
  
      // Validate inputs
      if (!month || !location) {
        resultDiv.innerHTML = "<p>Please enter both the month and location.</p>";
        return;
      }
  
      // Cultural activities data
      const activities = {
        January: {
          Kathmandu: {
            event: "Tamu Lhosar (Gurung New Year)",
            description: "Tamu Lhosar, or Gurung New Year, is a vibrant festival celebrated by the Gurung community in Nepal, typically in January. It involves traditional dances, cultural performances, religious rituals, and feasts featuring Gurung cuisine. The celebration marks the start of the new year, bringing communities together for spiritual reflection, cultural expression, and joyous meals. It’s a lively event that showcases the rich heritage of the Gurung people, attracting both locals and tourists",
            images: [
              "Tamu-Losar-2.jpg", // Replace with actual image URLs
              "Tamu Lhosar.jpg",
              "Tamu losar 3.jpg"
            ]
          },
          Pokhara: {
            event: "Tamu Lhosar (Gurung New Year)",
            description: "In Pokhara, Gurung communities celebrate their New Year with traditional dances and cultural performances.",
            images: [
              "image1.jpg", 
              "image2.jpg",
              "image3.jpg"
            ]
          }
        },
        // Add other months and locations here...
      };
  
      // Fetch cultural activities for the given month and location
      const monthActivities = activities[month];
      if (monthActivities && monthActivities[location]) {
        const activity = monthActivities[location];
        resultDiv.innerHTML = `
          <p><strong>Cultural Activities in ${location} during ${month}:</strong></p>
          <p><strong>Event:</strong> ${activity.event}</p>
          <p><strong>Description:</strong> ${activity.description}</p>
          <div class="result-images">
            ${activity.images.map(img => `<img src="${img}" alt="${activity.event}">`).join('')}
          </div>
        `;
      } else {
        resultDiv.innerHTML = `
          <p>No cultural activities found for ${location} in ${month}. 
          Please try another combination.</p>`;
      }
    });
  });
  