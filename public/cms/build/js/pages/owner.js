import {viewAllOwner} from "./owner/initOwner.js";
import {initAction} from "./owner/initActionOwner.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllOwner();
	initAction();
});