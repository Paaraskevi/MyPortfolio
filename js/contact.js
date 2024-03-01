
// // let form = document.querySelector("form");

// // form.addEventListener("submit", function (event) {
// //     event.preventDefault();

// //     let isSuccess = true;

// //     if (isSuccess) {

// //         showMessage("success", "Form submitted successfully!");
// //         form.reset();

// //         showMessage("error", "Failed to submit form. Please try again.");
// //     }
// // });


// // function showMessage(type, message) {
// //     let messageBox = document.createElement("div");
// //     messageBox.classList.add("message", type);
// //     messageBox.textContent = message;
// //     document.body.appendChild(messageBox);

// //     setTimeout(function () {
// //         messageBox.remove();
// //     }, 3000);
// // }


// const form = document.getElementById('contact-form');
// const result = document.getElementById('result');

// form.addEventListener('submit', function(e) {
//   e.preventDefault();
//   const formData = new FormData(form);
//   const object = Object.fromEntries(formData);
//   const json = JSON.stringify(object);
//   result.innerHTML = "Please wait..."

//     fetch('https://api.web3forms.com/submit', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'Accept': 'application/json'
//             },
//             body: json
//         })
//         .then(async (response) => {
//             let json = await response.json();
//             if (response.status == 200) {
//                 result.innerHTML = json.message;
//             } else {
//                 console.log(response);
//                 result.innerHTML = json.message;
//             }
//         })
//         .catch(error => {
//             console.log(error);
//             result.innerHTML = "Something went wrong!";
//         })
//         .then(function() {
//             form.reset();
//             setTimeout(() => {
//                 result.style.display = "none";
//             }, 3000);
//         });
// });