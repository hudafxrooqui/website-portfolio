const messageInfo = document.querySelector("#message");

// show a message with a type of the input
function showMessage(input, message, type) {
	// get the small element and set the message
	messageInfo.innerText = message;
	// update the class for the input 
	input.className = type ? "success" : "error";
	return type;
}
// if the input is incorrect, false is returned
function showError(input, message) {
	return showMessage(input, message, false);
}
//if the input is correct, true is returned
function showSuccess(input) {
	return showMessage(input, "", true);
}

function hasValue(input, message) {
	if (input.value.trim() === "") {
		// changes colour of the input field if the input field is empty and return error
		input.style.backgroundColor = '#e8998d';
		return showError(input, message);
	}
	return showSuccess(input);
	
}
const form = document.querySelector("#blog");
// prints this messgae if the input field of either is empty
const TITLE_REQUIRED = "Please enter your title";
const CONTENT_REQUIRED = "Please enter your content";

form.addEventListener("submit", function (event) {
	// stop form submission
	event.preventDefault();

	// validate the form
	let titleValid = hasValue( form.elements["title"], TITLE_REQUIRED );
	//if title is true, the TITLE REQUIRED message is printed
	if( titleValid == true )
	{
		let contentValid = hasValue(form.elements["content"], CONTENT_REQUIRED);
		//if content is true, the CONTENT REQUIRED message is printed
		if( contentValid == true)
		{
			//if title and content are valid, form should submit 
			form.submit();
		}
	}
});
//function for clear button, when the button is clicked, the contents of form is cleared
function clearButton()
{
 	//shows window prompt to get the user to confirm if content is cleared
	if ( confirm( "Are you sure you want to clear the content?" ) == true ) {
		//resets form
		form.reset();

	} else {
		// does not clear the form
	   return false;

	}

}

const formAddPost = document.getElementById('formAddPost');

formAddPost.style.display = "block";

const viewBlogBox = document.getElementById('viewblogbox');

viewBlogBox.style.display = "none";

const addPostButton = document.getElementById('addPostButton');

addPostButton.style.display = "none";

const editPostButton = document.getElementById('editPostButton');

editPostButton.style.display = "none";

const clearPostButton = document.getElementById('clearPostButton');

const previewPostButton = document.getElementById('previewPostButton');


// function for preview button
function previewPost()
{
	viewBlogBox.style.display = "block";

	addPostButton.style.display = "block";

	editPostButton.style.display = "block";

	formAddPost.style.display = "none";

	const currentDate = new Date();

	const timestamp = currentDate.getFullYear() + "-" + ("0" + (currentDate.getMonth() + 1)).slice(-2) + "-" + ("0" + (currentDate.getDay() + 1)).slice(-2)
						+ " " + currentDate.toLocaleTimeString();
						
	const postDate = document.querySelector("#postDate");

	postDate.innerText = timestamp;

	const postTitle = document.querySelector("#postTitle");

	postTitle.innerText = form.elements["title"].value;

	const postContent = document.querySelector("#postContent");

	postContent.innerText = form.elements["content"].value;

}

//function for edit button - this will edit a post when it is in preview mode
function editPost()
{
//hides display
	viewBlogBox.style.display = "none";
//hides display
	addPostButton.style.display = "none";
//hides display
	editPostButton.style.display = "none";
//block element
	formAddPost.style.display = "block";

}