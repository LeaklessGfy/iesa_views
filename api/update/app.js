const http         = require('http'),
      fs           = require('fs'),
      path         = require('path'),
      contentTypes = require('./utils/content-types'),
      sysInfo      = require('./utils/sys-info'),
      env          = process.env;

const restify = require('restify'),
      Seq = require('sequelize'),
      server = restify.createServer();

/* Config */
server.use(restify.acceptParser(server.acceptable));
server.use(restify.queryParser());
server.use(restify.bodyParser());

/* Default */
server.get('/health', function(req, res, next) {
  res.writeHead(200);
  res.end();

  return next();
});

server.get('/info/gen', function(req, res, next) {
  res.header('Content-Type', 'application/json');
  res.header('Cache-Control', 'no-cache, no-store');
  res.end(JSON.stringify(sysInfo[req.url.slice(6)]()));

  return next();
});

/* API */
const entry = "/api/1",
      ControllerInterface = require('./src/controller');

/* Entities */
const Candidates = require('./entity/Candidates'),
      Users = require('./entity/Users'),
      Scripts = require('./entity/Scripts'),
      Swipes = require('./entity/Swipes');

Users.hasMany(Swipes);
Swipes.belongsTo(Users);
Candidates.hasMany(Swipes);
Swipes.belongsTo(Candidates);
Seq.sync;


/* USERS */
server.post(entry + '/users/auth', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.authAction(function() {
    res.writeHead(200);
    res.end(1);
  });

  return next();
});

server.get(entry + '/users', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.findAll(Users);

  return next();
});

server.get(entry + '/users/:id', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.findOne(Users);

  return next();
});

server.post(entry + '/users', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.create(Users);

  return next();
});

server.put(entry + '/users/:id', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.authAction(function() {
    Controller.edit(Users);
  });

  return next();
});


/* SCRIPTS */
server.get(entry + '/scripts', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.findAll(Scripts);

  return next();
});

server.get(entry + '/scripts/:id', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.findOne(Scripts);
  
  return next();
});

server.post(entry + '/scripts', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.create(Scripts);

  return next();
});


/* SWIPES */
server.get(entry + '/swipes', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.findAll(Swipes);

  return next();
});

server.post(entry + '/swipes', function(req, res, next) {
  var Controller = new ControllerInterface(req, res);
  Controller.authAction(function() {
    Controller.create(Swipes, req, res);
  });

  return next();
});

server.listen(env.NODE_PORT || 3000, env.NODE_IP || 'localhost', function () {
  console.log(`Application worker ${process.pid} started...`);
});
