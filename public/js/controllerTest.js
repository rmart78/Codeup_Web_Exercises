(function () {
	"use strict"

	var app = angular.module("controllerTest", []);

	app.controller("CartController", function() {
        
		this.items = [];

		this.newItem = {
			quantity: 1
		};

		this.addItem = function () {
			this.items.push(this.newItem);
			console.log(this.items);
			this.newItem = {
				quantity: 1
			};

		};



    });


})();