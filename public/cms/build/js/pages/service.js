import {viewAllProperty, viewAllCustomer, countProperty} from "./service/initService.js";
import {initAction} from "./service/initActionService.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllProperty()
	viewAllCustomer()
	countProperty()
	initAction()

	//Initialize Select2
	$('.select').select2()
});