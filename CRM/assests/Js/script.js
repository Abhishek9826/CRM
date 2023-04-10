const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})




//side bar toggle
if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');
const storedTheme = localStorage.getItem('theme');

if (storedTheme) {
  document.body.classList.add(storedTheme);
}

switchMode.addEventListener('change', function () {
  if (this.checked) {
    document.body.classList.remove('light');
    document.body.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.body.classList.remove('dark');
    document.body.classList.add('light');
    localStorage.setItem('theme', 'light');
  }
});



// Select all the value container elements
// let valueContainers = document.querySelectorAll('.value-container');
// let progressBars = document.querySelectorAll('.circular-progress');
// let data = [
//   { progression: 25, speed: 20 },
//   { progression: 50, speed: 20 },
//   { progression: 75, speed: 20 },
//   { progression: 60, speed: 20 },
//   /*{ progression: 60, speed: 50 }*/
// ];

// for (let i = 0; i < data.length; i++) {
//     // set the progression level of the progress bar based on the data
//     let progressValue = 0;
//     let progressEndValue = data[i].progression;
//     let speed = data[i].speed;
//     let progress = setInterval(() => {
//     progressValue++;
//     valueContainers[i].textContent = `${progressValue}%`;
//     progressBars[i].style.background = `conic-gradient(
//       #4d5bf9 ${progressValue * 3.6}deg,
//       #cadcff ${progressValue * 3.6}deg
//     )`;
//     if (progressValue == progressEndValue) {
//         clearInterval(progress);
//     }
//     }, speed);
// }


//form ki js
function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

// function validateForm(){
//     var returnval = true;
//     clearErrors();

//     //perform validation and if validation fails, set the value of returnval to false
//     var name = document.forms['myForm']["fname"].value;
//     if (name.length<5){
//         seterror("name", "*Length of name is too short");
//         returnval = false;
//     }

//     if (name.length == 0){
//         seterror("name", "*Length of name cannot be zero!");
//         returnval = false;
//     }

//     var email = document.forms['myForm']["femail"].value;
//     if (email.length>15){
//         seterror("email", "*Email length is too long");
//         returnval = false;
//     }

//     var phone = document.forms['myForm']["fphone"].value;
//     if (phone.length != 10){
//         seterror("phone", "*Phone number should be of 10 digits!");
//         returnval = false;
//     }

//     var password = document.forms['myForm']["fpass"].value;
//     if (password.length < 6){

//         // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
//         seterror("pass", "*Password should be atleast 6 characters long!");
//         returnval = false;
//     }

//     var cpassword = document.forms['myForm']["fcpass"].value;
//     if (cpassword != password){
//         seterror("cpass", "*Password and Confirm password should match!");
//         returnval = false;
//     }

//     return returnval;
// }



/*zip file validation*/
// document.querySelector('input[type="file"]').addEventListener('change', function() {
//     var file = this.files[0];
//     if (file.size > 1048576) { // 1 MB in bytes
//       alert('File size exceeds limit of 1 MB');
//       this.value = '';
//     } else if (!file.type.startsWith('zip')) {
//       alert('Invalid file type, please select a zip file');
//       this.value = '';
//     }
//   });


  //Pan ki samasya k samadhan
  // function shiftInput(event, nextInput) {
  //   if (event.target.value.length === 3) {
  //     document.querySelector("#" + nextInput).focus();
  //   }
  // }
  
// let progressBar = document.querySelector("#bar");
// let value1 = 75; // set the initial value

// progressBar.style.width = value1 + "%";

// if (value1 < 50) {
//   progressBar.style.backgroundColor = "red";
// } else {
//   progressBar.style.backgroundColor = "green";
// }


// let progressBar = document.querySelector(".progressbar");
// let value = Math.floor(Math.random() * 100 + 1); // generates a random value between 1 and 100

// progressBar.setAttribute("aria-valuenow", value);
// progressBar.style.width = value + "%";

// if (value < 50) {
//   progressBar.style.backgroundColor = "green";
// } else {
//   progressBar.style.backgroundColor = "red";
// }

// window.onload = function () {
//   let bar = document.querySelectorAll('.bar');
//   bar.forEach((progress) => {
//     let value = progress.getAttribute('data-value');
//     progress.style.width = `${value}%`;
//     let count = 0;
//     let progressAnimation = setInterval(() => {
//       count++;
//       progress.setAttribute('data-text', `${count}%`);
//       if (count >= value) {
//         clearInterval(progressAnimation);
//       }
//     }, 15);
//   });
// };