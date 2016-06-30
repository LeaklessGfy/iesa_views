var validator = {
  body: null,
  db: null,

  mustBeInstance: function(fields) {
    return {status: true}; //TODO: Finish the process (fucking callback)

    var errors = [];

    for(var i = 0; i < fields.length; i++) {
      //db.query("SELECT * FROM " + fields[i].instance + " WHERE id = ? LIMIT 1", [body['user_id']], validator.mustBeInstanceProcess);
    }

    if(errors.length) {
      var msg = "Field(s) not instance of desired class";
      return {status: false, msg: msg, fields: errors};
    }

    return {status: true};
  },

  mustBeInstanceProcess: function(error, results) {
    if(error) throw error;

    if(results.length < 1) {

    }
  },

  notBlank: function(fields) {
    var errors = [];

    for(var i = 0; i < fields.length; i++) {
      if(validator.body[fields[i]] == undefined) {
        errors.push(fields[i]);
      }
    }

    if(errors.length) {
      var msg = "Field(s) missing";
      return {status: false, msg: msg, fields: errors};
    }

    return {status: true};
  }
};

module.exports = validator;
