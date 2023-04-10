<style>
.suggestions-container {
  position: absolute;
  top: 110%;
  left: 10px;
  width: fit-content;
  background-color: #fff;
  border: 1px solid #d4d4d4;
  border-top: none;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  max-height: 100vh;
  overflow-y: auto;
  z-index: 1;
  font-size: 15px;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
  border-bottom-left-radius:10px;
  border-bottom-right-radius:10px;
}
</style>
<section id="content">

	<!-- NAVBAR -->
	<nav>
		
    <form action="client.php" method="POST" style="margin-bottom: 3%; height: fit-content;">
  <div class="form-input">
    <input type="text" name="search" id="search" placeholder="Search data" autocomplete="off" required>
    <button type="submit" name="submit" class="search-btn" value="search"><i class='bx bx-search'></i></button>
  </div>
  <div id="suggestions" class="suggestions-container" style="overflow:hidden;">
  

  </div> <!-- container to display suggestions -->
</form>
		<input type="checkbox" id="switch-mode" hidden>
		<label for="switch-mode" class="switch-mode"></label>

		<!-- Bell Icon -->
		<a href="#" class="notification">
			<i class='bx bxs-bell'></i>
		</a>

		<!--Message-->
		<a href="" class="message">
			<i class='bx bxs-message-dots'></i>
		</a>
	</nav>
	<!-- NAVBAR -->
</section>



<script>
  // get references to the input field and the suggestions container
  const searchInput = document.getElementById('search');
  const suggestionsContainer = document.getElementById('suggestions');

  // add an event listener to the input field to listen for keyup events
  searchInput.addEventListener('keyup', function() {
    const searchTerm = searchInput.value; // get the current value of the input field
    if (searchTerm.length >=1) { // only fetch suggestions if the search term is at least 3 characters long
      // send an AJAX request to fetch suggestions based on the search term
      const xhr = new XMLHttpRequest();
      xhr.open('GET', `suggestions.php?q=${searchTerm}`, true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          // display the suggestions in the container
          suggestionsContainer.innerHTML = xhr.responseText;

          // add event listeners to the suggestion options to listen for click events
         // add event listeners to the suggestion options to listen for click events
const suggestionOptions = suggestionsContainer.querySelectorAll('a');
suggestionOptions.forEach(function(option) {
  option.addEventListener('click', function(event) {
    event.preventDefault(); // prevent the default link behavior
    const clientId = this.dataset.clientId; // get the client ID from the data attribute
    window.location.href = `view_clients.php?client_id=${clientId}`; // redirect the user to the Client.php page with the client ID as a query parameter
  });
});

        }
      };
      xhr.send();
    } else {
      // if the search term is too short, clear the suggestions container
      suggestionsContainer.innerHTML = '';
    }
  });
</script>

<script>
const switchMode = document.getElementById('switch-mode');
const storedTheme = localStorage.getItem('theme');
const storedMode = localStorage.getItem('switch-mode');

if (storedTheme) {
  document.body.classList.add(storedTheme);
}
if (storedMode) {
  switchMode.checked = storedMode === 'checked';
}

switchMode.addEventListener('change', function () {
  if (this.checked) {
    document.body.classList.remove('light');
    document.body.classList.add('dark');
    localStorage.setItem('theme', 'dark');
    localStorage.setItem('switch-mode', 'checked');
  } else {
    document.body.classList.remove('dark');
    document.body.classList.add('light');
    localStorage.setItem('theme', 'light');
    localStorage.setItem('switch-mode', 'unchecked');
  }
});
</script> 
