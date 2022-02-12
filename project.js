var Account = (function() {
	var entity = {
		"bud": 0.0,
		"mea": 0.0,
		"sho": 0.0,
		"dec": 0.0,
		"ent": 0.0,
		"els": 0.0
	};

	entity.getBud = function() {
		return this.bud;
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
		return this.els
	}
	entity.getTotal = function() {
		alert(0);
	}

	entity.setBud = function(num) {
		this.bud = num;
	}
	entity.setMea = function(num) {
		this.mea = num;
	}
	entity.setSho = function(num) {
		this.sho = num;
	}
	entity.setDec = function(num) {
		this.dec = num;
	}
	entity.setEnt = function(num) {
		this.ent = num;
	}
}());

window.onload = function() {
	var total = document.getElementById("total");

	total.addEventListener(
		"click",
		function () {
			Account.getTotal();
		}, 
		false);
}