const Candidates = require('./../entity/Candidates'),
      Users = require('./../entity/Users'),
      Scripts = require('./../entity/Scripts'),
      Swipes = require('./../entity/Swipes');

const Entities = {
	candidates: Candidates,
	users: Users,
	scripts: Scripts,
	swipes: Swipes
};

var Utils = function() {}

Utils.prototype.getFilters = function getFilters(arr, query) {
	var filters = {};

	if(typeof arr == "undefined" || arr == null) {
		return filters;
	}

	var lgt = arr.length;
	for(var i = 0; i < lgt; i++) {
		var field = arr[i];

		if(typeof query[field] != "undefined") {
	  		filters[field] = query[field]
		}
	}

	return filters;
}

Utils.prototype.getIncludes = function getIncludes(arr, query) {
	var includes = [];

	if(typeof arr == "undefined" || arr == null || typeof query['join'] == "undefined") {
		return includes;
	}

	var joins = query['join'].split(',');

	var lgt = arr.length;
	var lgtJoins = joins.length;
	for(var i = 0; i < lgt; i++) {
		var field = arr[i];

		for(var x = 0; x < lgtJoins; x++) {
			if(joins[x] === field) {
				var include = {
					model: Entities[field]
				};

				includes.push(include);
			}
		}
	}

	console.log(includes);

	return includes;
}

module.exports = new Utils();
