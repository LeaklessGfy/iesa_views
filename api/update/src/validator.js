var Validator = function() {} 

Validator.prototype.validFields = function validFields(fields, body) {
	if(!this.validBody(body)) {
		return false;
	}

	var status = true;
	if(typeof fields != "undefined" || fields != null) {
		var lgt = fields.length;
		for(var i = 0; i < lgt; i++) {
			if(typeof body[fields[i]] == "undefined" || body[fields[i]] == null) {
				status = false;
			}
		}
	}

	return status;
}

Validator.prototype.validBody = function validBody(body) {
	if(typeof body == "undefined" || body == null) {
		return false;
	}

	return true;
}

Validator.prototype.validId = function validId(id) {
	if(typeof id == "undefined" || isNaN(id)) {
		return false;
	}

	return true;
}

Validator.prototype.isValid = function isValid(fields, body) {
	var state = [];
	state.push(this.validFields(fields, body));

	var lgt = state.length;
	for(var i = 0; i < lgt; i++) {
		if(state[i] == false) {
			return false;
		}
	}

	return true;
}

module.exports = new Validator();
