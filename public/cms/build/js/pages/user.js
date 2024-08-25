import {viewAllUser} from "./user/initUser.js";
import {initAction} from "./user/initActionUser.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllUser();
	initAction();
});