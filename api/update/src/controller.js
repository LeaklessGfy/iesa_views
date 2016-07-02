const 	Utils = require("./utils"),
		Validator = require("./validator"),
		Users = require('./../entity/Users'),
		UsersUnprotected = require('./../entity/UsersUnprotected');

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

	return;
}

Controller.prototype.badRequest = function badRequest(msg) {
	return this.send({error: msg}, 400);
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

	if(config == false || config.where.id != this._req.params.id) {
		return this.badRequest("Wrong tokens!");
	}

	UsersUnprotected.findAll(config).then(function(items) {
		if(items != null && items.length > 0) {
	  		return callback();
		}

		return self.badRequest("Bad request!");
	});
}

Controller.prototype.tryAuth = function tryAuth() {
	var self = this;
	var email = this._req.body.email;
	var password = this._req.body.password;

	if(typeof email == "undefined" || email == null || email == "" || typeof password == "undefined" || password == null || password == "") {
		return this.badRequest("Bad request!");
	}

	var config = {
		where: {
			email: email,
			password: password
		}
	}

	UsersUnprotected.findAll(config).then(function(items) {
		if(items.length > 0) {
			return self.send(items, 200);
		}

		return self.badRequest("Wrong values");
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
		return self.send(items, 200);
	});
}

Controller.prototype.findOne = function findOne(Obj) {
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
		return self.send(item, 200);
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
			return self.send(item, 201);
		}).catch(function(error) {
			return self.send(error, 500);
		});
}

Controller.prototype.edit = function edit(Obj) {
	var self = this;
	var id = this._req.params.id;

	if(!Validator.validId(id)) {
		return this.badRequest("Not valid id");
	};

	var config = {
		where: {
	      id: id
	    }
	};

	Obj.update(this._req.body, config).then(function(a) {
		return self.send(a, 202);
	}).catch();
} 

module.exports = Controller;
