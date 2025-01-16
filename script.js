document.addEventListener('DOMContentLoaded', () => {
  const eventList = document.getElementById('event-list');

  fetch('server/getEvents.php')
    .then(response => response.json())
    .then(events => {
      events.forEach(event => {
        const eventDiv = document.createElement('div');
        eventDiv.classList.add('event');
        eventDiv.innerHTML = `
          <h2>${event.title}</h2>
          <p>${event.description}</p>
          <p><strong>Date:</strong> ${event.date}</p>
          <p><strong>Time:</strong> ${event.time}</p>
          <p><strong>Location:</strong> ${event.location}</p>
        `;
        eventList.appendChild(eventDiv);
      });
    })
    .catch(err => console.error('Error fetching events:', err));
});
