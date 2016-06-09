var mongojs = require('mongojs');

var credentials = require('./../app/credentials'),
    db = mongojs('mongodb://' + credentials.username + ':' + credentials.password + '@ds025973.mlab.com:25973/views_db', ['users']);

var users = {
  getAll: function(req, res, next) {
    db.users.find(function (err, products) {
        controllers.header(res);
        res.end(JSON.stringify(products));
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
