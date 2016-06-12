var mysql = require('mysql');

var credentials = require('./../app/credentials'),
    db = mysql.createConnection({
      host: credentials.host,
      user: credentials.user,
      password: credentials.password,
      database: credentials.db
    }),
    validator = require('./validator');

var users = {
  name: "users",
  constraints: [
    {
      validator: validator.notBlank, 
      fields: ["name", "lastname", "age", "status"]
    }
  ],

  getCollection: function(req, res, next) {
    controllers.init(req, res, 0, 200);
    db.query("SELECT * FROM " + users.name, controllers.callback);

    return next();
  },

  getItem: function(req, res, next) {
    controllers.init(req, res, 1, 200);
    db.query("SELECT * FROM " + users.name + " WHERE id = ? LIMIT 1", [req.params.id], controllers.callback);

    return next();
  },

  postItem: function(req, res, next) {
    controllers.init(req, res, 2, 202);
    if(controllers.isValid(users.constraints)) {
      db.query("INSERT INTO " + users.name + " SET ?", req.body, controllers.callback);
    }

    return next();
  }
};

/*
 * type = {0: getCollection, 1: getItem, 2: postItem}
 */
var controllers = {
  users: users,

  req: null,
  res: null,
  type: 0,
  status: 200,
  header: {
    'Content-Type': 'application/json; charset=utf-8'
  },

  init: function(req, res, type, status) {
      controllers.req = req;
      controllers.res = res;
      controllers.type = type;
      controllers.status = status;
  },

  isValid: function(constraints) {
    for(var i = 0; i < constraints.length; i++) {
      validator.body = controllers.req.body;
      var v = constraints[i].validator(constraints[i].fields);
      
      if(!v.status) {
        controllers.badRequest(v.msg, v.fields);
        return v.status;
      }
    }

    return true;
  },

  badRequest: function(msg, fields) {
    controllers.res.writeHead(400, controllers.header);
    controllers.send({error: msg, fields: fields});
  },

  normalizeResult: function(results) {
    var r = results;

    if(results.length > 0 && controllers.type == 1) {
      r = results[0];
    }

    if(controllers.type == 2) {
      r = {
        item: controllers.req.body, 
        details: results.insertId
      };
    }

    return r;
  },

  send: function(data) {
    controllers.res.end(JSON.stringify(data));
  },

  handleError: function(error) {
    throw error;
  },

  handleReturn: function(results) {
    if(controllers.type == 1 && results.length < 1) {
        controllers.status = 404;
    }

    results = controllers.normalizeResult(results);
    
    controllers.res.writeHead(controllers.status, controllers.header);
    controllers.send(results);
  },

  callback: function(error, results) {
    if(error) {
      return controllers.handleError(error);
    }

    controllers.handleReturn(results);
  }
};

module.exports = controllers;
