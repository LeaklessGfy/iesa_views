const 	Utils = require("./utils"),
		Validator = require("./validator"),
		Users = require('./../entity/Users');

var Controller = function(req, res) {
	this._req = req;
	this._res = res;
}

Controller.prototype.send = function send(obj, status) {
	if(obj === null) {
		status = 404;
	}

	this._res.writeHead(status, {'Content-Type': 'application/json; charset=utf-8'});
	this._res.end(JSON.stringify(obj));
}

Controller.prototype.badRequest = function badRequest(msg) {
	this.send(400, {error: msg});
}

Controller.prototype.getAuthConfig = function getAuthConfig() {
	var tokens = {
		id: this._req.headers['tokensid'],
		password: this._req.headers['tokens']
	};

	if(tokens.id == "undefined" || tokens.id == null || tokens.password == "undefined" || tokens.password == null) {
		return false;
	}

	return {
		where: {
			id: tokens.id,
			password: tokens.password
		}
	};
}

Controller.prototype.authAction = function authAction(callback) {
	var self = this;
	var config = this.getAuthConfig();

	if(config == false) {
		return this.badRequest("Wrong tokens!");
	}

	Users.findAll(config).then(function(items) {
		if(items != null && items.length > 0) {
	  		return callback();
		}

		self.badRequest("Bad request!");
	});
}

Controller.prototype.findAll = function findAll(Obj) {
	var self = this;
	var filters = Utils.getFilters(Obj.api.filters, this._req.query);
	var includes = Utils.getIncludes(Obj.api.includes, this._req.query);

	var config = {
		where: filters,
		include: includes
	};

	Obj.findAll(config).then(function(items) {
		self.send(items, 200);
	});
}

Controller.prototype.findOne = function findOne() {
	var self = this;
	var id = this._req.params.id;
		
	if(!Validator.validId(id)) {
		return this.badRequest("Not valid id!");
	};

	var includes = Utils.getIncludes(Obj.api.includes, this._req.query);
	var config = {
		where: {
			id: id
		},
		include: includes
	};

	Obj.findOne(config).then(function(item) {
		self.send(item, 200);
	});
}

Controller.prototype.create = function create(Obj) {
	if(!Validator.isValid(Obj.api.requirements, this._req.body)) {
		return this.badRequest("Missing requirements");			
	};

	var self = this;

	Obj
		.build(this._req.body)
		.save()
		.then(function(item) {
			self.send(item, 201);
		}).catch(function(error) {
			self.send(error, 500);
		});
}

Controller.prototype.edit = function edit(Obj) {
	var id = this._req.params.id;

	if(!Validator.validId(id)) {
		return this.badRequest("Not valid id");
	};

	if(!Validator.isValid(Obj.api.requirements, this._req.body)) {
		return this.badRequest("Missing requirements");		
	};

	var config = {
		where: {
	      id: id
	    }
	};

	Obj.update(req.body, config).then().catch();
} 

module.exports = Controller;
