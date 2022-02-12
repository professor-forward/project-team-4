var Account = (function() {
	var entity = {
		"bud": 0,
		"mea": 0,
		"sho": 0,
		"dec": 0,
		"ent": 0,
		"els": 0
	};

	entity.getBud = function() {
		return (this.bud-(this.mea+this.sho+this.dec+this.ent+this.els));
	}
	entity.getMea = function() {
		return this.mea;
	}
	entity.getSho = function() {
		return this.sho;
	}
	entity.getDec = function() {
		return this.dec;
	}
	entity.getEnt = function() {
		return this.ent;
	}
	entity.getEls = function() {
		return this.els;
	}
	entity.getTotal = function() {
		return (this.mea+this.sho+this.dec+this.ent+this.els);
	}

	entity.setBud = function(num) {
		this.bud = this.bud+num;
	}
	entity.setMea = function(num) {
		this.mea = this.mea+num;
	}
	entity.setSho = function(num) {
		this.sho = this.sho+num;
	}
	entity.setDec = function(num) {
		this.dec = this.dec+num;
	}
	entity.setEnt = function(num) {
		this.ent = this.ent+num;
	}
	entity.setEls = function(num) {
		this.els = this.els+num;
	}

	return entity;
}());

window.onload = function() {
	var total = document.getElementById("total");
	var meals = document.getElementById("meals");
	var shopping = document.getElementById("shopping");
	var decoration = document.getElementById("decoration");
	var entertainment = document.getElementById("entertainment");
	var el = document.getElementById("else");
	var budget = document.getElementById("budget");

	var mea = document.getElementById("mea");
	var sho = document.getElementById("sho");
	var dec = document.getElementById("dec");
	var ent = document.getElementById("ent");
	var els = document.getElementById("els");
	var bud = document.getElementById("bud");

	total.addEventListener(
		"click",
		function () {
			window.alert("Your total tonsumption is "+Account.getTotal());
		}, 
		false);

	meals.addEventListener(
		"click",
		function () {
			window.alert("Your meals consumption is "+ Account.getMea());
		}, 
		false);
	shopping.addEventListener(
		"click",
		function () {
			window.alert("Your shopping consumption is "+ Account.getSho());
		}, 
		false);
	decoration.addEventListener(
		"click",
		function () {
			window.alert("Your decoration consumption is "+ Account.getDec());
		}, 
		false);
	entertainment.addEventListener(
		"click",
		function () {
			window.alert("Your entertainment consumption is "+ Account.getEnt());
		}, 
		false);
	el.addEventListener(
		"click",
		function () {
			window.alert("Your other consumption is "+ Account.getEls());
		}, 
		false);
	budget.addEventListener(
		"click",
		function () {
			window.alert("Your left budget is " + Account.getBud());
		},
		false);

	mea.addEventListener(
		"click",
		function () {
			Account.setMea(parseInt(window.prompt("enter your consumption: ")));
		}, 
		false);	
	sho.addEventListener(
		"click",
		function () {
			Account.setSho(parseInt(window.prompt("enter your consumption: ")));
		}, 
		false);	
	dec.addEventListener(
		"click",
		function () {
			Account.setDec(parseInt(window.prompt("enter your consumption: ")));
		}, 
		false);	
	ent.addEventListener(
		"click",
		function () {
			Account.setEnt(parseInt(window.prompt("enter your consumption: ")));
		}, 
		false);	
	els.addEventListener(
		"click",
		function () {
			Account.setEls(parseInt(window.prompt("enter your consumption: ")));
		}, 
		false);	
	bud.addEventListener(
		"click",
		function () {
			Account.setBud(parseInt(window.prompt("enter your budget: ")));
		}, 
		false);	
	
}