var mysql = require('mysql');

var credentials = require('./../app/credentials'),
    db = mysql.createConnection({
      host: credentials.host,
      user: credentials.user,
      password: credentials.password,
      database: credentials.db
    });

var users = {
  name: "users",

  getAll: function(req, res, next) {
    db.query("SELECT * FROM " + users.name, function(error, results) {
      if(error) throw error;
      controllers.header(res);
      res.end(JSON.stringify(results));
    });

    return next();
  }
};

var controllers = {
  users: users,

  header: function(res) {
    res.writeHead(200, {
        'Content-Type': 'application/json; charset=utf-8'
    });
  }
};

module.exports = controllers;
