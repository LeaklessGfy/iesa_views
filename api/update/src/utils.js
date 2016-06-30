var Utils = {
	getFilters: function(arr, query) {
	  var filters = {where: {}};
	  
	  if(typeof arr == "undefined") {
	    return filters;
	  }
	  
	  var lgt = arr.length;
	  for(var i = 0; i < lgt; i++) {
	    var field = arr[i];

	    if(typeof query[field] != "undefined") {
	      filters.where[field] = query[field]
	    }
	  }

	  return filters;
	},

	notBlank: function(fields, body) {
    var errors = [];

    for(var i = 0; i < fields.length; i++) {
      if(body[fields[i]] == undefined) {
        errors.push(fields[i]);
      }
    }

    if(errors.length) {
      var msg = "Field(s) missing";
      return {status: false, msg: msg, fields: errors};
    }

    return {status: true};
  }
}

module.exports = Utils;
