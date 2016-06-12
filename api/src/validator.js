var validator = {
  body: null,

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
